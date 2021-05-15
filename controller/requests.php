<?php
session_start(); 
include "../host/connection.php";
$date_now=date("Y/m/d");
$date_end=0;
$cunt=$_SESSION['u'];
$cun=$_SESSION['u2'];
    $i=0;
   

    
   $i=1;
   $j=1;
   while($i<=$_SESSION['u']+1){
       for($j=1;$j<=$_SESSION['u2'];$j++){
           if(isset($_POST['sub'.$i.$j.''])){
              
            $c1=$_POST['ci'.$i.$j.''];
            $c2=$_POST['cii'.$i.$j.''];
            $c3=$_POST['ciii'.$i.$j.''];
            $c4=$_POST['civ'.$i.$j.''];
            $c5=$_POST['cv'.$i.$j.''];
            $c6=$_POST['cvi'.$i.$j.''];
            $c7=$_POST['cvii'.$i.$j.''];
            $c8=$_POST['cviii'.$i.$j.''];
               echo $c1; 
               echo $c2;
               echo $c3;
               echo $c4;
               echo $c5;
               echo $c6;
               echo $c7;
               echo $c8;
               continue;

           } /* elseif(isset($_POST['sub'.$i.$j.''])){

            $c1=$_POST['ci'.$i.$j.''];
            $c2=$_POST['cii'.$i.$j.''];
            $c3=$_POST['ciii'.$i.$j.''];
            $c4=$_POST['civ'.$i.$j.''];
            $c5=$_POST['cv'.$i.$j.''];
            $c6=$_POST['cvi'.$i.$j.''];
            $c7=$_POST['cvii'.$i.$j.''];
            $c8=$_POST['cviii'.$i.$j.''];
               echo $c1; 
               echo $c2;
               echo $c3;
               echo $c4;
               echo $c5;
               echo $c6;
               echo $c7;
               echo $c8;
               continue;
           } */ /*  else{
               echo $i.$j;
               echo "<br>";
           } 
              */  
           
           /* $j++; */
            
          
       }
       $i++;
       
         
   }







?>

