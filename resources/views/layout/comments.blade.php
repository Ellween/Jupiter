    <div class="comment">
            <h2>{{$comment->title}}</h2>
            <hr style ='background: white; height: 1px; border-radius: 10px; margin-left: 0 ; width: 30%;'>
            <p>{{$comment->body}}</p>
            <form action="/report_comment/{{ $comment->id }}" method="POST">
                @csrf
                <button type ='submit'>report</button>

            </form>
            <hr style ='background: white; height: 2px; border-radius: 10px;'>
    </div>
