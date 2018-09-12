<?php

/****
 * 添加收货地址
 */
header('Content_type:text/html;charset=UTF-8');
require_once ('connect.php');
$address=$_GET['address'];
if($link){
    mysqli_set_charset($link,'UTF-8');
    mysqli_query($link,"set names 'utf8' ");
    mysqli_query($link,"set character_set_client=utf8");
    mysqli_query($link,"set character_set_results=utf8");
    $sql="insert into address(addressName) values ('$address')";
    $ok=mysqli_query($link,$sql);
    if($ok)
    {
        echo 1;
    }

}