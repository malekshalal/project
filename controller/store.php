<?php
include "../host/connection.php";
if(isset($_POST['sub'])){

    $id_req=$_POST['id_req'];
    $id_user=$_POST['id_user'];
    $id_prod=$_POST['id_prod'];
    $id_length=$_POST['id_length'];
    $ci=$_POST['ci'];
    $cii=$_POST['cii'];
    $ciii=$_POST['ciii'];
    $select=$_POST['select'];
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];
    $c3=$_POST['c3'];
    $c4=$_POST['c4'];
    $c5=$_POST['c5'];
    $c6=$_POST['c6'];
    $c7=$_POST['c7'];
    $c8=$_POST['c8'];


    $result=mysqli_query($con,"SELECT * FROM repository WHERE id =$select ");
    $row=mysqli_fetch_assoc($result);
        if($row['id_product']==$id_prod){ 
            $sum=$row['quantity']+$cii;
            $l1=$row['l1']+$c1;
            $l2=$row['l2']+$c2;
            $l3=$row['l3']+$c3;
            $l4=$row['l4']+$c4;
            $l5=$row['l5']+$c5;
            $l6=$row['l6']+$c6;
            $l7=$row['l7']+$c7;
            $l8=$row['l8']+$c8;

            
            mysqli_query($con,"UPDATE  requests SET status=2 WHERE  id=$id_req");

            
             mysqli_query($con,"UPDATE  repository SET 	quantity=$sum ,l1=$l1,l2=$l2,l3=$l3,l4=$l4,l5=$l5,l6=$l6,l7=$l7,l8=$l8
             WHERE id =$select AND id_product=$id_prod");


            mysqli_query($con,"INSERT INTO  manufacturing(id_user,succeded,fail,id_requests ,id_product ,id_length ,quantity) VALUES
                ('$id_user','$cii','$ciii','$id_req','$id_prod','$id_length','$ci') ");
            
            header('Location:../view/manufacturing.php?massege=2');
         }  else{
            
            header('Location:../view/save_materials.php?Erorr=3&id='.$id_prod.''); 
        } 
     
}



?>