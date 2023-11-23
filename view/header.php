<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Elitrix</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="view/css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="view/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="view/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="view/css/responsive.css" rel="stylesheet" />
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Boostrap -->
  <link rel="stylesheet" href="view/boostrap-css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

  <!-- header section strats -->
  <header class="header_section innerpage_header ">
    <div class="container-fluid ">
      <nav class="navbar navbar-expand-lg custom_nav-container row">
        <a class="navbar-brand col" href="index.php">
          <span>
            Elitrix
          </span>
        </a>
        <div class="" id="">
          <input type="text" name="" id="" class="kyw">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">

              <div class="overlay-content">
                <a href="index.php">Trang chủ</a>
                <a href="index.php?act=about">Về chúng tôi</a>
                <a href="index.php?act=shop">Danh mục</a>
                <a href="index.php?act=blog">Blog</a>
                <?php 
                  // $check = check_taikhoan($name, $password);
                  // $_SESSION['user'] = $check;
                if(!isset($_SESSION['user'])){?>
                <a href="index.php?act=login">Đăng nhập</a>
                <?php }?>
                <?php
                if(isset($_SESSION['user'])){
                  $user = $_SESSION['user'];?>
                  <a href="index.php?act=cart">Giỏ hàng</a>
                  <a href="index.php?act=out">Đăng xuất tài khoản</a>
                  <?php if (isset($user['role'])) {
                    if($user['role'] == 1)
                ?>
                    <a href="admin/index.php">Truy cập Admin</a>
                  <?php } ?>
                  <input type="text" name="" id="" class="kyw">
                <?php } ?>
              </div>
            </div>
          </div>

        </div>
      </nav>
    </div>
  </header>