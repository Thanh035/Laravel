
<?php 
    require_once('../../config/dbhelp.php');
    require_once('../../utils/utility.php');

    $select_infosite = "SELECT * from infosite";
    $infoList = executeResult($select_infosite,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $infoList['title']." - Thanh toán" ?></title>
    <link rel="icon" type="image/x-icon" href="../../img/logo/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .form-control{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="main-checkout" class="container">
        <div class="main_header text-center">
            <img src="../../img/logo/logo.png" alt="logo" class="logo-center" >
        </div>
        <div class="main_content">
            <div class="col col-two">
                <div class="info">
                    <strong>Thong tin nhan hang</st>
                    <div class="login-account">
                        <span>Dang nhap</span>
                    </div>
                </div>
                <form class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                    <input type="text" placeholder="Ho va ten " class="form-control">
                    <input type="text" placeholder="So dien thoai" class="form-control">
                    <input type="text" placeholder="Dia chi" class="form-control">
                    <textarea name="" id="" cols="30" rows="10" class="form-control">

                    </textarea>
                </form>
            </div>
            <div class="col col-two">

            </div>
        </div>
    </div>
    <!-- <aside class="sidebar">
        <span>
            <b>Don hang(1 san pham)</b>
        </span>
        <div class="product">
            <ul>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    Primitive name
                </li>
                <li>
                    Price
                </li>
            </ul>
            <div class="total-line">
                <span>Tong cong: </span>
            </div>
            <div class="order-summary">
                <a href="">Quay ve gio hang</a>
                <button>Dat hang</button>
            </div>
        </div>
    </aside> -->
</body>
</html>