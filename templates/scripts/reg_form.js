$(document).ready(function(){
	$("#slidedown").click(function(){
		$("#reg_form").fadeOut("fast");
		$("#login_form").slideToggle("slow");
	});

	$("#to_reg").click(function(){
		$("#login_form").fadeOut("slow");
		$("#reg_form").fadeIn("slow");
	});

	$(document).click(function(event){
		if($(event.target).closest("#reg_form, #login_form, #slidedown, .prev, .next").length) return;
		$("#reg_form, #login_form").fadeOut("fast");
		event.stopPropagation();
	});
})