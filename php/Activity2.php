<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 09/03/2016
 * Time: 18:42
 */
$sp="specs";
$mg="mugs";
$sg="sausage rolls";
$myage=0;
if($myage>=16)
    print "buy ".$sp;
else if($myage>=18)
    print "buy ".$mg;
else if($myage>=21)
    print "buy ".$sg;
else
    print "can't buy anythingh"
?>