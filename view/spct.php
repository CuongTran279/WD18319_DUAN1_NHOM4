<div class="layout_padding  px-5">
    <div class="container">
         <?php
            extract($one);
            ?>
        <div class=" row align-items-center login-form">
            <form action="index.php?act=addCart" class="row" method="post">
                <div class="col pl-0 ">
                    <div class="row-6 img_to border text-center">
                        <?php
                            $hinh = $imgpath . $img;
                            echo '<img src="'.$hinh.'" alt="" class="object-fit-contain " style="width:400px;height:500px;">'
                        ?>
                    </div>
                </div>
                <div class="col pr-4 pl-4 ctsp">
                    <div class="row">
                        <p>Mã Sản phẩm : <?=$id?></p>
                    </div>
                    <div class="row">
                        <p>Tên sản phẩm : <?=$name?></p>
                    </div>
                    <div class="row">
                        <p>GIá : <?=$price?></p>
                    </div>
                    <div class="row-4">
                        <p>Mô tả : <?=$description?></p>
                    </div>
                    <div class="form-outline pb-2 sl ">
                        <div class="title_sl pb-2">Số lượng</div>
                        <div class="d-flex flex-row mb-3">
                            <span name="minus" class="p-2 btn btn-dark minus" style="height: 40px;">-</span>
                            <div  class="p-2" style="width:70px">
                                <input type="number" id="typeNumber" name="quantity[<?=$id?>]" class="form-control quantity" min="1" value="1">
                            </div>
                            <span class="p-2 btn btn-dark plus" style="height: 40px;" name="plus">+</span>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" value="<?=$name?>" name="name">
                    <input type="hidden" value="<?=$hinh?>" name="img">
                    <input type="hidden" value="<?=$price?>" name="price">
                    <input type="submit" name="addCart" value="Thêm vào giỏ hàng" class="btn btn-dark">
                </div>    
            </form>
        </div>
        <div class="row layout_padding">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/comment.php", {id_pro: <?=$id?>});
                });
            </script>
            <div class="container" id="binhluan">
                
            </div>
        </div>
        <div class="shop_section row layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Sản phẩm tương tự
                    </h2>
                </div>
                <div class="sptt pt-3 ">
                    <?php
                        foreach ($spcl as $sp) {
                            extract($sp);
                            $hinh = $imgpath . $sp['img'];
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
                  <a href="index.php?act=addCart"><div class="new"><span><i class="fa-solid fa-cart-shopping" name="addCart"></i></span></div></a>
                </form>
              </div>
            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        const plus = document.querySelector(".plus");
        const minus = document.querySelector(".minus");
        const num = document.querySelector(".quantity");
        let a =1;
        plus.addEventListener("click",function(){
            a++;
            num.value = a;
        })
        minus.addEventListener("click",function(){
            if(a>1){
                a--;
                num.value = a;
            }
        })
    </script>
</div>