<?php
      require_once('../../../config/dbhelp.php');
      if(!empty($_POST)) {
        $address = getPost('address');
        $phone_number = getPost('phone_number');
        $email = getPost('email');
        $title = getPost('title');
        $description = getPost('description');
        $facebook = getPost('facebook');
        $instagram = getPost('instagram');
        $youtube = getPost('youtube');
        $zalo = getPost('zalo');

        $logo = $_FILES['logo']['name'];
        $logo_tmp = $_FILES['logo']['tmp_name'];
        $logo = time().'_'.$logo;

        $sql_update = "update infosite 
        SET address='$address',phone_number='$phone_number',email='$email',title='$title',description='$description',
        facebook='$facebook',instagram='$instagram',youtube='$youtube',zalo='$zalo',logo='$logo'";
        move_uploaded_file($logo_tmp,'../../../img/logo/'.$logo);
        execute($sql_update);
        header('Location:../../index.php?m=infoSite');       
  }
?>