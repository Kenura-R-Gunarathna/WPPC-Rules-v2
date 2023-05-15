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
	$('#compose_mail_message_show').hide();
	$( "#send_mail_all_the_info" ).click(function() {
if($("#title_of_the_email").val()==""||$("#title_of_the_email").val()==null){
alert("Title must be filled out");	
	}
	else if($("#to_mail").val()==""||$("#to_mail").val()==null){
alert("Email receiver must be filled out");	
	}	
	else{
		$.post( 
                  "../data/php/compose_mail.php",
                  { email: acc_email_mail_to_someone,
				    acc_password_send: acc_pass_mail_to_someone,
                    email_to: $("#to_mail").val(), 
					title: $("#title_of_the_email").val(),
					details: $("#details_of_the_email").val()},
                  function(data) {
					  $('#compose_mail_message_show').fadeIn(300);
					  window.open("#compose_mail_message_show", "_self");
                     $('#compose_mail_message').html(data);
                  }
               );
	}
});						
});
</script>
</head>
<body>
<?php

$acc_email = htmlspecialchars($_POST['acc_email']);
$acc_passw = htmlspecialchars($_POST['acc_passw']);

echo'<script>
var acc_email_mail_to_someone="'.$acc_email.'";
var acc_pass_mail_to_someone="'.$acc_passw.'";
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

echo'
<div width="100%" class="compose_email_title"style="">
<span class="fontsforweb_fontid_423"style="color:white;padding-right:20px;"><img src="../data/png/compose.png" style=""  width="10px"title="Compose"></span>
<span class="fontsforweb_fontid_423"style="padding-right:20px;color:white;">Compose</span>
<span class="fontsforweb_fontid_423"style="padding-right:20px;color:white;">'.$acc_email.'</span>
</div>
<style>
.compose_email_title{padding:15px;background-color:#0099e6;color:white;opacity:0.9;}
.compose_email_title:hover{padding:15px;background-color:#0099e6;color:white;opacity:0.85;cursor:pointer;}
</style>
<div class="container_compose">
<p align="center"id="compose_mail_message_show"><span class="fontsforweb_fontid_423"id="compose_mail_message"style="padding:10px 20px 10px 20px;background-color:#26ea8f;border-radius:3px;">Write Your massage</span><br></p>
  <div class="row_compose">
    <div class="col-25">
      <label for="fname"class="fontsforweb_fontid_423">To</label>
    </div>
    <div class="col-75">
      <input type="email" id="to_mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="email@example.com">
    </div>
  </div>
  <div class="row_compose">
    <div class="col-25">
      <label for="lname"class="fontsforweb_fontid_423">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title_of_the_email" name="title_of_the_email" placeholder="Title..">
    </div>
  </div>
  <div class="row_compose">
    <div class="col-25">
      <label for="subject"class="fontsforweb_fontid_423">Details</label>
    </div>
    <div class="col-75">
      <textarea id="details_of_the_email" name="details_of_the_email" placeholder="Details.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row_compose"><br>
    <input type="submit" id="send_mail_all_the_info" value="Send"class="fontsforweb_fontid_423">
  </div>

</div>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

#to_mail{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;		
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #0099e6;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #2db0f2;
}

.container_compose {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row_compose:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

';


?>
<body>
<html>