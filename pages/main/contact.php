<?php 
    require_once("config/dbhelp.php");
    $fullname = $email = $phone_number = $content = $created_at = '';
    if(!empty($_POST)) {
        $fullname = getPost('fullname');
        $email = getPost('email');
        $phone_number = getPost('phone_number');
        $content = getPost('content');
        $created_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO contact (fullname,email,phone_number,content,created_at)
        VALUES ('$fullname','$email','$phone_number','$content','$created_at')";
        execute($sql);
        echo"<script>alert('Bạn đã gửi liên hệ thành công')</script>";
    }
?>


<!--Main content  -->
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-inline">
                        <ul>
                            <li>
                                <i class="fa-solid fa-house"></i>
                                <a href="index.php">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span>LIÊN HỆ</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="container contact">
            <div class="box-heading relative">
                <h1 class="title-head page_title">LIÊN HỆ
                </h1>
            </div>
            <div class="contact-box-info clearfix margin-bottom-30">
                <div class="row">
                    <div class="col-md-4 items">
                        <div class="icon f-left">
                            <i class="fa fa fa-map-marker"></i>
                        </div>
                        <div>
                            <?php echo $infoList['address']?>
                        </div>
                    </div>
                    <div class="col-md-2 items">
                        <div class="icon f-left">
                            <i class="fa fa fa-mobile-phone"></i>
                        </div>
                        <div>
                            <a href="callto:<?php echo $infoList['phone_number']?>"><?php echo $infoList['phone_number']?></a>
                        </div>
                    </div>
                    <div class="col-md-3 items">
                        <div class="icon f-left">
                            <i class="fa fa fa-envelope-o"></i>
                        </div>
                        <div class="info">
                            <a href="mailto:"><?php echo $infoList['email']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-contact container">
        <h2 class="text-center">
            <span>Gửi thông tin liên hệ</span>
        </h2>
            <form method="post">
                            <div class="form-group">
                                <input required type="text" name="fullname" placeholder="Họ tên*" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <input required type="email" name="email" placeholder="Email*" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input required type="text" name="phone_number" placeholder="Điện thoại*" id="phone_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Nhập nội dung*"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-style btn-primary btn-full" type="submit" value="GỬI LIÊN HỆ">
                            </div>
            </form>                   
        </section>
                    