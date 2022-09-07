<style>
    td,th{
        text-align: center;
    }
    h2{
        margin-bottom: 20px;
        color: blue;
        font-weight: bold;
    }
    table{
        max-width: 100%;
        background-color: transparent;
    }
</style>

<?php 
    $select_users = "select * from users";
    $usersList = executeResult($select_users);
?>
  <h2>Quản lý người dùng</h2>           
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>No</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Ngày tạo</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $index = 0;
      foreach($usersList as $item)
        echo "<tr>
        <td>".++$index."</td>
        <td>".$item['fullname']."</td>
        <td>".$item['email']."</td>
        <td>".$item['created_at']."</td>
        <td>
        <a href='modules/users/delete.php?id=".$item["id"]." '>
            <button class='btn btn-danger'>Xóa</button>
          </a>
        </td>
      </tr> ";
        ?>
    </tbody>
  </table>