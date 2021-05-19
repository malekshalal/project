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
        $id_prod=$row['id_prod'];
        
        $result2=mysqli_query($con,"SELECT * FROM length WHERE id_product=$id_prod ");
        $row2=mysqli_fetch_assoc($result2);
        $length=$row2['id'];
        
        
       
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
							
							
                                <div class="div">
                                
                                    <select class="option"  name="select" required >
                                        <option disabled="disabled" selected="selected" value=""  >اختر المخزن</option>
                                        <?php
                                                $result=mysqli_query($con,"SELECT * FROM repository WHERE id_product=$id_prod");
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $id=$row['id'];
                                                    $name=$row['name'];
                                                    echo '<option value="'.$id.'">'.$name.' </option>';
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