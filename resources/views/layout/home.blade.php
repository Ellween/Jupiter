
    @extends('main')
    
    
    @section('content')

   
    <div class="container-fluid">
        <div class="row p-0">
            <div class="col-lg-12 col-md-12 col-sm-12 py-5 content">
               <div class="container py-5" style ='max-width: 1000px'>
                   <div class="row">
                        <div class="swiper-container">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide px-5" style ='background: transparent;'>
                                                <div class="popular_Planet  align-items-center justify-content-center">
                                                    <div class="planet_image d-flex justify-content-start" style =' width: 300px;  height: 300px;  background-image: url("images/popular1.png");background-size: cover;'>
                                                    </div>
                                                    <div class="planet_desc pl-3" style ='width: calc(100% - 300px); text-align: justify;' >
                                                        <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</P>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="swiper-slide px-5" style ='background: transparent;'>
                                                    <div class="popular_Planet  align-items-center justify-content-center">
                                                        <div class="planet_image d-flex justify-content-start" style =' width: 300px;  height: 300px;  background-image: url("images/popular2.png");background-size: cover;'>
                                                        </div>
                                                        <div class="planet_desc pl-3" style ='width: calc(100% - 300px); text-align: justify;' >
                                                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</P>
                                                        </div>
                                                    </div> 
                                                </div>
                                            <div class="swiper-slide px-5" style ='background: transparent;'>
                                                <div class="popular_Planet  align-items-center justify-content-center">
                                                    <div class="planet_image d-flex justify-content-start" style =' width: 300px;  height: 300px;  background-image: url("images/popular3.png");background-size: cover;' >
                                                    </div>
                                                    <div class="planet_desc pl-3" style ='width: calc(100% - 300px); text-align: justify;' >
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                                    </div>
                                                </div> 
                                            </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                
                        </div>
                        
                   </div>
               </div>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row p-0">
            <div class="col-lg-12 col-md-12 col-sm-12 py-5 content-2">
                <div class ='container' style ='max-width: 1100px'>
                    <div class= 'row d-flex posts'>
                        @foreach ($post as $post)

                        @if($post->status != 1 )
                        <div data-aos="fade-right" id = {{$post->id}} class="col-lg-6 col-md-6 col-sm-12 posts_list">
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
                        @endif


                        @endforeach
                       
                    </div>
                </div>
                @if(Auth::check())
                <div class="satelite d-flex flex-column align-items-center justify-content-center pt-5 mt-5" >
                  <h1 class ='pb-5 text-light' style ='font-family: "Karla" ;'  >Discover More </h1>
                    <div class ='satelite_dot' style ='position:relative'>
                            <img class ='satelite_img' src="images/satelite.png" alt="">
                            <div class ='dot' >
    
                            </div>
                    </div>
                   
                </div>
                @endif
            </div>
            
        </div>
    </div>

@endsection