<?php ob_start(); require 'header.php'?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Đăng nhập</h1>
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
            <input type="submit" value="Đăng nhập" />
        </p>
    </form>
</section>
<style>
    .login input{
        border: 1px solid;
    }
</style>

<?php
    function get_user_by_username($username){
        $sql = "SELECT * FROM user WHERE username = '$username'";
        GLOBAL $conn;
        $query = mysqli_query($conn, $sql);
        return mysqli_fetch_assoc($query);
    }
?>

<?php
session_start();

if(isset($_SESSION['admin'])){
    header('location:http://localhost/MinaBakery/admin.php');
}
elseif (isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/sales.php');
}
elseif (isset($_SESSION['customer'])){
    header('location:http://localhost/MinaBakery/customer.php');
}
require 'config.php';

if(isset($_POST['username'])  && !empty($_POST['username']) &&  isset($_POST['password']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = get_user_by_username($username);
    if($user && $user['password'] === ($password)){
        $_SESSION['user'] = $user;
        if ($user['group_id'] == 1){
            $_SESSION['admin'] = $user;
            header('location:http://localhost/MinaBakery/admin.php');
        }
        else if ($user['group_id'] == 2){
            $_SESSION['sales'] = $user;
            header('location:http://localhost/MinaBakery/sales.php');
        }
        else {
            $_SESSION['customer'] = $user;
            header('location:http://localhost/MinaBakery/customer.php');
        }
    }else{
        echo 'that bai';
    }
}
?>
<?php require'footer.php'?>
