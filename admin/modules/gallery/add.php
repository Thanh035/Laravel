<?php
    require_once('../../../config/dbhelp.php');
     $thumbnail = ''; 
    if(!empty($_POST)) {
      $thumbnail = $_POST['thumbnail'];

      $thumbnail = $_FILES['thumbnail']['name'];
      $thumbnail_tmp = $_FILES['thumbnail']['tmp_name'];
      $thumbnail = time().'_'.$thumbnail;

      $sql_add = "insert into gallery (thumbnail) values ('$thumbnail')";
      move_uploaded_file($thumbnail_tmp,'../../../img/banner/'.$thumbnail);
      execute($sql_add);
      header('Location:../../index.php?m=gallery');
    }
?>