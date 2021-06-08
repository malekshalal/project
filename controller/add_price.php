<?php
include "../host/connection.php";
$number = count($_POST["name"]);
if($number >=1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["name"][$i] && $_POST["name1"][$i] && $_POST["name2"][$i] && $_POST["name3"][$i] && $_POST["name4"][$i] && $_POST["name5"][$i] && $_POST["name6"][$i] && $_POST["name7"][$i] && $_POST["name8"][$i] != ''))
		{ 
            $id_prod=$_POST['id'];
            $width=mysqli_real_escape_string($con, $_POST["name"][$i]);
            $p1=mysqli_real_escape_string($con, $_POST["name1"][$i]);
            $p2=mysqli_real_escape_string($con, $_POST["name2"][$i]);
            $p3=mysqli_real_escape_string($con, $_POST["name3"][$i]);
            $p4=mysqli_real_escape_string($con, $_POST["name4"][$i]);
            $p5=mysqli_real_escape_string($con, $_POST["name5"][$i]);
            $p6=mysqli_real_escape_string($con, $_POST["name6"][$i]);
            $p7=mysqli_real_escape_string($con, $_POST["name7"][$i]);
            $p8=mysqli_real_escape_string($con, $_POST["name8"][$i]);
           
			$sql = "INSERT INTO price (width,p1,p2,p3,p4,p5,p6,p7,p8,id_product ) VALUES('$width','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$id_prod')";
			mysqli_query($con, $sql); 
            
		}
	}
	echo "تم اضافه العرض و السعر";
    

}

?>