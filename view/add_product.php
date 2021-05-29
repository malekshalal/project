<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }

  include "../host/connection.php";
  $category=mysqli_query($con,"SELECT * FROM category");
  $repository=mysqli_query($con,"SELECT * FROM repository GROUP BY number");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../view/css/add_repo.css">
    <link rel="icon" href="../view/css/image/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .name{
   
    color: #000;
   
    
    }
    </style>
    <title>اضافة منتج</title>
</head>
<body style="background: white;">
<?php
include "./sliderepo.php";
      $error="";
      $error2="";
      if (isset($_GET['Erorr'])){
          if($_GET['Erorr']==5){
              $error="الاسم مستخدم";
          }
      }elseif(isset($_GET['Erorr2'])){
        if($_GET['Erorr2']==6){
            $error2="الرقم مستخدم";
        }
      }elseif(isset($_GET['massege'])){
          if($_GET['massege']==10){
              echo '<script>alert("تم  اضافة مخزن")</script>';
          }
      }


?>


<section>
            <br>
            <div class="form" style="color:black;"><h1>اضافة منتج</h1></div>
            <div class="body">
            
                <form action="../controller/add_prod.php" method="post" enctype="multipart/form-data">
            
                <div class="div">
                    <h2 class="name"> اسم المنتج</h2>
                    <input class="input" type="text" name="name"pattern="[أ-ي[ ]]{0,20}" title="ادخل الاسم باللغة العربيه" placeholder="ادخل اسم المنتج" required><br>
                    
                </div>
                <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error;?></p>
            
                <div class="div">
                    <h2 class="name"> رقم المنتج</h2>
                    <input class="input" type="number" name="number"pattern="[9-1]{1,11}" title="رقم المنتج كبير   " placeholder="ادخل رقم المنتج " required><br>
                    
                 </div>

                 <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error2;?></p>

                 <div class="div">
                    <h2 class="name"> سعر المنتج</h2>
                    <input class="input" type="number" name="price"pattern="[9-1]{1,11}" title="رقم المنتج كبير   " placeholder="ادخل سعر المنتج " required><br>
                    
                 </div>
                 <div class="div">
                    <h2 class="name"> لون المنتج </h2>
                    <input class="color" type="color"  name="color" value="#0000">
                 </div>
                 
                    
                    <input   type="file" value="تحميل صوره" name="image"  required>
                 

               
                <div class="div">
                    <h2 class="name">  اختار الصنف</h2>
                    <select class="option"  name="cat" required >
                        <option disabled="disabled" selected="selected" value=""  > اختر صنف المنتج </option>
                        
                        <?php
         
                            if(mysqli_num_rows($category)>0){
                                 while( $cat=mysqli_fetch_assoc($category)){
                         ?>
           
                         <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>

                         <?php
                            }
        
                    
                                }else{
                                    echo '<option value="" disabled="disabled" >  لا يوجد اصناف </option>';

            
                                }
    
                        
                            ?>
                    </select>
                </div>



                <div class="div">
                    <h2 class="name">  اختار المخزن</h2>
                    <select class="option"  name="repo" required >
                        <option disabled="disabled" selected="selected" value=""  > اختر  المخزن </option>
                        
                        <?php
         
                                if(mysqli_num_rows($repository)>0){
                                    while( $repo=mysqli_fetch_assoc($repository)){
                        ?>

                            <option value="<?php echo $repo['id']?>"><?php echo $repo['name']?></option>

                            <?php
                                }

                        
                                    }else{
                                        echo '<option value="" disabled="disabled" >  لا يوجد مخازن </option>';


                                    }

                    
                            ?>
                    </select>
                </div>




                  


                
                <center><button name="creat">انشاء</button></center>
            
                </form>

            </div>



        </section>
    
</body>
</html>