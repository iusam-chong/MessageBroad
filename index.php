<?php 
    require_once('./includes/class-autoload.php');
    
    session_start();

    $user = new Users();

    if ($user->sessionLogin()) {
        header('location: home');
    } else {
        header('location: login');
    }
?>