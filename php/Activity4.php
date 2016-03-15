<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 15/03/2016
 * Time: 10:12
 */
$myArray = array("specs", "mugs", "sausage rolls");
echo "<h1> Original Array</h1>";
printmyArray($myArray);

unset($myArray[2]);

echo "<h1>Take out Sausage Rolls</h1>";
printmyArray($myArray);

function printmyArray($myArray)
{
    foreach($myArray as $x){
        echo "<p>".$x."</p>";
    }
}
?>