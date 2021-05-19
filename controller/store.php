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
    $result=mysqli_query($con,"SELECT * FROM repository WHERE id =$select ");
    $row=mysqli_fetch_assoc($result);
        if($row['id_product']==$id_prod){
            $sum=$row['quantity']+$cii;
            mysqli_query($con,"UPDATE  repository SET 	quantity=$sum");
            mysqli_query($con,"INSERT INTO  manufacturing(id_user,succeded,fail,id_requests ,id_product ,id_length ,quantity) VALUES
                ('$id_user','$cii','$ciii','$id_req','$id_prod','$id_length','$ci') ");
            
            header('Location:../view/manufacturing.php?massege=2');
        }else{
            
            header('Location:../view/save_materials.php?Erorr=3&id='.$id_prod.''); 
        }
     
}



?>