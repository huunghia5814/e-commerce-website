<?php
    require 'header.php';
?>

<section id="slider-container" class="top-section">
    <div class="offset-borders">
        <div class="ms-fullscreen-template">
            <div class="master-slider ms-skin-round" id="masterslider">
                    <div class="ms-slide">
                        <img src="assets/images/banner/banner(2)d6c9.jpg?w=1402&amp;h=450&amp;mode=crop&amp;scale=both">
                    </div>
                    <div class="ms-slide">
                        <img src="assets/images/banner/2d6c9.jpg?w=1402&amp;h=450&amp;mode=crop&amp;scale=both" alt="Fresh baked goods">
                    </div>
                    <div class="ms-slide">
                        <img src="assets/images/banner/1d6c9.jpg?w=1402&amp;h=450&amp;mode=crop&amp;scale=both" alt="Coffe and Croissant">
                    </div>
            </div>
        </div>
    </div>
</section>
<?php
    require 'config.php';
    function get_product_latest_list($limit){
        $sql = "SELECT * FROM product WHERE status > 0 ORDER BY createdon DESC LIMIT $limit";
        GLOBAL $conn;
        return mysqli_query($conn, $sql);
    }
    $product_list = get_product_latest_list(4);
//    while($product = mysqli_fetch_assoc($product_list)):
//        echo $product['name'];
//    endwhile;
?>
<section id="products-section">
    <div class="section-content">
        <div class="container">
            <header class="section-header">
                <h1>NHỮNG SẢN PHẨM MỚI NHẤT</h1>
                <p>C&#225;c loại b&#225;nh mới nhất của Mina Bakery</p>
            </header>

            <div id="products-slider-1" class="products-slider">
                    <div>
                        <!-- slide 1 -->
                        <div class="row">
                            <div class="col-md-12 col-lg-12 onscroll-animate">
                                <div class="row">
                                    <?php while($product = mysqli_fetch_assoc($product_list)): ?>
                                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                            <div class="product">

                                                <div class="product-preview">
                                                     <a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $product['product_id']; ?>">
                                                        <img src="<?php echo $product['image'] ?>"></a>
                                                </div>
                                                <div class="product-detail-container">
                                                    <div class="product-icons">
                                                        <div class="product-icon-container">
                                                            <a href="<?php echo SITE_URL . 'MinaBakery/addcart.php?id=' . $product['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h2><a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $product['product_id']; ?>"><?php echo $product['name'] ?></a></h2>
                                                    </div>
                                                </div>
                                                <!-- .product-detail-container -->
                                            </div>
                                            <!-- .product -->
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .col-md-6 -->
                        </div>
                        <!-- .row -->
                    </div>
                <!-- .slide-1 -->
            </div>
            <!-- .products-slider -->

            <p class="text-center onscroll-animate">
                <a href="menu.php" class="button-void">Tất cả sản phẩm</a>
            </p>
            <div class="margin-60"></div>
        </div>
        <!-- .container -->
    </div>
    <!-- .section-content -->
</section>

<section id="offer-section">
    <div class="section-content">
        <div class="container">
            <header class="section-header onscroll-animate">
                <h1>M&#211;N ĐẶC BIỆT TUẦN N&#192;Y</h1>
                <p>
                    Mina Bakery h&#226;n hạnh giới thiệu đến qu&#253; kh&#225;ch c&#225;c m&#243;n b&#225;nh đặc biệt trong tuần n&#224;y
                </p>
            </header>

            <div class="tabs-big-container centered-columns">
                <div class="centered-column centered-column-top">
                    <!-- Nav tabs -->
                    <ul class="nav" role="tablist">
                            <li class="onscroll-animate active">
                                <a href="#popular_0" role="tab" data-toggle="tab">
                                    <img src="assets/images/banh/softbuns/BACON%20CHEESEb929.jpg?w=160&amp;h=160&amp;mode=crop&amp;scale=both" />
                                </a>
                            </li>
                            <li class="onscroll-animate ">
                                <a href="#popular_1" role="tab" data-toggle="tab">
                                    <img src="assets/images/banh/softbuns/CREAM%20CHEESE%20BREADb929.jpg?w=160&amp;h=160&amp;mode=crop&amp;scale=both" />
                                </a>
                            </li>
                            <li class="onscroll-animate ">
                                <a href="#popular_2" role="tab" data-toggle="tab">
                                    <img src="assets/images/banh/softbuns/ALMOND%20CREAM%20BREADb929.jpg?w=160&amp;h=160&amp;mode=crop&amp;scale=both" />
                                </a>
                            </li>
                    </ul>
                </div>

                <div class="centered-column tab-content centered-column-top">
                        <!-- Tab panes -->
                        <div role="tabpanel" class="tab-pane fade in active" id="popular_0">
                            <article>
                                <div class="centered-columns offer-box">

                                    <div class="offer-box-left centered-column col-md-6">
                                        <div class="offer-info">
                                            <h1>BACON &amp; CHEESE</h1>
                                            <p></p>

                                            <div class="margin-100"></div>
                                            <h2 class="text-huge"><a href="" class="button">Xem th&#234;m <i class="fa fa-long-arrow-right"></i></a></h2>
                                            <div class="margin-20"></div>
                                        </div>
                                    </div>
                                    <div class="offer-box-right centered-column col-md-6">
                                        <img src="assets/images/banh/softbuns/BACON%20CHEESE8805.jpg?w=546&amp;h=546&amp;mode=crop&amp;scale=both" />
                                    </div>
                                </div>
                                <!-- .row -->
                            </article>
                        </div>
                        <!-- .tab-pane -->
                        <!-- Tab panes -->
                        <div role="tabpanel" class="tab-pane fade in " id="popular_1">
                            <article>
                                <div class="centered-columns offer-box">

                                    <div class="offer-box-left centered-column col-md-6">
                                        <div class="offer-info">
                                            <h1>CREAM CHEESE BREAD</h1>
                                            <p></p>

                                            <div class="margin-100"></div>
                                            <h2 class="text-huge"><a href="" class="button">Xem th&#234;m <i class="fa fa-long-arrow-right"></i></a></h2>
                                            <div class="margin-20"></div>
                                        </div>
                                    </div>
                                    <div class="offer-box-right centered-column col-md-6">
                                        <img src="assets/images/banh/softbuns/CREAM%20CHEESE%20BREAD8805.jpg?w=546&amp;h=546&amp;mode=crop&amp;scale=both" />
                                    </div>
                                </div>
                                <!-- .row -->
                            </article>
                        </div>
                        <!-- .tab-pane -->
                        <!-- Tab panes -->
                        <div role="tabpanel" class="tab-pane fade in " id="popular_2">
                            <article>
                                <div class="centered-columns offer-box">

                                    <div class="offer-box-left centered-column col-md-6">
                                        <div class="offer-info">
                                            <h1>ALMOND CREAM BREAD</h1>
                                            <p></p>

                                            <div class="margin-100"></div>
                                            <h2 class="text-huge"><a href="" class="button">Xem th&#234;m <i class="fa fa-long-arrow-right"></i></a></h2>
                                            <div class="margin-20"></div>
                                        </div>
                                    </div>
                                    <div class="offer-box-right centered-column col-md-6">
                                        <img src="assets/images/banh/softbuns/ALMOND%20CREAM%20BREAD8805.jpg?w=546&amp;h=546&amp;mode=crop&amp;scale=both" />
                                    </div>
                                </div>
                                <!-- .row -->
                            </article>
                        </div>
                        <!-- .tab-pane -->
                </div>
                <!-- .centered-column -->
            </div>
            <!-- .tabs-big-container -->

            <div class="margin-80"></div>
        </div>
        <!-- .container -->
    </div>
    <!-- .section-content -->
</section>

<section id="posts-section">
    <div class="section-content">
        <div class="container">
            <header class="section-header onscroll-animate">
                <h1>TIN TỨC</h1>
                <p></p>
            </header>
        </div>
        <div id="post-slider-1" class="post-slider slider-arrows">
                <div class="container">
                    <div class="row">
                            <div class="col-md-4 onscroll-animate">
                                <div class="post">
                                    <div class="post-image">
                                        <div id="post-images-slider-1" class="post-images-slider">
                                            <!-- <a href="blog-tin-tuc-sweethome/qua-8-3-tu-sweethome-bakery-cho-phai-dep-dep-hon-7665.html"> -->
                                                <img src="assets/images/banner/sweethome201703084038.jpg?w=342&amp;h=342&amp;mode=crop&amp;scale=both"></a>
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <h2><!-- <a href="blog-tin-tuc-sweethome/qua-8-3-tu-sweethome-bakery-cho-phai-dep-dep-hon-7665.html"> -->Qu&#224; 8/3 từ Mina Bakery &quot;Cho ph&#225;i đẹp, đẹp hơn&quot;</a></h2>
                                        <p></p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <div class="margin-60"></div>
                            </div>
                            <div class="col-md-4 onscroll-animate">
                                <div class="post">
                                    <div class="post-image">
                                        <div id="post-images-slider-1" class="post-images-slider">
                                            <!-- <a href="blog-tin-tuc-sweethome/banh-moi-thang-12-khuyen-mai-mua-3-tang-1-8585.html"> -->
                                                <img src="assets/images/banner/news4038.jpg?w=342&amp;h=342&amp;mode=crop&amp;scale=both"></a>
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <h2><!-- <a href="blog-tin-tuc-sweethome/banh-moi-thang-12-khuyen-mai-mua-3-tang-1-8585.html"> -->B&#225;nh mới th&#225;ng 12 - Khuyến m&#227;i &quot;Mua 3 tặng 1&quot;</a></h2>
                                        <p></p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <div class="margin-60"></div>
                            </div>
                            <div class="col-md-4 onscroll-animate">
                                <div class="post">
                                    <div class="post-image">
                                        <div id="post-images-slider-1" class="post-images-slider">
                                            <!-- <a href="blog-tin-tuc-sweethome/cuoi-tuan-diu-ngot-cung-sweethome-7030.html"> -->
                                                <img src="assets/images/blog/13450238_1249270051752143_788632776456193623_n4038.jpg?w=342&amp;h=342&amp;mode=crop&amp;scale=both"></a>
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <h2><!-- <a href="blog-tin-tuc-sweethome/cuoi-tuan-diu-ngot-cung-sweethome-7030.html"> -->CUỐI TUẦN DỊU NGỌT C&#217;NG MINA</a></h2>
                                        <p>CUỐI TUẦN DỊU NGỌT CÙNG MINA</p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <div class="margin-60"></div>
                            </div>

                        <!-- .col-md-4 -->

                    </div>
                    <!-- .row -->
                </div>
                <div class="container">
                    <div class="row">
                            <div class="col-md-4 ">
                                <div class="post">
                                    <div class="post-image">
                                        <div id="post-images-slider-1" class="post-images-slider">
                                            <!-- <a href="blog-tin-tuc-sweethome/qua-8-3-tu-sweethome-bakery-cho-phai-dep-dep-hon-7665.html"> -->
                                                <img src="assets/images/banner/sweethome201703084038.jpg?w=342&amp;h=342&amp;mode=crop&amp;scale=both"></a>
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <h2><!-- <a href="blog-tin-tuc-sweethome/qua-8-3-tu-sweethome-bakery-cho-phai-dep-dep-hon-7665.html"> -->Qu&#224; 8/3 từ Mina Bakery &quot;Cho ph&#225;i đẹp, đẹp hơn&quot;</a></h2>
                                        <p></p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <div class="margin-60"></div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="post">
                                    <div class="post-image">
                                        <div id="post-images-slider-1" class="post-images-slider">
                                            <!-- <a href="blog-tin-tuc-sweethome/banh-moi-thang-12-khuyen-mai-mua-3-tang-1-8585.html"> -->
                                                <img src="assets/images/banner/news4038.jpg?w=342&amp;h=342&amp;mode=crop&amp;scale=both"></a>
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <h2><!-- <a href="blog-tin-tuc-sweethome/banh-moi-thang-12-khuyen-mai-mua-3-tang-1-8585.html"> -->B&#225;nh mới th&#225;ng 12 - Khuyến m&#227;i &quot;Mua 3 tặng 1&quot;</a></h2>
                                        <p></p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <div class="margin-60"></div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="post">
                                    <div class="post-image">
                                        <div id="post-images-slider-1" class="post-images-slider">
                                            <!-- <a href="blog-tin-tuc-sweethome/cuoi-tuan-diu-ngot-cung-sweethome-7030.html"> -->
                                                <img src="assets/images/blog/13450238_1249270051752143_788632776456193623_n4038.jpg?w=342&amp;h=342&amp;mode=crop&amp;scale=both"></a>
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <h2><!-- <a href="blog-tin-tuc-sweethome/cuoi-tuan-diu-ngot-cung-sweethome-7030.html"> -->CUỐI TUẦN DỊU NGỌT C&#217;NG MINA</a></h2>
                                        <p>CUỐI TUẦN DỊU NGỌT CÙNG MINA</p>
                                    </div>
                                </div>
                                <!-- .post -->
                                <div class="margin-60"></div>
                            </div>

                        <!-- .col-md-4 -->

                    </div>
                    <!-- .row -->
                </div>
        </div>
        <!-- .post-slider -->
    </div>
    <!-- .section-content -->
</section> 
<section id="clients-section">
    <div class="section-content">
        <div class="container">
            <header class="section-header onscroll-animate">
                <h1>Kh&#225;ch h&#224;ng th&#226;n thiết của Mina Bakery</h1>
                <p>Mina Bakery vinh dự l&#224; đối t&#225;c tin tưởng của Qu&#253; Kh&#225;ch h&#224;ng</p>
            </header>
            <div class="row">
                    <div class="col-sm-2 client-logo onscroll-animate" data-delay="200">
                        <img src="assets/images/logolienket/client27253.png?w=146&amp;h=22&amp;mode=crop&amp;scale=both">
                    </div>
                    <div class="col-sm-2 client-logo onscroll-animate" data-delay="250">
                        <img src="assets/images/logolienket/client57253.png?w=146&amp;h=22&amp;mode=crop&amp;scale=both">
                    </div>
                    <div class="col-sm-2 client-logo onscroll-animate" data-delay="300">
                        <img src="assets/images/logolienket/client47253.png?w=146&amp;h=22&amp;mode=crop&amp;scale=both">
                    </div>
                    <div class="col-sm-2 client-logo onscroll-animate" data-delay="350">
                        <img src="assets/images/logolienket/client37253.png?w=146&amp;h=22&amp;mode=crop&amp;scale=both">
                    </div>
                    <div class="col-sm-2 client-logo onscroll-animate" data-delay="400">
                        <img src="assets/images/logolienket/client27253.png?w=146&amp;h=22&amp;mode=crop&amp;scale=both">
                    </div>
                    <div class="col-sm-2 client-logo onscroll-animate" data-delay="450">
                        <img src="assets/images/logolienket/client17253.png?w=146&amp;h=22&amp;mode=crop&amp;scale=both">
                    </div>

            </div>
        </div>
    </div>
</section>
<?php
    require 'footer.php';
?>