<?php

if (isset($_POST['submit'])){
    echo nl2br($_POST['text']);
}

$text = 'fffffffffffff <br />fffffffffff';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p class="text2"><?=$text?></p>
        <textarea name="text" class="textarea"><?=$text?></textarea>
        <button type="submit" name="submit">Go</button>
    </form>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var str = $(".textarea").val();
       // alert(str);
        var regex = /<br\s*[\/]?>/gi;
        $(".textarea").val(str.replace(regex, "\n"));

        // var str = $(".text2").val();
        // alert(str);
        // var regex = /<br\s*[\/]?>/gi;
        // $(".textarea").val(str.replace(regex, "\n"));
    </script>
</body>
</html>



