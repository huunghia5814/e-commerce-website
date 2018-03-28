<?php
session_start();
if(isset($_SESSION['customer'])) {
    if (isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = $_SESSION['giohang'] . "," . $_GET['id'];
        echo "Vừa thêm 1 sản phẩm vào giỏ hàng";
    } else {
        $_SESSION['giohang'] = $_GET['id'];
        echo "Vừa thêm 1 sản phẩm vào giỏ hàng";
    }
    header('location:http://localhost/MinaBakery/listcart.php');
} else
    header('location:http://localhost/MinaBakery/login.php');
?>
