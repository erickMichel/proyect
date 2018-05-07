$(document).ready(function(e){
	$("#modalu").hide();

	$("#linku").click(function(e){
		$("#modalu").fadeIn(1000);

		//e.preventDefault();
		return false;
	});

	$("#closeu").click(function(e){
		$("#modalu").hide(400);
	});
});