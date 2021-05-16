<?php
session_start(); 
include "../host/connection.php";
$date_now=date("Y-m-d");
$date_end=0;
$username=$_SESSION["id"];
$id_prod= $_SESSION['id_prod'];
$id_price= $_SESSION['width'];
$color=	$_SESSION['color'];
    $i=0;
   

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  } 
   $i=1;
   $j=1;
   while($i<=$_SESSION['u']+1){
       for($j=1;$j<=$_SESSION['u2'];$j++){
           if(isset($_POST['sub'.$i.$j.''])){
              if(isset($_POST['ci'.$i.$j.''])){}
            $c1=$_POST['ci'.$i.$j.''];
            $c2=$_POST['cii'.$i.$j.''];
            $c3=$_POST['ciii'.$i.$j.''];
            $c4=$_POST['civ'.$i.$j.''];
            $c5=$_POST['cv'.$i.$j.''];
            $c6=$_POST['cvi'.$i.$j.''];
            $c7=$_POST['cvii'.$i.$j.''];
            $c8=$_POST['cviii'.$i.$j.''];

            
             
                
            $query="INSERT INTO requests (username,id_prod,id_price,color,Application_date,end_date,num1,num2,num3,num4,num5,num6,num7,num8) 
            VALUES ('$username','$id_prod','$id_price','$color','$date_now','$date_end','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8') ";
            $result = mysqli_query($con, $query); 
            header("Location:../view/selectproduct.php");
           

               
               continue;
               

           } 
            
          
       }
       $i++;
       
         
   }
   
  
  

?>

