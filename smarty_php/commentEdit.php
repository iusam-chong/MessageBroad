<?php
require_once './libs/Smarty.class.php';
require_once './includes/class-autoload.php';
require_once './includes/loginStatus.php';

$broad = new Broad();

$returnData = array();

# Check user login Status
if ((!$loginStatus)) {
    loginFail();
}

# Check source variable exist
if (!isset($_POST['editCommentText']) || !isset($_POST['editComment']) || !isset($_POST['broadId'])) {
    actionFail();
}

$newStr = $_POST['editCommentText'];
$commentId = $_POST['editComment'];
$broadId = $_POST['broadId'];

# Check postId format
if (!(preg_match("/^[1-9][0-9]*$/", $commentId))) {
    actionFail();
}

if (!(preg_match("/^[1-9][0-9]*$/", $broadId))) {
    actionFail();
}

# Check string is not null
if (!(strlen(trim($newStr)) > 0)) {
    actionFail();
}

# check user own this comment or not
if (!$broad->checkMessageOwner($broadId, $commentId)) {
    actionFail();
}

$commentData = new FormatData();
$commentData->EditCommentForm($commentId, $newStr);

# Insert to Db
if (!$broad->modifyComment($commentData)) {
    actionFail();
}

$returnData['newText'] = $newStr;
$returnData['status'] = 1;
echo json_encode($returnData);

function actionFail()
{
    $returnData['status'] = 3;
    $returnData['message'] = '修改留言失敗，請重新再試！';
    echo json_encode($returnData);
    exit();
}

function loginFail()
{
    $returnData['status'] = 2;
    $returnData['message'] = '請登入後再進行操作！';
    echo json_encode($returnData);
    exit();
}
