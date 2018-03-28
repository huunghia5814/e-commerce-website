<?php
    function delete_user($user_id){
        $sql = "DELETE FROM user WHERE user_id = $user_id";
        GLOBAL $conn;
        return mysqli_query($conn, $sql);
    }
    session_start();

    //Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('location:http://localhost/MinaBakery/login.php');
}

    require 'config.php';
    $user_id = $_GET['user_id'];

    delete_user($user_id);
header('location:http://localhost/MinaBakery/login.php');
?>