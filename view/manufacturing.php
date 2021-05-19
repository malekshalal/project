<?php
session_start();
include "../host/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/users.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلبات التصنيع</title>
</head>
<body>
    <?php
    include "../view/slidemanuf.php";
    $now=date("y-m-d");
    $result=mysqli_query($con,"SELECT * FROM requests WHERE status=1 ");
    if (isset($_GET['massege'])==2){
       
         
            echo '<script type="text/javascript">';
            echo 'window.alert("        تم التخزين   ")';  
            echo '</script>';
        
    }
    ?>
    <section>
        <br>
        <div class="container">
            <h2 class="text-center text-info">قائمة الطلبات</h2>
            
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th width="5%"><i class="fas fa-check"> انتهاء الانتاج</i></th>
                <th width="5%"><i class="fas fa-print"> طباعه</i></th>
                <th width="25%">حالة الطلب</th>
                    
                <th width="10%">عرض المنتج</th>
                <th width="25%">اسم المنتج</th>
               

                <th width="5%">#</th>
                </tr>
                
            </thead>
            <tbody id="user_grid">
                <?php 
                
                $i=1;
                while($row=mysqli_fetch_assoc($result)){
                $status=' بانتظار انتهاء التصنيع ';
                $class="btn-success";
                $type='';
                
                
               
                if($row['end_date']<$now){
                $status='   انتهت صلاحية الطلب ';
                $class="btn-danger";

                }
                ?>	
                <tr>
                    <td><a href="../view/save_materials.php?id=<?php echo $row['id']  ?>"><i class="fas fa-check"></i></a></td>
                    <td><a href="../view/printrequ.php?id=<?php echo $row['id']  ?>"><i class="fas fa-print"></i></a></td>
                    <td><button type="button" class="btn <?php echo $class?>"><?php echo $status?></button></td>
                    
                    <td style="text-align: center;"><?php $price=$row['id_price'];
                            $result4=mysqli_query($con,"SELECT * FROM price WHERE id =$price ");
                            $row4=mysqli_fetch_assoc($result4);
                            echo $row4["width"];
                    ?>
                    </td>


                    <td style="text-align: center;"><?php $prod=$row['id_prod'];
                            $result3=mysqli_query($con,"SELECT * FROM product WHERE id =$prod ");
                            $row3=mysqli_fetch_assoc($result3);
                            echo $row3["name"];
                    ?>
                    </td>


                    
                    <th scope="row"><?php echo $i?></th>
                </tr>
                <?php 
                $i++;
                } ?>



                
            </tbody>
            </table>
        </div>



    </section>

    
</body>
</html>