<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();
    $broad = new Broad();

   # If user logged in, get current user data
   if ($loginStatus) {
        $userData = $user->getUserDataBySession();

        $userId = $userData['user_id'];
        $userName = $userData['user_name'];
    } else {
        $userId = "";
        $userName = "訪客";
    }

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

        # $_POST['dltPost']'s value is broadId
        if(!$broad->disablePost($_POST['dltPost']))
            echo "delete post unsuccess!";
        header('location: index');
    }
    # Condition action END

    # Start Show Page

    # Check broad not found or delete
    $broadData = $broad->showBoard($broadId);
    if (!$broadData) {
        header('location: index');
    }
    $messageData = $broad->showMessage($broadId);
    // print_r($broadData);

    header("Cache-control: private");
    $smarty = new Smarty;
    $smarty->assign('loginStatus', $loginStatus);

    $smarty->assign('titleFront', $userName);
    $smarty->assign('titleBack', ' - 留下您的偉論');

    $smarty->assign('post', $broadData);
    $smarty->assign('commentList', $messageData);

    $smarty->assign('userId', $userId);
    $smarty->assign('userName', $userName);

    $smarty->display('./templates/post.tpl');
    
    # End Show Page
