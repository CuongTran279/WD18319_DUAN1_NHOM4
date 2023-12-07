<div class="container layout-padding py-5">
    <div class="container border" style="padding: 70px;">
                <div class="heading_container">
                    <h2>
                        Quên mật khẩu
                    </h2>
                </div><br>
                <form action="index.php?act=qmk" method="post">
                    <div class="form-group">
                        <label for="">Nhập email :</label>
                        <input type="text"  class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="">Tên đăng nhập:</label>
                        <input type="text"  class="form-control" name="name" >
                    </div>
                    <input type="submit" value="Đổi mật khẩu" name="qmk" class="btn btn-primary">
                    <a href="index.php?act=login"><input type="button" value="Quay lại" class="btn btn-dark"></a><br>
                    <?php
                        if(isset($thongbao)&&($thongbao != "")){
                            echo $thongbao;
                        }
                    ?>
                </form>
    </div>
</div>