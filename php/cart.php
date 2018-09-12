<?php


/**
 * 删除相应节点
 */


header('Content_type:text/html;charset=UTF-8');
require_once ('connect.php');
$id=$_GET['id'];
if($link){
    mysqli_set_charset($link,'utf-8');
    $sql="delete from book where id='$id'";
    $res=mysqli_query($link,$sql);

}
