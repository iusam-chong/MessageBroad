<div class="container">
<form id="goPost" method="post" action="post"></form>
<?php 
    $broadData = $broad->showAllBroad();
    foreach($broadData as $b) {
        
        $postId = $b['broad_id'];
        $postMessage = $b['message'];
        $postAt = $b['create_time'];
        $postAuthor = $b['user_name'];

        echo '<div class="row" style="padding-bottom: 20px;">
                <div class="col-lg-8 col-lg-offset-2">
                <div class="thumbnail">
                    <div class="caption">
                        <p>'.$postAuthor.'</p>
                        <p><span class="glyphicon glyphicon-time"></span> '.$postAt.'</p>
                        <p>'.$postMessage.'</p>
                        <div class="row">
                        <div class="col pull-right">
                            <span style="padding-right:15px">
                                <button form="goPost" type="submit" name="postId" value="'.$postId.'" class="btn btn-primary">留言 <span class="badge progress-bar-primary">4</span></button>
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>';
    }
    # End Of foreach
?>

</div>