<?php
    function get_user_list(){
        $sql = "SELECT * FROM user ORDER BY user_id DESC";
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

    $user_list = get_user_list();
?>

<?php require 'header.php'?>

    <section class="top-section">
        <div class="offset-borders">
            <div class="full-header-container" id="header-contact">
                <div class="full-header">
                    <div class="container">
                        <h1>Danh sách người dùng</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container list" style="margin-top: 50px">
        <table width="100%" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Nhóm</th>
                <th>Tài khoản</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Ngày tạo</th>
                <th>Ngày chỉnh sửa</th>
                <th>Tác vụ</th>
            </tr>
            <?php while($user = mysqli_fetch_assoc($user_list)): ?>
                <tr>
                    <td><?php echo $user['user_id']; ?></td>
                    <td><?php echo $user['group_id']; ?></td>
                    <td><a  href="<?php echo SITE_URL . 'MinaBakery/updateuser.php?user_id=' .  $user['username']; ?>"><?php echo $user['username'];  ?></a></td>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['birthday'] ?></td>
                    <td><?php echo $user['sex']; ?></td>
                    <td><?php echo $user['birthday']; ?></td>
                    <td><?php echo $user['createdon']; ?></td>
                    <td><?php echo $user['updatedon']; ?></td>
                    <td><a  href="<?php echo SITE_URL . 'MinaBakery/deleteuser.php?user_id=' .  $user['user_id']; ?>">Xóa</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </section>
<style>
    .list tr{
        margin: 10px 0 10px 0;
    }
</style>
<?php require 'footer.php'?>