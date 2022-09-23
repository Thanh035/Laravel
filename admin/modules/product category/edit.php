<?php

    $id = $_GET['id'];
    $sql_category_list = "select * from category where id ='$id' ";
    $categoryList = executeResult($sql_category_list,1);

    if(!empty($_POST)) {
        $name = $_POST['name'];
        $sql_update = "update category set name = '$name' where id = '$id'";
        execute($sql_update);
        echo "<script>alert('Sửa thành công')</script>";
  }
?>

<div class="container mt-3">
  <form method="POST">
    <table class="table">
        <tr>
          <th>Sửa danh mục sản phẩm</th>
        </tr>
        <tr>
          <td>Tên danh mục</td>
          <td>
              <input type="text" name="name" value=" <?php echo $categoryList['name'] ?> ">
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-warning">Sửa</button>
          </td>
        </tr>
    </table>
  </form>
  <a href="index.php?m=productCategory">Quay lại</a>
</div>