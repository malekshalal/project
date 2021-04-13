
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

 if(isset($_POST['submit'])){
   $id=$_POST['width'];

 }
 echo $id;

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
		
	 } 

	

 



$targetLength = -1;
$prices = array($w => array( $p1,$p2 , $p3, $p4, $p5, $p6, $p7, $p8));
$width = $w;
$cntRows = 1;
/* 
if (isset($_GET['width'])) {
	$width = $_GET['width'];
} */

// if (isset($_GET['row'])) {
// 	$cntRows = $_GET['row'];
// }

if (isset($_GET['length'])) {
	if ($_GET['length'] >= 1 && $_GET['length'] <= 10000 + 5) {
		$targetLength = $_GET['length'];
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
	<title>Calculator</title>
</head>
<body>
	<form method="GET" action="?">
		

		Length: <input type="number" id="length" name="length" min="1" max="10000" value="<?php if ($targetLength > 0) echo $targetLength; ?>">	
		<!-- Number of Rows: <input type="number" name="row" min="1" value="<?php echo $cntRows; ?>">
		<input type="submit" value="Calculate"> -->
	</form>
	
	<?php
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
						
						if (!$first) {


							

                              

							echo ", ";
							
						} 

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
						echo $value;
						
						
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


					echo"<button>print</button>";

					echo"<br><br>";
				}
				
			}
		}
	?>
</body>
</html>