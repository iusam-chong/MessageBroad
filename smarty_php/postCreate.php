<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');
    require_once('./includes/loginStatus.php');

    $user = new Users();
    $broad = new Broad();
    
    if ((!$loginStatus) || (!isset($_POST['message']))) {
        echo 0;
        exit();
    } 

    