<?php
function get_product_list(){
    $sql = "SELECT * FROM product ORDER BY product_id DESC";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}

session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/login.php');
}

//Require các file cần thiết
require 'config.php';

$product_list = get_product_list();
?>

<?php require 'header.php'?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Danh sách sản phẩm</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="" style="margin-top: 50px">
<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Chi tiết</th>
        <th>Hình</th>
        <th>Tình trạng</th>
        <th>Ngày tạo</th>
        <th>Ngày chỉnh sửa</th>
        <th>Tác vụ</th>
    </tr>
    <?php while($product = mysqli_fetch_assoc($product_list)): ?>
        <tr>
            <td><?php echo $product['product_id']; ?></td>
            <td><?php echo $product['category_id']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/updateproduct.php?product_id=' .  $product['product_id']; ?>"><?php echo $product['name'];  ?></a></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['detail']; ?></td>
            <td><?php echo $product['image']; ?></td>
            <td><?php echo $product['status']; ?></td>
            <td><?php echo $product['createdon']; ?></td>
            <td><?php echo $product['updatedon']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/deleteproduct.php?product_id=' .  $product['product_id']; ?>">Xóa</a></td>
        </tr>
    <?php endwhile; ?>
</table>
</section>

<?php require 'footer.php'?>