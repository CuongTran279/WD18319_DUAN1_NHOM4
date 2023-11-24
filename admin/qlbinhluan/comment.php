<div class="main-content">
    <h3 class="title-page">
        Danh sách các bình luận
    </h3>
    <table id="example" class="table table-striped" style="width:100%">

        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Người bình luận</th>
                <th>Nội dung</th>
                <th>Id sản phẩm</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lisbl as $item) {
                extract($item);
                $xoa = "index.php?act=xoaBl&id=" . $id;
            ?>
            <?php
                echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $content . '</td>
                        <td>' . $id_pro . '</td>
                        <td>' . $date . '</td>
                        <td>
                            <a href="' . $xoa . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
            <th></th>
                <th>Id</th>
                <th>Người bình luận</th>
                <th>Nội dung</th>
                <th>Id sản phẩm</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
        </tfoot>

    </table>
    <input type="button" value="Chọn tất cả" name="" class="btn btn-primary">
    <input type="button" value="Bỏ chọn tất cả" name="" class="btn btn-danger">
</div>