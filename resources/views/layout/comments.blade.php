<div class="comment">

        
                @foreach ($comment->replays as $rep)
                {{$rep}}
        @endforeach    


    <h2>{{$comment->title}}</h2>
    <hr style ='background: white; height: 1px; border-radius: 10px; margin-left: 0 ; width: 30%;'>
    <div class ='align-items-center ' >
        <div class ='d-flex align-items-center justify-content-between '>
                <p>{{$comment->body}}</p>
                <i style ='color: white; cursor: pointer;' class="show-report fas fa-exclamation-circle "></i>

                
        </div>
         
        <div class="report_form">
                <form action="/report_comment/{{ $comment->id }}" method="POST">
                    @csrf
                    @foreach ($categories as $category)
                    <div>
                            <input type="radio" name="report_category" value="{{$category->id}}"
                                   >
                            <label style ='color:white; font-family: "karla"'  class ='ml-3'  for="huey">{{$category->category}}</label>
                          </div>
                    @endforeach
                    <textarea name="report_reason" class ='form-control report_text mt-4'   cols="30" rows="5"></textarea>

                    <div class ='d-flex justify-content-center pt-3' >
                            <button class = 'btn btn-primary' type ='submit'>report</button>

                    </div>

                </form>
        </div>

        <div class="replay_comment" com_id = {{$comment->id}}>
                <form action="/comment_replay/{{$comment->id}}" method="POST">
                        @csrf
                        <input type="text" name ='name' class ='form-control'  >
                        <textarea id="" name = 'replay_comment' class ='form-control' cols="30" rows="10"></textarea>
                        <button type="submit">Add Replay</button>
                </form>
        </div>




    </div>
   
    <hr style ='background: white; height: 2px; border-radius: 10px;'>
</div>
