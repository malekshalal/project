<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }

  $id= $_GET['id'];
?>
<!DOCTYPE html>
<html lang="AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <title>المنتجات/Taqaddom Scales Co. Lts.</title>
</head>
<body>
    <?php
    include "./navadmin.php";


     
        
        $conn=mysqli_connect("localhost","root","","app");
       
       
        
    
   

    ?>


    <section>

       <div class="container">
            <div class="slide">
                <ul>
                    <?php
                        $query1="SELECT * FROM category  ";
                        $result1=mysqli_query($conn,$query1);
                        

                        if(mysqli_num_rows($result1)>0){
                            while( $category=mysqli_fetch_assoc($result1)){
                        
                    ?>
                    <li>
                        <a href="product.php?id=<?php echo $category['id'];?>">
                            <span class="title"><?php echo $category['name'];?></span>
                        </a>
                    </li>
                    <hr>
                    <?php
                        }
                    }else{
                        echo '<script type="text/javascript">';
                        echo 'window.alert("لا يوجد منتجات حاليا")';  
                        echo '</script>';
                    }
                    ?>
                        

                   
                </ul>
            </div>
            
       </div>




       <div class="container_BOX">
           <?php
                $query2="SELECT * FROM product WHERE id_cat = $id  ";
                $result2=mysqli_query($conn,$query2);
                

                if(mysqli_num_rows($result2)>0){
                    while( $product=mysqli_fetch_assoc($result2)){

           ?>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4> <?php echo $product['name'];?> </h4>

                        
                <img src="<?php echo $product['image'] ?>" alt="">

                <div class="price">
                    <h5 >price :<?php echo  $product['price']; ?></h5>
                </div>
                        
            </div>
            <?php
                        }
                    }else{?>
                        <center><div class="box" style=" width:67%; "  ><h4 style ="color:red;font-size: 22px;">لايوجد منتجات متوفره حاليا </h4></div></center>
                    <?php    
                    }
                    ?>
            
        </div>
               
       

    
     
    </div>


    </section>


    
</body>
</html>