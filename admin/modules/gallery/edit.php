<?php
    $id = $_GET['id'];
    $select_gallery = "select * from gallery where id ='$id' ";
    $galleryList = executeResult($select_gallery,1);

     $thumbnail = ''; 
    if(!empty($_POST)) {
      $thumbnail = $_POST['thumbnail'];

      $image = $_FILES['thumbnail']['name'];
      $image_tmp = $_FILES['thumbnail']['tmp_name'];
      // $thumbnail = time().'_'.$thumbnail;

      $update_gallery = "UPDATE `gallery` SET`thumbnail`='$thumbnail' 
      WHERE id = '$id'";
      move_uploaded_file($image_tmp,'../img/gallery/'.$image);
      execute($update_gallery);
    }
?>


<div class="container mt-3">
  <form method="POST">
    <table class="table">
        <tr>
          <th>Sửa banner</th>
        </tr>
        <tr>
          <td>Hình ảnh</td>
          <td>
              <img src='../img/gallery/<?php echo $galleryList["thumbnail"]?>' alt='<?php echo $galleryList ["thumbnail"]?>'>
              <input type="file" name="image" value="<?php echo $galleryList['thumbnail'] ?>">
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-warning">Sửa</button>
          </td>
        </tr>
    </table>
  </form>
  <a href="index.php?m=gallery">Quay lại</a>
</div>