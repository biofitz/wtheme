//Variables
var V = new function(){
	this.standard = /^[а-яА-ЯіІїЇєЄ]{1,}[а-яА-ЯіІїЇєЄ ‘'`-]{1,}$/,
	this.validTopic = this.standard,
	this.validFirstName = this.standard,
	this.validSecondName = this.standard,
	this.validThirdName = this.standard,
	this.validEmail = /.+@.+\..+/i,
	//this.validPhone = /^[\+]?[0-9]{1,}[0-9\x20\x28\x29\-]{6,}$/,
	this.validPhone = /^[\+]{1,1}[0-9]{12,}$/,
	this.validMessage = /^[0-9а-яА-ЯіІїЇєЄ ‘'`-]{5,}/,
	this.validDriverLicense = /^[а-яА-ЯіІїЇєЄ]{1,}[а-яА-ЯіІїЇєЄ0-9 -]{6,}$/,
	this.validDealer = /^[a-zA-Zа-яА-ЯіІїЇєЄ]{1,}[a-zA-Zа-яА-ЯіІїЇєЄ ‘'`-]{1,}$/,

	this.dataEmptyTopic = "виберіть тему звернення",
	this.dataEmptyFirstName = "введіть ваше ім‘я",
	this.dataEmptySecondName = "введіть ваше прізвище",
	this.dataEmptyThirdName = "введіть ваше ім‘я по батькові",
	this.dataEmptyPhone = "введіть телефон",
	this.dataEmptyEmail = "введіть e-mail",
	this.dataEmptyMessage = "введіть повідомлення",
	this.dataEmptyDealer = "виберіть дилера",

	this.dataWrongTopic = "виберіть тему звернення",
	this.dataWrongFirstName = "введіть коректне ім‘я",
	this.dataWrongSecondName = "введіть коректне прізвище",
	this.dataWrongThirdName = "введіть коректне ім‘я по батькові",
	this.dataWrongPhone = "введіть коректний телефон або залишіть поле порожнім",
	this.dataWrongEmail = "введіть коректний e-mail",
	this.dataWrongMessage = "введіть коректне повідомлення",
	this.dataWrongDriverLicense = "введіть коректний номер або залишіть поле порожнім",
	this.dataWrongDealer = "виберіть дилера",
	
	this.validData = "",
	this.validInfo = "",
	this.validEmpty = "",
	this.alertItem = "",
	
	this.canSend = true
}

//Form validation
function formValidation(form){
	var handler;
	
	if(form.hasClass("simple_form"))
		handler = "/wp-content/themes/winner-ua/handler/simple_form_send.php";
	if(form.hasClass("subscribe_form"))
		handler = "/wp-content/themes/winner-ua/handler/subscribe_form_send.php";
	
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
	form.find(".field_required").on("input", function(){
		fields($(this));
		warning($(this));
	});
	
	form.find(".field_required").on("change", function(){
		fields($(this));
		warning($(this));
	});
	
	form.find(".field_phone").each(function(){
		phoneCheck($(this));
	});
		
	form.find(".field_phone").on("input", function(e){
		phoneCheck($(this));
	});
	
	form.find(".field_phone").focusout(function(){
		var el = $(this);
		
		if(el.val() == "" || el.val() == "+38")
			removeClass(el);
	});
	
	function phoneCheck(el){
		if(el.val().search(V.validPhone) == -1 && el.val() != ""){
			addClass(el);
			
			el
				.parent()
				.find(".alarm")
				.html(V.dataWrongPhone);
		}
		else
			removeClass(el);
		
		if(el.val() == "+38")
			removeClass(el);
	}
	
	form.find(".field_driver_license").each(function(){
		driverLicenseCheck($(this));
	});
		
	form.find(".field_driver_license").on("input", function(){
		driverLicenseCheck($(this));
	});
	
	function driverLicenseCheck(el){
		if(el.val().search(V.validDriverLicense) == -1 && el.val() != ""){
			addClass(el);
			
			el
				.parent()
				.find(".alarm")
				.html(V.dataWrongDriverLicense);
		}
		else
			removeClass(el);
	}
}

//Fields checking
function fields(field){
	if(field.hasClass("field_topic")){
		V.validInfo = V.dataWrongTopic;
		V.validEmpty = V.dataEmptyTopic;
		V.validData = V.validTopic;
		V.alertItem = "topic";
	}
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
	if(field.hasClass("field_third_name")){
		V.validInfo = V.dataWrongThirdName;
		V.validEmpty = V.dataEmptyThirdName;
		V.validData = V.validThirdName;
		V.alertItem = "third name";
	}		
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
	if(field.hasClass("field_message")){
		V.validInfo = V.dataWrongMessage;
		V.validEmpty = V.dataEmptyMessage;
		V.validData = V.validMessage;
		V.alertItem = "message";
	}
	if(field.hasClass("field_dealer")){
		V.validInfo = V.dataWrongDealer;
		V.validEmpty = V.dataEmptyDealer;
		V.validData = V.validDealer;
		V.alertItem = "dealer";
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
					$("#form_popup").find("p:eq(0)").text("Дякуємо!");
					$("#form_popup").find("p:eq(1)").text("Ваше повідомлення відправлено");
					
					thnxShow();
				}
			}
			
			else if(response == "Subscribed"){
				if($(form).hasClass("subscribe_form")){
					$("#form_popup").find("p:eq(0)").text("Дякуємо!");
					$("#form_popup").find("p:eq(1)").text("Ваша підписка оформлена");
					
					thnxShow();
				}
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