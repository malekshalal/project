<?php
include "../host/connection.php";
include "../controller/generatepass.php";
$username = $_POST['name'];
$passwordp=generatepassword();
$email=$_POST['name']."@gmail.com";
$phone=$_POST['phone'] ;
$type=$_POST['type'];

if(isset($_POST['reg'])){

    $query = "SELECT * FROM users WHERE username = '$username'";  
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result)>0){

        header("Location:../view/adduser.php?Erorr=2");
        

    }else{
        $password=md5($passwordp);
        $query="INSERT INTO users (username,password,email,phone,typeuser) VALUES ('$username','$password','$email',$phone,'$type')";
        $result=mysqli_query($con,$query);
        

        
      


        header("Location:../view/print.php?username=$username&&password=$passwordp");
    }

}
?>