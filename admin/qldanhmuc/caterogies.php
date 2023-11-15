            <div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?act=addDm" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                
                    <thead>
                        <tr>
                            <th></th>
                            <th>Id</th>
                            <th>Tên</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lisdm as $item){
                            extract($item);
                            $xoa = "index.php?act=xoaDm&id=".$id;
                            $sua = "index.php?act=suaDm&id=".$id
                        ?>
                        <?php 
                                echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>
                                                <a href="'.$sua.'" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                                <a href="'.$xoa.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                                            </td>
                                        </tr>';
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                            <th></th>
                            <th>Id</th>
                            <th>Tên</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    
                </table>
                <input type="button" value="Chọn tất cả" name="" class="btn btn-primary">
                <input type="button" value="Bỏ chọn tất cả" name="" class="btn btn-danger">
            </div>