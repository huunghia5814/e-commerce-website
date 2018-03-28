<?php
function get_contact_list(){
    $sql = "SELECT * FROM contact ORDER BY id DESC";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}

session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/login.php');
}

//Require các file cần thiết
require 'config.php';

$contact_list = get_contact_list();
?>

<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Nội dung</th>
    </tr>
    <?php while($con = mysqli_fetch_assoc($contact_list)): ?>
        <tr>
            <td><?php echo $con['id']; ?></td>
            <td><?php echo $con['name']; ?></td>
            <td><?php echo $con['email']; ?></td>
            <td><?php echo $con['detail']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/deletecontact.php?id=' .  $con['id']; ?>">Xóa</a></td>
        </tr>
    <?php endwhile; ?>
</table>