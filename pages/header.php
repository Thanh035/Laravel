
    <header class="fixed">
        <div class="top-header container">
            <div class="header-main">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php" class="logo-wrapper">
                                <img src="img/logo/<?php echo $infoList['logo']?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="in-col-md-9">
                            <div class="pull-left">
                                
                            </div>
                            <!-- <div class="header-block-item">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="info">
                                    <strong>Địa chỉ</strong>
                                    <p>
                                        <a href="index.php?address">Xem bản đồ</a>
                                    </p>
                                </div>
                            </div> -->
                            <div class="header-block-item">
                                <div class="icon">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <div class="info">
                                    <strong>Hỗ trợ</strong>
                                    <p>
                                        <a href="callto:<?php echo $infoList['phone_number']?>"><?php echo $infoList['phone_number']?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="header-block-item">
                                <div class="icon">
                                    <i class="fa-solid fa-user-astronaut"></i>
                                </div>
                                <div class="info fix-width-text">
                                    <strong>Tài khoản</strong>
                                    <p>
                                        <a href="index.php?page=login">Đăng nhập</a>/<a href="index.php?page=register">Đăng ký</a>
                                    </p>
                                </div>
                            </div>
                            <div class="header-block-item mini-cart">
                                <a href="index.php?page=cart" class="cart-label header-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div class="cart-info">
                                        <span style="line-height: 1;color: #555;display: block;font-weight: 600;font-size: 16px;">Giỏ hàng</span> (
                                        <span class="cartCount count_item_pr">
<?php 
    if(isset($_COOKIE['cart'])) {
        $cart[] = $_COOKIE['cart']; 
        echo count($cart);
    }
    else {
        echo 0;
    }
?>                                          
                                        </span>) Sản phẩm
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="static">
            <nav>
                <div class="bottom-header container">
                    <ul class="nav flex-jus-center">
                        <li class="nav-item nav-text-before">
                            <a href="index.php">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=category&id=1">SẢN PHẨM</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=news">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=contact">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>