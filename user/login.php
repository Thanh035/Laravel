<?php
$email = $password = '';

if (!empty($_POST)) {
	$password = getPOST('pwd');
	$email    = getPOST('email');

	if ($password != '' && $email != '') {
		//save user into database
        $password = getMD5Security(getPost('pwd'));

		$sql  = "select * from users where email = '$email' and password = '$password'";
		$data = executeResult($sql);
		if ($data != null && count($data) > 0) {
			//Cach 1: basic
			// setcookie('login', 'true', time()+7*24*60*60, '/');
			//Cach 2: Nang cao
			$token = getPwdSecurity(time().$data[0]['email']);
			setcookie('token', $token, time()+7*24*60*60, '/');

			$sql = "update users set token = '$token' where id = " .$data[0]['id'];
			execute($sql);

			//login thanh cong
            echo"<script>alert('Đăng kí thành công')</script>";
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
