<?php
include '../host/host.php';


$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    die("connection failed:".mysql_connet_error());
}
?>