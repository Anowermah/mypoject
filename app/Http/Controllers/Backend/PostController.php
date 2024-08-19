<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('id','desc')->get();
        return view('backend.pages.post.index',compact('posts'));

    }
    public function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.post.create',compact('categories'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'title' => 'required|string|max:150',
            'category_id' => 'required|integer',
            'status' => 'required|integer',
            'short_description' => 'required|string',
            'full_description' => 'required|string',
            'post_reference' => 'required|string',
            'seo_keywords' => 'required|string',
        ],[
            'title.required' => 'Please provide a Post Title name.',
            'category_id.required' => 'Please select a Category name.',
            'status.required' => 'Please select Status.',
            'short_description.required' => 'Please select Short Description.',
            'full_description.required' => 'Please select Full Description.',
            'post_reference.required' => 'Please select Post References.',
            'seo_keywords.required' => 'Please select SEO Keys.',
            
        ]);

        //Insert value in database
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $this->make_slug($request->title);
        $post->category_id = $request->category_id;
        /////
        $category=Category::find($request->category_id);
        $post->category_name = $category->category_name;
        /////
        
        $post->status = $request->status;
        $post->short_description = $request->short_description;
        $post->full_description = $request->full_description;
        $post->post_reference = $request->post_reference;
        $post->seo_keywords = $request->seo_keywords;
        $post->user_id = Auth::user()->id;


        if ($request->hasFile('post_img')) {

            //Validation Image
            $this->validate($request,[
                'post_img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ],[
                'post_img.image' => 'Please select a image as like jpeg,png,jpg,gif,svg format.',
            ]);

            $extension = $request->file('post_img')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $file = $request->file('post_img');
            $img = Image::make($file)->resize(1280, 720)->encode();
            Storage::put($fileStore, $img);
            Storage::move($fileStore, 'public/posts/' . $fileStore);

            $post->post_img = $fileStore;
        }





        $post->save();

        $notification = array(
            'message' => 'Post Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::back()->with($notification);

    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('backend.pages.post.edit',compact('post','categories'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'title' => 'required|string|max:150',
            'category_id' => 'required|integer',
            'status' => 'required|integer',
            'short_description' => 'required|string',
            'full_description' => 'required|string',
            'post_reference' => 'required|string',
            'seo_keywords' => 'required|string',
        ],[
            'title.required' => 'Please provide a Post Title name.',
            'category_id.required' => 'Please select a Category name.',
            'status.required' => 'Please select Status.',
            'short_description.required' => 'Please select Short Description.',
            'full_description.required' => 'Please select Full Description.',
            'post_reference.required' => 'Please select Post References.',
            'seo_keywords.required' => 'Please select SEO Keys.',
            
        ]);

        //Insert value in database
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $this->make_slug($request->title);
        $post->category_id = $request->category_id;
        /////
        $category=Category::find($request->category_id);
        $post->category_name = $category->category_name;
        /////
        
        $post->status = $request->status;
        $post->short_description = $request->short_description;
        $post->full_description = $request->full_description;
        $post->post_reference = $request->post_reference;
        $post->seo_keywords = $request->seo_keywords;
        $post->user_id = Auth::user()->id;


        if ($request->hasFile('post_img')) {

            //Delete the old image from folder
            if ($post->post_img) {
                Storage::delete('public/posts/' . $post->post_img);
            }

            //Validation Image
            $this->validate($request,[
                'post_img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ],[
                'post_img.image' => 'Please select a image as like jpeg,png,jpg,gif,svg format.',
            ]);

            $extension = $request->file('post_img')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $file = $request->file('post_img');
            $img = Image::make($file)->resize(1280, 720)->encode();
            Storage::put($fileStore, $img);
            Storage::move($fileStore, 'public/posts/' . $fileStore);

            $post->post_img = $fileStore;
        }





        $post->update();

        $notification = array(
            'message' => 'Post Successfully Updated',
            'alert-type' => 'success'
        );

        return Redirect::back()->with($notification);

    }

    


}
