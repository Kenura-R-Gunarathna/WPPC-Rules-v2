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
<script>function voice_search_bt_remote_click() {document.getElementById("voice_search_bt").click();}</script>
<script>function settings_apply_bt_remote_click() {document.getElementById("home_dash_bt").click();}</script>
<script>function settings_default_bt_remote_click() {
	document.getElementById("table_con").style.backgroundColor = "white";
	document.getElementById("search").style.backgroundColor = "white";
	document.getElementById("container_1_main").style.backgroundColor = "#f2f5ff";
	document.getElementById("spacial_font_color").style.color  = "##00b8e6";
	document.getElementById("table_con").style.color  = "gray";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#00b8e6";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#00b8e6";
	}</script>
<script>
// window on load event
function loader(){
   $('.preloader').fadeOut('slow');
}
window.onload = loader;

$(document).ready(function(){
	$("#search_text").text("");
	$('#search').val("");
	$("#search_text").hide();
	$("#paratextresult").hide();
$("#container_1").height($(window).height() - $("#header").height() - $("#footer").height() - 5);

    window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
    let finalTranscript = '';
    let recognition = new window.SpeechRecognition();
    recognition.interimResults = true;
    recognition.maxAlternatives = 10;
    recognition.continuous = true;
    recognition.onresult = (event) => {
      let interimTranscript = '';
      for (let i = event.resultIndex, len = event.results.length; i < len; i++) {
		  var phpsearch = $("#search_text").show();
		  var phpsearch1 = $("#paratextresult").show();
		  var search_text = $("#search_text").text();
		  $("#voice_search_results_display").html('<hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"><p align="center"style="font-size:28px;">Voice search for rule number&nbsp&nbsp<span id="search_text"></span></p><p style="font-size:18px;color:#737373;">Rule number&nbsp<span id="Rule_id"></span></p><p align="left"><span id="paratextresult"></span><br><br><br><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin4()"method="popup">Sinhala</a><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin5()"method="popup">Tamil</a><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin6()"method="popup">English</a><style>a:hover{cursor:pointer;}</style></p>');
		  $("#Rule_id").text(search_text);
		  $( "#paratextresult" ).load( "./search/"+search_text+".txt");
		  var paratextresult =$( "#paratextresult" ).html();
        let transcript = event.results[i][0].transcript;
        if (event.results[i].isFinal) {
          finalTranscript += transcript;
        } else {
          interimTranscript += transcript;
        }
      }
      document.querySelector('#search_text').innerHTML = finalTranscript + '<i style="color:#ddd;">' + interimTranscript + '</>';
	  window.open("#search_text", "_parent");
    }
  recognition.stop();
  
  var t;
  t=setTimeout(myFunction,10000);
  clearTimeout(t);
  function myFunction() {
    var txt;
	clearTimeout(t);
	recognition.stop();
	$("#card_title").hide();
    $("#card_title2").hide();
	$("#card_category").html('<br><a id="voice_search_bt_remote_click_a" style="color:white;padding:20px;background-color:#0066cc;text-decoration:none;" onclick="voice_search_bt_remote_click()"><style>#voice_search_bt_remote_click_a:hover{cursor:pointer;}</style>Start a new voice search</a><br><br>');
	recognition.stop();
}

$("#voice_search_bt").click(function(){
    document.getElementById("magnify_sarch_img").style.backgroundColor  = "white";	
    document.getElementById("search").style.backgroundColor  = "white";
    document.getElementById("search").style.color  = "gray";
	document.getElementById("voice_search_td").style.borderColor = "#0099e6";
	document.getElementById("home_dash_td").style.borderColor = "white";
	document.getElementById("text_search_td").style.borderColor = "white";
	document.getElementById("notifications_td").style.borderColor = "white";
	document.getElementById("settings_td").style.borderColor = "white";
	$("#home_details_heading").html('<span id="spacial_font_color" style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Voice search</span>');
	$("#container_of_details").html('<p id="card_title"align="center"style="padding-bottom:0px;font-size:28px;"><img src="../data/gif/voice.gif"height="300px"width="400px"><p align="center"id="card_title2"style="font-size:28px;">Say the rule id</p><p align="center"id="card_category">Only rule and procedure number. Please spell the words one by one slowly.</p></p><div id="voice_search_results_display"></div>');
    
	   window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
    let finalTranscript = '';
    let recognition = new window.SpeechRecognition();
    recognition.interimResults = true;
    recognition.maxAlternatives = 10;
    recognition.continuous = true;
    recognition.onresult = (event) => {
      let interimTranscript = '';
      for (let i = event.resultIndex, len = event.results.length; i < len; i++) {
		  var phpsearch = $("#search_text").show();
		  var phpsearch1 = $("#paratextresult").show();
		  var search_text = $("#search_text").text();
		  $("#voice_search_results_display").html('<hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"><p align="center"style="font-size:28px;">Voice search for rule number&nbsp&nbsp<span id="search_text"></span></p><p style="font-size:18px;color:#737373;">Rule number&nbsp<span id="Rule_id"></span></p><p align="left"><span id="paratextresult"></span><br><br><br><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin4()"method="popup">Sinhala</a><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin5()"method="popup">Tamil</a><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin6()"method="popup">English</a><style>a:hover{cursor:pointer;}</style></p>');
		  $("#Rule_id").text(search_text);
		  $( "#paratextresult" ).load( "./search/"+search_text+".txt");
        let transcript = event.results[i][0].transcript;
        if (event.results[i].isFinal) {
          finalTranscript += transcript;
        } else {
          interimTranscript += transcript;
        }
      }
      document.querySelector('#search_text').innerHTML = finalTranscript + '<i style="color:#ddd;">' + interimTranscript + '</>';
	  window.open("#search_text", "_parent");
    }
       recognition.start();
       t=setTimeout(myFunction,10000);
});

$("#search").keyup(function(){
	$("#search_text").text("");
	document.getElementById("search").focus();
	document.getElementById("text_search_td").style.borderColor = "#0099e6";
	document.getElementById("voice_search_td").style.borderColor = "white";
	document.getElementById("home_dash_td").style.borderColor = "white";
	document.getElementById("notifications_td").style.borderColor = "white";
	document.getElementById("settings_td").style.borderColor = "white";
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Search</span>');
	$("#container_of_details").html('<p id="search_click_color_text" style="font-size:22px;">Search for rule number &nbsp'+$("#search").val()+'</p><p style="font-size:15px;"align="center"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p><div id="search_results_display"></div>');
var searchtext=document.getElementById("search").value;

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {

var text1='<p style="font-size:18px;color:#737373;">Rule number&nbsp'+searchtext+'</p>';
var text2=this.responseText;
var text3='<br><br><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin1()"method="popup">Sinhala</a><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin2()"method="popup">Tamil</a><a style="color:white;padding:10px;background-color:#0066cc;"onclick="openWin3()"method="popup">English</a><style>a:hover{cursor:pointer;}</style><br><br>';
var finaltxt=text1+text2+text3;
$("#search_results_display").html(finaltxt);
}
  };
  xhttp.open("GET", "./search/"+searchtext+".txt", true);
  xhttp.send();
  
  recognition.stop();
  clearTimeout(t);
});
$("#home_dash_bt").click(function(){
	document.getElementById("magnify_sarch_img").style.backgroundColor  = "white";	
    document.getElementById("search").style.backgroundColor  = "white";
    document.getElementById("search").style.color  = "gray";
	$("#search_text").text("");
	$('#search').val("");
	document.getElementById("text_search_td").style.borderColor = "white";
	document.getElementById("voice_search_td").style.borderColor = "white";
	document.getElementById("home_dash_td").style.borderColor = "#0099e6";
	document.getElementById("notifications_td").style.borderColor = "white";
	document.getElementById("settings_td").style.borderColor = "white";
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Dashboard</span>');
	$("#container_of_details").html('<p style="font-size:32px;"align="center">Western Province Provincial Council</p><p style="font-size:22px;"align="center">Web application with all the rules and regulations for meetings</p><p style="font-size:22px;"align="center"><img src="../data/png/wppc_flag.png"></p><p style="font-size:15px;"align="center">This is an open source web application for everyone. Any one can use this service at any time any where without wasting time.</p><p style="font-size:15px;"align="center">Minly this web app about the rules and pocedeures of western provincial council secretariat.</p><p style="font-size:22px;"align="center"><img src="../data/png/sencole.png" width="30%"></p><p style="font-size:15px;"align="center"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p><p style="font-size:32px;"align="center">Features</p><br><br><p style="font-size:22px;"align="center"><img src="../data/png/dash.png"></p><p style="font-size:22px;"align="center">Dashboard</p><p style="font-size:15px;"align="center">Well managed detabase system, AI included voice sepach recognition system and 100% accurate search option.</p><br><br><p style="font-size:22px;"align="center"><img src="../data/png/cloud.png"></p><p style="font-size:22px;"align="center">Any where any time</p><p style="font-size:15px;"align="center">This is a free online service for everyone.</p><br><br><p style="font-size:22px;"align="center"><img src="../data/png/res.png"></p><p style="font-size:22px;"align="center">Responsive for any device</p><p style="font-size:15px;"align="center">Web app is build for suit any mobile device or pc.</p><br><br><p style="font-size:15px;"align="center"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p><p style="font-size:32px;"align="center">Contact</p><p style="font-size:15px;"align="center">Address : <span style="color:#0099e6;">Western Province Provincial Council</span><br><span style="color:#0099e6;">No:204, Denzil Kobbekaduwa Mawatha</span><br><span style="color:#0099e6;">Battaramulla</span></p><p style="font-size:15px;"align="center">Tele: <span style="color:#0099e6;">0765474796</span></p><p style="font-size:15px;"align="center">Email :<span style="color:#0099e6;">wppc.rules@gmail.com</span></p><p style="font-size:15px;"align="center">Url : <span style="color:#0099e6;">wppcrules.epizy.com</span></p><br>');
	recognition.stop();
	clearTimeout(t);
});
$("#notifications_bt").click(function(){
	document.getElementById("magnify_sarch_img").style.backgroundColor  = "white";	
    document.getElementById("search").style.backgroundColor  = "white";
    document.getElementById("search").style.color  = "gray";
	$("#search_text").text("");
	$('#search').val("");
	document.getElementById("text_search_td").style.borderColor = "white";
	document.getElementById("voice_search_td").style.borderColor = "white";
	document.getElementById("home_dash_td").style.borderColor = "white";
	document.getElementById("notifications_td").style.borderColor = "#0099e6";
	document.getElementById("settings_td").style.borderColor = "white";
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Books</span>');
	$("#container_of_details").html('<p style="font-size:22px;">Sinhala Book</p><p style="font-size:15px;color:white;padding:10px;background-color:#0066cc;"onclick="openWin7()" id="paragraph_hyperlink" method="popup"align="center">First page</p><p style="font-size:15px;color:white;padding:10px;background-color:#0066cc;"onclick="openWin8()" id="paragraph_hyperlink" method="popup"align="center">Book content</p><p style="font-size:15px;"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p><p style="font-size:22px;">Tamil Book</p><p style="font-size:15px;color:white;padding:10px;background-color:#0066cc;"onclick="openWin9()" id="paragraph_hyperlink" method="popup"align="center">First page</p><p style="font-size:15px;color:white;padding:10px;background-color:#0066cc;"onclick="openWin10()" id="paragraph_hyperlink" method="popup"align="center">Book content</p><p style="font-size:15px;"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p><p style="font-size:22px;">English Book</p><p style="font-size:15px;color:white;padding:10px;background-color:#0066cc;"onclick="openWin11()" id="paragraph_hyperlink" method="popup"align="center">First page</p><p style="font-size:15px;color:white;padding:10px;background-color:#0066cc;"onclick="openWin12()" id="paragraph_hyperlink" method="popup"align="center">Book content</p><p style="font-size:15px;"></p><div id="search_results_display"></div>');
    var searchtext=document.getElementById("search").value;
	recognition.stop();
	clearTimeout(t);
});
$("#settings_bt").click(function(){
	document.getElementById("magnify_sarch_img").style.backgroundColor  = "white";	
    document.getElementById("search").style.backgroundColor  = "white";
    document.getElementById("search").style.color  = "gray";
	$("#search_text").text("");
	$('#search').val("");
	document.getElementById("text_search_td").style.borderColor = "white";
	document.getElementById("voice_search_td").style.borderColor = "white";
	document.getElementById("home_dash_td").style.borderColor = "white";
	document.getElementById("notifications_td").style.borderColor = "white";
	document.getElementById("settings_td").style.borderColor = "#0099e6";
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Settings</span>');
	$("#container_of_details").html('<p style="font-size:22px;">Settings</p><p style="font-size:19px;">Menu</p><p style="font-size:15px;"class="moue_hover_setings_color">Tab colour&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="2d89ef"style="background-color:#2d89ef;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2b5797"style="background-color:#2b5797;text-align:right;">&nbsp&nbsp&nbsp</span><span class="active" id="white"style="background-color:white;text-align:right;">&nbsp&nbsp&nbsp</span><span id="eff4ff"style="background-color:#eff4ff;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1d1d1d"style="background-color:#1d1d1d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ffc40d"style="background-color:#ffc40d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ee1111"style="background-color:#ee1111;text-align:right;">&nbsp&nbsp&nbsp</span><span id="603cba"style="background-color:#603cba;text-align:right;">&nbsp&nbsp&nbsp</span><span id="7e3878"style="background-color:#7e3878;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9f00a7"style="background-color:#9f00a7;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ff0097"style="background-color:#ff0097;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1e7145"style="background-color:#1e7145;text-align:right;">&nbsp&nbsp&nbsp</span><span id="00a300"style="background-color:#00a300;text-align:right;">&nbsp&nbsp&nbsp</span><span id="99b433"style="background-color:#99b433;text-align:right;">&nbsp&nbsp&nbsp</span>&nbsp or &nbsp <span id="FF6F61"style="background-color:#FF6F61;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9B1B30"style="background-color:#9B1B30;text-align:right;">&nbsp&nbsp&nbsp</span><span id="77212E"style="background-color:#77212E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F5D6C6"style="background-color:#F5D6C6;text-align:right;">&nbsp&nbsp&nbsp</span><span id="FA9A85"style="background-color:#FA9A85;text-align:right;">&nbsp&nbsp&nbsp</span><span id="5A3E36"style="background-color:#5A3E36;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A4B7C"style="background-color:#2A4B7C;text-align:right;">&nbsp&nbsp&nbsp</span><span id="577284"style="background-color:#577284;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F96714"style="background-color:#F96714;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F3E0BE"style="background-color:#F3E0BE;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A293E"style="background-color:#2A293E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9F9C99"style="background-color:#9F9C99;text-align:right;">&nbsp&nbsp&nbsp</span><span id="615550"style="background-color:#615550;text-align:right;">&nbsp&nbsp&nbsp</span><span id="6B5B95"style="background-color:#6B5B95;text-align:right;">&nbsp&nbsp&nbsp</span></p><p class="moue_hover_setings_color" style="font-size:15px;">Content colour&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="2d89ef_cc"style="background-color:#2d89ef;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2b5797_cc"style="background-color:#2b5797;text-align:right;">&nbsp&nbsp&nbsp</span><span class="active" id="white_cc"style="background-color:white;text-align:right;">&nbsp&nbsp&nbsp</span><span id="eff4ff_cc"style="background-color:#eff4ff;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1d1d1d_cc"style="background-color:#1d1d1d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ffc40d_cc"style="background-color:#ffc40d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ee1111_cc"style="background-color:#ee1111;text-align:right;">&nbsp&nbsp&nbsp</span><span id="603cba_cc"style="background-color:#603cba;text-align:right;">&nbsp&nbsp&nbsp</span><span id="7e3878_cc"style="background-color:#7e3878;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9f00a7_cc"style="background-color:#9f00a7;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ff0097_cc"style="background-color:#ff0097;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1e7145_cc"style="background-color:#1e7145;text-align:right;">&nbsp&nbsp&nbsp</span><span id="00a300_cc"style="background-color:#00a300;text-align:right;">&nbsp&nbsp&nbsp</span><span id="99b433_cc"style="background-color:#99b433;text-align:right;">&nbsp&nbsp&nbsp</span>&nbsp or &nbsp <span id="FF6F61_cc"style="background-color:#FF6F61;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9B1B30_cc"style="background-color:#9B1B30;text-align:right;">&nbsp&nbsp&nbsp</span><span id="77212E_cc"style="background-color:#77212E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F5D6C6_cc"style="background-color:#F5D6C6;text-align:right;">&nbsp&nbsp&nbsp</span><span id="FA9A85_cc"style="background-color:#FA9A85;text-align:right;">&nbsp&nbsp&nbsp</span><span id="5A3E36_cc"style="background-color:#5A3E36;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A4B7C_cc"style="background-color:#2A4B7C;text-align:right;">&nbsp&nbsp&nbsp</span><span id="577284_cc"style="background-color:#577284;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F96714_cc"style="background-color:#F96714;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F3E0BE_cc"style="background-color:#F3E0BE;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A293E_cc"style="background-color:#2A293E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9F9C99_cc"style="background-color:#9F9C99;text-align:right;">&nbsp&nbsp&nbsp</span><span id="615550_cc"style="background-color:#615550;text-align:right;">&nbsp&nbsp&nbsp</span><span id="6B5B95_cc"style="background-color:#6B5B95;text-align:right;">&nbsp&nbsp&nbsp</span></p><p style="font-size:19px;">Font</p><p class="moue_hover_setings_color" style="font-size:15px;">Normal font colour&nbsp&nbsp<span id="2d89ef_nfc"style="background-color:#2d89ef;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2b5797_nfc"style="background-color:#2b5797;text-align:right;">&nbsp&nbsp&nbsp</span><span class="active" id="white_nfc"style="background-color:white;text-align:right;">&nbsp&nbsp&nbsp</span><span id="eff4ff_nfc"style="background-color:#eff4ff;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1d1d1d_nfc"style="background-color:#1d1d1d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ffc40d_nfc"style="background-color:#ffc40d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ee1111_nfc"style="background-color:#ee1111;text-align:right;">&nbsp&nbsp&nbsp</span><span id="603cba_nfc"style="background-color:#603cba;text-align:right;">&nbsp&nbsp&nbsp</span><span id="7e3878_nfc"style="background-color:#7e3878;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9f00a7_nfc"style="background-color:#9f00a7;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ff0097_nfc"style="background-color:#ff0097;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1e7145_nfc"style="background-color:#1e7145;text-align:right;">&nbsp&nbsp&nbsp</span><span id="00a300_nfc"style="background-color:#00a300;text-align:right;">&nbsp&nbsp&nbsp</span><span id="99b433_nfc"style="background-color:#99b433;text-align:right;">&nbsp&nbsp&nbsp</span>&nbsp or &nbsp <span id="FF6F61_nfc"style="background-color:#FF6F61;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9B1B30_nfc"style="background-color:#9B1B30;text-align:right;">&nbsp&nbsp&nbsp</span><span id="77212E_nfc"style="background-color:#77212E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F5D6C6_nfc"style="background-color:#F5D6C6;text-align:right;">&nbsp&nbsp&nbsp</span><span id="FA9A85_nfc"style="background-color:#FA9A85;text-align:right;">&nbsp&nbsp&nbsp</span><span id="5A3E36_nfc"style="background-color:#5A3E36;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A4B7C_nfc"style="background-color:#2A4B7C;text-align:right;">&nbsp&nbsp&nbsp</span><span id="577284_nfc"style="background-color:#577284;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F96714_nfc"style="background-color:#F96714;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F3E0BE_nfc"style="background-color:#F3E0BE;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A293E_nfc"style="background-color:#2A293E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9F9C99_nfc"style="background-color:#9F9C99;text-align:right;">&nbsp&nbsp&nbsp</span><span id="615550_nfc"style="background-color:#615550;text-align:right;">&nbsp&nbsp&nbsp</span><span id="6B5B95_nfc"style="background-color:#6B5B95;text-align:right;">&nbsp&nbsp&nbsp</span></p><p class="moue_hover_setings_color" style="font-size:15px;">Special font colour&nbsp&nbsp&nbsp<span id="2d89ef_sfc"style="background-color:#2d89ef;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2b5797_sfc"style="background-color:#2b5797;text-align:right;">&nbsp&nbsp&nbsp</span><span class="active" id="white_sfc"style="background-color:white;text-align:right;">&nbsp&nbsp&nbsp</span><span id="eff4ff_sfc"style="background-color:#eff4ff;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1d1d1d_sfc"style="background-color:#1d1d1d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ffc40d_sfc"style="background-color:#ffc40d;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ee1111_sfc"style="background-color:#ee1111;text-align:right;">&nbsp&nbsp&nbsp</span><span id="603cba_sfc"style="background-color:#603cba;text-align:right;">&nbsp&nbsp&nbsp</span><span id="7e3878_sfc"style="background-color:#7e3878;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9f00a7_sfc"style="background-color:#9f00a7;text-align:right;">&nbsp&nbsp&nbsp</span><span id="ff0097_sfc"style="background-color:#ff0097;text-align:right;">&nbsp&nbsp&nbsp</span><span id="1e7145_sfc"style="background-color:#1e7145;text-align:right;">&nbsp&nbsp&nbsp</span><span id="00a300_sfc"style="background-color:#00a300;text-align:right;">&nbsp&nbsp&nbsp</span><span id="99b433_sfc"style="background-color:#99b433;text-align:right;">&nbsp&nbsp&nbsp</span>&nbsp or &nbsp <span id="FF6F61_sfc"style="background-color:#FF6F61;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9B1B30_sfc"style="background-color:#9B1B30;text-align:right;">&nbsp&nbsp&nbsp</span><span id="77212E_sfc"style="background-color:#77212E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F5D6C6_sfc"style="background-color:#F5D6C6;text-align:right;">&nbsp&nbsp&nbsp</span><span id="FA9A85_sfc"style="background-color:#FA9A85;text-align:right;">&nbsp&nbsp&nbsp</span><span id="5A3E36_sfc"style="background-color:#5A3E36;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A4B7C_sfc"style="background-color:#2A4B7C;text-align:right;">&nbsp&nbsp&nbsp</span><span id="577284_sfc"style="background-color:#577284;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F96714_sfc"style="background-color:#F96714;text-align:right;">&nbsp&nbsp&nbsp</span><span id="F3E0BE_sfc"style="background-color:#F3E0BE;text-align:right;">&nbsp&nbsp&nbsp</span><span id="2A293E_sfc"style="background-color:#2A293E;text-align:right;">&nbsp&nbsp&nbsp</span><span id="9F9C99_sfc"style="background-color:#9F9C99;text-align:right;">&nbsp&nbsp&nbsp</span><span id="615550_sfc"style="background-color:#615550;text-align:right;">&nbsp&nbsp&nbsp</span><span id="6B5B95_sfc"style="background-color:#6B5B95;text-align:right;">&nbsp&nbsp&nbsp</span><br><br><br><i>All the settings you applied will be lost when you <b>Refresh</b> this website.</i><br><br><br><a id="voice_search_bt_remote_click_a" style="color:white;padding:20px;background-color:#0066cc;text-decoration:none;" onclick="settings_apply_bt_remote_click()"><style>#voice_search_bt_remote_click_a:hover{cursor:pointer;}</style>Ok</a>&nbsp&nbsp<a id="voice_search_bt_remote_click_a" style="color:white;padding:20px;background-color:#0066cc;text-decoration:none;" onclick="settings_default_bt_remote_click()"><style>#voice_search_bt_remote_click_a:hover{cursor:pointer;}</style>Apply default settings</a></p><div id="search_results_display"></div>');
    var searchtext=document.getElementById("search").value;
	recognition.stop();
	clearTimeout(t);
	$("#white").click(function(){
	document.getElementById("table_con").style.backgroundColor = "white";
	document.getElementById("search").style.backgroundColor = "white";
    });
	$("#2d89ef").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#2d89ef";
	document.getElementById("search").style.backgroundColor = "#2d89ef";
    });
	$("#2b5797").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#2b5797";
	document.getElementById("search").style.backgroundColor = "#2b5797";
    });
	$("#eff4ff").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#eff4ff";
	document.getElementById("search").style.backgroundColor = "#eff4ff";
    });
	$("#1d1d1d").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#1d1d1d";
	document.getElementById("search").style.backgroundColor = "#1d1d1d";
    });
	$("#ffc40d").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#ffc40d";
	document.getElementById("search").style.backgroundColor = "#ffc40d";
    });
	$("#ee1111").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#ee1111";
	document.getElementById("search").style.backgroundColor = "#ee1111";
    });
	$("#603cba").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#603cba";
	document.getElementById("search").style.backgroundColor = "#603cba";
    });
	$("#7e3878").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#7e3878";
	document.getElementById("search").style.backgroundColor = "#7e3878";
    });
	$("#9f00a7").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#9f00a7";
	document.getElementById("search").style.backgroundColor = "#9f00a7";
    });
	$("#1e7145").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#1e7145";
	document.getElementById("search").style.backgroundColor = "#1e7145";
    });
	$("#00a300").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#00a300";
	document.getElementById("search").style.backgroundColor = "#00a300";
    });
	$("#99b433").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#99b433";
	document.getElementById("search").style.backgroundColor = "#99b433";
    });
	$("#FF6F61").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#FF6F61";
	document.getElementById("search").style.backgroundColor = "#FF6F61";
    });
	$("#9B1B30").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#9B1B30";
	document.getElementById("search").style.backgroundColor = "#9B1B30";
    });
	$("#F5D6C6").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#F5D6C6";
	document.getElementById("search").style.backgroundColor = "#F5D6C6";
    });
	$("#77212E").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#77212E";
	document.getElementById("search").style.backgroundColor = "#77212E";
    });
	$("#FA9A85").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#FA9A85";
	document.getElementById("search").style.backgroundColor = "#FA9A85";
    });
	$("#5A3E36").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#5A3E36";
	document.getElementById("search").style.backgroundColor = "#5A3E36";
    });
	$("#2A4B7C").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#2A4B7C";
	document.getElementById("search").style.backgroundColor = "#2A4B7C";
    });
	$("#577284").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#577284";
	document.getElementById("search").style.backgroundColor = "#577284";
    });
	$("#F96714").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#F96714";
	document.getElementById("search").style.backgroundColor = "#F96714";
    });
	$("#F3E0BE").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#F3E0BE";
	document.getElementById("search").style.backgroundColor = "#F3E0BE";
    });
	$("#2A293E").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#2A293E";
	document.getElementById("search").style.backgroundColor = "#2A293E";
    });
	$("#9F9C99").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#9F9C99";
	document.getElementById("search").style.backgroundColor = "#9F9C99";
    });
	$("#615550").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#615550";
	document.getElementById("search").style.backgroundColor = "#615550";
    });
	$("#6B5B95").click(function(){
	document.getElementById("table_con").style.backgroundColor = "#6B5B95";
	document.getElementById("search").style.backgroundColor = "#6B5B95";
    });
	$("#white_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "white";
    });
	$("#2d89ef_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#2d89ef";
    });
	$("#2b5797_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#2b5797";
    });
	$("#eff4ff_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#eff4ff";
    });
	$("#1d1d1d_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#1d1d1d";
    });
	$("#ffc40d_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#ffc40d";
    });
	$("#ee1111_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#ee1111";
    });
	$("#603cba_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#603cba";
    });
	$("#7e3878_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#7e3878";
    });
	$("#9f00a7_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#9f00a7";
    });
	$("#1e7145_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#1e7145";
    });
	$("#00a300_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#00a300";
    });
	$("#99b433_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#99b433";
    });
	$("#FF6F61_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#FF6F61";
    });
	$("#9B1B30_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#9B1B30";
    });
	$("#F5D6C6_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#F5D6C6";
    });
	$("#FA9A85_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#FA9A85";
    });
	$("#5A3E36_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#5A3E36";
    });
	$("#2A4B7C_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#2A4B7C";
    });
	$("#577284_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#577284";
    });
	$("#F96714_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#F96714";
    });
	$("#F3E0BE_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#F3E0BE";
    });
	$("#2A293E_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#2A293E";
    });
	$("#9F9C99_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#9F9C99";
    });
	$("#615550_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#615550";
    });
	$("#6B5B95_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#6B5B95";
    });
    $("#77212E_cc").click(function(){
	document.getElementById("container_1_main").style.backgroundColor = "#77212E";
    });
	$("#white_nfc").click(function(){
	document.getElementById("table_con").style.color  = "white";
    });
	$("#2d89ef_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#2d89ef";
    });
	$("#2b5797_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#2b5797";
    });
	$("#eff4ff_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#eff4ff";
    });
	$("#1d1d1d_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#1d1d1d";
    });
	$("#ffc40d_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#ffc40d";
    });
	$("#ee1111_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#ee1111";
    });
	$("#603cba_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#603cba";
    });
	$("#7e3878_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#7e3878";
    });
	$("#9f00a7_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#9f00a7";
    });
	$("#1e7145_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#1e7145";
    });
	$("#00a300_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#00a300";
    });
	$("#99b433_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#99b433";
    });
	$("#FF6F61_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#FF6F61";
    });
	$("#9B1B30_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#9B1B30";
    });
	$("#F5D6C6_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#F5D6C6";
    });
	$("#FA9A85_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#FA9A85";
    });
	$("#5A3E36_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#5A3E36";
    });
	$("#2A4B7C_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#2A4B7C";
    });
	$("#577284_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#577284";
    });
	$("#F96714_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#F96714";
    });
	$("#F3E0BE_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#F3E0BE";
    });
	$("#2A293E_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#2A293E";
    });
	$("#9F9C99_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#9F9C99";
    });
	$("#615550_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#615550";
    });
	$("#6B5B95_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#6B5B95";
    });
	$("#77212E_nfc").click(function(){
	document.getElementById("table_con").style.color  = "#77212E";
    });
	$("#white_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "white";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "white";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "white";
	$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "white";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "white";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "white";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "white";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "white";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "white";
	});
    });
	$("#2d89ef_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#2d89ef";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#2d89ef";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#2d89ef";
    $("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#2d89ef";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#2d89ef";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#2d89ef";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#2d89ef";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#2d89ef";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#2d89ef";
	});
    });
	$("#2b5797_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#2b5797";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#2b5797";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#2b5797";
		$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#2b5797";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#2b5797";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#2b5797";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#2b5797";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#2b5797";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#2b5797";
	});
    });
	$("#eff4ff_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#eff4ff";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#eff4ff";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#eff4ff";
		$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#eff4ff";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#eff4ff";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#eff4ff";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#eff4ff";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#eff4ff";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#eff4ff";
	});
    });
	$("#1d1d1d_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#1d1d1d";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#1d1d1d";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#1d1d1d";
		$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#1d1d1d";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#1d1d1d";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#1d1d1d";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#1d1d1d";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#1d1d1d";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#1d1d1d";
	});
    });
	$("#ffc40d_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#ffc40d";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#ffc40d";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#ffc40d";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#ffc40d";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#ffc40d";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#ffc40d";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#ffc40d";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#ffc40d";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#ffc40d";
	});
    });
	$("#ee1111_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#ee1111";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#ee1111";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#ee1111";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#ee1111";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#ee1111";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#ee1111";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#ee1111";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#ee1111";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#ee1111";
	});
    });
	$("#603cba_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#603cba";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#603cba";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#603cba";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#603cba";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#603cba";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#603cba";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#603cba";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#603cba";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#603cba";
	});
    });
	$("#7e3878_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#7e3878";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#7e3878";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#7e3878";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#7e3878";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#7e3878";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#7e3878";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#7e3878";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#7e3878";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#7e3878";
	});
    });
	$("#9f00a7_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#9f00a7";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#9f00a7";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#9f00a7";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#9f00a7";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#9f00a7";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#9f00a7";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#9f00a7";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#9f00a7";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#9f00a7";
	});
    });
	$("#1e7145_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#1e7145";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#1e7145";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#1e7145";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#1e7145";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#1e7145";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#1e7145";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#1e7145";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#1e7145";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#1e7145";
	});
    });
	$("#00a300_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#00a300";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#00a300";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#00a300";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#1d1d1d";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#1d1d1d";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#1d1d1d";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#1d1d1d";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#1d1d1d";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#1d1d1d";
	});
    });
	$("#99b433_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#99b433";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#99b433";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#99b433";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#1d1d1d";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#1d1d1d";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#1d1d1d";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#1d1d1d";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#1d1d1d";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#1d1d1d";
	});
    });
	$("#FF6F61_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#FF6F61";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#FF6F61";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#FF6F61";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#FF6F61";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#FF6F61";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#FF6F61";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#FF6F61";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#FF6F61";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#FF6F61";
	});
    });
	$("#9B1B30_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#9B1B30";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#9B1B30";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#9B1B30";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#9B1B30";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#9B1B30";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#9B1B30";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#9B1B30";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#9B1B30";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#9B1B30";
	});
    });
	$("#F5D6C6_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#F5D6C6";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#F5D6C6";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#F5D6C6";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#F5D6C6";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#F5D6C6";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#F5D6C6";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#F5D6C6";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#F5D6C6";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#F5D6C6";
	});
    });
	$("#FA9A85_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#FA9A85";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#FA9A85";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#FA9A85";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#FA9A85";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#FA9A85";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#FA9A85";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#FA9A85";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#FA9A85";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#FA9A85";
	});
    });
	$("#5A3E36_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#5A3E36";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#5A3E36";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#5A3E36";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#5A3E36";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#5A3E36";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#5A3E36";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#5A3E36";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#5A3E36";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#5A3E36";
	});
    });
	$("#2A4B7C_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#2A4B7C";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#2A4B7C";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#2A4B7C";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#2A4B7C";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#2A4B7C";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#2A4B7C";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#2A4B7C";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#2A4B7C";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#2A4B7C";
	});
    });
	$("#577284_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#577284";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#577284";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#577284";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#577284";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#577284";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#577284";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#577284";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#577284";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#577284";
	});
    });
	$("#F96714_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#F96714";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#F96714";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#F96714";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#F96714";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#F96714";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#F96714";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#F96714";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#F96714";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#F96714";
	});
    });
	$("#F3E0BE_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#F3E0BE";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#F3E0BE";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#F3E0BE";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#F3E0BE";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#F3E0BE";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#F3E0BE";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#F3E0BE";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#F3E0BE";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#F3E0BE";
	});
    });
	$("#2A293E_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#2A293E";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#2A293E";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#2A293E";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#2A293E";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#2A293E";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#2A293E";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#2A293E";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#2A293E";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#2A293E";
	});
    });
	$("#9F9C99_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#9F9C99";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#9F9C99";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#9F9C99";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#9F9C99";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#9F9C99";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#9F9C99";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#9F9C99";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#9F9C99";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#9F9C99";
	});
    });
	$("#615550_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#615550";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#615550";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#615550";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#615550";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#615550";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#615550";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#615550";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#615550";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#615550";
	});
    });
	$("#6B5B95_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#6B5B95";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#6B5B95";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#6B5B95";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#6B5B95";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#6B5B95";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#6B5B95";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#6B5B95";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#6B5B95";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#6B5B95";
	});
    });
	$("#77212E_sfc").click(function(){
	document.getElementById("spacial_font_color").style.color  = "#77212E";
	document.getElementById("paragraph_hyperlink").style.backgroundColor  = "#77212E";
	document.getElementsByClassName("icon_td_active_color").style.borderColor  = "#77212E";
			$("#voice_search_bt").click(function(){
	document.getElementById("voice_search_td").style.borderColor = "#77212E";
	});
	$("#search").keyup(function(){
	document.getElementById("text_search_td").style.borderColor = "#77212E";
	});
	$("#text_search_bt").click(function(){
	document.getElementById("text_search_td").style.borderColor = "#77212E";
	});
	$("#settings_bt").click(function(){
	document.getElementById("settings_td").style.borderColor = "#77212E";
	});
	$("#notifications_bt").click(function(){
	document.getElementById("notifications_td").style.borderColor = "#77212E";
	});
	$("#home_dash_bt").click(function(){
	document.getElementById("home_dash_td").style.borderColor = "#77212E";
	});
    });
});
$("#19000_1_2_3").hide();
$("#hide_or_how").click(function(){
	$("#19000_1_2_3").toggle();
});

$("#text_search_bt").click(function(){
	document.getElementById("magnify_sarch_img").style.backgroundColor  = "white";	
    document.getElementById("search").style.backgroundColor  = "white";
    document.getElementById("search").style.color  = "gray";
	$("#search_text").text("");
	document.getElementById("search").focus();
	document.getElementById("text_search_td").style.borderColor = "#0099e6";
	document.getElementById("voice_search_td").style.borderColor = "white";
	document.getElementById("home_dash_td").style.borderColor = "white";
	document.getElementById("notifications_td").style.borderColor = "white";
	document.getElementById("settings_td").style.borderColor = "white";
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Search</span>');
	$("#container_of_details").html('<p id="search_click_color_text" style="font-size:22px;">Search for rule number &nbsp'+$("#search").val()+'</p><p style="font-size:15px;"align="center"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p><div id="search_results_display"></div>');
    var searchtext=document.getElementById("search").value;
    recognition.stop();
	clearTimeout(t);
$("#search_click_color_text").click(function(){
document.getElementById("search").focus();
document.getElementById("magnify_sarch_img").style.backgroundColor  = "#0073e6";	
document.getElementById("search").style.backgroundColor  = "#0073e6";
document.getElementById("search").style.color  = "white";
});
});
var refresh_every_3second=setInterval(refresh_every_3second,3000);
function refresh_every_3second(){
	              $.post( 
                  "../data/php/opne_all_massages_custom_dashboard.php",
                  { acc_email: "" },
                  function(data) {
                     $("#19000_1_2_3").html(data);
                  }
               );
}		   
	              $.post( 
                  "../data/php/opne_all_massages_custom_dashboard.php",
                  { acc_email: "" },
                  function(data) {
                     $("#19000_1_2_3").html(data);
                  }
               );


$("#notifications_bt_for_all").click(function(){
	              $.post( 
                  "../data/php/open_notifications.php",
                  { acc_email: "" },
                  function(data) {
                     $("#container_of_details").html(data);
                  }
               );
			   
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Notifications</span>');
	$("#container_of_details").html(data);
	$("#notification_open").hide();
	$("#share_rules").show();
    var searchtext=document.getElementById("search").value;
    recognition.stop();
	clearTimeout(t);
});
$("#gov_bt_for_all").click(function(){
	              $.post( 
                  "../data/php/open_search_results.php",
                  { acc_email: "" },
                  function(data) {
                     $("#container_of_details").html(data);
                  }
               );
	$("#home_details_heading").html('<span id="spacial_font_color"  style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Share rules</span>');
	$("#container_of_details").html(data);
	$("#notification_open").hide();
	$("#share_rules").show();
    var searchtext=document.getElementById("search").value;
    recognition.stop();
	clearTimeout(t);
});
});
$( window ).resize(function() {
$("#container_1").height($(window).height() - $("#header").height() - $("#footer").height() - 5);	
});
$( document ).resize(function() {
$("#container_1").height($(window).height() - $("#header").height() - $("#footer").height() - 5);	
});
</script>
<script>
var myWindow1;
function openWin1() {
  myWindow1 = window.open("./pdf/rules/"+$('#search').val()+"sin.pdf", "", "width=800, height=600");
}

var myWindow2;
function openWin2() {
  myWindow2 = window.open("./pdf/rules/"+$('#search').val()+"ta.pdf", "", "width=800, height=600");
}

var myWindow3;
function openWin3() {
  myWindow3 = window.open("./pdf/rules/"+$('#search').val()+"eng.pdf", "", "width=800, height=600");
}
</script>
<script>
var myWindow4;
function openWin4() {
  myWindow4 = window.open("./pdf/rules/"+$('#search_text').text()+"sin.pdf", "", "width=800, height=600");
}

var myWindow5;
function openWin5() {
  myWindow5 = window.open("./pdf/rules/"+$('#search_text').text()+"ta.pdf", "", "width=800, height=600");
}

var myWindow6;
function openWin6() {
  myWindow6 = window.open("./pdf/rules/"+$('#search_text').text()+"eng.pdf", "", "width=800, height=600");
}
</script>
<script>
var myWindow7;
function openWin7() {
  myWindow7 = window.open("./ru/si/fi.pdf", "", "width=800, height=600");
}

var myWindow8;
function openWin8() {
  myWindow8 = window.open("./ru/si/p2.pdf", "", "width=800, height=600");
}

var myWindow9;
function openWin9() {
  myWindow9 = window.open("./ru/ta/fi.pdf", "", "width=800, height=600");
}
var myWindow10;
function openWin10() {
  myWindow10 = window.open("./ru/ta/p2.pdf", "", "width=800, height=600");
}
var myWindow11;
function openWin11() {
  myWindow11 = window.open("./ru/en/fi.pdf", "", "width=800, height=600");
}
var myWindow12;
function openWin12() {
  myWindow12 = window.open("./ru/en/p2.pdf", "", "width=800, height=600");
}
</script>
<body>
<table id="table_con"cellspacing="0px" height="100%"width="100%"border="1px"style="border-style:solid;color:gray;position:absolute;top:0px;left:0px;right:0px;bottom:0px;border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">
<div style="overflow:auto;"><tr id="header">
<td align="center" style="width:70px;height:50px;padding:15px 0px 15px 0px;border-width:0px 0px 1px 0px;border-color:rgba(0, 0, 0, 0.05);"><img src="../data/png/logo.png"  width="40px"title="Home"></td><td style="box-shadow:0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px 0px 1px 0px;border-color:rgba(0, 0, 0, 0.05);" align="left">WPPC Rules</td><td style="box-shadow:0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px 0px 1px 0px;border-color:rgba(0, 0, 0, 0.05);" align="right"><img src="../data/png/search2.png" id="magnify_sarch_img" style="border-radius:50px;" width="20px"title="Search"></td><td style="padding-left:10px;box-shadow:0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px 0px 1px 0px;border-color:rgba(0, 0, 0, 0.05);padding-bottom:5px;" align="left"><input type="text" placeholder="Type to search..." style="caret-color:#66b3ff;border-width:0px;padding:5px;border-radius:50px;"id="search"class="noFocus"></td>

<td style="padding-left:10px;box-shadow:0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px 0px 1px 0px;border-color:rgba(0, 0, 0, 0.05);padding-bottom:0px;padding-right:2px;" width="60px" align="right"><img id="notifications_bt_for_all"src="../data/png/not2.png" id="notify_img_icon" style="border-radius:50px;" width="20px"title="Notifications"></td>

<td style="padding-left:30px;box-shadow:0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px 0px 1px 0px;border-color:rgba(0, 0, 0, 0.05);padding-bottom:0px;padding-right:50px;" width="60px" align="right"><img id="gov_bt_for_all"src="../data/png/gov.png" id="notify_img_icon" style="border-radius:50px;" width="20px"title="Share rules"></td>
</tr>
<style>
#notifications_bt_for_all:hover{background-color:#88ebfb;cursor:pointer;}
#gov_bt_for_all:hover{background-color:#88ebfb;cursor:pointer;}
</style>
<tr>
<td align="center" class="icon_td_active_color" id="home_dash_td" style="box-shadow: 4px 0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px;padding:2px 10px 2px 10px;border-width:0px 2px 0px 0px;border-style:solid;border-color:#0099e6;"><img  id="home_dash_bt" src="../data/png/home2.png" width="30px"title="Home"></td><td id="container_1_main" align="left" rowspan="5" colspan="6" style="background-color:#f2f5ff;overflow:auto;border-width:0px;"><div id="container_1"class="container_1" style="display: block;overflow:auto;">

<div class="home_details_heading" style="padding:20px;"id="home_details_heading">
<span id="spacial_font_color" style="font-size:14px;color:#0073e6;">Home</span> <span style="font-size:14px;">/ Dashboard</span>
</div>

<div class="home_details_body_1">
<div class="text_1" style="border-width:1px;border-style:solid;border-color:#b3b3b3;margin:auto;margin-left:10px;margin-right:10px;border-radius:1px;background-color:white;">
<div style="padding:20px;" id="container_of_details">
<p style="font-size:32px;"align="center">Western Province Provincial Council</p>
<p style="font-size:22px;"align="center">Web application with all the rules and regulations for meetings</p>
<p style="font-size:22px;"align="center"><img src="../data/png/wppc_flag.png"></p>
<p style="font-size:15px;"align="center">This is an open source web application for everyone. Any one can use this service at any time any where without wasting time.</p>
<p style="font-size:15px;"align="center">Mainly this web app about the rules and pocedeures of <b><span style="font-size:16px;">Secretariat Of The Western Province Provincial Council.</span></b></p>
<p style="font-size:22px;"align="center"><img src="../data/png/sencole.png" width="30%"></p>
<p style="font-size:15px;"align="center"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p>
<p style="font-size:32px;"align="center">Features</p><br><br>
<p style="font-size:22px;"align="center"><img src="../data/png/dash.png"></p>
<p style="font-size:22px;"align="center">Dashboard</p>
<p style="font-size:15px;"align="center">Well managed detabase system, AI included voice sepach recognition system and 100% accurate search option.</p><br><br>
<p style="font-size:22px;"align="center"><img src="../data/png/cloud.png"></p>
<p style="font-size:22px;"align="center">Any where any time</p>
<p style="font-size:15px;"align="center">This is a free online service for everyone.</p><br><br>
<p style="font-size:22px;"align="center"><img src="../data/png/res.png"></p>
<p style="font-size:22px;"align="center">Responsive for any device</p>
<p style="font-size:15px;"align="center">Web app is build for suit any mobile device or pc.</p><br><br>
<p style="font-size:15px;"align="center"><hr width="100%" size="1px" style="border-style:solid;" noshade color="#b3b3b3"></p>
<p style="font-size:32px;"align="center">Contact</p>
<p style="font-size:15px;"align="center">Address : <span style="color:#0099e6;">Western Province Provincial Council</span><br>
<span style="color:#0099e6;">No:204, Denzil Kobbekaduwa Mawatha</span><br>
<span style="color:#0099e6;">Battaramulla</span></p>
<p style="font-size:15px;"align="center">Tele: <span style="color:#0099e6;">0765474796</span></p>
<p style="font-size:15px;"align="center">Email :<span style="color:#0099e6;">wppc.rules@gmail.com</span></p>
<p style="font-size:15px;"align="center">Url : <span style="color:#0099e6;">wppcrules.epizy.com</span></p><br>
</div>
</div>
</div>
<br>
</div></td>
</tr>
<tr>
<td align="center"id="text_search_td" style="box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px;padding:2px 10px 2px 10px;border-width:0px 2px 0px 0px;border-color:white;"><img id="text_search_bt" src="../data/png/search2.png" width="30px"title="Search"></td>
</tr>
<style>#home_dash_bt:hover{cursor:pointer;}#text_search_bt:hover{cursor:pointer;}#notifications_bt:hover{cursor:pointer;}#voice_search_bt:hover{cursor:pointer;}#settings_bt:hover{cursor:pointer;}#paragraph_hyperlink:hover{cursor:pointer;}.moue_hover_setings_color:hover{cursor:pointer;}</style>
<tr>
<td align="center"id="voice_search_td" style="box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px;padding:2px 10px 2px 10px;border-width:0px 2px 0px 0px;border-color:white;"><img id="voice_search_bt" src="../data/png/vs2.png" width="30px"title="Voice search"></td>
</tr>
<tr>
<td align="center"id="notifications_td" style="box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px;padding:2px 10px 2px 10px;border-width:0px 2px 0px 0px;border-color:white;"><img id="notifications_bt" src="../data/png/books.png" width="30px"title="Books"></td>
</tr>
<tr>
<td align="center" id="settings_td" style="box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);border-width:0px;position:relative;z-index:1;padding:2px 5px 2px 5px;border-width:0px 2px 0px 0px;border-color:white;"><img id="settings_bt" src="../data/png/settings2.png" width="30px"title="Settings"></td>
</tr></div>
<tr id="footer">
<td colspan="7" style="width:50px;height:50px;padding:5px;position:relative;z-index:-1;border-width:1px 0px 0px 0px;border-color:rgba(0, 0, 0, 0.05);" align="center">©&nbsp&nbsp<script>document.write(new Date().getFullYear())</script>&nbsp&nbspKRAG Corp & WPPC Hanzard Section</td>
</tr>
</table>

<div style="padding:10px;background-color:white;position:fixed;z-index:1800000;bottom:50px;right:8px;width:45%;border-width:1px;border-color:#e6e3e3;border-radius:3px 3px 0px 0px;border-style:solid;"><span id="hide_or_how">Quick notifications<br><hr width="100%"style="border-color:#e6e3e3;border-style:solid;border-width:1px;"></span>
<div class="19000_1_2_3" id="19000_1_2_3" width="30%"style="width:100%;background-color:white;">


</div></div>
<style>
.notify_massages_and_rules_container{border-width:1px;box-shadow: 1px 4px 5px 0px rgba(0, 0, 0, 0.1);border-radius:3px;background-color:#fafeff;color:#263238;border-style:solid;border-color:#e6e3e3;padding:5px;}
.notify_massages_and_rules_container:hover{cursor:pointer;box-shadow: 2px 8px 10px 0px rgba(0, 0, 0, 0.1);}
#hide_or_how:hover{cursor:pointer;}
</style>

</body>
</html>