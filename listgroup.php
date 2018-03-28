<?php
function get_group_list(){
    $sql = "SELECT * FROM role ORDER BY group_id DESC";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}

session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('location:http://localhost/MinaBakery/login.php');
}

//Require các file cần thiết
require 'config.php';

$group_list = get_group_list();
?>

<?php require 'header.php'?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Danh sách nhóm người dùng</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: 50px">
<table width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tên nhóm</th>
        <th>Ngày tạo</th>
        <th>Ngày chỉnh sửa</th>
        <th>Tác vụ</th>
    </tr>
    <?php while($group = mysqli_fetch_assoc($group_list)): ?>
        <tr>
            <td><?php echo $group['group_id']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/updategroup.php?group_id=' .  $group['group_id']; ?>"><?php echo $group['name'];  ?></a></td>
            <td><?php echo $group['createdon']; ?></td>
            <td><?php echo $group['updatedon']; ?></td>
            <td><a  href="<?php echo SITE_URL . 'MinaBakery/deletegroup.php?group_id=' .  $group['group_id']; ?>">Xóa</a></td>
        </tr>
    <?php endwhile; ?>
</table>
</section>

<?php require 'footer.php'?>