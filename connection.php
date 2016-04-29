<?php
/**
 * Created by PhpStorm.
 * User: 1507085
 * Date: 23/03/2016
 * Time: 18:11
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'bdd38664337680');
define('DB_PASSWORD','76158e64');
define('DB_DATABASE','rgu_1507085');
$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>