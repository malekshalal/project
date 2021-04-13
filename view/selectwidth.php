<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("location:login.php");
        die();
    }
    include "../host/connection.php";

   
    

 


?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view//css/selsct_product.css">

    <title>اختر العرض</title>
</head>
<body>
    <?php
    include "navclint.php";
    ?>
    <form action="../view/castom.php " method="post">
    
        <div class="select">



            <h3 for="product"> اختر عرض المنتج</h3>

            <select name="width" id="" class="option" required>
            <option value="" selected="selected" disabled="disabled" >اختر عرض المنتج</option>



            <?php
             if(!isset($_POST['selectwidth'])){
                $id_product=$_POST['product'];
                
                $query="SELECT * FROM price WHERE id_product =$id_product";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while( $width=mysqli_fetch_assoc($result)){
            ?>
               
                <option value="<?php echo $width['id']?>"><?php echo $width['width']?></option>

                <?php
        }
        ?>
         <?php
         }else{
            echo '<option value="" disabled="disabled" >  لا يوجد اطوال </option>';

             
         }
        
        }
         ?>
            
            </select>        
             <center><button name="submit" class=" center "> التالي</button></center>
        </div>


        
    
    
    </form>
</body>
</html>