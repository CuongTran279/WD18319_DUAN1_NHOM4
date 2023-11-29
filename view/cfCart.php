<div class="layout_padding ">
    <div class="container">
        <a href="index.php?act=cart"><button class="btn btn-dark mb-2">Quay lại giỏ hàng</button></a>
        <div class="  align-items-center border pr-5 ">
        <form action="index.php?act=datHang" method="post" class="">
            <div class="container py-2 col">
                <div class="heading_container mb-2">
                    <h2>
                        Thông tin người đặt
                    </h2>
                </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                        <p class="text-danger"><?php echo $errEmail ?></p>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control " id="floatingInput" name="name" placeholder="name@example.com">
                        <label for="floatingInput">Tên</label>
                        <p class="text-danger"><?php echo $errName ?></p>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control " name="address" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Địa chỉ</label>
                        <p class="text-danger"><?php echo $errAddress ?></p>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control " name="phone" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Số điện thoại</label>
                        <p class="text-danger"><?php echo $errPhone ?></p>
                    </div>
                    <select class="form-select" name="pttt" aria-label="Default select example">
                        <option value="0" selected>Phương thức thanh toán</option>
                        <option value="1">Thanh toán khi nhận hàng</option>
                        <option value="2">Chuyển khoản</option>
                        <option value="3">Ghi nợ.</option>
                        <p class="text-danger"><?php echo $errPttt ?></p>
                    </select>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>
            <div class="container mt-3 col">
                <div class="heading_container container">
                        <div class="mb-2 d-flex justify-content-between">
                            <h2>
                                    Giỏ hàng
                                </h2>    
                        </div>
                        <table class="table text-center justify-center">
                            <thead>
                                <tr>
                                    <th scope="col">ẢNh</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Số Lượng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $tt =0;
                                if(empty($_SESSION['cart'])){
                                    echo '<script type="text/javascript"> window.onload = function () { alert("Giỏ hàng rỗng, vui lòng mua hàng"); }</script>';
                                }else{
                                    foreach ($testcart as $item) {
                                        extract($item);
                                        $hinh = $imgpath . $item['img'];
                                        echo '<tr>
                                        <a href="index.php?act=spct&idsp='.$id.'">
                                          <td><img src="'.$hinh.'" alt="" style="width: 60px;height: 70px;"></td>
                                          <td class="text-uppercase">'.$name.'</td>
                                        </a><td class="text-danger ">'.$price.'</td>
                                        <td><input type="number" name="quantity['.$id.']" id="" value="'.$_SESSION['cart'][$id].'" style="font-size: 20px;"></td>
                                        <td class="text-danger ">'.$price * $_SESSION['cart'][$id].'</td>
                                        </tr>';
                                        $i++;
                                        $tt += $price * $_SESSION['cart'][$id];
                                } ?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Tổng tiền</th>
                                    <th><?=$tt?></th>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <input type="submit" value="Mua hàng" class="btn btn-dark mb-2" name="datHang">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>