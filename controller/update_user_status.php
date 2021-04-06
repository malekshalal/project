<?php
session_start();
include('../host/connection.php');
$id=$_SESSION['id'];
$time=time()+10;
$res=mysqli_query($con,"update users set last_login=$time where id=$id");
?>