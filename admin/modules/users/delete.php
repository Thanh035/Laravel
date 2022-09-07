<?php
require_once('../../../config/dbhelp.php');
$id = $_GET['id'];
$delete_users = "delete from users where id = '$id'";
execute($delete_users);
header('Location:../../index.php?action=users&query=add');
?>
