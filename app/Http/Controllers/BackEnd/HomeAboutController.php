<?php

namespace App\Http\Controllers\BackEnd;

use App\HomeAbout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateHomeAboutRequest;
use App\Http\Requests\StoreHomeAboutRequest;

class HomeAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return redirect()->route('homeAbout.edit' , 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.homeAbout.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

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
        $row = HomeAbout::findorFail($id);

        return view('backend.homeAbout.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeAboutRequest $request, $id)
    {
        $requestArray = $request->all();

        $about = HomeAbout::findorFail($id);

        if($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('about'), $fileName);

            if($about->main_image !== NULL) {
                if (file_exists(public_path('about/'. $about->main_image))) {
                    unlink(public_path('about/'. $about->main_image));
                }
            }
        }

        if($request->hasFile('second_image')) {
            $file1 = $request->file('second_image');
            $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
            $file1->move(public_path('about'), $fileName1);

            if($about->second_image !== NULL) {
                if (file_exists(public_path('about/'. $about->second_image))) {
                    unlink(public_path('about/'. $about->second_image));
                }
            }
        }


        $requestArray = [
        'main_image' => $request->hasFile('main_image') ? $fileName : $about->main_image, 
        'second_image' => $request->hasFile('second_image') ? $fileName1 : $about->second_image, 
        ] + $request->all();

        $about->update($requestArray);

        Session::flash('flash_message', 'Home About updated successfully!');
        return redirect()->route('homeAbout.edit' , $about->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
