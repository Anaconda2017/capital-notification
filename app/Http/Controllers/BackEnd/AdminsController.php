<?php

namespace App\Http\Controllers\BackEnd;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateUserRequest;
use App\CommunitySubject;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role === 'admin') {
            $rows = User::latest()->paginate(10);
            return view('backend.admins.index', compact('rows'));
        }
        abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role' , 'user')->get();
        $departments = CommunitySubject::where('status' , 1)->get();
            return view('backend.admins.create' , compact('users' , 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $departmentID = $request->department_id;
        
        $subject = CommunitySubject::where('id' , $departmentID)->get()->first();
        

        $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'role' => 'user',
                'provider' => 'site',
                'privacy_status' => 1,
                'active_status' => $request->active_status ,
                'password' =>  Hash::make(123456789),
                'email_verified_at' => 1,
                'manager_id' => $request->user_id,
                'subject_id' => $subject->id ,
                'subject_title' => $subject->title ,
        ]);

       Session::flash('flash_message', 'User Added successfully!');
       return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->role === 'admin') {
             $users = User::where('role' , 'user')->get();
             $departments = CommunitySubject::where('status' , 1)->get();
            $row = User::findorFail($id);
            return view('backend.admins.edit', compact('row' , 'users' , 'departments'));
        }
        abort(403);
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
        $user = User::findorFail($id);
        
        $departmentID = $request->department_id;
        
        $subject = CommunitySubject::where('id' , $departmentID)->get()->first();

        $user->update([
            'name' => $request['name'],
            'phone' => $request['mobile'],
            'active_status' => $request->active_status  ,
            'manager_id' => $request->user_id,
            'subject_id' => $subject->id ,
            'subject_title' => $subject->title ,
       ]);

       Session::flash('flash_message', 'User updated successfully');
       return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $user->update([
            'active_status' => 0
            ]);

        Session::flash('flash_message', 'User Disabled successfully!');
        return redirect()->route('admins.index');
    }
    
    public function recover($id)
    {
        $user = User::findorFail($id);
        $user->update([
            'active_status' => 1
            ]);

        Session::flash('flash_message', 'User Enabled successfully!');
        return redirect()->route('admins.index');
    }
}
