<?php
session_start();
include "../host/connection.php";
if(isset($_POST['creat'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $color=$_POST['color'];
    $img=$_FILES['image']['name'];
   
    /* $tempname = $_FILES["image"]['tmp_name'];    
        $folder = "../img/".$img; */
    $cat=$_POST['cat'];
    $repo=$_POST['repo'];
    $price=$_POST['price'];
    
    /*  $insert=mysqli_query($con,"INSERT INTO product (number,id_cat,id_repo,name,color,image,price) VALUES ('$number','$cat','$repo','$name','$color','$img','$price') ");
     if($insert){
        move_uploaded_file($tempname, $folder);
    } */
    $get_num_repo=mysqli_query($con,"SELECT * FROM repository WHERE id=$repo");
    $row=mysqli_fetch_assoc($get_num_repo);
    $name_repo=$row['name'];
    $number_repo=$row['number'];
  
    $id_user=$_SESSION["id"];


    
    
    $result = mysqli_query($con,"SELECT MAX(id) FROM repository");
    $row = mysqli_fetch_row($result);
    $highest_id = $row[0]+1;
  
    
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
      // Upload file
      if(move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$img)){
         
         $image = 'data:image/'.$imageFileType;
         // Insert record
         $check_name=mysqli_query($con,"SELECT * FROM product WHERE name='$name' ");
         $check_number=mysqli_query($con,"SELECT * FROM product WHERE id='$number' ");
         if(mysqli_num_rows($check_name)>0){
            header("Location:../view/add_product.php?Erorr=5");
    
        }elseif(mysqli_num_rows($check_number)>0){
            header("Location:../view/add_product.php?Erorr2=6");
        }else{
        $insert_repo=mysqli_query($con,"INSERT INTO repository (id,number ,name,	id_user ) VALUES ('$highest_id','$number_repo','$name_repo','$id_user') ");
 
           $insert=mysqli_query($con,"INSERT INTO product (id,id_cat,id_repo,name,color,image,price) VALUES ('$number','$cat','$highest_id ','$name','$color','$img','$price') ");
          
           $insert_story=mysqli_query($con,"INSERT INTO store (id_repo,id_product) VALUES('$highest_id','  $number') ");
          
           header("Location:../view/add_lingth_product.php?id_product=$number");
     
        }

      }

    }else{
        header("Location:../view/add_product.php?Erorr3=7");
      }











}

?>
