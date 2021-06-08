<?php
session_start();
include "../host/connection.php";
if(isset($_POST['creat'])){
    $id_product=$_POST['id_prod'];
    $l1=$_POST['l1'];
    $l2=$_POST['l2'];
    $l3=$_POST['l3'];
    $l4=$_POST['l4'];
    $l5=$_POST['l5'];
    $l6=$_POST['l6'];
    $l7=$_POST['l7'];
    $l8=$_POST['l8'];
    mysqli_query($con,"INSERT INTO length (id_product,l1,l2,l3,l4,l5,l6,l7,l8) VALUES ('$id_product','$l1','$l2','$l3','$l4','$l5','$l6','$l7','$l8') ");
    header("Location:../view/add_price_product.php?id_product=$id_product && massege=2");
}


?>