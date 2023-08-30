<?php

$sid = $_POST['sid'];

require_once 'connect.html';

$msv = $_POST['msv'];
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$interest = $_POST['interest'];
$nationality = $_POST['nationality'];
$note = $_POST['note'];

$update_sql = "UPDATE `users` SET `user_id` = '$msv', `username` = '$name', `email` = '$email', `gioitinh` = '$gender', `sothich` = '$interest', `quoctich` = '$nationality', `ghichu` = '$note' WHERE `users`.`user_id` = $sid";

$update_result = mysqli_query($conn, $update_sql);

if($update_result){
    echo "<script>alert('Cập nhật thành công')</script>";
    echo "<script>window.open('listUser.html','_self')</script>";
}

?>