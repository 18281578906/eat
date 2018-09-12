<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/register.css">
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
                <ul> <li style="border-bottom:1px solid yellow"><a href="register.php" style="color: yellow">Register</a></li>
                    <li id="contact"><a href="#">Contact</a></li>
                    <li id="about"><a href="#">About</a></li>
                    <li id="service"><a href="#">Service</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="bg-header">
        <div class="overlay"></div>
    </header>
    <div class="body-center">
        <div class="center-header"  data-scroll-reveal="enter left and move 50px over 2s">
            <div class="row">
                <div class="header-left"  data-scroll-reveal="enter left and move 50px over 2s">
                    <span>make by yangwen lamb craft</span>
                    <h1>All in good taste!</h1>
                </div>
                <div class="header-right">
                    <div class="form-list">
                        <div class="tab-inner">
                            <h3>Register</h3>
                            <form action="#">
                                <ul>
                                    <li><label for="username">UserName</label>
                                        <input type="text" id="username" name="username">
                                    </li>
                                    <li><label for="password">PassWord</label>
                                        <input type="password" id="password" name="password"></li>
                                    <li>
                                        <label for="comfrim">Confirm Password</label>

                                            <input type="password" id="comfirm" name="comfirmPass">

                                        </li>
                                    <li>
                                        <label for="login"></label>
                                        <input type="submit" id="login" value="REGISTER"></li>
                                    <li>
                                        <a href="index.php"> go to LOGIN!</a></li>
                                </ul>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div></div>

    </div>
</div>




<script src="js/jquery-3.2.1%20.js"></script>
<script src="js/register.js"></script>
<script src="js/scrollReveal.js">
</script>
<script type="text/javascript">
    window.scrollReveal = new scrollReveal();
</script>
</body>
</html>