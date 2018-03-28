<?php ob_start(); require 'header.php'?>

<?php
    require 'config.php';
function get_group_list(){
    $sql = "SELECT * FROM role ORDER BY group_id DESC";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}
$group_list = get_group_list();
?>

    <section class="top-section" style="margin-bottom: 50px">
        <div class="offset-borders">
            <div class="full-header-container" id="header-blog">
                <div class="full-header">
                    <div class="container">
                        <h1>Thêm người dùng</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class= "row" style="height: auto; width:620px; margin: auto; background-color:#e2a5a4; padding:50px">
    <form name="add" method="POST" action="" style="text-align:center">
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>ID:</label></div><br />
        <input type="text" name="user_id" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Group ID:</label></div><br />
<!--        <input type="text" name="group_id" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>-->
            <select name="group_id" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;">
                <?php while ($group = mysqli_fetch_assoc($group_list)): ?>
                    <option><?php echo $group['group_id'] ?></option>
                <?php endwhile; ?>
            </select>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Tài khoản:</label></div><br />
        <input type="text" name="username" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Mật khẩu:</label></div><br />
        <input type="password" name="password" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Họ tên:</label></div><br />
        <input type="text" name="fullname" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Email:</label></div><br />
        <input type="text" name="email" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Giới tính:</label></div><br />
<!--        <input type="text" name="render" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>-->
            <select name="render" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;">
                <option>Nam</option>
                <option>Nữ</option>
            </select>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Ngày sinh:</label></div><br />
        <input type="text" name="birthday" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Trạng thái:</label></div><br />
        <input type="text" name="status" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
            <input type="submit" value="Thêm mới" />
        </p>
    </form></section>

<?php
function add_user($data){
    $sql = "INSERT INTO user(user_id, group_id, username, password, fullname, email, sex, birthday, createdon, updatedon) 
                    VALUES('{$data['user_id']}', '{$data['group_id']}','{$data['username']}', '{$data['password']}',  '{$data['fullname']}', '{$data['email']}', '{$data['render']}', '{$data['birthday']}', '{$data['created']}', '{$data['modified']}')";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";?>
        <script>swal('Thêm thành công')</script>
    <?php } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return mysqli_query($conn, $sql);
}
?>

<?php
//Khởi động session
session_start();

//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
if(!isset($_SESSION['admin'])){
    header('location:login.php');
}


//Nếu có POST dữ liệu lên thì xử lý
if($_POST){
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'user_id' => $_POST['user_id'],
        'group_id' => $_POST['group_id'],
        'username' => $_POST['username'],
        'password' => ($_POST['password']),
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'render' => $_POST['render'],
        'birthday' => $_POST['birthday'],
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );
    add_user($data);
}

//Require file giao diện (View)
//require '../../views/admin/user/add.tpl.php';
?>

<?php require 'footer.php'?>