<div class="main-content container mt-5">
    <h3 class="title-page">
        Thêm danh mục
    </h3>
    <form action="index.php?act=addDm" method="post">
        <div class="form-group">
            <label for="email">Id</label>
            <input type="email" class="form-control" id="text" disabled>
        </div>
        <div class="form-group mb-3">
            <label for="pwd">Tên danh mục</label>
            <input type="text" class="form-control" id="pwd" name="name">
        </div>
        <input type="submit" value="Thêm mới danh mục" name="addDm" class="btn btn-primary">
        <input type="reset" value="Nhập lại" class="btn btn-danger">
        <a href="index.php?act=caterogies"><input type="button" class="btn btn-dark" value="Danh sách"></a>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>