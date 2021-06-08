<?php
session_start();
include "../host/connection.php";
if(isset($_POST['creat'])){
    $name=$_POST['name'];
    $repo=$_POST['repo'];
    $color=$_POST['color'];
    $img=$_FILES['image']['name'];
    $target_dir = "../img/";
    $special=0;
    if(isset($_POST['foo'])==1){
        $special=1;  
    }
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");
    if( in_array($imageFileType,$extensions_arr) ){
        // Upload file
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$img)){
           
           $image = 'data:image/'.$imageFileType;
           // Insert record
           $check_name=mysqli_query($con,"SELECT * FROM category WHERE name='$name' ");
           
           if(mysqli_num_rows($check_name)>0){
              header("Location:../view/add_category.php?Erorr=5");
      
          }else{
          $insert_cat=mysqli_query($con,"INSERT INTO category (name,image,Special,id_repo ) VALUES ('$name','$img','$special','$repo') ");
   
            
            
             header("Location:../view/add_category.php?massege=2");
       
          }
  
        }
  
      }else{
        header("Location:../view/add_category.php?Erorr3=7");
      }
}

?>