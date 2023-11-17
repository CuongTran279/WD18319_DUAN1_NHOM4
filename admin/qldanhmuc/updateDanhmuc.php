<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="main-content container mt-5">
    <h3 class="title-page">
        Sửa danh mục
    </h3>
    <form action="index.php?act=updtDm" method="post">
        <div class="form-group">
            <label for="email">Id</label>
            <input type="text" class="form-control" name="id" id="text" readonly value="<?php if(isset($id) && ($id>0)) echo $id?>" >
        </div>
        <div class="form-group mb-3">
            <label for="pwd">Tên danh mục</label>
            <input type="text" class="form-control" id="pwd" name="name" value="<?php if(isset($name) && ($name!="")) echo $name?>">
        </div>
        <input type="submit" value="Sửa danh mục" name="updtDm" class="btn btn-primary">
        <input type="reset" value="Nhập lại" class="btn btn-danger">
        <a href="index.php?act=caterogies"><input type="button" class="btn btn-dark" value="Danh sách"></a>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>