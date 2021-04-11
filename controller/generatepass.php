<?php 
function generatepassword(){
    $lingth= 8;
    $star="1234567890";
    $random=substr(str_shuffle($star),0,$lingth);
    return $random;

}

?>