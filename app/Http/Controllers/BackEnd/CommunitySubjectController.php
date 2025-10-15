<?php

namespace App\Http\Controllers\BackEnd;

use App\CommunitySubject;
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

class CommunitySubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = CommunitySubject::get();

        return view('backend.subject.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.subject.create');

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

        $newNewsLetter = CommunitySubject::create($requestArray);
        

        Session::flash('flash_message', 'Community Subject added successfully!');
        return redirect()->route('subject.index');

  
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
        $row = CommunitySubject::findorFail($id);

        return view('backend.subject.edit', compact('row'));

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
        $service = CommunitySubject::findorFail($id);
        
        $requestArray = $request->all();

        $service->update($requestArray);

        Session::flash('flash_message', 'Community Subject Updated successfully!');
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $service = CommunitySubject::findorFail($id);

        $service->update([
            'status' => 0
            ]);  

            Session::flash('flash_message', 'Community Subject Disabled successfully!');
            return redirect()->route('subject.index');
    }
    
    public function recover($id)
    {
        
        $service = CommunitySubject::findorFail($id);

        $service->update([
            'status' => 1
            ]);
         
            Session::flash('flash_message', 'Community Subject recover successfully!');
            return redirect()->route('subject.index');
    }
}
