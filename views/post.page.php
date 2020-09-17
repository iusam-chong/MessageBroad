<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板 - 留下您的偉論</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
    require_once('./views/blade/navbar.page.php');
    require_once('./views/blade/postBody.page.php');
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".messageInput").hide();

        $(".editBtn").click(function(){
            $(this).closest(".editIcon").hide();
            $(this).closest(".editStatus").find(".messageBody").hide();
            $(this).closest(".editStatus").find(".messageInput").show();

            var text = $(this).closest(".editStatus").find(".inputField").val();
            $(this).closest(".editStatus").find(".inputField").val("").focus().val(text);
        })

        $(".messageInput").keydown(function(event){
            // keycode vs which search in google
            if (event.which === 27){
                $(this).hide();
                $(this).closest(".editStatus").find(".messageBody").show();
                $(this).closest(".editStatus").find(".editIcon").show();
            }
        })
    })
</script>
</body>
</html>