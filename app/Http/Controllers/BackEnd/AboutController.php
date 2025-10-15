<?php

namespace App\Http\Controllers\BackEnd;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Backend\UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutUs::findorFail(1);

        return view('backend.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $row = AboutUs::findorFail($id);

        return view('backend.about.edit', compact('row'));
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
        $requestArray = $request->all();

        $about = AboutUs::findorFail($id);

        if($request->hasFile('about_image')) {
            $file = $request->file('about_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('about'), $fileName);

            if($about->about_image !== NULL) {
                if (file_exists(public_path('about/'. $about->about_image))) {
                    unlink(public_path('about/'. $about->about_image));
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

        $requestArray = ['about_image' => $request->hasFile('about_image') ? $fileName : $about->about_image, 
        'second_image' => $request->hasFile('second_image') ? $fileName1 : $about->second_image, 
        ] + $request->all();

        $about->update($requestArray);

        Session::flash('flash_message', 'About updated successfully!');
        return redirect()->route('about.edit' , $about->id);
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
