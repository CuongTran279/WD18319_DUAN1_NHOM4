<!-- slider section -->
<section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="view/images/slider-bg.jpg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
          <h1>
            Best Jewellery
            <br> Collection
          </h1>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem
          </p>
          <div>
            <a href="" class="slider-link">
              Shop Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        Sản phẩm mới nhất
        </h2>
      </div>
      <div class="row">
        <?php
          $i = 0;
          foreach ($spnew as $sp) {
            extract($sp);
            $hinh = $imgpath . $img;
            // if (($i == 2) || ($i == 5) || ($i == 8)) {
            //   $mr = "";
            // } else {
            //   $mr = "mr";
            // }
            echo '<div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="index.php?act=spct&idsp='.$id.'">
                  <div class="img-box">
                    <img src="'.$hinh.'" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>'.$name.'</h6>
                    <h6>Price<span>$'.$price.'</span></h6>
                  </div>
                </a>
                <form action="index.php?act=addCart" method="post">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="img" value="'.$hinh.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="price" value="'.$price.'">
                  <div class="new"><a href="index.php?act=addCart"><span><i class="fa-solid fa-cart-shopping" name="addCart"></i></span></a></div>
                </form>
              </div>
            </div>';
          }
        ?>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  

  <!-- end about section -->

  <!-- offer section -->

  <section class="offer_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="view/images/o1.jpg" alt="">
            <div class="detail-box">
              <h2>
                Nhẫn
              </h2>
              <a href="index.php?act=sanpham&id_categories=1">
                Xem ngay
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="view/images/o2.jpg" alt="">
            <div class="detail-box">
              <h2>
                Dây chuyền
              </h2>
              <a href="index.php?act=sanpham&id_categories=3">
                Xem ngay
              </a>
            </div>
          </div>
          <div class="box offer-box3">
            <img src="view/images/o3.jpg" alt="">
            <div class="detail-box">
              <h2>
                Khuyên tai
              </h2>
              <a href="index.php?act=sanpham&id_categories=6">
                Xem ngay
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="about_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="view/images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Về chúng tôi
              </h2>
            </div>
            <p>
              Nhóm 4 gồm 3 thành viên Cường, Thái và Tuyên .Mỗi người có một công việc khác nhau.
            </p>
            <a href="index.php?act=about">
              Xem thêm
            </a>
          </div>
        </div>
      </div>
    </div>
  </section><br><br>
  <!-- end offer section -->

  <!-- blog section -->


  <!-- end blog section -->

  <!-- client section -->

  

  <!-- end client section -->

  