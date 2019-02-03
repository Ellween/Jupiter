<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;

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

        return redirect('/admin_planets');
    }
}
