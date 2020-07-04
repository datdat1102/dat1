<?php
$server = "localhost";
$username = "root";
$password ="";
$database ="shop_laptop";
    $con = mysqli_connect("$server","$username","$password","$database");
//kiểm tra kết nối
if (!$con) {
    die("kết nối thất bại:" . $con-> mysqli_connect_error());    
}
