<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 full-nav p-0" >
                   @include('test.includes.sidebar')
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 p-0">
                 <div class="main-side">
                     <div class="main-header-body p-4">
                         <div class="main-header">
                             <div class ='d-flex align-items-center' >
                                <h1>User</h1>
                                <p>All Users in the Database</p>
                             </div>
                            <div class ='d-flex' >
                                    {{ Breadcrumbs::render('home') }}

                            </div>
                         </div>
                         <div class="main-body">
                             <div class ='p-3'>
                                <div class="body-header">
                                        <button><i class="fas fa-plus" style ='padding-right: 10px;'></i>Add user</button>
                                </div>
                                    <hr style ='margin-bottom: 0;'>
                                    <div class ='user-search'>
                                        <p>120 <span>Records on the Site</span></p>
                                        <div class ='d-flex align-items-center'>
                                            <label>Search</label><input type="text" class='form-control'>
                                        </div>
                                    </div>
                                    <div class="user-tables">
                                        <table>
                                            <tr>
                                                <th>User</th>
                                                <th>Position</th>
                                                <th>Email</th>
                                            </tr>

                                            @foreach ($users as $users)
                                            <tr>
                                                <td>{{$users->name}}</td>
                                                <td>
                                                    @if($users->type == 2)
                                                    Admin
                                                    @else 
                                                        Default User
                                                    @endif
                                                </td>
                                                <td>{{$users->email}}</td>
                                                @if($users->type != 2)
                                                    <form   action="/user_delete/{{$users->id}}" method= "POST">
                                                        @csrf
                                                            <td style ='border:none !important; width: 1% !important;' id = {{$users->id}}><button class ='btn btn-danger delete_user'>Delete</button></td>
                                                    </form>
                                                @else 

                                                @endif
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
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.0.js""></script>
    <script src="/js/admin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>