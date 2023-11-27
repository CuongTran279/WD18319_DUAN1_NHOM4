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
                    Sửa User
                </h3>
                <?php
                    if((is_array($tk))){
                        extract($tk);
                    }
                ?>
                <form class="addPro" action="index.php?act=updtTk" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Id</label>
                        <input type="text" class="form-control" name="id" id="text" readonly value="<?php if(isset($id) && ($id>0)) echo $id?>" >
                    </div>
                    <div class="form-group">
                        <label for="name">Tên người dùng:</label>
                        <input type="text" class="form-control" name="name" id="name" readonly placeholder="Nhập tên sản phẩm" value="<?=$name?>">
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <textarea class="form-control" name="description" rows="3" readonly placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;" ><?=$email?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone :</label>
                        <textarea class="form-control" name="description" rows="3" readonly placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;" ><?=$phone?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ :</label>
                        <textarea class="form-control" name="description" rows="3" readonly placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;" ><?=$address?></textarea>
                    </div>
                    <div class="form-group">
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
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sửa tài khoản" name="updtTk" class="btn btn-primary">
                        <a href="index.php?act=user"><input type="button" value="Danh sách tài khoản" name="" class="btn btn-dark"></a>
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