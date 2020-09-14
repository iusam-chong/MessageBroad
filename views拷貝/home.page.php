<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$userName."'s HomePage"?></title>
</head>
<body>
    <form method="post" action="">
        <label>New Post</label>
        <br>
        <textarea name="message" rows="4" cols="50" required="required"></textarea>
        <br>
        <button type="submit" name="createBroad" value="1">send</button>
    </form>
</body>
</html>