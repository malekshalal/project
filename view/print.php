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

<!-- <div class="hedar">


    <div class="right">
    <h4>
        TAQADDOM SCALES CO. LTD.NEIROUKH BROS.

        </h4>
        <h4>
            فلسطين -الخليل
        </h4>

        <h4>
           العنوان : المنطقة الصناعية
        </h4>
        <h4>
       صندوق رقم :408
        </h4>
        <h4>
            هاتف رقم:+972 2 2259830
        </h4>
        <h4>
            فاكس رقم:+972 2 2226827
        </h4>
        <h4>
              info@taqaddom.com:بريد الكتروني
        </h4>
    </div>

    <div class="image">
              <img src="../view/css/image/logo.png" alt="">

    </div>
    <div class="left">
        <h4>
        TAQADDOM SCALES CO. LTD.NEIROUKH BROS.

        </h4>
        <h4>
            Hebron - Palestine
        </h4>

        <h4>
            Address : Industrial Zone
        </h4>
        <h4>
        P.O.Box : 408
        </h4>
        <h4>
        phone    : +972 2 2259830

        </h4>
        <h4>
        Fax         : +972 2 2226827

        </h4>
        <h4>
        E-mail : info@taqaddom.com


        </h4>
    </div>
</div> -->
<img src="../view/css/image/Screenshot.png" alt="">
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