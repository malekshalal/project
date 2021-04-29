<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/adduser.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>مستخدم جديد/Taqaddom Scales Co. Lts.</title>
</head>
<body>
    <?php
     include "./navadmin.php";
     
     
     $error="";
     if (isset($_GET['Erorr'])){
         if($_GET['Erorr']==2){
             $error="الاسم مستخدم";
         }
     }


    ?>
    <div class="regform"><h1>انشاء حساب موظف جديد</h1></div>
    <div class="body">
        <form action="../controller/createuser.php" method="post" >
            
           <div class="div">
            <h2 class="name">اسم المستخدم</h2>
            <input class="input" type="text" name="name" placeholder="ادخل اسم المستخدم" required><br>
                
           </div>
           <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error;?></p>

                
            
           
 
           <!--  <div class="div">
                <h2 class="name">البريد الالكتروني</h2>
                <input class="input" type="email" name="email" placeholder="ادخل البريد الالكتروني" required> 
            </div> -->
            
            <div class="div">
                <h2 class="name">هاتف</h2>
                <input class=" input " type="text" name="phone"  placeholder="ادخل رقم الهاتف المكون من 7 خانات" required> 
               
                
            </div>

            <div class="div">
                <h2 class="name">نوع الحساب</h2>
                <select class="option"  name="type" required >
                    <option disabled="disabled" selected="selected" value=""  >اختر نوع الحساب</option>
                    <option value="M">مسؤول مخزن</option>
                    <option value="R">مسؤول التصنيع</option>
                </select>
            </div>
            
             

            <center><button type="submit"  name="reg">انشاء</button> </center>

        </form>
    
    </div>

    
</body>
</html>