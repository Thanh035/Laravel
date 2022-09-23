<style>
  input,textarea {
    width: 100%;
  }
</style>
<h2>Quản lý sản phẩm</h2>

<div class="container mt-3">
  <form method="post"  m="modules/product details/add.php" enctype="multipart/form-data">
    <table class="table table-bordered" ">
            <h3>Thêm sản phẩm</h3>
        <tr>
          <td>Tên sản phẩm</td>
          <td>
              <input type="text" name="product_name">
          </td>
        </tr>
        <tr>
          <td>Giá sản phẩm</td>
          <td>
              <input type="text" name="price">
          </td>
        </tr>
        <tr>
          <td>Số lượng</td>
          <td>
              <input type="number" name="amount">
          </td>
        </tr>
        <tr>
          <td>Hình ảnh</td>
          <td>
              <input type="file" name="thumbnail">
          </td>
        </tr>
        <tr>
          <td>Tóm tắt</td>
          <td>
              <textarea rows="8" name="description" style="resize: none;"></textarea>
          </td>
        </tr>
        <tr>
          <?php
            $select_category = "select * from category";
            $categoryList = executeResult($select_category); 
          ?>
          <td>Danh mục</td>
          <td>
            <select name="category_id">
              <?php  
                foreach($categoryList as $items) {
                    echo "<option value=".$items['id'].">".$items['name']."</option>"; 
                }
              ?>
          </select>
          </td>
        </tr>
        <tr>
          <td>Tình trạng</td>
          <td>
              <select name="status">
                <option value="1">Kích hoạt</option>
                <option value="0">Ẩn</option>
              </select>
          </td>
        </tr>
    </table>
      <button type="submit" class="btn btn-success form-control">Thêm</button>
  </form>
</div>

<h3>Liệt kê sản phẩm</h3>           
  <table class="table table-striped" >
    <thead>
      <tr>
        <th>No</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Tóm tắt</th>
        <th>Tình trạng</th>
        <th>Danh mục</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
      $select_product = "select category.name as category_name,product.* 
      FROM category INNER JOIN product
      on category.id = product.category_id";
      $productList = executeResult($select_product);
      
      $index = 0;
      foreach($productList as $item)
      {
      ?>
                <tr>
                  <td><?php echo ++$index ?></td>
                  <td><?php echo $item['product_name']?></td>
                  <td><?php echo $item['price']?></td>
                  <td><?php echo $item['amount']?></td>
                  <td>
                    <img src=' ../img/product/<?php echo $item["thumbnail"]?>' alt='<?php echo $item["thumbnail"]?>'>
                  </td>
                  <td><?php echo $item['description']?></td>
                  <td>
                    <?php if($item['status'] == 1) {
                      echo 'Kích hoat';
                    }
                    else {
                      echo 'Ẩn';
                    }?>
                  </td>
                  <td>
                    <?php echo $item['category_name']?>
                  </td>
                  <td>
                  <a href='?m=productDetails&action=edit&id=<?php echo $item["id"]?>]'>
                      <button class='btn btn-warning'>Sửa</button>
                    </a>
                  </td>
                  <td>
                    <a href='modules/product details/delete.php?id=<?php echo $item["id"]?>]'>
                      <button class='btn btn-danger'>Xóa</button>
                    </a>
                  </td>
                </tr>
      <?php } ?>   
    </tbody>
  </table>