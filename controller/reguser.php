<?php
$username = $_POST['name'];
$password=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'] ;
$type="C";

include "../host/connection.php";


if(isset($_POST['reg'])){

    $query = "SELECT * FROM users WHERE username = '$username'";  
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result)>0){

        header("Location:../view/Registration.php?Erorr=2");
        

    }else{
        $password = md5($password);  
        $query="INSERT INTO users (username,password,email,phone,typeuser) VALUES ('$username','$password','$email',$phone,'$type')";
        $result=mysqli_query($con,$query);
        

    
      


        header("Location:../view/login.php");
    }

}
?>