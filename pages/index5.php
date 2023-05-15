<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../data/css/web/style_2.css" rel="stylesheet">
<link rel="stylesheet" href="../data/css/font/font.css">
</head>
<script src="../data/js/web/javascript.js" type="text/javascript"></script>
<script src="../data/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../data/js/popper.min.js" type="text/javascript"></script>
<!--alert box-->
<script src="../data/js/notification.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css"  href="../data/css/notification.css"/>
<!--end alert box-->
<style>
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  color:gray;
}
.hover_back_g_color:hover{
	color:#00334d;
	cursor:pointer;
}
.hover_border_shadow:hover{
	box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);
}
.hover_border_shadow:focus{
	outline:none;
}
.img_search:hover{
	background-color:#f2f2f2;
}
.img_mic:hover{
	background-color:#f2f2f2;
}
.img_mic_clicked:hover{
	background-color:white;
}
.td_hover:hover{
	cursor:pointer;
	background-color:#0099e6;
	color:white;
}
.lan_fi_view{font-size:18px;margin:5px;background-color:#0099e6;color:white;padding:20px 30% 20px 30%;}
.lan_fi_view:hover{
	cursor:pointer;
	background-color:white;
	color:black;
}
#search_text:focus{
	outline:none;
}
#search_text_2:focus{
	outline:none;
}
</style>
<script>
// window on load event
function loader(){
   $('.preloader').fadeOut('slow');
}
window.onload = loader;

$(document).ready(function(){
$('#row_8_message_inner_body_inbox').show();
$('#row_8_message_inner_body_trash').hide();
$('#row_8_message_inner_body_outbox').hide();
$('#row_8_message_inner_body_compose').hide();	
               $.post( 
                  "../data/php/inbox.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw },
                  function(data) {
                     $('#row_8_message_inner_body_inbox').html(data);
                  }
               );
var lisara=setInterval(krag19000_4,2000);
function krag19000_4(){
               $.post( 
                  "../data/php/inbox.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw },
                  function(data) {
                     $('#row_8_message_inner_body_inbox').html(data);
                  }
               );
}
var lisara_1=setInterval(krag19000_3,2000);
function krag19000_3(){
               $.post( 
                  "../data/php/outbox.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw },
                  function(data) {
                     $('#row_8_message_inner_body_outbox').html(data);
                  }
               );
}
var lisara_3=setInterval(krag19000_1,2000);
function krag19000_1(){
			   $.post( 
                  "../data/php/trash.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw },
                  function(data) {
                     $('#row_8_message_inner_body_trash').html(data);
                  }
               );
}
	
	
$("#sign_in").click(function(){
window.open("index6.php","_self");
});

$("#create_an_acc").click(function(){
window.open("index7.php","_self");
});

$("#try_again").click(function(){
window.open("index6.php","_self");
});

$("#row_3_voice_search").hide();
$("#row_4_search_results").hide();
$("#row_4_search_results_open").hide();		
$("#row_6_books_open").hide();
$("#row_7_books_open").hide();
$("#row_8_message").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_5_books_open").hide();
$("#row_5_books_open").hide();	
$("#row_2_search").height($(window).height() - $("#row_1").height()-0.1);
$("#row_6_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_7_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_8_message").height($(window).height() - $("#row_1").height()-0.1);
$("#row_9_alert").height($(window).height() - $("#row_1").height()-0.1);
$("#settings_row_main_1").height($(window).height() - $("#row_1").height()-0.1);
$("#settings_row_1").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#settings_row_1").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#alert_01").height($(window).height() - $("#row_1").height() -50-0.1);
$("#notifications_body").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#row_8_message_inner_body_compose").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_inbox").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_outbox").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_trash").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_5_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_4_search_results").height($(window).height() - $("#row_1").height() - 10-0.1);
$("#row_4_search_results_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_3_voice_search").height($(window).height() - $("#row_1").height()-0.1);

$("#img_mic_1").click(function(){
	$("#search_text").val("");

	$("#voice_search_text").text("Say the Rule number")
	var t;
    t=setTimeout(myFunction,8000);

	$("#row_2_search").fadeOut(0);
	$("#row_3_voice_search").fadeIn(300);	

    window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
    let finalTranscript = '';
    let recognition = new window.SpeechRecognition();
    recognition.interimResults = true;
    recognition.maxAlternatives = 10;
    recognition.continuous = true;
    recognition.onresult = (event) => {
      let interimTranscript = '';
      for (let i = event.resultIndex, len = event.results.length; i < len; i++) {
		  var search_text = $("#voice_search_text").text();

        let transcript = event.results[i][0].transcript;
        if (event.results[i].isFinal) {
          finalTranscript += transcript;
        } else {
          interimTranscript += transcript;
        }
      }
      document.querySelector('#voice_search_text').innerHTML = finalTranscript + '<i style="color:#ddd;">' + interimTranscript + '</>';
    }
  recognition.start();
  
$("#stop_voice_search").click(function(){
	if($("#voice_search_text").text()!="Say the Rule number"){
	$("#search_text").val($("#voice_search_text").text());
	}
	else{
	$("#search_text").val("");	
	}
	recognition.stop();
	$("#row_3_voice_search").fadeOut(0);
	$("#row_2_search").fadeIn(300);		
	});
	
	function myFunction() {
    	if($("#voice_search_text").text()!="Say the Rule number"){
	$("#search_text").val($("#voice_search_text").text());
	}
	else{
	$("#search_text").val("");	
	}
    recognition.stop();
	clearTimeout(t);
	$("#row_3_voice_search").fadeOut(0);
	$("#row_2_search").fadeIn(300);	
}
});

$("#img_mic_2").click(function(){
	$("#search_text").val("");
    $("#search_text_2").val("");
	$("#voice_search_text").text("Say the Rule number")
	var t;
    t=setTimeout(myFunction,8000);

	$("#row_2_search").fadeOut(0);
	$("#row_4_search_results").fadeOut(0);
	$("#row_3_voice_search").fadeIn(300);	

    window.SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
    let finalTranscript = '';
    let recognition = new window.SpeechRecognition();
    recognition.interimResults = true;
    recognition.maxAlternatives = 10;
    recognition.continuous = true;
    recognition.onresult = (event) => {
      let interimTranscript = '';
      for (let i = event.resultIndex, len = event.results.length; i < len; i++) {
		  var search_text = $("#voice_search_text").text();

        let transcript = event.results[i][0].transcript;
        if (event.results[i].isFinal) {
          finalTranscript += transcript;
        } else {
          interimTranscript += transcript;
        }
      }
      document.querySelector('#voice_search_text').innerHTML = finalTranscript + '<i style="color:#ddd;">' + interimTranscript + '</>';
    }
  recognition.start();
  
$("#stop_voice_search").click(function(){
	if($("#voice_search_text").text()!="Say the Rule number"){
	$("#search_text").val($("#voice_search_text").text());
	$("#search_text_2").val($("#voice_search_text").text());
	}
	else{
	$("#search_text").val("");	
	$("#search_text_2").val("");
	}
	recognition.stop();
	$("#row_3_voice_search").fadeOut(0);
	$("#row_2_search").fadeOut(0);
	$("#row_4_search_results").fadeIn(300);
               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text_2").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );	
	});
	
	function myFunction() {
    if($("#voice_search_text").text()!="Say the Rule number"){
	$("#search_text").val($("#voice_search_text").text());
	$("#search_text_2").val($("#voice_search_text").text());
	}
	else{
	$("#search_text").val("");	
	$("#search_text_2").val("");
	}
    recognition.stop();
	clearTimeout(t);
	$("#row_3_voice_search").fadeOut(0);
	$("#row_2_search").fadeOut(0);
	$("#row_4_search_results").fadeIn(300);	
	               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text_2").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );	
}
});

$("#search_bt").click(function(){
$('input[name=search_text_2]').focus();
$("#row_8_message").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_4_search_results_open").hide();	
$("#row_6_books_open").hide();	

$("#search_text_2").val($("#search_text").val());

$("#row_2_search").fadeOut(0);
$("#row_4_search_results").fadeIn(300);	

               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );

});

// Get the input1 field
var input1 = document.getElementById("search_text");

// Execute a function when the user releases a key on the keyboard
input1.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
$("#row_8_message").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_4_search_results_open").hide();	
$("#row_6_books_open").hide();	

$("#search_text_2").val($("#search_text").val());

$("#row_2_search").fadeOut(0);
$("#row_4_search_results").fadeIn(300);	

               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );

  }
});

$("#search_text_2").keyup(function(){
               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text_2").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );
});

$("#img_search_2").click(function(){
            $('input[name=search_text_2]').focus();
               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text_2").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );
});

// Get the input1 field
var input1 = document.getElementById("search_text_2");

// Execute a function when the user releases a key on the keyboard
input1.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
$("#row_8_message").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_4_search_results_open").hide();	
$("#row_6_books_open").hide();	

$("#search_text").val($("#search_text_2").val());

$("#row_2_search").fadeOut(0);
$("#row_4_search_results").fadeIn(300);	

               $.post( 
                  "../data/php/search_rules_result_panel_1.php",
                  { search_text: $("#search_text").val() },
                  function(data) {
                     $('#search_results_open_by_php_search_rules_result_panel_1').html(data);
                  }
               );

  }
});



$("#alert_massage_bt_on_menu_bar").click(function(){
$("#row_8_message").hide();
$("#row_7_books_open").hide();
$("#row_4_search_results_open").fadeOut(0);
$("#row_4_search_results").hide();
$("#row_6_books_open").hide();	
$("#search_text_2").val($("#search_text").val());
$("#row_2_search").fadeOut(0);
$("#row_9_alert").fadeIn(300);	
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").fadeIn(300);	
});


$("#settings_on_menu_bar").click(function(){
$("#row_8_message").hide();
$("#row_7_books_open").hide();
$("#row_4_search_results_open").hide();
$("#row_4_search_results").hide();
$("#row_6_books_open").hide();	
$("#search_text_2").val($("#search_text").val());
$("#row_2_search").hide();
$("#row_9_alert").hide();
$("#notifications_body").hide();
$("#settings_row_main_1").fadeIn(300);
$("#settings_row_1").fadeIn(300);	
$("#settings_row_2").hide();
});


$("#message_bt_on_menu_bar").click(function(){
$("#row_7_books_open").hide();
$("#row_6_books_open").hide();	
$("#row_3_voice_search").hide();	
$("#row_4_search_results").hide();	
$("#row_5_books_open").hide();	
$("#row_4_search_results_open").fadeOut(0);
$("#row_4_voice_search_open").hide();	
$("#row_2_search").hide();
$("#row_7_books_open").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_8_message").fadeIn(300);	
$('#send_massage_to_someone_email_now').hide();

			   
$("#compose_mail").click(function(){
$('#row_8_message_inner_body_inbox').hide();
$('#row_8_message_inner_body_trash').hide();
$('#row_8_message_inner_body_outbox').hide();
$('#send_massage_to_someone_email_now').show();
$('#row_8_message_inner_body_compose').fadeIn(30);	
$( "#send_massage_to_someone_email_now" ).click(function() {

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
                     $('#compose_mail_message').html(data);
                  }
               );
	}
});
               $.post( 
                  "../data/php/compose.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw },
                  function(data) {
                     $('#row_8_message_inner_body_compose').html(data);
                  }
               );
});
$("#mail_inbox").click(function(){
$('#row_8_message_inner_body_inbox').fadeIn(30);
$('#row_8_message_inner_body_trash').hide();
$('#row_8_message_inner_body_outbox').hide();
$('#send_massage_to_someone_email_now').hide();
$('#row_8_message_inner_body_compose').hide();	
});
$("#mail_outbox").click(function(){	
$('#row_8_message_inner_body_inbox').hide();
$('#row_8_message_inner_body_trash').hide();
$('#send_massage_to_someone_email_now').hide();
$('#row_8_message_inner_body_outbox').fadeIn(30);
$('#row_8_message_inner_body_compose').hide();	
});
$("#mail_trash").click(function(){	
$('#row_8_message_inner_body_inbox').hide();
$('#row_8_message_inner_body_trash').fadeIn(30);
$('#row_8_message_inner_body_outbox').hide();
$('#send_massage_to_someone_email_now').hide();
$('#row_8_message_inner_body_compose').hide();	
});

});


$("#search_panel_bt").click(function(){
$("#row_7_books_open").hide();
$("#search_text").val("");	
$("#search_text_2").val("");
$("#row_8_message").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_6_books_open").hide();	
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results_open").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_5_books_open").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeIn(300);	
});
$("#home_menu_bt").click(function(){
		  var rrrrr = confirm("Do you really want go to home page!\nThat means you log out from the account.\nAll your works will be lost!");
  if (rrrrr == true) {
	window.open("../index/index.html","_self");
  } else {

  }
});
$("#help_on_menu_bar").click(function(){
		  var rrrrkkr = confirm("Do you really want go to help center!\nThat means you log out from the account.\nAll your works will be lost!");
  if (rrrrkkr == true) {
	window.open("index3.php","_self");
  } else {

  }
});
$("#books_panel_bt").click(function(){
$("#row_8_message").hide();
$("#row_9_alert").hide();
$("#settings_row_main_1").hide();
$("#settings_row_1").hide();	
$("#settings_row_2").hide();
$("#notifications_body").hide();
$("#row_7_books_open").fadeOut(0);
$("#row_4_search_results_open").fadeOut(0);
$("#row_6_books_open").hide();	
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeIn(300);	
});
$("#td_hover_sinhala").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
$("#lan_change").html("Sinhala");
$("#download_file_first_page").html('<a href="./ru/si/sinhala__download_first_page.zip"style="text-decoration:none;"><span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></a>');	
$("#download_file_content").html('<a href="./ru/si/sinhala__download_content.zip"style="text-decoration:none;"><span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></a>');
$("#lan_first_view").html('<span id="si_first_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span>');
$("#lan_content_view").html('<span id="si_content_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span>');

$("#si_first_view").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeOut(0);	
$("#row_7_books_open").fadeIn(300);	
$("#lan_change_2").html("Sinhala first page");	
$("#iframe_open_lan_file").html('<iframe src="./ru/si/fi.pdf" style="border:none;"height="85%" width="100%"></iframe>');
$("#close_bt_row_7").click(function(){
$("#row_7_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
});
});
$("#si_content_view").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeOut(0);	
$("#row_7_books_open").fadeIn(300);	
$("#lan_change_2").html("Sinhala book content");	
$("#iframe_open_lan_file").html('<iframe src="./ru/si/p2.pdf" style="border:none;"height="85%" width="100%"></iframe>');
$("#close_bt_row_7").click(function(){
$("#row_7_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
});
});	
});
$("#td_hover_tamil").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
$("#lan_change").html("Tamil");	
$("#download_file_first_page").html('<a href="./ru/ta/tamil__download_first_page.zip"style="text-decoration:none;"><span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></a>');
$("#download_file_content").html('<a href="./ru/ta/tamil__download_content.zip"style="text-decoration:none;"><span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></a>');	
$("#lan_first_view").html('<span id="ta_first_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span>');
$("#lan_content_view").html('<span id="ta_content_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span>');
$("#ta_first_view").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeOut(0);	
$("#row_7_books_open").fadeIn(300);	
$("#lan_change_2").html("Tamil first page");	
$("#iframe_open_lan_file").html('<iframe src="./ru/ta/fi.pdf" style="border:none;"height="85%" width="100%"></iframe>');
$("#close_bt_row_7").click(function(){
$("#row_7_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
});
});
$("#ta_content_view").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeOut(0);	
$("#row_7_books_open").fadeIn(300);	
$("#lan_change_2").html("Tamil book content");	
$("#iframe_open_lan_file").html('<iframe src="./ru/ta/p2.pdf" style="border:none;"height="85%" width="100%"></iframe>');
$("#close_bt_row_7").click(function(){
$("#row_7_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
});
});	
});
$("#td_hover_english").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
$("#lan_change").html("English");	
$("#download_file_first_page").html('<a href="./ru/en/english__download_first_page.zip"style="text-decoration:none;"><span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></a>');
$("#download_file_content").html('<a href="./ru/en/english__download_content.zip"style="text-decoration:none;"><span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></a>');
$("#lan_first_view").html('<span id="en_first_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span>');
$("#lan_content_view").html('<span id="en_content_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span>');
$("#en_first_view").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeOut(0);	
$("#row_7_books_open").fadeIn(300);	
$("#lan_change_2").html("English first page");	
$("#iframe_open_lan_file").html('<iframe src="./ru/en/fi.pdf" style="border:none;"height="85%" width="100%"></iframe>');
$("#close_bt_row_7").click(function(){
$("#row_7_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
});
});
$("#en_content_view").click(function(){
$("#row_3_voice_search").fadeOut(0);
$("#row_4_search_results").fadeOut(0);
$("#row_4_voice_search_open").fadeOut(0);
$("#row_2_search").fadeOut(0);
$("#row_5_books_open").fadeOut(0);	
$("#row_6_books_open").fadeOut(0);	
$("#row_7_books_open").fadeIn(300);	
$("#lan_change_2").html("English book content");	
$("#iframe_open_lan_file").html('<iframe src="./ru/en/p2.pdf" style="border:none;"height="85%" width="100%"></iframe>');
$("#close_bt_row_7").click(function(){
$("#row_7_books_open").fadeOut(0);	
$("#row_6_books_open").fadeIn(300);	
});
});	
});


});

$( window ).resize(function() {
$("#row_2_search").height($(window).height() - $("#row_1").height()-0.1);
$("#row_3_voice_search").height($(window).height() - $("#row_1").height()-0.1);
$("#row_5_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_4_search_results").height($(window).height() - $("#row_1").height() - 10-0.1);
$("#row_4_search_results_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_6_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_7_books_open").height($(window).height() - $("#row_1").height() - 10-0.1);
$("#row_8_message_inner_body").height($(window).height() - $("#row_1").height() -50-0.1);
$("#notifications_body").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#settings_row_main_1").height($(window).height() - $("#row_1").height()-0.1);
$("#settings_row_1").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#alert_01").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_compose").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_inbox").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_outbox").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_trash").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message").height($(window).height() - $("#row_1").height()-0.1);
$("#row_9_alert").height($(window).height() - $("#row_1").height()-0.1);
});
$( document ).resize(function() {
$("#row_2_search").height($(window).height() - $("#row_1").height()-0.1);
$("#row_3_voice_search").height($(window).height() - $("#row_1").height()-0.1);
$("#row_5_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_4_search_results").height($(window).height() - $("#row_1").height() - 10-0.1);
$("#row_4_search_results_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_6_books_open").height($(window).height() - $("#row_1").height()-0.1);
$("#row_7_books_open").height($(window).height() - $("#row_1").height() - 10-0.1);
$("#row_8_message_inner_body").height($(window).height() - $("#row_1").height() -50-0.1);
$("#notifications_body").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#settings_row_main_1").height($(window).height() - $("#row_1").height()-0.1);
$("#settings_row_1").height($(window).height() - $("#row_1").height() -50 -0.1);
$("#alert_01").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_compose").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_inbox").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_outbox").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message_inner_body_trash").height($(window).height() - $("#row_1").height() -50-0.1);
$("#row_8_message").height($(window).height() - $("#row_1").height()-0.1);
$("#row_9_alert").height($(window).height() - $("#row_1").height()-0.1);
});
</script>
<script>
$( document ).ready(function() {
$( "#mail_account" ).click(function() {
window.open("index4.php","_self");
});
$( "#new_notification" ).click(function() {
  var rrr = confirm("Do you really want to create a new notification!\nAll your typed details will be lost.");
  if (rrr == true) {
$( "#noti_massage_protocol" ).hide();
$( "#noti_massage_protocol" ).html("");
$( "#noti_content" ).val("");
$( "#noti_rule_id" ).val("");
$( "#noti_title" ).val("");
  } else {
  
  }
 
});
$( "#clear_notification" ).click(function() {
	  var rrrr = confirm("Do you really want to clear the details you typed!");
  if (rrrr == true) {
	  $( "#noti_massage_protocol" ).hide();
$( "#noti_massage_protocol" ).html("");
$( "#noti_content" ).val("");
$( "#noti_rule_id" ).val("");
$( "#noti_title" ).val("");
  } else {

  }
});
$( "#noti_massage_protocol" ).hide();
$( "#noti_send" ).click(function() {
               $.post( 
                  "../data/php/send_notification.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw,
                    noti_content: $( "#noti_content" ).val(),
                    noti_rule_id: $( "#noti_rule_id" ).val(),
                    noti_title: $( "#noti_title" ).val() },
                  function(data) {
					  $( "#noti_massage_protocol" ).fadeIn(30);
                     $('#noti_massage_protocol').html(data);
					 window.open("#noti_massage_protocol", "_self");
					 
                  }
               );
});
$( "#settings_send" ).click(function() {
	  var rrrrrrrr = confirm("By this all your previous details will be lost!");
  if (rrrrrrrr == true) {
$.post( 
                  "../data/php/save_settings.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw,
                    settings_first_name: $( "#settings_first_name" ).val(),
                    settings_last_name: $( "#settings_last_name" ).val(),
                    settings_possesion: $( "#settings_possesion" ).val(),
                    settings_favour: $( "#settings_favour" ).val() },
                  function(data) {
					 $( "#settings_row_2" ).fadeIn(30);
                     $('#settings_row_2').html(data);
					 window.open("#settings_row_2", "_self");
					 
                  }
               );
  } else {

  }
});
$( "#Go_back" ).hide();
$( "#settings_Show_latest_update" ).click(function() {
$.post( 
                  "../data/php/get_latest_details.php",
                  { acc_emai: acc_email,
                    acc_pass: acc_passw },
                  function(data) {
					 $( "#settings_row_2" ).hide();
                     alert(data);
					 window.open("#settings_show_saved_on_db", "_self");
					 
                  }
               );
}); 
$( "#save_settings" ).click(function() {
	  var rttrrr = confirm("By this all your previous details will be lost!");
  if (rttrrr == true) {
$.post( 
                  "../data/php/save_settings.php",
                  { acc_email: acc_email,
                    acc_passw: acc_passw,
                    settings_first_name: $( "#settings_first_name" ).val(),
                    settings_last_name: $( "#settings_last_name" ).val(),
                    settings_possesion: $( "#settings_possesion" ).val(),
                    settings_favour: $( "#settings_favour" ).val() },
                  function(data) {
					 $( "#settings_row_2" ).fadeIn(30);
                     $('#settings_row_2').html(data);
					 window.open("#settings_row_2", "_self");
					 
                  }
               );
  } else {

  }
});
$( "#new_settings" ).click(function() {
	  var rrrr = confirm("Do you really want to clear the details you typed!");
  if (rrrr == true) {
$( "#settings_first_name" ).val("");
$( "#settings_last_name" ).val("");
$( "#settings_possesion" ).val("");
$( "#settings_favour" ).val("");
$( "#settings_row_2" ).hide();
  } else {

  }
});
$("#alert_01").hide(0);	
$("#container_01").hide(0);
	$("#close_bt_01").click(function(){
		var x=setTimeout('$("#alert_01").hide(0)',700);
		$("#container_01").slideUp(500);
	});
var elem = document.documentElement;		
$("#max_whole_tab").click(function(){
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }

});	
$("#close_whole_tab").click(function(){
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
});		
});
</script>
<?php
if(isset($_POST['signin_submit']))
{

$email = $_POST['email'];
$password_acc = $_POST['password'];

echo'
<script>
var acc_email="'.$email.'";
var acc_passw="'.$password_acc.'";
</script>';
echo'<style>
#send_massage_to_someone_email_now{border-radius:50px;padding-left:10px;padding-right:10px;}
#send_massage_to_someone_email_now:hover{backgrund-color:#0099e6;cursor:pointer;}</style>';
$servername_myfile = fopen("../data/txt/servername.txt", "r") or die("Unable to open file!");
$servername = fgets($servername_myfile);
fclose($servername_myfile);

$username_myfile = fopen("../data/txt/username.txt", "r") or die("Unable to open file!");
$username = fgets($username_myfile);
fclose($username_myfile);

$password_myfile = fopen("../data/txt/password.txt", "r") or die("Unable to open file!");
$password = fgets($password_myfile);
fclose($password_myfile);

$dbname_myfile = fopen("../data/txt/dbname.txt", "r") or die("Unable to open file!");
$dbname = fgets($dbname_myfile);
fclose($dbname_myfile);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ACCOUNTS WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $acc_exist="1";
	
$sql = "SELECT * FROM ACCOUNTS WHERE email='$email' AND password='$password_acc'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $pass_valid="1";
    }
} else {
     $pass_valid="0";
}
	
    }
} else {
     $acc_exist="0";
}
mysqli_close($conn);


if($acc_exist=="0"){
echo'<body style="background-color:#f2f5ff;">
<div style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;">
<table width="100%"height="100%"border="0px"align="center"style="padding-top:5px;padding-bottom:5px;">
<tr>
<td align="center">
<font class="fontsforweb_fontid_423" color="gray"style="font-size:42px;">';
echo "Account doesn't exist! ";
echo'</font><br><br>
<font class="fontsforweb_fontid_423" color="gray"style="font-size:14px;">';
echo "If you need help<br><br>

<input class='fontsforweb_fontid_423' type='button'id='try_again'value='Try again'>&nbsp&nbsp<input class='fontsforweb_fontid_423' type='button'id='create_an_acc'value='Create an account'>";
echo"<style>
#try_again{padding:10px 20px 10px 20px;border-radius:3px;border-width:1px;border-color:#0073e6;background-color:#0080ff;color:white;border-style:solid;}
#try_again:hover{background-color:#1a8cff;cursor:pointer;}
#create_an_acc{padding:10px 20px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;color:gray;border-style:solid;}
#create_an_acc:hover{background-color:#f2f2f2;cursor:pointer;}
</style>";
echo'</font>
</td>
</tr>
</table>
</div>';

}
elseif($acc_exist=="1" && $pass_valid=="0"){
echo'<body style="background-color:#f2f5ff;">
<div style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;">
<table width="100%"height="100%"border="0px"align="center"style="padding-top:5px;padding-bottom:5px;">
<tr>
<td align="center">
<font class="fontsforweb_fontid_423" color="gray"style="font-size:42px;">';
echo "Account exist. You entered the wrong password! ";
echo'</font><br><br>
<font class="fontsforweb_fontid_423" color="gray"style="font-size:14px;">';
echo "If you need help <br><br>

<input class='fontsforweb_fontid_423' type='button'id='try_again'value='Try again'>&nbsp&nbsp<input class='fontsforweb_fontid_423' type='button'id='create_an_acc'value='Create an account'>";
echo"<style>
#try_again{padding:10px 20px 10px 20px;border-radius:3px;border-width:1px;border-color:#0073e6;background-color:#0080ff;color:white;border-style:solid;}
#try_again:hover{background-color:#1a8cff;cursor:pointer;}
#create_an_acc{padding:10px 20px 10px 20px;border-radius:3px;border-width:1px;border-color:#b3b3b3;background-color:white;color:gray;border-style:solid;}
#create_an_acc:hover{background-color:#f2f2f2;cursor:pointer;}
</style>";
echo'</font>
</td>
</tr>
</table>
</div>';

}
else{
echo'
<body style="background-color:#f2f5ff;"><span id="massage_control_proltocaol_2"></span><span id="massage_control_proltocaol"></span>
<div style="position:fixed;top:0px;left:0px;right:0px;z-index:90000000000;" id="row_1">
<table width="100%"height="40px"id="folder_table_1"border="0px"align="left"style="background-color:white;padding-top:5px;padding-bottom:5px;">
<tr>
<td align="left">
<font class="fontsforweb_fontid_423" color="gray"style="">
<span style="padding-left:5px;padding-right:5px;"><img src="../data/png/logo.png"  width="20px"title="Home"></span></font></td>
<td align="center">
<font class="fontsforweb_fontid_423" color="gray"style="">
<span class="fontsforweb_fontid_423" style="padding-left:5px;padding-right:5px;"id="">WPPC Rules</span></font></td>
<td align="right">
<font class="fontsforweb_fontid_423" color="gray"style="">
<span class="fontsforweb_fontid_423 hover_back_g_color"style="padding-left:5px;padding-right:5px;"id="close_whole_tab">Min</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"style="padding-left:5px;padding-right:5px;"id="max_whole_tab">Max</span></font></td>
</tr>
</table>
<table width="100%"height="50px"id="folder_table_1"border="0px"align="left"style="background-color:#0099e6;padding-top:5px;padding-bottom:5px;">
<tr align="left">
<td><font color="white"style="">
<span class="fontsforweb_fontid_423 hover_back_g_color"id="home_menu_bt"style="padding-left:5px;padding-right:5px;">Home</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"id="search_panel_bt"style="padding-left:5px;padding-right:5px;">Search</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"id="books_panel_bt"style="padding-left:5px;padding-right:5px;">Books</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"id="message_bt_on_menu_bar"style="padding-left:5px;padding-right:5px;">Massage</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"id="alert_massage_bt_on_menu_bar"style="padding-left:5px;padding-right:5px;">Notifications</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"id="settings_on_menu_bar"style="padding-left:5px;padding-right:5px;">Settings</span>
<span class="fontsforweb_fontid_423 hover_back_g_color"id="help_on_menu_bar"style="padding-left:5px;padding-right:5px;">Help</span>
</td>
</tr>
</table>
</div>
<div id="row_2_search"style="position:absolute;top:90px;left:0px;right:0px;overflow:auto;">
<table border="0px"height="85%"width="100%"align="center">
<tr>
<td align="center"><font class="fontsforweb_fontid_423" style="font-size:50px;">WPPC Rules</font><br><br><div class="hover_border_shadow" style="text-align:center;width:60%;border-radius:50px;background-color:white;border-width:1px;border-color:#cceeff;border-style:solid;"><img id="search_bt"class="img_search"style="border-radius:50px;margin-top:0px;margin-bottom:-8px;padding:7px 5px 0px 5px;"src="../data/png/search2.png"  width="30px"title="Search"><input title="Type to search" class="fontsforweb_fontid_423" placeholder="Search..."id="search_text" style="text-align:middle;width:75%;border-radius:50px;padding:10px 20px 10px 10px;border-width:1px;border-color:white;border-style:solid;margin-top:4px;margin-bottom:4px;" type="text"><img src="../data/png/vs2.png" style="margin-top:0px;margin-bottom:-8px;border-radius:50px;padding:7px 5px 0px 5px;"class="img_mic" id="img_mic_1" width="30px"title="Voice search"></div>
</td>
</tr>
</table>
</div>

<div id="row_3_voice_search"style="position:absolute;top:90px;left:0px;right:0px;overflow:auto;">
<table border="0px"height="85%"width="100%"align="center">
<tr>
<td align="center"><font class="fontsforweb_fontid_423" style="font-size:50px;"><span id="voice_search_text">Say the Rule number</span></font><br><br><img src="../data/gif/listning.gif" style="margin-top:0px;margin-bottom:-8px;border-radius:50px;padding:7px 5px 0px 5px;"class="img_mic_clicked" width="100px"title="Voice search" id="stop_voice_search">
</td>
</tr>
</table></div>
<div id="row_4_search_results"style="position:absolute;top:100px;left:0px;right:0px;overflow:auto;">
<table border="0px"width="100%"align="center">
<tr>
<td align="center">
<div class="hover_border_shadow" style="text-align:center;width:60%;border-radius:50px;background-color:white;border-width:1px;border-color:#cceeff;border-style:solid;"><img class="img_search"id="img_search_2"style="border-radius:50px;margin-top:0px;margin-bottom:-8px;padding:7px 5px 0px 5px;"src="../data/png/search2.png"  width="30px"title="Search"><input title="Type to search" class="fontsforweb_fontid_423" placeholder="Search..."id="search_text_2" name="search_text_2"style="text-align:middle;width:75%;border-radius:50px;padding:10px 20px 10px 10px;border-width:1px;border-color:white;border-style:solid;margin-top:4px;margin-bottom:4px;" type="text"><img src="../data/png/vs2.png" style="margin-top:0px;margin-bottom:-8px;border-radius:50px;padding:7px 5px 0px 5px;"class="img_mic" id="img_mic_2" width="30px"title="Voice search"></div>
</td>
</tr>
</table><hr width="100%"style="border-width:0.5px;border-color:white;border-style:solid;" noshade>

<div id="search_results_open_by_php_search_rules_result_panel_1"stle="width:100%;margin:auto;">

</div>

</div>

<div id="row_4_search_results_open"style="position:absolute;top:90px;left:0px;right:0px;overflow:auto;">
<table border="0px"height="85%"width="100%"align="center">
<tr>
<td align="center">

</td>
</tr>
</table></div>

<div id="row_5_books_open"style="position:absolute;top:90px;left:0px;right:0px;overflow:auto;">
<table border="0px"width="100%"height="95%"align="center">
<tr>
<td align="center">
<span class="fontsforweb_fontid_423"style="font-size:42px;">Choose your language</span>
</td>
</tr>
<tr>
<td align="center" class="td_hover"id="td_hover_sinhala">
<span class="fontsforweb_fontid_423"style="font-size:32px;">Sinhala</span><br>
<span class="fontsforweb_fontid_423"style="font-size:18px;">Contains the sinhala pdf book. As you need you can download it as a zip file.</span><br>
</td>
</tr>
<tr>
<td align="center"class="td_hover"id="td_hover_tamil">
<span class="fontsforweb_fontid_423"style="font-size:32px;">Tamil</span><br>
<span class="fontsforweb_fontid_423"style="font-size:18px;">Contains the tamil pdf book. As you need you can download it as a zip file.</span><br>
</td>
</tr>
<tr>
<td align="center"class="td_hover"id="td_hover_english">
<span class="fontsforweb_fontid_423"style="font-size:32px;">English</span><br>
<span class="fontsforweb_fontid_423"style="font-size:18px;">Contains the english pdf book. As you need you can download it as a zip file.</span><br>
</td>
</tr>
</table></div>

<div id="row_6_books_open"style="position:absolute;top:90px;left:0px;right:0px;overflow:auto;">
<table border="0px"width="100%"height="95%"align="center">
<tr>
<td align="center">
<span class="fontsforweb_fontid_423"style="font-size:42px;" id="lan_change"></span>
</td>
</tr>
<tr>
<td align="center" >
<span class="fontsforweb_fontid_423"style="font-size:32px;">First page</span><br><br><br>
<span id="lan_first_view"><span id="lan_fi_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span></span><br><br><br><span id="download_file_first_page">
<span id="lan_fi_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></span><br><br>
</td>
</tr>
<tr>
<td align="center" >
<span class="fontsforweb_fontid_423"style="font-size:32px;">Book content</span><br><br><br><span id="lan_content_view">
<span id="lan_co_view"class="fontsforweb_fontid_423 lan_fi_view"style="">&nbsp&nbsp&nbsp&nbsp&nbspView&nbsp&nbsp&nbsp&nbsp&nbsp</span></span><br><br><br><span id="download_file_content">
<span id="lan_con_dow"class="fontsforweb_fontid_423 lan_fi_view"style="">Download</span></span><br><br>
</td>
</tr>
</table></div>

<div id="row_7_books_open"style="position:absolute;top:90px;left:0px;right:0px;bottom:0px;overflow:auto;">
<table border="0px"width="100%"height="100%">
<tr>
<td><br><br>
<span align="left"class="fontsforweb_fontid_423"style="font-size:42px;text-direction:left;" id="lan_change_2"></span>
<br>
<br>
<span id="iframe_open_lan_file"class="fontsforweb_fontid_423"style="font-size:32px;"></span><br><br>
<span align="right" id="close_bt_row_7"class="fontsforweb_fontid_423 close_bt_file" >Close</span>
</td>
<style>
.close_bt_file{font-size:14px;text-direction:right;padding:10px 20px 10px 20px;background-color:#0099e6;color:white;margin-bottom:20px;}
.close_bt_file:hover{cursor:pointer;font-size:14px;text-direction:right;padding:10px 20px 10px 20px;background-color:white;color:black;margin-bottom:20px;}
</style>
</tr>
</table></div>

<div id="row_8_message"style="position:absolute;top:90px;left:0px;right:0px;overflow:auto;">
<table border="1px"width="100%"height="50px"align="center"style="border-width:0px 0px 1px 0px;border-style:solid;border-color:#cccccc;">
<tr>
<td align="left"class="fontsforweb_fontid_423"style="border-width:0px 0px 0px 0px;border-style:solid;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMassage
</td>
<td align="right"class="fontsforweb_fontid_423"style="border-width:0px 0px 0px 0px;border-style:solid;">
<span style=""id="send_massage_to_someone_email_now"><img src="../data/png/send.png"  width="20px"title="Send"></span>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr></table>
<div id="row_8_message_inner_body" >
<table cellspacing="0px" border="1px"width="100%"height="100%"align="center"style="background-color:white;border-width:0px 0px 0px 0px;">
<tr>
<td id="compose_mail"class="compose_mail" style=""align="center">
<img src="../data/png/compose.png" style="padding:10px;" width="50px"title="Compose">
</td>
<style>
.compose_mail{background-color:#0099e6;width:50px;border-width:0px 1px 0px 0px;border-style:solid;border-color:lightgray;color:white;background-color:#f2f5ff;}
.compose_mail:hover{background-color:#34aeeb;}
</style>

<td rowspan="5" cellpadding="0px" style="border-width:0px 0px 0px 0px;padding:0px;background-color:#fbfcff;">

<div id="row_8_message_inner_body_compose" style="overflow:auto;" >

</div>
<div id="row_8_message_inner_body_inbox" style="overflow:auto;" >

</div>
<div id="row_8_message_inner_body_outbox" style="overflow:auto;" >

</div>
<div id="row_8_message_inner_body_trash" style="overflow:auto;" >

</div>
</td>
<td   id="mail_account"class="mail_account"  style=""align="center">
<a href="index26.html"><img src="../data/png/info.png" style="padding:10px;"  width="50px"title="Info"></a>
</td>
<style>
.mail_account{background-color:#0099e6;width:50px;border-width:0px 0px 0px 1px;border-style:solid;border-color:lightgray;color:white;background-color:#f2f5ff;}
.mail_account:hover{background-color:#34aeeb;}
</style>
</tr><tr>
<td  id="mail_inbox"class="mail_inbox"  style=""align="center">
<img src="../data/png/inbox.png" style="padding:10px;"  width="50px"title="Inbox">
</td>
<style>
.mail_inbox{background-color:#0099e6;width:50px;border-width:0px 1px 0px 0px;border-style:solid;border-color:lightgray;background-color:#f2f5ff;}
.mail_inbox:hover{background-color:#34aeeb;}
</style>
<td  id="mail_settings2"class="mail_settings2" style=""align="center">
</td>
<style>
.mail_settings2{background-color:#0099e6;width:50px;border-width:0px 0px 0px 1px;border-style:solid;border-color:lightgray;color:white;background-color:#f2f5ff;}

</style>
</tr><tr>
<td  id="mail_outbox"class="mail_outbox" style=""align="center">
<img src="../data/png/outbox.png" style="padding:10px;"  width="50px"title="Outbox">
</td>
<style>
.mail_outbox{background-color:#0099e6;width:50px;border-width:0px 1px 0px 0px;border-style:solid;border-color:lightgray;background-color:#f2f5ff;}
.mail_outbox:hover{background-color:#34aeeb;}
</style>
<td  id="mail_info"class="mail_info" style=""align="center">
</td>
<style>
.mail_info{background-color:#0099e6;width:50px;border-width:0px 0px 0px 1px;border-style:solid;border-color:lightgray;color:white;background-color:#f2f5ff;}

</style>
</tr><tr>
<td  id="mail_trash"class="mail_trash" style=""align="center">
<img src="../data/png/trash.png" style="padding:10px;"  width="50px"title="Trash">
</td>
<style>
.mail_trash{background-color:#0099e6;width:50px;border-width:0px 1px 0px 0px;border-style:solid;border-color:lightgray;background-color:#f2f5ff;}
.mail_trash:hover{background-color:#34aeeb;}
</style>
<td style="width:50px;border-width:0px 0px 0px 1px;border-style:solid;border-color:lightgray;color:white;background-color:#f2f5ff;"align="center">
</td></tr>
</table></div></div>

<div id="row_9_alert"style="position:absolute;top:90px;left:0px;right:0px;bottom:0px;overflow:auto;">
<table border="1px"width="100%"height="50px"align="center"style="border-width:0px 0px 1px 0px;border-style:solid;border-color:#cccccc;">
<tr>
<td align="left"class="fontsforweb_fontid_423"style="border-width:0px 0px 0px 0px;border-style:solid;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNotifications
</td>
<td align="right"class="fontsforweb_fontid_423"style="border-width:0px 0px 0px 0px;border-style:solid;">
<span style="padding-left:10px;padding-right:10px;"id="new_notification"><img src="../data/png/new.png"  width="20px"title="New notification"></span>

<span style="padding-left:10px;padding-right:10px;"id="clear_notification"><img src="../data/png/trash.png"  width="20px"title="Clear all"></span>
&nbsp&nbsp</td></tr></table></div>
<table align="center"width="100%"height="100%"id="notifications_body"style="background-color:white;position:absolute;top:140px;left:0px;right:0px;bottom:0px;overflow:auto;">
<tr>
<td align="center"style="width:25%;padding:50px 20px 50px 50px;">
<img src="../data/png/not2.png"  width="100px"title="Notifictions"style="border-radius:50px;	box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);">
<br>
<br>
<font style="font-size:22px;"class="fontsforweb_fontid_423">Type a notification to send to everyone</font><br>
<font style="font-size:14px;"class="fontsforweb_fontid_423">Please Send notifications <br>very carefully!</font>
<br>
<br>
<span id="noti_massage_protocol"style="padding:10px;border-radius:3px;width:90%;color:white;background-color:#5ae2a9;"></span></td>
<td align="center"style="width:65%;padding:50px 20px 50px 50px;">
<textarea id="noti_title"type="text"placeholder="Title..."style="width:100%;height:7%;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"></textarea><br><br>
<input id="noti_rule_id"type="text"placeholder="If you like to send a rule please type the rule id..."style="width:100%;height:7%;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"><br><br>
<textarea id="noti_content" type="text"placeholder="Content..."style="width:100%;height:75%;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"></textarea><br><br>
<input id="noti_send" type="button"value="Send"class="noti_send_bt">
<style>
.noti_send_bt{width:100%;height:8%;border-radius:3px;border-color:#0099e6;background-color:#0099e6;color:white;border-width:1px;border-style:solid;}
.noti_send_bt:hover{box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);cursor:pointer;background-color:#0099e6e8;}
</style>
</td>
</tr>
</table>
</div>

<div id="settings_row_main_1"style="position:absolute;top:90px;left:0px;right:0px;bottom:0px;overflow:auto;">
<table border="1px"width="100%"height="50px"align="center"style="border-width:0px 0px 1px 0px;border-style:solid;border-color:#cccccc;">
<tr>
<td align="left"class="fontsforweb_fontid_423"style="border-width:0px 0px 0px 0px;border-style:solid;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSettings
</td>
<td align="right"class="fontsforweb_fontid_423"style="border-width:0px 0px 0px 0px;border-style:solid;">
<span style="padding-left:10px;padding-right:10px;"id="new_settings"><img src="../data/png/new.png"  width="20px"title="Reset all details"></span>

<span style="padding-left:10px;padding-right:10px;"id="save_settings"><img src="../data/png/save_2.png"  width="20px"title="Save all details"></span>
&nbsp&nbsp</td></tr></table></div>
<table align="center"width="100%"height="100%"id="settings_row_1"style="background-color:white;position:absolute;top:140px;left:0px;right:0px;bottom:0px;overflow:auto;">
<tr>
<td align="center"style="width:20%;padding:50px 20px 50px 50px;">
<img src="../data/png/settings2.png"  width="100px"title="Settings"style="border-radius:50px;	box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);">
<br>
<br>
<font style="font-size:22px;"class="fontsforweb_fontid_423">Type your personal information</font><br>
<font style="font-size:14px;"class="fontsforweb_fontid_423">They will be helpful when you need to recover yor account <br>but keep the details as a secret!</font>
<br>
<br>
<span id="settings_row_2"style="padding:10px;border-radius:3px;width:90%;color:white;background-color:#5ae2a9;"></span></td>
<td align="center"style="width:70%;padding:50px 20px 50px 50px;">
<div id="settings_show_saved_on_db">
<style>
#settings_acc_email{background-color:#faf9fa;}#settings_password{background-color:#faf9fa;}
#settings_acc_email:hover{cursor:pointer;}#settings_password:hover{cursor:pointer;}</style>
<style>
#settings_acc_password{background-color:#faf9fa;}#settings_password{background-color:#faf9fa;}
#settings_acc_password:hover{cursor:pointer;}#settings_password:hover{cursor:pointer;}</style>

<input id="settings_acc_email"title="Email"type="text"placeholder="Email..."value="'.$email.'"style="width:100%;padding:15px;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"readonly><br><br>

<input readonly value="'.$password_acc.'" title="First name"id="settings_acc_password"type="text"placeholder="Password..."style="width:100%;padding:15px;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"><br><br>

<input title="First name"id="settings_first_name"type="text"placeholder="First name..."style="width:100%;padding:15px;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"><br><br>

<input title="Last name"id="settings_last_name"type="text"placeholder="Last name..."style="width:100%;padding:15px;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"><br><br>

<input  title="Possesion"id="settings_possesion"type="text"placeholder="Possesion..."style="width:100%;padding:15px;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"><br><br>

<input title="Type about one of your favour (not really necessary)" id="settings_favour"type="text"placeholder="Type about one of your favour (not really necessary)..."style="width:100%;padding:15px;border-radius:3px;border-color:#e2e2e2;border-width:1px;border-style:solid;"><br><br>

<input id="settings_send" type="button"value="Save"class="noti_send_bt">
<br><br>
<input id="settings_Show_latest_update" type="button"value="Show latest saved details"class="noti_send_bt">
<style>
.noti_send_bt{width:100%;padding:15px;border-radius:3px;border-color:#0099e6;background-color:#0099e6;color:white;border-width:1px;border-style:solid;}
.noti_send_bt:hover{box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);cursor:pointer;background-color:#0099e6e8;}
</style></div>
<input id="Go_back" type="button"value="Go back"class="noti_send_bt_1">
<style>
.noti_send_bt_1{width:100%;padding:15px;border-radius:3px;border-color:#0099e6;background-color:#0099e6;color:white;border-width:1px;border-style:solid;}
.noti_send_bt_1:hover{box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.05);cursor:pointer;background-color:#0099e6e8;}
</style>	
</td>
</tr>
</table>
</div>


<!--alert box-->
<div class="alert_box_01" id="alert_01">
  <div class="margin_01">
    <div class="container_01" id="container_01">
	    <div class="row_01"id="row_01">
		<span id="span_01">
		    <div class="header_01">
            <p></p>
			</div>
			
			<div class="body_01">
            <p>Container<br>Hi! I am the alert_box container...</p>
			</div>
			</span>
			<div class="footer_01">
            <p><span class="fontsforweb_fontid_423 close_bt_01"id="close_bt_01">close</span></p>
			</div>
        </div>		
	</div>
  </div>
</div>
<!--end alert box-->

</body>';	
}
}
else{
echo'<body style="background-color:#f2f5ff;">
<div style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;">
<table width="100%"height="100%"border="0px"align="center"style="padding-top:5px;padding-bottom:5px;">
<tr>
<td align="center">
<font class="fontsforweb_fontid_423" color="gray"style="font-size:42px;">';
echo "You don't have permission to access this web page! ";
echo'</font><br><br>
<font class="fontsforweb_fontid_423" color="gray"style="font-size:14px;">';
echo "If you need the permission <br><br>

<a href='index6.php'><input class='fontsforweb_fontid_423' type='button'id='sign_in'value='Sign in'></a>&nbsp&nbsp<a href='index7.php'><input class='fontsforweb_fontid_423' type='button'id='create_an_acc'value='Create an account'></a>";
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

?>


</html>