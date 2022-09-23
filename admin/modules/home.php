<?php 
    require_once('../config/dbhelp.php');
    if( isset($_GET['action']) ) {
        $action = $_GET['action'];
    }
    else {
        $action = '';
    }

    if( isset($_GET['m']) ) {
        $m = $_GET['m'];
    }
    else {
        $m = '';
    }

    if($m=='productCategory' && $action=='' ) {
        include("modules/product category/index.php");
    }
    else if($m=='productCategory' && $action=='edit') {
        include("modules/product category/edit.php");
    }
    else if($m=='productDetails' && $action=='') {
        include("modules/product details/index.php");
    }
    else if($m=='productDetails' && $action=='edit') {
        include("modules/product details/edit.php");
    }
    else if($m=='gallery' && $action=='') {
        include("modules/gallery/index.php");
    }
    else if($m=='gallery' && $action=='edit') {
        include("modules/gallery/edit.php");
    }
    else if($m=='order' && $action=='') {
        include("modules/order/index.php");
    }
    else if($m=='order' && $action=='edit') {
        include("modules/order/edit.php");
    }
    else if($m=='users') {
        include("modules/users/index.php");
    }
    else if($m=='contact') {
        include("modules/contact/index.php");
    }
    else if($m=='infoSite' && $action=='' ) {
        include("modules/infoSite/index.php");
    }
    else if($m=='infoSite' && $action=='edit' ) {
        include("modules/infoSite/edit.php");
    }
    else {
        include("modules/welcome.php");
    }
?>