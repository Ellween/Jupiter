<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        
        // $post = Post::orderBy('vote','desc')->get();
        $post= Post::with('users')->orderBy('vote','desc')->get();
        if(Auth::check()){
            $posts_array = $user->posts->pluck('id');

        }
        return view('layout.home', compact('user','post','posts_array'));
    }

    public function single($id)
    {
        $post = Post::find($id);
        $user = Auth::user();
        return view('layout.single_planet', compact('post','user','comments'));
    }
}
