<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }else{
      if($_SESSION['role']=="A"){
          header("location:../view/admin.php");  

      }elseif($_SESSION['role']=="C"){
          header("location:../view/client.php");

      }elseif($_SESSION['role']=="M"){
        header("location:../view/manufacturing.php");

    }


 } 
 ?>  
 
  
 
  