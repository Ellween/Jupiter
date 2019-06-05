<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Auth;
class PostController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        
        $post = Post::create([
            'title' => request('title'),
            'slug' => request('slug'),
            'content' => request('content'),
        ]); 

        

        
    }


    public function Author()
    {

    }


    public function removeOne($id)
    {   
        $not_post = Post::find($id);
        $not_post->notification = 0;
        $not_post->save();
    }

    public function removeTwo($id)
    {   
        $not_post = Post::find($id);
        $not_post->user_notification = 0;
        $not_post->save();
    }


    public function storeVote($id)
    {

        $post = Post::find($id);

        $post->vote = $post->vote + 1;

        $post->save();

    }


    public function storeFav($post_id)
    {
        $post = Post::find($post_id);
        $user = Auth::user();

        $post->users()->sync($user->id , false);
    }

    public function deleteFav($post_id)
    {
        $post = Post::find($post_id);
        $user = Auth::user();

        $post->users()->detach();
    }

    public function search(Request $request)
    {

       // $posts = Post::all();
        $item = $request->search;


        // foreach($posts as $p)
        // {
        //     if($item = $p->name)
        //     {
        //         $post = Post::where('name', $item)->get();
            
                
        //     }
        //     else {
        //         echo "Nothing";
        //     }
        // }

        $posts = Post::where('name', 'LIKE', '%'.$item.'%')->get();


        return view('layout.search',compact('posts'));


    }
}
