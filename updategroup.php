<?php
require 'config.php';
function get_group_by_id($group_id){
    $sql = "SELECT * FROM role WHERE group_id = $group_id";
    GLOBAL $conn;
    $query = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($query);
}

function edit_group($data, $group_id){
    $sql  = "UPDATE role SET group_id = '{$data['group_id']}', name = '{$data['name']}', updatedon = '{$data['modified']}' 
                     WHERE group_id = $group_id";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";?>
<script>swal('Chỉnh sửa thành công')</script>
    <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return mysqli_query($conn, $sql);
}
$group_id = $_GET['group_id'];
$group = get_group_by_id($group_id);
?>
<?php ob_start(); require 'header.php'?>

<section class="top-section">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Chỉnh sửa nhóm người dùng</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: 50px">
    <form name="edit" method="POST" action="">
        <p>
            <label>ID:</label>
            <input type="text" name="group_id" value="<?php echo $group['group_id']; ?>" />
        </p>
        <p>
            <label>Tên:</label>
            <input type="text" name="name" value="<?php echo $group['name']; ?>" />
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
        'group_id' => $_POST['group_id'],
        'name' => $_POST['name'],
        'modified' => date('Y-m-d H:i:s')
    );

    edit_group($data, $group_id);

}
?>
<?php require 'footer.php'?>
