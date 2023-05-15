
<?php
$acc_email_5678_45_6 = htmlspecialchars($_POST['acc_emai']);
$acc_passw_5678_45_6 = htmlspecialchars($_POST['acc_pass']);

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



$sql = "SELECT * FROM `account_details` WHERE `email`='$acc_email_5678_45_6' AND `password`='$acc_passw_5678_45_6' And `id`='$id_id_id_1' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo'
Email : ' . $row["email"]. '
Password : ' . $row["password"]. '
First name: ' . $row["first_name"]. '
Last name : ' . $row["last_name"]. '
Possesion : ' . $row["possesion"]. '
Your favour' . $row["picture_url"]. '
';	
    }
} else {
echo'Error while uploading latest saved details!';	
}

mysqli_close($conn);
?>
