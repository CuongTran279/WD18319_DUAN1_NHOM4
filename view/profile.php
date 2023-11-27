<div class="layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-3 border black" style="padding: 10px;height:580px">
                <div class="heading_container">
                    <h2>
                        Hồ sơ của tôi
                    </h2>
                </div><br>
                <div class="form-group">
                    <label for="">Ảnh đại diện</label><br>
                    <img src="upload/b2.jpg" alt="" style="width: 50px;height: 50px;">
                </div>
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" readonly class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Địa chỉ:</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Số điện thoại:</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <input type="button" value="Cập nhật" class="btn btn-primary">
                <a href="index.php?act=out"><input type="button" value="Đăng xuất" class="btn btn-danger"></a>
                <?php if (isset($user['role'])) {
                    if($user['role'] == 1){
                  ?>
                <a href=""><input type="button" value="Truy cập admin" class="btn btn-dark"></a>
                <?php }}?>
            </div>
            <div class="col-7 ml-5 border black" style="padding: 20px;">
                <div class="heading_container">
                    <h2>
                        Đơn hàng của tôi
                    </h2>
                </div><br>
                <div class="border mb-5" style="padding: 20px;">
                    <div class="form-group">
                    <label for="">Mã đơn hàng</label>
                    <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tổng số tiền</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Phương thức thanh toán</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái đơn hàng</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <a href=""><button class="btn btn-dark">Chi tiết đơn hàng</button></a>
                </div>
                <div class="border" style="padding: 20px;">
                    <div class="form-group">
                    <label for="">Mã đơn hàng</label>
                    <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tổng số tiền</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Phương thức thanh toán</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái đơn hàng</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <a href=""><button class="btn btn-dark">Chi tiết đơn hàng</button></a>
                </div>
                
            </div>
        </div>
    </div>
</div>