<?php
session_start();
include "../host/connection.php";
$id=$_SESSION['id'];
$time=time();
$res=mysqli_query($con,"select * from users");
$i=1;
$html='';
while($row=mysqli_fetch_assoc($res)){
	$status='Offline';
	$class="btn-danger";
	$type="";
		if($row['typeuser']=="M"){
			$type=" التصنيع";
		}elseif($row['typeuser']=="R"){
			$type=" المخزن";
		}else{
			$type="مدير";
		}
	if($row['last_login']>$time){
		$status='Online';
		$class="btn-success";
		
	}
	$html.='<tr>
                  <th scope="row">'.$i.'</th>
                  <td>'.$row['username'].'</td>
				  <td>'.$type.'</td>
                  <td><button type="button" class="btn '.$class.'">'.$status.'</button></td>
				  <td><a href="../controller/deletuser.php?id='.$id.'"><i class="fas fa-user-minus"></i></a></td>

				  
               </tr>';
	$i++;
}
echo $html;
?>