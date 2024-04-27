<?php 
require_once('./db/connect.php');
    $username = $password = '';
    if(!empty($_POST)){
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $username = str_replace('"', '\\"',$username);
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
            $password = str_replace('"', '\\"',$password);
        }
        
        
        $conn = connectdb();
        $stmt = $conn->prepare("select * from user where username='".$username."' and password='".$password."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        
        $role= $id = $username ='';
        if(isset($kq[0]['role'])){
            $role = $kq[0]['role'];
            $_SESSION['role'] = $role;
            $id_user = $kq[0]['id'];
            if(isset($id_user)) $_SESSION['id_user'] = $id_user;
            $username = $kq[0]['username'];
            if(isset($id_user)) $_SESSION['username'] = $username;
            if($role == '0'){
                header('location: ./index.php?act=home');
            }else if($role == '1'){
                header('location: ./admin/index.php?act=category');
            }
        }
        
        
        else{
             $txt_error ="Username hoặc Password không tồn tại";
        }
    }
?>
<div id="wrapper">
    <div class="row justify-content-around">
        <form action="" method="post" class="col-md-4 bg-danger-subtle p-3 my-3 mt-lg-5">
            <h1 class="text-center text-uppercase h3 py-3">Đăng nhập tài khoản</h1>
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <?php
    if(isset($txt_error)&&($txt_error != "")){
        echo $txt_error;
    }
?>
            <div class="form-group form-check form-check-inline">
                <input type="checkbox" class="form-check-input" name="remember-me" id="remember-me">
                <label for="remember-me" class="form-check-label me-2">Remember me</label>
                <a class="icon-link icon-link-hover link-danger link-underline-danger link-underline-opacity-25 form-check-inline" href="./index.php?act=register">
                    Đăng ký tại đây
                    <svg class="bi" aria-hidden="true">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto my-3">
                <a href="">
                <button class="btn btn-outline-secondary" type="submit">Đăng nhập</button></a>
            </div>
        </form>
    </div>
</div>