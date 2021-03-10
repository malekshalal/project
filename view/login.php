<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/login.css">
    
    <title>تسجيل الدخول/Taqaddom Scales Co. Lts.</title>
</head>
<body>
    <div class="header">
        <img  alt=""   src="../view/css/image/logo.png" style="width: 60px;height: 83%; float: right;border:1px white solid ;border-radius: 8px;background: rgba(255,255,255,0.1) ">
    </div>

<?php
    $error="";
    if (isset($_GET['Erorr'])){
        if($_GET['Erorr']==1){
            $error="خطأ اسم المستخدم او كلمة المرور";
        }
    }

?>


    <form class="loginform" action="../controller/check.php" method="post" onsubmet()>
        <center><img src="../view/css/image/logo.png" alt=""></center>
        
        <h3 style="text-align: center;">تسجيل الدخول</h3>

        <div class="input-container">
            <i class="fas fa-user icon"></i>
            <input class="input-field" type="text" name="username" id="" placholder="اسم المستخدم" required>
        </div>

        <div class="input-container">
            <i class="fas fa-key icon"></i>
            <input  class="input-field" type="password" name="password" id="myInput" placeholde="كلمة المرور" required>
            <script>
                function myFunction() {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
        </div>
        <div style="font-size: 5px;margin-top: 0px;color: white"> 
            <input type="checkbox" onclick="myFunction()">Show
        </div>


        


        <div >
            <input   class="input-field" type="submit" name="login" value="تسجيل الدخول "  >
        </div>

        <p class="error" style="color:red;text-align:center;"><?php echo $error;?></p>
        
    </form>
    
</body>
</html>