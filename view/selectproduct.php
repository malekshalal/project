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

    
    if (isset($_GET['massege'])){
        if($_GET['massege']==1){
         
            echo '<script type="text/javascript">';
            echo 'window.alert("  تم الطلب بانتظار الموافقه ")';  
            echo '</script>';
        }
    }


     if($_SESSION['role']=="A"){
        include "./slidepar.php";
    }elseif($_SESSION['role']=="C"){
        include "./sidebarcleint.php";
    }
    ?>
    <section>
        <br>
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
    </section>
</body>
</html>