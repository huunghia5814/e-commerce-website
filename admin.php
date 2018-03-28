
<?php //Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('location:login.php');
}require 'header.php'?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-contact">
            <div class="full-header">
                <div class="container">
                    <h1>ADMIN</h1>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="container admin" style="margin-top: 50px">
    <a href="logout.php" style="font-size: 30px; color: red">Đăng xuất</a>

    <ul><p>Người dùng</p>
        <li><a href="listuser.php">Danh sách</a></li>
        <li><a href="adduser.php">Thêm</a></li>
    </ul>
    <ul><p>Nhóm người dùng</p>
        <li><a href="listgroup.php">Danh sách</a></li>
        <li><a href="addgroup.php">Thêm</a></li>
    </ul>
    <ul><p>Sản phẩm</p>
        <li><a href="listproduct.php">Danh sách</a></li>
        <li><a href="addproduct.php">Thêm</a></li>
    </ul>
    <ul><p>Danh mục sản phẩm</p>
        <li><a href="listcat.php">Danh sách</a></li>
        <li><a href="addcat.php">Thêm</a></li>
    </ul>
    <ul><p>Đơn hàng</p>
        <li><a href="listcart.php">Danh sách đơn hàng</a></li>
    </ul>
</section>

<style>
    .admin ul{
        margin: 10px 0 10px 0;
    }
    .admin p{
        font-size: 20px;
    }
</style>

<?php require 'footer.php' ?>