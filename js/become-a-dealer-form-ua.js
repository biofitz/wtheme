$(document).ready(function(){
	goDealerForm();
	openDealerPopup();
	closeDealerPopup();
});

//Sending of #dealer_upload_form
function goDealerForm(){
	$(document).on("click", ".dealer_form_go", function(e){
		e.preventDefault();
		dealerFormValidation($(this).parent());
	});
}

//Variables
var DV = new function(){
	this.files = {},
	this.extension = /.rar$|.zip$/i,
	//this.extension = /.zip$/i,
	this.canSend = true
}

//#dealer_upload_form validation
function dealerFormValidation(form){
	var handler,
		alertMessage = "";
		
	if(form.hasClass("vacancy"))
		handler = "/wp-content/themes/winner-ua/handler/vacancy_form_send.php";
	else
		handler = "/wp-content/themes/winner-ua/handler/dealer_form_send.php";

	if(form.find(".field_checkout").val() != "")
		alertMessage = "checkout is full \n";

	if($("#dealer_file").val().match(DV.extension) == null){
		dealerFileCheck($("#dealer_file"));
		alertMessage += "missing: uploaded file";
	}

    if(alertMessage != ""){
		console.log(alertMessage);
		form.find($(".alarm")).addClass("active");
        return;
    }

	if(DV.canSend == true){
		console.log("Required fields are filled correctly. \n");
		dealerSendForm(form, handler);
		DV.canSend = false;
	}
	else if(DV.canSend == false)
		console.log("can not send yet");
}

function dealerFileCheck(el){
	DV.files = el[0].files;
	
	if(el.val() == ""){
		el.parent()
			.addClass("warning")
			.removeClass("success");
			
		el.next().html("Вкласти файл-архів <img src='/wp-content/themes/winner-ua/img/general/file_arrow.png'' alt=''/>");
	}
	else{
		el.next().text(el[0].files[0].name);
		
		if(el.val().search(DV.extension) != -1){
			el.parent()
				.removeClass("warning")
				.addClass("success");
		}
		else{
			el.parent()
				.addClass("warning")
				.removeClass("success")
		}
	}
}

$("#dealer_file").on("change", function(){
	dealerFileCheck($(this));
});

//Form sending
function dealerSendForm(form, url){
	var data = new FormData();
	
	$.each(DV.files, function(key, value){
		data.append(key, value);
	}), formArray = form.serializeArray();
	
	for (var i in formArray){
		data.append(formArray[i]["name"], formArray[i]["value"]);
	}
    
	$.ajax({
		url: url,
		type: "POST",
		data: data,
		cache: false,
		processData: false,
		contentType: false,
		beforeSend: function(){
			$("#form_preloader").fadeIn(800);
		},
		success: function(response, textStatus, jqXHR){
			if(typeof response.error === "undefined" && response == "Sent"){
				$("#form_preloader").fadeOut(300);
				$("#dealer_popup_thnx").fadeIn(300);
				
				console.log(response);
				setTimeout(function(){
					DV.canSend = true;
				}, 400)
			}
			else{
				console.log("server response ERROR: " + response.error);
				smthWrong();
			}
		},
		error: function(jqXHR, textStatus, errorThrown){
			console.log("AJAX request ERROR: " + textStatus + " - " + errorThrown);
			alert("Серверу важко обробити ваш файл. Можливо, ви намагаєтеся завантажити занадто великий файл. Спробуйте ще раз, будь ласка." );

			$("#form_preloader").hide();
			DV.canSend = true;
		}
	});

	function smthWrong(){
		alert("Щось пішло не так. Будь ласка, спробуйте ще раз після перезавантаження сторінки.");
		location.reload();
	}
}

//Open #dealer_popup_wrapper
function openDealerPopup(){
	$("#become_a_dealer_popup_btn").click(function(){
		$("#dealer_popup_wrapper").fadeIn(300);
	});
}

//Close #dealer_popup_wrapper
function closeDealerPopup(){
	function close(){
		$("#dealer_popup_wrapper").fadeOut(300);
		
		setTimeout(function(){
			$("#dealer_popup_thnx").hide();
			$("#dealer_file").val("");
			$("#field_dealer_button").html("Вкласти файл-архів <img src='/wp-content/themes/winner-ua/img/general/file_arrow.png'' alt=''/>");
			$(".dealer_file_wrapper").removeClass("success");
			$(".dealer_file_wrapper").removeClass("warning");
		}, 300);
	}
	
	$("#dealer_popup_close").click(function(){
		close();
	});
	
	$("#dealer_popup_cover").click(function(){
		close();
	});
	
	$("#dealer_popup_cover").on("touchend", function(){
		close();
	});
}