
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
<?php include"nav.php";?>
 
<div class="text">

<h1 align='center'>信息验证</h1>
<div class="col-md-9">			
				<form role="form" action="forget_handle.php" method="post">
				<input  type="hidden" name="id" value="<?php echo $row['id']?>"/>
					<div class="form-group">
					   	<label>姓名：</label>
					    <input type="text" class="form-control" name="username" >
					</div>
					<div class="form-group">
					    <label>手机号：</label>
						<input type="text " class="form-control" rows="10" name="tel"  >
					</div>
					<div class="form-group">
					    <label>身份证号：</label>
						<input type="text " class="form-control" rows="10" name="idcard"  >
					</div>
					
					
					    
					  	<input type="submit" class="login_btn" value="提交">
					</form>
</div>

</div>




</div>
</body>
</html>