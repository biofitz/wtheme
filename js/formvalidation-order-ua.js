//Variables
var V = new function(){
	this.standard = /^[а-яА-ЯіІїЇєЄ]{1,}[а-яА-ЯіІїЇєЄ ‘'`-]{1,}$/,
	this.validFirstName = this.standard,
	this.validSecondName = this.standard,
	this.validEmail = /.+@.+\..+/i,
	this.validPhone = /^[\+]{1,1}[0-9]{12,}$/,
	this.validConfirm = "true",
	
	this.dataEmptyFirstName = "введіть ваше ім‘я",
	this.dataEmptySecondName = "введіть ваше прізвище",
	this.dataEmptyPhone = "введіть телефон",
	this.dataEmptyEmail = "введіть e-mail",
	this.dataEmptyConfirm = "будь ласка, надайте згоду",

	this.dataWrongFirstName = "введіть коректне ім‘я",
	this.dataWrongSecondName = "введіть коректне прізвище",
	this.dataWrongPhone = "введіть коректний телефон",
	this.dataWrongEmail = "введіть коректний e-mail",
	this.dataWrongConfirm = "будь ласка, надайте згоду",
	
	this.validData = "",
	this.validInfo = "",
	this.validEmpty = "",
	this.alertItem = "",
	
	this.canSend = true
}

//Form validation
function formValidation(form){
	
	var handler = "/wp-content/themes/winner-ua/handler/configurator_order_form_send.php";
	
	var alertMessage = ""; 
	
	form.find(".field_required").each(function(){
		fields($(this));
		
		if($(this).val().search(V.validData) == -1 && $(this).val() != ""){
			$(this)
				.addClass("wrong_data")
				.parent()
				.addClass("warning")
				.find(".alarm")
				.html(V.validInfo);
				
			alertMessage += "missing: " + V.alertItem + " \n";
		}
		else if($(this).val().search(V.validData) == -1 && $(this).val() == ""){
			$(this)
				.addClass("wrong_data")
				.parent()
				.addClass("warning")
				.find(".alarm")
				.html(V.validEmpty);
				
			alertMessage += "missing: " + V.alertItem + " \n";
		}
		else if($(this).val().search(V.validData) != -1){
			$(this)
				.removeClass("wrong_data")
				.parent()
				.removeClass("warning");
		}
		
	});
	
	if(form.find(".field_checkout").val() != ""){
		alertMessage = "checkout is full \n"; 
	}
	
	var fieldDriverLicense = form.find(".field_driver_license");
	if(fieldDriverLicense.length != 0 && fieldDriverLicense.val().search(V.validDriverLicense) == -1 && fieldDriverLicense.val() != ""){
		alertMessage += "missing: correct driver`s license \n";
	}
	
	if(alertMessage != ""){
		console.log(alertMessage);
		
		if(!form.hasClass("focus"))
			fieldFocus(form);
		
		if($(window).innerWidth() < 680){
			$("html, body").stop().animate({
				scrollTop: form.find(".field_required.wrong_data").closest(".field_wrapper").offset().top - 100
			}, 800);
		}
		
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
		.parent()
		.removeClass("warning");
}

function addClass(el){
	el
		.addClass("wrong_data")
		.parent()
		.addClass("warning")
}
	
function fieldFocus(form){
	form.addClass("focus");
	
	form.find(".field_required").on("input", function(){
		if(form.hasClass("focus")){
			fields($(this));
			warning($(this));
		}
	});
	
	form.find(".field_required").on("change", function(){
		if(form.hasClass("focus")){
			fields($(this));
			warning($(this));
		}
	});
	
	form.find("#configurator_order_form_step_two_check").attr("data-focus", "true");
}

//Fields checking
function fields(field){
	if(field.hasClass("field_first_name")){
		V.validInfo = V.dataWrongFirstName;
		V.validEmpty = V.dataEmptyFirstName;
		V.validData = V.validFirstName;
		V.alertItem = "first name";
	}	
	if(field.hasClass("field_second_name")){
		V.validInfo = V.dataWrongSecondName;
		V.validEmpty = V.dataEmptySecondName;
		V.validData = V.validSecondName;
		V.alertItem = "second name";
	}		
	if(field.hasClass("field_email")){
		V.validInfo = V.dataWrongEmail;
		V.validEmpty = V.dataEmptyEmail;
		V.validData = V.validEmail;
		V.alertItem = "e-mail";
	}
	if(field.hasClass("field_phone")){
		V.validInfo = V.dataWrongPhone;
		V.validEmpty = V.dataEmptyPhone;
		V.validData = V.validPhone;
		V.alertItem = "phone";
	}	
	if(field.hasClass("field_confirm")){
		V.validInfo = V.dataWrongConfirm;
		V.validEmpty = V.dataEmptyConfirm;
		V.validData = V.validConfirm;
		V.alertItem = "confirm";
	}	
}

//Adding a class .warning to parent .field_wrapper
function warning(el){
	if(el.val().search(V.validData) != -1){
		removeClass(el);
	}
	else{
		addClass(el);	
		var text = (el.val() == "") ? V.validEmpty : V.validInfo;
		
		el
			.parent()
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
			
			form.removeClass("focus");
			
			form.find(".field").each(function(){
				if(!$(this).hasClass("ne")){
					if($(this).hasClass("field_date_of_appeal"))
						$(this).val("не вказано");
					else
						$(this).val("");
				}
			});
			
			$("#configurator_order_form_step_two_check").removeClass("active");
			
			var selectElements = form.find("select").each(function(){
				console.log($(this).find("option:first"));
				console.log($(this).find("option:first").prop("selected", true));
			});
		
			if(response == "Sent"){
				$("#form_popup").find("p:eq(0)").text("Дякуємо!");
				$("#form_popup").find("p:eq(1)").html("Ваше замовлення відправлено.<br/> Ми зв'яжемося з вами найближчим часом.");
				
				thnxShow();
			}
			
			else{
				console.log(response);
				alert("Щось пішло не так. Будь ласка, спробуйте ще раз після перезавантаження сторінки.");
				location.reload();
			}
			
			V.canSend = true;
    	},
    	error: function(jqXHR, textStatus, errorThrown){ 
    		console.log("AJAX request ERROR: " + textStatus + " - " + errorThrown);
			alert("Щось пішло не так. Будь ласка, спробуйте ще раз після перезавантаження сторінки.");
			location.reload();
    	}
 	});
}

//"Thank you" pop-up open
function thnxShow(){
	$("#form_preloader").fadeOut(300);
	$("#form_pop_wrapper").fadeIn(300);
}