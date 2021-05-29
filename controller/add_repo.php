<?php
include "../host/connection.php";
if(isset($_POST['creat'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $user=$_POST['user'];
    
    $query=mysqli_query($con,"SELECT name FROM repository WHERE name='$name'");
    $query2=mysqli_query($con,"SELECT number FROM repository WHERE 	number='$number'");
    if(mysqli_num_rows($query)>0){
        header("Location:../view/add_repository.php?Erorr=5");

    }elseif(mysqli_num_rows($query2)>0){
        header("Location:../view/add_repository.php?Erorr2=6");
    }else{
        $query="INSERT INTO repository (number,name,id_user ) VALUES ('$number','$name','$user')";
        $result=mysqli_query($con,$query);
        header("Location:../view/add_repository.php?massege=10"); 
        /* if ($con->query($query) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $query . "<br>" . $con->error;
          } */
          
          
    }

}

?>