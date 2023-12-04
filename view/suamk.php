<div class="container layout-padding py-5">
    <div class="container border" style="padding: 70px;">
                <div class="heading_container">
                    <h2>
                        Thay đổi mật khẩu
                    </h2>
                </div><br>
                <form action="index.php?act=suamk" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mật khẩu mới:</label>
                        <input type="text"  class="form-control" name="pass" >
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu:</label>
                        <input type="text"  class="form-control" name="repass" >
                    </div>
                    <?php echo $err ?>
                    <input type="submit" value="Đổi mật khẩu" name="capnhat" class="btn btn-primary">
                    <a href="index.php?act=profile"><input type="button" value="Quay lại" class="btn btn-dark"></a>
                </form>
    </div>
                
                
</div>