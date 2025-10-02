<?php

namespace App\Http\Controllers\BackEnd;

use App\Branch;
use App\ContactUs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateContactUsRequest;
use App\Http\Requests\StoreContactUsRequest;
use App\Restaurant;

class ContactUsController extends Controller
{
    public function index() {
        return redirect()->route('contact_us.edit' , 1);
    
    }
    
    public function create() {

        return view('backend.contact_us.create');
    }

    public function store(StoreContactUsRequest $request){

        

        $requestArray =  $request->all();    


        $contactData = ContactUS::create($requestArray);

        Session::flash('flash_message', 'Contact Us Created successfully');
        // return redirect()->route('contact_us.index');
        return redirect()->route('contact_us.edit' , $contactData->id);
    }

    public function edit($id) {
        $row = ContactUs::findorFail($id);

        return view('backend.contact_us.edit', compact('row'));
    }

    public function update(UpdateContactUsRequest $request, $id) {
        $contact = ContactUs::findorFail($id);

        $requestArray = $request->all();


        $contact->update($requestArray);

        Session::flash('flash_message', 'Contact Us updated successfully');
        return redirect()->route('contact_us.edit' , $contact->id);
    }
}
