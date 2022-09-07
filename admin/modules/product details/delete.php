<?php
require_once('../../../config/dbhelp.php');
$id = $_GET['id'];
$select_product = "select * from product where id = '$id'";
$productList = executeResult($select_product,1);
unlink('uploads/'.$productList['thumbnail']);
$delete_product = "delete from product where id = '$id'";
execute($delete_product);
header('Location:../../index.php?action=productDetails');
?>