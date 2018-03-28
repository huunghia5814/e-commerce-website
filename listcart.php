<?php
session_start();
require 'config.php';
require 'header.php';?>

    <section class="top-section">
        <div class="offset-borders">
            <div class="full-header-container" id="header-blog">
                <div class="full-header">
                    <div class="container">
                        <h1>Đơn hàng</h1>
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
?>
<div class="container" style="margin-top: 50px">
    <table border="1" width="600" align="left" cellspacing="0" cellpadding="0" id="table1">
        <tr>
            <td><b>Sản phẩm đã chọn mua</b></td>
            <td><b>Giá</b></td>
        </tr>

        <?php
        $tongtien=0;
        if (mysqli_num_rows($result)!=0)
        {
            while($row = mysqli_fetch_object($result))

            {
                $sanpham_id= $row->product_id;
                $sanpham_ten= $row->name;
                $sanpham_ghichu=$row->detail;
                $sanpham_gia= $row->price;
                $tongtien+=$sanpham_gia;
                echo "<tr><td align='left'><b>Tên SP:</b> $sanpham_ten <br><b>Thông tin thêm:</b> $sanpham_ghichu</b>";
                echo "</td><td><b>Giá:</b>$sanpham_gia</td></tr>";
                //echo "<tr><td colspan=2><hr></td></tr>";

            }
            echo "<tr><td align='left'><b>Tổng cộng:</b>";
            echo "</td><td><b>$tongtien</b></td></tr>";
        }
        else echo "Chưa có sản phẩm nào";
        ?>

        <a href="menu.php" style="padding-right: 50px">Mua tiep</a>
        <a style="padding-right: 50px" href="<?php echo SITE_URL . 'MinaBakery/thanhtoan.php?t=' . $tongtien; ?>">Thanh toan</a>
        <a href="detroycart.php">Hủy đơn hàng</a>
    </table>
</div>
<?php require 'footer.php'?>