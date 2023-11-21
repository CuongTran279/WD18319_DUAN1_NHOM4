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
        <div class="heading_container heading_center mb-2">
          <h2>
            Giỏ hàng
          </h2>
        </div>
          <table class="table text-center justify-center">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">ẢNh</th>
                <th scope="col">Tên</th><th scope="col">Số Lượng</th>
                <th scope="col">Giá</th>
                
                <th scope="col">Xóa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><input type="number" name="" id="" value="1" style="font-size: 20px;"></td>
                <td>52523</td>
                <td>Xóa</td>
              </tr>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Tổng tiền</th>
                <th>246187120948012</th>
              </tr>
            </tbody>
          </table>
        </div>
        <button class="btn btn-dark">Mua hàng</button>
      </div>
    </section>
  </body>
  </script>

  </html>

  <!-- end blog section -->