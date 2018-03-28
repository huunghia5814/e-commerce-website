<?php
define('SITE_URL', 'http://localhost/');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'payment');

$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, '', DB_DATABASE) or die ('Không thể kết nối tới database');

?>