<?php
    require_once('../../../config/dbhelp.php');
    $product_name = $price = $amount = $thumbnail = $description = $status = $category_id = ''; 
    if(!empty($_POST)) {
      $product_name = $_POST['product_name'];
      $price = $_POST['price'];
      $amount = $_POST['amount'];
      $description = $_POST['description'];
      $status = $_POST['status'];
      $category_id = $_POST['category_id'];

      $thumbnail = $_FILES['thumbnail']['name'];
      $thumbnail_tmp = $_FILES['thumbnail']['tmp_name'];
      $thumbnail = time().'_'.$thumbnail;

      $sql_add = "insert into product (product_name,price,amount,thumbnail,description,status,category_id) 
      values ('$product_name','$price','$amount','$thumbnail','$description','$status','$category_id')";
      move_uploaded_file($thumbnail_tmp,'../../..//img/product/'.$thumbnail);
      execute($sql_add);
      header('Location:../../index.php?action=productDetails');
    }
?>