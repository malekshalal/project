<?php
include "../host/connection.php";
if(isset($_POST['creat'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $color=$_POST['color'];
    $img=$_FILES['image']['name'];
   
    $tempname = $_FILES["image"]['tmp_name'];    
        $folder = "../img/".$img;
    $cat=$_POST['cat'];
    $repo=$_POST['repo'];
    $price=$_POST['price'];
     $insert=mysqli_query($con,"INSERT INTO product (number,id_cat,id_repo,name,color,image,price) VALUES ('$number','$cat','$repo','$name','$color','$img','$price') ");
     if($insert){
        move_uploaded_file($tempname, $folder);
    }
 
}

?>
