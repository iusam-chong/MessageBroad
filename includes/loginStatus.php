<?php

session_start();

$login = new Users();

# Set login status
$loginStatus = ($login->sessionLogin()) ? true : false;

# User logout
if (isset($_POST['logout'])) {
    $login->logout();
    header('location: index');
}