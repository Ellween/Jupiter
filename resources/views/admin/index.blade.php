@extends('main')



@section('content')
    <div class="div container-fluid ">
        <div class="row">
            <div class="admin-index w-100 content-2" style ='height: 100vh;'>
               <div class="admin_config d-flex justify-content-center">
                    <a href="/admin"><h4>Users</h4></a>
                    <a href="/admin_planets"><h4>Planets</h4></a>
                    <a href="/draft_posts"><h4>Draft Planets</h4></a>
               </div>

               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="all_users pt-5">
                               <table style="width: 100%;">
                                   <tr>
                                       <th>User Name</th>
                                       <th>User email</th>
                                       <th>User Avatar</th>
                                       <th>User Type</th>
                                   </tr>
                                   
                                      
                                       @foreach ($users as $users)
                                       <tr>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->email}}</td>
                                            <td><img style ='width: 10%; border-radius: 50%;' src="{{asset('images/' . $user->avatar)}}"</td>
                                            <td>
                                                @if($users->type == 2)
                                                    Admin
                                                @else 
                                                    Default User
                                                @endif

                                            </td>
                                            @if($users->type != 2)
                                            <form   action="/user_delete/{{$users->id}}" method= "POST">
                                                @csrf
                                                    <td id = {{$users->id}}><button class ='btn btn-danger delete_user'>Delete</button></td>
                                            </form>
                                            @else 

                                            @endif
                                        </tr>
                                        
                                       @endforeach
                                    
                                 
                               </table>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection