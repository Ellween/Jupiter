<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        
        return view('admin.index', compact('user' , 'users'));
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        
        return redirect('/admin');
    }

    public function planets()
    {
        $user = Auth::user();
        $post = Post::all();

        return view('admin.admin_planets', compact('user' , 'post'));
    }

    public function post_delete($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        Session::flash('danger','You Deleted Post Successfully!');


        return redirect('/admin_planets');
    }

    public function edit_post(Request $request , $post_id)
    {

        $post = Post::find($post_id);



        if ($request->hasFile('planet_img')) {
            $image = $request->file('planet_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
          }

        $post->name = $request->planet_name;
        $post->description = $request->description;
        $post->image = $name;

        $post->save();

        Session::flash('success','You Edited Post Successfully!');


        return redirect("/admin_planets");
    }
}
