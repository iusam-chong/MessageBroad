<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    
    <h2>Register</h2>
    <form method="post" action="">
        <label>User Name</label>
        <br>
        <input maxlength="16" type="text" name="textUserName">
        <!--  required="required" pattern="[a-zA-Z0-9]{8,}" -->
        
        <br>
        <label>Password</label>
        <br>
        <input maxlength="16" type="password" name="textPassword">
    
        <br>
        <button type="submit" name="register" value="1">register</button>
    </form> 
</body>
</html>