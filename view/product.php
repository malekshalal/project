<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }
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

    ?>


    <section>

       <div class="container">
            <div class="slide">
                <ul>
                    <li>
                        <a href="#">
                            <span class="title">asdfgdhn</span>
                        </a>
                    </li>
                    <li><a href="#">
                            cghm
                        </a>
                    </li>
                    <li><a href="#">
                            sdgbg
                        </a>
                    </li>
                    <li><a href="#">
                            adsgsb
                        </a>
                    </li>
                    <li><a href="#">
                            afbgf
                        </a>
                    </li>
                    <li><a href="#">
                           fdsbgf
                        </a>
                    </li>
                </ul>
            </div>
            
       </div>




       <div class="container_BOX">
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
            <div class="box"  style="text-overflow: ellipsis;  overflow: hidden;" ><h4><a href="./product.php?id="></a></h4></div>
        </div>

       


    </section>


    
</body>
</html>