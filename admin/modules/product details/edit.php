<?php
    $id = $_GET['id'];
    $select_product = "select * from product where id ='$id' ";
    $productList = executeResult($select_product,1);

    $product_name = $price = $amount = $image = $description = $status = $category_id = ''; 
    if(!empty($_POST)) {
      $product_name = $_POST['product_name'];
      $price = $_POST['price'];
      $amount = $_POST['amount'];
      $description = $_POST['description'];
      $status = $_POST['status'];
      $category_id = $_POST['category_id'];

      $image = $_FILES['thumbnail']['name'];
      $image_tmp = $_FILES['thumbnail']['tmp_name'];
      // $thumbnail = time().'_'.$thumbnail;

      $update_product = "UPDATE `product` SET `id`='$id',`product_name`='$product_name',`price`='$price',`amount`='$amount',
      `thumbnail`='$thumbnail',`description`='$description',`status`='$status',`category_id`='$category_id' 
      WHERE id = '$id'";
      move_uploaded_file($image_tmp,'../img/product/'.$image);
      execute($update_product);
    }
?>


<div class="container mt-3">
  <form method="POST">
    <table class="table">
        <tr>
          <th>Sửa sản phẩm</th>
        </tr>
        <tr>
          <td>Tên sản phẩm</td>
          <td>
              <input type="text" name="product_name" value=" <?php echo $productList['product_name'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Giá sản phẩm</td>
          <td>
              <input type="text" name="price" value=" <?php echo $productList['price'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Số lượng</td>
          <td>
              <input type="text" name="amount" value=" <?php echo $productList['amount'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Hình ảnh</td>
          <td>
              <img src='../img/product/<?php echo $productList["thumbnail"]?>' alt='<?php echo $productList ["thumbnail"]?>'>
              <input type="file" name="image" value="<?php echo $productList['thumbnail'] ?>">
          </td>
        </tr>
        <tr>
        <tr>
          <td>Tóm tắt</td>
          <td>
              <textarea rows="5" name="description" style="resize: none;">
                <?php echo $productList['description']?>
              </textarea>
          </td>
        </tr>
        <tr>
          <td>Danh mục</td>
          <td>
          <select name="category_id">
          <?php
            $select_category = "select * from category";
            $categoryList = executeResult($select_category); 
            foreach($categoryList as $item) {
          ?>   
              <?php if($item['id'] == $productList['category_id']) {
                      echo '<option value="'.$item['id'].'" selected>'.$item['name'].'</option>';
                    }
                    else {
                      echo '<option value="'.$item['id'].'" >'.$item['name'].'</option>';
                    }?>
            <?php }?>
          </select>
          </td>
        </tr>
        <tr>
          <td>Tình trạng</td>
          <td>
              <select name="status">
                <?php 
                  if($productList['status'] == 1) {
                ?>
                <option value="1" selected>Kích hoạt</option>
                <option value="0">Ẩn</option>
                <?php } else {?>
                  <option value="1">Kích hoạt</option>
                  <option value="0" selected>Ẩn</option>
                <?php }?>
              </select>
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-warning">Sửa</button>
          </td>
        </tr>
    </table>
  </form>
  <a href="index.php?action=productDetails">Quay lại</a>
</div>