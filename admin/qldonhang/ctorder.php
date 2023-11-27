
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
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
                    Chi tiết đơn hàng
                </h3>
                <?php
                    // if((is_array($tk))){
                    //     extract($tk);
                    // }
                ?>
                <form class="addPro" action="index.php?act=updtDh" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">ID đơn hàng:</label>
                        <input type="text" class="form-control" name="id" id="name" readonly placeholder="Nhập tên sản phẩm" value="<?=$cart[0]['id']?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Tên người dùng:</label>
                        <input type="text" class="form-control" name="name" id="name" readonly placeholder="Nhập tên sản phẩm" value="<?=$cart[0]['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input class="form-control" name="description"  readonly value="<?=$cart[0]['email']?>"  ></input>
                    </div>
                    <div class="form-group">
                        <label>Phone :</label>
                        <input class="form-control" name="description"  readonly value="<?=$cart[0]['tel']?>"  ></input>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ :</label>
                        <input class="form-control" name="description"  readonly value="<?=$cart[0]['address']?>"  ></input>
                    </div>
                    <?php
                        $Pt = "";
                        if($cart[0]['pttt'] == 1){
                          $Pt = "Thanh toán khi nhận hàng";
                        }elseif($cart[0]['pttt'] == 2){
                          $Pt = "Chuyển khoản";
                        }elseif($cart[0]['pttt'] == 3){
                          $Pt = "Ghi nợ";
                        }
                    ?>
                    <div class="form-group">
                        <label>Phương thức thanh toán :</label>
                        <input class="form-control" name="description"  readonly value="<?=$Pt?>"  ></input>
                    </div>
                    <label>Trạng thái đơn hàng hiện tại: -  <?php
                        $tt = "";
                        if($cart[0]['trangthai'] == 0){
                            $tt = "Chờ xác nhận đơn hàng";
                        }
                        elseif($cart[0]['trangthai'] == 1){
                            $tt = "Đã xác nhận đơn hàng";
                        }
                        elseif($cart[0]['trangthai'] == 2){
                            $tt = "Đang vận chuyển đơn hàng";
                        }
                        elseif($cart[0]['trangthai'] == 3){
                            $tt = "Giao thành công đơn hàng";
                        }
                        echo $tt;
                    ?> </label><br>
                    <select class="form-select" name="trangthai" aria-label="Default select example">
                        <option value="" selected>Chọn trạng thái</option>
                        <option value="0">Chờ xác nhận</option>
                        <option value="1">Đã xác nhận</option>
                        <option value="2">Đang vận chuyển</option>
                        <option value="3">Giao thành công</option>
                    </select><br>
                    <?php
                    ?>
                    <table class="table text-center justify-center">
                            <thead>
                                <tr>
                                    <th scope="col">ẢNh</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($cart as $item){
                                    extract($item);
                                        $tt = 0;
                                        $imgpath = "../upload/" ;
                                        $hinh = $imgpath . $img;
                                        echo '<tr>
                                          <td><img src="'.$hinh.'" alt="" style="width: 60px;height: 70px;"></td>
                                          <td class="text-uppercase">'.$product_name.'</td>
                                        </a><td class="text-danger ">'.$price.'</td>
                                        <td><input type="number" name="" id="" value="'.$quantity.'" style="font-size: 20px;text-align:center;width:100px"></td>
                                        <td class="text-danger ">'.$price * $quantity.'</td>
                                        </tr>';
                                        $tt += $price * $quantity;
                                    }
                                 ?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Tổng tiền</th>
                                    <th><?=$total?></th>
                                </tr>
                                <?php ?>
                            </tbody>
                        </table>
                    <!-- <div class="form-group">
                        <label for="">Vai trò hiện tại: <?php if($role == 1){
                            echo 'Admin';
                        }elseif($role == 0){
                            echo 'Người dùng';
                        }?></label><br>
                        <select name="role" id="">
                            <option value="" selected>Chọn vai trò</option>
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
                        </select>
                        
                    </div> -->
                    <div class="form-group">
                        <input type="submit" value="Sửa đơn hàng" name="updtDh" class="btn btn-primary">
                        <a href="index.php?act=order"><input type="button" value="Danh sách đơn hàng" name="" class="btn btn-dark"></a>
                    </div>
                </form>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>

            <script>
                new DataTable('#example');
            </script>
</body>

</html>