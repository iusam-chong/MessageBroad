<?php $messageData = $broad->showMessage($broadId); ?>
<?php foreach($messageData as $m) : ?>
<div class="thumbnail editStatus">
<div class="caption bg-light">
    <div class="row">
        <div class="col-sm-8">
            <p><?=$m['user_name']?></p>
            <p><span class="glyphicon glyphicon-time"></span> <?=$m['create_time']?></p>
        </div>

        <?php if($m['user_id'] == $userId): ?>
        <div class="col-sm-4 pull-right editIcon">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                        <span class="glyphicon glyphicon-th-large"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                        <li>
                            <a href="#">
                                <button type="button" class="btn btn-link btn-block editBtn" data-toggle="modal" data-target="#myModal<?=$m['message_id']?>">
                                    <span class="glyphicon glyphicon-pencil"></span> 修改
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <form method="post" action="">    
                                <button value="<?=$m['message_id']?>" name="dltComment" type="submit" class="btn btn-link btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> 刪除
                                </button>
                            </form>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="modal fade" id="myModal<?=$m['message_id']?>" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">修改留言</h4>
                </div>
                <div class="modal-body">
                    <div class="messageInput">
                    <form method="post" action="" id="editMessage<?=$m['message_id']?>">
                    <div class="form-group">
                    <textarea name="editCommentText" required="required" class="form-control inputField" rows="3" style="resize:none;" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'><?=nl2br(htmlspecialchars($m['message_content'], ENT_COMPAT))?></textarea>
                    </div>
                    <input type="text" name="editComment" value="<?=$m['message_id']?>" style="display: none"/>
                    </form>
                    <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success" form="editMessage<?=$m['message_id']?>">確認修改</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                </div>
            </div>
            
            </div>
        </div>
        <?php endif; ?>
    </div> <!-- end of row -->

    <div class="messageBody">
        <p style="word-wrap: break-word;"><?=nl2br(htmlspecialchars($m['message_content'], ENT_COMPAT))?></p>
    </div>
    

</div>
</div>
<?php endforeach; ?>