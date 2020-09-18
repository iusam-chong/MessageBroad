<div class="container">
    <div class="row" style="padding-bottom: 20px;">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="thumbnail">
        <div class="caption">
            <div class="editStatus">
                <div class="row">
                    <div class="col-sm-8">
                        <p><?=$broadData['user_name']?></p>
                        <p><span class="glyphicon glyphicon-time"></span> <?=$broadData['create_time']?></p>
                    </div>

                    <?php if($broadData['user_id'] == $userId): ?>
                        <div class="col-sm-4 pull-right editIcon">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
                                        <span class="glyphicon glyphicon-th-large"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                        <li>
                                            <a href="#">
                                                <button class="btn btn-link btn-block editBtn">
                                                    <span class="glyphicon glyphicon-pencil"></span> 修改
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <form method="post" action="">    
                                                <button value="<?=$broadData['broad_id']?>" name="dltPost" type="submit" class="btn btn-link btn-block">
                                                    <span class="glyphicon glyphicon-trash"></span> 刪除
                                                </button>
                                            </form>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <?php endif;?>
                </div><!-- end of row -->
                <div class="messageBody">
                    <p><?=$broadData['message']?></p>
                </div>
                <div class="messageInput">
                    <form method="post" action="">
                        <div class="form-group">
                            <textarea name="editPostText" required="required" class="form-control inputField" rows="3" style="resize:none;"><?=$broadData['message']?></textarea>
                        </div>
                        <input type="text" name="editPost" value="<?=$broadData['broad_id']?>" style="display: none"/>
                    </form>
                    <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                </div>
            </div>

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
                                            <button class="btn btn-link btn-block editBtn">
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
                    <?php endif; ?>
                </div> <!-- end of row -->

                <div class="messageBody">
                    <p><?=$m['message_content']?></p>
                </div>
                <div class="messageInput">
                    <form method="post" action="">
                        <div class="form-group">
                            <textarea name="editCommentText" required="required" class="form-control inputField" rows="3" style="resize:none;"><?=$m['message_content']?></textarea>
                        </div>
                        <input type="text" name="editComment" value="<?=$m['message_id']?>" style="display: none"/>
                    </form>
                    <p style="font-size:10px;" class="text-muted">取消<span class="text-danger">ESC</span> 確認修改<span class="text-success">ENTER</span></p>
                </div>

            </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
    </div>

    <?php if ($loginStatus):?>
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
                        <button type="submit" name="newComment" value="<?=$broadId?>" class="btn btn-success btn-block">留言</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <?php endif ?>
        
</div>