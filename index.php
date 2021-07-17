<?php
//SESSION
	session_start();
	
//ERRORS DISPLAY
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

//SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

?>
<!DOCTYPE html>
<html lang="iw" dir="rtl">
<head>
<!-- Document Links -->
	<!-- FAVICON --><!-- OUTPUT 01_NOT NUMBERED -->
	<link rel="icon" type="image/png" href="css/favicon.ico">
	
	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="57x57" href="css/favicon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="css/favicon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="css/favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="css/favicon.png" />
	
	<!-- Encoding -->
	<meta charset="utf-8">
	
	<!-- TITLE -->
	<title>עושים פה תרגילים</title>
	
	<!-- DESCRIPTION -->
	<meta name="description" content='עושים פה שאלות.'>
	
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
	<!-- MATHJAX -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>
	<!-- MATH LATEX SYNTAX: https://en.wikibooks.org/wiki/LaTeX/Mathematics -->
	<!-- MATHJAX SYNTAX: https://docs.mathjax.org/en/latest/start.html -->
	
	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- JQUERY FOR MOBILE -->
	<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
	<!-- EMOJI CSS -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<!-- Styling-->
	<link href="index.css" rel="stylesheet">
	<!-- FUNCTIONS -->
	<script src="index.js"></script>
</head>

<body style="max-width:720px;margin:auto;">

<!-- TOP BUTTONS MENU -->
<!-- CONTACT -->
<div class="header" style="width:100%;">
	<div style="float:right;" class="twenty_percent initial_width">
		<a href="http://www.1000ish.com/contact/contact.php">
			<div class="initial_width top_button over_five_hundred">
				צור קשר
			</div>
			<div class="under_five_hundred">צור קשר</div>
		</a>
	</div>
	
	<!-- PREMIUM -->
	<div style="float:right;" class="twenty_percent initial_width">
		<a href="https://course005.explainit.online">
			<div class="initial_width top_button over_five_hundred">
				פיזיקה י"א
			</div>
			<div class="under_five_hundred">פיזיקה י"א</div>
		</a>
	</div>
	
	<!-- PREMIUM -->
	<div style="float:right;" class="twenty_percent initial_width">
		<a href="https://course005.explainit.online">
			<div class="initial_width top_button over_five_hundred">
				פיזיקה י"ב
			</div>
			<div class="under_five_hundred">פיזיקה י"ב</div>
		</a>
	</div>
	
	<!-- PREMIUM -->
	<div style="float:left;" class="twenty_percent initial_width">
		<a href="https://explainit.online/stuff.php">
			<div class="initial_width top_button over_five_hundred">
				מתמטיקה
			</div>
			<div class="under_five_hundred">מתמטיקה</div>
		</a>
	</div>
	
	<!-- CREDITS -->
	<div style="float:right;" class="twenty_percent initial_width">
		<a href="https://giphy.com/">
			<div class="initial_width top_button over_five_hundred">
				גיפים
			</div>
			<div class="under_five_hundred">גיפים</div>
		</a>
	</div>
</div><!-- TOP BUTTONS MENU -->

<!-- PEOPLE AND SUBJECTS -->
<div class="header" style="overflow:hidden;">
	
	<!-- WHAT DO YOU WANT TO DO DIV -->
	<div id="div_header_pic" class="header">
		<img src="img/header_01.jpg" style="width:100%;">
	</div>
	
	<!-- SUBJECTS BUTTONS -->
	<div id="div_subjects" class="header">
		<!-- Slideshow container -->
		<div id="swiper" class="slideshow-container">
		
			<!-- Full-width images with number and  -->
			<div id="physics_pic_div" class="mySlides fade physics">
				<img src="img/10_01.jpg" style="width:100%">
			</div>
			
			<!-- The dots/circles -->
			<div id="dots_div" style="text-align:center;margin:auto;display:none;">
				<!-- Next and previous buttons -->
				<a id="prev" class="prev" onclick="plusSlides(-1)" style="display:none;">&#10094;</a>
				<a id="next" class="next" onclick="plusSlides(1)" style="display:none;">&#10095;</a>
				
				<span id="physics_dot" class="dot" onclick="currentSlide(1)"></span> 
				<span id="math_dot" class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
				<span class="dot" onclick="currentSlide(4)"></span> 
				<span class="dot" onclick="currentSlide(5)"></span> 
				<span class="dot" onclick="currentSlide(6)"></span> 
				<span class="dot" onclick="currentSlide(7)"></span> 
				<span class="dot" onclick="currentSlide(8)"></span> 
				<span class="dot" onclick="currentSlide(9)"></span> 
				<span class="dot" onclick="currentSlide(10)"></span> 
				<span class="dot" onclick="currentSlide(11)"></span> 
				<span class="dot" onclick="currentSlide(12)"></span> 
				<span class="dot" onclick="currentSlide(13)"></span> 
				<span class="dot" onclick="currentSlide(14)"></span> 
			</div>
		</div>
		
		<!-- PHYSICS -->
		<div id="physics_buttons" class="initial_width button_02_ subjects" style="width:100%;">
			<div style="display:none;">
				<h1>בקרוב</h1>
				<hr>
			</div>
			
			<div>
				<!-- PHYSICS 01 -->
				<div class="initial_width button_02_">
					<div>
						<h1>מכניקה</h1>
						<hr>
					</div>
					
					<div onclick="show_targil('physics','physics_900_000')" class="initial_width to_complete_02">
						קינמטיקה
					</div>
										
					<div onclick="show_targil('physics','physics_900_001')" class="initial_width to_complete_02">
						דינמיקה
					</div>
					
					<div onclick="show_targil('physics','physics_900_002')" class="initial_width to_complete_02">
						תנע - התנגשות חד מימדית
					</div>
					
					<div onclick="show_targil('physics','physics_900_003')" class="initial_width to_complete_02">
						תנע - התנגשות דו מימדית
					</div>
					
					<div onclick="show_targil('physics','physics_900_004')" class="initial_width to_complete_02">
						אנרגיה
					</div>
					
					<div onclick="show_targil('physics','physics_900_005')" class="initial_width to_complete_02">
						תנועה מעגלית אפקית
					</div>
					
					<div onclick="show_targil('physics','physics_900_006')" class="initial_width to_complete_02">
						תנועה מעגלית אנכית
					</div>
					
					<div onclick="show_targil('physics','physics_900_007')" class="initial_width to_complete_02">
						כבידה
					</div>
					
					<div onclick="show_targil('physics','physics_900_008')" class="initial_width to_complete_02">
						תנועה הרמונית
					</div>
				</div>
				
				<!-- PHYSICS 02 -->
				<div class="initial_width button_02_">
					<div>
						<h1>חשמל</h1>
						<hr>
					</div>
					
					<div onclick="show_targil('physics','physics_901_001')" class="initial_width to_complete_03">
						כח חשמלי
					</div>
					
					<div onclick="show_targil('physics','physics_901_001')" class="initial_width to_complete_03">
						שדה חשמלי
					</div>
					
					<div onclick="show_targil('physics','physics_901_001')" class="initial_width to_complete_03">
						פוטנציאל חשמלי
					</div>
					
					<div onclick="show_targil('physics','physics_901_001')" class="initial_width to_complete_03">
						אנרגיה חשמלית
					</div>
					
					<div onclick="show_targil('physics','physics_901_005')" class="initial_width to_complete_03">
						קיבול
					</div>
					
					<div onclick="show_targil('physics','physics_901_006')" class="initial_width to_complete_03">
						מעגלי זרם
					</div>
					
					<div onclick="show_targil('physics','physics_901_006')" class="initial_width to_complete_03">
						כא"מ ומתח הדקים
					</div>
					
					<div onclick="show_targil('physics','physics_901_008')" class="initial_width to_complete_03">
						חוקי קירכהוף
					</div>
					
					<div onclick="show_targil('physics','physics_901_009')" class="initial_width to_complete_03">
						קבלים במעגלי זרם
					</div>
					
					<div onclick="show_targil('physics','physics_901_010')" class="initial_width to_complete_03">
						טעינת ופריקת קבל
					</div>
					
					<div>
						<h1>מגנטיות</h1>
						<hr>
					</div>
					
					<div onclick="show_targil('physics','physics_902_001')" class="initial_width to_complete_03">
						כח על מטען
					</div>
					
					<div onclick="show_targil('physics','physics_902_002')" class="initial_width to_complete_03">
						כח על זרם
					</div>
					
					<div onclick="show_targil('physics','physics_902_003')" class="initial_width to_complete_03">
						מקורות שדה מגנטי
					</div>
					
					<div onclick="show_targil('physics','physics_902_004')" class="initial_width to_complete_03">
						כא"מ מושרה
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<!-- 1000ish LOADING -->
	<div id="div_name_loading" style="width:100%;display:inline-block;margin:16px 0px 0px 0px;">	
		<h1 style="margin-bottom:0px;display:inline;">בטעינה</h1>
		<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
	</div>
	
	<!-- 1000ish LOGO -->
	<div id="div_name_logo" style="width:100%;display:inline-block;margin:16px 0px 8px 0px;display:none;">	
		<h1 id="div_name" style="margin-bottom:0px;display:inline;">1000ish</h1>
		<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
		<h5 style="margin-bottom:0px;display:inline;">אחרי שאתם בוחרים שאלה תחכו כמה שניות, לתוסף של גוגל לוקח זמן</h5>
		
			
		<div class="videoWrapper">
			<iframe class="hasPDF" name="iframe_01" src="https://docs.google.com/gview?url=http://www.1000ish.com/select.pdf&embedded=true"></iframe>
		</div>
	</div>
	
</div>	

<!-- DIV_FORMULA PAGE -->
<div class="header" id="div_pages"></div>

<!-- DIV_RESULT -->
<div class="header" id="div_result"></div>

<!-- MATH OUTSIDE DIV -->
<div id="outside_div_math" class="header outside_div outside_div_math">
</div>

<!-- PHYSICS OUTSIDE DIV -->
<div id="outside_div_physics" class="header outside_div outside_div_physics">	
</div>

<!-- PROGRAMMING OUTSIDE DIV -->
<div class="header outside_div outside_div_programming">	
</div>

<script>
<!-- W3SCHOOLS PIC GALLERY -->
	var slideIndex = 1;
	
	// Next/previous controls
	function plusSlides(n) 
	{
		showSlides(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide(n) 
	{
		showSlides(slideIndex = n);
		
		$("html,body").animate({ scrollTop: $('#div_header_pic').offset().top }, "slow");
		
		if(n==2)
		{
			$("#div_subjects_button_02").click();
		}
		
		if(n==1)
		{
			$("#div_subjects_button").click();
		}
	}
	
	function showSlides(n) 
	{
		//VARS
		var i;
		
		//GETTING mySlides CLASS ELEMENTS
		var slides = document.getElementsByClassName("mySlides");
		
		//GETTING subjects CLASS ELEMENTS
		var subjects = document.getElementsByClassName("subjects");
		
		//GETTING dot CLASS ELEMENTS
		var dots = document.getElementsByClassName("dot");
	
		if (n > slides.length) 
		{
			slideIndex = 1;
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length;
		}
		
		//HIDING ALL SLIDES
		for (i = 0; i < slides.length; i++) 
		{
			slides[i].style.display = "none"; 
			
			//SUBJECTS TO CHANGE ALSO
			//subjects[i].style.display = "none";

		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		
		//CHECKING FOR MATH & PHYSICS
		
		var str = slides[slideIndex-1].className;
		var check_class_name_for_math = str.includes("math");
		var check_class_name_for_physics = str.includes("physics");
		var check_class_name_for_programming = str.includes("programming");
		
		//MATH
		if(check_class_name_for_math)
		{
			show_hide('math',0);
		}
		
		//PHYSICS 
		if(check_class_name_for_physics)
		{
			show_hide('physics',0);
		}
		
		//PROGRAMMING 
		if(check_class_name_for_programming)
		{
			show_hide('programming',0);
		}
		
		//SUBJECTS TO CHANGE ALSO
		//subjects[slideIndex-1].style.display = "block"; 
		
		dots[slideIndex-1].className += " active";
		
	}	
	
<!-- INSIDE/OUTSIDE DIVS -->
function show_hide(m,n)
{
	if (m == 'math')
	{
		//SHOW ALL QUESTIONS
		if (n == 0)
		{
			$(".inside_div").toggle(false);
			
			$(".outside_div_physics").toggle(false);
			$(".outside_div_programming").toggle(false);
			$(".outside_div_math").toggle(true);
			
		}
		
		//n ISN'T 0
		else
		{
			$(".inside_div").toggle(false);
			
			$(".outside_div_physics").toggle(false);
			$(".outside_div_programming").toggle(false);
			$(".outside_div_math").toggle(true);
			
		}
	}
	
	if (m == 'physics')
	{
		//SHOW ALL QUESTIONS
		if (n == 0)
		{
			$(".inside_div").toggle(false);
			
			$(".outside_div_physics").toggle(true);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(false);
			
		}
		//n ISN'T 0
		else
		{
			$(".inside_div").toggle(false);
			
			$(".outside_div_physics").toggle(true);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(false);
		}
	}
	
	if (m == 'programming')
	{
		//SHOW ALL QUESTIONS
		if (n == 0)
		{
			$(".inside_div").toggle(false);
			
			$(".outside_div_physics").toggle(false);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(true);
			
		}
		//n ISN'T 0
		else
		{
			$(".inside_div").toggle(false);
			
			$(".outside_div_physics").toggle(false);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(true);
			
		}
	}
}

//CLICK ON SUBJECTS BUTTON
people_and_subjects_1st_load_physics();
$("#div_name_logo").toggle(true);
//$("#dots_div").toggle(true);
$("#div_header_pic").toggle(true);
$("#div_name_loading").toggle(false);
</script>

<script>
$(function()
{
	// Bind the swipeHandler callback function to the swipe event on div.box
	$("#swiper").on( "swiperight", swiperightHandler );
	
	// Callback function references the event target and adds the 'swipe' class to it
	function swiperightHandler( event )
	{
		//$(event.target).addClass( "swipe" );
		$("#next").click();
	}
});

$(function()
{
	// Bind the swipeHandler callback function to the swipe event on div.box
	$("#swiper").on( "swipeleft", swipeleftHandler );
	
	// Callback function references the event target and adds the 'swipe' class to it
	function swipeleftHandler( event )
	{
		//$(event.target).addClass( "swipe" );
		$("#prev").click();
	}
});
</script>
</body>
</html>