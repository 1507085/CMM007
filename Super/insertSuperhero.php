<?php
/**
 * Created by PhpStorm.
 * User: totio
 * Date: 15/04/2016
 * Time: 22:54
 */
include ("db_connect.php");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];
$sql="INSERT INTO superheros(firstName,lastName,mainSuperpower)VALUES
('$firstname','$lastname','$superpower')";
if (mysqli_query($db,$sql)){
}
else{
    echo "Erro".$sql."<br>".mysqli_erro($db);
}
header("location:index.php");
?>