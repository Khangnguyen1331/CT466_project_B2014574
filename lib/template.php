<?php

function get_header($version = ''){
    if(!empty($version)){
        $path = "inc/header-{$version}.php";
    }else{
        $path = 'inc/header.php';
    }
    if(file_exists($path)){
        require $path;
    }else{
        echo "Không tồn tại file này";
    }
}

function get_footer(){
    $path = 'inc/footer.php';
    if(file_exists($path)){
        require $path;
    }else{
        echo "Không tồn tại file này";
    }
}

?>