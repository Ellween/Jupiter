@extends('main')



@section('content')
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-lg-12 col-md-12 col-sm-12 py-5 content-2">
                <div class="admin_config d-flex justify-content-center">
                        <a href="/admin"><h4>Users</h4></a>
                       <a href="/admin_planets"><h4>Planets</h4></a>
                       <a href="/draft_posts"><h4>Draft Planets</h4></a>
                   </div>
            <div class ='container' style ='max-width: 1100px'>
                <div class= 'row d-flex posts'>
                    @foreach ($post as $post)
                    <form action="/post_edit/{{$post->id}}" method='POST' enctype="multipart/form-data">
                        @csrf
                  
                    <div id = {{$post->id}} class="col-lg-6 col-md-6 col-sm-12">
                            <div class="other_planets d-flex flex-column pt-5">
                            <div class="title_vote d-flex justify-content-center align-items-center">
                                    <a class ='flex-grow-1' style ='color: white; text-decoration: none;' href ="/post/{{$post->id}}"><h2 class ='text-center m-0'>{{$post->name}}</h2></a>
                                    @if($post->status == 2)   
                                    <p class ='d-flex justify-content-center align-items-center m-0 mx-3' style ='color: #50ff50; font-weight: bold;'  >Status: Active </p>  
                                    @else 
                                    <p class ='d-flex justify-content-center align-items-center m-0 mx-3' style= 'color: red; font-weight: bold;'  >Status: In Active </p>  
                                    @endif
                                    <div class="votes_numbers d-flex justify-content-center align-items-center">
                                          
                                                <i class="fas fa-arrow-circle-up vote"></i>
                                                <p class ='votes mx-2 m-0' >{{$post->vote}}</p>
                                        </div>
                                    
                            </div>
                                    <div class="planets  align-items-center pt-3">
                                            <div class="other_planets_img" style ='background-image: url("{{asset('images/' . $post->image)}}"); background-size: cover;background-position: center'>
                                                    <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                </div>
                                                <div class="other_planets_disc">
                                                    {{$post->description}}
                                                </div>
                                    </div>
                                   
                                </div>
                    </div>
                

                    <div class="edit_delete d-flex pt-4">
                            <button type ='submit' name ='Publish' class= 'btn btn-success' value = 'Publish'>Publish</button>

                        </div>
                     
     
    
</form>
                    @endforeach
                   
                </div>
            </div>
        
        </div>
        
    </div>
</div>
@endsection