<div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="thumbnail">
    <div class="caption">
    <div class="editStatus">
        <div class="row">
            <div class="col-sm-8">
                <p>{{$post.user_name}}</p>
                <p><span class="glyphicon glyphicon-time"></span> {{$post.create_time}}</p>
            </div>

            {{if $post.user_id === $userId}}
                <div class="col-sm-4 pull-right editIcon">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                        <span class="glyphicon glyphicon-th-large"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <li>
                        <a href="#">
                        <button class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#editPost{{$post.broad_id}}">
                            <span class="glyphicon glyphicon-pencil"></span> 修改
                        </button>
                        </a>
                    </li>
                        <li>
                        <a href="#">
                        <button class="btn btn-link btn-block" data-toggle="modal" data-target="#dltPost{{$post.broad_id}}">
                            <span class="glyphicon glyphicon-trash"></span> 刪除
                        </button>
                        </a>
                        </li>
                    </ul>
                </li>
                </ul>
                </div>

                <div class="modal fade" id="editPost{{$post.broad_id}}" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">修改貼文</h4>
                    </div>
                    <div class="modal-body">
                        <div class="messageInput">
                        <form method="post" action="" id="editPostForm{{$post.broad_id}}">
                        <div class="form-group">
                        <textarea name="editPostText" required="required" class="form-control inputField" rows="5" style="resize:none;" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$post.message|htmlspecialchars}}</textarea>
                        </div>
                        <input type="text" name="editPost" value="{{$post.broad_id}}" style="display: none"/>
                        </form>
                        <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-success" form="editPostForm{{$post.broad_id}}">確認修改</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    </div>
                </div>
                </div>
                </div>

                <div class="modal fade" id="dltPost{{$post.broad_id}}" role="dialog">
                <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">刪除貼文</h4>
                    </div>
                    <div class="modal-body">
                        進行此操作後資料將無法復原，請問確定刪除嗎?
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="">
                            <input type="text" name="dltPost" value="{{$post.broad_id}}" style="display: none"/>
                            <button type="submit" class="btn btn-warning">確認</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                        </form>
                    </div>
                </div>
                </div>
                </div>
            {{/if}}
        </div><!--./row-->

        <div class="messageBody">
        <pre style="border: 0; background-color: transparent; resize:none; white-space: pre-wrap;"><p>{{$post.message|htmlspecialchars}}</p></pre>
        </div>
        
    </div><!--./editStatus-->
            
    {{include file="blade/commentlist.tpl"}}

    </div><!--./caption-->
    </div><!--./thumbnail-->
    </div><!--./col-->
    </div><!--./row-->

    {{if $loginStatus}}
        <div class="row" style="padding-bottom: 20px;">
        <div class="col-lg-8 col-lg-offset-2">
        <div class="thumbnail">
        <div class="caption">
            <div class="thumbnail" style="border: 0 none;">
            <div class="caption">
                <div class="row">
                <form method="post" action="">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <textarea name="newCommentText" rows="3" required="required" class="form-control" placeholder="輸入您的留言" style="resize:none;"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" name="newComment" value="{{$post.broad_id}}" class="btn btn-success btn-block">留言</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div><!--./caption-->
        </div><!--./thumbnail-->
        </div><!--./col-->
        </div><!--./row-->
    {{/if}}
        
</div><!--./container-->