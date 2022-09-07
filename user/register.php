<?php
$fullname = $email = $password = $confirmPwd = $created_at =  '';
if(!empty($_POST)) {
    $fullname = getPOST('fullname');
    $email = getPOST('email');
    $password = getPwdSecurity(getPOST('password'));
    $created_at = date('Y-m-d H:i:s');

    // setcookie('fullname',$fullname,);
    
    $select_user = "select * from users where email = '$email'";
    if(executeResult($select_user) != null)
    {   
        echo"<script>alert('Email đã tồn tại')</script>";
    } 
    else {
        $insert_user= "INSERT INTO users (fullname,email,password,created_at)
        VALUES ('$fullname','$email','$password','$created_at')";
        execute($insert_user);  
        echo"<script>alert('Đăng kí thành công')</script>";
    }
}
?>
<!-- Content  -->
        <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-inline">
                        <ul>
                            <li>
                                <i class="fa-solid fa-house"></i>
                                <a href="">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span>ĐĂNG KÝ TÀI KHOẢN</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="row">
            <div class="page text-center ">
                <div class="title-head">
                    <span>Đăng ký tài khoản</span>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input required type="text" name="fullname" placeholder="Họ tên*" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="phone_number" placeholder="Số điện thoại*" id="phone_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="email" name="email" placeholder="Email*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="password" name="password" placeholder="Mật khẩu*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-style btn-primary btn-full" type="submit" value="ĐĂNG KÝ">
                    </div>
                </form>
                <div class="col-xs-12">
                    <p>
                        Bạn đã có tài khoản hãy đăng nhập
                        <a href="index.php?page=login" class="btn-link-style btn-register">Tại đây</a>
                    </p>
                </div>
            </div>
        </div>