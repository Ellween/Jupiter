@extends('main')



@section('content')
<div class="container-fluid">
        <div class="row p-0">
            <div class="col-lg-12 col-md-12 col-sm-12 py-5 content-2">
                <div class ='container' style ='max-width: 1100px'>
                    <div class= 'row d-flex posts'>
                        @foreach ($posts as $post)


                      
                        <div id = {{$post->id}} class="col-lg-6 col-md-6 col-sm-12">
                                <div class="other_planets d-flex flex-column pt-5">
                                <div class="title_vote d-flex justify-content-center align-items-center">
                                        <a class ='flex-grow-1' style ='color: white; text-decoration: none;' href ="/post/{{$post->id}}"><h2 class ='text-center m-0'>{{$post->name}}</h2></a>
                                            <div class="votes_numbers d-flex justify-content-center align-items-center">
                                                @if(Auth::check())
                                                    @if(in_array($post->id, $posts_array->toArray()))
                                                    <i class="fas fa-star mx-2  unstar" style ='color: yellow;'></i>
                                                    @else 
                                                    <i class="fas mx-2 fa-star star"></i>
                                                    @endif
                                                @endif
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


                                                        <p class ='pt-4' >Author : {{$post->authors->name}} </p>
                                                        
                                                        
                                                    </div>


                                                   
                                       
                                    </div>
                        </div>
                    </div>  
                       


                        @endforeach

                       
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
@endsection