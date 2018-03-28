
<?php
require 'header.php';
?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-contact">
            <div class="full-header">
                <div class="container">
                    <h1>CUSTOMER</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    --><?php
//    require 'config.php';
//    GLOBAL $conn;
//    $sql="select * from user where user_id in ({$_SESSION['customer']})";
//    $user = mysqli_query($conn, $sql);
//    $u = mysqli_fetch_assoc($user);
//    echo $u['user_id'];
//    ?>
<section class="container">
    <h1><a href="logout.php" style="font-size: 30px; color: red">Đăng xuất</a></h1>
    <ul>
        <li><a href="listcart.php" style="font-size: 20px">Danh sách đơn hàng</a></li>
<!--        <li><a href="updateuser.php" style="font-size: 20px">Chỉnh sửa thông tin</a></li>-->
    </ul>
</section>

<?php require 'footer.php' ?>