<?php
require 'config.php';
function get_cat_by_id($category_id){
    $sql = "SELECT * FROM category WHERE category_id = $category_id";
    GLOBAL $conn;
    $query = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($query);
}

function edit_cat($data, $category_id){
    $sql  = "UPDATE category SET name = '{$data['name']}', type = '{$data['type']}', updatedon = '{$data['modified']}' 
                     WHERE category_id = $category_id";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";?>
        <script>swal('Chỉnh sửa thành công')</script>
    <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return mysqli_query($conn, $sql);
}
$category_id = $_GET['category_id'];
$cat = get_cat_by_id($category_id);
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
            <label>Tên:</label>
            <input type="text" name="name" value="<?php echo $cat['name']; ?>" />
        </p>
        <p>
            <label>Loại:</label>
            <input type="text" name="type" value="<?php echo $cat['type']; ?>" />
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
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:http://localhost/MinaBakery/login.php');
}

//Nếu có POST dữ liệu lên thì xử lý cập nhật
if($_POST) {
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'name' => $_POST['name'],
        'type' => ($_POST['type']),
        'modified' => date('Y-m-d H:i:s')
    );

    edit_cat($data, $category_id);

}
?>
<?php require 'footer.php'?>
