<?php
include"func.php";
$id=$_GET['id'];
$where="id=$id";
$table="art_admin1";
delete($table,$where);
echo "<script>alert('删除成功');window.location.href='major.php' </script>";

?>