<?php
    require_once('./includes/class-autoload.php');

    session_start();

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

    require_once('./views/login.page.php');
?>