<?php
    require 'header.php';
    require 'config.php';
    $product_id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    GLOBAL $conn;
    $product = mysqli_query($conn, $sql);
    $p = mysqli_fetch_assoc($product);
?>
<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-gallery">
            <div class="full-header">
                <div class="container">
                    <h1>Chi Tiết Sản Phẩm</h1>
                    <h3>Th&#244;ng tin chi tiết c&#225;c loại b&#225;nh của Sweethome</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery-section">
    <div class="container">
        <div class="col-md-5">
            <article class="gallery-info">
                <div class="article-header-5">
                    <h1><?php echo $p['name']?></h1>
                </div>
                <p></p>
            </article>
            <div class="margin-20" style="margin-bottom: 120px">
                <h3>Chi tiết: <?php echo $p['detail']?></h3>
                <h3>Giá: <?php echo $p['price']?></h3>
                <a href="<?php echo SITE_URL . 'MinaBakery/addcart.php?id=' . $p['product_id']; ?>">
                <div class="product-icon-container" style="width: 50px;height: 50px;background-color: antiquewhite;border-radius: 100px;">
                    <i style="position: relative; top: 12px; left: 17px;" class="fa fa-shopping-cart"></i>
                </div>
                </a>
            </div>

            <div class="onscroll-animate">
                <div class="article-header">
                    <h2>Chia sẻ</h2>
                </div>
                <div class="social-icon-container-alt-small">
                    <a href="http://www.facebook.com/sharer.php?u=http://sweethome.com.vn/menu/softbuns/crescent-roll-mini-4929"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="social-icon-container-alt-small">
                    <a href="https://twitter.com/intent/tweet?url=http://sweethome.com.vn/menu/softbuns/crescent-roll-mini-4929"><i class="fa fa-twitter"></i></a>
                </div>

                <div class="social-icon-container-alt-small">
                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','../../../assets.pinterest.com/js/pinmarklet2a3b.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 onscroll-animate" style="padding:0px">
            <div id="gallery-slider" class="gallery-slider">
                <img class="img-responsive" alt="" src="<?php echo $p['image']?>">
            </div>
        </div>
    </div>
</section>

<?php
    $c = $p['category_id'];
    $sql = "SELECT * FROM product WHERE category_id = $c AND status > 0";
    GLOBAL $conn;
    $product_category = mysqli_query($conn, $sql);
?>

<section id="products-section">
    <div class="section-content">
        <div class="container">
            <header class="section-header">
                <h1>Sản phẩm li&#234;n quan</h1>
            </header>
            <div id="products-slider-1" class="products-slider">
                <div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 onscroll-animate">
                            <div class="row">
                                <?php
                                while ($pc = mysqli_fetch_assoc($product_category)):
                                ?>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <div class="product">

                                        <div class="product-preview">
                                            <a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $p['product_id']; ?>">
                                                <img alt="" src="<?php echo $pc['image']?>"></a>
                                        </div>
                                        <div class="product-detail-container">
                                            <div class="product-icons">
                                                <div class="product-icon-container">
                                                    <a href="<?php echo SITE_URL . 'MinaBakery/addcart.php?id=' . $p['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-detail">
                                                <h2><a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $p['product_id']; ?>"><?php echo $p['name'] ?></a></h2>
                                            </div>
                                        </div>
                                        <!-- .product-detail-container -->
                                    </div>
                                    <!-- .product -->
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
            </div>
            <!-- .products-slider -->
            <p class="text-center onscroll-animate">
                <a href="menu.php" class="button-void">Tất cả sản phẩm</a>
            </p>
        </div>
        <!-- .container -->
    </div>
    <!-- .section-content -->
</section>

<?php require 'footer.php'?>