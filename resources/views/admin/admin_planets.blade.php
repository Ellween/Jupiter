@extends('main')



@section('content')
    <div class="div container-fluid ">
        <div class="row">
            <div class="admin-index w-100 content-2" style ='height: 100vh;'>
               <div class="admin_config d-flex justify-content-center">
                    <a href="/admin"><h4>Users</h4></a>
                   <a href="/admin_planets"><h4>Planets</h4></a>
                   <a href="/admin_draft"><h4>Draft Planets</h4></a>
               </div>

               <div class="container">
                   <div class="row">
                        <div class= 'row d-flex posts'>
                                @foreach ($post as $post)
                                <div id = {{$post->id}} class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="other_planets d-flex flex-column pt-5">
                                                <a style ='color: white; text-decoration: none;' href ="/post/{{$post->id}}"><h2 class ='text-center'>{{$post->name}}</h2></a>
                                                <div class="planets  align-items-center pt-3">
                                                        <div class="other_planets_img" style ='background-image: url("{{asset('images/' . $post->image)}}"); background-size: cover;background-position: center'>
                                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                            </div>
                                                            <div class="other_planets_disc">
                                                                {{$post->description}}
                                                            </div>
                                                </div>
                                               
                                            </div>
                                            <div class="edit_delete d-flex pt-4">
                                                <button class= 'btn btn-success'>Edit</button>
                                                <button class= 'btn btn-danger'>Delete</button>
                                            </div>
                                </div>
                                @endforeach
                               
                            </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection