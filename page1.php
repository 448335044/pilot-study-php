
<?php
$rowcount=0;//总条数。
$pagesize=2;//每显示几条数据。
$pagecount=0;//总页数。
$pagenow = isset($_GET['p']) ? intval($_GET['p']) : 1;

$host="localhost";
$user="root";
$password="123456";
$conn=mysqli_connect($host,$user,$password);//连接主机。
if(!$conn){
die("连接失败".mysqli_eroor());//判断错误信息。
}
echo "连接成功";
mysqli_select_db($conn,'artical');//选库。
mysqli_query($conn,'set names utf8');//设置字符集。
$sql="select * from art_admin";
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);//总共有多少条数据。
//echo "共有".$rowcount."条数据";
$pagecount=ceil($rowcount/$pagesize);//总共有多少页。
//echo "共有".$pagecount."页";
$limit_one=($pagenow-1)*$pagesize;
$sql="select * from art_admin limit {$limit_one},$pagesize";//查表。
$res=mysqli_query($conn,$sql);//操作数据库返回结果集。
echo "<table border='1px' cellspacing= 0 width='450px' >";
echo "<tr><td>title</td><td>author</td><td>text</td></tr>";
while($row=mysqli_fetch_assoc($res))//显示结果集。
{echo "<tr>";
echo"<td>{$row['title']}</td>";
echo"<td>{$row['author']}</td>";
echo"<td>{$row['text']}</td>";
echo"</tr>";
}
echo "</table>";
mysqli_free_result($res);//释放结果。
mysqli_close($conn);//关闭连接。
$page_code="";//分页条。
if($pagenow>1) {
    $page_code.="<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
   $page_code.= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . ($pagenow - 1) . "'>上一页</a>";
}
if($pagenow<$pagecount) {
    $page_code .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . ($pagenow + 1) . "'>下一页</a>";
    $page_code .= "<a href='" . $_SERVER['PHP_SELF'] . "?P={$pagecount}'>尾页</a>>";

}
$page_code.="共".$pagecount."页";
echo $page_code;
echo "跳转到第"."<form action='page1.php' method='get'>";
echo "<input type='text' size='2' name='p'>"."页";
echo "<input type='submit' value='确定'>";
echo "</form>";

?>
