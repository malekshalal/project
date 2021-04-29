<?php
session_start();
include "../host/connection.php";
$id=$_SESSION['id'];
$time=time();
$res=mysqli_query($con,"SELECT * from users where typeuser != 'C' AND typeuser !='A'");
$i=1;
$html='';
while($row=mysqli_fetch_assoc($res)){
	$status='غير متصل';
	$class="btn-danger";
	$type="";
		if($row['typeuser']=="M"){
			$type=" التصنيع";
		}elseif($row['typeuser']=="R"){
			$type=" المخزن";
		}/* else{
			$type="مدير";
		} */
	if($row['last_login']>$time){
		$status='متصل';
		$class="btn-success";
		
	}
	$html.='<tr>
				<td><a href="../controller/deletuser.php?id='.$id.'"><i class="fas fa-user-minus"></i></a></td>
				<td><button type="button" class="btn '.$class.'">'.$status.'</button></td>
				<td>'.$type.'</td>
				<td style="text-align: center;">'.$row['username'].'</td>
                <th scope="row">'.$i.'</th>
                  

				  
               </tr>';
	$i++;
}
echo $html;
?>