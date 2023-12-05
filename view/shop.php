<!-- shop section -->

<section class="shop_section layout_padding">
  <div class="">
    <div class=" row">
      <div class="col-3 pl-3  " style="height: 500px;">
        <div class="position-fixed  text-center ml-2">
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              <a href="index.php?act=shop" class="text-dark link-offset-2 link-underline link-underline-opacity-0">Danh mục sản phẩm</a>
            </div>
            <ul class="list-group list-group-flush">
              <?php
                  foreach($dsdm as $dm){
                      extract($dm);
                      $linkdm = "index.php?act=sanpham&id_categories=".$id;
                      echo '<li class="list-group-item"><a class="text-dark" href="'.$linkdm.'">'.$name.'</a></li>';}
              ?>
            </ul>
            <form class="d-flex justify-content-between mb-2">
              <div class="ml-2">
                <input type="text" class="form-control" id="autoSizingInput">
              </div>
              <div class="mr-2">
                <button type="submit" class="btn btn-primary">Tìm</button>
              </div>
            </form>
          </div>
        </div>


      </div>
      <div class="col-8 ">
        <div class="heading_container heading_center">
          <h2>
            Sản phẩm
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
                <form action="" method="post">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="img" value="'.$hinh.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="price" value="'.$price.'">
                  <div class="new"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                </form>
              </div>
            </div>';
          }
          ?>
          
        </div>
        <div class="btn-box">
          <form action="index.php?act=spall" method="post">
            <a href="index.php?act=xemthem" name="xemthem">
            Xem thêm
          </a>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end shop section -->