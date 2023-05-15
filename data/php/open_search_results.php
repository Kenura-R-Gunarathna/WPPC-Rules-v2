
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
<td style="background-color: blueviolet;color:white;border-radius:5px 5px 0px 0px;padding:20px;">Share rules</td>
</tr>
<tr>
<td id="share_rules"width="100%" align="top">';

$sql = "SELECT * FROM `share_rule` ORDER BY `reg_date` DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo'<div style="border-width:1px;padding:20px;">';
echo'<div style="padding:10px;background-color:#ef2554;border-radius:3px;color:white;">';
echo'<img src="../data/png/logo.png" style="float:left;padding:10px;border-radius:50px;background-color:white;" width="40px"title="Home">';
echo'<p align="center">Rule number '.$row["rule_number"].'</p>';
echo'<hr width="100%"noshade style="border-width:0.5px;"color="#f5f5f5"><br>';
echo''.$row["content"].'<br><br><br>';
echo'<p align="right"><small style="padding-right:20px;text-align:right;">'.$row["reg_date"].'</small></p>';
echo'</div><style>.gov_bt_for_all_img:focus{outline:none;}.gov_bt_for_all_img:hover{cursor:pointer;}</style>';
echo'</div>';
    }
} else {
echo'<p align="center">0 Notifications</p>';	
}

echo'</td>
</tr>
</table>';

mysqli_close($conn);
?>
