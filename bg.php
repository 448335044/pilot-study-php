<html>
<head>
    <meta http-equiv="content-type" ;content="text/html;charset=utf-8"/>
    <title>雇员表</title>
    <link rel="stylesheet" type="text/css" href="css/bt.css"/>
</head>
<body >
<div class='img'>


<?php
$id=$_GET['id'];

  session_start();
 include"func.php";
 include"common.php";
 check();


       $link=connect();
       
        $sql="select * from  art_admin1 where id={$id} " ;
        $res=mysqli_query($link,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
              
            echo "&nbsp详情内容：".$row['text']."</br>";
			echo "<a href='major.php'><button >返回</button></a><hr>";
      echo "<a  href='delete_artical.php?id={$row[id]}' ><button >删除</button></a> ";
	   echo "<a  href='update_artical.php?id={$row[id]}'><button >修改</button></a><hr>";

        } 

      mysqli_free_result($res);
        mysqli_close($link);

?>
		 
</div>
</body>
</html>