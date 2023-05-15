<?php
echo '<!DOCTYPE html><html lang="en">';
echo '<head>';
echo '<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">';

//Variables ----servername---- for connect to mysqli ================================================
$myfile1 = fopen("../mysqli_conn/servername.txt", "r") or
die("");
while(!feof($myfile1)) {
	$servername= fgets($myfile1);
}
fclose($myfile1);
//Variables ----servername---- END for connect to mysqli ============================================

//Variables ----username---- for connect to mysqli ================================================
$myfile2 = fopen("../mysqli_conn/username.txt", "r") or
die("");
while(!feof($myfile2)) {
	$username= fgets($myfile2);
}
fclose($myfile2);
//Variables ----username---- END for connect to mysqli ============================================

//Variables ----password---- for connect to mysqli ================================================
$myfile3 = fopen("../mysqli_conn/password.txt", "r") or
die("");
while(!feof($myfile3)) {
	$password= fgets($myfile3);
}
fclose($myfile3);
//Variables ----password---- END for connect to mysqli ============================================

//Variables ----password---- for connect to mysqli ================================================
$myfile4 = fopen("../mysqli_conn/DBname.txt", "r") or
die("");
while(!feof($myfile4)) {
	$DBname= fgets($myfile4);
}
fclose($myfile4);
//Variables ----password---- END for connect to mysqli ============================================

//Connecting to the mysqli =======================================================
$conn=new mysqli($servername, $username, $password);
//END Connecting to the mysqli ===================================================

echo"<title>";echo"</title>";echo '</head>';echo '<body>';if($conn->connect_error){
	die("FAIL CONN".$conn->connect_error);}else{
		echo "SUCESS CONN";
        //Creating the database
		
		//Connecting to the mysqli =======================================================
        $conn=new mysqli($servername, $username, $password);
        //END Connecting to the mysqli ===================================================
        $sql = "CREATE DATABASE $DBname <br><br>";
        if(mysqli_query($conn, $sql))
		{
	    echo"Sucess Database $DBname <br><br>";
		}
		mysqli_close($conn);
		}

//start CLOSE connection with mysqli =============================================
//CLOSE connection with mysqli ===================================================


echo '</body>';
echo '</html>';
?>