<!DOCTYPE html>
<html lang="en-gb" xml:lang="en-gb" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>Mina Bakery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="shortcut icon" href="Content/themes/website/images/favico.ico"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/masterslider/style/masterslider.css" type="text/css">
    <link rel="stylesheet" href="assets/masterslider/skins/default/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

    <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/pagination.min.js"></script>
    <script type="text/javascript" src="assets/js/pagination.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="assets/js/fancybox/jquery.fancybox8cbb.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox8cbb.css?v=2.1.5" media="screen" />

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/masterslider/masterslider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="assets/js/placeholder-fallback.js"></script>
    <script type="text/javascript" src="assets/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>

    <script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/sweetalert-master/dist/sweetalert.css">

    <link rel="icon" href="assets/images/logo.ico">

    <style>
        #theme-customizer {
            position: fixed;
            width: 225px;
            left: 0;
            top: 40%;
            background-color: #f7f7f7;
            border: 1px #e5e5e5 solid;
            z-index: 9999;
            padding: 30px 0 30px 30px;
            color: #696969;
            font-size: 18px;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
        }

        #theme-customizer.slide-out {
            left: -225px;
        }

        #theme-customizer a {
            color: #696969;
            -webkit-transition: all 0.1s ease-out;
            -moz-transition: all 0.1s ease-out;
            -o-transition: all 0.1s ease-out;
            transition: all 0.1s ease-out;
        }

        #theme-customizer a:hover {
            text-decoration: underline;
            color: #feb822;
        }

        #theme-customizer p {
            margin-bottom: 5px;
        }

        #theme-customizer .theme-customizer-header {
            color: #000;
            margin-bottom: 25px;
        }

        #theme-customizer .theme-customizer-subheader {
            font-style: italic;
            font-size: 14px;
            color: #000;
        }

        #theme-customizer .theme-customizer-icon {
            position: absolute;
            right: -31px;
            top: -1px;
            height: 32px;
            width: 32px;
            font-size: 15px;
            line-height: 30px;
            border: 1px #e5e5e5 solid;
            border-left: none;
            background-color: #f7f7f7;
            text-align: center;
            padding-left: 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="all">
    <header class="page-header">
        <div class="page-header-content container">
            <img class="logoMobile" src="assets/images/logo_secondary.png">
        </div>
        <div class="menu-button-container">
            <i id="menu-button" class="menu-button fa fa-reorder"></i>
        </div>
        <div class="log-find">

            <?php
            if (isset($_SESSION['admin']) || isset($_SESSION['sales']) || isset($_SESSION['customer'])){?>
                <script>
                    $(document).ready(function () {
                        $(".ttk").addClass('action');
                    })
                </script>
            <?php }
            ?>
            <div class="col-md-6">
                <a href="login.php" style="padding-right: 10px">Đăng nhập</a>
                <a href="createaccount.php" class="ttk">Tạo tài khoản</a>
<!--                <div class="chieu" style="position: absolute; top: 0px; left: 406px;">tài khoản</div>-->
            </div>
            <style>
                .ttk.action{
                    visibility: hidden;
                    /*display: none;*/
                }
            </style>
            <div class="col-md-6">
                <a href="search.php">Tìm kiếm</a>
            </div>
        </div>
        <nav id="nav-top" class="nav-top">
            <ul>
                <li><a href="index.php" title="Trang chủ">Trang chủ</a> </li>
                <li><a href="gioi-thieu.php" title="Giới thiệu">Giới thiệu</a> </li>
                <li><a href="menu.php" title="Sản phẩm">Sản phẩm</a> </li>
            </ul>
            <h1 class="logo-primary">
                <img id="logo-1" src="assets/images/logo.png?w=109&amp;h=112&amp;mode=crop&amp;scale=both"></h1>
            <div class="logo-secondary">
                <img id="logo-2" src="assets/images/logo_secondary.png">
            </div>
            <ul>
                <li>
                    <a href="system-shop.php" title="Hệ thống cửa h&#224;ng">Hệ thống cửa h&#224;ng</a>
                </li>
                <li>
                    <a href="blog.php" title="Tin tức">Tin tức</a>
                    <ul>
                        <li><a href="blog-tin-tuc-sweethome.html" title="Tin tức Sweethome">Tin tức Sweethome</a></li>
                        <li><a href="blog-the-gioi-banh-ngot.html" title="Thế giới b&#225;nh ngọt">Thế giới b&#225;nh ngọt</a></li>
                    </ul>
                </li>
                <li><a href="contact.php" title="Li&#234;n hệ">Li&#234;n hệ</a></li>
            </ul>
        </nav>
    </header>
