<div class="layout_padding  px-5">
    <div class="container">

    <div class=" row align-items-center border pr-5 login-form">
        <div class="col pl-0 img_lg">
            <img src="view/images/banner_dangky.png" alt="">
        </div>
        <div class="col">
            <form action="index.php?act=dangky" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                    <p class="text-danger"><?php echo $errEmail?></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control " id="floatingInput" name="name" placeholder="name@example.com">
                    <label for="floatingInput">Tên đăng nhập</label>
                    <p class="text-danger"><?php echo $errName?></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <p class="text-danger"><?php echo $errPass?></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="re_pass" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Nhập lại Password</label>
                    <p class="text-danger"><?php echo $errRepass?></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control " name="address" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Địa chỉ</label>
                    <p class="text-danger"><?php echo $errAddress?></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control " name="phone" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Số điện thoại</label>
                    <p class="text-danger"><?php echo $errPhone?></p>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Nhớ tài khoản
                    </label>
                </div>
                <p>Đã có tài khoản ? <a class="link-opacity-75-hover" href="index.php?act=login">Đăng nhập</a></p>
                <input type="submit" class="btn btn-primary" name="dangky" value="Đăng ký">
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