
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

 
    <div class="exit1">
      <?php
      $name=$_GET['name'];
	  $t=time();
      echo " 北京时间：".(date("Y-m-d",$t));
      ?>
    </div>
    
  
  

<ul class="nav">  

<li>首页</li>  

<li>新闻</li>  

<li>公司产品</li>  

<li>关于我们</li>  

<li>公司介绍</li> 

</ul>
</div>
<div class="up_text">
<?php

include"func.php";
$link=connect();
$name=$_GET['name'];
$id = $_GET['id']; //这里获取get参数id的值，当然，光获取还不够，要对参数值进行合法判断，不然会被sql注入攻击，这里我就不写了，自个后续研究
$sql="select * from art_admin1 where id=$id"; //根据id查询
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
						<input type="text " class="form-control" rows="10" name="author"  value="<?php echo $row['author'];?>">
					</div>
					<div class="form-group">
					    <label>内容</label>
						<input type="areatext " class="form-control" rows="10"  style="height:200px" name="text" value="<?php echo $row['text'];?>">
					</div>
					  	<input type="submit" class="btn btn-default" value="发表">
					</form>
</div>

</div>



<div class="bottom">

<a href="">关于我们</a>
<a href="">关于产品</a>
<a href="">联系我们</a>
<a href="">关于我们</a>
</div>
</div>
</body>
</html>