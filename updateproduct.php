<?php
require 'config.php';
function get_product_by_id($product_id){
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    GLOBAL $conn;
    $query = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($query);
}

function get_cat_list(){
    $sql = "SELECT * FROM category ORDER BY category_id DESC";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}
$cat_list = get_cat_list();

function edit_product($data, $product_id){
    $sql  = "UPDATE product SET category_id = '{$data['category_id']}', name = '{$data['name']}', price = '{$data['price']}', detail = '{$data['detail']}', image = '{$data['image']}', status = '{$data['status']}', updatedon = '{$data['modified']}' 
                     WHERE product_id = $product_id";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully"; ?>
        <script>swal('Chỉnh sửa thành công')</script>
    <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return mysqli_query($conn, $sql);
}
$product_id = $_GET['product_id'];
$product = get_product_by_id($product_id);
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
            <label>Category:</label>
            <select name="category_id" style="width: 100%; height:50px; border:1px solid #ccc; border-radius:3px;">
                <?php while ($cat = mysqli_fetch_assoc($cat_list)): ?>
                    <option><?php echo $cat['category_id']; ?></option>
                <?php endwhile; ?>
            </select>
        </p>
        <p>
            <label>Tên:</label>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" />
        </p>
        <p>
            <label>Giá:</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>" />
        </p>
        <p>
            <label>Chi tiết:</label>
            <input type="text" name="detail" value="<?php echo $product['detail']; ?>" />
        </p>
        <p>
            <label>Hình:</label>
            <input type="text" name="image" value="<?php echo $product['image']; ?>" />
        </p>
        <p>
            <label>Tình trạng:</label>
            <input type="text" name="status" value="<?php echo $product['status']; ?>" />
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
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'detail' => $_POST['detail'],
        'image' => $_POST['image'],
        'status' => $_POST['status'],
        'modified' => date('Y-m-d H:i:s')
    );

    edit_product($data, $product_id);

}
?>
<?php require 'footer.php'?>
