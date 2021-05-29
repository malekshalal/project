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
    <link rel="stylesheet" href="../view/css/requ.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>قائمة الطلبات</title>
</head>
<body>

<?php
if( $_SESSION['role']=="A"){
include "./slidepar.php";
}elseif($_SESSION['role']=="C"){
     include "./sidebarcleint.php";
}

if (isset($_GET['massege'])){
     if($_GET['massege']==1){
      
         echo '<script type="text/javascript">';
         echo 'window.alert("  تم الطلب بانتظار الموافقه ")';  
         echo '</script>';
     }
 }
?>
<section>
<br>
   <?php
          if( $_SESSION['role']=="A"){
               $result=mysqli_query($con,"SELECT * FROM requests ");
          }elseif($_SESSION['role']=="C"){
               $idu=$_SESSION["id"];
               $result=mysqli_query($con,"SELECT * FROM requests WHERE username=$idu ");
          }
       
        $now=date("y-m-d");

    ?>
   <div class="container">
        <h2 class="text-center text-info">قائمة الطلبات</h2>
        
        <table class="table table-striped table-bordered">
           <thead>
              <tr>
               <th width="5%"><i class="fas fa-trash"></i></th>
               <th width="5%"><i class="fas fa-info"> تفاصيل</i></th>
               <th width="25%">حالة الطلب</th>
                 
               <th width="10%">عرض المنتج</th>
               <th width="25%">اسم المنتج</th>
               <?php
               if( $_SESSION['role']=="A"){
              echo' <th width="50%"> صاحب الطلب</th>';
          }?>

               <th width="5%">#</th>
              </tr>
              
           </thead>
           <tbody id="user_grid">
              <?php 
              
              $i=1;
              while($row=mysqli_fetch_assoc($result)){
              $status='لم يتم الموافقه';
              
              $type='';
              if($row['end_date']>$now){
               $status=' انتهت صلاحية الطلب';
               $class="btn-danger";

              }else{
                    if($row['status']==0){

                         $status;
                         $class="btn-wait";
     
                    }elseif($row['status']==1){
     
                         $status='تمت الموافقه';
                         $class="btn-done";
     
                    }elseif($row['status']==2){
     
                    $status='الطلب جاهز ';
                    $class="btn-success";
                    
                    }
              }
              
              ?>	
              <tr>
                   <td><a  href="../controller/deletrequ.php?id=<?php echo $row['id']  ?>"><i class="fas fa-trash"></i></a></td>
                   <?php if($row['end_date']>=$now){
                         
                         echo '<td disabled="disabled" ><i class="fas fa-info" style="color: red;"></i></td>';

                         }else{
                              echo'<td><a href="../view/details.php?id='. $row['id'].'"><i class="fas fa-info" "></i></a></td>';
                         }

                   ?>
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


                   <td style="text-align: center;"><?php $id_user=$row['username'];
                        $result2=mysqli_query($con,"SELECT * FROM users WHERE id =$id_user ");
                        $row2=mysqli_fetch_assoc($result2);
                        echo $row2["username"];
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