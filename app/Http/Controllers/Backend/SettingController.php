<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderBy('id','desc')->get();
        return view('backend.pages.settings.index',compact('settings'));
    }

    public function settingStore(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'key' => 'required|string|max:150',

        ]);

        $setting = new Setting();
        $setting->key = $request->key;

        if ($request->hasFile('image')) {

            //Validation Image
            $this->validate($request,[
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ],[
                'image.image' => 'Please select a image as like jpeg,png,jpg,gif,svg format.',
            ]);

            $extension = $request->file('image')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $file = $request->file('image');
            $img = Image::make($file)->resize(300, 300)->encode();
            Storage::put($fileStore, $img);
            Storage::move($fileStore, 'public/settings/' . $fileStore);

            $setting->image = $fileStore;

        }else{
            $this->validate($request,[
                'value' => 'required|string',
    
            ]);
            $setting->value = $request->value;
        }


        $setting->save();

        $notification = array(
            'message' => 'Setting Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::route('setting.index')->with($notification);

    }

    public function settingEdit($id){
        $setting = Setting::find($id);

	    return response()->json([
	      'data' => $setting
	    ]);

    }

    public function settingUpdate(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'key' => 'required|string|max:150',

        ]);

        $setting = Setting::find($request->id);
        $setting->key = $request->key;

        if ($request->hasFile('image')) {
            //Validation Image
            $this->validate($request,[
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ],[
                'image.image' => 'Please select a image as like jpeg,png,jpg,gif,svg format.',
            ]);

            //Delete the old image from folder
            if ($setting->image) {
                Storage::delete('public/settings/' . $setting->image);
            }
            
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $file = $request->file('image');
            $img = Image::make($file)->resize(300, 300)->encode();
            Storage::put($fileStore, $img);
            Storage::move($fileStore, 'public/settings/' . $fileStore);

            $setting->image = $fileStore;

        }else{
            $this->validate($request,[
                'value' => 'required|string',
    
            ]);
            $setting->value = $request->value;
        }

        $setting->update();

        $notification = array(
            'message' => 'Setting Successfully Updated',
            'alert-type' => 'success'
        );

        return Redirect::route('setting.index')->with($notification);

    }

    public function settingDestroy($id){
        $setting = Setting::find($id);
        $setting->delete();

        $notification = array(
            'message' => 'Setting Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect::route('setting.index')->with($notification);

    }





}
