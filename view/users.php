<?php



session_start();
    if (!isset($_SESSION['username'])){
        header("location:login.php");
        die();
    }
    include "../host/connection.php";
    $time=time();
    $result=mysqli_query($con,"SELECT * FROM users WHERE typeuser != 'C' AND typeuser !='A'");
    
    
?>
<!DOCTYPE html>
<html lang="AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <link rel="stylesheet" href="../view/css/users.css">
   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>المستخدمن/Taqaddom Scales Co. Lts.</title></head>
<body>
<?php
include "./slidepar.php";
?>

    
    
   <section>
   <br>
   
    <div class="container">
         <h2 class="text-center text-info">لوحة الموظفين</h2>
		 
         <table class="table table-striped table-bordered">
            <thead>
               <tr>
                 
                  
                  
                  
                  
                 
                  <th width="5%"><i class="fas fa-user-minus"></i></th>
                  <th width="25%">الحالة</th>
                  <th width="25%">قسم</th>
                  <th width="55%">اسم الموظف</th>
                   <th width="5%">#</th>
               </tr>
               
            </thead>
            <tbody id="user_grid">
			   <?php 
               
			   $i=1;
			   while($row=mysqli_fetch_assoc($result)){
			   $status='غير متصل';
			   $class="btn-danger";
               $type='';
               if($row['typeuser']=="M"){
                    $type= " التصنيع";
                }elseif($row['typeuser']=="R"){
                    $type= " المخزن";
                }
               /*  else{
                    $type="مدير";
                } */
			   if($row['last_login']>$time){
					$status='متصل';
					$class="btn-success";
                   
		            
			   }
			   ?>	
               <tr>
                    <td><a href="../controller/deletuser.php?id=<?php echo $row['id']  ?>"><i class="fas fa-user-minus"></i></a></td>
                    <td><button type="button" class="btn <?php echo $class?>"><?php echo $status?></button></td>
                    <td><?php echo $type?></td>
                    <td style="text-align: center;"><?php echo $row['username']?></td>
                    <th scope="row"><?php echo $i?></th>
             </tr>
			   <?php 
			   $i++;
			   } ?>



               
            </tbody>
         </table>
      </div>

    <script>
		function updateUserStatus(){
			jQuery.ajax({
				url:'../controller/update_user_status.php',
				success:function(){
					
				}
			});
		}
		
		function getUserStatus(){
			jQuery.ajax({
				url:'../controller/get_user_status.php',
				success:function(result){
					jQuery('#user_grid').html(result);
				}
			});
		}
		
		setInterval(function(){
			updateUserStatus();
		},3000);
		
		setInterval(function(){
			getUserStatus();
		},7000);
	</script>
   </section>





</body>
</html>