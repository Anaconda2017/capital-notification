<?php

namespace App\Http\Controllers\BackEnd;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreFeedbackContactRequest;
use App\Http\Requests\UpdateFeedbackContactRequest;

class FeedbackContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $rows = Contact::latest()->get();
            
        

            return view('backend.feedback-contact.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.feedback-contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackContactRequest $request)
    {
        $requestArray = $request->all();

        $row = Contact::create($requestArray);

        Session::flash('flash_message', 'FeedbackContact added successfully!');
        return redirect()->route('feedback-contact.index');
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
        $row = Contact::findorFail($id);

        return view('backend.feedback-contact.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackContactRequest $request, $id)
    {
        $branch = Contact::findorFail($id);

        $requestArray = $request->all();

        $branch->update($requestArray);

        Session::flash('flash_message', 'Feedback Contact updated successfully!');
        return redirect()->route('feedback-contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Contact::findorFail($id);

        $branch->delete();

        Session::flash('flash_message', 'Feedback Contact deleted successfully!');
        return redirect()->route('feedback-contact.index');
    }
}
