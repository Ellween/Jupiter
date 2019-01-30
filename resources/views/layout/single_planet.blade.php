@extends('main')



@section('content')
    
    <div class="container-fluid p-0 all_cont"  style="background-image: url('/images/nebula2.jpg'); background-attachment: fixed;"  >
        <div class="row">
            <div class="container">
                <div class="row">
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
                                <p>Where does it come from?
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        
                                        Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                             </div>
                        </div>








                        <h1 style ='font-family: "Roboto"; color: white; padding-top: 3rem; width: 100%; text-align: center' >Living Monsters</h1>
                        <div class="planet_people  pb-5">
                            
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="single_planet_population pt-5">
                                            <div class="planet_aliens-1" style ='background-image: url("/images/Alien-2.png"); background-size: cover;background-position: center'>
                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                            </div>
                                            <div class="single_planet_people pt-5">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda error asperiores illum laboriosam aspernatur voluptas! Ab necessitatibus consectetur, quibusdam enim nulla eveniet voluptates reiciendis, facilis ducimus aliquam dolore explicabo distinctio.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single_planet_population pt-5">
                                                <div class="planet_aliens-1" style ='background-image: url("/images/Alien-2.png"); background-size: cover;background-position: center'>
                                                    <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                </div>
                                                <div class="single_planet_people pt-5">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda error asperiores illum laboriosam aspernatur voluptas! Ab necessitatibus consectetur, quibusdam enim nulla eveniet voluptates reiciendis, facilis ducimus aliquam dolore explicabo distinctio.</p>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="single_planet_population pt-5">
                                                    <div class="planet_aliens-1" style ='background-image: url("/images/Alien-2.png"); background-size: cover;background-position: center'>
                                                        <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                    </div>
                                                    <div class="single_planet_people pt-5">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda error asperiores illum laboriosam aspernatur voluptas! Ab necessitatibus consectetur, quibusdam enim nulla eveniet voluptates reiciendis, facilis ducimus aliquam dolore explicabo distinctio.</p>
                                                        </div>
                                                </div>
                                            </div>
                        </div>



                        <h1 style ='font-family: "Roboto"; color: white; padding-top: 3rem; width: 100%; text-align: center' >Leader Monster</h1>

                        <div class="mosnters_leader w-100 d-flex justify-content-center">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="single_planet_population pt-5">
                                            <div class="planet_aliens-1" style ='background-image: url("/images/leader_1.png"); background-size: cover;background-position: center'>
                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                            </div>
                                            <div class="single_planet_people pt-5">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda error asperiores illum laboriosam aspernatur voluptas! Ab necessitatibus consectetur, quibusdam enim nulla eveniet voluptates reiciendis, facilis ducimus aliquam dolore explicabo distinctio.</p>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>


@endsection