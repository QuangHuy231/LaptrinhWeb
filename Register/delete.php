<?php

require_once 'connect.html';

// delete user
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Xóa thành công')</script>";
        echo "<script>window.open('listUser.html','_self')</script>";
    }
    
}

?>