<?php
/**
 * Created by PhpStorm.
 * User: totio
 * Date: 29/04/2016
 * Time: 11:21
 */

//get connection
include(connection.php);
//send data to the table

if ($_POST["submit"]){
    $schname="";
    $schaddress="";

    //create sql query to send the data
    $sql="INSERT  INTO myskul (schname,schaddress) VALUES ($schname,$schaddress)";

    //connect query to database
    mysqli_query($db,$sql);
    if (mysqli_query($db,$sql)){

        echo "data added";}
        else{
            echo "Erro".$sql."<br>".mysqli_erro($db);


    }

}else{

    echo "data not posted";
}
