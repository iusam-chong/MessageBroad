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
    
    if (!isset($_POST['editPostId']) || !isset($_POST['editPostText'])) {
        $returnData['status'] = 3;
        $returnData['message'] = '修改貼文失敗，請稍候再試！';
        echo json_encode($returnData);
        exit();
    }

    if ($_POST['editPostText'] === "") {
        $returnData['status'] = 3;
        $returnData['message'] = '修改貼文失敗，請稍候再試！';
        echo json_encode($returnData);
        exit();
    }

    $commentData = new FormatData();
    $commentData->EditCommentForm($_POST['editPostId'], $_POST['editPostText']);

    if (!$broad->modifyPost($commentData)) {
        $returnData['status'] = 3;
        $returnData['message'] = '新增貼文失敗，請稍候再試！';
        echo json_encode($returnData);
        exit();
    }

    $returnData['status'] = 1;
    $returnData['newText'] = $_POST['editPostText'];
    echo json_encode($returnData);
