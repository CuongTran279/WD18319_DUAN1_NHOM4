  <!-- blog section -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }
    img{
      width: 100%;
    }
    input{
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    .gio-hang{
      border: 1px solid #ddd;
      box-shadow:2px 2px 4px #ddd;
      padding: 20px;
      margin: auto;
      max-width: 1100px;
    }
    .item-gio-hang{
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    .item-gio-hang .hinh-anh img{
      width: 60%;
      height: 60%;
    }
    .item-gio-hang .hinh-anh, 
    .soluong, 
    .tongtien,
    .hanhdong{
      flex: 1;
      margin-left: 20px;
    }
    .item-gio-hang .gia{
      flex: 2;
    }
    .item-gio-hang .ten{
      flex: 3;
    }
    .item-gio-hang .hanhdong i:hover{
      color: red;
    }
  </style>
  </head>
  <body>
  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <div class="item-gio-hang border"> 
          <div class="hinh-anh">
            <img src="view/images/o1.jpg" alt="" srcset="">
          </div>
          <p class="ten">Nhẫn kim cương</p>
          <div class="gia">
            <span class="gia">$10000</span>
          </div>
          <input type="number" class="soluong" value="1">
          <p class="tongtien">$10000</p>
          <div class="hanhdong">
            <i class="bi bi-trash3"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
   </script>
  </html>
  
  <!-- end blog section -->