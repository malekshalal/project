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
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/report.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقرير المنتج</title>
</head>

<?php
if(isset($_POST['print'])){
    echo '<body style="background: none;" onload="print()">';
    echo '<style>
    table tr td{
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.35px;
    
    opacity: 1;
    padding: 12px;
    vertical-align: top;
    border :1px solid #dee2e685;

    }
</style>';
    
}else{
    echo '<body style="background: #32312f;">';

    echo '<style>
    h3{
        color:white
    }
    table tr td{
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.35px;
    color:  #ffffff;
    opacity: 1;
    padding: 12px;
    vertical-align: top;
    border :1px solid #dee2e685;

    }
</style>';
}


  
    include "./sliderepo.php";
    if(isset($_GET['id']  )&& isset($_GET['id_repo'])){
        $id_product=$_GET['id'];
        $id_repository=$_GET['id_repo'];
        //echo $id_product;
        //echo $id_ripository;
    }else{
        header("../viwe/repository.php");
    }
    $result_producr=mysqli_query($con," SELECT * FROM product WHERE id=$id_product");
    $row_product=mysqli_fetch_assoc($result_producr);
    $id_cat=$row_product['id_cat'];
    $result_category=mysqli_query($con,"SELECT name FROM category WHERE id=$id_cat");
    $row_category=mysqli_fetch_assoc($result_category);
    $result_repository=mysqli_query($con,"SELECT * FROM repository WHERE id=$id_repository");
    $row_repository=mysqli_fetch_assoc($result_repository);
    $result_length_product=mysqli_query($con,"SELECT * FROM length WHERE id_product =$id_product");
    $row_lingth_product=mysqli_fetch_assoc($result_length_product);

    ?>
    
   
    
    <section>
        <div class="content">
            <h3 style="text-align:center;font-size:23px; ">تقرير المنتج</h3>
            <br>
            <br>
            <table>
                <tr>
                    
                    <td><label for="">السعر :</label><?php echo  $row_product['price']?>شيقل</td>
                    <td><label for=""> الصنف:</label><?php echo $row_category['name']?></td>
                    <td><label for="">اسم المنتج:</label><?php echo  $row_product['name']?></td>
                    

                </tr>
                

                <tr>
                    
                    <td style="text-align:center;" colspan="3"><label  for=""> مخزن:</label><?php echo  $row_repository['name']?></td>
                
                </tr>

                <tr>
                    <td ><label for=""> الكمية الخارجه:</label><?php echo  $row_repository['data_out']?></td>
                    <td ><label for=""> الكمية المدخلة:</label><?php echo  $row_repository['data_in']?></td>
                    <td ><label for=""> الكمية المتوفره:</label><?php echo  $row_repository['quantity']?></td>

                </tr>
                <tr>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l3'] ?></label> <label for="">:<?php echo $row_lingth_product['l3']  ?> عدد قياس </label>   </td>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l2'] ?></label> <label for="">:<?php echo $row_lingth_product['l2']  ?> عدد قياس </label>   </td>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l1'] ?></label> <label for="">:<?php echo $row_lingth_product['l1']  ?> عدد قياس </label>   </td>
                </tr>
                <tr>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l6'] ?></label> <label for="">:<?php echo $row_lingth_product['l6']  ?> عدد قياس </label>   </td>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l5'] ?></label> <label for="">:<?php echo $row_lingth_product['l5']  ?> عدد قياس </label>   </td>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l4'] ?></label> <label for="">:<?php echo $row_lingth_product['l4']  ?> عدد قياس </label>   </td>
                </tr>
                <tr>
<!--                 style="border-right-style: hidden;"
 -->                    
                    <td rowspan="2"><label for=""> :التوقيع</td>
                    <td > <label style="font-size: 14px; " ><?php  echo  $row_repository['l8'] ?></label> <label for="">:<?php echo $row_lingth_product['l8']  ?> عدد قياس </label>   </td>
                    <td > <label style="font-size: 14px;" ><?php  echo  $row_repository['l7'] ?></label> <label for="">:<?php echo $row_lingth_product['l7']  ?> عدد قياس </label>   </td>
                </tr>


                <tr>
                    
                   
                    <td><label for=""> تاريخ الطباعه:</label><?php echo $date_now=date("Y-m-d");?></td>
                    <td><?php echo  $_SESSION['username']?><label for="">:اسم المستخدم</label></td>
                    

                </tr>
                
                


            </table>
        </div>  
        
 
    </section>
    <?php
    if(isset($_POST['print'])){

    }else{
       echo' <form  method="post">';
           echo ' <button name="print">طباعه</button>';
       echo ' </form>';
    }



?>
   

</body>
</html>