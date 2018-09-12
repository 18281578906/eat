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
    <title>cart</title>
    <link rel="stylesheet" href="css/cart.css">

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
                            echo "<a href=\"register.php\" target=\"_self\"><span>Register</span> </a>";
                        else
                            echo "<a href='#' id='user' target=\"_self\"><span>欢迎您 ^_^ ".$_COOKIE['username']."</span></a>
                                            <ul id='two'>
                                                 <li class=\"has-sub\"><a href=\"#\" target=\"_self\"><span>账号设置</span></a></li>
                                                 <li class=\"has-sub\" id='rest'><a href=\"php/login.php?act=logout\" target=\"_self\"><span>退出账号</span></a></li>
                                             </ul>";
                        ?></li>
                    <li id="contact"><a href="#">Contact</a></li>
                    <li id="about"><a href="#">About</a></li>
                    <li id="service"><a href="#">Service</a></li>
                    <li style="border-bottom:1px solid yellow"><a href="cart.php" style="color: yellow"  id='logside'>Cart</a>
                        <ul id="cart-ul">
                            <li><a href="menu.php">menu</a></li>
                        </ul>
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
                    <h1>Your Cart</h1>
                </div>
            </div>
        </div>
        <div class="shop-body">
            <div class="list-nav">

                <ul class="list-title">
                    <li><p>Name</p></li>
                    <li><p>Image</p></li>
                    <li><p>Price</p></li>
                    <li><p>Number</p></li>
                    <li><p>operation</p></li>
                    <li><p>Edit</p></li>
                </ul>

                <ul class="list">
                    <?php
                    for($i=0;$i<$length;$i++):
                        if($data=mysqli_fetch_row($res)):
                            $totalPrice+=$data[2]*$data[3];
                            ?>
                            <li id="btn" value="<?php echo $data[0]?>">
                                <div class="food-name"><p><?php echo $data[1]?></p></div>
                                <div class="food-img"><a href="#"><img src="<?php echo $data[6];?>" alt=""></a></div>
                                <div class="food-price"><p><?php echo $data[2]?></p></div>
                                <div class="food-num"><p><?php echo $data[3]?></p></div>
                                <div class="food-action">
                                    <button @click="changeNum(1)">+</button>
                                    <button @click="changeNum(-1)">-</button>
                                </div>
                                <div class="food-require"><i class="fa fa-trash"></i></div>
                            </li>
                        <?php
                        endif;
                    endfor;
                    ?>
                </ul>
                <ul class="last">
                    <li>
                        <div><p>订单总额：</p><input type="text" class="money" disabled value="<?php echo $totalPrice?>"></div>
                    </li>
                    <li>
                        <div><p>我的送餐地址：</p><select name="" id="addSelect">
                                <?php
                                $add="select * from address";
                                $from=mysqli_query($link,$add);
                                $size=mysqli_num_rows($from);
                                for($j=0;$j<$size;$j++):
                                    if($address=mysqli_fetch_row($from)):
                                        ?>
                                        <option value="0"><?php echo $address[1]?></option>
                                    <?php
                                    endif;
                                endfor;
                                ?>
                            </select>
                            <button id="changeAddress" @click="addAddress">新增</button>
                            <textarea class="place"></textarea>
                        </div>

                    </li>
                    <li>
                        <button>提交订单</button>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1%20.js"></script>
<script src="js/cart.js"></script>
<script src="js/cart2.js"></script>
<script src="js/index.js"></script>
<script src="js/scrollReveal.js"></script>
<script type="text/javascript">
    window.scrollReveal = new scrollReveal();
</script>
</body>
</html>