<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();
    if ($user->sessionLogin()) {
        header('location: index');
    }

    if(isset($_POST['register'])) {
        
        if ($_POST['textPasswordConfirm'] === $_POST['textPasswordConfirm']) {
            
            $rgData = new FormatData();
            $rgData->registerForm($_POST['textUserName'],$_POST['textPassword']);

            if ($user->createUser($rgData)){

                header('location: login');
            }
        }
    }

    $smarty = new Smarty;
    $smarty->display('./templates/register.tpl');
?>