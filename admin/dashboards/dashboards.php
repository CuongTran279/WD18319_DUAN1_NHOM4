<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid main-page">

        <div class="app-main">
            <!-- <nav class="sidebar bg-primary">
                <ul>
                    <li>
                        <a href="index.html"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                    </li>
                    <li>
                        <a href="order.html"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn hàng</a>
                    </li>
                    <li>
                        <a href="caterogies.html"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh muc</a>
                    </li>
                    <li>
                        <a href="products.html"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a>
                    </li>
                    <li>
                        <a href="user.html"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                    </li>
                </ul>
            </nav> -->
            <div class="main-content">
                <h3 class="title-page">
                    Thống kê
                </h3>
                <section class="statistics row">
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=products">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng sản phẩm
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($slsp)){
                                        extract($slsp);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$sp?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=user">
                            <div class="card mb-3 widget-chart">

                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng thành viên
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($sltk)){
                                        extract($sltk);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$tk?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=caterogies">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng doanh mục
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($sldm)){
                                        extract($sldm);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$dm?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=order">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng đơn hàng
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($sldh)){
                                        extract($sldh);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$dh?></span>
                            </div>
                        </a>
                    </div>
                </section>
                <section class="row">
                    <div class="col-sm-12 col-md-6 col xl-6">
                        <div class="card chart">
                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" placeholder="Username"
                                        aria-label="Username">
                                    <span class="input-group-text">Đến ngày</span>
                                    <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                                    <button type="button" class="btn btn-primary">Xem</button>
                                </div>
                            </form>
                            <p>Tổng doanh thu: <span>100.000.000 VND</span></p>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Doanh thu</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>GIA001</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>GIA002</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>GIA003</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>GIA004</td>
                                        <td>100.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="card chart">
                            <h4>Đơn hàng mới</h4>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>Mã đơn hàng</th>
                                    <th>Trạng thái</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GIA001</td>
                                        <td>Chờ duyệt</td>
                                    </tr>
                                    <tr>
                                        <td>GIA002</td>
                                        <td>Đã duyệt</td>
                                    </tr>
                                    <tr>
                                        <td>GIA003</td>
                                        <td>Chờ TT</td>
                                    </tr>
                                    <tr>
                                        <td>GIA004</td>
                                        <td>Đã duyệt</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="card chart">
                            <h4>Khách hàng mới</h4>
                            <table class="revenue table table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Username</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>giangcoder1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>giangcoder2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>giangcoder3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>