<?php
    require_once('./includes/class-autoload.php');
    
    session_start();
    
    $user = new Users();
    $broad = new Broad();

    # User status START
    if (!$user->sessionLogin()) {
        header('location: index');
    } 

    if (isset($_POST['logout'])) {
        $logout = $user->logout();
        header('location: index');
    }
    # User status END

    # Get current user data
    $userData = $user->getUserDataBySession();
    $userId = $userData['user_id'];

    # Condition action START
    if (isset($_POST['createPost'])) {
        if (!$broad->createPost($_POST['message']))
            echo "create post unsuccess!";
    }

    if (isset($_POST['newComment'])) {
        
        # $_POST['newComment']'s value is broadId
        $commentData = new FormatData();
        $commentData->commentForm($userId, $_POST['newComment'], $_POST['comment']);
        
        if (!$broad->newComment($commentData))
            echo "comment unsuccess!";   
    }

    if (isset($_POST['dltComment'])) {
        if(!$broad->disableMessage($_POST['dltComment']))
            echo "delete unsuccess!";
    }

    if (isset($_POST['editComment'])) {
        echo $_POST['commentText']."|";
        print_r($_POST['editComment']);
    }
    # Condition action END

    # Future function
    if (isset($_POST['followUser'])) {
        $user->addFollower($_POST['followUser']);
    }

    # Start Show Page
    $userName = $userData['user_name'];

    require_once('./views/home.page.php');
    # End Show Page
?>