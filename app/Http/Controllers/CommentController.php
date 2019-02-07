<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store(Request $request , $post_id)
    {   
        $comment = Comment::create([
            'title' => request('comment_title'),
            'body' => request('comment_body'),
            'post_id' => $post_id,
        ]);


        return view('layout.comments',compact('comment'))->render();
    }

    public function delete($com_id)
    {
        

        $comment = Comment::find($com_id);        
        $comment->delete();

        return redirect()->back();
    }
}
