<?php
    require 'config.php';
    function get_user_by_id($user_id){
        $sql = "SELECT * FROM user WHERE user_id = $user_id";
        GLOBAL $conn;
        $query = mysqli_query($conn, $sql);
        return mysqli_fetch_assoc($query);
    }

    function edit_user($data, $user_id){
        $sql  = "UPDATE user SET username = '{$data['username']}', fullname =  '{$data['fullname']}', email = '{$data['email']}', sex =  '{$data['sex']}', birthday =  {$data['birthday']}, updatedon = '{$data['modified']}'
                     WHERE user_id = $user_id";
        GLOBAL $conn;
        if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully"; ?>
            <script>swal('Chỉnh sửa thành công')</script>
        <?php } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        return mysqli_query($conn, $sql);
    }
    $user_id = $_GET['user_id'];
    $user = get_user_by_id($user_id);
?>
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

<section class="container" style="margin-top: 50px">
<form name="edit" method="POST" action="">
    <p>
        <label>Tài khoản:</label>
        <input type="text" name="username" value="<?php echo $user['username']; ?>" />
    </p>
    <p>
        <label>Mật khẩu:</label>
        <input type="password" name="password" value="" />
    </p>
    <p>
        <label>Họ tên:</label>
        <input type="text" name="fullname" value="<?php echo $user['fullname']; ?>" />
    </p>
    <p>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $user['email']; ?>" />
    </p>
    <p>
        <label>Giới tính:</label>
<!--        <input type="text" name="sex" value="--><?php //echo $user['sex']; ?><!--" />-->
        <select name="sex" style="width:100%; height:50px; border:1px solid #ccc; border-radius:3px;">
            <option>Nam</option>
            <option>Nữ</option>
        </select>
    </p>
    <p>
        <label>Ngày sinh:</label>
        <input type="text" name="birthday" value="<?php echo $user['birthday']; ?>" />
	</p>
    <p>
        <input type="submit" value="Chỉnh sửa" />
    </p>
</form>
</section>
<style>
    input{
        border: 1px solid;
    }
</style>
<?php
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('location:http://localhost/MinaBakery/login.php');
}

//Nếu có POST dữ liệu lên thì xử lý cập nhật
if($_POST) {
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'username' => $_POST['username'],
        'password' => ($_POST['password']),
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'sex' => $_POST['sex'],
        'birthday' => $_POST['birthday'],
        'modified' => date('Y-m-d H:i:s')
    );

    edit_user($data, $user_id);

}
?>
<?php require 'footer.php'?>
