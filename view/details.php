<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/details.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الطلب</title>
</head>
<body>
    <?php
    include "./slidepar.php";
    include "../host/connection.php";
    if(!isset($_GET['id'])){
        header("location:../view/requ.php");
    
    }
    $_SESSION['idu']=$_GET['id'];
	$id=$_GET['id'];
    $query = "SELECT * FROM requests WHERE id=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    $c1=$row['num1'];
    $c2=$row['num2'];
    $c3=$row['num3'];
    $c4=$row['num4'];
    $c5=$row['num5'];
    $c6=$row['num6'];
    $c7=$row['num7'];
    $c8=$row['num8'];




    $price=$row['id_price'];
    $result2=mysqli_query($con,"SELECT * FROM price WHERE id =$price ");
    $row2=mysqli_fetch_assoc($result2);
    $l1=$row2['p1'];
    $l2=$row2['p2'];
    $l3=$row2['p3'];
    $l4=$row2['p4'];
    $l5=$row2['p5'];
    $l6=$row2['p6'];
    $l7=$row2['p7'];
    $l8=$row2['p8'];
    $sum=$l1*$c1+$l2*$c2+$l3*$c3+$l4*$c4+$l5*$c5+$l6*$c6+$l7*$c7+$l8*$c8;
    ?>
    <section>
    <br>
    

    <div class="lingth">
			<table>
				<tr>
					<td><h6 class="color" style=" background-color:<?php echo $row['color']?>">اللون</h6></td>
					<td> <h4 class="contint"><?php echo $row['length']?> cm</h4></td>
					<td><h3 class="title">:الطول المدخل</h3></td>
					<td><h4 class="contint"><?php echo $row2["width"];?></h4></td>
					<td><h3 class="title">:العرض المختار</h3></td>
				</tr>
			</table><br><hr>
		</div>
        <br>
        <br>
                    <?php
                    echo'<center>';
                        echo '<form action="../controller/update_req_status.php" method="post" >';

                            echo "<h3 style='margin-right: 10px;'>السعر :$sum</h3>";
							echo "<input class='input' type='hidden' name='id'  value='$id ' > ";
							if ( $row['num1']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='ci'  value='$c1 ' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l1.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='ci'  value='$c1' > ";

							}


							if ( $row['num2']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cii'  value='$c2' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l2.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cii'  value='$c2'  > ";

							}

							if ( $row['num3']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='ciii'  value='$c3' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l3.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='ciii'  value='$c3' > ";

							}
						
							if ($row['num4']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='civ'  value='$c4' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l4.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='civ'  value='$c4' > ";

							}
							if ( $row['num5']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cv'  value='$c5' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l5.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cv'  value='$c5' > ";

							}
						
							if ( $row['num6']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cvi'  value='$c6' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l6.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cvi'  value='$c6' > ";

							}
							if ( $row['num7']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cvii'  value='$c7' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l7.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cvii'  value='$c7' > ";

							}
						
							if ( $row['num8']>0 ) {
								echo '<div>';
								
									echo "<input class='input' type='text' name='cviii'  value='$c8' > ";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l8.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
								echo "<input class='input' type='hidden' name='cviii'  value='$c8' > ";

							}
                            
							if( $_SESSION['role']=="A"){
								echo'<center><button type="submit"  name="sub">موافق</button></center>';
							}
                        
				
						echo'</form>';
                        echo '</center>';
                    ?>
    
    </section>
</body>
</html>