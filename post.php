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
   
    if (isset($_POST['editPost'])) {

        # $_POST['editPost']'s value is broadId
        $commentData = new FormatData();
        $commentData->EditCommentForm($_POST['editPost'], $_POST['editPostText']);

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

    header("Cache-control: private");
    require_once('./views/post.page.php');
    # End Show Page
