<!DOCTYPE html>
<html>

<head>

</head>
<body>

<form action="" method="post">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="email"><br>
<input id="submit" type="button" name="submit" value="submit">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // click on button submit
        $("#submit").on('click', function(){
            // send ajax

            var formData = $("form").serialize();
            
            $.ajax({
                url: 'ajax.php', // url where to submit the request
                type : "POST", // type of action POST || GET
                data : formData, // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                }
            })
        });
    });

</script>
</body>
</html>