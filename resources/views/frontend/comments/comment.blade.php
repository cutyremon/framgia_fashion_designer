{{ Html::style('/css/category/category_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
{{ Html::style('/css/topic_style/topic_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
{{ Html::style('/css/comments/comment.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}

@foreach( $showStyle as $showStyle)
    <div class="modal-header comment-color-h">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title comment-tittle">{{$showStyle->tittle}}</h4>
    </div>
    <div class="modal-body">
        <img id="currentImage" src="{!! $showStyle->image !!}" class="img-responsive center-block comment-body"
        />
        <a href="#carousel-example-generic" class="left carousel-control" role="button"
           data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carousel-example-generic" class="right carousel-control" role="button"
           data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endforeach
<ul class="list-group">
    @foreach($listComment as $comment)
        <li class="list-group-item comment-botron"><label>
                @foreach( $listUser as $users1)
                    @if($users1->id==$comment->user_id)
                        {{$users1->full_name}}
                    @endif

                @endforeach
            </label>:{{$comment->content}}</li>
    @endforeach
    <li class="list-group-item">
        {{--<i id="styleId" name="styleId" value="{{$showStyle->id}}"></i>--}}
        <input type="hidden" id="styleId_1" name="styleId_1" value="{{$showStyle->id}}">

        <input type="text" class="form-control" id="comment" name="comment"
               placeholder="Add comment..."/>
    </li>
    <button id="postComment" class="comment-button">addComment</button>
</ul>

{{ Html::script('/bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
{{ Html::script('/js/comment.js', ['type' => 'text/javascript']) }}
{{ Html::script('/bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
