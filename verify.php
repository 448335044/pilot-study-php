<?php
$host="localhost";
$user="root";
$password="123456";
$con=mysqli_connect("$host","$user","$password");
if(!$con){die("连接失败".mysqli_error());}
echo "连接成功";
mysqli_query($con,"set names utf8") or die(mysqli_error());
mysqli_select_db($con,"artical") or die(mysqli_error());
$id=$_POST["id"];
$upassword=$_POST["u_password"];

$sql="select name,password from admin where id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);


function login() {
 
    var username = document.getElementById("username");
    var pass = document.getElementById("password");
 
    if (username.value == "") {
 
        alert("请输入用户名");
 
    } else if (pass.value  == "") {
 
        alert("请输入密码");
 
    } else if(username.value == "admin" && pass.value == "123456"){
 
        window.location.href="welcome.html";
 
    } else {
 
        alert("请输入正确的用户名和密码！")
 
    }
}


if($row['password']==$upassword){
header("location:major.php?name=$row[name]");
exit();}
header("location:login.php");
echo "用户名或密码错误";
exit();


mysqli_free_reslut($res);
mysqli_close($con);

?>