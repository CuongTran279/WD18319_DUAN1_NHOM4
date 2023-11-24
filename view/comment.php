<?php
    session_start();
    $id_pro = $_REQUEST['id_pro'];
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $dsbl = binhluan_select_all($id_pro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="heading_container">
            <h2>
                Bình luận
            </h2>
        </div>

        <table class="table" id="binhluan">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Người bình luận</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ngày bình luận</th>
                    <!-- <th><?=$id_pro?></th>  -->
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=1;
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<tr>
                            <th scope="row">'.$i++.'</th>
                            <td>'.$name.'</td>
                            <td>'.$content.'</td>
                            <td>'.$date.'</td></tr>';
                        }
                ?>
            </tbody>
        </table>
        <?php
            if(isset($_SESSION['user'])){
        ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="id_pro" value="<?=$id_pro?>">
            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
            <input type="submit" name="binhluan" class="btn btn-primary " value="Gửi bình luận">
        </form>
        <?php
            }else{
                echo '<p>Vui lòng đăng nhập để bình luận</p>';
            }
        ?>
        <?php
            if (isset($_POST['binhluan']) && ($_POST['binhluan'])) {
                $content = $_POST['content'];
                $id_pro = $_POST['id_pro'];
                $id_user = $_SESSION['user']['id'];
                $date = date("h:i:sa d/m/Y");
                $name_bl = name_bl($id_user)['name'];
                insert_binhluan($id_pro,$id_user,$content,$date,$name_bl);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
</body>
</html>
