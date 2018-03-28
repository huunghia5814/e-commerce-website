<?php
//if(isset($_GET["getUser"])) {
//    // kiểm tra định dạng dữ liểu trả ra là json hay xml
//    $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml';
//
//    //tạo mạng users để lưu thông tin toàn bộ user trong db
//    $users = array();
//
//    //gọi file kết nối db
//    require_once("connect.php");
//    //truy vấn lấy toàn bộ thông tin trong bảng
//    $sql = "select * from detail";
//    $query = mysqli_query($conn1,$sql);
//    while ($user = mysqli_fetch_assoc($query))
//    {
//    $users[] = array('user' => $user);
//    }
//    // trả ra dữ liệu dưới dạng json
//    if ($format == 'json') {
//        header('Content-type: application/json');
//        echo json_encode(array('users'=>$users));
//    }else{
//        // trả ra dữ liệu dưới dạng xml
//        header('Content-type: text/xml');
//        echo '<users>';
//        foreach($users as $index => $user) {
//            if(is_array($user)) {
//                foreach($user as $key => $value) {
//                    echo '<',$key,'>';
//                    if(is_array($value)) {
//                        foreach($value as $tag => $val) {
//                            echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
//                        }
//                    }
//                    echo '</',$key,'>';
//                }
//            }
//        }
//        echo '</users>';
//    }
//    mysqli_close($conn1);
//}else{
//    echo "Không có dữ liệu trả về";
//}
?>

<?php
    require 'connect.php';
    function pay($tongtien)
    {
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM detail WHERE tk = '$username'";
            GLOBAL $conn1;
            $query = mysqli_query($conn1, $sql);
            $tk = mysqli_fetch_assoc($query);

            $sql2 = "SELECT * FROM bank";
            $query1 = mysqli_query($conn1, $sql2);
            $b = mysqli_fetch_assoc($query1);
            if ($tk['tk'] == $username && $tk['mk'] == $password) {
                if ($tongtien > $tk['money']){
                    echo 'tài khoản không đủ';
                }else {
                    $tientra = $tk['money'] - $tongtien;
                    $sql1 = "UPDATE detail SET money = $tientra
                     WHERE id = '{$tk['id']}'";
                    if ($conn1->query($sql1) === TRUE) {
//                    require 'detroycart.php';
//                        echo "Thanh toán thành công";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn1->error;
                    }
                    $tiennhan = $b['money'] + $tongtien;
                    $sql3 = "UPDATE bank SET money = $tiennhan";
                    if ($conn1->query($sql3) === TRUE) {
//                    require 'detroycart.php';
                        echo "Thanh toán thành công";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn1->error;
                    }
                }
            }
            else echo'that bai';
        } else echo 'vui long dien day du thong tin';
    }
?>
