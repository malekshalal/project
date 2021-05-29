<?php
    $username=$_GET['username'];
    $pass=$_GET['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/print.css">

    <title></title>
</head>
<!-- onload="print()"
 -->
<body onload="print()">


<img src="../view/css/image/Screenshot-5010ca2c-a01b-11eb-9b63-2e8e01ead2da.png" alt="">
<hr>
    


    <div class="body">

        <h1>

        حساب على موقع شركة التقدم 
        </h1>




        <div class="bodyright">
            <div class="print">
                <h3>
                    :اسم المستخدم
                </h3>

                <label for=""><?php echo $username ?></label>
            </div>
           <div  class="print">
                <h3>
                        :كلمة المرور            
                </h3>

                <label for=""><?php echo $pass ?></label>
           </div>

            <div  class="print">
                <h3>
                   : بريد الالكتروني            
                </h3>

                <label for=""><?php echo $username."@gmail.com" ?></label>
            </div>

        </div>

    </div>
    
</body>
</html>