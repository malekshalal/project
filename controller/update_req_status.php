<?php
 include "../host/connection.php";

 if(isset($_POST['sub'])){
    $id=$_POST['id'];
    $c1=$_POST['ci'];
    $c2=$_POST['cii'];
    $c3=$_POST['ciii'];
    $c4=$_POST['civ'];
    $c5=$_POST['cv'];
    $c6=$_POST['cvi'];
    $c7=$_POST['cvii'];
    $c8=$_POST['cviii'];
    $query = "UPDATE requests  SET status=1,num1=$c1,num2=$c2, num3=$c3,num4=$c4,num5=$c5,num6=$c6,num7=$c7,num8=$c8 WHERE  id=$id";
    echo $c1."   ";
    $result = mysqli_query($con, $query);
    if ($result){
        echo "تمت الموافقه";
        header("location:../view/requ.php");
    }
    else{
        echo "ERROR " . mysqli_error($con);
    }
 } 


?>