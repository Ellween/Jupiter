<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use Session;
use App\Comment;
use Illuminate\Support\Facades\Input;


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

        Session::flash('danger','You Deleted Post Successfully!');


        return redirect('/admin_planets');
    }

    public function edit_post(Request $request , $post_id)
    {

        $post = Post::find($post_id);


        // $files = [];

        // if ($request->hasFile('image-0')) $files[] = $request->file('image-0');
        // if ($request->hasFile('image-1')) $files[] = $request->file('image-1');
        // if ($request->hasFile('image-2')) $files[] = $request->file('image-2');
        // if ($request->hasFile('image-3')) $files[] = $request->file('image-3');
        // if ($request->hasFile('image-4')) $files[] = $request->file('image-4');
    

        // $images [] = $post->image;
        // $images[] = $post->alien_1;
        // $images[] = $post->alien_2;
        // $images[] = $post->alien_3;
        // $images[] = $post->leader_alien;

        // dd($files[0]->getClientOriginalName());

    
        // $name =[];
    
        // foreach ($files as $file) {    
        
        //         $filename = time() . '_' . $file->getClientOriginalName();
        //         $name []= $filename;
        //         $destinationPath = public_path('/images');
        //         $file->move($destinationPath, $filename);
           
           
        // }


        // dd($name);
        $filename_1 = "";
        $filename_2 = "";
        $filename_3 = "";
        $filename_4 = "";
        $filename_5 = "";
        


        if($request->hasFile('planet_img')){
            $image_1 = $request->file('planet_img');
            $filename_1 = time() . '.' . $image_1->getClientOriginalExtension();
            $location = public_path('/images');
            $image_1->move($location, $filename_1);       
          }

          else {
            $filename_1 = $post->image;
        }

          if($request->hasFile('image-1')){

            $image_2 = $request->file('image-1');
            $filename_2 = time() . '.' . $image_2->getClientOriginalExtension();
            $location = public_path('/images');
            $image_2->move($location, $filename_2);
          }

          else {
            $filename_2 = $post->alien_1;
        }


          if($request->hasFile('image-2')){

            $image_3 = $request->file('image-2');
            $filename_3 = time() . '.' . $image_3->getClientOriginalExtension();
            $location = public_path('/images');
            $image_3->move($location, $filename_3);
          }


          else {
            $filename_3 = $post->alien_2;
        }


          if($request->hasFile('image-3')){

            $image_4 = $request->file('image-3');
            $filename_4 = time() . '.' . $image_4->getClientOriginalExtension();
            $location = public_path('/images');
            $image_4->move($location, $filename_4);
          }


          else {
            $filename_4 = $post->alien_3;
        }

          if($request->hasFile('image-4')){

            $image_5 = $request->file('image-4');
            $filename_5 = time() . '.' . $image_5->getClientOriginalExtension();
            $location = public_path('/images');
            $image_5->move($location, $filename_5);
          }


          else {
            $filename_5 = $post->leader_alien;
        }

        $input = Input::get('Publish');

        if (isset($input)){
            $post->status = 2;
          }
          else {
       
        $post->name = $request->planet_name;
        $post->description = $request->description;
        $post->image = $filename_1;
        $post->alien_1 = $filename_2;
        $post->alien_2 = $filename_3;
        $post->alien_3 = $filename_4;
        $post->leader_alien = $filename_5;
        $post->full_description = $request->full_description;
        $post->alien_1_description = $request->alien_1_description;
        $post->alien_2_description = $request->alien_2_description;
        $post->alien_3_description = $request->alien_3_description;
        $post->leader_alien_description = $request->leader_description;
          }
        $post->save();

        Session::flash('success','You Edited Post Successfully!');


        return redirect()->back();
    }

    public function post_edit($post_id)
    {

        $user = Auth::user();
        $post = Post::find($post_id);

        return view('admin.edit_post', compact('user','post'));


    }


    public function draft()
    {
      $user = Auth::user();
      $post = Post::all();
      return view('admin.draft', compact('user','post'));
    }

  

    public function report($com_id)
    {

      $user = Auth::user();


      $comment = Comment::find($com_id);



      return view('admin.report',compact('comment', 'user'));
    }
}
