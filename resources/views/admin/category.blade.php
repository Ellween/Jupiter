@extends('main')



@section('content')
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-5 content-2">
                <div class="admin_config d-flex justify-content-center">
                        <a href="/admin"><h4>Users</h4></a>
                       <a href="/admin_planets"><h4>Planets</h4></a>
                       <a href="/draft_posts"><h4>Draft Planets</h4></a>
                       <a href="/report"><h4>Report Comments</h4></a>
                   </div>
            <div class ='container' style ='max-width: 1100px'>
                <div class= 'row d-flex posts justify-content-center'>
                    <form action="/add_category" method="POST">
                        @csrf
                        <h1 style ='color: white; font-family: "Roboto";' class ='pt-5'  >Add New Category</h1>
                        <input type="text" name ='category' class ='form-control' >

                        <div class="add_c pt-3 d-flex justify-content-center">
                                <button class ='btn btn-primary' type ='submit' >Add Category</button>

                        </div>
                    </form>
                </div>

                <div class="all_category d-flex justify-content-center pt-5">
                        <ul>
                                @foreach ($categories as $category)
                                <div class="category_delete d-flex align-items-center pt-4">
                                        <li>{{$category->category}}</li> 
                                        <button class ='btn btn-danger ml-5' type ='submit' >Delete</button>
                                </div>
                                @endforeach
                        </ul>
                </div>
               
            </div>

            
        
        </div>
        
    </div>
</div>
@endsection