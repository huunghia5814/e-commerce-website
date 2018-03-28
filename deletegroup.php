<?php
function delete_group($group_id){
    $sql = "DELETE FROM role WHERE group_id = $group_id";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('location:http://localhost/MinaBakery/login.php');
}

require 'config.php';
$group_id = $_GET['group_id'];

delete_group($group_id);
header('location:http://localhost/MinaBakery/login.php');
?>