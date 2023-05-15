<?php
//Variables ----username---- for connect to mysqli ================================================
$myfile2 = fopen("../data/mysqli_conn/username.txt", "r") or
die("");
while(!feof($myfile2)) {
	$username= fgets($myfile2);
}
fclose($myfile2);
//Variables ----username---- END for connect to mysqli ============================================
?>