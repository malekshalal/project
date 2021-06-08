<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }
  include "../host/connection.php";

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../view/css/add_repo.css">
    <link rel="icon" href="../view/css/image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @media screen and (min-width: 1000px) {


  
html { 
  background: #32312f no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



}








@media screen and (max-width: 999px )  {


 /* to perfect image in all screen size  */
html { 
  background: #32312f no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
}
    </style>
    <title> اطوال المنتج</title>
</head>
<body>
    <?php
    include "./sliderepo.php";
    if(!isset($_GET['id_produc'])){
      header("../viwe/add_product.php");
    }
    $id_product=$_GET['id_product'];
    ?>

<section>

            <br>
            <div class="form" ><h1>اضافة اطوال المنتج</h1></div>
            <div class="body">
            
                <form action="../controller/add_lingth.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_prod" value=" <?php echo $id_product ?>">
            
                <div class="div">
                    <h2 class="name">  الطول الاول</h2>
                    <input class="input" type="number" name="l1" min="0" max="120" placeholder="ادخل الطول الاول " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name"> الطول الثاني</h2>
                    <input class="input" type="number" name="l2" min="0" max="120" placeholder="ادخل الطول الثاني " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name">  الطول الثالث</h2>
                    <input class="input" type="number" name="l3" min="0" max="120" placeholder="ادخل الطول الثالث " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name">  الطول الرابع</h2>
                    <input class="input" type="number" name="l4" min="0" max="120" placeholder="ادخل الطول الرابع " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name">  الطول الخامس</h2>
                    <input class="input" type="number" name="l5" min="0" max="120" placeholder="ادخل الطول الخامس " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name">  الطول السادس</h2>
                    <input class="input" type="number" name="l6" min="0" max="120" placeholder="ادخل الطول السادس " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name">  الطول السابع</h2>
                    <input class="input" type="number" name="l7" min="0" max="120" placeholder="ادخل الطول السابع " required><br>
                    
                </div>
                <div class="div">
                    <h2 class="name">  الطول الثامن</h2>
                    <input class="input" type="number" name="l8" min="0" max="120" placeholder="ادخل الطول الثامن " required><br>
                    
                </div>

                
                <center><button name="creat">اضافه</button></center>
            
                </form>

            </div>



        </section>
    

</body>
</html>