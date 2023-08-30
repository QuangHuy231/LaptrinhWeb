<?php

    require 'connect.php';

    if(isset($_POST['btn-req'])){
        $msv = $_POST['msv'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $interest = $_POST['interest'];
        $nationality = $_POST['nationality'];
        $note = $_POST['note'];
        if(!empty($msv) && !empty($name) && !empty($email) && !empty($gender) && !empty($interest) && !empty($nationality) && !empty($note)){
            $sql = "INSERT INTO `users` (`user_id`, `username`, `email`, `gioitinh`, `sothich`, `quoctich`, `ghichu`) VALUES ('$msv', '$name', '$email', '$gender', '$interest', '$nationality', '$note')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Đăng ký thành công')</script>";
                echo "<script>window.open('listUser.php','_self')</script>";
            } 
    }
}
?>