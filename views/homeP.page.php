<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$userName."'s ProfilePage"?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <form id="form" method="post" action=""></form>
        <button form="form" type="submit" name="logout">logout</button>    
    <hr>

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

    <hr>
    <form method="post" action="">
        <h3>New Post</h3>
        <textarea name="message" rows="4" cols="50" required="required"></textarea>
        <br>
        <button type="submit" name="createPost" value="1">send</button>
    </form>

    <hr>
    <?php
        # Get all Broad from current user
        $broadData = $broad->showAllBroad();
        foreach($broadData as $b) {
            
            $broadId = $b['broad_id'];
            echo "<h3>This is Broad $broadId</h3>";

            # Get all message from this broad
            $messageData = $broad->showMessage($broadId);

            foreach($messageData as $m) {

                $id = $m['user_id'];
                $name = $m['user_name'];
                $postTime = $m['create_time'];
                $message = $m['message_content'];
                $messageId = $m['message_id'];

                $showBtn = <<<endOfDoc
                    <form method="post" action="">
                        <input type="text" name="editCommentText" value="$message" cols="40"></input>
                        <input type="submit" name="editComment" value="$messageId" style="display: none"/>
                    </form>

                    <form method="post" action="">
                        <button name="dltComment" value="$messageId">Delete</button>
                    </form>
                endOfDoc;

                $userBtn = ($id == $userId) ? $showBtn : null;

                $messageBody = <<<endOfDoc
                    <div id="btns">
                        $name | $message <br> $postTime
                        $userBtn
                    </div>
                    <br>
                endOfDoc;
                echo $messageBody;
            }

            $newCommentBody = <<<endOfDoc
                <form method="post" action="">
                    <textarea name="newCommentText" rows="1" cols="40" required="required" placeholder="留言"></textarea>
                    <button type="submit" name="newComment" value="$broadId">send</button>
                </form><hr>
            endOfDoc;
            echo $newCommentBody;
        }
    ?>

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>
</body>
</html>