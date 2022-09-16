<style>
  input,textarea {
    width: 100%;
  }
</style>
<h2>Quản lý Banner</h2>

<div class="container mt-3">
  <form method="post"  action="modules/gallery/add.php" enctype="multipart/form-data">
    <table class="table table-bordered" ">
            <h3>Thêm Banner</h3>
        <tr>
          <td>Hình ảnh</td>
          <td>
              <input type="file" name="thumbnail">
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
        <th>Hình ảnh</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
      $select_gallery = "select * from gallery";
      $galleryList = executeResult($select_gallery);
      
      $index = 0;
      foreach($galleryList as $item)
      {
      ?>
                <tr>
                  <td><?php echo ++$index ?></td>
                  <td>
                    <img src=' ../img/banner/<?php echo $item["thumbnail"]?>' alt='<?php echo $item["thumbnail"]?>'>
                  </td>
                  <td>
                  <a href='?action=gallery&query=edit&id=<?php echo $item["id"]?>]'>
                      <button class='btn btn-warning'>Sửa</button>
                    </a>
                  </td>
                  <td>
                    <a href='modules/gallery/delete.php?id=<?php echo $item["id"]?>]'>
                      <button class='btn btn-danger'>Xóa</button>
                    </a>
                  </td>
                </tr>
      <?php } ?>   
    </tbody>
  </table>