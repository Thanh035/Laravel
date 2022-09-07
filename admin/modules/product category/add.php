<?php
      require_once('../../../config/dbhelp.php');
     $name = '';
     if(!empty($_POST)) {
       $name = getPost('name');
       $sql_add = "insert into category (name) value ('$name')";
       execute($sql_add);
       header('Location:../../index.php?action=productCategory');
     }
?>