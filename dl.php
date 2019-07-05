<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录页面</title>
 
     
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
	 
    <script charset="utf-8" type="text/javascript" src="login.js"></script>
</head>
 
<body class="login">




    <div id="login_form">
 <div >文章管理系统</div>
       
 
       <form method="post" action="login1.php" >
 
        <p><input type="text" class="text_box" placeholder="请输入用户名" 
		    id="username"  name="username" value="<?php echo $_COOKIE["username"];?>" ></p>
        <p><input type="password" class="text_box" placeholder="请输入密码" id="password"  name="password"  value="<?php echo $_COOKIE["password"];?>" ></p>
		<p><input type="text" class="text_box_1" name="login_verifycode" placeholder="请输入验证码" >
		   <img  src="b.php"  onclick="this.src='b.php?'+new Date().getTime();" width="100" height="60"></p>
		   <label class="rem"><input  type="checkbox" name="rember" value="1">记住用户登录信息</label> 
    <div class="forget">
	
          <a  href="register.php">注册用户</a> | 
          <a  href="forget.php">找回密码</a>
    </div>
		  <div class="dl">
            <input type="submit" class="login_btn" value="登录" onclick="login();">

			<input type="reset" class="login_btn_1" value="重置" >

            
			</div>
        
        </form>
		</div>
     

</body>
</html>


