<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"\>
    <link rel="stylesheet" type="text/css" href="css/major.css"/>
	<link rel="stylesheet" type="text/css" href="css/up.css"/>
	<link rel="stylesheet" type="text/css" href="css/bottom.css"/>
	<script type="text/javascript" src="top_mo.php"></script>
</head>
<body >
<div>

<?php include"nav.php";?>
<div class="text">
<?php
session_start();
include"func.php";
$link=connect();
$name=$_GET['name'];
$id = $_GET['id']; 
$sql="select * from art_admin1 where id=$id"; 
$query=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($query);
?>
<h1 align='center'>修改信息</h1>

<div class="col-md-9">			
				<form role="form" action="update_art_handle.php" method="post">
				<input  type="hidden" name="id" value="<?php echo $row['id']?>"/>
					<div class="form-group">
					   	<label>标题</label>
					    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
					</div>
					<div class="form-group">
					    <label>作者</label>
						<input type="text " class="form-control" rows="5" name="author"  value="<?php echo $row['author'];?>">
					</div>
					<div class="form-group">
					    <label>内容</label>
						<input type="areatext " class="form-control" rows="5"  style="height:150px" name="text" value="<?php echo $row['text'];?>">
					</div>
					  	<input type="submit" class="login_btn" value="发表">
					</form>
</div>

</div>




</div>
</body>
</html>