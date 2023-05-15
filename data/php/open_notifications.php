
<?php

$servername_myfile = fopen("../txt/servername.txt", "r") or die("Unable to open file!");
$servername = fgets($servername_myfile);
fclose($servername_myfile);

$username_myfile = fopen("../txt/username.txt", "r") or die("Unable to open file!");
$username = fgets($username_myfile);
fclose($username_myfile);

$password_myfile = fopen("../txt/password.txt", "r") or die("Unable to open file!");
$password = fgets($password_myfile);
fclose($password_myfile);

$dbname_myfile = fopen("../txt/dbname.txt", "r") or die("Unable to open file!");
$dbname = fgets($dbname_myfile);
fclose($dbname_myfile);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo'<table border="0px" width="100%"celpadding="0px" celspacing="0px">
<tr>
<td style="background-color: blueviolet;color:white;border-radius:5px 5px 0px 0px;padding:20px;">Notifications</td>
</tr>
<tr>
<td id="share_rules"width="100%" align="top">';

$sql = "SELECT * FROM `alert_save` ORDER BY `reg_date` DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo'<div style="border-width:1px;padding:20px;">';
echo'<div style="padding:10px;background-color:#00b8e6;border-radius:3px;color:white;">';
echo'<img src="../data/png/'.$row["icon"].'" style="float:left;padding:10px;border-radius:50px;background-color:white;" width="40px"title="Home">';
echo'<p align="center">Alert from '.$row["email"].'</p>';
echo'<hr width="100%"noshade style="border-width:0.5px;"color="#f5f5f5"><p style="font-size:22px;">'.$row["title"].'</p>';
echo''.$row["details"].'';
echo'<p align="right"><small style="padding-right:20px;text-align:right;">'.$row["reg_date"].'</small></p>';
echo'</div>';
echo'</div>';

    }
} else {
echo'0 Notifications';	
}


echo'</td>
</tr>
</table>';

mysqli_close($conn);
?>
