
<?php
session_start();
include "func.php";
include"common.php";
 check();

$title=$_POST["title"];
$author=$_POST["author"];
$text=$_POST["text"];



//先校验有没有传入成功。
if(!(isset($_POST["title"])&&(!empty($_POST["title"])))){
    echo "<script>alert('标题不能为空');window.location.href='add_artcal.php'</script>";
}

$array=array(title=>$title,author=>$author,text=>$text);
$table="art_admin1";
$res=insert($table,$array);
if($res){
    echo "<script>alert('添加文章成功');window.location.href='major.php'</script>";
}
echo "<h2 align='center' ><a href='major.php' >返回</a></h2>";
?>