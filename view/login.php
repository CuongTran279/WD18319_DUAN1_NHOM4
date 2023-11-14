<div class="layout_padding  px-5">
    <div class="container">

   
    <div class=" row align-items-center border pr-5 login-form">
        <div class="col pl-0 img_lg">
            <img src="view/images/img-login-banner.jpg" alt="">
        </div>
        <div class="col">
            <form action="index.php?act=login" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control " id="floatingInput" name="name" placeholder="name@example.com">
                    <label for="floatingInput">Tên đăng nhập</label>
                    <p class="text-danger"><?php echo $errName?></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <p class="text-danger"><?php echo $errPass?></p>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Nhớ tài khoản
                    </label>
                </div>
                <p>Chưa có tài khoản ? <a class="link-opacity-75-hover" href="index.php?act=dangky">Đăng ký</a></p>
                <a class="link-opacity-75-hover" href="">Quên mật khẩu</a></p>
                <input type="submit" class="btn btn-primary" name="dangnhap" value="Đăng Nhập">
            </form>
            <?php
                if(isset($thongbao)&&($thongbao != "")){
                    echo $thongbao;
                }
            ?>
        </div>
    </div>
    </div>


</div>