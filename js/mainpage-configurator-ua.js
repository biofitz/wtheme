$(document).ready(function(){
	configuratorMP.start();
});

//Auto configurator on the main page
var configuratorMP = {
	start: function(){
		this.url = "http://config-api.winner.ua/api/";
		this.apiKey = "?ApiKey=B84279CE-DFEE-4351-B446-870C9A1CA905";
		this.menu = $("#configurator_main_page");
		this.form = $("#configurator_form_main_page");
		this.brands();
	},
	
	firstLoad: 0,
	
	brands: function(){
		$.ajax({
			url: this.url + "brands" + this.apiKey,
			type: "GET",
			dataType: "json",
			crossDomain: true,
			beforeSend: function(){
				                            
			},
			success: function(response){
				console.log(response);
				
				if(response.length == 0 && configuratorMP.firstLoad == 0){
					configuratorMP.firstLoad++;
					configuratorMP.start();
				}
				
				for(var i in response){
					$(".select_brands").append(
						"<li class='option cf_brand' data-name='brand' data-value='" + response[i].brand_id +"'>" + response[i].brand + "</li>"
					);
					
					$(".select_models").append(
						"<div class='brand_block brand_" + response[i].brand + "' data-brand='" + response[i].brand_id + "'>" +
							"<p class='option_title'>" + response[i].brand + "</p>" +
							"<ul class='model_block' data-brand-id='" + response[i].brand_id + "'></ul>" +
						"</div>"
					);
				}
				
				configuratorMP.models();
				
				configuratorMP.menu.on("click", ".option.cf_brand", function(){
					configuratorMP.activeItem($(this));
					configuratorMP.showModels($(this));
				});
			},
			error: function(){
				if(configuratorMP.firstLoad == 0){
					configuratorMP.firstLoad++;
					configuratorMP.start();
				}
				else
					alert("Ошибка на сервере. Перезагрузите страницу и попробуйте еще раз.");
			}
		});
	},
	
	models: function(){
		$.ajax({
			url: this.url + "models" + this.apiKey,
			type: "GET",
			dataType: "json",
			crossDomain: true,
			beforeSend: function(){
				                            
			},
			success: function(response){
				var modelBlock = configuratorMP.menu.find(".model_block");
				
				modelBlock.each(function(){
					for(var i in response){
						if($(this).attr("data-brand-id") == response[i].brand_id){
							$(this).append(
								"<li class='option cf_model' data-name='model' data-value='" + response[i].model +"'>" + response[i].model + "</li>"
							);
						}
					}
				});
				
				configuratorMP.menu.on("click", ".option.cf_model", function(){
					configuratorMP.activeItem($(this));
				});
				
				configuratorMP.findGroup();
			}
		});
	},
	
	activeItem: function(el){
		if(!el.hasClass("any") && el.hasClass("cf_model") && !el.hasClass("active") && configuratorMP.menu.find(".select_models").find(".option.cf_model.active").length >= 15){
			//alert("Максимум 15 моделей");
			//return;
		}
		
		if(el.hasClass("any")){
			if(el.hasClass("active"))
				return;
			
			el.next(".select_block").find(".option").removeClass("active");
			el.addClass("active");
		}
		else{
			if(el.hasClass("active")){
				el.removeClass("active");
				
				var length = el.closest(".select_wrapper").find(".option.active").length;
				if(length == 0)
					el.closest(".select_wrapper").find(".option.any").addClass("active");
			}
			
			else{
				el.closest(".select_wrapper").find(".option.any").removeClass("active");
				el.addClass("active");
			}
		}
		
		var input = configuratorMP.form.find("input[name='" + el.attr("data-name") + "']");
			value = "",
			options = el.closest(".select_wrapper").find(".option.active");
				
		for(var i = 0; i < options.length; i++){
			var comma = options.length > 1 ? "," : "";
			value += comma + $(options[i]).attr("data-value");
		}
		
		if(value.search(",") == 0)
			value = value.replace(",", "");
			
		configuratorMP.valInput(input, value);
		//configuratorMP.menu.find(".option.active:not(.any)").attr("title", "відмінити");
	},
	
	valInput: function(input, value){
		input.val(value);
	},
	
	showModels: function(el){	
		if(configuratorMP.menu.find(".select_brands").find(".option.cf_brand.active").length > 0)
			configuratorMP.menu.find(".choose_deph").removeClass("show_choose_deph");
		else
			configuratorMP.menu.find(".choose_deph").addClass("show_choose_deph");
	
		if(el.hasClass("any")){
			configuratorMP.menu.find(".brand_block").removeClass("active");
			configuratorMP.menu.find(".select_models").find(".option.active").click();
			return;
		}
	
		if(el.hasClass("any")){
			configuratorMP.menu.find(".brand_block").removeClass("active");
			configuratorMP.menu.find(".select_models").find(".option.active").click();
			return;
		}
		
		if(el.hasClass("active")){
			configuratorMP.menu.find(".brand_block[data-brand='" + el.attr("data-value") + "']").addClass("active");
		}
		else{
			configuratorMP.menu.find(".brand_block[data-brand='" + el.attr("data-value") + "']").removeClass("active");
			configuratorMP.menu.find(".brand_block[data-brand='" + el.attr("data-value") + "']").find(".option.active").click();
		}
	},
	
	findGroup: function(){
		configuratorMP.menu.find("#get_group_main_page").click(function(){
			configuratorMP.menu.find("#config_btn_main_page").click();
		});
	}
}