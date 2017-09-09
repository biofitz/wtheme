//.calendar
function createCalendar(innerYear, innerMonth, innerDay){
	var D1 = new Date(innerYear, innerMonth, innerDay),
		D1last = new Date(D1.getFullYear(), D1.getMonth()+1, 0).getDate(), 
		D1Nlast = new Date(D1.getFullYear(), D1.getMonth(), D1last).getDay(), 
		D1Nfirst = new Date(D1.getFullYear(), D1.getMonth(), 1).getDay(), 
		calendar = "<tr>",
		month=["січень", "лютий", "березень", "квітень", "травень", "червень", "липень", "серпень", "вересень", "жовтень", "листопад", "грудень"]; 
		//monthEN=["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]; 
	
	var cntLast = 0;
	if(D1Nfirst != 0){
		for(var  i = 1; i < D1Nfirst; i++){
			cntLast++;
			calendar += "<td class='last_month_day'></td>";
		} 
	}
	else{ 
		for(var  i = 0; i < 6; i++){
			cntLast++;
			calendar += "<td class='last_month_day'></td>";
		} 
	}
	
	for(var  i = 1; i <= D1last; i++){
		if(i != D1.getDate())
			calendar += "<td class='cells'>" + i + "</td>";
		
		else
			calendar += "<td class='cells today'>" + i + "</td>";
		
		if(new Date(D1.getFullYear(), D1.getMonth(), i).getDay() == 0)  
			calendar += "<tr>";
	}

	if(D1Nlast != 0){
		for(var  i = D1Nlast; i < 7; i++) calendar += "<td class='next_month_day'>";
	}

	$(".calendar tbody").html(calendar);
	$(".calendar_month_ua").children("span").html(month[D1.getMonth()]);
	//$(".calendar_month_en").children("span").html(monthEN[D1.getMonth()]);
	
	$(".calendar_year").html(D1.getFullYear());

	if(innerMonth == new Date().getMonth())
		$(".today").addClass("show_today");
	
	var lastMonthLastDay = new Date(D1.getFullYear(), D1.getMonth(), 0).getDate();
	
	var lastMonthFirstDay = lastMonthLastDay - cntLast + 1;
	
	for(var i = 0; i < document.getElementsByClassName("last_month_day").length; i++){
		document.getElementsByClassName("last_month_day")[i].innerHTML = lastMonthFirstDay++;
	}
	
	for(var i = 0; i < document.getElementsByClassName("next_month_day").length; i++){
		document.getElementsByClassName("next_month_day")[i].innerHTML = i + 1;
	}
	
	var changed = false;
	
	$(".prev_month").click(function(e){
		e.preventDefault();
		
		if(changed == false){
			if(innerMonth == new Date().getMonth() + 1)
				createCalendar(innerYear, new Date().getMonth(), new Date().getDate());
			
			else
				createCalendar(innerYear, innerMonth-1, 1);
			
			$(this).closest(".calendar_block").find(".field_date_of_appeal").val("не вказано");
				
			changed = true;
		}
		
	});
	
	$(".next_month").click(function(e){
		e.preventDefault();
		
		if(changed == false){
			if(innerMonth == new Date().getMonth() - 1)
				createCalendar(innerYear, new Date().getMonth(), new Date().getDate());
				
			else
				createCalendar(innerYear, innerMonth+1, 1);
			
			$(this).closest(".calendar_block").find(".field_date_of_appeal").val("не вказано");
			
			changed = true;
		}
	});
	
	$(".calendar").find("tbody").find("td").addClass("calendar_item").append("<div class='selected_point'></div>");
	
	$(".calendar").find(".calendar_item").on("click", function(){
		if($(this).hasClass("last_month_day") || $(this).hasClass("next_month_day"))
			return;
		
		var el = $(this),
			date = "не вказано";

		if(el.hasClass("active")){
			el.removeClass("active");
			date = "не вказано";
		}
		
		else{
			$(".calendar_item").removeClass("active");
			el.addClass("active");
			date = "число: " + el.text() + "; місяць: " + el.closest(".calendar").find(".cmn").text() + "; рік: " + el.closest(".calendar").find(".calendar_year").text();
		}
		
		el.closest(".calendar_block").find(".field_date_of_appeal").val(date);
	});
}