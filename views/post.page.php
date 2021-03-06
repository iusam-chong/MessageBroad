<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板 - 寫下您的留言</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<?php
    require_once('./views/blade/navbar.page.php');
    require_once('./views/blade/postBody.page.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        //$(".messageInput").hide();

        //var regex = /<br\s*[\/]?>/gi;

        // $(".editBtn").click(function(){
        //     //$(this).closest(".editIcon").hide();
        //     //$(this).closest(".editStatus").find(".messageBody").hide();
        //     //$(this).closest(".editStatus").find(".messageInput").show();

        //     // var str = $(".inputField").val();
        //     // var regex = /<br\s*[\/]?>/gi;
        //     // $(".inputField").val(str.replace(regex, "\n"));

        //     var text = $(this).closest(".editStatus").find(".inputField").val();
        //     // text = text.replace(regex, "");

        //     // $(this).closest(".editStatus").find(".inputField").val("").focus().val(text);
        //     $(this).closest(".editStatus").find(".inputField").focus();
        // })

        $(".modal").on("shown.bs.modal", function() {
            var text = $(this).find(".inputField").val();
            $(this).find(".inputField").val("").focus().val(text);
        })

        $(".messageInput").keydown(function(event){
            // keycode vs which search in google
            // if (event.which === 27) {
            //     $(this).hide();
            //     $(this).closest(".editStatus").find(".messageBody").show();
            //     $(this).closest(".editStatus").find(".editIcon").show();
            // }

            if (event.which === 13 && !event.shiftKey) {
                
                $(this).find('form').submit();
                //return false;
                //event.preventDefault();
            }
        })
    })
</script>
</body>
</html>