<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
              <a href="index.html"
                ><i class="fa-solid fa-house ico-side"></i>Dashboards</a
              >
            </li>
            <li>
              <a href="order.html"
                ><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn
                hàng</a
              >
            </li>
            <li>
              <a href="caterogies.html"
                ><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh
                muc</a
              >
            </li>
            <li>
              <a href="products.html"
                ><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a
              >
            </li>
            <li>A
              <a href="user.html"
                ><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a
              >
            </li>
          </ul>
        </nav> -->
      <div class="main-content">
        <h3 class="title-page">Sản phẩm</h3>
        <div class="row">
          <form class="row" method="post">
            <div class="col">
              <input type="text" class="form-control" id="inputPassword2" name="kyw">
            </div>
            <div class="col">
              <select class="form-select" aria-label="Default select example" name="id_categories">
                <option value="0" selected>Chọn danh mục sản phẩm</option>
                <?php
                foreach ($lisdm as $item) {
                    extract($item);
                    echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="col">
              <input type="submit" value="Tìm kiếm sản phẩm" name="timSp" class="btn btn-primary mb-3">
            </div>
          </form>
        </div>
        <div class="d-flex justify-content-end">
          <a href="index.php?act=addSp" class="btn btn-primary mb-2">Thêm sản phẩm</a>
        </div>
        <table id="example" class="table table-striped" style="width: 100%">
          <thead>
            <tr>
              <th></th>
              <th>STT</th>
              <th>ID</th>
              <th>TÊN</th>
              <th>Ảnh</th>
              <th>Giá</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($lissp as $item) {
              extract($item);
              $imgpath = "../upload/" . $img;
              if (is_file($imgpath)) {
                $hinh = "<img src='" . $imgpath . "' height='50'>";
              } else {
                $hinh = "no photo";
              }
              $xoa = "index.php?act=xoasp&id=" . $id;
              $sua = "index.php?act=suasp&id=" . $id;
              echo '<tr>
                    <td><input type="checkbox" class="form-check-input"></td>
                    <td>'.$i++.'</td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $price . '</td>
                    <td>
                        <a href="' . $sua . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="' . $xoa . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                    </td></tr>';
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th>STT</th>
              <th>ID</th>
              <th>TÊN</th>
              <th>Ảnh</th>
              <th>Giá</th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <script src="assets/js/main.js"></script>
  <!-- <script>
      new DataTable("#example");
    </script> -->
</body>

</html>