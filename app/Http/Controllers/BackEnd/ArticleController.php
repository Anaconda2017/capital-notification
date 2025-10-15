<?php

namespace App\Http\Controllers\BackEnd;

use App\Article;
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

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Article::get();

        return view('backend.article.index', compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.article.create');

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
        
        if($request->hasFile('article_image')) {
            $file = $request->file('article_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('articles'), $fileName);
        }

        $requestArray = [
            'article_date' => $dateNow,
            'article_time' => $timeNow,
            'article_status' => $request->article_status,
            'article_image' => $fileName
            ] + $request->all();

        $newNewsLetter = Article::create($requestArray);

        
        

        Session::flash('flash_message', 'Article added successfully!');
        return redirect()->route('article.index');

  
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
        $row = Article::findorFail($id);

        return view('backend.article.edit', compact('row'));

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
        $service = Article::findorFail($id);
        
        if($request->hasFile('article_image')) {
            $file = $request->file('article_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('articles'), $fileName);

            if($service->article_image !== NULL) {
                if(file_exists(public_path('articles/'. $service->article_image))) {
                    unlink(public_path('articles/'. $service->article_image));
                }
            }
        }
        
        $requestArray =   ['article_image' => $request->hasFile('article_image') ? $fileName : $service->article_image] + $request->all();

        $service->update($requestArray);

        Session::flash('flash_message', 'Article Updated successfully!');
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $service = Article::findorFail($id);

        $service->update([
            'article_status' => 0
            ]);  

            Session::flash('flash_message', 'Article Disabled successfully!');
            return redirect()->route('article.index');
    }
    
    public function recover($id)
    {
        
        $service = Article::findorFail($id);

        $service->update([
            'article_status' => 1
            ]);
         
            Session::flash('flash_message', 'Article recover successfully!');
            return redirect()->route('article.index');
    }
}
