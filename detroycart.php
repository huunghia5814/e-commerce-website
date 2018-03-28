<?php
    session_start();
    unset($_SESSION['giohang']);
    header('location:http://localhost/MinaBakery/menu.php');
?>