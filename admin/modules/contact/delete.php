<?php
require_once('../../../config/dbhelp.php');
$id = $_GET['id'];
$sql_delete = "delete from contact where id = '$id'";
execute($sql_delete);
header('Location:../../index.php?action=contact&query=add');
?>
