@extends('main')



@section('content')
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-lg-12 col-md-12 col-sm-12 py-5 content-2">
                <div class="admin_config d-flex justify-content-center">
                        <a href="/admin"><h4>Users</h4></a>
                       <a href="/admin_planets"><h4>Planets</h4></a>
                       <a href="/draft_posts"><h4>Draft Planets</h4></a>
                       <a href="/report"><h4>Report Comments</h4></a>
                       <a href="/category"><h4>Report Category</h4></a>

                   </div>
            <div class ='container' style ='max-width: 1100px'>
                <div class= 'row d-flex posts'>
                    

                             
                        <div class="post_comments pt-5 mt-5 col-lg-12 col-md-12 col-sm-12">
                                <table style="width: 100%;">
                                        <tr>
                                            <th>Comment Author</th>
                                            <th>Author Comment</th>
                                            <th>Reported Reason</th>
                                            <th>Reported Category</th>
                                            
                                        </tr>
                                        
                                           
                                            @foreach ($reports as $report)
                                            <tr>
                                                 <td>{{$report->comments->title}}</td>
                                                 <td>{{$report->comments->body}}</td>
                                                 <td>{{$report->report_reason}}</td>
                                                 <td>{{$report->categories->category}}</td>
                                                 <td>
                                                    
                                                    @foreach ($users as $user)
                                                        @if($report->comments->user_id == $user->id)
                                                            @if($user->blocked == 0)
                                                                <form name ='{{$report->blocked}}'  action="/block_user/{{$report->comments->user_id}}" method="POST">
                                                                    @csrf
                                                                    <button class ='btn btn-danger'>Block User</button>
                                                                </form>
                                                            @else 
                                                            <p>a</p>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                     
                                                     
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
@endsection