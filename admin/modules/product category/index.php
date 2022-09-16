
<style>
</style>
<h2>Quản lý danh mục sản phẩm</h2>

<div class="container mt-3">
  <form method="post" action="modules/product category/add.php">
    <table class="table">
            <h3>Thêm danh mục</h3>
        <tr>
          <td>Tên danh mục</td>
          <td>
              <input type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-success">Thêm</button>
          </td>
        </tr>
    </table>
  </form>
</div>

<?php 
    $sql_category_list = "select * from category";
    $categoryList = executeResult($sql_category_list);
?>
<h3>Liệt kê danh mục</h3>           
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>No</th>
        <th>Tên danh mục</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $index = 0;
      foreach($categoryList as $item)
        echo "<tr>
        <td>".++$index."</td>
        <td>".$item['name']."</td>
        <td>
        <a href='?action=productCategory&query=edit&id=".$item["id"]."'>
            <button class='btn btn-warning'>Sửa</button>
          </a>
        </td>
        <td>
          <a href='modules/product category/delete.php?id=".$item["id"]." '>
            <button class='btn btn-danger'>Xóa</button>
          </a>
        </td>
        ";?>
    </tbody>
  </table>