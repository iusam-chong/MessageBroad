<?php
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();
    $broad = new Broad();

    # Get current user data
    $userData = $user->getUserDataBySession();
    $userId = $userData['user_id'];

    # PostId is BroadId
    if(!isset($_POST['postId'])) {
        header('location: index');
    }

    # Condition action START
    if (isset($_POST['newComment'])) {
        
        # $_POST['newComment']'s value is broadId
        $commentData = new FormatData();
        $commentData->commentForm($userId, $_POST['newComment'], $_POST['newCommentText']);
        
        if (!$broad->newComment($commentData))
            echo "new comment unsuccess!"; 
    }

    if (isset($_POST['editComment'])) {

        # $_POST['editComment']'s value is broadId
        $commentData = new FormatData();
        $commentData->EditCommentForm($_POST['editComment'], $_POST['editCommentText']);
    
        if (!$broad->modifyComment($commentData))
            echo "edit comment unsuccess!";
    }

    if (isset($_POST['dltComment'])) {

        # $_POST['dltComment']'s value is broadId
        if(!$broad->disableComment($_POST['dltComment']))
            echo "delete comment unsuccess!";
    }
    # Condition action END

    # Start Show Page
    require_once('./views/post.page.php');
    # End Show Page
