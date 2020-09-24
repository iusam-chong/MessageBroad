<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');
    
    $user = new Users();
    $broad = new Broad();

    # Set cookie to save postId to control post page
    if (isset($_POST['postId'])) {
        setcookie('postId', $_POST['postId']);
        header('location: post');
    }

    # If user logged in, get current user data
    if ($loginStatus) {
        $userData = $user->getUserDataBySession();

        $userId = $userData['user_id'];
        $userName = $userData['user_name'];
    } else {
        $userId = "";
        $userName = "訪客";
    }
    
    # Condition action START
    // if (isset($_POST['createPost'])) {
        
    //     if (!$broad->createPost($_POST['message']))
    //         echo "create post unsuccess!";
        
    // }
    # Condition action END

    # get LimitBroad OFFSET by 0
    $broadData = $broad->showLimitBroad(0);
    
    # Start Show Page
    header("Cache-control: no-store");
    //require_once('./views/home.page.php');
    $smarty = new Smarty;
    $smarty->assign('loginStatus', $loginStatus);

    $smarty->assign('titleFront', $userName);
    $smarty->assign('titleBack', ' - 留下您的偉論');

    $smarty->assign('postList', $broadData);

    $smarty->assign('userId', $userId);
    $smarty->assign('userName', $userName);

    $smarty->display('./templates/home.tpl');
    # End Show Page