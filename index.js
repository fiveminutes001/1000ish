function show_targil_02(m,a)
{
	//WINDOW LOCATION
	//$(document.body).animate({
	//		'scrollTop': $('#physics_buttons').offset().top
	//	}, 600);
	//$("html,body").animate({ scrollTop: $('#physics_buttons').offset().top }, "slow");
	//GETTING DATA
	$.post("5224/targilim_01.php",{b_1: a}, function(result,b_2,m)
	{
    	//GETTING SUBJECT NAME
		var str = m["responseText"];
		
		//LOGGING
		//console.log(str);
		
		var subject = str.substr(0, 1);
		result = str.substr(1, str.length);
		
		//LOGGING
		//console.log(result);
		
		if(subject == 'M')
		{
			subject = "math";
		}
		else
		{
			subject = "physics";
		}
		
		//LOGGING
		//console.log(subject);
		
		//PUTTING DATA IN DIV
		$("#div_result").html(result);
			
		//MATHJAX TO RELOAD
		//MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, m]);
	});
}

function show_targil(m,a)
{
	//WINDOW LOCATION
	//$(document.body).animate({
	//		'scrollTop': $('#physics_buttons').offset().top
	//	}, 600);
	$("html,body").animate({ scrollTop: $('#div_name_logo').offset().top }, "slow");
	//GETTING DATA
	$.post("5224/targilim_01.php",{b_1: a}, function(result,b_2,m)
	{
    	//GETTING SUBJECT NAME
		var str = m["responseText"];
		
		//LOGGING
		//console.log(str);
		
		var subject = str.substr(0, 1);
		result = str.substr(1, str.length);
		
		//LOGGING
		//console.log(result);
		
		if(subject == 'M')
		{
			subject = "math";
		}
		else
		{
			subject = "physics";
		}
		
		//LOGGING
		//console.log(subject);
		
		//PUTTING DATA IN DIV
		var m = "outside_div_" + subject;
		$("#"+m).html(result);
		
		//SHOWING DIV
		$("#"+m).toggle(true);
		
		//MATHJAX TO RELOAD
		//MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, m]);
	});
}

function show_(a)
{
	$.post("5224/index.php",{b_1: a}, function(result){
    result = result + "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
	
	$("#div_result").html(result);
	
	//MATHJAX TO RELOAD
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
	});
	
	$("#div_pages").html("");
	
}

function people_and_subjects_1st_load_physics()
{
	showSlides(1);
	
	//HIDE
	$("#div_people").toggle(false);
	$("#div_subjects").toggle(true);
	
	//EMPTY DIV RESULT
	//var crowns = "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
	var crowns = "";
	$("#div_result").html(crowns);
	
	//HEADERS OPACITY
	$("#div_people_button").css("background-color","white");
	$("#div_subjects_button").css("background-color","orange");
	$("#div_subjects_button_02").css("background-color","white");
	
	//HIDE PEOPLE
	$(".inside_div").toggle(false);
	$(".outside_div").toggle(true);
	
	//SHOW ONLY MATH DIVS
	show_hide('physics',0);
	
	//SHOW BUTTONS
	$("#physics_buttons").css('display','block');
	$("#math_buttons").css('display','none');
	
	//HIDING ALL SLIDES
		//GETTING mySlides CLASS ELEMENTS
		var slides = document.getElementsByClassName("mySlides");
		
		//GETTING dot CLASS ELEMENTS
		var dots = document.getElementsByClassName("dot");
		
		for (i = 0; i < slides.length; i++) 
		{
			slides[i].style.display = "none"; 
		}
		
		$("#physics_pic_div").css("display","block");
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		var physics_dot = document.getElementById("physics_dot");
		
		physics_dot.className += " active";
}

function people_and_subjects_1st_load_math()
{
	showSlides(1);
	
	//HIDE
	$("#div_people").toggle(false);
	$("#div_subjects").toggle(true);
	
	//EMPTY DIV RESULT
	//var crowns = "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
	var crowns = "";
	$("#div_result").html(crowns);
	
	//HEADERS OPACITY
	$("#div_people_button").css("background-color","white");
	$("#div_subjects_button").css("background-color","white");
	$("#div_subjects_button_02").css("background-color","orange");
	
	//HIDE PEOPLE
	$(".inside_div").toggle(false);
	$(".outside_div").toggle(true);
	
	//SHOW ONLY MATH DIVS
	show_hide('math',0);
	
	//SHOW BUTTONS
	$("#physics_buttons").css('display','none');
	$("#math_buttons").css('display','block');
	
	//HIDING ALL SLIDES
		//GETTING mySlides CLASS ELEMENTS
		var slides = document.getElementsByClassName("mySlides");
		
		//GETTING dot CLASS ELEMENTS
		var dots = document.getElementsByClassName("dot");
				
		for (i = 0; i < slides.length; i++) 
		{
			slides[i].style.display = "none"; 
		}
		
		$("#math_pic_div").css("display","block");
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		var math_dot = document.getElementById("math_dot");
		
		math_dot.className += " active";
}

function people_and_subjects(n)
{
	//SHOW PEOPLE
	if(n==1)
	{
		$("#div_people").toggle(true);
		$("#div_subjects").toggle(false);
		
		//HEADERS OPACITY
		$("#div_people_button").css("background-color","orange");
		$("#div_subjects_button").css("background-color","white");
		$("#div_subjects_button_02").css("background-color","white");
		
		//SHOW PEOPLE
		$(".inside_div").toggle(true);
		$(".outside_div").toggle(false);
		
		//800
		for(n=1;n<10;n++)
		{
			var a = "math_800_00" + n;
			$("." + a ).toggle(false);
		}
		
		//804
		for(n=1;n<10;n++)
		{
			var a = "math_804_00" + n;
			$("." + a ).toggle(false);
		}
		
		//806
		for(n=1;n<10;n++)
		{
			var a = "math_806_00" + n;
			$("." + a ).toggle(false);
		}
		
		//900
		for(n=1;n<10;n++)
		{
			var a = "physics_900_00" + n;
			$("." + a ).toggle(false);
		}
		
		//901
		for(n=1;n<10;n++)
		{
			var a = "physics_901_00" + n;
			$("." + a ).toggle(false);
		}
		
		//902
		for(n=1;n<10;n++)
		{
			var a = "physics_902_00" + n;
			$("." + a ).toggle(false);
		}
	}
	
	//SHOW PHYSICS
	else if(n==2)
	{
		showSlides(1);
		
		//HIDE
		$("#div_people").toggle(false);
		$("#div_subjects").toggle(true);
		
		//EMPTY DIV RESULT
		//var crowns = "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
		var crowns = "";
		$("#div_result").html(crowns);
		
		//HEADERS OPACITY
		$("#div_people_button").css("background-color","white");
		$("#div_subjects_button").css("background-color","orange");
		$("#div_subjects_button_02").css("background-color","white");
		
		//HIDE PEOPLE
		$(".inside_div").toggle(false);
		$(".outside_div").toggle(true);
		
		//SHOW ONLY MATH DIVS
		show_hide('physics',0);
		
	}
	//SHOW MATH
	else
	{
		showSlides(1);
		
		//HIDE
		$("#div_people").toggle(false);
		$("#div_subjects").toggle(true);
		
		//EMPTY DIV RESULT
		//var crowns = "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
		var crowns = "";
		$("#div_result").html(crowns);
		
		//HEADERS OPACITY
		$("#div_people_button").css("background-color","white");
		$("#div_subjects_button").css("background-color","white");
		$("#div_subjects_button_02").css("background-color","orange");
		
		//HIDE PEOPLE
		$(".inside_div").toggle(false);
		$(".outside_div").toggle(true);
		
		//SHOW ONLY MATH DIVS
		show_hide('math',0);
		
	}
}
