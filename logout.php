<?php
session_start();
if(isset($_SESSION["username"] ))
{
unset($_SESSION["username"]);
unset($_SESSION["role"]);
session_destroy();
header("Location:view/login.php");
}
else
	header("Location:view/login.php");

?>