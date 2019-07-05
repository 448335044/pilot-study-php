<?php
!session_id() && session_start();
include_once 'func.php';
$con=connect();

$loginverifycode=$_POST[login_verifycode];
$username=$_POST['username'];
$password=$_POST['password'];

$loginverifycode == '' && alert('请输入验证码');
($username == '' || $password == '' ) && alert('用户名或密码不能为空');
(strtolower($_SESSION["verifycode_text"]) != strtolower($loginverifycode)) && alert('验证码错误');

   $sql = "select * from admin where name='{$username}' and password='{$password}'";
   $res = mysqli_query($con,$sql);
   
   if(mysqli_num_rows( $res )){
	   $row                 = mysqli_fetch_assoc( $res );
       $_SESSION['captcha'] = '';
       $_SESSION['userid']  = $row['id'];

       setcookie('username', $username, time()+3600*24*365, '/');
       setcookie('password', $password, time()+3600*24*365, '/');
       
       alert('登录成功', 'major.php');                
   }else{
       alert('登录资料错误');
   }
       


mysqli_free_reslut($res);
mysqli_close($con);



