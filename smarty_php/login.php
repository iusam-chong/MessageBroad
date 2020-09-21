<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');
    
    $user = new Users();
    if ($user->sessionLogin()) {
        header('location: index');
    }

    if(isset($_POST['login'])) {
        
        $lgData = new FormatData();
        $lgData->loginForm($_POST['textUserName'],$_POST['textPassword']);

        if ($user->manualLogin($lgData)){

            header('location: index');
        }
    }

    $smarty = new Smarty;
    $smarty->display('./templates/login.tpl');
?>