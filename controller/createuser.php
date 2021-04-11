<?php
include "../host/connection.php";
include "../controller/generatepass.php";
$username = $_POST['name'];
$password=generatepassword();
$email=$_POST['name']."@gmail.com";
$phone=$_POST['phone'] ;
$type=$_POST['type'];

if(isset($_POST['reg'])){

    $query = "SELECT * FROM users WHERE username = '$username'";  
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result)>0){

        header("Location:../view/adduser.php?Erorr=2");
        

    }else{
        $query="INSERT INTO users (username,password,email,phone,typeuser) VALUES ('$username','$password','$email',$phone,'$type')";
        $result=mysqli_query($con,$query);
        

        
       /*  // Authorisation details.
        $username = "malekshalaldeh@gmail.com";
        $hash = "6e774e0ecbb551d18e839bd14a37c2782780f0e707c75d79fdae0af0142e24df";
    
        // Config variables. Consult http://api.txtlocal.com/docs for more info.
        $test = "0";
    
        // Data for text message. This is the text message data.
        $sender = "API Test"; // This is who the message appears to be from.
        $numbers = "$phone"; // A single number or a comma-seperated list of numbers
        $message = "تم انشاء حساب لك على موقع 
        http://taqaddom.ps/
        
        اسم مستخدم :".$username."كلمة المرور :".$password;
        // 612 chars or less
        // A single number or a comma-seperated list of numbers
        $message = urlencode($message);
        $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
        $ch = curl_init('http://api.txtlocal.com/send/?');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch); // This is the result from the API
        curl_close($ch);
   

        echo '<script>alert("تم انشاء الحساب وارسال البيانات الى رقم هاتف $phone")</script>';
        header("Location:../view/users.php"); */


        header("Location:../view/print.php?username=$username&&password=$password");
    }

}
?>