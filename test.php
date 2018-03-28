
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

<?php
require 'config.php';
function add_product($data){
    $sql = "INSERT INTO product (product_id, category_id, name, price, detail, image, status, createdon, updatedon) 
                    VALUES('{$data['product_id']}', '{$data['category_id']}', '{$data['name']}', '{$data['price']}', '{$data['detail']}', '{$data['image']}', '{$data['status']}', '{$data['created']}', '{$data['modified']}')";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
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
    $data = array(
        'product_id' => $_POST['product_id'],
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'detail' => $_POST['detail'],
        'image' => $_POST['avatar'],
        'status' => $_POST['status'],
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );
    add_product($data);
}

//Require file giao diện (View)
//require '../../views/admin/user/add.tpl.php';
?>
