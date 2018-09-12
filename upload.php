<?php
require_once ('php/connect.php');
mysqli_set_charset($link,'utf8');
$sql="select * from book";
$res=mysqli_query($link,$sql);
$length=mysqli_num_rows($res);
$totalPrice=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/lib/vue.min.js"></script>
    <script src="js/lib/vue-resource.js"></script>

</head>
<body>
<div id="shop">

    <nav class="nav-list">
        <div class="nav-list-top">
            <div class="nav-logo">
                <div class="logo-img"><a href="index.php"><img src="img/logo.jpg" alt=""></a></div>
                <div class="logo-title"><a href="index.php"><p>Food Shop</p></a></div>
            </div>
            <div class="nav-ul">
                <ul>
                    <li><?php
                        if(!isset($_COOKIE['username']))
                            echo "<a href=\"guan.php\" target=\"_self\"><span>管理员登录</span> </a>";
                        else
                            echo "<a href='#' id='user' target=\"_self\"><span>管理员 ^_^ ".$_COOKIE['username']."</span></a>
                                            <ul id='two'>
                                                 <li class=\"has-sub\"><a href=\"#\" target=\"_self\"><span>账号设置</span></a></li>
                                                 <li class=\"has-sub\" id='rest'><a href=\"php/login.php?act=logout\" target=\"_self\"><span>退出账号</span></a></li>
                                             </ul>";
                        ?></li>
                    <li><a href="cart.php" style="color: yellow;border-bottom: 1px solid yellow">Upload</a>
                    </li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="bg-header">
        <div class="overlay"></div>
    </header>
    <div class="body-center">
        <div class="center-header">
            <div class="row">
                <div class="header-left"  data-scroll-reveal="enter left and move 50px over 2s">
                    <h1>Management interface</h1>
                </div>
                <div class="header-right"  >
                    <div class="form-list">
                        <div class="tab-inner">
                            <h3>Upload</h3>
                            <form method="post" action="upload_file.php" enctype="multipart/form-data">
                                <ul>
                                    <li><label for="foodName">FoodName</label>
                                        <input type="text" id="foodName" name="foodName" value="
                                      " >
                                    </li>
                                    <li><label for="foodPrice">FoodPrice</label>
                                        <input type="text" id="foodPrice" name="foodPrice"  value="
                                     "></li>
                                    <li>

                                        <input class="se2" id="f_file" type="file" name="file"/>
                                        <label for="f_file">
                                            <input class="se1" id="file_input" type="button" value="upload image" />
                                            <img src="<?php echo $_COOKIE['srcName']?>"  id="foodImg" alt="">

                                        </label>
                                    </li>
                                    <li>
                                        <label for="login"></label>
                                        <input type="submit" id="login" value="UPLOAD" name="submit">

                                    </li>
                                </ul>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="input_list"></div>

    </div>

</div>
<script src="js/jquery-3.2.1%20.js"></script>
<script src="js/upload.js"></script>
<script src="js/cart2.js"></script>
<script src="js/scrollReveal.js"></script>
<script type="text/javascript">
    window.scrollReveal = new scrollReveal();
</script>
</body>
</html>