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

    <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
		$("#password").keyup(function(){
			
			var str = $('#password').val();
            var n = str.length;
			
			if(n<5){
				$('#no_of_password_char').text("Minimum 5 characters");
			}
			else if(n>20){
				$('#no_of_password_char').text("Maximum 20 characters");
			}
			else{

		    }
			
		 });
		 
            $("#log_in").click(function(event){
  
  			var str2 = $('#password').val();
            var n2 = str2.length;
			
			if(n2<5){
				alert("Password must be greater than 5 characters");
			}
			else if(n2>20){
				alert("Password must be less than 20 characters");
			}
			else{

		    } 
if($('#email').val()==""||$('#email').val()==null){
alert("Email must be filled out");	
	}

				if($("#retype_password").val()==""||$("#retype_password").val()==null){
					alert();
				}
				else if($("#retype_password").val()==$("#password").val()){
               $.post( 
                  "../data/php/account_log_in.php",
                  { email: $("#email").val(),
                    password: $("#password").val() },
                  function(data) {
                     $('#log_in_message').html(data);
                  }
               );
				}else{
               alert("Password you entered and Retyped password seems mismatch");
				}				
            });
			$("#sign_in").click(function(event){
             window.open("index6.php","_self")
			});
			$("#forget_acc").click(function(event){
			 window.open("index8.php","_self")	
			});
         });
      </script>
<style>
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  color:gray;
}
.hover_hyperlink{color:#1a8cff;border-color:#1a8cff;}
#forget_acc:hover{cursor:pointer;color:#3399ff;}
#sign_in:hover{cursor:pointer;color:#3399ff;}
#log_in:hover{cursor:pointer;background-color:#1a8cff;border-color:#1a8cff;}
#log_in{padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#0080ff;background-color:#0080ff;border-style:solid;width:100%;color:white;}
</style>
<script>
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

<p align="center" style="margin-left:20px;"><div align="center" style="font-size:14px;width:100%;padding-bottom:5px;padding-top:5px;"><div class="login_header" style=""><img src="../data/png/logo.png" style="vertical-align: middle;margin-bottom:3px;margin-right:10px;"  width="28px"title="Home"><font style="font-size:17px;">WPPC Rules - Create an account</font></div></div>
</p>
<p align="left" style="margin-left:20px;"><div align="center" style="font-size:12px;text-transform:uppercase;font-weight:bold;width:100%;padding-bottom:0px;"></div>
<hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p>
<div style="padding:4px 20px 20px 20px;"><form>
<p align="left" style="margin-left:20px;"><span id="log_in_message"></span><div align="left" style="font-size:12px;text-transform:uppercase;font-weight:bold;position:relative;width:80%;padding-bottom:5px;">EMAIL ADDERESS</div>
<input type="email"placeholder="email@example.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"id="email" name="email"style="padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;border-style:solid;width:100%;"></p>
<p align="left" style="margin-left:20px;"><div align="left" style="font-size:12px;text-transform:uppercase;font-weight:bold;position:relative;width:80%;padding-bottom:5px;padding-top:5px;">PASSWORD ( Min - 5/ Max - 20)&nbsp<span id="no_of_password_char"style="color:#ff0066;"></span></div>
<input type="password"placeholder="Password" id="password" style="padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;border-style:solid;width:100%;"></p>

<p align="left" style="margin-left:20px;"><div align="left" style="font-size:12px;text-transform:uppercase;font-weight:bold;position:relative;width:80%;padding-bottom:5px;padding-top:5px;">RETYPE PASSWORD</div>
<input type="password"placeholder="Retype password" id="retype_password" style="padding:10px 40px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;border-style:solid;width:100%;"></p>


<div align="center" style="font-size:12px;text-transform:uppercase;font-weight:bold;width:80%;padding-bottom:0px;padding-top:20px;"></div>
<input type="button" value="Log in" id="log_in" style=""></div>
<p align="left" style="margin-left:20px;"><div align="center" style="font-size:12px;text-transform:uppercase;font-weight:bold;width:100%;padding-bottom:0px;"></div>
<hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p></form>
<div style="padding-left:10px;">
<p align="center" style="margin-left:20px;"><div align="center" style="font-size:14px;width:100%;padding-bottom:0px;"><span align="center"class="hover_hyperlink"id="forget_acc">Forgot your password?</span></div>
</p>
<p align="center" style="margin-left:20px;"><div align="center" style="font-size:14px;width:100%;padding-bottom:0px;"><span align="center"class="hover_hyperlink"id="sign_in">Do you already has an account? Sign in then</span></div>
</p>
</div>
</div>



</td>
</tr>
</table>
</body>
</html>