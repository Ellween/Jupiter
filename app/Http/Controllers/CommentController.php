<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;
use App\Category;
use App\Replay;
class CommentController extends Controller
{
    public function store(Request $request , $post_id)
    {   

        $user = Auth::user();
        $categories = Category::all();
        $replays  = Replay::all();


        // $comment = Comment::create([
        //     'title' => request('comment_title'),
        //     'body' => request('comment_body')   ,
        //     'post_id' => $post_id,
        // ]);

        $comment = new Comment;
        $comment->title = $request->comment_title;
        $comment->body = $request->comment_body;
        $comment->post_id = $post_id;

        $comment->users()->associate($user->id);
        $comment->save();

        
        return view('layout.comments',compact('comment','categories','replays'))->render();

    }

    public function delete($com_id)
    {
        

        $comment = Comment::find($com_id);        
        $comment->delete();

        return redirect()->back();
    }
}
