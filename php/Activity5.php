<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 15/03/2016
 * Time: 10:28
 */
for($i=1;$i<=30;$i++){
    $z=0;
    echo "<p>On the " .$i." of the month the ff products are available:";
    if ($i%2==0){
        echo "Specs";
        $z=1;
    }
    if ($i%3==0){
        echo "Mugs";
        $z=1;
    }
    if ($i%4==0){
        echo "Sausage Rolls";
        $z=1;
    }
    if ($y !=1){
        echo "None of the products available";
    }
}
?>