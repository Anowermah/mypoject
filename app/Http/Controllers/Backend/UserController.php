<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::orderBy('id','desc')->where('role_id', '!=', 1)->get();

        $roles = Role::orderBy('id','desc')->where('id', '!=', 1)->get();

        return view('backend.pages.userManagement.user',compact('users','roles'));
    }

    public function userStore(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:150',

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('profile_photo')) {

            //Validation Image
            $this->validate($request,[
                'profile_photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ],[
                'profile_photo.image' => 'Please select a image as like jpeg,png,jpg,gif,svg format.',
            ]);

            $extension = $request->file('profile_photo')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $file = $request->file('profile_photo');
            $img = Image::make($file)->resize(300, 300)->encode();
            Storage::put($fileStore, $img);
            Storage::move($fileStore, 'public/user_profiles/' . $fileStore);

            $user->profile_photo = $fileStore;
        }

        $user->save();

        $notification = array(
            'message' => 'User Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::route('user.index')->with($notification);

    }

    public function userEdit($id){
        $user = User::find($id);

	    return response()->json([
	      'data' => $user
	    ]);

    }

    public function userUpdate(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:150',

        ]);

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('profile_photo')) {

            //Delete the old image from folder
            if ($user->profile_photo) {
                Storage::delete('public/user_profiles/' . $user->profile_photo);
            }

            //Validation Image
            $this->validate($request,[
                'profile_photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ],[
                'profile_photo.image' => 'Please select a image as like jpeg,png,jpg,gif,svg format.',
            ]);

            $extension = $request->file('profile_photo')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $file = $request->file('profile_photo');
            $img = Image::make($file)->resize(300, 300)->encode();
            Storage::put($fileStore, $img);
            Storage::move($fileStore, 'public/user_profiles/' . $fileStore);

            $user->profile_photo = $fileStore;
        }

        $user->update();

        $notification = array(
            'message' => 'User Successfully Updated',
            'alert-type' => 'success'
        );

        return Redirect::route('user.index')->with($notification);

    }

    public function userDestroy($id){
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'User Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect::route('user.index')->with($notification);

    }


}
