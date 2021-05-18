<?php
include "../host/connection.php";
if(!isset($_GET['id'])){
    header("location:../view/requ.php");

}
$id=$_GET['id'];
$query = "DELETE FROM requests WHERE id=$id";
$result = mysqli_query($con, $query);
if ($result){
    echo "تم الحذف";
    header("location:../view/requ.php");
}
else{
    echo "ERROR " . mysqli_error($con);
}

?>