<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use Hash;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $post = Post::all();

        return view('user.index',compact('user','post'));  
    }

    public function settings()
    {
        $user = Auth::user();
        $post = Post::all();
        return view('user.settings',compact('user','post'));  

    }

    public function change(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->new_name;
        
        if($request->hasFile('new_avatar')){
            $new_avatar = $request->file('new_avatar');
            $new_avatar_name = time() . '.' . $new_avatar->getClientOriginalExtension();
            $location = public_path('/images');
            $new_avatar->move($location, $new_avatar_name);       
          }




        if(Hash::check($request->old_pass,$user->password))
        {

            $user->password = Hash::make($request->new_pass);

        }

        $user->avatar = $new_avatar_name;

        $user->save();
        return view('user.settings' , compact('user'));
    }

    public function favorite()
    {
        $user = Auth::user();

        $post = $user->posts()->get();

        return view('user.favorite',compact('post','user'));

    }
}
