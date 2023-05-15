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
$("#inbox_massages_table_content_error").height($(window).height() - $("#row_1").height() -50-0.1-20.909-30);
$("#outbox_massages_table_content_error").height($(window).height() - $("#row_1").height() -50-0.1-20.909-30);
$("#trash_massages_table_content_error").height($(window).height() - $("#row_1").height() -50-0.1-20.909-30);
$('.click_get_id_for_delete_img').bind('click', function(){
var table_of_search_results_id_for_delete = $(this).attr('id'); // gets the id of a clicked link that has a class of menu
var from_what="OUTBOX";
              $.post( 
                  "../data/php/delete_massage_2.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw, 
					from_what: from_what,
					table_of_search_results_id_for_delete: table_of_search_results_id_for_delete },
                  function(data) {
                     $("#massage_control_proltocaol").html(data);
                  }
               );
});
$('.click_get_id_for_open_img_2').bind('click', function(){
var table_of_search_results_id_for_open_2 = $(this).attr('id'); // gets the id of a clicked link that has a class of menu
var from_what="INBOX";
              $.post( 
                  "../data/php/open_massage_2.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw, 
					from_what: from_what,
					table_of_search_results_id_for_open_2: table_of_search_results_id_for_open_2 },
                  function(data) {
					 $("#alert_01").show(0);
		             $("#container_01").slideDown(500);
					 $("#span_01").html(data); 
                  }
               );
});
});
</script>
</head>
<body>
<?php

$acc_email = htmlspecialchars($_POST['acc_email']);
$acc_passw = htmlspecialchars($_POST['acc_passw']);

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
$sql = "SELECT * FROM OUTBOX WHERE email='$acc_email' AND `delete`='' ORDER BY `reg_date` DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
echo'
<div width="100%" class="outbox_email_title"style="">
<span class="fontsforweb_fontid_423"style="color:white;padding-right:20px;"><img src="../data/png/outbox.png" style=""  width="10px"title="Outbox"></span>
<span class="fontsforweb_fontid_423"style="padding-right:20px;color:white;">Outbox</span>
<span class="fontsforweb_fontid_423"style="padding-right:20px;color:white;">'.$acc_email.'</span>
</div>
<style>
.outbox_email_title{padding:15px;background-color:#0099e6;color:white;opacity:0.9;}
.outbox_email_title:hover{padding:15px;background-color:#0099e6;color:white;opacity:0.95;cursor:pointer;}
</style>

<table align="center"cellspacing="0px"width="100%" border="1px"style="border-width:0px 0px 0px 0px;border-style:solid;">
<tr>
<th  class="fontsforweb_fontid_423"align="left"height="50px" style="color:white;padding:3px;background-color:black;opacity:0.6;border-width:0px 0px 0px 0px;">From</th>
<th  class="fontsforweb_fontid_423"align="left"height="50px" style="color:white;padding:3px;background-color:black;opacity:0.6;border-width:0px 0px 0px 0px;">Title</th>
<th  class="fontsforweb_fontid_423"align="left"height="50px" style="color:white;padding:3px;background-color:black;opacity:0.6;border-width:0px 0px 0px 0px;">Delete</th>
<th  class="fontsforweb_fontid_423"align="left"height="50px" style="color:white;padding:3px;background-color:black;opacity:0.6;border-width:0px 0px 0px 0px;">Date</th>
</tr>
';	
	
    while($row = mysqli_fetch_assoc($result)) {		

echo'

<tr class="hover_td_color_bg_color_cursor">
<td class=" fontsforweb_fontid_423"align="left"style="color:gray;border-style:solid;border-width:0px 0px 1px 0px;border-color:#cccccc;padding:10px 3px 10px 3px;width:25%;overflow:hidden;">'.$row["email_to"].'</td>
<td class=" fontsforweb_fontid_423"align="left"style="color:gray;border-style:solid;border-width:0px 0px 1px 0px;border-color:#cccccc;padding:10px 3px 10px 3px;width:30%;overflow:hidden;">'.$row["title"].'</td>
<td class=" fontsforweb_fontid_423"align="left"style="color:gray;border-style:solid;border-width:0px 0px 1px 0px;border-color:#cccccc;padding:10px 3px 10px 3px;width:20%;overflow:hidden;">
<img class="click_get_id_for_open_img_2"src="../data/png/open.png" id="'.$row["id"].'" width="20px"title="Open">&nbsp&nbsp
<img class="click_get_id_for_delete_img"src="../data/png/delete.png" id="'.$row["id"].'" width="20px"title="Delete"></td>
<td class=" fontsforweb_fontid_423"align="left"style="color:gray;border-style:solid;border-width:0px 0px 1px 0px;border-color:#cccccc;padding:10px 3px 10px 3px;width:25%;overflow:hidden;">'.$row["reg_date"].'</td>
</tr>

';

    } echo'<style>.hover_td_color_bg_color_cursor{background-color:white;}.hover_td_color_bg_color_cursor:hover{cursor:pointer;background-color:#f2f5ff;}</style></table>';
} else{
	echo'
<div width="100%" class="outbox_email_title"id="outbox_massages_table_title_error">
<span class="fontsforweb_fontid_423"style="color:white;padding-right:20px;"><img src="../data/png/outbox.png" style=""  width="10px"title="Outbox"></span>
<span class="fontsforweb_fontid_423"style="padding-right:20px;color:white;">Outbox</span>
<span class="fontsforweb_fontid_423"style="padding-right:20px;color:white;">'.$acc_email.'</span>
</div>
<style>
.outbox_email_title{padding:15px;background-color:#0099e6;color:white;opacity:0.9;}
.outbox_email_title:hover{padding:15px;background-color:#0099e6;color:white;opacity:0.85;cursor:pointer;}
</style>
<table id="outbox_massages_table_content_error"width="100%"height="100%"border="0px"align="center"style="">
<tr>
<td align="center">
<font class="fontsforweb_fontid_423" color="gray"style="font-size:42px;">';
echo "0 Massages in outbox! ";
echo'</font><br><br>
<font class="fontsforweb_fontid_423" color="gray"style="font-size:14px;">';
echo "Please check whether you have deleted.<br><br>";
echo"<style>
#sign_in{padding:10px 20px 10px 20px;border-radius:3px;border-width:1px;border-color:#0073e6;background-color:#0080ff;color:white;border-style:solid;}
#sign_in:hover{background-color:#1a8cff;cursor:pointer;}
#create_an_acc{padding:10px 20px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;color:gray;border-style:solid;}
#create_an_acc:hover{background-color:#f2f2f2;cursor:pointer;}
</style>";
echo'</font>
</td>
</tr>
</table>
</table>
';
}

mysqli_close($conn);

?>
<body>
<html>