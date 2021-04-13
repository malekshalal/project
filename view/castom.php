
<?php

session_start();
if (!isset($_SESSION['username'])){
	header("location:login.php");
	die();
}


include "../host/connection.php";
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
$color='';
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

 }
 if(isset($_POST['submit'])){
	$color=$_POST['color'];
 
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

$prices = array($w => array( $l1,$l2 , $l3, $l4, $l5, $l6, $l7, $l8));
$width = $w;
$lingth='';
$cntRows = 1;


if (isset($_POST['submit'])) {
	if ($_POST['length'] >= 1 && $_POST['length'] <= 10000 + 5) {

		$lingth=$_POST['length'];
		$targetLength = $_POST['length'];

		$targets = array();

		require_once('../model/target.php');

		$lengths = array(50, 60, 70, 80, 90, 100, 110, 117);

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

	include "../view/navclint.php";

	
		/* echo '<div class="lingth"'; */
			echo'<table ">';
				echo'<tr>';
					
					
					
				
					echo'<td><h6 class="color" style=" background-color:'.$color.'">اللون</h6></td>';
					
					echo'<td> <h4 class="contint">'.$lingth.' cm</h4></td>';
					echo'<td><h3 class="title">:الطول المدخل</h3></td>';
					echo'<td><h4 class="contint">'.$w.'cm</h4></td>';
					echo'<td><h3 class="title">:العرض المختار</h3></td>';
				
				echo'</tr>';
			
			echo'</table><br><hr>';
				
		/* echo '</div>'; */

		if ($targetLength > 0) {
			$i = $targetLength;

			while ( $i > 0 ) {
				if ($targets[$i]->length > 0) {
					break;
				}

				$i --;
			}

			if ($i == 0) {

				
				echo "<br><strong>الطول الكلي: 0<br>";
				echo "عدد المواد: 0</strong><br><br>";
			}

			for ($j = $i - 5; $j <= $i + 5; $j ++) {
				if ($j <= 0 || $targets[$j]->length == 0) continue;

				echo "<br><strong>الطول الكلي : " . $j . "<br>";
				echo "عدد المواد: " . $targets[$j]->length . "</strong><br><br>";
				
				

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
						 if($value==110){
							$c1+=1;
						}elseif($value==117){
							$c2+=1;
						}elseif($value==100){
							$c3+=1;
						}elseif($value==90){
							$c4+=1;
						}elseif($value==80){
							$c5+=1;
						}elseif($value==70){
							$c6+=1;
						}elseif($value==60){
							$c7+=1;
						}elseif($value==50){
							$c8+=1;
						}
						
						
						
						$first = false;
					}
					echo "<br>";
					if ( $c1>0 ) {
						echo"<br>";
						echo "عدد المواد المطلوبة من قياس 110:<lable>$c1</lable>"."<br>";
					}
					if ( $c2>0 ){
						echo "عدد المواد المطلوبة من قياس 117:<lable>$c2</lable>"."<br>";


					} 
					if ( $c3>0 ){
						echo "عدد المواد المطلوبة من قياس 100:<lable>$c3</lable>"."<br>";


					} 
					 if ( $c4>0 ){
						echo "عدد المواد المطلوبة من قياس 90:<lable>$c4</lable>"."<br>";


					} 
					if ( $c5>0 ){
						echo "عدد المواد المطلوبة من قياس 80:<lable>$c5</lable>"."<br>";


					} 
					if ( $c6>0 ){
						echo "عدد المواد المطلوبة من قياس 70:<lable>$c6</lable>"."<br>";


					} 
					if ( $c7>0 ){
						echo "عدد المواد المطلوبة من قياس 60:<lable>$c7</lable>"."<br>";


					} 
					if ( $c8>0 ){
						echo "عدد المواد المطلوبة من قياس 50:<lable>$c8</lable>"."<br>";


					}

					  
					
					echo "<br>";
					
					$strPrice =  $sum ;
					echo "<br>";
					echo "price =". $strPrice . "<br><br>";


					echo"<center><button>طلب</button></center>";

					echo"<br><br>";
				}
				
			}
		}
	?>
</body>
</html>