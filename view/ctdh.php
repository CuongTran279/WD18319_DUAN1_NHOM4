
            <div class="layout-padding container border">

            <div class="main-content p-5">
                <h3 class="title-page">
                    Chi tiết đơn hàng
                </h3>
                <?php
                    // if((is_array($tk))){
                    //     extract($tk);
                    // }
                ?>
                <form class="addPro" action="index.php?act=updtDh" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">ID đơn hàng:</label>
                        <input type="text" class="form-control" name="id" id="name" readonly placeholder="Nhập tên sản phẩm" value="<?=$cart[0]['id']?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Tên người dùng:</label>
                        <input type="text" class="form-control" name="name" id="name" readonly placeholder="Nhập tên sản phẩm" value="<?=$cart[0]['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input class="form-control" name="description"  readonly value="<?=$cart[0]['email']?>"  ></input>
                    </div>
                    <div class="form-group">
                        <label>Phone :</label>
                        <input class="form-control" name="description"  readonly value="<?=$cart[0]['tel']?>"  ></input>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ :</label>
                        <input class="form-control" name="description"  readonly value="<?=$cart[0]['address']?>"  ></input>
                    </div>
                    <?php
                        $Pt = "";
                        if($cart[0]['pttt'] == 1){
                          $Pt = "Thanh toán khi nhận hàng";
                        }elseif($cart[0]['pttt'] == 2){
                          $Pt = "Chuyển khoản";
                        }elseif($cart[0]['pttt'] == 3){
                          $Pt = "Ghi nợ";
                        }
                    ?>
                    <div class="form-group">
                        <label>Phương thức thanh toán :</label>
                        <input class="form-control" name="description"  readonly value="<?=$Pt?>"  ></input>
                    </div>
                    <div class="form-group">
                    <label>Trạng thái đơn hàng hiện tại:   <?php
                        $tt = "";
                        if($cart[0]['trangthai'] == 0){
                            $tt = "Chờ xác nhận đơn hàng";
                        }
                        elseif($cart[0]['trangthai'] == 1){
                            $tt = "Đã xác nhận đơn hàng";
                        }
                        elseif($cart[0]['trangthai'] == 2){
                            $tt = "Đang vận chuyển đơn hàng";
                        }
                        elseif($cart[0]['trangthai'] == 3){
                            $tt = "Giao thành công đơn hàng";
                        }
                        
                    ?> </label>
                    <input class="form-control" name="description"  readonly value="<?=$tt?>"  ></input></div>
                    <?php
                    ?>
                    <table class="table text-center justify-center">
                            <thead>
                                <tr>
                                    <th scope="col">ẢNh</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($cart as $item){
                                    extract($item);
                                        $tt = 0;
                                        $imgpath = "upload/" ;
                                        $hinh = $imgpath . $img;
                                        echo '<tr>
                                          <td><img src="'.$hinh.'" alt="" style="width: 60px;height: 70px;"></td>
                                          <td class="text-uppercase">'.$product_name.'</td>
                                        </a><td class="text-danger ">'.$price.'</td>
                                        <td><input type="number" name="" id="" value="'.$quantity.'" style="font-size: 20px;text-align:center;width:100px"></td>
                                        <td class="text-danger ">'.$price * $quantity.'</td>
                                        </tr>';
                                        $tt += $price * $quantity;
                                    }
                                 ?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Tổng tiền</th>
                                    <th><?=$total?></th>
                                </tr>
                                <?php ?>
                            </tbody>
                        </table>
                    <!-- <div class="form-group">
                        <label for="">Vai trò hiện tại: <?php if($role == 1){
                            echo 'Admin';
                        }elseif($role == 0){
                            echo 'Người dùng';
                        }?></label><br>
                        <select name="role" id="">
                            <option value="" selected>Chọn vai trò</option>
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
                        </select>
                        
                    </div> -->
                    <div class="form-group">
                        <a href="index.php?act=profile"><input type="button" value="Hồ sơ của tôi" name="" class="btn btn-dark"></a>
                    </div>
                </form>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>
        </div>
