<?php
//Variables ----servername---- for connect to mysqli ================================================
$myfile1 = fopen("../data/mysqli_conn/servername.txt", "r") or
die("");
while(!feof($myfile1)) {
	$servername= fgets($myfile1);
}
fclose($myfile1);
//Variables ----servername---- END for connect to mysqli ============================================
?>