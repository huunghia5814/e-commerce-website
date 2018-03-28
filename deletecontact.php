<?php
function delete_contact($id){
    $sql = "DELETE FROM contact WHERE id = $id";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/login.php');
}

require 'config.php';
$contact_id = $_GET['id'];

delete_contact($contact_id);
header('location:http://localhost/MinaBakery/index.php');
?>