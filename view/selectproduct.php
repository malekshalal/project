<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("location:login.php");
        die();
    }
    include "../host/connection.php";
    $query="SELECT * FROM product";
    $result=mysqli_query($con,$query);

 


?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view//css/selsct_product.css">

    <title>اختر منتج</title>
</head>
<body>
    <?php
    include "navclint.php";
    ?>
    <form action="../view/selectwidth.php " method="post">
    
        <div class="select">
            <h3 for="product"> اختر نوع المنتج</h3>

            <select name=" product" id="" class="option" required>
            <option value="" selected="selected" disabled="disabled" >اختر نوع المنتج</option>

            <?php

                if(mysqli_num_rows($result)>0){
                    while( $product=mysqli_fetch_assoc($result)){


            ?>
                <option value="<?php echo $product['id']?>"><?php echo $product['name']?></option>

                <?php
        }
        ?>
         <?php
         }else{



            echo '<option value="" disabled="disabled" require>  لا يوجد منتجات </option>';




             
         }
         ?>
            
            </select> 
            
            
            <?php
            if(mysqli_num_rows($result)>0){
             echo' <center><button class=" center " > التالي</button></center>';
            }else{
                echo '<center><button class=" center " name="select"> <a href="../view/client.php">الغاء</a></button></center>';
            }

             ?>
        </div>


        
    
    
    </form>
</body>
</html>