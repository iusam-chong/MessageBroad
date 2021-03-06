<?php
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');
    
    $user = new Users();
    $broad = new Broad();

    # Get current user data
    $userData = $user->getUserDataBySession();
    if ($userData) {
        $userId = $userData['user_id'];
        $userName = $userData['user_name'];
    }

    # Set cookie to save postId to control post page
    if (isset($_POST['postId'])) {
        setcookie('postId', $_POST['postId']);
        header('location: post');
    }
    
    # Condition action START
    if (isset($_POST['createPost'])) {
        
        if (!$broad->createPost($_POST['message']))
            echo "create post unsuccess!";
    }
    # Condition action END

    # follower method
    // if (isset($_POST['followUser'])) {
    //     $user->addFollower($_POST['followUser']);
    // }

    # Start Show Page

    header("Cache-control: no-cache");
    require_once('./views/home.page.php');
    # End Show Page