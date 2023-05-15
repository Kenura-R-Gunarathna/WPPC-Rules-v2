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
$("#notify_massages_and_rules_container_2").hide();
$("#notify_massages_and_rules_container").hide();

$("#notify_massages_and_rules_container_2").fadeIn(300);
$("#notify_massages_and_rules_container").fadeIn(300);

$('.close_it_bt_1').bind('click', function(){
var rule_id_123 = $(this).attr('id'); // gets the id of a clicked link that has a class of menu

	              $.post( 
                  "../data/php/hide_rule_by_close_click_.php",
                  { rule_id: rule_id_123 },
                  function(data) {
                     alert(data);
					 $("#notify_massages_and_rules_container_2").fadeOut(300);
                  }
               );

});	
$('.close_it_bt_2').bind('click', function(){
var noti_id_123_4 = $(this).attr('id'); // gets the id of a clicked link that has a class of menu

	              $.post( 
                  "../data/php/hide_noti_by_close_click.php",
                  { noti_id: noti_id_123_4 },
                  function(data) {
                     alert(data);
					 $("#notify_massages_and_rules_container").fadeOut(300);
                  }
               );

});	
});
</script>
</head>
<body>
<?php
header("refresh: 5"); 
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

$sql = "SELECT MAX(`reg_date`), MAX(`id`), MAX(`rule_number`), MAX(`content`), MAX(`rule_sinhala`), MAX(`rule_tamil`), MAX(`rule_english`) FROM `share_rule` WHERE `close` IS NULL";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

echo'
<div id="notify_massages_and_rules_container_2"class="notify_massages_and_rules_container"style="">
<table border="0px"width="100%"cellspacing="5px">
<tr>
<td rowspan="3" align="center"><div style="padding:10px 10px 8px 10px;border-radius:50px;background-color:#efeef3;">
<img class=""src="../data/png/logo.png"width="30px"style="border-radius:30px;background-color:white;">
</td>
<td align="left">
<font style="font-size:18px;">Rule number '.$row["MAX(`rule_number`)"].'</font>
</td>
<td align="right"><font id="'.$row["MAX(`id`)"].'"  class="close_it_bt_1"style="font-size:10px;padding:5px 10px 5px 10px;border-radius:3px;"></font></td>
</tr>
<tr>
<td colspan="2" align="left"><font style="font-size:14px;">'.$row["MAX(`content`)"].'</font></td>
</tr>
<tr>
<td colspan="2" align="right"><font style="font-size:11px;">'.$row["MAX(`reg_date`)"].'</font></td>
</tr>
</table>
</div>';

    }
} else {
    echo "
	<style>#notify_massages_and_rules_container_2{visibility:hidden;}</style>
	";
}

echo'<br>';

$sql = "SELECT MAX(`reg_date`), MAX(`id`), MAX(`email`), MAX(`title`), MAX(`details`), MAX(`duration`) FROM `alert_save` WHERE `close` IS NULL";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


echo'
<div id="notify_massages_and_rules_container"class="notify_massages_and_rules_container"style="">
<table border="0px"width="100%"cellspacing="5px">
<tr>
<td rowspan="3" align="center"><div style="padding:10px 10px 8px 10px;border-radius:50px;background-color:#efeef3;"><img src="../data/png/not2.png"width="30px"style="border-radius:30px;background-color:white;"></td><td align="left"><font style="font-size:18px;">'.$row["MAX(`title`)"].'</font>&nbsp&nbsp <font style="font-size:14px;">From '.$row["MAX(`email`)"].'</font></div></td>
<td align="right"><font class="close_it_bt_2" id="'.$row["MAX(`id`)"].'"style="font-size:10px;padding:5px 10px 5px 10px;border-radius:3px;"></font></td>
</tr>
<tr>
<td  colspan="2" align="left"><font style="font-size:14px;">'.$row["MAX(`details`)"].'</font></td>
</tr>
<tr>
<td  colspan="2" align="right"><font style="font-size:11px;">'.$row["MAX(`reg_date`)"].'</font></td>
</tr>
</table>
</div>
';

    }
} else {
    echo "
	<style>#notify_massages_and_rules_container{visibility:hidden;}</style>
	";
}

mysqli_close($conn);

?>
<body>
</html>