<?php
    include "connect.php";

    $this_id = $_GET['this_id'];

    $sql = "DELETE FROM sanpham WHERE id = '$this_id'";
    mysqli_query($conn, $sql);

    header('location: product.php');
?>