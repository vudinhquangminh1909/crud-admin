<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="main">
        <table class="header-table">
            <thead>
                <tr>
                    <td>Số thứ tự</td>
                    <td>Tên sản phẩm</td>
                    <td>Hình ảnh</td>
                    <td>Giá</td>
                    <td>Bảo hành</td>
                </tr>
            </thead>

            <tbody>
                <?php
                    include 'connect.php';

                    $sql = "SELECT * FROM sanpham";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($result)) {  
                ?>

                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><img width="300px" height="300px" src="./img/img-product/<?php echo $row['image'] ?>" alt="">
                    </td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['warranty']?></td>
                    <td>
                        <li><a class="edit-section" href="edit.php?this_id=<?php echo $row['id']?>">Sửa sản phẩm</a>
                        </li>

                        <li class="margin-edit"><a class="delete-section"
                                href="delete.php?this_id=<?php echo $row['id']?>">Xóa sản phẩm</a>
                        </li>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
    <li class="btn-product"><a href="add-product.php">Thêm sản phẩm</a></li>
    <li class="btn-product"><a href="index.php">Trang chủ</a></li>
</body>

</html>