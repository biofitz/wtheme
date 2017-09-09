//Variables
var V = new function(){
	this.standard = /^[a-zA-Zа-яА-ЯіІїЇєЄ]{1,}[a-zA-Zа-яА-ЯіІїЇєЄ ‘'`-]{1,}$/;
	this.validTopic = this.standard,
	this.validFirstName = this.standard,
	this.validSecondName = this.standard,
	this.validThirdName = this.standard,
	this.validEmail = /.+@.+\..+/i,
	//this.validPhone = /^[0-9]{1,}[0-9\x20\x28\x29\-]{6,}$/,
	this.validPhone = /^[\+]?[0-9]{1,}[0-9\x20\x28\x29\-]{6,}$/,
	//this.validPhone = /^[\+]{1,1}[0-9]{1,}[0-9\x20\x28\x29\-]{5,}$/,
	this.validMessage = this.standard,
	this.validDriverLicense = /^[a-zA-Zа-яА-ЯіІїЇєЄ]{1,}[a-zA-Zа-яА-ЯіІїЇєЄ0-9 -]{6,}$/,
	this.validDealer = this.standard,

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
	this.dataWrongPhone = "введіть коректний телефон або залиште поле порожнім",
	this.dataWrongEmail = "введіть коректний e-mail",
	this.dataWrongMessage = "введіть коректне повідомлення",
	this.dataWrongDriverLicense = "введіть коректний номер або залиште поле порожнім",
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
		handler = "/subscribe.php";
	
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
	//if((fieldPhone.val().search(V.validPhone) == -1 && fieldPhone.val() != "+") || (fieldPhone.val().search(V.validPhone) == -1 && fieldPhone.val() != "")){
	if(fieldPhone.val().search(V.validPhone) == -1 && fieldPhone.val() != ""){
		alertMessage += "missing: correct phone \n";
	}
	
	var fieldDriverLicense = form.find(".field_driver_license");
	if(fieldDriverLicense.val().search(V.validDriverLicense) == -1 && fieldDriverLicense.val() != ""){
		alertMessage += "missing: correct driver`s license \n";
	}
	
	if(alertMessage != ""){
		console.log(alertMessage);
		fieldFocus(form);
		
		if($(window).innerWidth() < 680){
			$("html, body").stop().animate({
				//scrollTop: $(".field_wrapper.warning").offset().top - $(".field_wrapper.warning").height() - 50
				scrollTop: form.find(".field.wrong_data").offset().top - 100
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
		
	form.find(".field_phone").on("input", function(){
		phoneCheck($(this));
	});
	
	form.find(".field_phone").focusout(function(){
		if(($(this).val() == "")){
			$(this)
				.removeClass("wrong_data")
				.parent()
				.removeClass("warning");
		}
	});
	
	function phoneCheck(el){
		if((el.val().search(V.validPhone) == -1 && el.val() != "")){
			el
				.addClass("wrong_data")
				.parent()
				.addClass("warning")
				.find(".alarm")
				.html(V.dataWrongPhone);
		}
		else{
			el
				.removeClass("wrong_data")
				.parent()
				.removeClass("warning");
		}
	}
	
	form.find(".field_driver_license").each(function(){
		driverLicenseCheck($(this));
	});
		
	form.find(".field_driver_license").on("input", function(){
		driverLicenseCheck($(this));
	});
	
	function driverLicenseCheck(el){
		//if(el.val().search(V.validPhone) == -1 && el.val() != "" && el.val() != "+"){
		if(el.val().search(V.validDriverLicense) == -1 && el.val() != ""){
			el
				.addClass("wrong_data")
				.parent()
				.addClass("warning")
				.find(".alarm")
				.html(V.dataWrongDriverLicense);
		}
		else{
			el
				.removeClass("wrong_data")
				.parent()
				.removeClass("warning");
		}
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
		el
			.removeClass("wrong_data")
			.parent()
			.removeClass("warning");	
	}
	else{
		el
			.addClass("wrong_data")
			.parent()
			.addClass("warning")
			.children(".alarm")
			.html(V.validInfo);
	}
}

//Transfer of the form to a php handler
function sendForm(form, url){
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: form.serialize(),
        success: function(response){
			console.log(response);
		
			if(response == "Sended"){
				/*console.log("The message is sended! \n");
				
				if($(form).hasClass("product_form")){
					localStorage.setItem("catalog_popup_check", "true");
					$("#product_first_popup").fadeOut(600);
					
					setTimeout(function(){
						form.find(".field").val("");
					}, 600);
				}
				
				if($(form).hasClass("cooperation_form")){
					$("#coo_form_info").fadeOut(300);
					$(form).css("opacity", "0");
					
					setTimeout(function(){
						$("#coo_form_info").html("Спасибо!").fadeIn(300);
					}, 300);
					
					setTimeout(function(){
						$("#coo_form_info").fadeOut(300);
					}, 7700);
					
					setTimeout(function(){
						$("#coo_form_info").html("Нам не терпится начать<br/> сотрудничество <span class=\"nowrap\">с вами!</span>").fadeIn(300);
						$(form).find(".field").val("").end().css("opacity", "1");
					}, 8000);
				}*/
			}
			
			else if(response == "Subscribed"){
				/*console.log("The message is sended! \n");
				
				$("#subscribe_form_footer_thanks").fadeIn(300);
				
				setTimeout(function(){
					form.find(".field").val("");
				}, 350);
				
				setTimeout(function(){
					$("#subscribe_form_footer_thanks").fadeOut(300);
				}, 8000);*/
			}
			
			else{
				//alert("Что-то пошло не так. Попробуйте еще раз после перезагрузки страницы.");
				//location.reload()
			}
			
			V.canSend = true;
    	},
    	error: function(response){ 
    		console.log("Error");
    		console.log(response);
			
			V.canSend = true;
    	}
 	});
}