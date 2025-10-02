<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreBlogSubCategoryRequest;
use App\Http\Requests\UpdateBlogSubCategoryRequest;
use Illuminate\Http\Request;


class BlogSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = SubCategory::latest()->paginate(10);

        return view('backend.blogSubCategory.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getcategories = Category::get();
        return view('backend.blogSubCategory.create' , compact('getcategories'));
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

        if($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $fileName = time().str_random(10);
            $file->move(public_path('subcategory'), $fileName);
        } else {
            $fileName = null;
        }



        $requestArray = [
            'main_image' => $fileName , 
            ] + $request->all();


            SubCategory::create($requestArray);

        Session::flash('flash_message', ' Sub Category added successfully!');
        return redirect()->route('blogSubCategory.index');
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
        $row = SubCategory::findorFail($id);
        $getcategories = Category::get();

        return view('backend.blogSubCategory.edit', compact('row' , 'getcategories'));
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
        $subcategory = SubCategory::findorFail($id);

        if($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('subcategory'), $fileName);

            if($subcategory->main_image !== NULL) {
                if(file_exists(public_path('subcategory/'. $subcategory->main_image))) {
                    unlink(public_path('subcategory/'. $subcategory->main_image));
                }
            }
        }

 
        $requestArray = 
        [
            'main_image' => $request->hasFile('main_image') ? $fileName : $subcategory->main_image , 
            
        ] + $request->all();


        $subcategory->update($requestArray);

        Session::flash('flash_message', 'Sub Category updated successfully!');
        return redirect()->route('blogSubCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $client = SubCategory::findorFail($id);
        
        $client->update([
            'active_status' => 0
        ]);

        
        Session::flash('flash_message', 'Sub Category Disabled successfully!');
        return redirect()->route('blogSubCategory.index');
    }

    public function recover($id)
    {
        $client = SubCategory::findorFail($id);
        $client->update([
            'active_status' => 1
        ]);


        Session::flash('flash_message', ' Sub Category Revocer successfully!');
        return redirect()->route('blogSubCategory.index');
    }

    function generateRandomString($length = 4) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
