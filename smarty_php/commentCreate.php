<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();
    $broad = new Broad();
    
    $returnData = array();

    # Check user login Status
    if ((!$loginStatus)) {
        loginFail();
    } 

    # Check source variable exist
    if (!isset($_POST['newCommentText']) || !isset($_POST['newComment'])) {
        actionFail();
    }

    $newStr = $_POST['newCommentText'];
    $postId = $_POST['newComment'];

    $userData = $user->getUserDataBySession();
    $userId = $userData['user_id'];

    # Check postId format
    if(!(preg_match("/^[1-9][0-9]*$/",$postId))) {
        actionFail();
    }

    # Check string is not null
    if (!(strlen(trim($newStr)) > 0)) {
        actionFail();
    }

    # Wrap data
    $commentData = new FormatData();
    $commentData->commentForm($userId, $postId, $newStr);
    
    # Insert to Db
    if (!$broad->newComment($commentData)) {
        actionFail();
    }

    $newData = $broad->getNewMessage($postId);
    if (!$newData) {
        actionFail();
    }

    $returnData['content'] = $newData;

    $returnData['status'] = 1;
    echo json_encode($returnData);

    function actionFail() {
        $returnData['status'] = 3;
        $returnData['message'] = '新增貼文失敗，請重新再試！';
        echo json_encode($returnData);
        exit();
    }

    function loginFail() {
        $returnData['status'] = 2;
        $returnData['message'] = '請登入後再進行操作！';
        echo json_encode($returnData);
        exit();
    }
    

    