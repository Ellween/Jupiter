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
                                <h1>Drafts</h1>
                                <p>All articles in the Database</p>
                             </div>
                            <div class ='d-flex' >
                                {{ Breadcrumbs::render('drafts') }}     
                            </div>
                         </div>
                         <div class="main-body">
                             <div class ='p-3'>
                                    <div class="body-header">
                                            <button><i class="fas fa-plus" style ='padding-right: 10px;'></i>Add Post</button>
                                    </div>
                                        <hr style ='margin-bottom: 0;'>
                                        <div class ='user-search'>
                                            <p>{{$post_count}} <span>Records on the Site</span></p>
                                            <div class ='d-flex align-items-center'>
                                                <label>Search</label><input type="text" class='form-control'>
                                            </div>
                                        </div> 
                               <div class="row not-correct">
                                    @foreach ($post as $post)
                                        <div class="col-lg-2 col-md-6 col-sm-12">
                                            <div class='post'>
                                                 <div class="card" style ='position: relateive;'>
                                                     @if($post->status == 2)
                                                        <div class ='pub' ></div>
                                                     @else 
                                                        <div class ='draft' ></div>
                                                     @endif
                                                     <img class ='card-img-top' src="{{asset('images/' . $post->image)}}" alt="">
                                                     <div class="card-body">
                                                         <h5 class="card-title">
                                                             {{$post->name}}
                                                         </h5>
                                                         <p class="card-text comment more">
                                                             {{$post->description}}
                                                         </p>
                                                         <div class ='d-flex justify-content-between'>
                                                            <a href="/post/{{$post->id}}" class="btn btn-primary d-flex align-items-center">More...</a>
                                                            <a href="/post_edit/{{$post->id}}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                                            <form action="/post_delete/{{ $post->id }}" method="POST">
                                                                @csrf
                                                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                            </form>
                                                           
                                                         </div>
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