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

$email = htmlspecialchars($_POST['email']);
$email_to = htmlspecialchars($_POST['email_to']);
$title = htmlspecialchars($_POST['title']);
$details = htmlspecialchars($_POST['details']);
$acc_password_send = htmlspecialchars($_POST['acc_password_send']);

echo'<script>
var acc_email1_mail_to_someone="'.$email_to.'";
</script>';

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

$sql = "INSERT INTO INBOX (`email`, `title`, `email_from`, `details`, `read_or_not`, `delete`)
VALUES ('$email_to', '$title', '$email', '$details', '', '')";

if (mysqli_query($conn, $sql)) {

$sql = "INSERT INTO OUTBOX (`email`, `title`, `email_to`, `details`, `read_or_not`, `delete`)
VALUES ('$email', '$title', '$email_to', '$details', '', '')";

if (mysqli_query($conn, $sql)) {
    echo "Mail Send to '$email_to'";
} else {
    echo "Error while sending email: " . $sql . "" . mysqli_error($conn);
}
	
} else {
    echo "Error while sending email: " . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<body>
<html>