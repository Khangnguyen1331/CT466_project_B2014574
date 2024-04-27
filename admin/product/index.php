<?php
include "../../db/connect.php";
require_once('../model/product.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title> Quản lí Truyện</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="../category/">Quản lí Danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Quản Lí Truyện</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="../order/main_order.php">Quản Lí người dùng</a>
        </li>

    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center my-4" style="font-family: Arial, Helvetica, sans-serif; color: pink">Quản Lí Truyện </h2>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center; background-color: pink !important; color: white">STT</th>
                            <th style="text-align: center; background-color: pink !important; color: white">Hình ảnh</th>
                            <th style="text-align: center; background-color: pink !important; color: white">Tên Truyện</th>
                            <th style="text-align: center; background-color: pink !important; color: white">Giá Bán Tại Của Hàng</th>
                            <th style="text-align: center; background-color: pink !important; color: white">Danh Mục</th>
                            <th style="text-align: center; background-color: pink !important; color: white">Ngày cập nhật</th>
                            <th style="text-align: center; background-color: pink !important; color: white" width="50px"></th>
                            <th style="text-align: center; background-color: pink !important; color: white" width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // lay danh sach cac danh muc tu database
                        $productList = getall_product(); // print_r($productList);
                        $index = 1;

                        foreach ($productList as $item) {
                            echo '<tr>
                            <td>' . ($index++) . '</td>
                <td> <img src="' . $item['Thumbnail'] . '" style="width: 120px"/> </td>
                <td>' . $item['Title'] . '</td>
                <td>' . $item['Price'] . '</td>
                <td>' . $item['category_Name'] . '</td>
                <td>' . $item['Update_at'] . '</td>
                 <td>
                     <a href ="add.php?Id=' . $item['Id'] . '"><button class="btn btn-outline-success">Sửa </button>
                </td>
                <td>
                    <button class="btn btn-outline-danger" onclick = "deleteproduct(' . $item['Id'] . ')">Xóa </button>
                 </td>
         </tr>';
                        }

                        ?>
                    </tbody>
                </table>
                <a href="add.php">
                    <button class="btn btn-outline-success" style="margin-bottom:15px">Thêm Truyện </button>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deleteproduct(Id) {
            var option = confirm('Bạn có chắc muốn sản phẩm  hiện tại không ?')
            if (!option) {
                return;
            }

            console.log(Id)
            //ajax - lenh post
            $.post('ajaxProduct.php', {
                'Id': Id,
                'action': 'delete'


            }, function(data) {
                location.reload();

            })



        }
    </script>
</body>

</html>