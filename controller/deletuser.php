<?php
include "../host/connection.php";
if(!isset($_GET['id'])){
    header("location:../view/users.php");

}
$id=$_GET['id'];
$query = "DELETE FROM users WHERE id=$id";
$result = mysqli_query($con, $query);
if ($result){
    echo "تم الحذف";
    header("location:../view/users.php");
}
else{
    echo "ERROR " . mysqli_error($con);
}

?>