<?php

namespace App\Http\Controllers\BackEnd;

use App\User;
use App\Blog;
use App\BlogCategory;
use App\SubCategory;
use App\HomeService;
use App\ProtocolScope;
use App\Branch;
use App\Client;
use App\Product;
use App\Checkout;
use App\Category;
use App\Contact;
use Carbon\Carbon;
use App\OrderDetail;
use App\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\Newsletter;
use App\NotificationSender;
use Illuminate\Support\Facades\Session;
use Google\Client as GoogleClient;
use App\ProtocolPatientHistory;

class DashboardController extends Controller
{
    public function index() {
        
                $subcategory =  User::where('active_status' , 1)->get()->count();        
                $users = User::get()->count();        
                $protocolScopes = ProtocolScope::get()->count();        
                $newsletters = Newsletter::get()->count();        
        
                return view('backend.dashboard' , compact('users' , 'subcategory' , 'protocolScopes' , 'newsletters'));
    
    }
    
    public function notificationsend() {
        return view('backend.notificationsend');    
        
    }
    
    public function patientindex()
    {
        // Fetch the data along with the related user
        $userHistorys = ProtocolPatientHistory::with('userdata:id,name,subject_title') // Select only necessary fields
            ->select('protocol_id', 'protocol_name', 'sub_category_name', 'patient_name', 'patient_case', 'user_id' , 'created_at')
            ->latest()
            ->get()
            ->toArray();
    
        if ($userHistorys) {
            // Filter out duplicates based on `patient_name` and `patient_case`
            $userHistorys = array_values(array_reduce($userHistorys, function ($carry, $item) {
                $key = $item['patient_name'] . '|' . $item['patient_case']; // Unique key
                if (!isset($carry[$key])) {
                    $carry[$key] = $item;
                }
                return $carry;
            }, []));
    
            // Add `protocol_name`, `patient_name`, `user_name`, and `user_department` to the result
            $userHistorys = array_map(function ($item) {
                return [
                    'user_id' => $item['user_id'],
                    'user_name' => $item['userdata']['name'] ?? 'N/A', // Default if user not found
                    'user_department' => $item['userdata']['subject_title'] ?? 'N/A', // Default if user not found
                    'sub_category_name' => $item['sub_category_name'],
                    'protocol_id' => $item['protocol_id'],
                    'protocol_name' => $item['protocol_name'],
                    'patient_name' => $item['patient_name'],
                    'patient_case' => $item['patient_case'],
                ];
            }, $userHistorys);
    
    
    
        } else {
            $userHistorys = null;
        }
    
            // dd($userHistorys);
        // Return to the view
        return view('backend.patientindex', compact('userHistorys'));
    }

    
    public function patientdetails($id , $case) {
        $userHistoryfirst = ProtocolPatientHistory::where('patient_name' , $id)->where('patient_case' , $case)->get()->first();
        $userHistorys = ProtocolPatientHistory::where('patient_name' , $id)->where('patient_case' , $case)->get();
        
        return view('backend.patientdetails' , compact('userHistorys' , 'userHistoryfirst'));   
    }
    
  



    function sendPushNotification(Request $request)
    {
        $message = $request->textmessage;
        $title = $request->titlemessage;
    
        // Get all unique device tokens from the database
        $userTokens = User::whereNotNull('device_token')->pluck('device_token')->toArray();
        $uniqueArray = array_unique($userTokens);
        $tokensArray = array_chunk($uniqueArray, 1000); // Break tokens into chunks of 1000 for batch processing
    
        // Path to the Firebase service account credentials JSON file
        $credentialsFilePath = "json/zisushi-f9f9a-b60fded4d578.json";
    
        // Initialize the Google Client
        $client = new GoogleClient();
        $client->setAuthConfig($credentialsFilePath);
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
        $client->useApplicationDefaultCredentials();
        $client->refreshTokenWithAssertion();
        $token = $client->getAccessToken();
    
        // Get the access token
        $accessToken = $token['access_token'];
    
        // Set the request headers
        $header = [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json',
        ];
    
        // Prepare the notification content
        $notification = [
            "title" => $title,
            "body" => $message,
        ];
    
        // Send notifications
        foreach ($tokensArray as $chunk) {
            foreach ($chunk as $deviceToken) {
                // Prepare the payload for each token
                $postdata = [
                    "message" => [
                        "token" => $deviceToken,
                        "notification" => $notification,
                    ],
                ];
    
                $dataString = json_encode($postdata);
    
                // Initialize cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/v1/projects/zisushi-f9f9a/messages:send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    
                // Execute the request and handle response
                $result = curl_exec($ch);
    
                // Error handling
                if ($result === false) {
                    $errorMsg = curl_error($ch);
                    curl_close($ch);
                    continue; // Log and skip the failed request
                }
    
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
    
                // Log any non-200 response for debugging
                if ($httpCode !== 200) {
                    // Log or handle the error based on $result
                    // Example: Log::error("FCM API Error: " . $result);
                }
            }
        }
        
        $dateNow = Carbon::now('Africa/Cairo')->format('Y-m-d');
                 $timeNow = Carbon::now('Africa/Cairo')->format('h:i:s');
                
                
    
        return redirect()->route('notificationsend'); 
    }
    
    public function sendManagerNotification(Request $request)
    {
        $message = $request->textmessage;
        $title = $request->titlemessage;
    
        // Get all unique device tokens from the database
        
        $tokensArray = $request->device_tokens; // Break tokens into chunks of 1000 for batch processing
    
        // Path to the Firebase service account credentials JSON file
        $credentialsFilePath = "json/eha-guide-9ceb564af266.json";
    
        // Initialize the Google Client
        $client = new GoogleClient();
        $client->setAuthConfig($credentialsFilePath);
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
        $client->useApplicationDefaultCredentials();
        $client->refreshTokenWithAssertion();
        $token = $client->getAccessToken();
    
        // Get the access token
        $accessToken = $token['access_token'];
    
        // Set the request headers
        $header = [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json',
        ];
    
        // Prepare the notification content
        $notification = [
            "title" => $title,
            "body" => $message,
        ];
    
        // Send notifications
        foreach ($tokensArray as $chunk) {
            foreach ($chunk as $deviceToken) {
                // Prepare the payload for each token
                $postdata = [
                    "message" => [
                        "token" => $deviceToken,
                        "notification" => $notification,
                    ],
                ];
    
                $dataString = json_encode($postdata);
    
                // Initialize cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/v1/projects/eha-guide/messages:send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    
                // Execute the request and handle response
                $result = curl_exec($ch);
    
                // Error handling
                if ($result === false) {
                    $errorMsg = curl_error($ch);
                    curl_close($ch);
                    continue; // Log and skip the failed request
                }
    
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
    
                // Log any non-200 response for debugging
                if ($httpCode !== 200) {
                    // Log or handle the error based on $result
                    // Example: Log::error("FCM API Error: " . $result);
                }
            }
        }
        
        $dateNow = Carbon::now('Africa/Cairo')->format('Y-m-d');
                 $timeNow = Carbon::now('Africa/Cairo')->format('h:i:s');
                
                 $notification = NotificationSender::create([
                     'notification_title' => $title,
                     'notification_text' => $message,
                     'notification_date' => $dateNow,
                     'notification_time' => $timeNow, 
                     ]);
    
        return true; 
    }


    public function getformcontact() {
        $rows = Contact::orderBy('id', 'desc')->get();

        
        return view('backend.getformcontact', compact('rows'));

    }

    public function getcontact($id) {
        $row = Contact::where('id' , $id)->get()->first();

        return view('backend.getcontact', compact('row'));
    }
    
    public function restaurantAdminIndex(){
        $users = User::where('role' , 'super-admin')->get();
        return view('backend.restaurantAdminIndex', compact('users'));
    }
    
    public function restaurantAdminUpdateStatus($id , Request $request){
        $user = User::where('id' , $id)->get()->first();
        $user->update([
            'account_domain_status' => $request->account_domain_status,
            ]);
        Session::flash('flash_message', 'Status updated successfully');
        return redirect()->route('admin.restaurantAdminIndex');    
    }
    
    public function restaurantAdminShow($id){
        $user = User::where('id' , $id)->get()->first();
        
        return view('backend.restaurantAdminShow', compact('user'));
    }
    
}
