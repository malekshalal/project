<?php

$connect=mysqli_connect("localhost","root","","app");

session_start();
 if (isset($_POST['login'])){
     
    $username = mysqli_real_escape_string($connect, $_POST["username"]);  
    $password = mysqli_real_escape_string($connect, $_POST["password"]);  
      /*   $password = md5($password);   */
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
        
    $result = mysqli_query($connect, $query);
    $user=mysqli_fetch_array($result);
    if (mysqli_num_rows($result)>0){
        $_SESSION["username"]=$username;
         $_SESSION['role']=$user["typeuser"];
            header("location:entry.php"); 
    }else{
        header('Location:../view/login.php?Erorr=1');
             

    }
     
 }




?>