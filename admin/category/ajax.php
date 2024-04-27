<?php
include "../../db/connect.php";
include "../model/category.php";
if(!empty($_POST)){
    if(isset($_POST['action'])) {
        $action = $_POST['action'];

        switch($action) {
            case 'delete':
                if(isset($_POST['Id'])){
                    $Id  = $_POST['Id'];
                    delete_category($Id);
                }
                break;
        }
    }

}