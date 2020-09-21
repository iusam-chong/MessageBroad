<?php

$host = "localhost";
$user = "root";
$pwd = "root";
$dbName = "test";

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8mb4';
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);


    //echo $_POST["broadId"];die();

if(isset($_POST["broadId"])) {
    //echo "Get in ajax.php<br>";
    
    $broadId = $_POST["broadId"];
    $showLimit = 2;

    // Count all records except already displayed
    $sql = 'SELECT COUNT(*) as num_rows FROM content WHERE id < ? ORDER BY id DESC';
    $param = array($broadId);
    $stmt = $pdo->prepare($sql);
    $stmt->execute($param);
    $row = $stmt->fetch();
    $totalRowCount = $row['num_rows'];
    
    echo 'welcome to ajax '.'|total row count : '.$totalRowCount.' |broadId : '.$broadId.' |showLimit : '.$showLimit.'<hr>';
    
    // $sql = 'SELECT * FROM `content` WHERE id < ? ORDER BY `id` DESC LIMIT ?';
    // $stmt = $pdo->prepare($sql);
    // $param = array($broadId, $showLimit);
    // foreach($param as $index => $value) {
    //     $stmt->bindValue(($index+1), $value, PDO::PARAM_INT);
    // }
    // $stmt->execute();
    // $result = $stmt->fetchAll();
    // print_r($result);

    $sql = 'SELECT * FROM `content` WHERE id < ? ORDER BY `id` DESC LIMIT ?';
    // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $stmt = $pdo->prepare($sql);
    $param = array($broadId, $showLimit);
    $stmt->execute($param);
    // $result = $stmt->fetchAll();
    // print_r($result);

    
    $rowCount = $stmt->rowCount(); 

    if($rowCount !== false) {
        echo 'row count : ' .$rowCount . '<hr>';
        $result = $stmt->fetchAll();

        //print_r($result); die();
        foreach ($result as $r) {
            $postId = $r['id'];
            $postContent = nl2br(htmlspecialchars($r['text'], ENT_COMPAT));
    ?>
            <div class="list_item"><?php echo 'PostId : '.$postId.'<br>'?><?=$postContent?></div><hr>
        <?php } ?>
            <?php if ($totalRowCount > $showLimit):?>
            <div class="show_more_main" id="show_more_main<?=$postId?>">
                <span id="<?=$postId; ?>" class="show_more" title="Load more posts">Show more</span>
                <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
            </div>
            <?php endif; ?>
    <?php } ?>

<?php } ?>