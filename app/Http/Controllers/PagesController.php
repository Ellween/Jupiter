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

            $real_user = Auth::user()->id;
            $real_posts = Post::where('authors_id',$real_user)->where('status',2)->where('user_notification',1)->get();
          
        }

       
        return view('layout.home', compact('user','post','posts_array','not_posts','real_posts'));
    }

    public function noti()
    {
        $real_user = Auth::user()->type;
        if($real_user == 2)
        {
            $not_posts = Post::where('notification' ,1)->get();
        }else
        {
            $not_posts = "";
        }
        

        return response()->json(['response' => 'success', 'post' => $not_posts ]);

    }


    public function user_not()
    {
        $real_user = Auth::user()->id;
        $posts = Post::all();
        $real_posts = Post::where('authors_id',$real_user)->where('status',2)->where('user_notification',1)->get();


        return response()->json(['response' => 'success', 'posts' => $real_posts ]);

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
