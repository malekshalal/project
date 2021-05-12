

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/slidec.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title></title>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>
            <?php

           
                echo '<i class="fas fa-user"></i>';  
               echo "        مرحبا" ;
               echo $_SESSION['username']."  " ;
            ?>
        </header>



        <ul>
            <li> <a href="../view/client.php"> المنتجات</a></li>
            <li> <a href="../view/selectproduct.php">منتج مخصص</a></li>
            <li> <a href="../logout.php"> تسجيل الخروج</a></li>
        </ul>


    </div>
    
</body>
</html>