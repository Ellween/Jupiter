@extends('main')



@section('content')



<div class ='container' style ='max-width: 1100px'>
        <div class= 'row d-flex posts'>
            @foreach ($post as $post)

            @if($post->status != 1 )
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
            </div>
            @endif


            @endforeach
           
        </div>
    </div>


@endsection