//.calendar
function createCalendar(innerYear, innerMonth, innerDay){
	var D1 = new Date(innerYear, innerMonth, innerDay),                          
		D1last = new Date(D1.getFullYear(), D1.getMonth()+1, 0).getDate(),       
		D1Nlast = new Date(D1.getFullYear(), D1.getMonth(), D1last).getDay(),   
		D1Nfirst = new Date(D1.getFullYear(), D1.getMonth(), 1).getDay(),      
		calendar = "<tr>",
		month=["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]; 
	
	var cntLast = 0;
	if(D1Nfirst != 6){
		for(var i = 1; i <= D1Nfirst; i++){
			cntLast++;
			calendar += "<td class='last_month_day'></td>";
		} 
	}
	else{ 
		for(var i = 0; i < 6; i++){
			cntLast++;
			calendar += "<td class='last_month_day'></td>";
		} 
	}
	
	for(var i = 1; i <= D1last; i++){
		if(i != D1.getDate())
			calendar += "<td class='cells'>" + i + "</td>";
		
		else
			calendar += "<td class='cells today'>" + i + "</td>";
		
		if(new Date(D1.getFullYear(), D1.getMonth(), i).getDay() == 6){
			calendar += "</tr>";
		}
	}

	if(D1Nlast != 6){
		for(var i = D1Nlast; i < 6; i++) calendar += "<td class='next_month_day'>";
	}

	$(".calendar tbody").html(calendar);
	$(".calendar_month_en").children("span").html(month[D1.getMonth()]);
	
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
			
			$("#charity_calendar_box_text").text("Select a date");
				
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
			
			$("#charity_calendar_box_text").text("Select a date");
			
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
			
			$("#charity_calendar_box_text").text("Select a date");
		}
		
		else{
			$(".calendar_item").removeClass("active");
			el.addClass("active");
			
			var monthWord = el.closest(".calendar").find(".cmn").text(),
				monthNum;
			
			switch(monthWord){
				case "January":
					monthNum = "01";
					break;
				case "February":
					monthNum = "02";
					break;
				case "March":
					monthNum = "03";
					break;
				case "April":
					monthNum = "04";
					break;
				case "May":
					monthNum = "05";
					break;
				case "June":
					monthNum = "06";
					break;
				case "July":
					monthNum = "07";
					break;
				case "August":
					monthNum = "08";
					break;
				case "September":
					monthNum = "09";
					break;
				case "October":
					monthNum = "10";
					break;
				case "November":
					monthNum = "11";
					break;
				case "December":
					monthNum = "12";
					break;
			}
			
			var zero = (el.text() < 10) ? "0" : "";
			date = zero + el.text() + "." + monthNum + "." +  el.closest(".calendar").find(".calendar_year").text();
			
			var dateForView = monthNum + "/" + zero + el.text() + "/" + el.closest(".calendar").find(".calendar_year").text();
			$("#charity_calendar_box_text").text(dateForView);
		}
		
		el.closest(".calendar_block").find(".field_date_of_appeal").val(date);
	});
}