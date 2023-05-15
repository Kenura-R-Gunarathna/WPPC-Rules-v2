
<?php
$acc_email_5678_45_60 = htmlspecialchars($_POST['acc_email']);
$acc_passw_5678_45_60 = htmlspecialchars($_POST['acc_passw']);
$table_of_search_results_id_for_open_3 = htmlspecialchars($_POST['table_of_search_results_id_for_open_3']);

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



$sql = "SELECT * FROM `INBOX` WHERE `email`='$acc_email_5678_45_60' And `id`='$table_of_search_results_id_for_open_3' AND `delete`='deleted'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo'
		    <div class="header_01">
            <p class="fontsforweb_fontid_423">Massage from '.$row["email_from"].'</p>
			</div>
			
			<div class="body_01">
            <p class="fontsforweb_fontid_423" align="left"style="padding:0px 0px 0px 10px;">From : '.$row["email_from"].'</p>
			<p class="fontsforweb_fontid_423"align="left"style="padding:0px 0px 0px 10px;">Title : '.$row["title"].'</p>
			<p class="fontsforweb_fontid_423"align="left"id="san_02"style="padding:20px;">Content : <br><br>'.$row["details"].'</p>
			<p class="fontsforweb_fontid_423"align="left"style="padding:0px 0px 0px 10px;">Received date :'.$row["reg_date"].'</p>
			</div>
			
';	
    }
} else {
echo'Error while uploading latest saved details!';	
}

mysqli_close($conn);
?>
