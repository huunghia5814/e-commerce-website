<?php
    function delete_cat($category_id){
        $sql = "DELETE FROM category WHERE category_id = $category_id";
        GLOBAL $conn;
        return mysqli_query($conn, $sql);
    }
    session_start();

    //Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
        if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
            header('location:http://localhost/MinaBakery/login.php');
        }

    require 'config.php';
    $category_id = $_GET['category_id'];

    delete_cat($category_id);
header('location:http://localhost/MinaBakery/login.php');
?>
