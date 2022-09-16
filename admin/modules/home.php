<?php 
    require_once('../config/dbhelp.php');
    if( isset($_GET['query']) ) {
        $query = $_GET['query'];
    }
    else {
        $query = '';
    }

    if( isset($_GET['action']) ) {
        $action = $_GET['action'];
    }
    else {
        $action = '';
    }

    if($action=='productCategory' && $query=='' ) {
        include("modules/product category/index.php");
    }
    else if($action=='productCategory' && $query=='edit') {
        include("modules/product category/edit.php");
    }
    else if($action=='productDetails' && $query=='') {
        include("modules/product details/index.php");
    }
    else if($action=='productDetails' && $query=='edit') {
        include("modules/product details/edit.php");
    }
    else if($action=='gallery' && $query=='') {
        include("modules/gallery/index.php");
    }
    else if($action=='gallery' && $query=='edit') {
        include("modules/gallery/edit.php");
    }
    else if($action=='order' && $query=='') {
        include("modules/order/index.php");
    }
    else if($action=='order' && $query=='edit') {
        include("modules/order/edit.php");
    }
    else if($action=='users') {
        include("modules/users/index.php");
    }
    else if($action=='contact') {
        include("modules/contact/index.php");
    }
    else if($action=='infoSite' && $query=='' ) {
        include("modules/infoSite/index.php");
    }
    else if($action=='infoSite' && $query=='edit' ) {
        include("modules/infoSite/edit.php");
    }
    else {
        include("modules/welcome.php");
    }
?>