<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();

    $returnData = array();

    if(isset($_POST['textUserName'])) {
        if(!preg_match('/\w{6,16}/', $_POST['textUserName'])) {
            $returnData['userName'] = "請輸入英文大小寫以及數字，特殊符號無法作為帳號！";
            $returnData['status'] = 0;
        }
        // else if(!preg_match('/{6,16}/', $_POST['textUserName'])) {
        //     $returnData['userName'] = "帳號長度至少6-16個中英";
        //     $returnData['status'] = 0;
        // }
        else if($user->getUser($_POST['textUserName'])) {
            $returnData['userName'] = "帳號以被使用！";
            $returnData['status'] = 0;
        }
    }

    // if(isset($_POST['textPassword'])) {
    //     if(!((strlen($_POST['textPassword']) > 5) && (strlen($_POST['textPassword']) <= 16))) {            $returnData['userName'] = "密碼長度至少6-16";
    //         $returnData['status'] = 0;
    //     }
    // }

    // if(isset($_POST['textPasswordConfirm'])) {
    //     if(strlen($_POST['textPasswordConfirm']) !== strlen(trim($_POST['textPassword']))) {
    //         $returnData['passwordConfirm'] = "密碼與密碼確認不符！";
    //         $returnData['status'] = 0;
    //     }
    // }

    echo json_encode($returnData);
    