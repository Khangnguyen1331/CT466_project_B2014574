<?php

    function getall_category(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $kq = $stmt->fetchAll();
        return $kq;
    }

    function delete_category($Id){
        $conn = connectdb();
        $sql = "DELETE FROM category where Id = ".$Id;
        // use exec because no results are returned
        $conn->exec($sql);
    }

    function getone_category($Id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM category  where Id=".$Id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function update_category($Id, $Name, $Update_at, $Create_at){
        $conn = connectdb();
        $sql = 'Update category set Name ="'.$Name.'", Update_at = "'.$Update_at.'", Create_at = "'.$Create_at.'"  where Id = '.$Id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
    }

    function add_category($Name, $Create_at, $Update_at){
        $conn = connectdb(); 
        $sql = "INSERT INTO category (Name, Create_at, Update_at) values ('".$Name."','".$Create_at."','".$Update_at."')";
        // use exec because no results are returned
        $conn->exec($sql);
    }
   
   
?>