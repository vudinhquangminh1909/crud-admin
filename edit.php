<?php 
    include 'connect.php';
    $this_id = $_GET['this_id'];

    $sql = "SELECT * FROM  sanpham WHERE id =".$this_id;
    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);

    if (isset($_POST['btn'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $warranty = $_POST['$warranty'];

        $image = $_FILES['img']['name'];
        $image_tmp_name = $_FILES['img']['tmp_name'];

        $sql = "UPDATE sanpham SET name = '$name', image = '$image',
        price = '$price', warranty = '$warranty' WHERE id =".$this_id;

        mysqli_query($conn, $sql);

        move_uploaded_file($image_tmp_name, 'img/img-product/'.$image);

        header ('location: product.php');

        echo ("Sửa sản phẩm thành công");
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
        <form id="add-product" method="post" enctype="multipart/form-data">
            <label class="space" for="">Tên sản phẩm:</label>
            <input type="text" name="name" id="" value="<?php echo $row['name']; ?>">
            </br>

            <label class="space" for="">Giá sản phẩm:</label>
            <input type="text" name="price" id="" value="<?php echo($row['price']);  ?>">
            </br>

            <label for="">Thời hạn bảo Hành:</label>
            <input type="text" name="warranty" id="" value="<?php echo($row['warranty']); ?>">
            </br>

            <label for="">Hình ảnh sản phẩm:</label>
            <span><img width="200px" height="200px" src="img/img-product/<?php echo($row['image']) ?>" alt=""></span>
            <input type="file" name="img" id="">

            <button id="submit" name="btn">Sửa sản phẩm</button>
        </form>
    </div>
</body>

</html>