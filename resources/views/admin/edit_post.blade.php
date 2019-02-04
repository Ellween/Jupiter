@extends('main')



@section('content')



    <div class="div container-fluid ">
        <div class="row">
            <div class="admin-index w-100 content-2">
               <div class="admin_config d-flex justify-content-center">
                    <a href="/admin"><h4>Users</h4></a>
                   <a href="/admin_planets"><h4>Planets</h4></a>
                   <a href="/admin_draft"><h4>Draft Planets</h4></a>
               </div>

               <div class="container">
                   <div class="row over">
                        <div class= 'row d-flex posts'>
        
                                <div id = {{$post->id}} class="col-lg-12 col-md-12 col-sm-12">
                                <form action="/post_edit/{{$post->id}}" method='POST' enctype="multipart/form-data">
                                    @csrf
                               
                                        <div class="other_planets d-flex flex-column pt-5">
                                            <label for="planet_name">Planet Name</label>
                                                <input type="text" name ='planet_name' class ='form-control' value ="{{$post->name}}">
                                                <div class="planets d-flex  align-items-center pt-5">
                                                        <div class="other_planets_img" style ='background-image: url("{{asset('images/' . $post->image)}}"); background-size: cover;background-position: center'>
                                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                               
                                                            </div>
                                                            <div class="other_planets_disc" style ='margin: 0 20px;'>
                                                                <label for="description">Planet Mini Description</label>
                                                               <textarea name="description" class ='form-control' value ="" id="" cols="70" rows="10">{{$post->description}}</textarea>
                                                            </div>
                                                            <div class="other_planets_big_text">
                                                                <label for="planet_full">Planet Full Description</label>
                                                                    <textarea class ='form-control' name="planet_full" id="" cols="150" rows="10"></textarea>
                                                                </div>


                                                                
                                                </div>

                                                
                                               
                                            </div>
                                            <div class="planet_new_img d-flex justify-content-start w-100">
                                                <input type="file" name ='planet_img'>

                                            </div>

                                            <div class="alien_images d-flex flex-column pt-5 w-50">
                                                <label for="alien_1">Alien N1:</label>
                                                <input type="file" name ='alien_1' >
                                                <textarea class ='form-control mt-3'name="alien_1_desc" id="" cols="30" rows="10"></textarea>
                                                <label for="alien_2">Alien N2:</label>
                                                <input type="file" name ='alien_2' >
                                                <textarea class ='form-control mt-3'name="alien_1_desc" id="" cols="30" rows="10"></textarea>
                                                <label for="alien_3">Alien N3:</label>
                                                <input type="file" name ='alien_3'>
                                                <textarea class ='form-control mt-3'name="alien_1_desc" id="" cols="30" rows="10"></textarea>
                                                <label for="leader_alien">Leader Alien:</label>
                                                <input type="file" name ='leader_alien' >
                                                <textarea class ='form-control mt-3'name="alien_1_desc" id="" cols="30" rows="10"></textarea>
                                            </div>

                                                <div class="edit_and_delete d-flex">
                                                  
        
                                                  
        
                                                            <div class="edit_delete d-flex pt-4">
        
                                                                    <button type ='submit' class= 'btn btn-success'>Edit</button>
                                                                    
                                                                </div>
                                                             
                                                 
                                                </div>
                                          
                                            
                            </form>
                        </div>


                                
                               
                               
                            </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection