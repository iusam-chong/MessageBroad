<div class="container">

<form id="goPost" method="post" action=""></form>
{{foreach $postList as $post}}
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="thumbnail">
    <div class="caption">
        <p>{{$post.user_name}}</p>
        <p><span class="glyphicon glyphicon-time"></span> {{$post.create_time}}</p>
        <!-- nl2br(htmlspecialchars($postMessage, ENT_COMPAT))-->
        <p style="word-wrap: break-word;">{{$post.message|nl2br|htmlspecialchars}}</p>
        <div class="row">
        <div class="col pull-right">
            <span style="padding-right:15px">
            <button form="goPost" type="submit" name="postId" value="<?=$postId?>" class="btn btn-primary">留言 
            <span class="badge progress-bar-primary">{{$post.message_count}}</span>
            </button>
            </span>
        </div>
        </div>
    </div>
    </div>
    </div>
</div>
{{/foreach}}

</div><!-- /.container -->