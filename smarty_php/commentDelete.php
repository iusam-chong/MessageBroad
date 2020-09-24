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
    if (!isset($_POST['dltComment']) || !isset($_POST['broadId'])) {
        actionFail();
    }

    $commentId = $_POST['dltComment'];
    $broadId = $_POST['broadId'];

    $userData = $user->getUserDataBySession();
    $userId = $userData['user_id'];

    # Check postId and commentId format
    if(!(preg_match("/^[1-9][0-9]*$/",$commentId))) {
        actionFail();
    }

    if(!(preg_match("/^[1-9][0-9]*$/",$broadId))) {
        actionFail();
    }

    # check user own this comment or not
    if (!$broad->checkMessageOwner($broadId, $commentId)) {
        actionFail();
    }

    if (!$broad->disableComment($commentId)) {
        actionFail();
    }

    $returnData['status'] = 1;
    echo json_encode($returnData);

    function actionFail() {
        $returnData['status'] = 3;
        $returnData['message'] = '修改留言失敗，請重新再試！';
        echo json_encode($returnData);
        exit();
    }

    function loginFail() {
        $returnData['status'] = 2;
        $returnData['message'] = '請登入後再進行操作！';
        echo json_encode($returnData);
        exit();
    }
    

    