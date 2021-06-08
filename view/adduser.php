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
    <link rel="stylesheet" href="../view/css/adduser.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>
    
@media screen and (max-width: 999px )  {
   
   
   /* to perfect image in all screen size  */
  html { 
   background:url(../view/css/image/dark-paper.jpg);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  
  
  
  
  }

  @media screen and (min-width: 1000px) {


   /* to perfect image in all screen size  */
  html { 
   background:url(../view/css/image/dark-paper.jpg);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  
  
  
  }
    </style>
    <title>مستخدم جديد/Taqaddom Scales Co. Lts.</title>
</head>
<body>
    <?php
     include "./slidepar.php";
     
     
     $error="";
     if (isset($_GET['Erorr'])){
         if($_GET['Erorr']==2){
             $error="الاسم مستخدم";
         }
     }


    ?><section>
        <br>
    <div class="regform"><h1>انشاء حساب موظف جديد</h1></div>
    <div class="body">
        <form action="../controller/createuser.php" method="post" >
            
           <div class="div">
            <h2 class="name">اسم المستخدم</h2>
            <input class="input" type="text" name="name"pattern="[A-Za-z]{0,20}" title="ادخل الاسم باللغة الانجليزية" placeholder="ادخل اسم المستخدم" required><br>
                
           </div>
           <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error;?></p>

                
            
           
 
           <!--  <div class="div">
                <h2 class="name">البريد الالكتروني</h2>
                <input class="input" type="email" name="email" placeholder="ادخل البريد الالكتروني" required> 
            </div> -->
            
            <div class="div">
                <h2 class="name">هاتف</h2>
                <input class=" input " type="text" name="phone" pattern="[0-9]{9,10}" placeholder="ادخل رقم الهاتف" title="الرقم مكون من9 -10 خانات   " required> 
               
                
            </div>

            <div class="div">
                <h2 class="name">نوع الحساب</h2>
                <select class="option"  name="type" required >
                    <option disabled="disabled" selected="selected" value=""  >اختر نوع الحساب</option>
                    <option value="R">مسؤول مخزن</option>
                    <option value="M">مسؤول التصنيع</option>
                </select>
            </div>
            
             

            <center><button type="submit"  name="reg">انشاء</button> </center>

        </form>
    
    </div>

    </section>
    
</body>
</html>