<?php
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();
    $broad = new Broad();

    # Get current user data
    $userData = $user->getUserDataBySession();
    $userId = $userData['user_id'];

    # PostId is BroadId
    if (!isset($_COOKIE['postId'])) {
        header('location: index');
    }
    $broadId = $_COOKIE['postId'];

    # Condition action START
    if (isset($_POST['newComment'])) {
        
        # $_POST['newComment']'s value is broadId
        $content = $_POST['newCommentText'];

        $commentData = new FormatData();
        $commentData->commentForm($userId, $_POST['newComment'], $content);
        
        if (!$broad->newComment($commentData))
            echo "new comment unsuccess!"; 
    }

    if (isset($_POST['editComment'])) {

        # $_POST['editComment']'s value is broadId
        $content = $_POST['editCommentText'];

        $commentData = new FormatData();
        $commentData->EditCommentForm($_POST['editComment'], $content);
    
        if (!$broad->modifyComment($commentData))
            echo "edit comment unsuccess!";
    }

    if (isset($_POST['dltComment'])) {

        # $_POST['dltComment']'s value is broadId
        if(!$broad->disableComment($_POST['dltComment']))
            echo "delete comment unsuccess!";
    }
   
    if (isset($_POST['editPost'])) {

        echo '=D';
        # $_POST['editPost']'s value is broadId
        $content = nl2br($_POST['editPostText']);
        $content = preg_replace("/\r|\n/", "", $content);

        $commentData = new FormatData();
        $commentData->EditCommentForm($_POST['editPost'], $content);

        if(!$broad->modifyPost($commentData)){
            echo "edit post unsuccess!";
        }
    }

    if (isset($_POST['dltPost'])) {

        # $_POST['dltComment']'s value is broadId
        if(!$broad->disablePost($_POST['dltPost']))
            echo "delete post unsuccess!";
        header('location: index');
    }
    # Condition action END

    # Start Show Page
    $userName = $userData['user_name'];

    # Check broad not found or delete
    $broadData = $broad->showBoard($broadId);
    if (!$broadData) {
        header('location: index');
    }
    // print_r($broadData);

    require_once('./views/post.page.php');
    # End Show Page
