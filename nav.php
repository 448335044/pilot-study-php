<html>
<head>
    <meta http-equiv="content-type" ;content="text/html;charset=utf-8"/>
    <title>雇员表</title>
    <link rel="stylesheet" type="text/css" href="css/bottom.css"/>
	
</head>
<body >

<div class="meau">
<div class="top">
  <div class="exit1">
   <?php 
   $name=$_GET['name'];
   $t=time();
   //echo "<欢迎".$name.">";
   echo "北京时间:".(date("Y:m:d",$t));
   ?>  
	 
	  
  </div>
  <div class="exit">   
  <a  href='dl.php' >请登录~</a> | <a  href='register.php' >注册</a> | <a  href='dl.php' >退出</a>
  </div>
  
</div>
<div class="nav">
<div class="bottom_navi">
<ul class="top_nav">  

<li><a href="no.php">首页</a></li>  

<li><a href="no.php">产品介绍</a></li>  

<li><a href="no.php">公司介绍</a></li>  

<li><a href="no.php">关于我们</a></li> 

</ul>
</div>


 <!--底部导航-->
<div class="bottom">
	<div class="bottom_navi">
		<ul>
			<li><a href="no.php">官方网站</a></li>
			
			<li><a href="no.php">关于我们</a></li>
			
			<li><a href="no.php">意见反馈</a></li>
			
			<li><a href="no.php">与我互动</a></li>
			
		</ul>
	</div>
	<div class="bottom_text">
		<p>请联系我：17167101167</p>
	</div>
</div>
</div>
</body>
</html>