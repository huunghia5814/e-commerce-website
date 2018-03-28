<?php ob_start(); require 'header.php'?>

    <section class="top-section" style="margin-bottom: 50px">
        <div class="offset-borders">
            <div class="full-header-container" id="header-blog">
                <div class="full-header">
                    <div class="container">
                        <h1>Thêm nhóm người dùng</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class=" row" style=" height: auto; width:620px; margin:auto; background-color:#e2a5a4; padding:50px">

    <form name="add" method="POST" action="" style="text-align:center">

        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>ID:</label></div><br />
        <input type="text" name="group_id" value=""  style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;" />
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Tên:</label></div><br />
        <input type="text" name="name" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
            <input type="submit" value="Thêm mới" />
        </p>
    </form></section>

<?php
function add_group($data){
    $sql = "INSERT INTO role (group_id, name, createdon, updatedon) 
            VALUES('{$data['group_id']}', '{$data['name']}', '{$data['created']}', '{$data['modified']}')";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";?>
        <script>swal('Thêm thành công')</script>
    <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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

//Require các file cần thiết
require 'config.php';

//Nếu có POST dữ liệu lên thì xử lý
if($_POST){
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'group_id' => $_POST['group_id'],
        'name' => $_POST['name'],
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );
    add_group($data);
}

//Require file giao diện (View)
//require '../../views/admin/user/add.tpl.php';
?>

<?php require 'footer.php'?>