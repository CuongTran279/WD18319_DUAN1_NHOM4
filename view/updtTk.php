<div class="container layout-padding py-5">
    <div class="container border" style="padding: 70px;">
                <div class="heading_container">
                    <h2>
                        Hồ sơ của tôi
                    </h2>
                </div><br>
                <?php
                $user = SELECT_USERID();
                if(is_array($user)){
                    extract($user);
                }
                //var_dump($user);exit;
                ?>
                <form action="index.php?act=updtTk" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="">Ảnh đại diện</label><br>
                    <img src="upload/dd.jpg" alt="" style="width: 50px;height: 50px;">
                    <input type="file"  id="" name="image">
                    </div>
                    <input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>">
                    <div class="form-group">
                        <label for="">Tên</label>
                        <input type="text"  class="form-control" name="name" value="<?=$name?>">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" readonly class="form-control" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" class="form-control" name="email"  value="<?=$email?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Địa chỉ:</label>
                        <input type="text" class="form-control" name="address" value="<?=$address?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Số điện thoại:</label>
                        <input type="text" class="form-control" name="phone" value="<?=$phone?>">
                    </div>
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary">
                    <a href=""><input type="button" value="Đổi mật khẩu" class="btn btn-dark"></a>
                </form>
    </div>
                
                
</div>