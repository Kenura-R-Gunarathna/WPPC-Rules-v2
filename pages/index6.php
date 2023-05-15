<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../data/css/web/style.css" rel="stylesheet">
</head>
<script src="../data/js/web/javascript.js" type="text/javascript"></script>
<script src="../data/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../data/js/popper.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

<style>
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  color:gray;
}
</style>
    <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {

			$("#log_in").click(function(event){
             window.open("index7.php","_self")
			});
			$("#forget_acc").click(function(event){
			 window.open("index8.php","_self")	
			});
         });
      </script>
	  <script>
function signincheck()
{

}
// window on load event
function loader(){
   $('.preloader').fadeOut('slow');
}
window.onload = loader;

$(document).ready(function(){

});
$( window ).resize(function() {

});
$( document ).resize(function() {

});
</script>

<body style="background-color:#f2f5ff;">
<table align="center"height="100%"width="100%"style="position:absolute;top:0px;left:0px;bottom:0px;right:0px;">
<tr>
<td align="left" colspan="2" style="margin:auto;"height="80%">
<div class="login_container" style="border-width:1px;border-style:solid;border-color:#b3b3b3;margin:auto;margin-left:30%;margin-right:30%;border-radius:1px;">

<p align="center" style="margin-left:20px;"><div align="center" style="font-size:14px;width:100%;padding-bottom:5px;padding-top:5px;"><div class="login_header" style=""><img src="../data/png/logo.png" style="vertical-align: middle;margin-bottom:3px;margin-right:10px;"  width="28px"title="Home"><font style="font-size:17px;">WPPC Rules - Sign in</font></div></div>
</p>
<p align="left" style="margin-left:20px;"><div align="center" style="font-size:12px;text-transform:uppercase;font-weight:bold;width:100%;padding-bottom:0px;"></div>
<hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p>
<div style="padding:4px 20px 20px 20px;"><form action="index5.php" method="post" name='signin' onsubmit="return signincheck();">
<p align="left" style="margin-left:20px;"><span id="sign_in_message"></span><div align="left" style="font-size:12px;text-transform:uppercase;font-weight:bold;position:relative;width:80%;padding-bottom:5px;">EMAIL ADDERESS</div>
<input type="email"placeholder="email@example.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"name="email"id="email" style="padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;border-style:solid;width:100%;"></p>
<p align="left" style="margin-left:20px;"><div align="left" style="font-size:12px;text-transform:uppercase;font-weight:bold;position:relative;width:80%;padding-bottom:5px;padding-top:5px;">PASSWORD</div>
<input type="password"placeholder="Password" id="password" name="password" style="padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;border-style:solid;width:100%;"></p>
<div align="center" style="font-size:12px;text-transform:uppercase;font-weight:bold;width:80%;padding-bottom:0px;padding-top:20px;"></div>
<input type="submit" id="sign_in" name="signin_submit"value="Sign in" style="padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#0080ff;background-color:#0080ff;border-style:solid;width:100%;color:white;"></div></form>
<p align="left" style="margin-left:20px;"><div align="center" style="font-size:12px;text-transform:uppercase;font-weight:bold;width:100%;padding-bottom:0px;"></div>
<hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p>
<div style="padding-left:10px;">
<p align="center" style="margin-left:20px;"><div align="center" style="font-size:14px;width:100%;padding-bottom:0px;"><span align="center"style="color:#0073e6;"id="forget_acc">Forgot your password?</span></div>
</p>
<p align="center" style="margin-left:20px;"><div align="center" style="font-size:14px;width:100%;padding-bottom:0px;"><span align="center"style="color:#0073e6;"id="log_in">Are you new? Log in then</span></div>
</p>
</div>
</div>



</td>
</tr>
</table>
</body>
</html>