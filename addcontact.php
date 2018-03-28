<?php
    function add_contact($data){
        $sql = "INSERT INTO contact (name, email, tel, detail) 
                        VALUES('{$data['name']}', '{$data['email']}', '{$data['tel']}', '{$data['detail']}')";
        GLOBAL $conn;
        if ($conn->query($sql) === TRUE) {
//             echo "New record created successfully";
            require 'contact.php';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
//        return mysqli_query($conn, $sql);
    }
?>

<?php
require 'config.php';
//Nếu có POST dữ liệu lên thì xử lý
if(isset($_POST['name'])  && !empty($_POST['name']) &&  isset($_POST['email']) && !empty($_POST['email']) &&  isset($_POST['tel']) && !empty($_POST['tel'])  &&  isset($_POST['detail']) && !empty($_POST['detail'])){
//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel'],
        'detail' => $_POST['detail'],
    );
    add_contact($data);
}

else ?> <div class="text-center"> <?php echo 'Vui lòng điền đủ thông tin';
    ?></div>
