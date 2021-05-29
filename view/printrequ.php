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
<body onload="print()" >
    <?php
    
    include "../host/connection.php";
    if(!isset($_GET['id'])){
        header("location:../view/manufacturing.php");
    
    }
   
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
	$date_end=$row['end_date'];




    $price=$row['id_price'];
    $result2=mysqli_query($con,"SELECT * FROM price WHERE id =$price ");
    $row2=mysqli_fetch_assoc($result2);
    
    $lingth=$row['id_prod'];
	/* echo $lingth; */
    $result3=mysqli_query($con,"SELECT * FROM length WHERE id_product  =$lingth ");
    $row3=mysqli_fetch_assoc($result3);
    $l1=$row3['l1'];
    $l2=$row3['l2'];
    $l3=$row3['l3'];
    $l4=$row3['l4'];
    $l5=$row3['l5'];
    $l6=$row3['l6'];
    $l7=$row3['l7'];
    $l8=$row3['l8'];
   
    ?>
    <img src="../view/css/image/Screenshot-5010ca2c-a01b-11eb-9b63-2e8e01ead2da.png" alt="">
    <hr>
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
                    echo'<center class="print">';
                       
					echo '<div>';
								
						echo'<label for="myinput">
							'.$date_end.'

					</label>';
				
					echo '<label for="myinput">
					
					
					:تاريخ انتهاء الطلب     
						
						
						
						
						</label>';
				echo '</div>';
                         
							
							if ( $row['num1']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c1.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l1.'
										
										
										
										
										</label>';
								echo '</div>';
							}


							if ( $row['num2']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c2.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l2.'
										
										
										
										
										</label>';
								echo '</div>';
							}

							if ( $row['num3']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c3.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l3.'
										
										
										
										
										</label>';
								echo '</div>';
							}
						
							if ($row['num4']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c4.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l4.'
										
										
										
										
										</label>';
								echo '</div>';
							}
							if ( $row['num5']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c5.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l5.'
										
										
										
										
										</label>';
								echo '</div>';
							}
						
							if ( $row['num6']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c6.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l6.'
										
										
										
										
										</label>';
								echo '</div>';
							}
							if ( $row['num7']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c7.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l7.'
										
										
										
										
										</label>';
								echo '</div>';
							}
						
							if ( $row['num8']>0 ) {
                                echo '<div>';
								
                                echo'<label for="myinput">
                                    '.$c8.'

                                </label>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المطلوبة من قياس '.$l8.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}
                       echo '</center>';
                    ?>
    
    </section>
</body>
</html>