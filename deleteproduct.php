<?php
function delete_product($product_id){
    $sql = "DELETE FROM product WHERE product_id = $product_id";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/login.php');
}

require 'config.php';
$product_id = $_GET['product_id'];

delete_product($product_id);
header('location:http://localhost/MinaBakery/login.php');
?>