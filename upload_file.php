<?php
header('Content_type:text/html;charset=UTF-8');
$foodName=$_POST['foodName'];
$foodPrice=$_POST['foodPrice'];
/**
 * 文件上传
 */
////取文件信息
$arr = $_FILES["file"];
//var_dump($arr);
//加限制条件
//1.文件类型
//2.文件大小
//3.保存的文件名不重复
if(($arr["type"]=="image/jpeg" ) && $arr["size"]<10241000 )
{
//临时文件的路径
    $arr["tmp_name"];
//上传的文件存放的位置
//避免文件重复:
//1.加时间戳.time()加用户名.$uid或者加.date('YmdHis')
//2.类似网盘，使用文件夹来防止重复
    $filename = "./images/".date('YmdHis').$arr["name"];
//保存之前判断该文件是否存在
    if(file_exists($filename))
    {
        echo "<script>
                alert('改文件名已经存在');
                window.location='upload.php';
            </script>";
    }
    else
    {
        //中文名的文件出现问题，所以需要转换编码格式
        $filename = iconv("UTF-8","gb2312",$filename);
        //移动临时文件到上传的文件存放的位置（核心代码）
        //括号里：1.临时文件的路径, 2.存放的路径
        move_uploaded_file($arr["tmp_name"],$filename);
        setcookie('srcName',$filename,strtotime('+7days'),'/');
        if($foodName!=''&&$foodPrice!='')
        {
            require_once 'php/connect.php';
            mysqli_set_charset($link,'UTF-8');
            mysqli_query($link,"set names 'utf8' ");
            mysqli_query($link,"set character_set_client=utf8");
            mysqli_query($link,"set character_set_results=utf8");

            $sql="insert into newfood(foodName,foodPrice,foodImg) values ('$foodName','$foodPrice','$filename')";

            if( mysqli_query($link,$sql)){
                echo "<script>    
                        alert('上传成功！');
                    window.location='upload.php'; 
                </script>";
            }



        }else{
            echo "<script>    
                        alert('不能为空！');
                    window.location='upload.php'; 
                </script>";
        }

    }
}
else
{
    echo "<script>
            alert('上传的文件大小或类型不符');
            window.location='upload.php';
        </script>";
}