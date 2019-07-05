<?php 
function alertMes($mes,$url){
	echo "<script>alert('{$mes}');</script>";
	echo "<script>window.location='{$url}';</script>";
}

function check(){
if($_SESSION['adminid']==""){
alertMes("请先登录","dl.html");
      }
}
?>