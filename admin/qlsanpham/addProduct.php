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
                    Thêm sản phẩm
                </h3>

                <form class="addPro" action="index.php?act=addSp" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="id_categories">
                            <option value="0" selected>Chọn danh mục sản phẩm</option>
                            <?php
                            foreach ($lisdm as $item) {
                                extract($item);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price_sale">Giá:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" id="price_sale" class="form-control" placeholder="Giá">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mô tả :</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm sản phẩm mới" name="addSp" class="btn btn-primary">
                        <input type="reset" value="Nhập lại " name="" class="btn btn-danger">
                        <a href="index.php?act=products"><input type="button" value="Danh sách sản phẩm" name="" class="btn btn-dark"></a>
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