//Variables
var V = new function(){
	this.elseData = /^[0-9a-zA-Zа-яА-ЯіІїЇєЄ‘'`-]{1,}.{1,}/,
	this.validEmail = /.+@.+\..+/i,
	this.validPhone = /^[\+]?[0-9]{1,}[0-9\x20\x28\x29\-\+\.,;]{6,}$/,
	this.validCharityDate = /[^не вказано]/,

	this.dataEmptyPhone = "enter contact phone numbers",
	this.dataEmptyEmail = "enter an e-mail",
	this.dataEmptyElse = "fill this field",
	this.dataEmptyCharityDate = "select a date",

	this.dataWrongPhone = "enter correct contact phone numbers",
	this.dataWrongEmail = "enter a correct e-mail",
	this.dataWrongElse = "fill this field",
	this.dataWrongCharityDate = "select a date",
	
	this.validData = "",
	this.validInfo = "",
	this.validEmpty = "",
	this.alertItem = "",
	
	this.canSend = true
}

//Form validation
function formValidation(form){
	var handler = "/wp-content/themes/winner-ua/handler/charity_form_send.php";
	
	var alertMessage = ""; 
	
	form.find(".field_required").each(function(){
		fields($(this));
		
		if($(this).val().search(V.validData) == -1 && $(this).val() != ""){
			$(this)
				.addClass("wrong_data")
				.closest(".field_wrapper")
				.addClass("warning")
				.find(".alarm")
				.html(V.validInfo);
				
			alertMessage += "missing: " + V.alertItem + " \n";
		}
		else if($(this).val().search(V.validData) == -1 && $(this).val() == ""){
			$(this)
				.addClass("wrong_data")
				.closest(".field_wrapper")
				.addClass("warning")
				.find(".alarm")
				.html(V.validEmpty);
				
			alertMessage += "missing: " + V.alertItem + " \n";
		}
		else if($(this).val().search(V.validData) != -1){
			$(this)
				.removeClass("wrong_data")
				.closest(".field_wrapper")
				.removeClass("warning");
		}
		
	});
	
	if(form.find(".field_checkout").val() != ""){
		alertMessage = "checkout is full \n"; 
	}
	
	var fieldPhone = form.find(".field_phone");
	if(fieldPhone.length != 0 && fieldPhone.val().search(V.validPhone) == -1 && fieldPhone.val() != ""){
		alertMessage += "missing: correct phone \n";
	}
	
	var fieldDriverLicense = form.find(".field_driver_license");
	if(fieldDriverLicense.length != 0 && fieldDriverLicense.val().search(V.validDriverLicense) == -1 && fieldDriverLicense.val() != ""){
		alertMessage += "missing: correct driver`s license \n";
	}
	
	if(alertMessage != ""){
		console.log(alertMessage);
		fieldFocus(form);

		var dif = window.innerWidth > 991 ? 20 : 100;
		
		$("html, body").stop().animate({
			scrollTop: form.find(".field_required.wrong_data").closest(".field_wrapper").offset().top - dif
		}, 800);
		
        return;
    }
	
	if(V.canSend == true){
		console.log("Required fields are filled correctly. \n");
		sendForm(form, handler);
		V.canSend = false;
	}
	else if(V.canSend == false){
		console.log("can not send yet");
	}
	
}

//Control of the .warning class on a field input event
function removeClass(el){
	el
		.removeClass("wrong_data")
		.closest(".field_wrapper")
		.removeClass("warning");
}

function addClass(el){
	el
		.addClass("wrong_data")
		.closest(".field_wrapper")
		.addClass("warning")
}
	
function fieldFocus(form){
	form.find(".field_required").on("input", function(){
		fields($(this));
		warning($(this));
	});
	
	form.find(".field_required").on("change", function(){
		fields($(this));
		warning($(this));
	});
	
	$(document).on("click", ".prev_month", function(){
		charityDate();
	});
	
	$(document).on("click", ".next_month", function(){
		charityDate();
	});
	
	$(document).on("click", ".cells", function(){
		charityDate();
	});
}

function charityDate(){
	var charityDateField = $(".field_charity_date");
		
	if(charityDateField.val() == "не вказано"){
		charityDateField
			.addClass("wrong_data")
			.closest(".field_wrapper")
			.addClass("warning")
			.find(".alarm")
			.html(V.dataWrongCharityDate);
	}
	else{
		charityDateField
			.removeClass("wrong_data")
			.closest(".field_wrapper")
			.removeClass("warning");
	}
}

//Fields checking
function fields(field){
	if(field.hasClass("field_phone")){
		V.validInfo = V.dataWrongPhone;
		V.validEmpty = V.dataEmptyPhone;
		V.validData = V.validPhone;
		V.alertItem = "phone";
	}	
	if(field.hasClass("field_email")){
		V.validInfo = V.dataWrongEmail;
		V.validEmpty = V.dataEmptyEmail;
		V.validData = V.validEmail;
		V.alertItem = "e-mail";
	}
	if(field.hasClass("field_charity_date")){
		V.validInfo = V.dataWrongCharityDate;
		V.validEmpty = V.dataEmptyCharityDate;
		V.validData = V.validCharityDate;
		V.alertItem = "charity date";
	}
	if(field.hasClass("field_else")){
		V.validInfo = V.dataWrongElse;
		V.validEmpty = V.dataEmptyElse;
		V.validData = V.elseData;
		V.alertItem = field.attr("name");
	}
}

//Adding a class .warning to closest .field_wrapper
function warning(el){
	if(el.val().search(V.validData) != -1){
		removeClass(el);
	}
	else{
		addClass(el);	
		var text = (el.val() == "") ? V.validEmpty : V.validInfo;
		
		el
			.closest(".field_wrapper")
			.find(".alarm")
			.html(text);
	}
}

//Transfer of the form to a php handler
function sendForm(form, url){
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: form.serialize(),
		beforeSend: function(){
			$("#form_preloader").fadeIn(800);
		},
        success: function(response){
			console.log("response from server: " + response);
			
			function thnxShow(){
				$("#form_preloader").fadeOut(300);
				
				$("#form_pop_wrapper").fadeIn(300);
				
				$("#form_close").click(function(){
					$("#form_pop_wrapper").fadeOut(300);
				});
				
				$("#form_popup_cover").click(function(){
					$("#form_pop_wrapper").fadeOut(300);
				});
				
				$("#form_popup_cover").on("touchend", function(){
					$("#form_pop_wrapper").fadeOut(300);
				});
			}
			
			form.find(".field").each(function(){
				if(!$(this).hasClass("ne")){
					if($(this).hasClass("field_date_of_appeal"))
						$(this).val("не вказано");
					else
						$(this).val("");
				}
				
				$(".calendar_item").removeClass("active");
			});
		
			if(response == "Sent"){
				if($(form).hasClass("simple_form")){
					$("#form_popup").find("p:eq(0)").text("Thank you!");
					$("#form_popup").find("p:eq(1)").text("Your application has been sent");
					
					thnxShow();
				}
			}
			
			else{
				console.log(response);
				alert("Something went wrong. Please try again after reloading the page.");
				location.reload();
			}
			
			V.canSend = true;
    	},
    	error: function(jqXHR, textStatus, errorThrown){ 
    		console.log("AJAX request ERROR: " + textStatus + " - " + errorThrown);
			alert("Something went wrong. Please try again after reloading the page.");
			location.reload();
    	}
 	});
}