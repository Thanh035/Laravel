<?php
require_once('../../../config/dbhelp.php');
$id = $_GET['id'];
$sql_delete = "delete from category where id = '$id'";
execute($sql_delete);
header('Location:../../index.php?action=productCategory');
?>