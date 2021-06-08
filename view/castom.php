
<?php

session_start();
if (!isset($_SESSION['username'])){
	header("location:login.php");
	die();
}


include "../host/connection.php";
$_SESSION['width']=0;
$id=0;
$w="";
$p1=0;
$p2=0;
$p3=0;
$p4=0;
$p5=0;
$p6=0;
$p7=0;
$p8=0;
$id_product='';
$lingth='';
$_SESSION['color']='';
$l1=0;
$l2=0;
$l3=0;
$l4=0;
$l5=0;
$l6=0;
$l7=0;
$l8=0;

 if(isset($_POST['submit'])){
   $id=$_POST['width'];
   $_SESSION['width']=$_POST['width'];

 }
 if(isset($_POST['submit'])){
	$_SESSION['color']=$_POST['color'];
 
  }
 

 $query="SELECT * FROM price WHERE id =$id";
 $result=mysqli_query($con,$query);
	 if(mysqli_num_rows($result)>0){ 
		$pr=mysqli_fetch_array($result);
		$w=$pr['width'];
		$p1=$pr['p1'];
		$p2=$pr['p2'];
		$p3=$pr['p3'];
		$p4=$pr['p4'];
		$p5=$pr['p5'];
		$p6=$pr['p6'];
		$p7=$pr['p7'];
		$p8=$pr['p8'];
		$id_product=$pr['id_product'];
		
	 } 

	

 



$targetLength = -1;

$query="SELECT * FROM length WHERE 	id_product =$id_product";
 $result=mysqli_query($con,$query);
	 if(mysqli_num_rows($result)>0){ 
		$len=mysqli_fetch_array($result);
		
		$l1=$len['l1'];
		$l2=$len['l2'];
		$l3=$len['l3'];
		$l4=$len['l4'];
		$l5=$len['l5'];
		$l6=$len['l6'];
		$l7=$len['l7'];
		$l8=$len['l8'];
		
		
	 } 

$prices = array($w => array( $p1,$p2 , $p3, $p4, $p5, $p6, $p7, $p8));
$width = $w;
$lingth='';
$cntRows = 1;


if (isset($_POST['submit'])) {
	if ($_POST['length'] >= 1 && $_POST['length'] <= 10000 + 5) {

		$_SESSION["length"]=$_POST['length'];
		$targetLength = $_POST['length'];

		$targets = array();

		require_once('../model/target.php');

		$lengths = array($l1, $l2, $l3,$l4, $l5, $l6, $l7, $l8);

		for ($i = 0; $i <= $targetLength + 5; $i ++) {
			$target = new Target();
			$mnLength = -1;

			if ($i > 120) {
				$targets[$i - 120] = new Target();
			}

			foreach ($lengths as $value) {
				$prev = $i - $value;

				if ($i == $value) {
					$target->addElement($value);
					array_push($targets, $target);
					$mnLength = 0;
					break;
				} 

				if ($prev > 0 && $targets[$prev]->length > 0 ) {
					if ($mnLength == -1 || $targets[$prev]->length < $mnLength) {
						$mnLength = $targets[$prev]->length;
					}
				} 
			}

			if ($mnLength == 0) {
				continue;
			}

			foreach ($lengths as $value) {
				$prev = $i - $value;
				if ($prev > 0 && $targets[$prev]->length == $mnLength ) {
					$t = new Target($targets[$prev]);
					$t->addElement($value);
					$target->merge($t);
				}
			}
			array_push($targets, $target);
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../view/css/costom.css">
	
	<title>منتج مخصص</title>
</head>
<body>
<?php
 if($_SESSION['role']=="A"){
	include "./slidepar.php";
}elseif($_SESSION['role']=="C"){
	include "./sidebarcleint.php";
}
?>


	<section>
			<?php

			

			
		echo '<div class="lingth">';
			echo'<table ">';
				echo'<tr>';
					echo'<td><h6 class="color" style=" background-color:'.$_SESSION['color'].'">اللون</h6></td>';
					echo'<td> <h4 class="contint">'.$_SESSION['length'].' cm</h4></td>';
					echo'<td><h3 class="title">:الطول المدخل</h3></td>';
					echo'<td><h4 class="contint">'.$w.'cm</h4></td>';
					echo'<td><h3 class="title">:العرض المختار</h3></td>';
				echo'</tr>';
			echo'</table><br><hr>';
		echo '</div>';

		if ($targetLength > 0) {
			$i = $targetLength;

			while ( $i > 0 ) {
				if ($targets[$i]->length > 0) {
					break;
				}

				$i --;
			}

			if ($i == 0) {

				echo "<div class ='info'>";
					echo'<table ">';
						echo'<tr>';
							echo'<td> <h4 class="contint"> 0 </h4></tdh>';
							echo'<td><h3 class="title">:عدد المواد 	</h3></td>';
							echo'<td> <h4 class="contint"> 0 cm</h4></tdh>';
							echo'<td><h3 class="title">:الطول الكلي 	</h3></td>';
						echo'</tr>';
					echo'</table><br>';
				echo "</div>"; 	
			}
			$cun=1;
			for ($j = $i - 5; $j <= $i + 5; $j ++) {
				if ($j <= 0 || $targets[$j]->length == 0) continue;
				
				echo'<table class="info ">';
					echo'<tr>';
						echo'<td> <h4 class="contint">' . $targets[$j]->length .' </h4></tdh>';
						echo'<td><h3 class="title">:عدد المواد 	</h3></td>';
						echo'<td> <h4 class="contint"> ' . $j.' cm</h4></tdh>';
						echo'<td><h3 class="title">:الطول الكلي 	</h3></td>';
					echo'</tr>';
				echo'</table><br>';
			
				echo'<hr>';

				/* echo "<div class ='info'>";
					echo "<strong>الطول الكلي : " . $j ;
					echo "عدد المواد: " . $targets[$j]->length . "</strong><br><br>";
				echo "</div>";  */
				
				$cunt=1;
				foreach ($targets[$j]->elements as $element) {
					
					$strPrice = ' ';
					$sum = 0;
					$c1=0;
					$c2=0;
					$c3=0;
					$c4=0;
					$c5=0;
					$c6=0;
					$c7=0;
					$c8=0;


					
					

					$first = true;
					
					foreach ($element as $value) {
						
						

						$strPrice .= $prices[$width][ array_search($value, $lengths)]; 
						$sum += $prices[$width][ array_search($value, $lengths)];
						if($value==$l1){
							$c1+=1;
						}elseif($value==$l2){
							$c2+=1;
						}elseif($value==$l3){
							$c3+=1;
						}elseif($value==$l4){
							$c4+=1;
						}elseif($value==$l5){
							$c5+=1;
						}elseif($value==$l6){
							$c6+=1;
						}elseif($value==$l7){
							$c7+=1;
						}elseif($value==$l8){
							$c8+=1;
						}
						
						
						
						$first = false;
					}

					

					$_SESSION['strPrice'] =  $sum ;
					$strPrice= $sum ;
					
						echo '<form action="../controller/requests.php" method="post" >';

						
							echo "<h3 style='margin-right: 10px;'>السعر :$strPrice</h3>";
							if ( $c1>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='ci".$cunt . $cun."'  value='$c1' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l1.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='ci".$cunt . $cun."'  value='$c1' readonly> ";

							}


							if ( $c2>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cii".$cunt.$cun."'  value='$c2' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l2.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cii".$cunt.$cun."'  value='$c2' readonly> ";

							}

							if ( $c3>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='ciii".$cunt.$cun."'  value='$c3' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l3.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='ciii".$cunt.$cun."'  value='$c3' readonly> ";

							}
						
							if ( $c4>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='civ".$cunt.$cun."'  value='$c4' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l4.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='civ".$cunt.$cun."'  value='$c4' readonly> ";

							}
							if ( $c5>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cv".$cunt.$cun."'  value='$c5' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l5.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cv".$cunt.$cun."'  value='$c5' readonly> ";

							}
						
							if ( $c6>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cvi".$cunt.$cun."'  value='$c6' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l6.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cvi".$cunt.$cun."'  value='$c6' readonly> ";

							}
							if ( $c7>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cvii".$cunt.$cun."'  value='$c7' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l7.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cvii".$cunt.$cun."'  value='$c7' readonly> ";

							}
						
							if ( $c8>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cviii".$cunt.$cun."'  value='$c8' readonly> ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l8.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cviii".$cunt.$cun."'  value='$c8' readonly> ";

							}
							$date_now=date("d/m/Y");
							
							echo'<input type="date" name="date'.$cunt.$cun.'"  class="date" data-date-format="d m Y" value="'.date('Y-m-d').'" selected="selected">
							';echo '<label for="myinput">
									
									
							:    تاريخ انتهاء الطلب 
								
								
								
								
								</label>';
							/* echo  "<input class='input' type='date' name='date".$cunt.$cun."'   readonly> "; */
							echo'<center><button type="submit"  name="sub'.$cunt.$cun.'">طلب</button></center>';



				
						echo'</form>';
						$cunt+=1;
					echo "<br>";
					
					
					


					$_SESSION['u']=$cunt;
					
					
				}
				$cun+=1;	
			}
			

				$_SESSION['u2']=$cun;
			
		}
		
		?>
	</section>
	
	
</body>
</html>