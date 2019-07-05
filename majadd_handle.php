<?php
$host="localhost";
$user="root";
$password="123456";
$con=mysqli_connect("$host","$user","$password");
if(!$con){die("连接失败".mysqli_error());}
echo "连接成功";
mysqli_query($con,"set names utf8") or die(mysqli_error());
mysqli_select_db($con,"artical") or die(mysqli_error());

$title=$_POST["title"];
$author=$_POST["author"];
$text=$_POST["text"];

echo $title."</br>" ;
echo $author."</br>";
echo $text;

$sql1="insert into art_admin (title,author,text) values ('$title','$author','$text')";
$res1=mysqli_query($con,$sql1);
echo "添加成功";
echo "<h2 align='center' ><a href='maj.php'>返回</a></h2>";
?>