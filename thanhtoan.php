<?php
session_start();
require 'config.php';
require 'header.php'; ?>

    <section class="top-section">
        <div class="offset-borders">
            <div class="full-header-container" id="header-blog">
                <div class="full-header">
                    <div class="container">
                        <h1>Chọn hình thức thanh toán</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php GLOBAL $conn;
if (isset($_SESSION['giohang'])==false)
{
    echo "Chưa chọn mua gì cả";
    require 'footer.php';
    exit();
}
$sql="select * from product where product_id in ({$_SESSION['giohang']})";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

$user = $_SESSION['customer'];
$user_id = $user['user_id'];
$tongtien =$_GET['t'];
$date = date('Y-m-d H:i:s');
?>

<?php
    $sql="INSERT INTO `cart` (`user_id` ,`price_cart`, `status`, `buydatedon`) VALUES ('$user_id', '$tongtien', '', '$date')";
    if ($conn->query($sql) === TRUE) {
        echo "Đã xác nhận đơn hàng, vui lòng chọn hình thức thanh toán";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $max = mysqli_query($conn, "select max(id) from cart");
    $row = mysqli_fetch_array($max);
    $cart_id = $row[0];
    while($row = mysqli_fetch_object($result)):
        $product_id= $row->product_id;
        $sql = "INSERT INTO `detailcart` (`cart_id` ,`product_id`) VALUES ('$cart_id', '$product_id')";
        if ($conn->query($sql) === TRUE) {
//            require 'detroycart.php';
            echo '';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    endwhile;

$tinhtrang = $product['status'] - 1;
$sql1  = "UPDATE product SET status = $tinhtrang
                         WHERE product_id = '{$product['product_id']}'";
if ($conn->query($sql1) === TRUE) {
    echo '';
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
?>


<a href="index.php">Thanh toan khi nhan hang</a>
<a href="<?php echo SITE_URL . 'MinaBakery/client.php?t=' . $tongtien; ?>">Thanh toan online</a>

<?php require 'footer.php'?>
