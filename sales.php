<?php
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/login.php');
}
require 'header.php'?>

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

<section class="container admin">
<h1><a href="logout.php" style="font-size: 30px; color: red">Đăng xuất</a></h1>
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
<!--    <li><a href="addcart.php">Thêm</a></li>-->
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

<?php require 'footer.php';?>