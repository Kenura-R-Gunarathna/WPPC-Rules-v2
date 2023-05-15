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
<script>
$( document ).ready(function() {
$('.table_of_search_results').bind('click', function(){
var table_of_search_results_id = $(this).attr('id'); // gets the id of a clicked link that has a class of menu
               $.post( 
                  "../data/php/save_rule_id.php",
                  { table_of_search_results_id: table_of_search_results_id,
                    email:"",
                    password:""                        				},
                  function(data) {
                     $("#row_8_message").hide();
                     $("#row_9_alert").hide();
                     $("#row_6_books_open").hide();	
                     $("#row_4_search_results").hide();		
                     $("#row_2_search").hide();	
                     $("#row_4_search_results_open").fadeIn(300);	
                     $('#row_4_search_results_open').html(data);
					 
                  }
               );
});
$('.share_rule_to_othrs').bind('click', function(){
var share_rule_to_othrs = $(this).attr('id'); // gets the id of a clicked link that has a class of menu
var rttrrwwr = confirm("Make sure that you really want to share the rule!");
if (rttrrwwr == true) {
               $.post( 
                  "../data/php/share_rule_to_othrs.php",
                  { share_rule_to_othrs: share_rule_to_othrs,
                    email:"",
                    password:""},
                  function(data) {
                  alert(data); 
                  }
               );
  } else {

  }
});

});
</script>
</head>
<body>
<?php

$search_text = htmlspecialchars($_POST['search_text']);

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

$sql = "SELECT * FROM RULES WHERE rule_number='$search_text' OR rule_number REGEXP '$search_text' OR content REGEXP '$search_text' OR rule_sinhala REGEXP '$search_text' OR rule_tamil REGEXP '$search_text' OR rule_english REGEXP '$search_text'";
$result = mysqli_query($conn, $sql);
	error_reporting(0);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo '<br>
<table border="1px" align="center" id="' . $row["rule_number"]. '" rulenumber="' . $row["rule_number"]. '"  class="table_of_search_results" title="Click to open rule number ' . $row["rule_number"]. '">
<tr>
<td rowspan="4" style="border-width:0px;">
<img src="../data/png/logo.png"alt="...">
</td>
<td style="border-width:0px;">         
<h3  class="fontsforweb_fontid_423" >Rule number ' . $row["rule_number"]. '</h3>
</td>
</tr>
<tr><td  class="fontsforweb_fontid_423" style="border-width:0px;">' . $row["content"]. '</td></tr>
<tr><td style="border-width:0px;">
<p  class="fontsforweb_fontid_423"style="color:#666666;" ><small>Sinhala</small>&nbsp&nbsp<small>Tamil</small>&nbsp&nbsp<small>English</small></p>
</td></tr>
<tr style="border-width:0px;">
<td style="border-width:0px;" class="fontsforweb_fontid_423">

<a href="#table_of_search_results_3"class="other_rules_hyperlink"><small>Other rules</small></a>&nbsp&nbsp
<span id="' . $row["rule_number"]. '"class="other_rules_hyperlink share_rule_to_othrs"><small>Share the rule ' . $row["rule_number"]. '</small></span>

<br>
</td>
</tr>
</table>
<br><style>
.table_of_search_results{max-width:95%;border-style:solid;border-color:#cccccc;margin:auto;background-color:white;border-radius:3px;padding:20px;}
.table_of_search_results:hover{cursor:pointer;box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);}
.other_rules_hyperlink{text-decoration:none;color:white;padding:5px 10px 5px 10px;background-color:#b3b3b3;border-radius:50px;}
.other_rules_hyperlink:hover{cursor:pointer;background-color:#a6a6a6;}</style>
	';    
    }
} else {
	echo'
<div style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;">
<table width="100%"height="100%"border="0px"align="center"style="padding-top:5px;padding-bottom:5px;">
<tr>
<td align="center">
<font class="fontsforweb_fontid_423" color="gray"style="font-size:42px;">';
echo "0 Results found! ";
echo'</font><br><br>
<font class="fontsforweb_fontid_423" color="gray"style="font-size:14px;">';
echo "Search again";
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
</div>';
}
mysqli_close($conn);
?>
<body>
<html>