<?php
include"func.php";
$username = $_GET['name'];

$mod_password=$_POST['password'];
$mod_passwords=$_POST['passwords'];
if(!($mod_password==$mod_passwords)){
    echo "<script>alert('您输入的密码不一致！');
	window.location.href='modify_pass.php';</script>";
	exit;
}

$id = $_POST['id'];
$table="admin";
/*
if ($mod_password == '') {
	echo "<script>alert('输入密码格式有误！');
	window.location.href='modify_handle.php';</script>";
	exit;
}*/
$coon=connect();
$sql="update admin set password=$mod_password where name='$username'";

$res=mysqli_query($coon,$sql);
echo "<script>alert('修改密码成功');window.location.href='dl.html'</script>";
?>