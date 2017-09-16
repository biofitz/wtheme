$(document).ready(function(){
	configurator.start();
});

//Auto configurator
var configurator = {
	start: function(){
		this.autoSearch = true;
		this.url = "https://config-api.winner.ua/api/";
		this.apiKey = "ApiKey=B84279CE-DFEE-4351-B446-870C9A1CA905";
		this.menu = $("#configurator");
		this.form = $("#configurator_form");
		this.advansedSearch();
		this.rangeMinPrice = null;
		this.rangeMaxPrice = null;
		this.getGroupUrl();
		this.brands();
		this.groupRequestUrl = "vehicles_group/any/any/any/any/any/any/any";
		this.cntAdd = (window.innerWidth > 600) ? 20 : 10;
		this.showMoreGroups();
		this.searchGroupBtn();
		this.openOptions = "Відкрити опції";
		this.closeOptions = "Закрити опції";
		this.getVehicles(),
		this.pricePopup(),
		this.canAppendCitiesInPopup = false,
		this.cityPopup(),
		this.order()
	},
	
	firstLoad: 0,
	
	brands: function(){
		$.ajax({
			url: this.url + "brands" + "?" + this.apiKey,
			type: "GET",
			dataType: "json",
			crossDomain: true,
			beforeSend: function(){
				                            
			},
			success: function(response){
				if(response.length == 0 && configurator.firstLoad == 0){
					configurator.firstLoad++;
					configurator.start();
				}
				
				else if(response.length == 0 && configurator.firstLoad != 0){
					configurator.smthWrong(response);
					return;
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
				
				configurator.models();
				
				configurator.menu.on("click", ".option.cf_brand", function(){
					configurator.activeItem($(this));
					configurator.showModels($(this));
					configurator.heightFix();
				});
			},
			error: function(response){ 
				if(configurator.firstLoad == 0){
					configurator.firstLoad++;
					configurator.start();
				}
				else
					configurator.smthWrong(response);
			}
		});
	},
	
	models: function(){
		$.ajax({
			url: this.url + "models" + "?" + this.apiKey,
			type: "GET",
			dataType: "json",
			crossDomain: true,
			beforeSend: function(){
				                            
			},
			success: function(response){
				var modelBlock = configurator.menu.find(".model_block");
				
				modelBlock.each(function(){
					for(var i in response){
						if($(this).attr("data-brand-id") == response[i].brand_id){
							$(this).append(
								"<li class='option cf_model' data-name='model' data-value='" + response[i].model +"'>" + response[i].model + "</li>"
							);
						}
					}
				});
				
				configurator.menu.on("click", ".option.cf_model", function(){
					configurator.activeItem($(this));
				});
				
				configurator.dataFromMP();
				configurator.turn();
			},
			error: function(response){ 
				configurator.smthWrong(response);
			}
		});
	},
	
	activeItem: function(el){
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
		
		var input = configurator.form.find("input[name='" + el.attr("data-name") + "']");
			value = "",
			options = el.closest(".select_wrapper").find(".option.active");
				
		for(var i = 0; i < options.length; i++){
			var comma = options.length > 1 ? "," : "";
			value += comma + $(options[i]).attr("data-value");
		}
		
		if(value.search(",") == 0)
			value = value.replace(",", "");
			
		configurator.valInput(input, value, el);
	},
	
	valInput: function(input, value, el){
		input.val(value);
		
		if(!el.hasClass("cf_popup_cities"))
			configurator.searchMethod();
		else if(el.hasClass("cf_popup_cities"))
			configurator.mapPopupCities(el);
	},
	
	showModels: function(el){	
		if(configurator.menu.find(".select_brands").find(".option.cf_brand.active").length > 0)
			configurator.menu.find(".choose_deph").removeClass("show_choose_deph");
		else
			configurator.menu.find(".choose_deph").addClass("show_choose_deph");
	
		if(el.hasClass("any")){
			configurator.menu.find(".brand_block").removeClass("active");
			configurator.menu.find(".select_models").find(".option.active").click();
			return;
		}
		
		if(el.hasClass("active")){
			configurator.menu.find(".brand_block[data-brand='" + el.attr("data-value") + "']").addClass("active");
		}
		else{
			configurator.menu.find(".brand_block[data-brand='" + el.attr("data-value") + "']").removeClass("active");
			configurator.menu.find(".brand_block[data-brand='" + el.attr("data-value") + "']").find(".option.active").click();
		}
	},
	
	advansedSearch: function(){
		configurator.advansedRequest("fuel", "fuel", "name");
		configurator.advansedRequest("gears_types", "gear_type_id", "gear_type");
		configurator.advansedRequest("chasis", "chasis", "chasis");
		configurator.advansedRequest("price_limit", "min_price", "max_price");
		configurator.advansedRequest("dealer_cities", "dealer_city", "dealer_city");
	},
	
	advansedRequest: function(type, prop1, prop2){
		$.ajax({
			url: this.url + type + "?" + this.apiKey,
			type: "GET",
			dataType: "json",
			crossDomain: true,
			beforeSend: function(){
				                            
			},
			success: function(response){
				var advansedClass = ".select_" + type,
					advansedBlock = configurator.menu.find(advansedClass);
				
				if(type != "price_limit"){
					for(var i in response){
						advansedBlock.append(
							"<li class='option cf_" + type + "' data-name='" + type + "' data-value='" + response[i][prop1] +"'>" + response[i][prop2] + "</li>"
						);
					}
				}
				else if(type == "price_limit"){
					configurator.rangeMinPrice = response[0][prop1];
					configurator.rangeMaxPrice = response[0][prop2];

					configurator.rangeSlider();
				}
				
				configurator.menu.on("click", ".option.cf_" + type, function(){
					configurator.activeItem($(this));
				});
			},
			error: function(response){ 
				configurator.smthWrong(response);
			}
		});
	},
	
	rangeSlider: function(prop1, prop2){
		var CFSlider = configurator.menu.find(".range_slider"),
			CFAmountMin = configurator.menu.find(".amount_min"),
			CFAmountMax = configurator.menu.find(".amount_max"),
			minPrice = configurator.form.find("input[name=min_price]"),
			maxPrice = configurator.form.find("input[name=max_price]")
		
		configurator.menu.find(".range_slider").slider({
			range: true,
			min: configurator.rangeMinPrice,
			max: configurator.rangeMaxPrice,
			values: [configurator.rangeMinPrice, configurator.rangeMaxPrice],
			step: 1,
			slide: function(event, ui){
				CFAmountMin.text(ui.values[0]);
				CFAmountMax.text(ui.values[1]);
				minPrice.val(ui.values[0]);
				maxPrice.val(ui.values[1]);
			},
			stop: function(event, ui){
				configurator.searchMethod();
			}
		});
		
		CFAmountMin.text(CFSlider.slider("values", 0));
		CFAmountMax.text(CFSlider.slider("values", 1));
		minPrice.val(CFSlider.slider("values", 0));
		maxPrice.val(CFSlider.slider("values", 1));
	},
	
	dataFromMP: function(){
		if($(".data_from_mp").length > 0){
			var arrBrands = $("#response_brands").text().split(",");
			var arrModels = $("#response_models").text().split(",");
			
			if(arrBrands[0] != "any"){
				for(var i in arrBrands){
					//console.log(arrBrands[i]);
					configurator.menu.find(".option.cf_brand[data-value='" + arrBrands[i] + "']").click();
				}
				
				for(var i in arrModels){
					//console.log(arrModels[i]);
					configurator.menu.find(".option.cf_model[data-value='" + arrModels[i] + "']").click();
				}
				
				if(configurator.autoSearch == false)
					configurator.addGroupResponse();
			}
			else if(arrBrands[0] == "any")
				configurator.addGroupResponse();
		}
		else
			configurator.addGroupResponse();
	},
	
	getGroupUrl: function(){
		var brand = configurator.form.find("input[name=brand]").val(),
			model = configurator.form.find("input[name=model]").val(),
			fuel = configurator.form.find("input[name=fuel]").val(),
			chasis = configurator.form.find("input[name=chasis]").val(),
			gearsTypes = configurator.form.find("input[name=gears_types]").val(),
			minPrice = configurator.form.find("input[name=min_price]").val(),
			maxPrice = configurator.form.find("input[name=max_price]").val();
			
		configurator.dealerCities = configurator.form.find("input[name=dealer_cities]").val() != "any" ? "&dealer_city=" + encodeURIComponent(configurator.form.find("input[name=dealer_cities]").val()) : "";
		configurator.groupRequestUrl = "vehicles_group/" + brand + "/" + model + "/" + fuel + "/" + chasis + "/" + gearsTypes + "/" + minPrice + "/" + maxPrice;
	},
	
	searchMethod: function(){
		configurator.getGroupUrl();
		
		var url = configurator.groupRequestUrl;
		setTimeout(function(){
			if(url == configurator.groupRequestUrl){
				if(configurator.autoSearch == true){
					configurator.addGroupResponse();
				}
			}
		}, 0);
	},
	
	addGroupResponse: function(){
		$.ajax({
			url: configurator.url + configurator.groupRequestUrl + "?" + configurator.apiKey + configurator.dealerCities,
			type: "GET",
			dataType: "json",
			crossDomain: true,
			beforeSend: function(){
				$("#result_canvas").find(".cover").show().find("img").hide().fadeIn(2000);	
				console.log("Запрос на группы: " + configurator.url + configurator.groupRequestUrl + "?" + configurator.apiKey + configurator.dealerCities);				
			},
			success: function(response){
				//setTimeout(function(){
				console.log(response);
				configurator.GroupResponse = response;
		
				configurator.cntStart = 0;
				configurator.cntNum = (response.length > configurator.cntAdd) ? configurator.cntAdd : response.length;
				configurator.cntEnd = configurator.cntNum;
				
				if(response.length - configurator.cntNum < configurator.cntEnd){
					configurator.cntNum = response.length - configurator.cntEnd;
				}
			
				$("#result_canvas_inner").html("");

				configurator.showGroupHTML();
				//}, 10000);
			},
			error: function(response){ 
				configurator.smthWrong(response);
			}
		});
	},
	
	showGroupHTML: function(){
		var response = configurator.GroupResponse;
		
		$("#config_show_more_obj").show();
		
		for(var i = configurator.cntStart; i < configurator.cntEnd; i++){
			var src = (response[i].brand_id + "/models/" + response[i].model).replace(/ /g, "-");
			
			var fuel = response[i].fuel,
				fuelString = fuel;
			
			switch(fuel){
				case "H":
					fuelString = "Гібрид";
					break;
					
				case "D":
					fuelString = "Дизель";
					break;
					
				case "P":
					fuelString = "Бензин";
					break;
					
				default: 
					fuelString = fuel;
			}
			
			var priсeFormat = (response[i].price.toString().replace(/\s/g, "")).toString().split("").reverse().join("").replace(/([0-9]{3})/g, "$1 ").split('').reverse().join("");
			
			
			$("#result_canvas_inner").append(
				"<div class='model_group visible'>" +
					"<div class='model_group_inner'>" +
						"<div class='model_group_img_wrapper'>" +
							"<img class='model_group_img' src='" + response[i].img + "' alt='' />" +
						"</div>" +
						"<div class='model_group_info'>" +
							"<div class='info_part model_group_title_wrapper'>" +
								"<p class='model_group_title'><span>" + response[i].brand + "</span> <span>" + response[i].model + "</span></p>" +
							"</div>" +
							"<div class='info_part model_data_details_wrapper'>" +
								"<div class='info_part_data_wrapper'>" +
									"<div class='part'>" +
										"<p class='model_data_details displacement'><i class='fa fa-cog'></i>" + response[i].displacement + " л.</p>" +
									"</div>" +
									"<div class='part'>" +
										"<p class='model_data_details version'><i class='zmdi zmdi-ticket-star'></i>" + response[i].version + "</p>" +
									"</div>" +
								"</div>" +
								"<div class='info_part_data_wrapper'>" +
									"<div class='part'>" +
										"<p class='model_data_details fuel'><i class='zmdi zmdi-gas-station'></i>" + fuelString + "</p>" +
									"</div>" +
									"<div class='part'>" +
										"<p class='model_data_details year'><i class='zmdi zmdi-calendar-alt'></i>" + response[i].year + "</p>" +
									"</div>" +
								"</div>" +
								"<div class='info_part_data_wrapper'>" +
									"<div class='part'>" +
										"<p class='model_data_details last_p gear_id'><i class='zmdi zmdi-plus-circle-o'></i>" + response[i].gear_name + "</p>" +
									"</div>" +
								"</div>" +
							"</div>" +
							"<div class='info_part'>" +
								"<p class='model_group_price'><span>Ціна від:</span> " + "<span>" + priсeFormat + " <span>грн</span></span></p>" +
								"<button class='model_group_count' data-brand-id='" +  response[i].brand_id + "' data-model='" +  response[i].model + "' data-fuel='" + response[i].fuel + 
								"' data-chasis='" +  response[i].chasis + "' data-gear-id='" +  response[i].gear_id + "' data-year='" +  response[i].year + "' data-displacement='" +  
								response[i].displacement + "' data-power='" +  response[i].power + "' data-version='" +  response[i].version + "'>" + response[i].count + " авто в наявності</button>" +
							"</div>" +
						"</div>" +
					"</div>" +
				"</div>"
			);
		}
		
		if(response.length == 0){
			$("#result_canvas_inner").append(
				"<p class='conf_nothing_found'>За вашим пошуком нічого не знайдено.</p>"
			);
		}

		$("#config_rest").text(configurator.cntNum);
		$("#result_cnt").text(response.length);
		$("#result_canvas").find(".cover").fadeOut(150);
		
		if(response.length <= configurator.cntAdd || response.length - configurator.cntEnd == 0){
			$("#config_show_more_obj").hide();
		}
	},
	
	showMoreGroups: function(){
		$("#config_show_more_obj").click(function(){
			var response = configurator.GroupResponse;
			
			configurator.cntStart = configurator.cntEnd;
			
			if(response.length - configurator.cntNum > configurator.cntEnd){
				configurator.cntEnd += configurator.cntNum;
			}
			else{
				configurator.cntEnd = response.length - configurator.cntEnd + configurator.cntStart;
			}
			
			if(response.length - configurator.cntNum < configurator.cntEnd){
				configurator.cntNum = response.length - configurator.cntEnd;
			}
			
			configurator.showGroupHTML();
		});
	},
	
	searchGroupBtn: function(){
		if(configurator.autoSearch == true)
			configurator.menu.find(".get_group").hide();
		
		configurator.menu.find(".get_group").click(function(){
			configurator.addGroupResponse();
		});
	},
	
	getVehicles: function(){
		$(document).on("click", ".model_group_count", function(){
			$("#global_conf_preloader").addClass("active").find(".cover").css("opacity", "0");
			
			setTimeout(function(){
				$("#global_conf_preloader").find(".cover").css("opacity", "1");
			}, 10);
			
			var el = $(this);

			var url = "vehicles?" + "brand_id=" + el.attr("data-brand-id") + "&model=" + el.attr("data-model") + "&fuel=" + el.attr("data-fuel") +
			"&chasis=" + encodeURIComponent(el.attr("data-chasis")) + "&gear_id=" + el.attr("data-gear-id") + "&year=" + el.attr("data-year") + "&displacement=" + el.attr("data-displacement") + 
			"&power=" + el.attr("data-power") + "&version=" + encodeURIComponent(el.attr("data-version"));
			
			$("#vehicles_parent_info").html("");
			$("#vehicles_tbody").html("");
			
			var parent = el.closest(".model_group_inner"),
				src = parent.find(".model_group_img").attr("src"),
				title = parent.find(".model_group_title").text(),
				displacement = parent.find(".displacement").html(),
				version = parent.find(".version").html(),
				fuel = parent.find(".fuel").html(),
				year = parent.find(".year").html(),
				gearId = parent.find(".gear_id").html();
				
			
			$("#vehicles_parent_info").html(
				"<div class='vehicles_parent_info_img_wrapper'>" +
					"<img class='vehicles_parent_info_img' src='" + src + "' alt='' />" +
				"</div>" +
				"<div class='vehicles_parent_info_data_wrapper'>" +
					"<div class='vehicles_parent_info_part vehicles_parent_info_data_title'><p>" + title + "</p></div>" +
					"<div class='vehicles_parent_info_part'>" +
						"<div class='side_part'><p>" + displacement + "</p></div>" +
						"<div class='side_part'><p>" + version + "</p></div>" +
					"</div>" +
					"<div class='vehicles_parent_info_part'>" +
						"<div class='side_part'><p>" + fuel + "</p></div>" +
						"<div class='side_part'><p>" + year + "</p></div>" +
					"</div>" +
					"<div class='vehicles_parent_info_part'>" +
						"<div class='side_part big'><p>" + gearId + "</p></div>" +
					"</div>" +
				"</div>"
			);
			
			$.ajax({
				//url: configurator.url + url + "&" + configurator.apiKey,
				url: configurator.url + url + "&" + configurator.apiKey + configurator.dealerCities,
				type: "GET",
				dataType: "json",
				crossDomain: true,
				beforeSend: function(){
					console.log("Запрос на автомобили " + configurator.url + url + "&" + configurator.apiKey + configurator.dealerCities);							
				},
				success: function(response){
					console.log(response);
					if(response.length == 0){
						configurator.smthWrong(response);
						return;
					}
					
					for(var i in response){
						configurator.createVehicles(response[i]);
					}
					
					$("#vehicles_popup").fadeIn(200);
					$("#vehicles_content").scrollTop(0);
					$("#global_conf_preloader").removeClass("active");
				},
				error: function(response){ 
					configurator.smthWrong(response);
				}
			});
			
			configurator.canAppendCitiesInPopup = true;
		});
		
		$("#vehicles_popup").on("click", ".cover", function(){
			$("#vehicles_popup").fadeOut(200);
			$(".select_popup_cities").html("");
		});
		$("#vehicles_popup").on("click", ".close_cross", function(){
			$("#vehicles_popup").fadeOut(200);
			$(".select_popup_cities").html("");
		});
	},
	
	createVehicles: function(i){
		var priсeFormat = (i.price.toString().replace(/\s/g, "")).toString().split("").reverse().join("").replace(/([0-9]{3})/g, "$1 ").split('').reverse().join("");
									
		var dealer = "";
		if(i.dealer_url == undefined || i.dealer_url == "")
			dealer = "<td data-cell='Дилер'>" + i.dealer_name + "</td>";
		else
			dealer = "<td data-cell='Дилер'><a href='" + i.dealer_url + "' target='_blank'>" + i.dealer_name + "</a></td>";
		
		var fuel = i.fuel,
			fuelString = fuel;
			
		switch(fuel){
			case "H":
				fuelString = "Гібрид";
				break;
				
			case "D":
				fuelString = "Дизель";
				break;
				
			case "P":
				fuelString = "Бензин";
				break;
				
			default: 
				fuelString = fuel;
		}
		
		$("#vehicles_tbody").append(
			"<tr>" +
				"<td data-cell='Зображення'><span class='small_cars_wrapper'><img class='small_cars' src=" + i.img + " alt='' /></span></td>" +
				"<td data-cell='VIN'>" + i.vin + "</td>" +
				"<td data-cell='Колір'>" + i.color_name_en + "</td>" +
				"<td data-cell='Ціна' class='price_popup_open'>" + priсeFormat + " грн</td>" +
				dealer +
				"<td data-cell='Місто' class='city_popup_open'>" + i.dealer_city + "</td>" +
				"<td data-cell='Замовити авто' class='conf_order_th'><span class='conf_order_button'" + 
					"data-img='" + i.img + "'" + 
					"data-brand='" + i.brand + "'" + 
					"data-model='" + i.model + "'" + 
					"data-vin='" + i.vin + "'" + 
					"data-id='" + i.id + "'" +
					"data-price='" + priсeFormat + "'" + 
					"data-release_year='" + i.year + "'" + 
					"data-chasis='" + i.chasis + "'" + 
					"data-color_id='" + i.color_id + "'" + 
					"data-color_name_en='" + i.color_name_en + "'" + 
					"data-dealer_city='" + i.dealer_city + "'" + 
					"data-dealer_code='" + i.dealer_code + "'" + 
					"data-dealer_name='" + i.dealer_name + "'" + 
					"data-dealer_url='" + i.dealer_url + "'" + 
					"data-displacement='" + i.displacement + "'" + 
					"data-fuel='" + fuelString + "'" + 
					"data-gear_id='" + i.gear_id + "'" + 
					"data-gear_name='" + i.gear_name + "'" + 
					"data-gear_type_id='" + i.gear_type_id + "'" + 
					"data-market_type='" + i.market_type + "'" + 
					"data-power='" + i.power + "'" + 
					"data-version='" + i.version + "'" + 
				">Замовити</span></td>" +
			"</tr>"
		);
	},
	
	turn: function(){
		var openHeight = $("#configurator_height_block").height();
		
		$("#configurator_turn").click(function(){
			if(!$("#configurator").hasClass("opened")){
				$("#configurator").height(openHeight).addClass("opened");
				$(this).text(configurator.closeOptions);
			}
			else{
				$("#configurator").height(0).removeClass("opened");
				$(this).text(configurator.openOptions);
			}
		});
	},
	
	heightFix: function(){
		if($("#configurator").hasClass("opened") && $(window).outerWidth() <= 991){
			var openHeight = $("#configurator_height_block").height();
			$("#configurator").height(openHeight);
			console.log("#configurator height has been changed");
		}
	},
	
	smthWrong: function(response){
		alert("Сталася помилка. Перезавантажте сторінку та спробуйте ще раз.");
		console.log(response);
	},
	
	pricePopup: function(){
		$(document).on("click", "span.price_popup_open", function(){
			$("#price_popup_wrapper").fadeIn(300);
		});
		
		$(document).on("click", "td.price_popup_open", function(){
			if(window.innerWidth <= 991)
				$("#price_popup_wrapper").fadeIn(300);
		});
		
		$(document).on("click", "#price_popup_close", function(){
			$("#price_popup_wrapper").fadeOut(300);
		});
		
		$(document).on("click touchend", "#price_popup_cover", function(){
			$("#price_popup_wrapper").fadeOut(300);
		});
	},
	
	cityPopup: function(){
		$(document).on("click", "span.city_popup_open", function(){
			cityPopupOpen();
		});
		
		$(document).on("click", "td.city_popup_open", function(){
			if(window.innerWidth <= 991)
				cityPopupOpen();
		});
		
		function cityPopupOpen(){
			if(configurator.canAppendCitiesInPopup == true){
				//console.log(configurator.canAppendCitiesInPopup);
				configurator.canAppendCitiesInPopup = false;
				
				$(document).find(".option.cf_popup_cities.any").addClass("active");
				
				var cityArray = [];
				
				$("#vehicles_tbody").find("td.city_popup_open").each(function(){
					var text = $(this).text();
					
					/*if(cityArray.indexOf(text) == -1){
						cityArray.push(text);
						$(".select_popup_cities").append(
							"<li class='option cf_popup_cities' data-name='popup_cities' data-value='" + text +"'>" + text + "</li>"
						);
					}*/
					
					if(cityArray.indexOf(text) == -1){
						cityArray.push(text);
						console.log(cityArray);
					}
				});
				
				if(cityArray.length > 1){
					for(var i in cityArray){
						$(".select_popup_cities_wrapper").show();
						$("#only_one_city_text").hide();
						
						$(".select_popup_cities").append(
							"<li class='option cf_popup_cities' data-name='popup_cities' data-value='" + cityArray[i] +"'>" + cityArray[i] + "</li>"
						);
					}
				}
				else{
					$(".select_popup_cities_wrapper").hide();
					$("#only_one_city_text").find("span").text(cityArray[0]);
					$("#only_one_city_text").show();
				}
			}

			$("#city_popup_wrapper").fadeIn(300);
		}
		
		$(document).on("click", ".option.cf_popup_cities", function(){
			configurator.activeItem($(this));
		});
		
		$(document).on("click", "#city_popup_close", function(){
			$("#city_popup_wrapper").fadeOut(300);
		});
		
		$(document).on("click touchend", "#city_popup_cover", function(){
			$("#city_popup_wrapper").fadeOut(300);
		});
	},
	
	mapPopupCities: function(el){
		var cityArray = [];
		
		$(".select_popup_cities_wrapper").find(".option.cf_popup_cities.active").each(function(){
			cityArray.push($(this).attr("data-value"));
		});
		
		console.log(cityArray);
		
		if(cityArray.indexOf("any") != -1){
			$("#vehicles_tbody").find("td.city_popup_open").each(function(){
				$(this).parent("tr").show();
			});
		}
		else{
			$("#vehicles_tbody").find("td.city_popup_open").each(function(){
				if(cityArray.indexOf($(this).text()) == -1)
					$(this).parent("tr").hide();
				else
					$(this).parent("tr").show();
			});
		}
	},
	
	order: function(){
		$(document).on("click", ".conf_order_button", function(){
			//console.log($(this).data());
			
			$("#form_preloader").fadeIn(300);
			
			var obj = $(this).data(),
				form = $("#configurator_order_form_step_one");
				
			form.html("");
			
			for(var i in obj){
				console.log(i + ": " + obj[i]);
				
				form.append(
					"<label>" + i + "<br/><input name='" + i + "' value='" + obj[i] + "' /></label><br/>"
				);
			}
			
			form.submit();
		});
	}
}