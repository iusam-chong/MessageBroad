<?php 
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $broad = new Broad();

    $returnData = array();

    if ((!$loginStatus)) {
        $returnData['status'] = 2;
        $returnData['message'] = '請登入後再進行操作！';
        echo json_encode($returnData);
        exit();
    }
    
    if (!isset($_POST['dltPostId'])) {
        $returnData['status'] = 3;
        $returnData['message'] = '刪除貼文失敗，請重新再試！';
        echo json_encode($returnData);
        exit();
    }

    if (!$broad->checkBroadOwner($_POST['dltPostId'])) {
        $returnData['status'] = 3;
        $returnData['message'] = '刪除貼文失敗，請重新再試！';
        echo json_encode($returnData);
        exit();
    }

    if (!$broad->disablePost($_POST['dltPostId'])) {
        $returnData['status'] = 3;
        $returnData['message'] = '刪除貼文失敗，請重新再試！';
        echo json_encode($returnData);
        exit();
    }

    $returnData['status'] = 1;
    $returnData['message'] = '刪除貼文成功！換回首頁！';
    echo json_encode($returnData);
