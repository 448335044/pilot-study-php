<html>
<head>
    <meta http-equiv="content-type" ;content="text/html;charset=utf-8"/>
    <title>雇员表</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body >
<div>

 <div class="top">
    <div class="exit1">
      <?php
      $name=$_GET['name'];
	  $t=time();
      echo "&nbsp欢迎".$name."登录成功!&nbsp";
      echo " 北京时间：".(date("Y-m-d",$t));
      ?>
    </div>
    <div class="exit">   
    <a  href='' >注册</a> | <a  href='dl.html' >关闭</a>
    </div>
  
  </div>

<ul class="nav">  

<li>首页</li>  

<li>新闻</li>  

<li>公司产品</li>  

<li>关于我们</li>  

<li>公司介绍</li> 

</ul>
</div>
</body>
</html>