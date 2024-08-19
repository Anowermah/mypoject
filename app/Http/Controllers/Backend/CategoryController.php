<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::orderBy('id','desc')->get();
        return view('backend.pages.category.index',compact('categories'));

    }

    public function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'category_name' => 'required|string|max:150',
            'category_description' => 'required|string|max:1000',
        ],[
            'category_name.required' => 'Please provide a Category name.',
            'category_name.max' => 'Please provide a Category name below 150 charecter.',
            'category_description.required' => 'Please provide a Category Description.',
            'category_description.max' => 'Please provide a Category Description below 1000 charecter.',
        ]);

        //Insert value in database
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = $this->make_slug($request->category_name);
        $category->category_description = $request->category_description;
        $category->save();

        $notification = array(
            'message' => 'Category Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::back()->with($notification);

    }

}
