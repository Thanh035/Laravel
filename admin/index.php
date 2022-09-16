<?php
     session_start();
    if(isset($_POST['exit'])) {
      unset($_SESSION['admin']);
      header('location: login.php');
    }
    
    if(!isset($_SESSION["admin"])){
      header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- Library  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="container-scroller">

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=".." target="_blank"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"> 
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-admin-rolls-glyph-black-icon-png-image_691507.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <a class="dropdown-item">
                <form method="post">
                  <i class="ti-power-off text-primary"></i>
                  <input name="exit" type="submit"  value="Thoát">
                </form>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=infoSite">
              <span class="menu-title">Quản lý thông tin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=productCategory">
              <span class="menu-title">Quản lý danh mục sản phẩm</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=productDetails">
              <span class="menu-title">Quản lý sản phẩm</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=gallery">
              <span class="menu-title">Quản lý ảnh bìa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=users">
              <span class="menu-title">Quản lý người dùng</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=contact">
              <span class="menu-title">Quản lý phản hồi</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->

      <div class="main-panel">
        <!-- content-wrapper begin -->
        <?php 
          include("./modules/home.php");
        ?>
        <!-- content-wrapper ends -->
      </div>
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page -->

</body>

</html>

