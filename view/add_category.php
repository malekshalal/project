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
    <link rel="stylesheet" href="../view/css/add_repo.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @media screen and (min-width: 1000px) {


  
html { 
  background: #32312f no-repeat center center fixed; 
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
    <title>اضافة صنف</title>
</head>
<body>
<?php
include "./sliderepo.php";
$error="";
$error2="";
if (isset($_GET['Erorr'])){
    if($_GET['Erorr']==5){
        $error="الاسم مستخدم";
    }
}elseif(isset($_GET['Erorr3'])){
    if($_GET['Erorr3']==7){
        echo '<script>alert("صيغة الصوره غير صحيحه")</script>';
    }
}elseif(isset($_GET['massege'])){
    if($_GET['massege']==2){
        echo '<script>alert("تم انشاء صنف جديد")</script>';
 
    }
}


$repository=mysqli_query($con,"SELECT * FROM repository GROUP BY number");
?>

<section>
            <br>
            <div class="form" ><h1>اضافة صنف</h1></div>
            <div class="body">
            
                <form action="../controller/add_cat.php" method="post" enctype="multipart/form-data">
            
                <div class="div">
                    <h2 class="name"> اسم الصنف</h2>
                    <input class="input" type="text" name="name"pattern="[أ-ي\s]{0,20}" title="ادخل الاسم باللغة العربيه" placeholder="ادخل اسم الصنف" required><br>
                    
                </div>
                <p class="error" style="color:red;text-align:center;     font-size: 17px;"><?php echo $error;?></p>
            
               

                

                 
               
                 
                    
                    <input   type="file" value="تحميل صوره" name="image"  required>
                 

               
                    <div class="div">
                    <h2 class="name" > صنف مميز </h2>
                    <input style="margin-top: 50px;text-align: right;margin-left: 74%;" type="checkbox" name="foo" value="1"> 
                    
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