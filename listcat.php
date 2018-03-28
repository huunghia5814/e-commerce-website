<?php
function get_cat_list(){
    $sql = "SELECT * FROM category ORDER BY category_id DESC";
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

$cat_list = get_cat_list();
?>

<?php require 'header.php'?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Danh mục sản phẩm</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: 50px">
<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Loại</th>
        <th>Ngày tạo</th>
        <th>Ngày chỉnh sửa</th>
        <th>Tác vụ</th>
    </tr>
    <?php while($cat = mysqli_fetch_assoc($cat_list)): ?>
        <tr>
            <td><?php echo $cat['category_id']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/updatecat.php?category_id=' .  $cat['category_id']; ?>"><?php echo $cat['name'];  ?></a></td>
            <td><?php echo $cat['type']; ?></td>
            <td><?php echo $cat['createdon']; ?></td>
            <td><?php echo $cat['updatedon']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/deletecat.php?category_id=' .  $cat['category_id']; ?>">Xóa</a></td>
        </tr>
    <?php endwhile; ?>
</table>
</section>

<?php require 'footer.php'?>