<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
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
                                echo "<a href=\"register.php\" id='guan' target=\"_self\"><span>Register</span> </a>
                                        <ul id='two'>
                                                 <li class=\"has-sub\"><a href=\"guan.php\" target=\"_self\"><span>管理员登录</span></a></li>
                                                 <li class=\"has-sub\" id='rest'><a href=\"php/login.php?act=logout\" target=\"_self\"><span>会员登录</span></a></li>
                                             </ul>
";
                            else
                                echo "<a href='#' id='user' target=\"_self\"><span>欢迎您 ^_^ ".$_COOKIE['username']."</span></a>
                                            <ul id='two'>
                                                 <li class=\"has-sub\"><a href=\"#\" target=\"_self\"><span>账号设置</span></a></li>
                                                 <li class=\"has-sub\" id='rest'><a href=\"php/login.php?act=logout\" target=\"_self\"><span>退出账号</span></a></li>
                                             </ul>";
                            ?>
                        </li>
                    <li id="contact"><a href="#">Contact</a></li>
                    <li id="about"><a href="#">About</a></li>
                    <li id="service"><a href="#">Service</a></li>
                    <li>
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
                    <li> <input id="search" type="search" placeholder="search what you want"><a href="#" class="search"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>

    </nav>

    <header id="bg-header">
        <div class="overlay"></div>
    </header>
    <div class="body-center">
<!--        <div id="search"><div id="search-body"><input type="text"></div></div>-->
    <div class="center-header">
        <div class="row">
            <div class="header-left" data-scroll-reveal="enter left and move 50px over 1.33s">
                <span>make by yangwen lamb craft</span>
                <h1>All in good taste!</h1>
            </div>
            <?php
            if(!isset($_COOKIE['username'])){
                echo '            <div class="header-right" data-scroll-reveal="enter left and move 50px over 1.33s" >
                <div class="form-list">
                    <div class="tab-inner">
                        <h3>LOGIN</h3>
                        <form enctype="application/x-www-form-urlencoded">
                            <ul>
                                <li><label for="username">UserName</label>
                                    <input type="text" id="username" name="username">
                                </li>
                                <li><label for="password">PassWord</label>
                                    <input type="password" id="password" name="password"></li>
                                  <li>
                                      <label for="textCode">Verification Code</label>
                                      <div class="code">
                                          <input type="text" id="textCode" name="code">
                                          <button class="code-btn">send code</button>
                                      </div></li>
                                <li>
                                    <label for="login"></label>
                                    <input type="submit" id="login" value="SUBMIT" name="submit"></li>
                            </ul>
                        </form>
                    </div>


                </div>
            </div>
';
            }
            else{
                echo '            <div class="header-right" data-scroll-reveal="enter left and move 50px over 1.33s" >
                <div class="form-list">
                    <div class="tab-inner">
                        <h3>Message</h3>
                        <form enctype="application/x-www-form-urlencoded">
                            <ul>
                                <li><label for="username">Emial</label>
                                    <input type="email" id="username" name="username">
                                </li>
                                <li><label for="password">Suggestion</label>
                                    <input type="text" id="password" name="password"></li>
                                  <li>
                                      <label for="textCode">Your Name</label>
                                      <div class="code">
                                          <input type="text" id="textCode" name="code">
                                       
                                      </div></li>
                                <li>
                                    <label for="login"></label>
                                    <input type="submit" id="login" value="SUBMIT" name="submit"></li>
                            </ul>
                        </form>
                    </div>


                </div>
            </div>';
            }
            ?>
        </div>
    </div>
    <div class="menu">
        <div class="menu-body">
        <div class="menu-center">
            <div class="menu-title"  data-scroll-reveal="enter top and move 50px over 1.33s">
                <h2>Popular Dishes</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga
                    molestias accusamus alias autem provident.<br> Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="menu-list">
            <div class="list-col col-1">
                <a href="img/img_1.jpg" class="col-img">
                    <figure>
                        <div class="overlay">
                            <p>+</p>
                        </div>
                        <img src="img/img_1.jpg" alt="">
                    </figure></a>
                    <div class="word">
                        <h3>Fresh Mushrooms</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        <p class="price"><span class="number">$20.00 </span><i class="fa fa-cart-plus"></i></p>

                    </div>
                </div>
            <div class="list-col col-2">
                <a href="img/img_2.jpg" class="col-img">
                    <figure>
                        <div class="overlay">
                            <p>+</p>
                        </div>
                        <div class="img">
                        <img src="img/img_2.jpg" alt="">
                        </div>
                    </figure></a>
                    <div class="word">
                        <h3>Cheese and Garlic Toast</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        <p class="price"><span>$21.00 </span><i class="fa fa-cart-plus"></i></p>
                    </div>
                </div>
            <div class="list-col col-3">
                <a href="img/img_3.jpg" class="col-img">
                    <figure>
                        <div class="overlay">
                            <p>+</p>
                        </div>
                        <img src="img/img_3.jpg" alt="">
                    </figure> </a>
                    <div class="word">
                        <h3>Grilled Chiken Salad</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        <p class="price"><span>$9.00 </span><i class="fa fa-cart-plus"></i></p>
                    </div>
               </div>
            <div class="list-col col-4">
                <a href="img/img_4.jpg" class="col-img">
                    <figure>
                        <div class="overlay">
                            <p>+</p>
                        </div>
                        <img src="img/img_4.jpg" alt="">
                    </figure></a>
                    <div class="word">
                        <h3>Organic Egg</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        <p class="price"><span>$13.00 </span><i class="fa fa-cart-plus"></i></p>
                    </div>
                </div>
            <div class="list-col col-5">
                <a href="img/img_5.jpg" class="col-img">
                    <figure>
                        <div class="overlay">
                            <p>+</p>
                        </div>
                        <img src="img/img_5.jpg" alt="">
                    </figure></a>
                    <div class="word">
                        <h3>Tomato Soup with Chicken</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        <p class="price"><span>$25.00 </span><i class="fa fa-cart-plus"></i></p>
                    </div>
                </div>
            <div class="list-col col-6">
                <a href="img/img_6.jpg" class="col-img">
                    <figure>
                        <div class="overlay">
                            <p>+</p>
                        </div>
                        <img src="img/img_6.jpg" alt="">
                    </figure></a>
                    <div class="word">
                        <h3>Salad with Crispy Chicken</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        <p class="price"><span>$32.00</span><i class="fa fa-cart-plus"></i></p>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="service">
        <div class="service-body">
            <div class="service-title"  data-scroll-reveal="enter left and move 50px over 1.33s">
                <h1>Our Services</h1>
                <p>Dignissimos asperiores vitae velit veniam totam
                    fuga molestias accusamus alias autem provident。<br>
                    Odit ab aliquam dolor eius。</p>
            </div>
            <div class="service-list"  data-scroll-reveal="enter left and move 50px over 1.5s">
                <div class="list-first">
                    <div class="icon"><i class="fa fa-smile-o"></i></div>
                    <h2>Happy People</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="service-list"  data-scroll-reveal="enter left and move 50px over 1.55s">
                <div class="list-first">
                    <div class="icon"><i class="fa fa-cloud"></i></div>
                    <h2>Food Delivery</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="service-list" data-scroll-reveal="enter left and move 50px over 1.6s">
                <div class="list-first">
                    <div class="icon"><i class="fa fa fa-car"></i></div>
                    <h2>Creative Culinary</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-center">
        <h2>Our food makes many people forget about it. There are countless customers.</h2>
        <p>— YangWen, CEO of Lamb food shop.</p>
    </div>
    <div class="about">
        <div class="about-body">
            <div class="about-title"  data-scroll-reveal="enter left and move 50px over 1.0s">
                <h1>Fun Facts</h1>
                <p>Dignissimos asperiores vitae velit veniam totam
                    fuga molestias accusamus alias autem provident。<br>
                    Odit ab aliquam dolor eius。</p>
            </div>
            <div class="about-list">
                <div class="about-first"  data-scroll-reveal="enter left and move 50px over 1.6s">
                    <h1 class="avg">5</h1>
                    <p>AVG. RATING</p>
                </div>
                <div class="about-first"  data-scroll-reveal="enter left and move 50px over 1.65s">
                    <h1>40</h1>
                    <p>FOOD TYPES</p>
                </div>
                <div class="about-first"  data-scroll-reveal="enter left and move 50px over 1.7s">
                    <h1>32</h1>
                    <p>CHEF COOK</p>
                </div>
                <div class="about-first"  data-scroll-reveal="enter left and move 50px over 1.75s">
                    <h1>2018</h1>
                    <p>YEAR STARTED</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="contact-body"   data-scroll-reveal="enter down and move 50px over 1s">
            <h1>Contact Us</h1>
            <p>If you have any questions, please contact us. We will have twenty-four <br>
                hours of customer service online to serve you.</p>
            <div class="contact-list">
                <i class="fa fa-phone">18281578906</i>
            </div>
            <div class="contact-list">
                <i class="fa fa-envelope">1454040353@qq.com</i>
            </div>
            <div class="contact-list">
                <i class="fa fa-comment">Live Chat</i>
            </div>
        </div>
    </div>
    </div>
<!--    <div class="up">-->
<!--        <a href="#">-->
<!--            <i class="fa fa-arrow-up"></i>-->
<!--        </a>-->
<!--    </div>-->
</div>




<script src="js/jquery-3.2.1%20.js"></script>
<script src="js/scrollReveal.js"></script>
<script src="js/index.js"></script>
<script type="text/javascript">
    window.scrollReveal = new scrollReveal();
</script>
</body>
</html>