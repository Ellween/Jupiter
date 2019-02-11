@extends('main')



@section('content')



    <div class="div container-fluid ">
        <div class="row">   
            <div class="admin-index w-100 content-2">
               <div class="admin_config d-flex justify-content-center">
                   <a href="/user_profile"><h4>Profile</h4></a>
                   <a href="/user_settings"><h4>Settings</h4></a>
                   <a href="#"><h4>My Posts</h4></a>
                   <a href="/favorite"><h4>Favorite Posts</h4></a>
               </div>

               <div class="container">
                   <div class="row d-flex justify-content-center">
                       <div class="user_settings w-50 py-5">
                            <form action="/change" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="change_username">
                                        <h1 class ='text-center'>Current UserName: {{ $user->name }}</h1>    
                                        <input type="text" name ='new_name' class ='form-control' >
                                    </div>  
                                    <div class="change_password">
                                        <h1 class ='text-center'>Current Password</h1>
                                        <input type="password"  name ='old_pass' class ='form-control' >
                                        <h1 class ='text-center'>New Password</h1>    
                                        <input type="password"  name ='new_pass' class ='form-control' >
                                    </div>  
                                    <div class="change_avatar">
                                        <h1>Current Avatar</h1>
                                        <img class ='w-50' src="{{asset('images/' . $user->avatar)}}" alt="" >
                                        <input type="file" name ='new_avatar' >
                                    </div>
                                    <div class="submit_btn pt-3 d-flex justify-content-center">
                                        <button class ='btn btn-primary'>Change</button>
                                    </div>
                                </form>  
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection