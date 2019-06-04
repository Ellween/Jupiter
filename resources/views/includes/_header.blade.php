
    {{-- <!-- Header --> --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Jupiter</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <form action="/search" method="POST">
                        @csrf
                                <div class="search_bar">
                                                <i class="fas fa-search"></i>
                                                <input name ='search' type="text" id = 'search_id' class ='search' placeholder="Search Planet...">
                                                <button class ='search_btn' type ='submit'>search</button>
                                        </div>
                    </form>
               
               



                <ul class ='d-flex align-items-center justify-content-center m-0 p-0 bord'  >
                    @if(Auth::check())
                        <a class ='login_a' id ={{ $user->type }} href ='/user_profile'><li class =''><img src="{{asset('images/' . $user->avatar)}}" alt="" style='width: 23px;'></li></a>
                        <a style ='text-decoration: none; color: white; font-family: Roboto;' href ='/logout'><li class ='' >Logout</li></a>
                    @else
                        <li class ='bord-li login'>LogIn</li>
                        <li class ='bord-li signup'>Sign Up</li>
                    @endif
                    @if(Auth::check())
                    @if($user->type == 2)
                    <li style ='postion: relative;'><i class="fas fa-bell"></i>
                        <div class= 'not-dot'></div>
                       
                        <div class ='notification-div'>
                                 <form action="">
                                      
                                                @foreach ($not_posts as $post)
                                        
                                                        
                                                        <a href ='http://localhost:8000/draft_posts'><p class ='not-post' id ={{$post->id}} >{{$post->name}}</p></a>
                                        
                                                
                                                @endforeach
                                       
                        </form>
                        </div>
                    </li>

                    @else 
                    <li style ='postion: relative;'><i class="fas fa-bell"></i>
                        <div class= 'not-dot-2'></div>
                       
                        <div class ='notification-div'>
                                 <form action="">
                                      
                                                @foreach ($real_posts as $post)
                                        
                                                        
                                                        <p class ='not-post' id ={{$post->id}} >{{$post->name}}</p>
                                        
                                                
                                                @endforeach
                                       
                        </form>
                        </div>
                    </li>
                    @endif
                    
                    @endif
                    <li class ='bord-li'>Home</li>
                    <li class ='bord-li'>Planets</li>
                    <li class ='bord-li'>Contact Us</li>
                </ul>


            
            </div>
          </nav>




          {{-- <!-- SignUp And Login Contents --> --}}

          <div class="singup">
                <i class="fas fa-times d-flex justify-content-end mt-3 mr-3 text-light" style="cursor: pointer;"></i>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                <h1>Register</h1>
                <div class="input_username pt-3">
                    <label for="username">UserName</label>
                    <input type="text" class ='form-control new_input' name ='name'>
                </div>
                <div class="input_email">
                        <label for="email">Email</label>
                        <input type="email" class ='form-control new_input' name ='email'>
                </div>
                <div class="input_password">
                        <label for="password">Password</label>
                        <input type="password" class ='form-control new_input' name ='password'>
                </div>
                <div class="input_confirm_password">
                        <label for="password">Confirm Password</label>
                        <input type="password" class ='form-control new_input' name ='password_confirmation'>
                </div>
                
                <div class="sign_up_btn d-flex justify-content-center pt-5">
                    <button  type ='submit' class ='btn btn-primary btn-sign_up' style='background: transparent;'>Sign Up</button>
                </div>
            </form>
          </div>


          {{-- Login --}}

          <div class="log-in">
                <i class="fas fa-times d-flex justify-content-end mt-3 mr-3 text-light" style="cursor: pointer;"></i>
            <form class="form-horizontal pt-5" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                <h1>Login</h1>
                <div class="input_email pt-3">
                        <label for="email">Email</label>
                        <input type="email" class ='form-control new_input' name ='email'>
                </div>
                <div class="input_password">
                        <label for="password">Password</label>
                        <input type="password" class ='form-control new_input' name ='password'>
                </div>
                <div class="sign_up_btn d-flex justify-content-center pt-5">
                    <button  type ='submit' class ='btn btn-primary btn-sign_up' style='background: transparent;'>Login</button>
                </div>
            </form>
          </div>




          {{-- Discover New Planet --}}


          <div class="new_planet">
                <i class="fas fa-times d-flex justify-content-end mt-3 mr-3 text-light" style="cursor: pointer;"></i>
                <form class="form-horizontal pt-3" id ='upload_form' method="POST" action="/add_post" enctype="multipart/form-data">
                    {{ csrf_field() }}
              <div class="step-1">
                  
                        <h1>Add New Planet Step-1</h1>
                        <div class="input_planet_name planet_input pt-3">
                                <label for="name">Planet Name</label>
                                <input type="text" class ='form-control new_input' name ='name'>
                        </div>
                        
                        <div class="input_planet_history planet_input">
                                <label for="description">Planet Description</label>
                                <input type="text" class ='form-control new_input' name ='description'>
                        </div>
                        <div class="input_planet_image planet_input" style ='display: none;'>
                                <label for="image">Planet Image</label>
                                <input type="file" class ='es' name ='image-0'>
                        </div>
        
                        <div class="planet_img mt-5" style ='border : 1px solid white; color: white;'>
                                
                                <i class="fas fa-image d-flex justify-content-center"></i>
                        </div>
                        <div class="sign_up_btn d-flex justify-content-center pt-5 pb-5">
                            {{-- <button  type ='submit' class ='btn btn-primary btn-upload' style='background: transparent;'>Next</button> --}}
                            <p class ='step-1-end' >Next</p>
                        </div>
                    
              </div>

              <div class="step-2">
                <h1>Add New Planet Step-2</h1>
                <div class="input_planet_name planet_input pt-2">
                        <label style ='position: relative !important;' for="full_description">Planet Full Description</label>
                        <textarea style ='margin: 0 auto; width: 95%;' type="text" class ='form-control' cols="10" rows="5" name ='full_description'></textarea>
                </div>
                
                <div class="sign_up_btn d-flex justify-content-center pt-5 pb-5">
                        {{-- <button  type ='submit' class ='btn btn-primary btn-upload' style='background: transparent;'>Next</button> --}}
                        <p class ='step-2-end' >Next</p>
                    </div>
              </div>


              <div class="step-3">
                    <h1>Add New Planet Step-3</h1>
                   
                    <div style ='margin: 0 auto; width: 95%;' class="input_planet_image ">
                            <label for="image">Alien N1 Image</label>
                            <input type="file" class ='' name ='image-1'>
                            <textarea  name="alien_1_description" class ='form-control mt-2'  cols="10" rows="5" placeholder="Alien Description"></textarea>
                    </div>


                    <div  style ='margin: 0 auto; width: 95%;' class="input_planet_image pt-2">
                            <label for="image">Alien N2 Image</label>
                            <input type="file" class ='' name ='image-2'>
                            <textarea   name="alien_2_description" class ='form-control mt-2'  cols="10" rows="5" placeholder="Alien Description"></textarea>
                    </div>


                    <div style ='margin: 0 auto; width: 95%;'  class="input_planet_image pt-2">
                            <label for="image">Alien N2 Image</label>
                            <input type="file" class ='' name ='image-3'>
                            <textarea  name="alien_3_description" class ='form-control mt-2'  cols="10" rows="5" placeholder="Alien Description"></textarea>
                    </div>
    

                    
                    <div class="sign_up_btn d-flex justify-content-center pt-3 pb-3">
                            {{-- <button  type ='submit' class ='btn btn-primary btn-upload' style='background: transparent;'>Next</button> --}}
                            <p class ='step-3-end' >Next</p>
                        </div>
                  </div>


                  <div class="step-4">
                        <h1>Add New Planet Step-4</h1>
                        <div style ='margin: 0 auto; width: 95%;'  class="input_planet_image pt-2">
                                <label for="image">Leader Monster Image</label>
                                <input type="file" class ='' name ='image-4'>
                                <textarea  name="leader_description" class ='form-control mt-2'  cols="10" rows="5" placeholder="Alien Description"></textarea>
                        </div>
                        
                        <div class="sign_up_btn d-flex justify-content-center pt-5 pb-5">
                                <button  type ='submit' class ='btn btn-primary btn-upload' style='background: transparent;'>Done</button>
                            </div>
                      </div>
            </form>
          </div>



