$(document).ready(function(e){
	$("#modale").hide();

	$("#linke").click(function(e){
		$("#modale").fadeIn(1000);

		//e.preventDefault();
		return false;
	});

	$("#close").click(function(e){
		$("#modale").hide(400);
	});
});