<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 15/03/2016
 * Time: 10:53
 */
$spec_stock =7;
$mug_stock =7;
$sausageroll_stock = 7;

$monthDate = 1;
while(($spec_stock>0)&&($mug_stock>0)&&($sausageroll_stock>0)){
    $todaysGood = rand(0,2);
    switch($todaysGood){
        case 0:
        $spec_stock--;
        echo "On day ". $monthDate."Specs are available<br>";
        break;
        case 1:
            $mug_stock--;
            echo "On day ". $monthDate."Mugs are available<br>";
            break;
        case 2:
            $sausageroll_stock--;
            echo "On day ". $monthDate."Sausage Rolls are available<br>";
            break;
    }
    $monthDate++;
}
echo "No more goods are available this month";
?>