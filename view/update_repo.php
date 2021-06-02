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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/css/requ.css">
    <style>
    
@media screen and (min-width: 1000px) {


  
html { 
  background:#32312f no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



}








@media screen and (max-width: 999px )  {


 /* to perfect image in all screen size  */
html { 
  background: #32312f no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
}
    
    </style>

    <title>طلبات التحميل</title>
</head>
<body>
    <?php
        include "./sliderepo.php";
        $result=mysqli_query($con,"SELECT * FROM requests WHERE status=2");
        $row=mysqli_fetch_assoc($result);
    ?>
    <section>
<br>
  
   <div class="container">
        <h2 class="text-center text-info">قائمة الطلبات</h2>
        
        <table class="table table-striped table-bordered">
           <thead>
              <tr>
               
               <th width="5%"><i class="fas fa-info"> تفاصيل</i></th>
               
                 
               <th width="10%"> صاحب الطلب</th>
               <th width="25%">اسم المنتج</th>
              

               <th width="5%">رقم الطلب</th>
              </tr>
              
           </thead>
           <tbody id="user_grid">
             	
              <tr>

                        <td><a href="../view/details_requ.php?id=<?php echo $row['id']?>"><i class="fas fa-info" ></i></a></td>
                        

                   

                   <td style="text-align: center;"><?php $id_user=$row['username'];
                        $result3=mysqli_query($con,"SELECT * FROM users WHERE id =$id_user ");
                        $row3=mysqli_fetch_assoc($result3);
                        echo $row3["username"];
                   ?>
                   </td>


                   <td style="text-align: center;"><?php $id_prod=$row['id_prod'];
                        $result2=mysqli_query($con,"SELECT * FROM product WHERE id =$id_prod ");
                        $row2=mysqli_fetch_assoc($result2);
                        echo $row2["name"];
                    ?>
                   </td>
                   <th scope="row"><?php echo $row['id']?></th>
            </tr>
              


              
           </tbody>
        </table>
     </div>
</section>
    
</body>
</html>