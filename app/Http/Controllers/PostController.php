<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
          }
  
        
        $post = Post::create([
            'name' => request('name'),
            'image' => $name,
            'description' => request('description'),
        ]);

        return response()->json(['response' => 'success', 'post' => $post ]);

    }
}
