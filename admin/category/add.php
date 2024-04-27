<?php
include "../../db/connect.php";
include("../model/category.php");
$Id = $Name ='';
if (!empty($_POST)) {
    if(isset($_POST['Name'])) {
        $Name = $_POST['Name'];
        $Name = str_replace('"', '\\"', $Name);
        
    }
    if(isset($_GET['Id'])) {
        $Id = $_GET['Id'];
        echo $Id;
    }

    if(!empty($Name)) {
        $Create_at = $Update_at = date('Y-m-d H:s:i');
        //Luu vao database
        if($Id == '') {
            add_category($Name, $Create_at, $Update_at);
        }else{
            update_category($Id, $Name, $Update_at, $Create_at);
        }


        header('Location: index.php');
        die();
    }
    

}



?>
<!DOCTYPE html>
<html>

<head>
    <title> Cập nhật danh Truyện
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
            <a class="nav-link " href="index.php">Quản lí Danh mục Truyện</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản Lí Truyện</a>
        </li>

    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa danh mục Truyện</h2>
            </div>
            <div class="panel-body">
                <form method = "post">
                    <div class="form-group">
                        <label for="Id" hidden="true">ID</label>
                        <input type="text" name="Id" value="<?=$Id?>" hidden = "true">
                        <label for="Name">Tên danh mục</label>
                        <input required="true" type="text" class="form-control" Id="Name" Name="Name" value="<?php 
                        $item ="";
                        if(isset($_GET['Id'])){
                            $Id = $_GET['Id'];
                            $item = getone_category($Id);
                        }
                        foreach($item as $item){echo $item['Name'];} 
                        
                        ?>">
                    </div>

                    <button class="btn btn-success">Lưu</button>
                </form>
            </div>


        </div>
    </div>
    </div>
</body>

</html>