<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='123456';
$coon=mysqli_connect($dbhost,$dbuser,$dbpassword);
if(!$coon){
    die ("连接错误".mysqli_error($coon));
}


mysqli_select_db($coon,'artical');

$id = $_GET['id']; //这里获取get参数id的值，当然，光获取还不够，要对参数值进行合法判断，不然会被sql注入攻击，这里我就不写了，自个后续研究

$sql="select * from art_admin where id=$id"; //根据id查询
$query=mysqli_query($coon,$sql);
$row=mysqli_fetch_assoc($query);
echo $row[author];

/*if(!$row){
echo "查询失败";
}
echo "连接成功";*/

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"\>
</head>
<body >
<h1 align='center'>修改信息</h1>
<form  action="update_art_handle.php" method="post">

    <table align='center'>
        <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
        <tr  > <td>标题</td><td><input type="text" name="title" id="title" value="<?php echo $row['title']?>"\></td></tr>
        <tr> <td>作者</td> <td> <input type="text " name="author" id="author" value="<?php echo $row['author']?>"\></td> </tr>
        <tr> <td>内容</td> <td> <input type="areatext " name="text" id="text" value="<?php echo $row['text']?>"\></td> </tr>
        <tr>

            <td ><input align='center' type="submit"  value="提交"\></td>
        </tr>
    </table>
</form>
</body>
</html>