<?
    // require_once('./includes/class-autoload.php');
    require_once('./classes/dbh.php');
    require_once('./classes/users.php');
    require_once('./classes/broad.php');
    session_start();
    
    $user = new Users();
    $broad = new Broad();

    if (!$user->sessionLogin()) {
        header('location: index');
    } 

    if (isset($_POST['createBroad'])){
        "get in IF <br>";
        
        $broad->createBroad($_POST['message']);
    }

    $broad->showBroad();

    # Start Show Page
    $userData = $user->getUserDataBySession();
    $userName = $userData['user_name'];

    require_once('./views/home.page.php');
    # End Show Page
?>