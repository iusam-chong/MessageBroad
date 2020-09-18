<?php

$host = "localhost";
$user = "root";
$pwd = "root";
$dbName = "test";

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8mb4';
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$content = "";
if (isset($_POST['submit'])){
    //echo nl2br($_POST['text']);
    $content = $_POST['text'];
    
    $sql = 'INSERT INTO `content` (`text`) VALUES (?)';
    $param = array($content);

    $stmt = $pdo->prepare($sql);
    if(!$stmt->execute($param)) {
        echo 'false tp insert' ;
    }

    // $sql = 'SELECT * FROM `content` ORDER BY `id` DESC LIMIT 2';
    // $stmt = $pdo->prepare($sql);
    // if(!$stmt->execute(null)){
    //     echo 'false';
    // }
    // $row = $stmt->fetch();

    // $content = nl2br(htmlspecialchars($row['text'], ENT_COMPAT));
    // $content = htmlspecialchars($content, ENT_COMPAT);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>New Comment: </p>
    <form method="post">
        <textarea name="text" rows="10" class="form-control" style="width:500px; resize:none;"><?=$text?></textarea>
        <button type="submit" name="submit">Go</button>
    </form>

    <div class="postList">
    <?php 

    $sql = 'SELECT * FROM `content` ORDER BY `id` DESC LIMIT 5';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $rowCount = $stmt->rowCount(); 
    // $row = $stmt->fetch();

    if($rowCount !== false) {
        echo $rowCount . '<hr>';
        $result = $stmt->fetchAll();

        //print_r($result);
        foreach ($result as $r) {
            $postId = $r['id'];
            $postContent = nl2br(htmlspecialchars($r['text'], ENT_COMPAT));
    ?>
    <div class="list_item"><?php echo 'PostId : '.$postId.'<br>'?><?=$postContent?></div><hr>
    <?php } ?>
    <div class="show_more_main" id="show_more_main<?=$postId?>">
        <span id="<?=$postId; ?>" class="show_more" title="Load more posts">Show more</span>
        <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
    </div>
    <?php } ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $(document).on('click','.show_more',function(){
                var postId = $(this).attr('id');
                //alert(postId);
                $('.show_more').hide();
                $('.loding').show();
                $.ajax({
                    type:'POST',
                    url:'test_ajax.php',
                    data: {broadId: postId },
                    success:function(html){
                        $('#show_more_main'+postId).remove();
                        $('.postList').append(html);
                    },
                    error(){
                        alert('post fail');
                    }
                });
            });
        });
    </script>
</body>
</html>



