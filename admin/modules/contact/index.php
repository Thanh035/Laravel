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
    $select_contact = "select * from contact";
    $contactList = executeResult($select_contact);
?>
  <h2>Quản lý phản hồi</h2>           
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>No</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Nội dung</th>
        <th>Ngày tạo</th>
        <th>Choice</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $index = 0;
      foreach($contactList as $item)
        echo "<tr>
        <td>".++$index."</td>
        <td>".$item['fullname']."</td>
        <td>".$item['email']."</td>
        <td>".$item['phone_number']."</td>
        <td>".$item['content']."
        </td>
        <td>".$item['created_at']."</td>
        <td>
        <a href='modules/contact/delete.php?id=".$item["id"]." '>
            <button class='btn btn-danger'>Xóa</button>
          </a>
        </td>
      </tr> ";
        ?>
    </tbody>
  </table>