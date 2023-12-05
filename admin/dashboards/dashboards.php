<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid main-page">

        <div class="app-main">
            <!-- <nav class="sidebar bg-primary">
                <ul>
                    <li>
                        <a href="index.html"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                    </li>
                    <li>
                        <a href="order.html"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn hàng</a>
                    </li>
                    <li>
                        <a href="caterogies.html"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh muc</a>
                    </li>
                    <li>
                        <a href="products.html"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a>
                    </li>
                    <li>
                        <a href="user.html"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                    </li>
                </ul>
            </nav> -->
            <div class="main-content">
                <h3 class="title-page">
                    Thống kê
                </h3>
                <section class="statistics row">
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=products">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng sản phẩm
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($slsp)){
                                        extract($slsp);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$sp?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=user">
                            <div class="card mb-3 widget-chart">

                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng thành viên
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($sltk)){
                                        extract($sltk);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$tk?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=caterogies">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng danh mục
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($sldm)){
                                        extract($sldm);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$dm?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <a href="index.php?act=order">
                            <div class="card mb-3 widget-chart">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                                    <h5>
                                        Tổng đơn hàng
                                    </h5>
                                </div>
                                <?php
                                    if(is_array($sldh)){
                                        extract($sldh);
                                    }
                                ?>
                                <span class="widget-numbers"><?=$dh?></span>
                            </div>
                        </a>
                    </div>
                    
                </section><br>
                <section class=" statistics row">
                    <div class="col-sm-12 col-md-6 col xl-6" >
                        <div id="columnchart_material" style="height: 500px;background-color: #fff;"></div><br>
                        <div id="columnchart" style="height: 500px;background-color: #ccc;"></div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div id="piechart" style="width: 800px; height: 500px;"></div><br>
                        <div id="barchart2" style="width: 800px; height: 500px;"></div>
                    </div>
                </section><br>
                <section class="row">
                <div id="barchart3" style="height: 500px;"></div>
                </section>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <?php
    require "../carbon/autoload.php";
    use Carbon\Carbon;
    // use Carbon\CarbonInterval;
    // //printf("Now: %s", Carbon::now('Asia/Ho_Chi_Minh'));
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $now->addDay();
    $sql = "SELECT *,DATE(created_at) as created_at1 FROM cart WHERE created_at >= '$subdays' and created_at <='$now' order by created_at ASC";
    $tk = pdo_query($sql);
    $sql2 = "select count(cart_details.id_pro) as slsp,cart.id from cart_details LEFT JOIN cart ON cart_details.id_cart = cart.id GROUP BY cart.id;";
    $tk2 = pdo_query($sql2);
    //var_dump($tk);exit;
    // foreach($tk as $item){
    //     extract($item);
        for($i =0;$i < count($tk);$i++){
            $chart_data[] = array(
                'date' => $tk[$i]['created_at1'],
                'sales' => $tk[$i]['total'],
                'quantity' => $tk2[$i]['slsp'],
            );
        }
        //var_dump($chart_data);exit;
    //}
    // foreach($tk2 as $item2){
    //     extract($item2);
    // }
    
    //echo $data = json_encode($chart_data);
    //var_dump($chart_data);exit;
    ?>
    <script>
        // $(document).ready(function(){
        //     thongke();
        //     var char = new Morris.Bar({
        //     element: 'myfirstchart',
        //     // data: [
        //     //     { year: '2008', value: 20, quantity: 4, sales: 20 },
        //     //     { year: '2009', value: 10, quantity: 22, sales: 20 },
        //     //     { year: '2010', value: 5 , quantity: 120, sales: 20},
        //     //     { year: '2011', value: 5, quantity: 20 , sales: 20},
        //     //     { year: '2012', value: 20, quantity: 42, sales: 20}
        //     // ],
        //     xkey: 'date',
        //     ykeys: ['date','sales','quantity'],
        //     labels: ['Đơn hàng', 'Doanh thu', 'Số lượng']
        //     });
        // })
        // function thongke(){
        //     var text = '365 ngày qua';
        //     $.ajax({
        //         url:"../thongke.php",
        //         method:"POST",
        //         dataType:"JSON",
        //         success:function(data){
        //             char.setData(data);
        //             $('#text-date').text(text);
        //         }
        //     })
        // }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng'],
            ['<?php echo $sp_dm[0]['name']?>', <?php echo$sp_dm[0]['countsp']?>],
            ['<?=$sp_dm[1]['name']?>', <?=$sp_dm[1]['countsp']?>],
            ['<?=$sp_dm[2]['name']?>', <?=$sp_dm[2]['countsp']?>],
            ['<?=$sp_dm[3]['name']?>', <?=$sp_dm[3]['countsp']?>]
            
        ]);

        var options = {
          title: 'Sản phẩm theo danh mục'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Doanh thu'],
          <?php
          $tong = count($chart_data);
          $i = 1;
            foreach($chart_data as $tk3){
                extract($tk3);
                if($i==$tong) $dp = "";else $dp =",";
                echo "['".$tk3['date']."',".$tk3['sales']."]".$dp;
                $i+=1;
            }
          ?>
        
        ]);

        var options = {
          chart: {
            title: 'Tổng doanh thu',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Sản phẩm'],
          <?php
          $tong = count($chart_data);
          $i = 1;
            foreach($chart_data as $tk3){
                extract($tk3);
                if($i==$tong) $dp = "";else $dp =",";
                echo "['".$tk3['date']."',".$tk3['quantity']."]".$dp;
                $i+=1;
            }
          ?>
        //   ['2014', 1000, 400],
        //   ['2015', 1170, 460],
        //   ['2016', 660, 1120],
        //   ['2017', 1030, 540]
        ]);

        var options = {
          chart: {
            title: 'Tổng sản phẩm đã bán',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tên', 'Số lượng'],
          <?php
            $sp = select_lb();
            $tong = count($sp);
            $i = 1;
            foreach($sp as $item){
                extract($item);
                if($i==$tong) $dp = "";else $dp =",";
                if($luotban != 0){
                    echo "['".$name."',".$luotban."]".$dp;
                }
                $i+=1;
            }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Sản phẩm được bán nhiều nhất',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };
        var chart = new google.charts.Bar(document.getElementById('barchart2'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tên', 'Số lượng'],
          <?php
            $sp = select_lx();
            $tong = count($sp);
            $i = 1;
            foreach($sp as $item){
                extract($item);
                if($i==$tong) $dp = "";else $dp =",";
                    echo "['".$name."',".$view."]".$dp;
                $i+=1;
            }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Sản phẩm được xem nhiều nhất',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };
        var chart = new google.charts.Bar(document.getElementById('barchart3'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</body>

</html>