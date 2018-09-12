<?php
header("Content-type:text/html;charset=UTF-8");
$act=$_GET['act'];
switch ($act) {
    /***
     * 登录数据传输
     */
    case 'login':
        $name = $_GET["username"];

        $password = $_GET["password"];

        require_once('connect.php');
        if ($link) {
            mysqli_set_charset($link, 'utf8');

                $sql = "select username,password from login where username='$name'AND password='$password'";
                $res = mysqli_query($link, $sql);
                if (mysqli_num_rows($res) != 0) {
                    setcookie('username', $name, strtotime('+7 days'), '/');
                    echo 1;
                } else {
                    echo 0;
                }
            }
            break;

    /**
     * 注册数据传输
     */
    case 'register':
        $name=$_GET['username'];
        $password = $_GET["password"];
        $comfirmPass=$_GET["comfirmPass"];
        $length=strlen($password);
        require_once('connect.php');
        if ($link) {
            mysqli_set_charset($link, 'utf8');
                    $sql = "select username from login where username='$name'";
                    $res = mysqli_query($link, $sql);
                    if (mysqli_num_rows($res) != 0) {//有这个username
                        echo 1;
                    }
                     else
                        {
                        $insert = "insert into login(username,password,confirmPassword) values ('$name','$password','$comfirmPass')";
                        $ok = mysqli_query($link, $insert);
                        echo 0;
                        }
        }
        break;

    /***
     * 注销登录时操作
     *
     */
    case 'logout':
        echo $act;
        $params=session_get_cookie_params();//得到cookie中的值
        setcookie('username','',time()-1,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

        header('location:../index.php');

}
