

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"\>
    <link rel="stylesheet" type="text/css" href="css/major.css"/>
	<link rel="stylesheet" type="text/css" href="css/up.css"/>
	<script type="text/javascript" src="top_mo.php"></script>
</head>
<body >
<div>
<?php include"nav.php";
session_start();
 include"func.php";
 include"common.php";
 check();
 ?>
<div class="text">

<h1 align='center'>添加信息</h1>
<div class="col-md-9">			
				<form role="form" action="add_art_handel.php" method="post">
				<input  type="hidden" name="id" value="<?php echo $row['id']?>"/>
					<div class="form-group">
					   	<label>标题：</label>
					    <input type="text" class="form-control" name="title" >
					</div>
					<div class="form-group">
					    <label>作者：</label>
						<input type="text " class="form-control" rows="10" name="author"  >
					</div>
					<div class="form-group">
					    <label>内容：</label>
						<input type="areatext " class="form-control" rows="10" style="height:150px" name="text"  
						
						>
					</div>
					
					
					    
					  	<input type="submit" class="login_btn" value="提交">
					</form>
</div>

</div>




</div>
</body>
</html>