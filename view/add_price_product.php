<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location:login.php");
    die();
  }
  include "../host/connection.php";

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/css/image/logo.png">
    <!-- <link rel="stylesheet" href="../view/css/add_repo.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <title>اضافه عرض المنتج و الاسعار</title>
</head>
<body>
<?php
include "./sliderepo.php";
if(isset($_GET['massege'])){
    if($_GET['massege']==2){
        echo '<script>alert("تم انشاء اطوال المنتج ")</script>';
 
    }
}
$id_product=$_GET['id_product'];

?>
<section>


<h2 style="text-align: center;" >اضافةالعرض و السعر</h2><br />

            <div class="form-group" >
				<form name="add_price" id="add_price">
                <input type="hidden" name="id" value="<?php echo $id_product  ?>">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
                            <td><input type="number" name="name8[]" placeholder=" السعر  الثامن" class="form-control name_list" /></td>
                            <td><input type="number" name="name7[]" placeholder=" السعر  السابع" class="form-control name_list" /></td>
                            <td><input type="number" name="name6[]" placeholder=" السعر  السادس" class="form-control name_list" /></td>
                            <td><input type="number" name="name5[]" placeholder=" السعر  الخامس" class="form-control name_list" /></td>
                            <td><input type="number" name="name4[]" placeholder=" السعر  الرابع" class="form-control name_list" /></td>
                            <td><input type="number" name="name3[]" placeholder=" السعر  الثالث" class="form-control name_list" /></td>
                            <td><input type="number" name="name2[]" placeholder=" السعر  الثاني" class="form-control name_list" /></td>
                            <td><input type="number" name="name1[]" placeholder=" السعر  الاول" class="form-control name_list" /></td>
                            
								<td><input type="number" name="name[]" placeholder=" عرض المنتج" class="form-control name_list" /></td>
                                
								<td><button type="button" name="add" id="add" class="btn btn-success">اضافة عرض </button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
		</div>

</section>
    
</body>
</html>


<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="number" name="name8[]" placeholder=" السعر  الثامن" class="form-control name_list" /></td><td><input type="number" name="name7[]" placeholder=" السعر  السابع" class="form-control name_list" /></td><td><input type="number" name="name6[]" placeholder=" السعر  السادس" class="form-control name_list" /></td><td><input type="number" name="name5[]" placeholder=" السعر  الخامس" class="form-control name_list" /></td><td><input type="number" name="name4[]" placeholder=" السعر  الرابع" class="form-control name_list" /></td><td><input type="number" name="name3[]" placeholder=" السعر  الثالث" class="form-control name_list" /></td><td><input type="number" name="name2[]" placeholder=" السعر  الثاني" class="form-control name_list" /></td><td><input type="number" name="name1[]" placeholder=" السعر  الاول" class="form-control name_list" /></td><td><input type="number" name="name[]" placeholder=" عرض المنتج" class="form-control name_list" /></td></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"../controller/add_price.php",
			method:"POST",
			data:$('#add_price').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_price')[0].reset();
			}
		});
	});
	
});
</script>