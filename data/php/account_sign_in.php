<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../data/css/web/style.css" rel="stylesheet">
<script src="../data/js/web/javascript.js" type="text/javascript"></script>
<script src="../data/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../data/js/jquery.js" type="text/javascript"></script>
<script src="../data/js/popper.min.js" type="text/javascript"></script>
</head>
<body>
<?php
echo"<style>.good{border-radius:3px;padding:10px 20px 10px 20px;width:95%;border-width:2px;margin:10px 20px 10px 0px;background-color:#33cc33;border-color:#70db70;color:white;}.bad{border-radius:3px;padding:10px 20px 10px 20px;width:95%;border-width:2px;margin:10px 20px 10px 0px;background-color:#ff4d4d;border-color:#ff8080;color:white;}</style>";
$email = $_POST['email'];
$password_acc = $_POST['password'];

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

$sql = "SELECT * FROM ACCOUNTS WHERE email='$email' AND password='$password_acc'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "<p class='good'align='center'>Please wait until load account details and dashboard...</p>"; 
    echo'';	
    }
} else {
     echo"<p class='bad'align='center'>Account doesen't exist! Please create an account</p>";
}
mysqli_close($conn);

echo"<br>";

?>
</body>
</html>