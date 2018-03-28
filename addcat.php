<?php ob_start(); require 'header.php'?>

<section class="top-section" style="margin-bottom: 50px">
    <div class="offset-borders">
        <div class="full-header-container" id="header-blog">
            <div class="full-header">
                <div class="container">
                    <h1>Thêm danh mục sản phẩm</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" row" style=" height:auto; width:620px; margin:auto; background-color:#e2a5a4; padding:50px">
    <form name="add" method="POST" action="" style="text-align:center">
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>ID:</label></div>
        </p><br />
        <input type="text" name="category_id" value=""  style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Tên:</label></div><br />
        <input type="text" name="name" value=""  style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
        <div class="abc" style=" float:left; padding-left:60px">
            <label>Loại:</label></div><br />
        <input type="text" name="type" value=""  style="width:500px; height:30px; border:1px solid #ccc; border-radius:3px;"/>
        </p>
        <p>
            <input type="submit" value="Thêm mới"/>
        </p>
    </form></section>
<?php
function add_cat($data){
    $sql = "INSERT INTO category (category_id, name,type, createdon, updatedon) 
                    VALUES('{$data['category_id']}', '{$data['name']}', '{$data['type']}', '{$data['created']}', '{$data['modified']}')";
    GLOBAL $conn;
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//        header('location:login.php'); ?>
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
if(!isset($_SESSION['admin']) && !isset($_SESSION['sales'])){
    header('location:login.php');
}

//Require các file cần thiết
require 'config.php';?>

    <?php
    if(isset($_POST['category_id'])  && !empty($_POST['category_id']) &&  isset($_POST['name']) && !empty($_POST['name']) &&  isset($_POST['type']) && !empty($_POST['type']))
        {
                $data = array(
                    'category_id' => $_POST['category_id'],
                    'name' => $_POST['name'],
                    'type' => $_POST['type'],
                    'created' => date('Y-m-d H:i:s'),
                    'modified' => date('Y-m-d H:i:s')
                );
                add_cat($data);
            }
?>

<?php require 'footer.php'?>