<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {


        if ($request->hasFile('gif')) {
            $gif = $request->file('gif');
            $name = time().'.'.$gif->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $gif->move($destinationPath, $name);
          }
  
        
        $post = Post::create([
            'name' => request('name'),
            'image' => ,
            'description' => 'description',
        ]);
    }
}
