<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/details.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انتهاء التصنيع </title>
    <style>
        .option{
    
    position: relative;
    margin-top: 5px;
    margin-bottom: 30px;
    
    top: 17px;
    margin-right: 15px;
    line-height: 40px;
    width: 400px;
    height: 46px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
    outline: none;
    overflow: hidden;
}

@media screen and (max-width: 999px ){
    .option{
        width: 290px;
    }
}

    </style>
</head>
<body>
    <?php
    
        include "./slidemanuf.php";
        include "../host/connection.php";
        if(isset($_GET['Erorr'])==3){
       
         
            echo '<script type="text/javascript">';
            echo 'window.alert("     لا يوجد سجل لهذا المنتج في المخزن  ")';  
            echo '</script>';
        
    }
    if(!isset($_GET['id'])){
            header("location:../view/manufacturing.php");
        
        }
        $id_req=$_GET['id'];
       
        $result=mysqli_query($con,"SELECT * FROM requests WHERE id=$id_req ");
        $row=mysqli_fetch_assoc($result);
        $idu=$row['username'];
        $c1=$row['num1'];
        $c2=$row['num2'];
        $c3=$row['num3'];
        $c4=$row['num4'];
        $c5=$row['num5'];
        $c6=$row['num6'];
        $c7=$row['num7'];
        $c8=$row['num8'];
        $id_prod=$row['id_prod'];
        /* $get_repo=mysqli_query($con,"SELECT * FROM product WHERE id=$id_prod");
        $result5=mysqli_fetch_assoc($get_repo);
        $id_repo=$result5['id_repo']; */




        $result3=mysqli_query($con,"SELECT * FROM length WHERE id_product= $id_prod ");
        $row3=mysqli_fetch_assoc($result3);
        $l1=$row3['l1'];
        $l2=$row3['l2'];
        $l3=$row3['l3'];
        $l4=$row3['l4'];
        $l5=$row3['l5'];
        $l6=$row3['l6'];
        $l7=$row3['l7'];
        $l8=$row3['l8'];
        $length=$row3['id'];




        $result2=mysqli_query($con,"SELECT number FROM product WHERE id=$id_prod ");
        $row2=mysqli_fetch_assoc($result2);
        $number_broduct=$row2['number']; 
        
        
       
    ?>
    <section>
    <br>
        <br>
                    
                    <center>
                        <form action="../controller/store.php" method="post" >

                        <input class='input' type='hidden' name='id_req'  value="<?php  echo $id_req; ?>"  >
                        <input class='input' type='hidden' name='id_user'  value="<?php  echo $idu; ?>"  >
                        <input class='input' type='hidden' name='id_prod'  value="<?php  echo $id_prod; ?>"  >
                        <input class='input' type='hidden' name='id_length'  value="<?php  echo $length; ?>"  >

								<div>
								
									<input class='input' type='text' name='ci'  required > 
								
									<label for="myinput">
									
									
										عدد المواد المنتجة:
										
										
										
										</label>
								</div>
                                <div>
								
									<input class='input' type='text' name='cii' required  > 
								
									<label for="myinput">
									
									
										عدد المواد السليمة:
										
										
										
										</label>
								</div>

                                <div>
								
									<input class='input' type='text' name='ciii'  required > 
								
									<label for="myinput">
									
									
										عدد المواد الفاشلة:
										
										
										
										</label>
								</div>
                                <?php
                                if ( $row['num1']>0 ) {
								echo '<div>';
								
									echo"<input class='input' type='text' name='c1'  required >";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l1.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c1' value='0'  >";
                            }


							if ( $row['num2']>0 ) {
								echo '<div>';
								
                                    echo"<input class='input' type='text' name='c2'  required >";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l2.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c2' value='0'  >";
                            }

							if ( $row['num3']>0 ) {
								echo '<div>';
								
                                    echo"<input class='input' type='text' name='c3'  required >"; 
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l3.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c3' value='0'  >";
                            }
						
							if ($row['num4']>0 ) {
								echo '<div>';
								
                                    echo"<input class='input' type='text' name='c4'  required >";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l4.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c4' value='0'  >";
                            }

							if ( $row['num5']>0 ) {
								echo '<div>';
								
                                    echo"<input class='input' type='text' name='c5'  required >";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l5.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c5' value='0'  >";
                            }
						
							if ( $row['num6']>0 ) {
								echo '<div>';
								
                                    echo"<input class='input' type='text' name='c6'  required >";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l6.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c6' value='0'  >";
                            }

							if ( $row['num7']>0 ) {
								echo '<div>';
								
                                     echo"<input class='input' type='text' name='c7'  required >";
								
									echo '<label for="myinput">
									
									
									:عدد المواد المطلوبة من قياس '.$l7.'
										
										
										
										
										</label>';
								echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c7' value='0'  >";
                            }
						
							if ( $row['num8']>0 ) {
                                echo '<div>';
								
                                echo"<input class='input' type='text' name='c8'  required >";
                            
                                echo '<label for="myinput">
                                
                                
                                :عدد المواد المطلوبة من قياس '.$l8.'
                                    
                                    
                                    
                                    
                                    </label>';
                            echo '</div>';
							}else{
                                echo"<input class='input' type='hidden' name='c8' value='0'  >";
                            }
                            
                            ?>
							
							
                                <div class="div">
                                
                                    <select class="option"  name="select" required >
                                        <option disabled="disabled" selected="selected" value=""  >اختر المخزن</option>
                                        <?php
                                       /*  WHERE id_product=$id_prod */
                                       /* SELECT DISTINCT column_name FROM table_name */
                                       /* SELECT field_name FROM table_name GROUP BY field_name */

                                                $result=mysqli_query($con,"SELECT * FROM product WHERE 	number=$number_broduct /* GROUP BY number  */");
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $number_repo=$row['id_repo'];
                                                    $result2=mysqli_query($con,"SELECT * FROM repository WHERE id=$number_repo /* GROUP BY number  */   ");
                                                    $row2=mysqli_fetch_assoc($result2);
                                                    $number=$row2['id'];
                                                    $name=$row2['name'];
                                                    echo '<option value="'.$number.'">'.$name.' </option>';
                                                
                                            }
                                                
                                        ?>
                                        
                                    </select>
                                    
                                </div>

                            
							
								<center><button type="submit"  name="sub">ارسال</button></center>
						
                        
				
						</form>
                        </center>
                    

    </section>
</body>
</html>