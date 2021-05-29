<?php

session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="../view/css/image/logo.png">
      <link rel="stylesheet" href="../view/css/add_repo.css">
      <title>اضافة مخزن</title>
  </head>
  <body>
      <?php
      include "./slidepar.php";
      include "../host/connection.php";
      $query=mysqli_query($con,"SELECT * FROM users WHERE typeuser='R' ");
      $query2=mysqli_query($con,"SELECT * FROM category ");
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
              echo '<script>alert("تم انشاء المخزن")</script>';
          }
      }

      ?>
        <section>
            <br>
            <div class="form"><h1> مخزن جديد</h1></div>
            <div class="body">
            
                <form action="../controller/add_repo.php" method="post">
            
                <div class="div">
                    <h2 class="name"> اسم المخزن</h2>
                    <input class="input" type="text" name="name"pattern="[أ-ي[ ]]{0,20}" title="ادخل الاسم باللغة العربيه" placeholder="ادخل اسم المخزن" required><br>
                    
                </div>
                <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error;?></p>
            
                <div class="div">
                    <h2 class="name"> رقم المخزن</h2>
                    <input class="input" type="number" name="number"pattern="[9-1]{0,11}" title="رقم المخزن كبير   " placeholder="ادخل رقم المخزن " required><br>
                    
                 </div>

                <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error2;?></p>

                <div class="div">
                    <h2 class="name"> مسؤول المخزن</h2>
                    <select class="option"  name="user" required >
                        <option disabled="disabled" selected="selected" value=""  > اختر الموظف المسؤول عن المخزن </option>
                        
                                <?php

                                if(mysqli_num_rows($query)>0){
                                    while($user=mysqli_fetch_assoc($query)){


                                ?>
                                <option value="<?php echo $user['id']?>"><?php echo $user['username']?></option>

                                <?php
                                }
                                ?>
                                <?php
                                }else{



                                echo '<option value="" disabled="disabled" require>  لا يوجد موظفين   </option>';





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