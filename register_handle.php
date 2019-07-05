<?php
include"func.php";
$username = $_POST['name'];
$tel=$_POST['tel'];
$idcard=$_POST['idcard'];
$password=$_POST['password'];
$id = $_POST['id'];
if ($username == ''||$tel==""||$idcard==""||$password=="") {
	echo "<script>alert('请填写完整的用户信息！');
	window.location.href='register.php';</script>";
	exit;
}
$coon=connect();
$sql="insert into admin (name,tel,idcard,password) values ('$username','$tel','$idcard','$password')";
$res=mysqli_query($coon,$sql);

echo "<script>alert('注册成功');window.location.href='dl.html'</script>";
?>