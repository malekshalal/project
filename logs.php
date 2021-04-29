<?php
function logger($log){
    if (!file_exists("log.txt")){
        file_put_contents("log.txt",'');
    }
    $ip=$_SERVER['REMOTE_ADDR'];
     date_default_timezone_set("Asia/Jerusalem"); 
     $browser=$_SERVER['HTTP_USER_AGENT'];
     

    $time=date('m/d/y h:iA',time());
    $conectents=file_get_contents("log.txt");
    $conectents .="$ip\t$time\t$log\t$browser\r";
    file_put_contents("log.txt",$conectents);
}


?>