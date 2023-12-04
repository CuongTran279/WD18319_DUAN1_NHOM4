<?php
    require "../carbon/autoload.php";
    include "../model/pdo.php";
    include "../model/thongke.php";
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    //printf("Now: %s", Carbon::now('Asia/Ho_Chi_Minh'));
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $now->addDay();
    $sql = "SELECT * FROM cart WHERE created_at >= '$subdays' and created_at <='$now' order by created_at ASC";
    $tk = pdo_query($sql);
    $sql2 = "select count(cart_details.id_pro) as slsp,cart.id from cart_details LEFT JOIN cart ON cart_details.id_cart = cart.id GROUP BY cart.id;";
    $tk2 = pdo_query($sql2);
    //var_dump($tk);exit;
    // foreach($tk as $item){
    //     extract($item);
        for($i =0;$i < count($tk);$i++){
            $chart_data[] = array(
                    'date' => $tk[$i]['created_at'],
                    'sales' => $tk[$i]['total'],
                    'quantity' => $tk2[$i]['slsp'],
                );
        }
    //}
    // foreach($tk2 as $item2){
    //     extract($item2);
    // }
    
    echo $data = json_encode($chart_data);
    
?>