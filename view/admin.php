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
   <!--  <div class="header">
            <img  alt=""   src="../view/css/image/logo.png" style="width: 60px;height: 83%; float: right;border:1px white solid ;border-radius: 8px;background: rgba(255,255,255,0.1) ">

            <form   action="" method="POST"  style="width: 200px;margin-left: 5px;height: 100%;">
                <BUTTON> <a href="../logout.php">تسجيل الخروج</a></BUTTON>
                
            </form>
    </div> -->
   
    <nav  >
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
        </label>
        <label for="" class="logo"><img  alt=""   src="../view/css/image/logo.png" style="width: 77px;height: 83%; float: right;border:1px white solid ;border-radius: 8px;background: rgba(255,255,255,0.1);margin-top: 5px;margin-right:5px "></label>
        <ul>
            
            <li><a class="active" href="#">المنتجات</a></li>
            <li><a href="#">منتج مخصص</a></li>
            <li><a href="#">اضافة مستخدم</a></li>
            <li style="float:left" ><a href="../logout.php">تسجيل الخروج</a></li>
            
            
            
            

             
        </ul>
       
    </nav>
    <section>
        
    <div class="container">
        
        <div class="box" ><h4><a href="#">موازين</a></h4></div>
        <div class="box"><a href="#">خزاين</a></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        


    </div>
    </section>


   
   
    

    
   

    
</body>
</html>