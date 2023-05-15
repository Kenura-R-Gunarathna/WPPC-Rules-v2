$(document).ready(function(){
$("#alert_01").hide(0);	
$("#container_01").hide(0);
	$("#alert_button_01").click(function(){
		$("#alert_01").show(0);
		$("#container_01").slideDown(500);
	});
	$("#close_bt_01").click(function(){
		var x=setTimeout('$("#alert_01").hide(0)',700);
		$("#container_01").slideUp(500);
	});
});
