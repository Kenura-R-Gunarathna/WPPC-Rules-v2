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
.ifreame_hover_iframe:hover{cursor:pointer;color:#f54275;}
.ifreame_hover_iframe{padding:20px 20px 20px 20px;color:gray;}
.table_of_search_results_2{max-width:100%;border-style:solid;border-color:#cccccc;margin:auto;background-color:white;padding:20px;border-width:1px 0px 0px 0px;}
.table_of_search_results_3{max-width:100%;width:100%;border-style:solid;border-color:#cccccc;margin:auto;background-color:white;padding:50px 20px 50px 20px;border-width:1px 0px 1px 0px;}
.other_rules_hyperlink{text-decoration:none;color:white;padding:10px 15px 10px 15px;background-color:#b3b3b3;border-radius:50px;}
.other_rules_hyperlink:hover{background-color:#426bf9;}
</style>
<script>
$( document ).ready(function() {
$( "#today_year" ).html(new Date().getFullYear());
});
</script>
</head>
<body>
<?php

$table_of_search_results_id = htmlspecialchars($_POST['table_of_search_results_id']);

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

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM RULES WHERE RULE_NUMBER='$table_of_search_results_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {		

echo'
<table   class="fontsforweb_fontid_423" border="0px"height="50px"width="100%"align="center"style="color:white;background-color:#495456;padding:0px 0px 0px 20px;">
<tr>
<td align="left"  class="fontsforweb_fontid_423">
Rule number &nbsp<span style="color:#00b8e6;">' . $row["rule_number"]. '</span>
</td>
</tr>
</table>
<table border="1px" align="center"  class="table_of_search_results_2" title="Click to open rule number ' . $row["rule_number"]. '">
<tr>
<td rowspan="4" style="border-width:0px;">
<img src="../data/png/' . $row["picture_url"]. '.png"alt="...">
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

<a href="#"class="other_rules_hyperlink"><small>Other rules</small></a>

<br>
</td>
</tr>
</table>
<table   class="fontsforweb_fontid_423" border="0px"width="100%"align="center"style="background-color:#f2f2f2;padding:20px 20px 20px 20px;">
<tr>
<td align="center"  class="fontsforweb_fontid_423">
<span class="ifreame_hover_iframe" id="sinhala_show_page">Sinhala</span>
</td>
<td align="center"  class="fontsforweb_fontid_423">
<span class="ifreame_hover_iframe" id="tamil_show_page">Tamil</span>
</td>
<td align="center"  class="fontsforweb_fontid_423">
<span class="ifreame_hover_iframe" id="english_show_page">English</span>
</td>
</tr>
</table>
<iframe id="iframe_scrollbar_lan_id"src="../pages/pdf/rules/' . $row["rule_number"]. 'sin.pdf" 
class="fontsforweb_fontid_423 iframe_scrollbar_lan" border="1px"height="80%"width="100%"style="background-color:#f2f2f2;padding:0px 0px 0px 0px;border-width:1px;border-style:solid;border-color:#d9d9d9;width:100%;">
</iframe>
<script>
$( document ).ready(function() {
$( "#tamil_show_page" ).click(function() {
document.getElementById("iframe_scrollbar_lan_id").src = "../pages/pdf/rules/' . $row["rule_tamil"]. 'ta.pdf";
});
$( "#sinhala_show_page" ).click(function() {
document.getElementById("iframe_scrollbar_lan_id").src = "../pages/pdf/rules/' . $row["rule_sinhala"]. 'sin.pdf";
});
$( "#english_show_page" ).click(function() {
document.getElementById("iframe_scrollbar_lan_id").src = "../pages/pdf/rules/' . $row["rule_english"]. 'eng.pdf";
});
});
tamil_show_page
</script>
';
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM RULES_HYPERLINKS WHERE rule_number='$table_of_search_results_id'";
$result = mysqli_query($conn, $sql);
echo'<table border="1px" align="center" style=""  id="table_of_search_results_3" class="table_of_search_results_3" title="Click to open rule number">

<tr style="border-width:0px;">
<td style="border-width:0px;" class="fontsforweb_fontid_423"align="left"><span style="font-size:22px;">Other related rules</span><br><br></td>
</tr>
<tr style="border-width:0px;">
<td style="border-width:0px;" align="center" class="fontsforweb_fontid_423"><br>';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {	
$rule_hyperlinks = '' . $row["rule_hyperlinks"]. '';

$sql = "SELECT * FROM RULES WHERE rule_number='$rule_hyperlinks'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {	

echo'
<table   class="fontsforweb_fontid_423" border="0px"height="50px"width="100%"align="center"style="color:gray;background-color:white;padding:0px 0px 0px 20px;">
<tr>
<td align="left"  class="fontsforweb_fontid_423">
Rule number &nbsp<span style="color:#00b8e6;">' . $row["rule_number"]. '</span>
</td>
</tr>
</table>
<table border="1px" align="center"  class="table_of_search_results_2" title="Click to open rule number ' . $row["rule_number"]. '">
<tr>
<td rowspan="4" style="border-width:0px;">
<img src="../data/png/' . $row["picture_url"]. '.png"alt="...">
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
<a href="#table_of_search_results_3"class="other_rules_hyperlink"><small>Share rules</small></a>
<br>
</td>
</tr>
</table>
';	
	
	    }
} else {
    echo "0 results";
}
    }
} else {
    echo "0 results";
}
echo '<br><br>
</td>
</tr>
</table>';
echo'
<table   class="fontsforweb_fontid_423" border="0px"width="100%"align="center"style="background-color:#495456;color:white;padding:20px 0px 0px 20px;">
<tr>
<td colspan="2"align="center"  class="fontsforweb_fontid_423">
<font style="font-size:22px;">Contact</font>
</td>
</tr>
<tr>
<td align="center"  class="fontsforweb_fontid_423">
<p align="center">
Telephone number 1 : 076 547 4796<br><br>
Telephone number 2 : 073 076 0576<br><br>
</p>
</td>
<td align="center"  class="fontsforweb_fontid_423">
<p align="center">
Email 1 : wppc.rules@gmail.com<br><br>
Email 2 : kragcooperation@gmail.com<br><br>
</p>
</td>
</tr>
</table>
';
echo'
<table   class="fontsforweb_fontid_423" border="0px"width="100%"align="center"style="background-color:white;color:#495456;padding:10px 20px 10px 20px;">
<tr>
<td colspan="2"align="center"  class="fontsforweb_fontid_423">
<p>
Copyright &copy; <span id="today_year"></span> All rights reserved | This template is made by KRAG Corp</p>
</td>
</tr>
</table>
';

mysqli_close($conn);

$myfile = fopen("../txt/table_of_search_results_id.txt", "w+") or die("Unable to open file!");
$txt = $table_of_search_results_id;
fwrite($myfile, $txt);
fclose($myfile);

?>
<body>
<html>