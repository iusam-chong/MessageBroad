<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$userName."'s ProfilePage"?></title>
</head>
<body>
    <form method="post" action="">
        <button type="submit" name="logout">logout</button>    
    </form>

    <form method="post" action="">
        <h3>New Post</h3>
        <textarea name="message" rows="4" cols="50" required="required"></textarea>
        <br>
        <button type="submit" name="createBroad" value="1">send</button>
    </form>

    <h3>All Message</h3>
    <?php
        # Get all Broad from current user
        $broadData = $broad->showAllBroad();
        foreach($broadData as $b) {
            
            $broadId = $b['broad_id'];
            # Get all message from this broad
            $messageData = $broad->showMessage($broadId);
            echo '<hr><form method="post" action="">';
            foreach($messageData as $m) {

                $id = $m['user_id'];
                $name = $m['user_name'];
                $postTime = $m['create_time'];
                $message = $m['message_content'];
                $messageId = $m['message_id'];

                $messageBody = <<<endOfDoc
                    $postTime | $name <br> $message
                    <br>
                endOfDoc;
                echo $messageBody;

                $userBtn = <<<endOfDoc
                    <div id="btns">
                        <input name="commentText" cols="40"></input>
                        <button id="editBtn" name="editComment" value="$messageId">Edit</button>
                        <button id="deleteBtn" name="dltComment" value="$messageId">Delete</button>
                    </div>
                endOfDoc;

                if ($id == $userId) 
                    echo $userBtn;
                echo '<br>';
            }
            echo "</form>";

            $newCommentBody = <<<endOfDoc
                <form method="post" action="">
                    <p><b>leave comment</b></p>
                    <textarea name="comment" rows="2" cols="50" required="required"></textarea>
                    <br>
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