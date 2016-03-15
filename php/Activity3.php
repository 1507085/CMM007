<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 15/03/2016
 * Time: 09:56
 */
$wantedgood = "mugs";
switch ($wantedgood){
    case "specs":
    echo "You must to be 16 to buy specs";
break;
    case "mugs":
        echo "You must to be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "You must to be 21 to buy sausage rolls";
        break;
    default:
        echo "Haven't selected anything to buy";
}
?>