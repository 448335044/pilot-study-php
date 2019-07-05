<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
</head>
<body>
    <form action="b.php" method="post">
        <img src="b.php"  onclick="this.src='b.php?'+new Date().getTime();" width="100" height="30"><br/>
        <input type="text" name="login_verifycode" placeholder="请输入验证码"><br/>
        <input type="submit" value="验证">
    </form>
</body>
</html>

