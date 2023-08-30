<?php

$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "laptrinhweb";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn->connect_error){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}


?>