
<?php
$search_for_help = htmlspecialchars($_POST['search_for_help']);

if($search_for_help=="")
{
$search_for_help="No any search results!";
}

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



$sql = "SELECT * FROM `search_for_help` WHERE `search_for_help_col`='$search_for_help' OR `search_for_help_col` REGEXP '$search_for_help'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo'
<br><a href="'.$row["search_for_help_url"].'" style="text-decoration:none;">
<table class="table_of_help_s"align="center"style="padding:15px;border-style:solid;border-color:lightgray;background-color:white;border-radius:3px;border-width:1px;"width="95%">
<tr>
<td style="padding:0px;border-width:0px;"><p align="left"style="font-size:22px;padding:15px 15px 0px 15px;color:gray;">'.$row["search_for_help_col"].'</p></td>
</tr>
<tr>
<td style="padding:0px;border-width:0px;"><hr width="100%"style="color:#eaeaea;border-width:0.5px;border-style:solid;"></td>
</tr>
<tr>
<td style="padding:0px;border-width:0px;color:#47b547;"><code align="left"style="font-size:15px;padding:5px 15px 15px 15px;color:#47b547;">'.$row["search_for_help_url"].'</code><br><br></td>
</tr>
</table></a><style>.table_of_help_s:hover{cursor:pointer;box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);}</style>
';	
    }
} else {
echo'<br><br><p align="center"style="font-size:22px;">No any search results!</p>';	
}

mysqli_close($conn);
?>
