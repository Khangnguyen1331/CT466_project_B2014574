<?php

    function getall_product(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT product.Id, product.Title, product.Price, product.Thumbnail, product.Id_category, product.Created_at, product.Update_at, category.Name as category_Name FROM product left join category on category.Id = product.Id_category");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }
    
    function getdm_product($Id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * from product where product.Id_category =".$Id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }
    
    function get10_product(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT product.Id, product.Title, product.Price, product.Thumbnail, product.Id_category, product.Created_at, product.Update_at, category.Name as category_Name from product left join category on category.Id = product.Id_category limit 0, 10;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function delete_product($Id){
        $conn = connectdb();
        $sql = "DELETE FROM product where Id = ".$Id;
        // use exec because no results are returned
        $conn->exec($sql);
    }

    function getone_product($Id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT product.Id, product.Content, product.Title, product.Price, product.Thumbnail, product.Id_category, product.Created_at, product.Update_at, category.Name FROM product left join category on category.Id = product.Id_category where product.Id=".$Id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function update_product($Id, $Title, $Thumbnail, $Price, $Id_category, $Content,$Update_at){
        $conn = connectdb();
        $sql = 'Update product set Title ="'.$Title.'", Update_at = "'.$Update_at.'", Thumbnail = "'.$Thumbnail.'", Price = "'.$Price.'", Content = "'.$Content.'", Id_category = "'.$Id_category.'" where Id = '.$Id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
    }

    function add_product($Title, $Thumbnail, $Price, $Id_category,$Content,$Created_at,$Update_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO product (Title, Price, Thumbnail, Id_category, Content, Created_at, Update_at) values ('".$Title."','".$Price."','".$Thumbnail."','".$Id_category."','".$Content."','".$Created_at."','".$Update_at."')";
        // use exec because no results are returned
        $conn->exec($sql);
    }
   
   
?>