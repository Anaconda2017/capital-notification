<?php

namespace App\Http\Controllers\BackEnd;

use App\Newsletter;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Backend\StoreNewsletterRequest;
use App\Http\Requests\Backend\UpdateNewsletterRequest;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Newsletter::get();

        return view('backend.newsletter.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.newsletter.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestArray = $request->all();

        $dateNow = Carbon::now('Africa/Cairo')->format('Y-m-d');
        $timeNow = Carbon::now('Africa/Cairo')->format('h:i:s');

        $requestArray = [
            'newsletter_date' => $dateNow,
            'newsletter_time' => $timeNow,
            'newsletter_status' => 1,
            ] + $request->all();

        $newNewsLetter = Newsletter::create($requestArray);

        // $users = User::where('active_status' , 1)->where('user_active_status' , 1)->where('email_verified_at' , '!=' , null)->where('role' , 'user')->get()->pluck('email')->toArray();
        
        // foreach($users as $user){
        //     $username = $user;
        //     $titleNewsletter = $newNewsLetter->newsletter_title ;
        //     $textNewsLetter = $newNewsLetter->newsletter_text ;
            
        //     Mail::send('frontend.newslettermail' , [
        //         'useremail' => $username,
        //         'titleNewsletter' => $titleNewsletter,
        //         'textNewsLetter' => $textNewsLetter
        //         ], function($message) use (
        //             $username,
        //             $titleNewsletter
        //             )
        //         {
        //             $message->from('bonder@digitalbondmena.com', 'EHA Guide');
        //             $message->subject($titleNewsletter);
        //             $message->to($username);
                    
        //         });  
        // }  
        

        Session::flash('flash_message', 'Newsletter added successfully!');
        return redirect()->route('newsletter.index');

  
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Newsletter::findorFail($id);

        return view('backend.newsletter.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Newsletter::findorFail($id);
        
        $requestArray = $request->all();

        $service->update($requestArray);

        Session::flash('flash_message', 'Newsletter Updated successfully!');
        return redirect()->route('newsletter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $service = Newsletter::findorFail($id);

        $service->update([
            'newsletter_status' => 0
            ]);  

            Session::flash('flash_message', 'Newsletter Disabled successfully!');
            return redirect()->route('newsletter.index');
    }
    
    public function recover($id)
    {
        
        $service = Newsletter::findorFail($id);

        $service->update([
            'newsletter_status' => 1
            ]);
         
            Session::flash('flash_message', 'Newsletter recover successfully!');
            return redirect()->route('newsletter.index');
    }
}
