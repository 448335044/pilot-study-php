<?php
require_once('config.php');
$link=mysqli_connect("$host","$user","$password");
if(!$link){die("连接失败".mysqli_error());}
mysqli_query($link,"set names utf8") or die(mysqli_error());
mysqli_select_db($link,"artical") or die(mysqli_error());
?>