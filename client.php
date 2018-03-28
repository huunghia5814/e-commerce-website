<?php
//Lấy dữ liệu trả về dạng xml
//$du_lieu_tra_ve_xml = file_get_contents("http://localhost/MinaBakery/webservice/server.php?getUser&format=xml");

//Lấy dữ liệu trả về dạng json
//$du_lieu_tra_ve_json = file_get_contents("http://localhost/MinaBakery/webservice/server.php?getUser&format=json");

//Code Xử lý dữ liệu trả về theo ý của bạn ...
//var_dump ($du_lieu_tra_ve_json);
//var_dump ($du_lieu_tra_ve_xml);
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['customer'])){
    header('location:login.php');
}
?>

<?php require 'header.php'?>
<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Đăng nhập thanh toán</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: 50px;">
    <form name="login" method="POST" action="" class="login">
        <p>
            <label>Tài khoản:</label>
            <input type="text" name="username" value="" />
        </p>
        <p>
            <label>Mật khẩu:</label>
            <input type="password" name="password" value="" />
        </p>
        <p>
            <input type="submit" value="Thanh toán" />
        </p>
    </form>
</section>
<style>
    .login input{
        border: 1px solid;
    }
</style>

<?php $tongtien = $_GET['t']; require 'server.php'; pay($tongtien) ?>

<?php require 'footer.php'?>
