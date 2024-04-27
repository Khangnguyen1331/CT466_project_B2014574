<?php
require_once('../../db/connect.php');
require_once('../model/product.php');
include('../model/category.php');
$Id = $Price = $Title = $Thumbnail = $Content = $Id_category = '';
if (!empty($_POST)) {
    if (isset($_POST['Title'])) {
        $Title = $_POST['Title'];
        $Title = str_replace('"', '\\"', $Title);
    }
    if (isset($_POST['Id'])) {
        $Id = $_POST['Id'];
    }
    if (isset($_POST['Price'])) {
        $Price = $_POST['Price'];
        $Price= str_replace('"', '\\"', $Price);
    }
    if (isset($_POST['Thumbnail'])) {
        $Thumbnail = $_POST['Thumbnail'];
        $Thumbnail = str_replace('"', '\\"', $Thumbnail);
    }
    if (isset($_POST['Content'])) {
        $Content = $_POST['Content'];
        $Content = str_replace('"', '\\"', $Content);
    }
    if (isset($_POST['Id_category'])) {
        $Id_category = $_POST['Id_category'];
       
    }

    if (!empty($Title)) {
        $Created_at = $Update_at = date('Y-m-d H:s:i');
        //Luu vao database
        if ($Id == '') {
            add_product($Title, $Thumbnail, $Price, $Id_category,$Content,$Created_at,$Update_at);
        } else {
            update_product($Id, $Title, $Thumbnail, $Price, $Id_category, $Content,$Update_at);
        }


        header('Location: index.php');
        die();
    }
}

if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    
    $product = getone_product($Id);
    if ($product[0] != null) {
        $Title = $product[0]['Title'];
        $Price = $product[0]['Price'];
        $Thumbnail = $product[0]['Thumbnail'];
        $Id_category = $product[0]['Id_category'];
        $Content = $product[0]['Content'];
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title> Cập nhật danh mục Truyện
    </title>
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
            <a class="nav-link" href="index.php">Quản Lí Truyện</a>
        </li>

    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa Truyện</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="Title">Tên Truyện</label>
                        <input type="text" name="Id" value="<?= $Id ?>" hidden="true">
                        <input required="true" type="text" class="form-control" Id="Title" Name="Title" value="<?= $Title ?>">
                    </div>
                    <div class="form-group">
                        <label for="Price">Chọn danh mục</label>
                        <select class="form-control" name="Id_category" id="Id_category">
                            <option>- - - Lựa chọn danh mục - - -</option>
<?php  //Lấy giá trị name danh mục để add vào phần chọn danh mục
$categoryList = getall_category(); // print_r($categoryList);

    foreach ($categoryList as $item) {
        echo '<option value ="' . $item['Id'] . '">' . $item['Name'] . '</option>';
    }   
                                             
?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Price">Giá bán tại cửa hàng</label>

                        <input required="true" type="number" class="form-control" Id="Price" Name="Price" value="<?= $Price ?>">
                    </div>
                    <div class="form-group">
                        <label for="Thumbnail">Hình ảnh</label>
                        <input required="true" type="text" class="form-control" Id="Thumbnail" Name="Thumbnail" value="<?= $Thumbnail ?>">
                        <img src="<?= $Thumbnail ?>" style ="max-width :200px">
                    </div>
                    <div class="form-group">
                        <label for="Content">Nội dung</label>
                        <textarea class="form-control" rows="5" name="Content" id="Content"><?= $Content ?></textarea>
                    </div>

                    <button class="btn btn-success">Lưu</button>
                </form>
            </div>


        </div>
    </div>
    </div>
</body>

</html>