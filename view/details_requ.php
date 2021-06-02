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
    <title>تحميل الطلب</title>
</head>
<!-- onload="print()"
 --><body  >
    <?php
    
    include "../host/connection.php";
    if(!isset($_GET['id'])){
        header("location:../view/update_repo.php");
    
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
					
					<td><h4 class="contint"></h4></td>
					<td><h3 class="title"><?php echo $row2["width"];?>:العرض المختار</h3></td>
                    
				</tr>
			</table><br><hr>
		</div>
        <br>
        <br>
                    <?php
                    echo'<center class="print">';
                       
					
                         
							
							if ( $row['num1']>0 ) {
								echo '<div>';
								
									echo'<label for="myinput">
                                        '.$c1.'

                                    </label>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l1.'
										
										
										
										
										</label>';
								echo '</div>';
                                echo '<div>';
								
									echo'<input class="input" name="n1"  type="number" required>';
								
									echo '<label for="myinput">
									
									
									:عدد المواد المحمله من قياس '.$l1.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n1" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
								
                                echo'<input class="input" name="n2" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l2.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n2" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
								
                                echo'<input class="input" name="n3" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l3.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n3" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
								
                                echo'<input class="input" name="n4" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l4.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n4" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
								
                                echo'<input class="input" name="n5" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l5.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n5" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
								
                                echo'<input class="input" name="n6" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l6.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n6" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
								
                                echo'<input class="input" name="n7" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l7.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n7" value="0" type="hidden" >';
                            
                                
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
                                echo '<div>';
                                    
                                echo'<input class="input" name="n8" type="number" required>';
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المحمله من قياس '.$l8.'
                                    
                                    
                                    
                                    
                                    </label>';
                                echo '</div>';
							}else{
                                echo '<div>';
								
                                echo'<input class="input" name="n8" value="0" type="hidden" >';
                            
                                
                            echo '</div>';
                            }
                       echo '</center>';
                    ?>
                    <br><br><br><br><br>
    
    </section>
</body>
</html>