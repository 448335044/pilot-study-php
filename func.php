<?php
require_once ("config.php");
function connect(){
    $link=mysqli_connect(db_host,db_user,db_pwd) or die("数据库连接失败Error:".mysqli_errno($link).":".mysqli_error($link));
    mysqli_set_charset($link,db_charset);
    mysqli_select_db($link,db_name)or die("指定数据库打开失败");
    return $link;
}

//插入记录
function insert($table,$array){
    $link=connect();
    $keys=join(",",array_keys($array));
    $vals="'".join("','",array_values($array))."'";
    $sql="insert {$table}($keys) values({$vals})";
    mysqli_query($link,$sql);
    return mysqli_insert_id($link);
}

//记录更新

function update($table,$array,$where=null){
    $link=connect();
    foreach($array as $key=>$val){
        if($str==null){
            $sep="";
        }else{
            $sep=",";
        }
        $str.=$sep.$key."='".$val."'";
    }
    $sql="update {$table} set {$str} ".($where==null?null:" where ".$where);
    $result=mysqli_query($link,$sql);
    if($result){
        return mysqli_affected_rows($link);
    }else{
        return false;
    }
}

//删除记录
function delete($table,$where=null){
    $link=connect();
    $where=($where==null?null:" where ".$where);
    $sql="delete from {$table} {$where}";
    mysqli_query($link,$sql);
    return mysqli_affected_rows($link);
}

//得到指定一条记录

function fetchone($sql,$result_type=MYSQLI_ASSOC){
    $link=connect();
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_array($result,$result_type);
    return $row;
}

//得到结果集中所有记录

function fetchAll($sql, $result_type=MYSQLI_ASSOC){
    $link=connect();
    $result=mysqli_query($link,$sql);
    while(@$row=mysqli_fetch_array($result,$result_type)){
        $rows[]=$row;
    }
    return $rows;
}

//得到结果集中的记录数
function getResultNum($sql){
    $link=connect();
    $result=mysqli_query($link,$sql);
    return mysqli_num_rows($result);
}

//得到上一步插入记录的id
function getInsertId(){
    $link=connect();
    return mysqli_insert_id($link);
}
//分页
function pageing($pageSize){
    $sql="select * from art_admin1";
    global $totalRows;
    $totalRows=getResultNum($sql);
    global $totalPage;
    $totalPage=ceil($totalRows/$pageSize);
    if($page<1||$page==null||!is_numeric($page)){
        $page=1;
    }
    if($page>=$totalPage){
        $page=$totalPage;
    }
    $limit_one=($page-1)*$pageSize;


    $sql="select * from art_admin1 limit {$limit_one},{$pageSize}";
    $rows=fetchAll($sql);
    return $rows;
}

function alert( $txt, $url = 'dl.php') {
    echo "<script> alert('{$txt}');window.location.href='{$url}';</script>";
	die;
}



