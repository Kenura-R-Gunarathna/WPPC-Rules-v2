<?php
//Variables ----password---- for connect to mysqli ================================================
$myfile3 = fopen("../data/mysqli_conn/password.txt", "r") or
die("");
while(!feof($myfile3)) {
	$password= fgets($myfile3);
}
fclose($myfile3);
//Variables ----password---- END for connect to mysqli ============================================
?>