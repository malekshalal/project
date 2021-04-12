<?php
    $error='';
   if (isset($_GET['Erorr'])){
    if($_GET['Erorr']==2){
        $error="الاسم مستخدم";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/adduser.css">
    <link rel="icon" href="../view/css/image/logo.png">

    <title> انشاء حساب</title>
</head>
<body>
<div class="regform"><h1>انشاء حساب  جديد</h1></div>
    <div class="body">
        <form action="../controller/reguser.php" method="post" >
            
           <div class="div">
            <h2 class="name">اسم المستخدم</h2>
            <input class="input" type="text" name="name" placeholder="ادخل اسم المستخدم" required><br>
                
           </div>
           <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error;?></p>

           <div class="div">
            <h2 class="name"> كلمة المرور</h2>
            <input class="input" type="password" name="pass" placeholder="ادخل كلمة المرور" required><br>
                
           </div>
           <!-- <div class="div">
            <h2 class="name">  تحقق كلمة المرور </h2>
            <input class="input" type="password" name="confpass" placeholder="ادخل كلمة المرور" required><br>
                
           </div> -->
<!--            <p class="error" id="check" style="color:red;text-align:center;display: none;    font-size: 17px;">كلمة المرور مختلفة</p>
 -->
            
           
 
             <div class="div">
                <h2 class="name">البريد الالكتروني</h2>
                <input class="input" type="email" name="email" placeholder="ادخل البريد الالكتروني" required> 
            </div>
            
            <div class="div">
                <h2 class="name">هاتف</h2>
                <input class=" input " type="text" name="phone"  placeholder="ادخل رقم الهاتف المكون من 7 خانات" required> 
               
                
            </div>
            <center><button class="button" type="submit"  name="reg">انشاء</button> </center>

            
           
            

        </form>


      

    
    </div>

    <!-- <script >
        document.querySelector('.button').onclick=function(){
            var pass=document.querySelector('.pass').value;
            var confpass=document.querySelector('.confpass').value;
            if(pass != confpass){
                alert ("كلمة المرور غير متوافقه");
            }
        }
        
        
        </script> -->
</body>
</html>