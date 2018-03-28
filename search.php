<?php require 'header.php'?>

    <section class="top-section">
        <div class="offset-borders">
            <div class="full-header-container" id="header-contact">
                <div class="full-header">
                    <div class="container">
                        <h1>Tìm kiếm</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <form class="container search" method="POST" action="search.php" style="">
        <input name="search" type="text" placeholder="Nhập từ khóa...">
        <input type="submit" value="Tìm">
    </form>
    <style>
        .search input{
            border: 1px solid #000000;
        }
    </style>
<?php
    function get_product_list(){
        $sql = "SELECT * FROM product ORDER BY product_id DESC";
        GLOBAL $conn;
        return mysqli_query($conn, $sql);
    }
    require 'config.php';

    $product_list = get_product_list();
    $check = 0;
    if ($_POST):
        while ($product = mysqli_fetch_assoc($product_list)):
            if ($product['name'] == $_POST['search']||$product['category_id'] == $_POST['search']||$product['price'] == $_POST['search']
                ||$product['detail'] == $_POST['search']):?>
            <div class="container">
                <a href="<?php echo SITE_URL . 'MinaBakery/detailproduct.php?id=' .  $product['product_id']; ?>"><?php echo $product['name']; ?></a>
            </div>
            <?php
            endif;
        endwhile;
    endif;
?>

<?php require 'footer.php'?>
