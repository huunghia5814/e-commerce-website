<?php
function get_donhang(){
    $sql = "SELECT * FROM cart JOIN detailcart WHERE cart.id = detailcart.cart_id";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}

session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
//if(!isset($_SESSION['admin'])){
//    header('location:http://localhost/MinaBakery/login.php');
//}

//Require các file cần thiết
require 'config.php';

$donhang = get_donhang();
?>

<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th></th>
        <th>User</th>
    </tr>
    <?php while($dh = mysqli_fetch_assoc($donhang)): var_dump($dh) ?>
        <tr>
            <td><?php echo $dh['cart_id']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/updategroup.php?group_id=' .  $dh['id']; ?>"><?php echo $dh['user_id'];  ?></a></td>
        </tr>
    <?php endwhile; ?>
</table>