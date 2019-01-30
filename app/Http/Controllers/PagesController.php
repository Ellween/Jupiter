<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $post = Post::all();
        return view('layout.home', compact('user','post'));
    }

    public function single($id)
    {
        $post = Post::find($id);
        $user = Auth::user();
        return view('layout.single_planet', compact('post','user'));
    }
}
