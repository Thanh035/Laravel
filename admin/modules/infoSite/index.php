<?php
  $sql_select = 'select * FROM infosite';
  $infoList = executeResult($sql_select,1);
?>

<style>
  input,textarea {
    width: 100%;;
  }
</style>
<div class="container mt-3">
    <h2>Quản lý thông tin</h2>
  <form method="POST"  action="modules/infosite/edit.php" enctype="multipart/form-data">
    <table class="table table-bordered">
        <tr>
          <td>Địa chỉ</td>
          <td>
              <input type="text" name="address" value=" <?php echo $infoList['address'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Số điện thoại</td>
          <td>
              <input type="text" name="phone_number" value=" <?php echo $infoList['phone_number'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td>
              <input type="email" name="email" value=" <?php echo $infoList['email'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Tên trang Web</td>
          <td>
              <input type="text" name="title" value=" <?php echo $infoList['title'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Mô tả</td>
          <td>
              <textarea rows="10" name="description" style="resize: none;">
              <?php echo $infoList['description']?>
              </textarea>
          </td>
        </tr>
        <tr>
          <td>Facebook</td>
          <td>
              <input type="text" name="facebook" value=" <?php echo $infoList['facebook'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Instagram</td>
          <td>
              <input type="text" name="instagram" value=" <?php echo $infoList['instagram'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Youtube</td>
          <td>
              <input type="text" name="youtube" value=" <?php echo $infoList['youtube'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Zalo</td>
          <td>
              <input type="text" name="zalo" value=" <?php echo $infoList['zalo'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Logo</td>
          <td>
              <img src='../img/logo/<?php echo $infoList['logo'] ?>' alt="<?php echo $infoList['logo']?>">
              <input type="file" name="logo" value="<?php echo $infoList['logo'] ?>">
          </td>
        </tr>
    </table>
    <button type="submit" class="btn btn-warning">Cập nhật</button>
  </form>
</div>