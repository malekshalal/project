<?php

include "../host/connection.php";
if(isset($_POST['update'])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];
    $n5=$_POST['n5'];
    $n6=$_POST['n6'];
    $n7=$_POST['n7'];
    $n8=$_POST['n8'];
    
     $id_req=$_POST['id_req'];
    $id_product=$_POST['id_product'];   
    
   
    $id_repo=$_POST['id_repo'];
    
    $sum=$n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8;
    
    $request=mysqli_query($con,"SELECT * FROM requests WHERE id=$id_req");
    $req=mysqli_fetch_assoc($request);
    if($req['num1']===$n1 && $req['num2']===$n2 && $req['num3']===$n3 && $req['num4']===$n4 && $req['num5']===$n5 && $req['num6']===$n6 && $req['num7']===$n7 && $req['num8']===$n8){
     
      $query=mysqli_query($con,"SELECT * FROM repository WHERE id=$id_repo");
      $row=mysqli_fetch_assoc($query);
      $quantity=$row['quantity']-$sum;
      $l1=$row['l1']-$n1;
      $l2=$row['l2']-$n2;
      $l3=$row['l3']-$n3;
      $l4=$row['l4']-$n4;
      $l5=$row['l5']-$n5;
      $l6=$row['l6']-$n6;
      $l7=$row['l7']-$n7;
      $l8=$row['l8']-$n8;
     $data_out=$row['data_out']+$sum;
      
     mysqli_query($con,"UPDATE repository SET	quantity=$quantity,	l1=$l1,l2=$l2,l3=$l3,l4=$l4,l5=$l5,l6=$l6,l7=$l7,l8=$l8,data_out=$data_out WHERE id=$id_repo  ");
    /*   if ($con->query("UPDATE repository SET	quantity=$quantity,	l1=$l1,l2=$l2,l3=$l3,l4=$l4,l5=$l5,l6=$l6,l7=$l7,l8=$l8,data_out=$date_out WHERE id=$id_repo ") === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . "UPDATE repository SET	quantity=$quantity,	l1=$l1,l2=$l2,l3=$l3,l4=$l4,l5=$l5,l6=$l6,l7=$l7,l8=$l8,data_out=$date_out  " . "<br>" . $con->error;
      } */
       mysqli_query($con,"DELETE FROM requests WHERE id=$id_req");
       header("location:../view/update_repo.php");
     } else {
         
      $query=mysqli_query($con,"SELECT * FROM repository WHERE id=$id_repo");
      $row=mysqli_fetch_assoc($query);
      $quantity=$row['quantity']-$sum;
      $l1=$row['l1']-$n1;
      $l2=$row['l2']-$n2;
      $l3=$row['l3']-$n3;
      $l4=$row['l4']-$n4;
      $l5=$row['l5']-$n5;
      $l6=$row['l6']-$n6;
      $l7=$row['l7']-$n7;
      $l8=$row['l8']-$n8;
     $data_out=$row['data_out']+$sum;
      
     mysqli_query($con,"UPDATE repository SET	quantity=$quantity,	l1=$l1,l2=$l2,l3=$l3,l4=$l4,l5=$l5,l6=$l6,l7=$l7,l8=$l8,data_out=$data_out WHERE id=$id_repo  ");
     $get_req=mysqli_query($con,"SELECT * FROM requests WHERE id=$id_req");
     $row_req=mysqli_fetch_assoc($get_req);
     $num1=$row_req['num1']-$n1;
     $num2=$row_req['num2']-$n2;
     $num3=$row_req['num3']-$n3;
     $num4=$row_req['num4']-$n4;
     $num5=$row_req['num5']-$n5;
     $num6=$row_req['num6']-$n6;
     $num7=$row_req['num7']-$n7;
     $num8=$row_req['num8']-$n8;
     mysqli_query($con,"UPDATE requests SET	num1=$num1,num2=$num2,num3=$num3,num4=$num4,num5=$num5,num6=$num6,num7=$num7,num8=$num8 where id=$id_req");
     header("location:../view/update_repo.php");

        
    }
   
}



?>