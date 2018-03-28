<?php
require 'header.php';
?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-menus">
            <div class="full-header">
                <div class="container">
                    <h1>SẢN PHẨM</h1>
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="products-section">
    <div class="section-content">
        <div class="container">
            <header class="section-header">
                <h1>C&#193;C LOẠI B&#193;NH</h1>

            </header>

            <div class="text-center onscroll-animate">
                <div class="filter-icons-container">
                    <div class="filter-icon-wrapper">
                        <a href="menu1.php">
                            <div class="filter-icon-content">
                                <div class="filter-icon">
                                    <img src="assets/images/icon/144715.png?w=50&amp;h=50&amp;mode=crop&amp;scale=both" />

                                </div>
                            </div>
                        </a>
                        <p>Dessert</p>
                    </div>
                    <div class="filter-icon-wrapper">
                        <a href="menu2.php">
                            <div class="filter-icon-content">
                                <div class="filter-icon">
                                    <img src="assets/images/icon/134715.png?w=50&amp;h=50&amp;mode=crop&amp;scale=both" />

                                </div>
                            </div>
                        </a>
                        <p>B&#225;nh kem</p>
                    </div>
                </div>

                <div class="margin-20"></div>
                <?php
                function get_product_list(){
                    $sql = "SELECT * FROM product WHERE category_id = 1 AND status > 0 ORDER BY product_id DESC";
                    GLOBAL $conn;
                    return mysqli_query($conn, $sql);
                }
                require 'config.php';

                $product_list = get_product_list();
                ?>
                <div class="row">
                    <div class="col-md-12 col-lg-12 onscroll-animate">
                        <div class="row">
                            <?php while($product = mysqli_fetch_assoc($product_list)): ?>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <div class="product">
                                        <div class="product-preview">
                                            <a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $product['product_id']; ?>">
                                                <img alt="CRESCENT ROLL MINI" src="<?php echo $product['image'] ?>"></a>
                                            <!--                                        --><?php //echo $product['image'] ?>
                                        </div>
                                        <div class="product-detail-container">
                                            <div class="product-icons">
                                                <div class="product-icon-container">
                                                    <a href="<?php echo SITE_URL . 'MinaBakery/addcart.php?id=' . $product['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-detail">
                                                <h2><a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $product['product_id']; ?>">CRESCENT ROLL MINI</a></h2>
                                                <p>SOFT BUNS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <!--                <div class="pagination">-->
                    <!--                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="menu4658.html?page=2">2</a></li><li><a href="menu9ba9.html?page=3">3</a></li><li><a href="menufdb0.html?page=4">4</a></li><li><a href="menuaf4d.html?page=5">5</a></li><li><a href="menuc575.html?page=6">6</a></li><li><a href="menu235c.html?page=7">7</a></li><li><a href="menufdfa.html?page=8">8</a></li><li><a href="menu0b08.html?page=9">9</a></li><li><a href="menu1448.html?page=10">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="menu4658.html?page=2" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="menub385.html?page=30">»»</a></li></ul></div>-->
                    <!--                </div>-->
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .section-content -->
</section>

<?php
require 'footer.php';
?>

<!--<script type="text/javascript">-->
<!--    (function( $ ) {-->
<!--        var news_list = $('.partner1 .item');-->
<!--        var news_count = news_list.length;-->
<!--        var item_in_one_page = 1;-->
<!--        if(news_count%item_in_one_page != 0){-->
<!--            var total_page = news_count/item_in_one_page+1;-->
<!--        }-->
<!--        else{-->
<!--            var total_page = news_count/item_in_one_page;-->
<!--        }-->
<!--        $('.page').twbsPagination({-->
<!--            totalPages: total_page,-->
<!--            visiblePages: 3,-->
<!--            first: false,-->
<!--            last: false,-->
<!--            prev: '<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>',-->
<!--            next: '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>',-->
<!--            onPageClick: function (event, page) {-->
<!--                min = page*item_in_one_page-item_in_one_page;-->
<!--                max = page*item_in_one_page;-->
<!--                for(i = 0; i < news_count; i++){ if(i >= min && i < max){-->
<!--                    $(news_list[i]).show();-->
<!--                }-->
<!--                else{-->
<!--                    $(news_list[i]).hide();-->
<!--                }-->
<!--                }-->
<!---->
<!--                min = min+1;-->
<!--                // $('.text-pagination').text('Showing '+min+' - '+max+' of '+news_count);-->
<!--            }-->
<!--        });-->
<!--    })(jQuery);-->
<!---->
<!--</script>-->


