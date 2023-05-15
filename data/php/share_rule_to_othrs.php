
<?php

$share_rule_to_othrs = htmlspecialchars($_POST['share_rule_to_othrs']);

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

$sql = "SELECT * FROM `rules` WHERE `rule_number` = '$share_rule_to_othrs'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$rule_number_90	= '' . $row["rule_number"]. ''; 
$picture_url_90	= '' . $row["picture_url"]. '';  
$content_90	= '' . $row["content"]. ''; 
$rule_sinhala_90	= '' . $row["rule_sinhala"]. ''; 
$rule_tamil_90	= '' . $row["rule_tamil"]. ''; 
$rule_english_90	= '' . $row["rule_english"]. ''; 
    }
} else {

}


$sql = "INSERT INTO `share_rule` (`rule_number`, `content`, `rule_sinhala`, `rule_tamil`, `rule_english`)
VALUES ('$rule_number_90', '$content_90', '$rule_sinhala_90', '$rule_tamil_90', '$rule_english_90')";

if (mysqli_query($conn, $sql)) {
    echo "Rule shared sucessfully";
} else {
    echo "Error while sharing rule: " . $sql . "" . mysqli_error($conn);
}


mysqli_close($conn);

?>
