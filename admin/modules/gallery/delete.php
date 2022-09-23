<?php
require_once('../../../config/dbhelp.php');
$id = $_GET['id'];
$select_gallery = "select * from gallery where id = '$id'";
$galleryList = executeResult($select_gallery,1);
unlink('uploads/'.$galleryList['thumbnail']);
$delete_gallery = "delete from gallery where id = '$id'";
execute($delete_gallery);
header('Location:../../index.php?m=gallery');
?>