<?
    require_once('./classes/dbh.php');
    require_once('./classes/users.php');
    session_start();

    $user = new Users();

    if ($user->sessionLogin()) {
        header('location: home');
    } else {
        header('location: login');
    }
    
?>