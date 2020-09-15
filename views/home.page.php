<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$userName."'s ProfilePage"?></title>
</head>
<body>
    <form id="form" method="post" action=""></form>
        <button form="form" type="submit" name="logout">logout</button>    
    <br>

    <?php
        $suggestFriend = $user->getSuggestUser();
        foreach ($suggestFriend as $f) {
            $id = $f['user_id'];
            $name = $f['user_name'];
            $doc = <<<endOfDoc
                $name
                <button form="form" type="submit" name="followUser" value="$id">follow</button>
            endOfDoc;

            echo $doc;
        }
    ?>

    <form method="post" action="">
        <h3>New Post</h3>
        <textarea name="message" rows="4" cols="50" required="required"></textarea>
        <br>
        <button type="submit" name="createPost" value="1">send</button>
    </form>

    <h3>All Message</h3>
    <?php
        # Get all Broad from current user
        $broadData = $broad->showAllBroad();
        foreach($broadData as $b) {
            
            $broadId = $b['broad_id'];
            # Get all message from this broad
            $messageData = $broad->showMessage($broadId);
            echo '<hr><form id="dlt" method="post" action=""></form>';
            foreach($messageData as $m) {

                $id = $m['user_id'];
                $name = $m['user_name'];
                $postTime = $m['create_time'];
                $message = $m['message_content'];
                $messageId = $m['message_id'];

                $showBtn = <<<endOfDoc
                    <button id="editBtn">Edit</button>
                    <button form="dlt" name="dltComment" value="$messageId">Delete</button>
                endOfDoc;

                $userBtn = ($id == $userId) ? $showBtn : null ;

                $messageBody = <<<endOfDoc
                    <div id="btns">
                        $name | $message <br>
                        $postTime
                        <!--
                        <input type="submit" name="commentText" cols="40"></input>
                        -->
                        $userBtn
                    </div>
                    <br>
                endOfDoc;
                echo $messageBody;
            }

            $newCommentBody = <<<endOfDoc
                <form method="post" action="">
                    <textarea name="comment" rows="1" cols="40" required="required" placeholder="留言"></textarea>
                    <button type="submit" name="newComment" value="$broadId">send</button>
                </form>
            endOfDoc;
            echo $newCommentBody;
        }
    ?>

    <script type="text/javascript">
    </script>
</body>
</html>