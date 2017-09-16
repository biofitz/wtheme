$(document).ready(function(){
	//general
	memory();
	preloader();
	showCurYear();
	mask();
	goForm();
	headCourse();
	searchFocus();
	topMenuOpenPoint();
	formChooseBtn();
	scrollToElement();
	if(typeof createCalendar == "function")
		createCalendar(new Date().getFullYear(),  new Date().getMonth(), new Date().getDate());
	
	//main page
	generalSlider();
	
	//category
	categoryAdditionalMenu();
	smartThumbSize();
	
	//single default
	iframeHeight();
	
	//finance page
	financeContentSwitch();
	
	//brand page
	currentBrandMenuItem();
	
	//areas of activity page
	activityPopups();
	
	//career page
	careerContentSwitch();
	
	//philantropy page
	philantropyCalendar();
	
	//configurator order page
	confirmCheck();
});

//Show a spent server memory
function memory(){
	console.log($("#memory").text());
}

//Preloader
function preloader(){
	$(window).load(function(){
		$("#preloader").fadeOut(600);
	});
}

//Current year in the footer
function showCurYear(){
	var year = new Date(); 
	$("#footer_cur_year").text(year.getFullYear());
}

//Scrollbar width
var scrollbar = scrollbarWidth();
function scrollbarWidth(){
	var block = $("<div>").css({"height":"50px","width":"50px"}),
		indicator = $("<div>").css({"height":"200px"});

	$("body").append(block.append(indicator));
	var w1 = $("div", block).innerWidth();    
	block.css("overflow-y", "scroll");
	var w2 = $("div", block).innerWidth();
	$(block).remove();
	return (w1 - w2);
}

//Phone mask
function mask(){
	$(".field_phone.ua").focusin(function(){
		var el = $(this);
		if(el.val() == ""){
			el.val("+38");
		}
	});
	
	$(".field_phone.ua").focusout(function(){
		var el = $(this);
		if(el.val() == "+38")
			el.val("");
	});
	
	$(".field_phone.ua").on("input", function(){
		var el = $(this);
		var value = $(this).val();
		
		if(el.val().search(/^\+38/) != 0){
			el.val("+38");
		}
		
		if(el.val().search(/^[+0-9]{1,}$/) == -1){
			value = value.replace(/[^+0-9]/gim, "");
			el.val(value);
		}
	});
	
	$(".field_phone.en").focusin(function(){
		if($(this).val() == "")
			$(this).val("+");
	});
	
	$(".field_phone.en").focusout(function(){
		if($(this).val() == "+"){
			$(this).val("");
		}
	});
	
	$(".field_phone.en").on("input", function(){
		var el = $(this);
		var value = $(this).val();
		
		if(el.val().search(/^\+/) != 0){
			el.val("+");
		}
		
		if(el.val().search(/^[+0-9]?$/) == -1){
			value = value.replace(/[^+0-9]/gim, "");
			el.val(value);
		}
	});
	
	$(".field_phone.field_phone_charity").focusin(function(){
		if($(this).val() == "")
			$(this).val("+");
	});
	
	$(".field_phone.field_phone_charity").focusout(function(){
		if($(this).val() == "+"){
			$(this).val("");
		}
	});
	
	$(".field_phone.field_phone_charity").on("input", function(){
		var value = $(this).val();

		if($(this).val().search(/^[-()+,;\. 0-9]{1,}$/) == -1){
			value = value.replace(/[^-()+,;\. 0-9]/gim, "");
			$(this).val(value);
		}
	});
}

//Sending of the forms
function goForm(){
	$(document).on("click", ".form_go", function(e){
		e.preventDefault();
		$(".url").val(document.location.href);
		formValidation($(this).closest("form"));
		
		console.log($(this).closest("form"));
	});
	
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

//Curency course in header
function headCourse(){
	$("#head_course").text($("#head_course_data").text());
}

//Focus on wp-search-form input (click on #search_wrapper)
function searchFocus(){
	$("#searchsubmit").val("");
	
	$("#search_wrapper").mouseenter(function(){
		$(this).addClass("active");
	});
	
	$("#search_wrapper").mouseleave(function(){
		var search = $(this);
		
		if(!search.find("input[type='text']").is(":focus")){
			search.removeClass("active");
		}
	});
	
	$("#search_img_block").on("touchend", function(){
		if($("#search_wrapper").hasClass("active")){
			$("#search_wrapper").removeClass("active");
		}
		else{
			$("#search_wrapper").addClass("active");
		}
	});
	
	$("#search_wrapper").find("*").addClass("search_el");

	$(document).click(function(e){
		if((!$(e.target).hasClass("search_el")) && $("#search_wrapper").hasClass("active")){
			$("#search_wrapper").removeClass("active");
			console.log($(e.target).hasClass("search_el"));
		}
	});
}

//Opening of the top menu
function topMenuOpenPoint(){
	$(".menu-item-has-children").each(function(){
		$(this).append("<span class='tick'></span>"),
		
		$(this).children("a").click(function(e){
			e.preventDefault();
		});
	});
	
	$("#sandwich").click(function(){
		if($(window).innerWidth() <= 991){
			$("#device_menu_cover").fadeIn(0);
			$("#top_menu_block").addClass("show");
			$("html, body").css("overflow-y", "hidden");
		}
	});
	
	$("#device_menu_cover").click(function(){
		if($(window).innerWidth() <= 991){
			$(this).fadeOut(0);
			$("#top_menu_block").removeClass("show");
			$("html, body").css("overflow-y", "auto");
		}
	});
	
	$(".menu-item-has-children").mouseenter(function(){
		if($(window).innerWidth() > 991)
			open($(this));
	});
	
	$(".menu-item-has-children").mouseleave(function(){
		if($(window).innerWidth() > 991)
			close($(this));
	});
	
	var offsetStartXPage, offsetStartYPage, offsetEndXPage, offsetEndYPage;
	$(".menu-item-has-children").children("a").on("touchstart", function(e){
		var touchStart = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
		offsetStartXPage = touchStart.clientX;
		offsetStartYPage = touchStart.clientY;
	});
	
	$(".menu-item-has-children").children("a").on("touchend", function(e){
		var touchEnd = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
		offsetEndXPage = touchEnd.clientX;
		offsetEndYPage = touchEnd.clientY;
		
		if((offsetStartXPage - offsetEndXPage < 5) && (offsetStartXPage - offsetEndXPage > -5) && (offsetStartYPage - offsetEndYPage < 5) && (offsetStartYPage - offsetEndYPage > -5)){
			if(!$(this).parent().hasClass("opened"))
				open($(this).parent());
			
			else
				close($(this).parent());
		}
	});
	
	$(window).on("orientationchange", function(){
		$(".menu-item-has-children").each(function(){
			close($(this));
		});
	});
	
	function open(item){
		var openHeight = 0;
		
		item.find(".sub-menu").find("a").each(function(){
			openHeight += $(this).outerHeight();
		});
		
		item
			.addClass("opened")
			.find(".sub-menu")
			.css("height", openHeight + "px");
			
		item.children("a").addClass("active");
		item.children(".tick").addClass("active");
	}
	
	function close(item){
		item
			.removeClass("opened")
			.find(".sub-menu")
			.css("height", "0px");
			
		item.children("a").removeClass("active");
		item.children(".tick").removeClass("active");
	}
	
	$(".menu-item:not(.menu-item-has-children)").children("a").on("touchend", function(){
		if(($(window).innerWidth() + scrollbar) > 991){
			location.href = $(this).attr("href");
			console.log($(this).attr("href"));
		}
	});
}

//Click on .form_choose for chose the reason of a message
function formChooseBtn(){
	$(".form_choose").find(".part").click(function(){
		$(this).parent().find(".part").removeClass("active");
		
		var value = $(this).find("span").text();
		$(this).closest(".form_container").find(".field_form_choose").val(value);
		
		$(this).addClass("active");
	});
	
	$(".form_choose").find(".part:first").click();
}

//Scroll to some element onclick on some element
function scrollToElement(){
	$(".scroll_to_element").click(function(){
		var target = $(this).attr("data-scroll");
		
		$("html, body").stop().animate({
			scrollTop: $(target).offset().top
		}, 800);
	});
}

//General slider on the main page #general_slider
function generalSlider(){
	var slider = $("#general_slider"),
		canClick = true,
		a = $("#general_slider").find(".slide_button");
		
	a.attr("href", "/" + slider.find(".slide.active").attr("data-href"));
	
	slider.find(".slider_nav_right").click(function(){
		if(canClick == false){
			console.log("early to click");
			return;
		}
		
		canClick = false;
		
		if(slider.find(".slide.active").next().length != 0){
			var active = slider.find(".slide.active").next();
			slider.find(".slide").removeClass("active");
			active.addClass("active");
		}
		else{
			slider.find(".slide").removeClass("active");
			slider.find(".slide:first").addClass("active");
		}
		
		a.attr("href", "/" + slider.find(".slide.active").attr("data-href"));
		
		setTimeout(function(){
			canClick = true;
		}, 600);
	});
	
	slider.find(".slider_nav_left").click(function(){
		if(canClick == false){
			console.log("early to click");
			return;
		}
		
		canClick = false;
		
		if(slider.find(".slide.active").prev().length != 0){
			var active = slider.find(".slide.active").prev();
			slider.find(".slide").removeClass("active");
			active.addClass("active");
		}
		else{
			slider.find(".slide").removeClass("active");
			slider.find(".slide:last").addClass("active");
		}
		
		a.attr("href", "/" + slider.find(".slide.active").attr("data-href"));
		
		setTimeout(function(){
			canClick = true;
		}, 600);
	});
	
	slider.find(".slide").on("touchstart", function(event){
		touchStart = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
		offsetStartXPage = touchStart.clientX;
	});
	
	slider.find(".slide").on("touchend", function(event){
		touchFinal = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
		offsetEndXPage = touchFinal.clientX;
		
		if((offsetStartXPage - offsetEndXPage) > 50){
			slider.find(".slider_nav_right").click();
		}
		if((offsetStartXPage - offsetEndXPage) < -50){
			slider.find(".slider_nav_left").click();
		}
	});
}

//Generating of a #categoryAdditionalMenu`s dublicate for a nice layout
function categoryAdditionalMenu(){
	var addMenu = $("#category_additional_menu"),
		content = addMenu.find(".sub-menu").html(),
		addWrap = $("#cat_add_wrapper"),
		tick = addMenu.find(".tick");
		
	addMenu.find(".menu-item-has-children").addClass("add_hover");
	addWrap.addClass("add_hover");
		
	$("#cat_new_additional_menu").html(content);
	
	$(document).on("mouseenter", ".add_hover", function(){
		addWrap.addClass("open");
		tick.addClass("active");
	});
	
	$(document).on("mouseleave", ".add_hover", function(){
		addWrap.removeClass("open");
		tick.removeClass("active");
	});
	
	$(document).on("touchend", ".add_hover", function(){
		if(addWrap.hasClass("open")){
			addWrap.removeClass("open");
			tick.removeClass("active");
		}
		else{
			addWrap.addClass("open");
			tick.addClass("active");
		}
	});
	
	$(window).on("orientationchange", function(){
		addWrap.removeClass("open");
		tick.removeClass("active");
	});
	
	//Device select (#category_additional_select) for max-width: 991px
	var select = $("#category_additional_select");
	addMenu.find("li:not(.menu-item-has-children)").find("a").each(function(){
		var obj = {};
		obj.a = $(this).attr("href");
		obj.text = $(this).text();

		select.append("<option value='" + obj.a + "'>" + obj.text + "</option>");
	});	
	
	select.on("change", function(){
		window.location.href = $(this).val();
	});
	
	var singleBreadCrumbLast = $("#single_breadcrumbs").find("a:last-child");
	
	select.find("option").each(function(){
		if($(this).attr("value") === window.location.href || $(this).attr("value") === singleBreadCrumbLast.attr("href"))
			$(this).attr("selected", "selected");
	});
}

//Smarth thumb size in category page
function smartThumbSize(){
	function size(){
		$("#category_news_wrapper").find(".category_news_thumb").children("img").each(function(){
			if(($(this).outerHeight() < $(this).parent().outerHeight()) && (window.innerWidth > 520)){
				$(this).css({
					"width": "auto",
					"height": "100%"
				});
			}
		});
	}
	
	setTimeout(function(){		
		size();
	}, 100);
	
	setTimeout(function(){		
		size();
	}, 300);
	
	setTimeout(function(){		
		size();
	}, 500);
	
	$(window).on("orientationchange", function(){
		size();
	});
}

//Adding a normal height to all iframes in the single default post pages
function iframeHeight(){
	addHeight();
	
	function addHeight(){
		$("#single_new_content_wrapper").find("iframe").each(function(){
			var width = $(this).width(),
			height = width * 0.56;
			
			$(this).height(height);
		});
	}
	
	$(window).on("resize", function(){
		addHeight();
	});
}

//.finance_content_part switch
function financeContentSwitch(){
	$("#finance_content_choose").find(".part").click(function(){
		if($(this).hasClass("active"))
			return;
		
		$("#finance_content_choose").find(".part").removeClass("active");
		$(this).addClass("active");
		
		$("#finance_content_wrapper").addClass("opacity");
		
		var elData = $(this).attr("data-content");
		
		setTimeout(function(){
			$(".finance_content_part").removeClass("active");
			$(".finance_content_part#" + elData).addClass("active");
			$("#finance_content_wrapper").removeClass("opacity");
		}, 210);
	});
}

//Check the current brand menu item
function currentBrandMenuItem(){
	$("#brand_menu").find("a").removeClass("current");
	
	var link = location.href.replace(location.origin, "");
		link = link.replace(location.hash, "");

	var num = link.indexOf("?");
	
	if(num != -1)
		link = link.slice(0, num);
	
	link = link.replace(/\//g, "");
	
	$("#brand_menu").find("a").each(function(){	
		if($(this).attr("href").search(link) == 1)
			$(this).addClass("current");
	});
}

//#activity_popup_wrapper open/close and changing of it`s content by click on .area
function activityPopups(){
	$(".area").click(function(){
		var popupInfo = $(this).attr("data-popup");
		
		$.ajax({
			url: "/wp-content/themes/winner-ua/areas-of-activity-pop-ups/" + popupInfo + ".php",
			method: "GET",
			beforeSend: function(){
				$("#form_preloader").fadeIn(800);
			},		
			success: function(response){ 
				$("#activity_popup_content").html(response);
				$("#form_preloader").hide();
				$("#activity_popup_wrapper").fadeIn(300);
			},
			error: function(response){ 
				console.log("smth is wrong: " + response);
				alert("Сталася помилка. Перезавантажте сторінку та спробуйте ще раз.");
				location.reload();
			}
		});
	});
	
	$("#activity_popup_close").click(function(){
		$("#activity_popup_wrapper").fadeOut(300);
	});
	
	$("#activity_popup_cover").click(function(){
		$("#activity_popup_wrapper").fadeOut(300);
	});
	
	$("#activity_popup_cover").on("touchend", function(){
		$("#activity_popup_wrapper").fadeOut(300);
	});
}

//.carrer_content_part switch
function careerContentSwitch(){
	$("#career_content_choose").find(".part").click(function(){
		if($(this).hasClass("active"))
			return;
		
		$("#career_content_choose").find(".part").removeClass("active");
		$(this).addClass("active");
		
		$("#career_content_wrapper").addClass("opacity");
		
		var elData = $(this).attr("data-content");
		
		setTimeout(function(){
			$(".career_content_part").removeClass("active");
			$(".career_content_part#" + elData).addClass("active");
			$("#career_content_wrapper").removeClass("opacity");
		}, 210);
	});
}

//#charity_calendar_box
function philantropyCalendar(){
	$("#charity_calendar_owner_field").click(function(){
		$("#charity_calendar_box").fadeIn(200);
	});
	
	$("#charity_calendar_box_close").click(function(){
		$("#charity_calendar_box").fadeOut(200);
	});
}

//#configurator_order_form_step_two_check handling
function confirmCheck(){
	$("#configurator_order_form_step_two_check").click(function(){
		var el = $(this),
			field = el.parent().find(".field_confirm");
		
		if(!el.hasClass("active")){
			el.addClass("active");
			field.val("true");
			
			if(el.attr("data-focus") == "true"){
				fields(field);
				warning(field);
			}
		}
		else{
			el.removeClass("active");
			field.val("");
			
			if(el.attr("data-focus") == "true"){
				fields(field);
				warning(field);
			}
		}
	});
}