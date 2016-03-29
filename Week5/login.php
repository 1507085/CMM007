<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 23/03/2016
 * Time: 18:21
 */
include("connection.php");
if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "Both fields are required.";
}
 else {
     $username = $_POST['usernam'];
     $password = $_POST['passwor'];
     $sql = "SELECT uid FROM users WHERE username='$username' and
password='$password'";
     $result = mysqli_query($db, $sql);
     if (mysqli_num_rows($result) == 1) {
         header("location:home.php");
     } else {
         echo "Incorrect username or password.";
     }
 }
?>