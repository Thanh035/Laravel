<?php
$email = $password = '';

if (!empty($_POST)) {
	if (isset($_POST['email']) && isset($_POST['password'])) {
		 //Save user into database
        $email = getPOST('email');
        $password = getPwdSecurity(getPOST('password')); 

        $select_users = "select * from users where email = '$email' AND password = '$password' ";
        $users = executeResult($select_users,1);
        if($users != null ) {
            //success
            session_start();
            $_SESSION['users'] = $users['id'];
            header('Location: index.php');
        }
        else {
            //failed
            echo "<script>alert('Tài khoản không đúng.Vui lòng đăng nhập lại')</script>";
        }
	}
}
?>
<title>Đăng nhập tài khoản</title>
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
                                <span>ĐĂNG NHẬP TÀI KHOẢN</span>
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
                    <span>Đăng nhập tài khoản</span>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input required type="text" name="email" placeholder="Email*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input required type="password" name="password" placeholder="Paswword*" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-style btn-primary btn-full" type="submit" value="ĐĂNG NHẬP">
                    </div>
                </form>
                <div class="col-xs-12">
                    <p>
                        Bạn chưa có tài khoản đăng ký
                        <a href="index.php?page=register" class="btn-link-style btn-register">Tại đây</a>
                    </p>
                </div>
            </div>
        </div>
