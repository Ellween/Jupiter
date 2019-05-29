<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Post;
use App\Comment;
use App\Report;
use App\Category;
use App\Replay;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {    
        
        
        $user = Auth::user();
        $not_posts = Post::where('notification' ,1)->get();
        // $post = Post::orderBy('vote','desc')->get();
        $post= Post::with('users')->orderBy('vote','desc')->get();
       
        if(Auth::check()){
            $posts_array = $user->posts->pluck('id');

        }
        return view('layout.home', compact('user','post','posts_array','not_posts'));
    }

    public function noti()
    {
        $not_posts = Post::where('notification' ,1)->get();

        return response()->json(['response' => 'success', 'post' => $not_posts ]);

    }

    public function single($id)
    {

        $replays = Replay::all();
        $post = Post::find($id);
        $user = Auth::user();
        $categories = Category::all();
        $reports = Report::all();

        return view('layout.single_planet', compact('post','user','comments','reports','categories' , 'replays'));
    }
}
