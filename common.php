<?php 
function alertMes($mes,$url){
	echo "<script>alert('{$mes}');</script>";
	echo "<script>window.location='{$url}';</script>";
}

function check(){
if($_SESSION["userid"]==''){
alertMes("请先登录","dl.php");
      }
}

/*
echo '<pre>';
print_r( $_SESSION );
print_r( $_COOKIE );
echo '</pre>';
*/