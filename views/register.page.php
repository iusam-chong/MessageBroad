<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊 - 留言板</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        
    <?php require_once('./views/blade/navbar.page.php'); ?>

    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <div class="thumbnail">
        <div class="caption">
            <form method="post" action="">
                <div class="form-group">
                    <label for="user-name">帳號</label>
                    <input name="textUserName" maxlength="16" type="text" class="form-control" id="user-name">
                </div>
                <div class="form-group">
                    <label for="pwd">密碼</label>
                    <input name="textPassword" maxlength="16" type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">密碼確認</label>
                    <input name="textPasswordConfirm" maxlength="16" type="password" class="form-control" id="pwd">
                </div>
                <button name="register" value="1" type="submit" class="btn btn-primary btn-block">註冊</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    </div>

</body>
</html>