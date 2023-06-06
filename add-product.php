<?php
    include 'connect.php'; 

    if (isset($_POST['btn'])) {
        $name = $_POST['name'];

        $image = $_FILES['img']['name'];
        $image_tmp_name = $_FILES['img']['tmp_name'];

        $price = $_POST['price']; 

        $warranty = $_POST['warranty'];

        $sql = "INSERT INTO sanpham(name, image, price, warranty) 
        VALUE('$name', '$image', '$price', '$warranty')";

        mysqli_query($conn, $sql);

        move_uploaded_file($image_tmp_name, 'img/img-product/'. $image);

        echo ("Chúc mừng bạn đã thêm sản phẩm thành công");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="main-add-product">
        <form id="add-product" action="add-product.php" method="post" enctype="multipart/form-data">
            <label class="space" for="">Tên sản phẩm:</label>
            <input type="text" name="name" id="">
            </br>

            <label class="space" for="">Giá sản phẩm:</label>
            <input type="text" name="price" id="">
            </br>

            <label for="">Thời hạn bảo Hành:</label>
            <input type="text" name="warranty" id="">
            </br>

            <label for="">Hình ảnh sản phẩm:</label>
            <input type="file" name="img" id="">

            <button id="submit" name="btn">Thêm sản phẩm</button>
        </form>
    </div>
</body>

</html>