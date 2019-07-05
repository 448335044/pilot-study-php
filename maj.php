<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"\>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/21 0021
 * Time: 20:31
 */
/*define("u_host","localhost");
define("u_root","root");
define("u_pwd","123456");
define("u_db","artical");
$con=mysqli_connect("u_host","u_root","u_pwd");
*/
$host="localhost";
$root="root";
$pwd="123456";
$db="artical";
$con=mysqli_connect($host,$root,$pwd);
mysqli_select_db($con,$db);
mysqli_set_charset($con,"set names utf8");
$sql="select * from admin";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);//总条数
$pagesize=3;
$pagecount=ceil($rowcount/$pagesize);//总页数
$pagenow = isset($_GET['pagenow']) ? intval($_GET['pagenow']) : 1;
$limit_one=($pagenow-1)*$pagesize;
//echo $limit_one;
//exit();
$sql="select * from art_admin  limit {$limit_one}, {$pagesize}";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
    echo "题目：".$row['title']."<br/>";
    echo "作者：".$row['author']."<br/>";
    echo "内容：".$row['text']."<hr>";}
$url=$_SERVER['PHP_SELF'];
$top="";
$top1="";
$top2="";
$top.="<a href='{$url}?pagenow=".($pagenow)."'>首页</a>";
$top.="<a href='{$url}?pagenow=".($pagenow-1)."'>上一页</a>";
for($i=1;$i<=$pagecount;$i++){
 $top1.="<a href='$url?pagenow={$i}'>{$i}</a>";
}
$top2.="<a href='{$url}?pagenow=".($pagenow+1)."'>下一页</a>";
$top2.="<a href='{$url}?pagenow=".($pagecount)."'>尾页</a>";
echo $top.$top1.$top2;
echo "<h2  ><a href='majadd.php' >添加</a>&nbsp&nbsp&nbsp<a href='dl.html' >退出</a></h2>";
mysqli_free_result($res);
mysqli_close($con);
?>
</body>
</html>
