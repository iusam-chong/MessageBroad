<?php

$host = "localhost";
$user = "root";
$pwd = "root";
$dbName = "test";

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8mb4';
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);




if (isset($_POST['dataText'])){

    //echo 'post.php<br>';

    $content = $_POST['dataText'];
    //echo $content ;

    $sql = 'INSERT INTO `content` (`text`) VALUES (?)';
    $param = array($content);

    $stmt = $pdo->prepare($sql);
    if($stmt->execute($param)) {
        echo 'insert success' ;
    } else {
        echo 'insert failed' ;
    }
}


