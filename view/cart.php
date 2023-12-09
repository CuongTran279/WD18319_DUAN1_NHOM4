  <!-- blog section -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
      }

      img {
        width: 100%;
      }

      input {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      .gio-hang {
        border: 1px solid #ddd;
        box-shadow: 2px 2px 4px #ddd;
        padding: 20px;
        margin: auto;
        max-width: 1100px;
      }

      .item-gio-hang {
        display: flex;
        flex-direction: row;
        align-items: center;
      }

      .item-gio-hang .hinh-anh img {
        width: 60%;
        height: 60%;
      }

      .item-gio-hang .hinh-anh,
      .soluong,
      .tongtien,
      .hanhdong {
        flex: 1;
        margin-left: 20px;
      }

      .item-gio-hang .gia {
        flex: 2;
      }

      .item-gio-hang .ten {
        flex: 3;
      }

      .item-gio-hang .hanhdong i:hover {
        color: red;
      }
    </style>
  </head>

  <body>
    <section class="blog_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <form action="index.php?act=cart" method="post" class="container">
            <div class="mb-2 d-flex justify-content-between">
              <a href="index.php?act=shop"><input class="btn btn-dark" type="button" value="Tiếp tục mua hàng"></a>
              <h2>
                Giỏ hàng
              </h2>
              <input class="btn btn-dark" type="submit" value="Cập nhật giỏ hàng" name="updtQuantt">
            </div>
            <table class="table text-center justify-center">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">ẢNh</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Thành tiền</th>
                  <th scope="col" ></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  $tt = 0;
                  if(!empty($testcart)){
                      foreach($testcart as $item){
                      extract($item);
                      $hinh = $imgpath . $item['img'];
                    echo '<tr>
                              <td><div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                              </div></td>
                              <a href="index.php?act=spct&idsp='.$id.'">
                                <td><img src="'.$hinh.'" alt="" style="width: 60px;height: 70px;"></td>
                                <td class="text-uppercase">'.$name.'</td>
                              </a><td class="text-danger ">'.$price.'</td>
                              <td><input type="number" name="quantity['.$id.']" id="" value="'.$_SESSION['cart'][$id].'" style="font-size: 20px;width:60px"></td>
                              <td class="text-danger ">'.$price * $_SESSION['cart'][$id].'</td>
                              <td><a href="index.php?act=delCart&id='.$id.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
                          </tr>';
                          $tt += $price * $_SESSION['cart'][$id];
                $i++; } ?>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Tổng tiền</th>
                  <th><?=$tt?> đ</th>
                </tr>
                <?php }?>
              </tbody>
            </table>
            <a href="index.php?act=datHang"><input type="button" value="Mua hàng" class="btn btn-dark" name="muaHang"></a>
          </form>
        </div>
        
      </div>
    </section>
  </body>
  </script>

  </html>

  <!-- end blog section -->