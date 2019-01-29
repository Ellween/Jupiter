
    {{-- <!-- Header --> --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Jupiter</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="search_bar">
                        <i class="fas fa-search"></i>
                        <input type="text" class ='search' placeholder="Search Planet...">

                </div>
               



                <ul class ='d-flex align-items-center justify-content-center m-0 p-0 bord' >
                    @if(Auth::check())
                        <li class =''><img src="{{asset('images/' . $user->avatar)}}" alt="" style='width: 23px;'></li>
                        <a style ='text-decoration: none; color: white; font-family: Roboto;' href ='/logout'><li class ='' >Logout</li></a>
                    @else
                        <li class ='bord-li login'>LogIn</li>
                        <li class ='bord-li signup'>Sign Up</li>
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



