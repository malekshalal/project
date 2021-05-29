<?php


?>
<!DOCTYPE html>
<html lang="AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/sidebar.css">
   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>المستخدمن/Taqaddom Scales Co. Lts.</title></head>
<body>
<input type="checkbox" id="check">
    <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
    </label>
    <nav class="sidebar">
        <header>
            <?php

                echo '<br>';
                echo '<i class="fas fa-user"></i>';  
                echo "        مرحبا" ;
                echo $_SESSION['username']."  " ;
                echo '<br>';
            ?>
        </header>



        <ul>
            <li> <a href="./admin.php"> المنتجات</a></li>
            <li ><a  href="#" class="req-btn">الطلبات
                    <span class="fas fa-caret-down  r"> </span>
                </a>
                <ul class="req-show">
                    <li>  <a href="requ.php"> قائمة الطلبات</a></li>
                    <li> <a href="selectproduct.php"> طلب منتج</a></li>
                </ul>
            </li>
            <li >
                <a  href="#" class="user-btn"> الموظفين
                    <span class="fas fa-caret-down  f"> </span>
                </a>
                <ul class="user-show">
                    <li>  <a href="adduser.php">اضافة موظف</a></li>
                    <li> <a href="users.php">لوحة الموظفين</a></li>
                </ul>
            </li>
            <li> <a href="../view/add_repository.php"> اضافة مخزن </a></li>
            <li> <a href="../logout.php"> تسجيل الخروج</a></li>
        </ul>
        
        
</nav>
<script>
        $('.user-btn').click(function(){
            $('nav ul .user-show').toggleClass("show");
            $('nav ul .f').toggleClass("rotate");
        });
        $('.req-btn').click(function(){
            $('nav ul .req-show').toggleClass("show1");
            $('nav ul .r').toggleClass("rotate");
        });
       $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("acrive");
       });
</script>
    

</body>
</html>