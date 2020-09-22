{{foreach $commentList as $comment}}
<div class="thumbnail editStatus">
<div class="caption bg-light">
    <div class="row">
        <div class="col-sm-8">
            <p>{{$comment.user_name}}</p>
            <p><span class="glyphicon glyphicon-time"></span> {{$comment.create_time}}</p>
        </div>

        {{if $comment.user_id === $userId}}
            <div class="col-sm-4 pull-right editIcon">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                    <span class="glyphicon glyphicon-th-large"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                <li>
                    <a href="#">
                    <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#editComment{{$comment.message_id}}">
                        <span class="glyphicon glyphicon-pencil"></span> 修改
                    </button>
                    </a>
                </li>
                <li>
                    <a href="#">   
                    <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#dltComment{{$comment.message_id}}">
                        <span class="glyphicon glyphicon-trash"></span> 刪除
                    </button>
                    </a>
                </li>
                </ul>
            </li>
            </ul>
            </div>

            <div class="modal fade" id="editComment{{$comment.message_id}}" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">修改留言</h4>
                </div>
                <div class="modal-body">
                    <div class="messageInput">
                    <form method="post" action="" id="editCommentForm{{$comment.message_id}}">
                    <div class="form-group">
                    <textarea name="editCommentText" required="required" class="form-control inputField" rows="3" style="resize:none;" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$comment.message_content|htmlspecialchars}}</textarea>
                    </div>
                    <input type="text" name="editComment" value="{{$comment.message_id}}" style="display: none"/>
                    </form>
                    <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success" form="editCommentForm{{$comment.message_id}}">確認修改</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                </div>
            </div>
            </div>
            </div>

            <div class="modal fade" id="dltComment{{$comment.message_id}}" role="dialog">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">刪除留言</h4>
                </div>
                <div class="modal-body">
                    進行此操作後資料將無法復原，請問確定刪除嗎?
                </div>
                <div class="modal-footer">
                    <form method="post" action="">
                        <input type="text" name="dltComment" value="{{$comment.message_id}}" style="display: none"/>
                        <button type="submit" class="btn btn-success">確認</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    </form>
                </div>
            </div>
            </div>
            </div>
        {{/if}}
    </div> <!-- end of row -->

    <div class="messageBody">
    <pre style="border: 0; background-color: transparent; resize:none; white-space: pre-wrap;"><p>{{$comment.message_content|htmlspecialchars}}</p></pre>
    </div>

</div>
</div>
{{/foreach}}