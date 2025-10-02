<?php

namespace App\Http\Controllers\BackEnd;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Backend\StoreFeedbackRequest;
use App\Http\Requests\Backend\UpdateFeedbackRequest;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Feedback::get();

        return view('backend.user_feedback.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user_feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackRequest $request)
    {
        $requestArray = $request->all();

        if($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $fileName = time().str_random(10);
            $file = (string) Image::make($request->file('user_image'))->encode('webp' , 75)->save(public_path('contact/'.$fileName , 'webp'));
            // $file->move(public_path('contact'), $fileName);
        }


        $requestArray = ['user_image' => $fileName] + $request->all();

        $row = Feedback::create($requestArray);

        Session::flash('flash_message', 'Feedback Infomation added successfully!');
        return redirect()->route('user_feedback.index');
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
        $row = Feedback::findorFail($id);

        return view('backend.user_feedback.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackRequest $request, $id)
    {
        $requestArray = $request->all();

        $about = Feedback::findorFail($id);

        if($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $fileName = time().str_random(10);
            $file = (string) Image::make($request->file('user_image'))->encode('webp' , 75)->save(public_path('contact/'.$fileName , 'webp'));
            // $file->move(public_path('contact'), $fileName);

            if($about->user_image !== NULL) {
                if (file_exists(public_path('contact/'. $about->user_image))) {
                    unlink(public_path('contact/'. $about->user_image));
                }
            }
        }

        $requestArray = [
        'user_image' => $request->hasFile('user_image') ? $fileName : $about->user_image, 
        ] + $request->all();

        $about->update($requestArray);

        Session::flash('flash_message', 'Feedback Information updated successfully!');
        return redirect()->route('user_feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventCategery = Feedback::findorFail($id);

        if($eventCategery->user_image !== NULL) {
            if(file_exists(public_path('contact/'. $eventCategery->user_image))) {
                unlink(public_path('contact/'. $eventCategery->user_image));
            }
        }

        $eventCategery->delete();

        Session::flash('flash_message', 'Feedback Information deleted successfully!');
        return redirect()->route('user_feedback.index');
    }
}
