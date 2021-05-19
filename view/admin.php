<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../view/css/admin.css">
    <title>مدير الشركة/Taqaddom Scales Co. Lts.</title>
</head>
<body>
    <?php
        include "./slidepar.php";
        include "../host/connection.php";
        $conn=mysqli_connect("localhost","root","","app");
        $query="SELECT * FROM category WHERE Special=1  ";
        $result=mysqli_query($con,$query);
       
        
    ?>
   
    <section>
        
    <div class="container">

    
        <?php
       if (mysqli_num_rows($result)>0){
        while( $category=mysqli_fetch_assoc($result)){
            
            
            ?>
            
            
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" >
            <h4><a href="./product.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a></h4></div>
            
        <?php
        }
        ?>
         <?php
         }else{
            echo '<script type="text/javascript">';
            echo 'window.alert("لا يوجد منتجات حاليا")';  
            echo '</script>';  
           echo' <center><div class="box" style=" width:67%; "  ><h4 style ="color:red;font-size: 22px;">لايوجد منتجات متوفره حاليا </h4></div></center>';
         }
         ?> 

</div>
        
        
        
        


    </div>
    </section>


   
   
    

    
   

    
</body>
</html>