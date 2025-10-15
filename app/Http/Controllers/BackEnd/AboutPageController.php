<?php

namespace App\Http\Controllers\BackEnd;

use App\AboutPage;
use App\Branch;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateAboutPageRequest;
use App\Http\Requests\StoreAboutPageRequest;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return redirect()->route('about_page.edit' , 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about_page.create', compact('row' , 'restaurants'));
        
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
        $row = AboutPage::findorFail($id);

        return view('backend.about_page.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutPageRequest $request, $id)
    {
        $requestArray = $request->all();

        $about = AboutPage::findorFail($id);

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

        if($request->hasFile('institution_membership_image')) {
            $file01 = $request->file('institution_membership_image');
            $fileName01 = time().str_random(10).'.'.$file01->getClientOriginalExtension();
            $file01->move(public_path('about'), $fileName01);

            if($about->institution_membership_image !== NULL) {
                if (file_exists(public_path('about/'. $about->institution_membership_image))) {
                    unlink(public_path('about/'. $about->institution_membership_image));
                }
            }
        }

        if($request->hasFile('second_image')) {
            $file0 = $request->file('second_image');
            $fileName0 = time().str_random(10).'.'.$file0->getClientOriginalExtension();
            $file0->move(public_path('about'), $fileName0);

            if($about->second_image !== NULL) {
                if (file_exists(public_path('about/'. $about->second_image))) {
                    unlink(public_path('about/'. $about->second_image));
                }
            }
        }

        if($request->hasFile('vision_image')) {
            $file1 = $request->file('vision_image');
            $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
            $file1->move(public_path('about'), $fileName1);

            if($about->vision_image !== NULL) {
                if (file_exists(public_path('about/'. $about->vision_image))) {
                    unlink(public_path('about/'. $about->vision_image));
                }
            }
        }

        if($request->hasFile('mission_image')) {
            $file2 = $request->file('mission_image');
            $fileName2 = time().str_random(10).'.'.$file2->getClientOriginalExtension();
            $file2->move(public_path('about'), $fileName2);

            if($about->mission_image !== NULL) {
                if (file_exists(public_path('about/'. $about->mission_image))) {
                    unlink(public_path('about/'. $about->mission_image));
                }
            }
        }

        if($request->hasFile('goal_image')) {
            $file3 = $request->file('goal_image');
            $fileName3 = time().str_random(10).'.'.$file3->getClientOriginalExtension();
            $file3->move(public_path('about'), $fileName3);

            if($about->goal_image !== NULL) {
                if (file_exists(public_path('about/'. $about->goal_image))) {
                    unlink(public_path('about/'. $about->goal_image));
                }
            }
        }


        $requestArray = [
        'about_image' => $request->hasFile('about_image') ? $fileName : $about->about_image, 
        'vision_image' => $request->hasFile('vision_image') ? $fileName1 : $about->vision_image, 
        'mission_image' => $request->hasFile('mission_image') ? $fileName2 : $about->mission_image, 
        'goal_image' => $request->hasFile('goal_image') ? $fileName3 : $about->goal_image, 
        'second_image' => $request->hasFile('second_image') ? $fileName0 : $about->second_image, 
        'institution_membership_image' => $request->hasFile('institution_membership_image') ? $fileName01 : $about->institution_membership_image, 
        ] + $request->all();

        $about->update($requestArray);

        Session::flash('flash_message', 'About Page updated successfully!');
        return redirect()->route('about_page.edit' , $about->id);
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
