<?php
session_start();
include('../host/connection.php');
$id=$_SESSION['id'];
$time=time()+100;
$res=mysqli_query($con,"update users set last_login=$time where id=$id");
?>