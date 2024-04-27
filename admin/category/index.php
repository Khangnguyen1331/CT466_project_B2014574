`<?php
include "../../db/connect.php";
include "../model/category.php";

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
            <a class="nav-link active" href="#">Quản lí Danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản Lí  Danh Sách Truyện </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../order/main_order.php">Quản Lí Người dùng</a>
        </li>

    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="text-center my-4" style="font-family: Arial, Helvetica, sans-serif; color:pink">Quản Lí Danh Mục</h1>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center; background-color: pink !important; color: white">
                                <h3>STT</h3>
                            </th>
                            <th style="text-align: center; background-color: pink !important; color: white">
                                <h3>Tên danh mục</h3>
                            </th>
                            <th style="text-align: center; background-color: pink !important; color: white">
                                <h3>Cập nhật</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // lay danh sach cac danh muc tu database
                        $categoryList = getall_category();

                        $index = 1;

                        foreach ($categoryList as $item) {
                            echo '<tr>
                 <td>' . ($index++) . '</td>
                <td>' . $item['Name'] . '</td>
                 <td class="d-flex justify-content-end">
                     <a href ="add.php?Id=' . $item['Id'] . '"><button class="btn btn-outline-success"> Sửa </button>
                     <button class="btn btn-outline-danger " onclick = "deleteCategory(' . $item['Id'] . ')"> Xóa </button>
                </td>
         </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <a href="add.php">
                    <button class="btn btn-outline-success" style="margin-bottom: 15px">Thêm danh mục </button>

                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deleteCategory(Id) {
            var option = confirm('Bạn có chắc muốn xóa danh mục hiện tại không ?')
            if (!option) {
                return;
            }

            console.log(Id)
            //ajax - lenh post
            $.post('ajax.php', {
                'Id': Id,
                'action': 'delete'


            }, function(data) {
                location.reload();

            })



        }
    </script>
</body>

</html>