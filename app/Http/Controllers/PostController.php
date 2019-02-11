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

    $files = [];

    if ($request->hasFile('image-0')) $files[] = $request->file('image-0');
    if ($request->hasFile('image-1')) $files[] = $request->file('image-1');
    if ($request->hasFile('image-2')) $files[] = $request->file('image-2');
    if ($request->hasFile('image-3')) $files[] = $request->file('image-3');
    if ($request->hasFile('image-4')) $files[] = $request->file('image-4');


    $name =[];

    foreach ($files as $file) {         
        $filename = time() . '_' . $file->getClientOriginalName();
        $name []= $filename;
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $filename);
       
    }


        $post = Post::create([
            'name' => request('name'),
            'image' => $name[0],
            'alien_1' => $name[1],
            'alien_2' => $name[2],
            'alien_3' =>  $name[3],
            'leader_alien' =>$name[4],
            'description' => request('description'),
            'full_description' =>  request('full_description'),
            'alien_1_description'  => request('alien_1_description'),
            'alien_2_description' => request('alien_2_description'),
            'alien_3_description' => request('alien_3_description'),
            'leader_alien_description' => request('leader_description'),
        ]);



        $post->authors()->associate($user);
        $post->save();

        

        return response()->json(['response' => 'success', 'post' => $post ]);

    }


    public function Author()
    {

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
