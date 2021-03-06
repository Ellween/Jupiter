@extends('main')



@section('content')

    <div class="container-fluid p-0 all_cont"  style="background-image: url('/images/nebula2.jpg'); background-attachment: fixed;"  >
        <div class="row w-100">
            <div class="container">
                <div class="row w-100">
                        <div class="single_planet w-100 d-flex justify-content-center pt-5" >
                
                          <h1>{{$post->name}}</h1>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="other_planets_img" style ='background-image: url("{{asset('images/' . $post->image)}}"); background-size: cover;background-position: center'>
                                    <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                             <div class="single_planet_disc pt-3">
                                <p>{{$post->full_description}}</p>
                             </div>
                        </div>








                        <h1 style ='font-family: "Roboto"; color: white; padding-top: 3rem; width: 100%; text-align: center' >Living Monsters</h1>
                        <div class="planet_people  pb-5">
                            
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="single_planet_population pt-5">
                                                <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->alien_1)}}"); background-size: cover;background-position: center'>
                                                    <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                   
                                                </div>
                                            <div class="single_planet_people pt-5">
                                                <p>{{$post->alien_1_description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single_planet_population pt-5">
                                                    <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->alien_2)}}"); background-size: cover;background-position: center'>
                                                        <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                       
                                                    </div>
                                                <div class="single_planet_people pt-5">
                                                    <p>{{$post->alien_2_description}}</p>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="single_planet_population pt-5">
                                                        <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->alien_3)}}"); background-size: cover;background-position: center'>
                                                            <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                           
                                                        </div>
                                                    <div class="single_planet_people pt-5">
                                                        <p>{{$post->alien_3_description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                        </div>



                        <h1 style ='font-family: "Roboto"; color: white; padding-top: 3rem; width: 100%; text-align: center' >Leader Monster</h1>

                        <div class="mosnters_leader w-100 d-flex justify-content-center">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="single_planet_population pt-5">
                                            <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->leader_alien)}}"); background-size: cover;background-position: center'>
                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                            </div>
                                            <div class="single_planet_people pt-5">
                                                <p>{{$post->leader_alien_description}}</p>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        
                </div>
            </div>
            <div class="container">
                <div class="row w-100">

                    @if (Auth::check())
                        @if($user->blocked != 1 )
                        <form class= 'w-100 comment_form'   action="/add_comment/{{$post->id}}" method="POST">
                            @csrf
                                <h1 class ='pt-5 mt-5 text-center w-100 text-light comment_header' >What Do You Think About This Planet</h1>
                                <div id = {{$post->id}} class ='d-flex justify-content-center w-100 mt-3'>
                                    <div class="comment_section w-50">
                                        @if(Auth::check()) 
                                        <input type="text" name ='comment_title'  class ='form-control'  value = {{$user->name}} >
                                        <textarea name="comment_body" class ='form-control mt-4' cols="30" rows="10" placeholder="{{$user->name}}'s Opinnion"></textarea>
                                        @else 
                                        <input type="text"  name ='comment_title' class ='form-control' placeholder="Your Name">
                                        <textarea name="comment_body"  class ='form-control mt-4' cols="30" rows="10" placeholder="Your Opinnion"></textarea>
                                        @endif
                                        <div class ='d-flex justify-content-center pt-4'><button type ='submit' class ='btn btn-primary add_comment'>Add Comment</button></div>

                                    </div>
                                </div>
                        </form>
                        @else 
                            <h1>You Are Blocked</h1>
                        @endif
                    @else

                    <form class= 'w-100 comment_form'   action="/add_comment/{{$post->id}}" method="POST">
                        @csrf
                            <h1 class ='pt-5 mt-5 text-center w-100 text-light comment_header' >What Do You Think About This Planet</h1>
                            <div id = {{$post->id}} class ='d-flex justify-content-center w-100 mt-3'>
                                <div class="comment_section w-50">
                                    @if(Auth::check()) 
                                    <input type="text" name ='comment_title'  class ='form-control'  value = {{$user->name}} >
                                    <textarea name="comment_body" class ='form-control mt-4' cols="30" rows="10" placeholder="{{$user->name}}'s Opinnion"></textarea>
                                    @else 
                                    <input type="text"  name ='comment_title' class ='form-control' placeholder="Your Name">
                                    <textarea name="comment_body"  class ='form-control mt-4' cols="30" rows="10" placeholder="Your Opinnion"></textarea>
                                    @endif
                                    <div class ='d-flex justify-content-center pt-4'><button type ='submit' class ='btn btn-primary add_comment'>Add Comment</button></div>

                                </div>
                            </div>
                    </form>

                    @endif


                                 


                   <div class ='d-flex justify-content-center w-100 pt-5 mt-5' >
                        <div class="all_comments w-50">
                                @foreach ($post->comments as $comment)


                                    @include('layout.comments')
                                @endforeach
                           
              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection