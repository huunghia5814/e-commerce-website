<?php ob_start(); require 'header.php'?>

<?php
require 'config.php';
function get_cat_list(){
    $sql = "SELECT * FROM category ORDER BY category_id DESC";
    GLOBAL $conn;
    return mysqli_query($conn, $sql);
}
$cat_list = get_cat_list();
?>

<?php // Xử Lý Upload
// Nếu người dùng click Upload
    if (isset($_POST['uploadclick']))
    {
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['avatar']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['avatar']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['avatar']['tmp_name'], './assets/images/uploads/'.$_FILES['avatar']['name']);
                echo 'File Uploaded';
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
?>

<section class="top-section" style="margin-bottom: 50px">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Thêm sản phẩm</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" row" style=" height: auto; width:620px; margin:auto; background-color:#e2a5a4; padding:50px">
    <form action="" name="add" method="POST" enctype="multipart/form-data" style="text-align:center">
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>ID:</label></div><br />
        <input type="text" name="product_id" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Category:</label></div><br />
<!--        <input type="text" name="category_id" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>-->
            <select name="category_id" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;">
                <?php while ($cat = mysqli_fetch_assoc($cat_list)): ?>
                <option><?php echo $cat['category_id']; ?></option>
                <?php endwhile; ?>
            </select>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Tên:</label></div><br />
        <input type="text" name="name" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Giá:</label></div><br />
        <input type="text" name="price" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Chi tiết:</label></div><br />
        <input type="text" name="detail" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Hình:</label></div><br />
        <input type="file" name="avatar" value="" />
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Tình trạng:</label></div><br />
        <input type="text" name="status" value="" style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
            <input name="uploadclick" type="submit" value="Thêm mới" />
        </p>
    </form>
</section>

<?php
function add_product($data){
    $sql = "INSERT INTO product (product_id, category_id, name, price, detail, image, status, createdon, updatedon) 
                    VALUES('{$data['product_id']}', '{$data['category_id']}', '{$data['name']}', '{$data['price']}', '{$data['detail']}', '{$data['image']}', '{$data['status']}', '{$data['created']}', '{$data['modified']}')";
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
if(!isset($_SESSION['user'])&&!isset($_SESSION['admin'])){
    header('location:login.php');
}

//Nếu có POST dữ liệu lên thì xử lý
if($_POST){
//Nhận dữ liệu từ form và gán vào một mãng
    $str = ($_FILES['avatar']['name']) ;
    $data = array(
        'product_id' => $_POST['product_id'],
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'detail' => $_POST['detail'],
        'image' => '/MinaBakery/assets/images/uploads/'.$str,
        'status' => $_POST['status'],
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );
    add_product($data);
}

//Require file giao diện (View)
//require '../../views/admin/user/add.tpl.php';
?>


<?php require 'footer.php'?>