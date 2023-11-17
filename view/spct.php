<div class="layout_padding  px-5">
    <div class="container">
         <?php
            extract($one);
            ?>
        <div class=" row align-items-center login-form">
            <div class="col pl-0 ">
                <div class="row-6 img_to">
                    <?php
                        $hinh = $imgpath . $img;
                        echo '<img src="'.$hinh.'" alt="" class="object-fit-contain " style="width:500px;height:500px">'
                    ?>
                </div>
                <!-- <div class="row img_con_ct container pl-0">
                <div class="col">
                    <button><img src="view/images/o1.jpg" alt="" class="col"></button>
                </div>
                <div class="col">
                    <button><img src="view/images/o2.jpg" alt="" class="col"></button>
                </div>
                <div class="col">
                    <button><img src="view/images/o3.jpg" alt="" class="col"></button>
                </div>
            </div> -->
            </div>
            <div class="col pr-4 pl-4 ctsp">
                <div class="row">
                    <p >Mã Sản phẩm</p>
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
                    <div class="bt_sl row">
                        <div class="col">
                            <button class="btn btn-dark" id="minus">-</button>
                        </div>
                        <div class="col-6">
                            <input type="number" id="typeNumber" class="form-control quantity" min="1" value="1">
                        </div>
                        <div class="col">
                            <button class="btn btn-dark" id="plus">+</button>
                        </div>
                    </div>

                </div>
                <div class="row-2 pt-2">
                    <button type="submit" class="btn btn-dark">Thêm vào giỏ hàng</button>
                    <button type="submit" class="btn btn-danger">Mua ngay</button>
                </div>
            </div>
        </div>
        <div class="row layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Bình luận
                    </h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Người bình luận</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Ngày bình luận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
                <form action="">
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary ">Gửi bình luận</button>
                </form>

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
                            echo    '<div class="col-sm-6 col-md-4 col-lg-3">
                                        <div class="box">
                                            <a href="index.php?act=spct&idsp='.$id.'">
                                            <div class="img-box">
                                                <img src="'.$hinh.'" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>'.$name.'</h6>
                                                <h6>Price<span>$'.$price.'</span></h6>
                                            </div>
                                            <div class="new"><span>New</span></div>
                                            </a>
                                        </div>
                                    </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>