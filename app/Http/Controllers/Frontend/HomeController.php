<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.dashboard');
    }
    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    public function newsGallery()
    {
        $posts=Post::orderBy('id','desc')->where('category_name','LIKE','%শুব্বান নিউজ%')->get();
        return view('frontend.pages.newsGallery',compact('posts'));
    }
    public function archives()
    {
        return view('frontend.pages.archives');
    }

    public function postDetails($id)
    {
        $post=Post::find($id);
        return view('frontend.pages.postDetails',compact('post'));
    }

    public function categoryPost($category_id,$slug)
    {
        $category=Category::find($category_id);
        $posts=Post::orderBy('id','desc')->where('category_id',$category_id)->get();
        return view('frontend.pages.categoryPost',compact('posts','category'));
    }




}
