<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../data/css/web/style_2.css" rel="stylesheet">
<script src="../data/js/web/javascript.js" type="text/javascript"></script>
<script src="../data/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../data/js/jquery.js" type="text/javascript"></script>
<script src="../data/js/popper.min.js" type="text/javascript"></script>
<style>

</style>
<script>
$( document ).ready(function() {
		
});
</script>
</head>
<body>
<?php

$acc_email_5678_45_67 = htmlspecialchars($_POST['acc_email']);
$acc_passw_5678_45_67 = htmlspecialchars($_POST['acc_passw']);
$settings_first_name_67 = htmlspecialchars($_POST['settings_first_name']);
$settings_last_name_67 = htmlspecialchars($_POST['settings_last_name']);
$settings_possesion_67 = htmlspecialchars($_POST['settings_possesion']);
$settings_favour_67 = htmlspecialchars($_POST['settings_favour']);

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

$sql = "INSERT INTO `account_details` (`email`, `password`, `first_name`, `last_name`, `picture_url`, `possesion`)
VALUES ('$acc_email_5678_45_67', '$acc_passw_5678_45_67', '$settings_first_name_67', '$settings_last_name_67', '$settings_favour_67', '$settings_possesion_67')";

if (mysqli_query($conn, $sql)) {
    echo "Details saved sucessfully";
} else {
    echo "Error while saving details: " . $sql . "" . mysqli_error($conn);
}


mysqli_close($conn);

?>
<body>
<html>