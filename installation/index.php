<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPPC Rules</title>
	      <script type = "text/javascript" 
         src = "../data/js/jquery.3.2.1.min.js">
      </script>
	<link rel="icon" href="../data/ico/logo.png" type="image/png">
	<link rel="stylesheet" href="files/w3.css">
    <link rel="stylesheet" href="files/css.css">
    <link rel="stylesheet" href="files/font-awesome.min.css">
    <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#database_name_send").click(function(event){
               $.post( 
                  "install.php",
                  { servername_name: $("#servername_name").val(),
                    username_name: $("#username_name").val(),
                    password: $("#password").val(),
                    database_name: $("#database_name").val() },
                  function(data) {
                     $('#php_database').html(data);
                  }
               );
					
            });
				
         });
      </script>
  </head>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

<body class=" w3-content" style="max-width:1600px;background-color:#e6f3ff;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="../data/png/logo.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>WPPC Rules</b></h4>
    <p class="w3-text-grey">Powered by KRAG Corp</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal">Database</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Tables</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Help</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Installation</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Guide</span> 
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">

      <img src="../data/png/dashboard_full_1.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white"><br>
        <h4><b>Step 1 : Install the database, tables and all the files</b></h4>
        <p>
		<input type="text" id="servername_name" name="servername_name" placeholder="Servername name" class="servername_name"style="width:100%;border-color:#0080ff;border-style:solid;border-width:1px;padding:20px;color:#0080ff;"><br><br>
		<input type="text" id="username_name" name="username_name" placeholder="Username name" class="username_name"style="width:100%;border-color:#0080ff;border-style:solid;border-width:1px;padding:20px;color:#0080ff;"><br><br>
		<input type="text" id="password" name="password" placeholder="Password" class="password"style="width:100%;border-color:#0080ff;border-style:solid;border-width:1px;padding:20px;color:#0080ff;"><br><br>
		<input type="text" id="database_name" name="database_name" placeholder="Database name" class="database_name"style="width:100%;border-color:#0080ff;border-style:solid;border-width:1px;padding:20px;color:#0080ff;"><br><br>
		<input type="button" value="Create"style="width:100%;background-color:#3399ff;border-style:solid;border-width:1px;padding:20px;color:white;border-color:#0080ff;"id="database_name_send"></p><p align="justify"id="php_database"></p>
      </div>

  </div>

  <!-- Images of Me -->

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Step 2 : Check function</b></h4>
	<input type="button" value="Check the function of all the tables"style="width:100%;background-color:#3399ff;border-style:solid;border-width:1px;padding:20px;color:white;border-color:#0080ff;"id="ckeck_function">
    <p id="ckeck_function_display"></p>
    <hr>

  </div>
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large"style="background-color:#e6ffee;">
    <h4 id="contact"><b>Contact if trouble created</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p>Email :</p>
        <p>kragcooperation@gmail.com</p>
		<p>wppc.rules@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p>Adress :</p>
        <p>528/h, Valihida, Kaduwela, Sri Lanka</p>
		<p>10640</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p>Telephone number :</p>
        <p>076 073 0576</p>
		<p>076 547 4796</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a  title="KRAG Corp" target="_blank" class="w3-hover-opacity">KRAG Corp</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
