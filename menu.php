<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body lang="en">
<div id="container">
    <nav class="nav-list">
        <div class="nav-list-top">
            <div class="nav-logo">
                <div class="logo-img"><a href="index.php"><img src="img/logo.jpg" alt=""></a></div>
                <div class="logo-title"><a href="index.php"><p>Food Shop</p></a></div>
            </div>
            <div class="nav-ul">
                <ul> <li>
                        <?php
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
                    <li style="border-bottom:1px solid yellow">
                        <?php
                        if(!isset($_COOKIE['username'])){
                            echo "<a href='#' id='logout'>Menu</a>";
                        }
                        else
                        {
                            echo "<a href=\"menu.php\" id='logside'>Menu</a>
                        <ul id=\"cart-ul\">
                            <li><a href=\"cart.php\">cart</a></li>
                        </ul>";
                        }
                        ?>
                    </li>
                    <li><input id="search" type="search" placeholder="search what you want"><a href="#"><i class="fa fa-search"></i></a></li>
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
                    <span>make by yangwen lamb craft</span>
                    <h1>test all our menu</h1>
                </div>
            </div>
        </div></div>
    <div class="menu">
        <div class="menu-list">
            <div class="menu-first drink">
                <div class="menu-title"><img src="img/0301-pina-colada_64.png" alt=""><h1>Drink</h1></div>
                <div class="menu-ul">
                    <ul>
                        <li>
                            <div class="ul-img">
                            <a href=""><img src="img/res_img_5.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$16.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                            <a href=""><img src="img/res_img_6.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>
                                    Green Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$13.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                            <a href=""><img src="img/res_img_7.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Soft Drinks</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$12.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                            <a href=""><img src="img/drink.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Carlo Rosee Drinks</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$10.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="menu-first steak">
                <div class="menu-title"><img src="img/0302-steak.png" alt=""><h1>Steak</h1></div>
                <div class="menu-ul">
                    <ul>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/res_img_8.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Beef Steak</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$32.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/slide_2.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Tomato with Chicken</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$24.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/res_img_2.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Sausages from Italy</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$20.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/slide_1.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Beef Grilled</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$35.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="menu-first stir">
                <div class="menu-title"><img src="img/0401-vegan.png" alt=""><h1>Stir fry</h1></div>
                <div class="menu-ul">
                    <ul>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/fish.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>fish</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$25.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/qingjiao.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>green pepper</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$19.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/yuxiangroushi.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Yu-Shiang Shredded Pork</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$23.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/xia.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Fried shrimps</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$49.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="menu-first cold">
                <div class="menu-title"><img src="img/0401-vegan.png" alt=""><h1>Cold Dishes</h1></div>
                <div class="menu-ul">
                    <ul>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/liangban.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Three Kinds of Cold Mixed Vegetables</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$12.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/jijiao.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Chicken feet</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$30.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/tomato.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Potato silk</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$15.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/egg.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Scrambled egg with tomato</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$25.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="menu-first second" style="display: none;">
                <div class="menu-title"><img src="img/0301-pina-colada_64.png" alt=""><h1>New Dessert</h1></div>
                <div class="menu-ul">
                    <ul>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/qiaokl.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Chocolate curls</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$16.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/ice.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>
                                    Green Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$13.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/dangao.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Strawberry Cake</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$39.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/zishujuan.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Purple sweet potato coils</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$21.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="menu-first second" style="display: none;">
                <div class="menu-title"><img src="img/0302-steak.png" alt=""><h1>New dish</h1></div>
                <div class="menu-ul">
                    <ul>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/yumi.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Fried meat with corn</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$19.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/huiguorou.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Twice-cooked pork</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$25.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/zhuti.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Pig's trotters</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$39.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="ul-img">
                                <a href=""><img src="img/cuipidoufu.jpg" alt=""></a>
                            </div>
                            <div class="ul-word">
                                <h3>Deep-Fried Tofu</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                            <div class="ul-price" title="put into my cart!">
                                <span>$18.00</span><br>
                                <i class="fa fa-cart-plus"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="btn"><button>More Food Menu</button>
                <a href="cart.php" title="go to cart"><i class="fa fa-cart-plus"></i></a></div>
        </div>


    </div>


</div>
</div>




<script src="js/jquery-3.2.1%20.js"></script>
<script src="js/menu.js"></script>
<script src="js/index.js"></script>
<script src="js/scrollReveal.js"></script>
<script type="text/javascript">
    window.scrollReveal = new scrollReveal();
</script>
</body>
</html>