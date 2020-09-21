<div class="container">
<form id="goPost" method="post" action=""></form>
<?php 
    $broadData = $broad->showAllBroad();
    foreach($broadData as $b) :
        
        $postId = $b['broad_id'];
        $postMessage = $b['message'];
        $postAt = $b['create_time'];
        $postAuthor = $b['user_name'];
        $count = $b['message_count']; ?>

        <div class="row" style="padding-bottom: 20px;">
            <div class="col-lg-8 col-lg-offset-2">
            <div class="thumbnail">
                <div class="caption">
                    <p><?=$postAuthor?></p>
                    <p><span class="glyphicon glyphicon-time"></span> <?=$postAt?></p>
                    <p style="word-wrap: break-word;"><?=nl2br(htmlspecialchars($postMessage, ENT_COMPAT))?></p>
                    <div class="row">
                    <div class="col pull-right">
                        <span style="padding-right:15px">
                            <button form="goPost" type="submit" name="postId" value="<?=$postId?>" class="btn btn-primary">留言 <span class="badge progress-bar-primary"><?=$count?></span></button>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
<?php endforeach; ?>

</div>