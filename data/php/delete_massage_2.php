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

$acc_email_5678 = htmlspecialchars($_POST['acc_email']);
$acc_passw_5678 = htmlspecialchars($_POST['acc_passw']);
$from_what_1234_5678 = htmlspecialchars($_POST['from_what']);
$table_of_search_results_id_for_delete_5678 = htmlspecialchars($_POST['table_of_search_results_id_for_delete']);

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

$sql = "UPDATE OUTBOX SET `delete`='deleted' WHERE `id`='$table_of_search_results_id_for_delete_5678'";

if (mysqli_query($conn, $sql)) {
    echo '<script>$( document ).ready(function() {alert("Massage deleted successfully");});</script>';
} else {
    echo '<script>$( document ).ready(function() {alert("Error deleting massage: ' . mysqli_error($conn).'");});</script>';
}

mysqli_close($conn);

?>
<body>
<html>