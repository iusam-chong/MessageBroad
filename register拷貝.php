<?
    // require_once('./includes/class-autoload.php');
    require_once('./classes/dbh.php');
    require_once('./classes/users.php');
    require_once('./classes/formatdata.php');
    session_start();
    
    $user = new Users();

    if ($user->sessionLogin()) {
        header('location: index');
    } 

    if(isset($_POST['register'])) {
        
        $rgData = new FormatData();
        $rgData->registerForm($_POST['textUserName'],$_POST['textPassword']);

        if ($user->createUser($rgData)){

            header('location: login');
        }
    }

    require_once('./views/register.page.php');
?>