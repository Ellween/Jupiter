@extends('main')



@section('content')



    <div class="div container-fluid ">
        <div class="row">
            <div class="admin-index w-100 content-2">
               <div class="admin_config d-flex justify-content-center">
                    <a href="/admin"><h4>Users</h4></a>
                   <a href="/admin_planets"><h4>Planets</h4></a>
                   <a href="/draft_posts"><h4>Draft Planets</h4></a>
                   <a href="/report"><h4>Report Comments</h4></a>

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
                                                                <label for="description">Planet Full Description</label>
                                                               <textarea name="full_description" class ='form-control' value ="" id="" cols="70" rows="10">{{$post->full_description}}</textarea>
                                                            </div>
                                                            <div class="other_planets_big_text">
                                                                <label for="planet_full">Planet Mini Description</label>
                                                                    <textarea class ='form-control' name="description" id="" cols="150" rows="10">{{$post->description}}</textarea>
                                                                </div>


                                                                
                                                </div>

                                                
                                               
                                            </div>
                                            <div class="planet_new_img d-flex justify-content-start w-100">
                                                <input type="file" name ='planet_img'>

                                            </div>

                                            <div class="alien_images d-flex flex-column pt-5" style='width: 70%;'>
                                                <div class="alien_1_full d-flex">
                                                    <div>
                                                            <label for="alien_1">Alien N1:</label>
                                                            <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->alien_1)}}"); background-size: cover;background-position: center'>
                                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                            </div>
                                                            <input type="file" name ='image-1' >
                                                    </div>
                                                        
                                                        <textarea class ='form-control mt-3' name="alien_1_description" id="" cols="30" rows="10">{{$post->alien_1_description}}</textarea>
                                                </div>
                                   
                                                <div class="alien_2_full d-flex pt-5">
                                                    <div>
                                                            <label for="alien_2">Alien N2:</label>
                                                            <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->alien_2)}}"); background-size: cover;background-position: center'>
                                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                            </div>
                                                            <input type="file" name ='image-2' >
                                                    </div>
                                                       
                                                        <textarea class ='form-control mt-3'name="alien_2_description" id="" cols="30" rows="10">{{$post->alien_2_description}}</textarea>
                                                </div>
                                             
                                                <div class="alien_3_full d-flex pt-5">
                                                    <div>
                                                            <label for="alien_3">Alien N3:</label>
                                                            <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->alien_3)}}"); background-size: cover;background-position: center'>
                                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                            </div>
                                                            <input type="file" name ='image-3'>
                                                    </div>
                                                 
                                                        <textarea class ='form-control mt-3'name="alien_3_description" id="" cols="30" rows="10">{{$post->alien_3_description}}</textarea>
                                                </div>
                                              

                                                <div class="alien_leader_full d-flex pt-5">
                                                    <div>
                                                            <label for="leader_alien">Leader Alien:</label>
                                                            <div class="planet_aliens-1" style ='background-image: url("{{asset('images/' . $post->leader_alien)}}"); background-size: cover;background-position: center'>
                                                                <img class ='w-100 h-100' src="/images/other_planet_1.png" alt="" style ='visibility: hidden;'>
                                                            </div>
                                                            <input type="file" name ='image-4' >
                                                    </div>
                                                  
                                                        <textarea class ='form-control mt-3'name="leader_description" id="" cols="70" rows="10">{{$post->leader_alien_description}}</textarea>
                                                </div>
                                               
                                               
                                                
                                            </div>

                                                <div class="edit_and_delete d-flex">
                                                  
        
                                                  
        
                                                            <div class="edit_delete d-flex pt-4">
                                                                    <button type ='submit' name ='Publish' class= 'btn btn-success' value = 'Publish'>Publish</button>

                                                                    <button type ='submit' class= 'btn btn-success'>Edit</button>


                                                                </div>
                                                             
                                                 
                                                </div>
                                          
                                            
                            </form>
                        </div>


                                
                                
                        <div class="post_comments pt-5 mt-5 col-lg-12 col-md-12 col-sm-12">
                                <table style="width: 100%;">
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Comment</th>
                                           
                                        </tr>
                                        
                                           
                                            @foreach ($post->comments as $comment)
                                            <tr>
                                                 <td>{{$comment->title}}</td>
                                                 <td>{{$comment->body}}</td>
                                                 <td>
                                                        <form action="/delete_comment/{{$comment->id}}"  method="POST">
                                                            @csrf
                                                                <button class ='btn btn-danger'>Delete</button>
                                                        </form>
                                                 </td>
                                                 
                                        
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