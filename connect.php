<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'web-demo';

    $conn = new mysqli($server, $user, $pass, $database);

    if ($conn) {
        mysqli_query($conn, "SET NAMES 'utf8'");
        // echo ('Đã kết nối thành công');
    }
    else {
        echo ('Kết nối thất bại');
    }
?>