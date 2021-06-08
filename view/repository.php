<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }
  include "../host/connection.php";

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/repository.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <title>المنتجات</title>
</head>
<body>
    <?php
    include "./sliderepo.php";


    $result=mysqli_query($con,"SELECT * FROM product ")

    ?>

    <section>
    <br>
    

        <div class="table_container">
            <h1 class="heading"> المنتجات</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>طباعة تقرير</th>
                        <th>سعر المنتج</th>
                        <th>لون المنتج</th>
                        <th> الكمية المتوفرة</th>
                        <th> المخزن</th>
                        <th>اسم الصنف</th>
                        <th>اسم المنتج</th>
                        <th>#</th>
                    
                    </tr>
                    <tbody>
                   <?php
                   $i=1;
                   while($row=mysqli_fetch_assoc($result)){
                       $id=$row['id'];
                       $id_cat=$row['id_cat'];
                       $result3=mysqli_query($con,"SELECT name FROM category WHERE id= $id_cat");
                       $row3=mysqli_fetch_assoc($result3);
                       $result2=mysqli_query($con,"SELECT * FROM store WHERE id_product= $id");
                       while($row2=mysqli_fetch_assoc($result2)){


                        $id_repository=$row2['id_repo'];
                        $user=$_SESSION['id'];
                        $get_repo=mysqli_query($con,"SELECT * FROM repository WHERE id= $id_repository AND id_user=$user");
                        while($row5=mysqli_fetch_assoc($get_repo)){
                       

                        
                       
                   ?>
                        <tr>
                        
                            <td  data-label="طباعة تقرير"><a class="btn" href="../view/report.php?id=<?php echo $id?>&&id_repo=<?php echo $id_repository?>"><i class="fas fa-file-contract"></i></a></td>
                            <td data-label=" السعر"><?php echo $row['price']  ?></td>
                            <td  style=" background-color:<?php echo $row['color'] ?>" data-label=" اللون">اللون</td>
                            <td data-label=" الكميه المتوفه"><?php echo $row5["quantity"]   ?></td>
                            <td data-label="اسم المخزن "><?php echo $row5["name"]   ?> </td>
                            <td data-label=" اسم الصنف"><?php echo $row3['name']?> </td>
                            <td data-label=" اسم المنتج"><?php echo $row['name']   ?> </td>
                            <td data-label="#"><?php echo $i;      ?></td>
                        
                        
                        </tr>
                       
                       
                        
                       

                    
                    
                    <?php
                     
                        $i++;
                       }
                     } 
                    }
                    ?>
                    </tbody>
                
                </thead>
            
            
            </table>
        
        
        </div>
    
    
    
    
    </section>
</body>
</html>