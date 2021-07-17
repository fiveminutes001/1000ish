<?php
//SESSION
	session_start();
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
	<title>אלף איש</title>
	
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
	<!-- <script src="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script> -->
  	
	<!-- Links -->
		<!-- EMOJI CSS -->
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<!-- Styling-->
<style>
	#div_subjects
	{
		display:none;
	}
	
	#div_people_button
	{
		background-color:orange;
	}
	
	div.gallery {
		margin: 5px auto;
		border: 1px solid #ccc;
		/*float: left;*/
		width: 75%;
		overflow:hidden;
	}
	
	div.gallery:hover {
		border: 1px solid #777;
	}
	
	div.gallery img {
		width: 100%;
		height: auto;
	}
	
	div.desc {
		padding: 15px;
		text-align: center;
	}
	
	.container
	{
		width:100%;
		text-align:center;
		float:left;
	}
	
	.header
	{
		width:100%;
		text-align:center;
	}
	
	*
	{
		font-family: 'Bellefair', serif;
	}
	
	/* LIST *//* https://designshack.net/articles/css/5-simple-and-practical-css-list-styles-you-can-copy-and-paste/ */
	
	* {
		margin: 0;
		padding: 0;
	}
	
	body 
	{
		/*background: #333;*/
		padding:12px;
	}
		
	div {
	/*width: 900px;*/
	width: 100%;
	margin: 0 auto;
	overflow: auto;
	}
	
	ul {
	list-style-type: none;
	}
	
	li img {
	float: left;
	margin: 10px;
	border: 5px solid #fff;
	
	-webkit-transition: box-shadow 0.5s ease;
	-moz-transition: box-shadow 0.5s ease;
	-o-transition: box-shadow 0.5s ease;
	-ms-transition: box-shadow 0.5s ease;
	transition: box-shadow 0.5s ease;
	}
	
	li img:hover {
	-webkit-box-shadow: 0px 0px 7px rgba(255,255,255,0.9);
	box-shadow: 0px 0px 7px rgba(255,255,255,0.9);
	}
	
	/* TABLE */
	table
		{
			border-collapse:collapse;
		}
	
	table td, table th
		{
			border:1px solid black;
			padding:2px;
		}
		
	/* IMG */
	img 
		{
			border-radius:20px 20px 20px 20px;
		}
		
	/* W3SCHOOLS PIC GALLERY */
	
	* {box-sizing:border-box}

	/* Slideshow container */
	.slideshow-container 
	{
		max-width: 1000px;
		position: relative;
		margin: auto;
	}
	
		
	/* Hide the images by default */
	.mySlides,
	.mySlides_00,
	.mySlides_01,
	.mySlides_02,
	.mySlides_03,
	.mySlides_04,
	.mySlides_05,
	.mySlides_06,
	.mySlides_07,
	.mySlides_08,
	.mySlides_09,
	.mySlides_10,
	.mySlides_11,
	.mySlides_12,
	.mySlides_13,
	.mySlides_14,
	.mySlides_15
	{
		display: none;
	}
	
	/* Next and previous buttons */
	.prev, .next 
	{
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		margin-top: -22px;
		padding: 16px;
		color: white;
		font-weight: bold;
		font-size: 18px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		background-color:black;
	}
	
	/* Position the "next button" to the right */
	.next 
	{
		left: 0;
		border-radius: 3px 0 0 3px;
	}
	
	/* On hover, add a black background color with a little bit see-through */
	.prev:hover, .next:hover 
	{
		background-color: orange;
	}
	
	/*  */
	.text 
	{
		color: #f2f2f2;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
	}
	
	/* Number text (1/3 etc) */
	.numbertext 
	{
		/*color: #f2f2f2;*/
		color:#f1f1f1;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
	}
	
	/* The dots/bullets/indicators */
	.dot,
	.dot_00,
	.dot_01,
	.dot_02,
	.dot_03,
	.dot_04,
	.dot_05,
	.dot_06,
	.dot_07,
	.dot_08,
	.dot_09,
	.dot_10,
	.dot_11,
	.dot_12,
	.dot_13,
	.dot_14,
	.dot_15
	{
		cursor: pointer;
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
	}
		
	.active, .dot:hover ,.dot_01:hover,.dot_02:hover
	{
		background-color: #717171;
	}
	
	/* Fading animation */
	.fade 
	{
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1.5s;
		animation-name: fade;
		animation-duration: 1.5s;
	}
	
	@-webkit-keyframes fade 
	{
		from {opacity: 1} /* was opacity:0.4 */ 
		to {opacity: 1}
	}
	
	@keyframes fade 
	{
		from {opacity: 1} /* was opacity:0.4 */ 
		to {opacity: 1}
	}
	
	.prev
	{
		right:0;
	}
	
	
	/* IMG ROTATION - ADD ROTATE_01 CLASS TO IMG *//* https://codepen.io/CodeXYZ/pen/xbdxyO */
	
	.rotate_01
	{
		-webkit-transition: -webkit-transform .8s ease-in-out;
		-ms-transition: -ms-transform .8s ease-in-out;
		transition: transform .8s ease-in-out; 
	}
	
	/*	.rotate_01:hover
		{
			transform:rotate(90deg);
			-ms-transform:rotate(90deg);
			-webkit-transform:rotate(90deg);
		}
	*/
	
	.rotate_01:hover
	{
		-webkit-transform: translate(-13%,134%) rotate(90deg); /* Safari */
		-moz-transform: translate(-13%,134%) rotate(90deg); /* Firefox 3.6 Firefox 4 */
		-ms-transform: translate(-13%,134%) rotate(90deg); /* IE9 */
		-o-transform: translate(-13%,134%) rotate(90deg); /* Opera */
		transform: translate(-13%,134%) rotate(90deg); /* W3C */  
		-webkit-transform-origin: top right;
		-moz-transform-origin: top right;
		-ms-transform-origin: top right;
		-o-transform-origin: top right;
		transform-origin: top right;
	}
	
	:focus
	{
		outline-width:0px;
	}
	
	.ui-loader
	{
		display:none;
	}
	
	.initial_width
	{
		width:initial;
	}
	
	.triangle
	{
		width: 0;
		height: 0;
		border-left: 0px solid transparent;
		border-right: 120px solid transparent;
		border-bottom: 60px solid #555;
	}
	
	.top_button
	{
		background-color:#a16dc9;
		margin:2px 2px 1px 0px;
		padding:6px 6px;
		border:1px #dcb677 solid;
		float:right;
		color:#f9f1f1;
	}
	
	.button_
	{
		width:20%;
		//max-width:12.5%;
		//overflow:hidden;
		float:right;
	}
	
	.button_02_
	{
		width:50%;
		//max-width:12.5%;
		//overflow:hidden;
		float:right;
	}
	
	.to_complete
	{
		width:96%;
		overflow:hidden;
		margin:2px;
		padding:0px 2px;
		border:1px black solid;
		float:right;
		background-color:green;
		color:white;
	}
	
	.to_complete_02
	{
		width:98%;
		//overflow:hidden;
		margin:2px;
		padding:0px 2px;
		border:0.5px black solid;
		float:right;
		background-color:green;
		color:white;
		overflow:hidden;
		cursor:pointer;
	}
	
	.math_804
	{
		width:98%;
		//overflow:hidden;
		margin:2px;
		padding:0px 2px;
		border:0.5px black solid;
		float:right;
		background-color:darkmagenta;
		color:white;
		overflow:hidden;
		cursor:pointer;
	}
	
	.to_complete_03
	{
		width:98%;
		//overflow:hidden;
		margin:2px;
		padding:0px 2px;
		border:0.5px black solid;
		float:right;
		background-color:#806300;
		color:white;
		overflow:hidden;
		cursor:pointer;
	}
	
	.to_complete_04
	{
		width:98%;
		//overflow:hidden;
		margin:2px;
		padding:0px 2px;
		border:0.5px black solid;
		float:right;
		clear:both;
		background-color:#806300;
		color:white;
		overflow:hidden;
		cursor:pointer;
	}
	
	.to_complete:hover
	{
		cursor:pointer;
	}
	
	.under_five_hundred
	{
		display:none;
	}
	
	.twenty_percent>a
	{
		text-decoration:none;
	}
	
	.formula_buttons
	{
		color:white;
		border:1px black solid;
		background-color:#3477b9;
		padding:6px 0px;
	}
	
	.formula_buttons_div
	{
		padding:0px 2px;
		width:20%;
		overflow:none;
		float:right;
		margin-top:2px;
	}
	
	.formula_buttons_div>a
	{
		text-decoration:none;
	}
	
	.math_800_001,
	.math_800_002,
	.math_800_003,
	.math_800_004,
	.math_800_005,
	.math_804_001,
	.math_804_002,
	.math_804_003,
	.math_804_004,
	.math_806_001,
	.math_806_002,
	.math_806_003,
	.math_806_004,
	.physics_900_001,
	.physics_900_002,
	.physics_900_003,
	.physics_900_004,
	.physics_900_005
	{
		display:none;
	}
	
	#div_people_button,
	#div_subjects_button,
	.math_800_001:hover,
	.math_800_002:hover,
	.math_800_003:hover,
	.math_800_004:hover,
	.math_800_005:hover,
	.math_804_001:hover,
	.math_804_002:hover,
	.math_804_003:hover,
	.math_804_004:hover,
	.math_806_001:hover,
	.math_806_002:hover,
	.math_806_003:hover,
	.math_806_004:hover,
	.physics_900_001,
	.physics_900_002,
	.physics_900_003,
	.physics_900_004,
	.physics_900_005
	{
		cursor:pointer;
	}
	
	@media only screen and (max-width: 500px)
	{
		
		.button_
		{
			width:25%;
			overflow:hidden;
		}
			
		.twenty_percent
		{
			width:20%;
			overflow:hidden;
			padding:0px 2px;
		}
		
		.over_five_hundred
		{
			display:none;
		}
		
		.under_five_hundred
		{
			display:block;
			padding:6px 0px;
			color:white;
			border:1px black solid;
			background-color:#a16dc9;
		}
	}	
					
</style>
<script>
function show_targil(a)
{
	$.post("Daniel_5224/targilim.php",{b_1: a}, function(result){
    result = result + "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
	
	show_hide('physics','1');
	$("#outside_div_physics").html(result);
	
	//MATHJAX TO RELOAD
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
	});
	
	if(a == "IDO" || a=="ITAY" || a=="SHACHAR")
	{
		var four_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119742/4Yachal2.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var desmos = "<div class='formula_buttons_div'><a target='blank' href='https://www.desmos.com/calculator'><div class='formula_buttons'>דסמוס</div></a></div>";
		var geometry_sentences = "<div class='formula_buttons_div'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
		var physics_equations = "<div class='formula_buttons_div'><a target='blank' href='https://files.geva.co.il/articlefile_1183972313359.pdf'><div class='formula_buttons'>פיזיקה</div></a></div>";
		var common_mistakes = "<div class='formula_buttons_div'><a target='blank' href='credits/common_mistakes.php'><div class='formula_buttons'>טעויות</div></a></div>";
		var all_together = four_units_equations + desmos + geometry_sentences + common_mistakes;
		
		if(a == "IDO")
		{
			var all_together = physics_equations + four_units_equations + desmos + geometry_sentences + common_mistakes;
		}
		
		$("#div_pages").html(all_together);
	}
	else if(a == "YFTACH" || a == "MAAYAN" || a == "DAVID" || a == "MAYA")
	{
		var five_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119745/5m.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var desmos = "<div class='formula_buttons_div'><a target='blank' href='https://www.desmos.com/calculator'><div class='formula_buttons'>דסמוס</div></a></div>";
		var geometry_sentences = "<div class='formula_buttons_div'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
		var common_mistakes = "<div class='formula_buttons_div'><a target='blank' href='credits/common_mistakes.php'><div class='formula_buttons'>טעויות</div></a></div>";
		var all_together = five_units_equations + desmos + geometry_sentences + common_mistakes;
		$("#div_pages").html(all_together);
	}
	else if(a == "NETA" || a == "ODIL" || a == "NAAMA" || a == "DANA" || a == "NOA DANKER" || a == "EVYATAR" || a == "ITAMAR_TA" || a == "DANIEL" || a == "NATALY" || a == "OMRI" || a == "ODED" || a == "YONATAN" || a == "IDOGEN" || a == "BEN")
	{
		var physics_equations = "<div class='formula_buttons_div'><a target='blank' href='https://files.geva.co.il/articlefile_1183972313359.pdf'><div class='formula_buttons'>פיזיקה</div></a></div>";
		var four_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119742/4Yachal2.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var five_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119745/5m.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var desmos = "<div class='formula_buttons_div'><a target='blank' href='https://www.desmos.com/calculator'><div class='formula_buttons'>דסמוס</div></a></div>";
		var geometry_sentences = "<div class='formula_buttons_div'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
		var common_mistakes = "<div class='formula_buttons_div'><a target='blank' href='credits/common_mistakes.php'><div class='formula_buttons'>טעויות</div></a></div>";
		var all_together = physics_equations + five_units_equations + desmos + geometry_sentences + common_mistakes;
		
		if (a == "OMRI")
		{
			var all_together = physics_equations + four_units_equations + desmos + geometry_sentences + common_mistakes;
		}
		
		$("#div_pages").html(all_together);
	}	
	else
	{
		$("#div_pages").html("");
	}
}

function show_(a)
{
	$.post("Daniel_5224/index.php",{b_1: a}, function(result){
    result = result + "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
	
	$("#div_result").html(result);
	
	//MATHJAX TO RELOAD
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
	});
	
	if(a == "IDO" || a=="ITAY" || a=="SHACHAR")
	{
		var four_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119742/4Yachal2.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var desmos = "<div class='formula_buttons_div'><a target='blank' href='https://www.desmos.com/calculator'><div class='formula_buttons'>דסמוס</div></a></div>";
		var geometry_sentences = "<div class='formula_buttons_div'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
		var physics_equations = "<div class='formula_buttons_div'><a target='blank' href='https://files.geva.co.il/articlefile_1183972313359.pdf'><div class='formula_buttons'>פיזיקה</div></a></div>";
		var common_mistakes = "<div class='formula_buttons_div'><a target='blank' href='credits/common_mistakes.php'><div class='formula_buttons'>טעויות</div></a></div>";
		var all_together = four_units_equations + desmos + geometry_sentences + common_mistakes;
		
		if(a == "IDO")
		{
			var all_together = physics_equations + four_units_equations + desmos + geometry_sentences + common_mistakes;
		}
		
		$("#div_pages").html(all_together);
	}
	else if(a == "YFTACH" || a == "MAAYAN" || a == "DAVID" || a == "MAYA")
	{
		var five_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119745/5m.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var desmos = "<div class='formula_buttons_div'><a target='blank' href='https://www.desmos.com/calculator'><div class='formula_buttons'>דסמוס</div></a></div>";
		var geometry_sentences = "<div class='formula_buttons_div'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
		var common_mistakes = "<div class='formula_buttons_div'><a target='blank' href='credits/common_mistakes.php'><div class='formula_buttons'>טעויות</div></a></div>";
		var all_together = five_units_equations + desmos + geometry_sentences + common_mistakes;
		$("#div_pages").html(all_together);
	}
	else if(a == "NETA" || a == "ODIL" || a == "NAAMA" || a == "DANA" || a == "NOA DANKER" || a == "EVYATAR" || a == "ITAMAR_TA" || a == "DANIEL" || a == "NATALY" || a == "OMRI" || a == "ODED" || a == "YONATAN" || a == "IDOGEN" || a == "BEN")
	{
		var physics_equations = "<div class='formula_buttons_div'><a target='blank' href='https://files.geva.co.il/articlefile_1183972313359.pdf'><div class='formula_buttons'>פיזיקה</div></a></div>";
		var four_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119742/4Yachal2.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var five_units_equations = "<div class='formula_buttons_div'><a target='blank' href='http://cms.education.gov.il/NR/rdonlyres/3B5F6DE8-EF8D-4F7E-BA96-A5E2DCB5DB2A/119745/5m.pdf'><div class='formula_buttons'>מתמטיקה</div></a></div>";
		var desmos = "<div class='formula_buttons_div'><a target='blank' href='https://www.desmos.com/calculator'><div class='formula_buttons'>דסמוס</div></a></div>";
		var geometry_sentences = "<div class='formula_buttons_div'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
		var common_mistakes = "<div class='formula_buttons_div'><a target='blank' href='credits/common_mistakes.php'><div class='formula_buttons'>טעויות</div></a></div>";
		var all_together = physics_equations + five_units_equations + desmos + geometry_sentences + common_mistakes;
		
		if (a == "OMRI")
		{
			var all_together = physics_equations + four_units_equations + desmos + geometry_sentences + common_mistakes;
		}
		
		$("#div_pages").html(all_together);
	}	
	else
	{
		$("#div_pages").html("");
	}
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
	//SHOW SUBJECTS
	else
	{
		showSlides(1);
		
		$("#div_people").toggle(false);
		$("#div_subjects").toggle(true);
		
		//HEADERS OPACITY
		$("#div_people_button").css("background-color","white");
		$("#div_subjects_button").css("background-color","orange");
		
		//HIDE PEOPLE
		$(".inside_div").toggle(false);
		$(".outside_div").toggle(true);
		
		//800
		for(n=1;n<10;n++)
		{
			var a = "math_800_00" + n;
			$("." + a ).toggle(true);
		}
		
		//804
		for(n=1;n<10;n++)
		{
			var a = "math_804_00" + n;
			$("." + a ).toggle(true);
		}
		
		//806
		for(n=1;n<10;n++)
		{
			var a = "math_806_00" + n;
			$("." + a ).toggle(true);
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
}
</script>
</head>

<body style="max-width:720px;margin:auto;">

<!-- TOP BUTTONS MENU -->
<!-- CONTACT -->
<div class="header" style="width:100%;">
	<div style="float:right;" class="twenty_percent initial_width">
		<a href="php_01/contact.php">
			<div class="initial_width top_button over_five_hundred">
				צור קשר
			</div>
			<div class="under_five_hundred">צור קשר</div>
		</a>
	</div>

	<!-- CREDITS -->
	<div style="float:right;" class="twenty_percent initial_width">
		<a href="credits/credits.php">
			<div class="initial_width top_button over_five_hundred">
				קרדיטים
			</div>
			<div class="under_five_hundred">קרדיטים</div>
		</a>
	</div>
	
	<!-- PREMIUM -->
	<div style="float:left;" class="twenty_percent initial_width">
		<a href="https://explainit.online/index_p.php">
			<div class="initial_width top_button over_five_hundred">
				XO<span style="color:#dbb677">PREMIUM</span>
			</div>
			<div class="under_five_hundred">סלבים</div>
		</a>
	</div>
	
	<!-- PROFESSIONAL -->
	<div style="float:left;" class="twenty_percent initial_width">
		<a href="https://explainit.online/index_pro.php">
			<div class="initial_width top_button over_five_hundred">
				XO<span style="color:#c0c0c0">PROFESSIONAL</span>
			</div>
			<div class="under_five_hundred">מקצועי</div>
		</a>
	</div>
	
	<!-- HIGHSCHOOL -->
	<div style="float:left;" class="twenty_percent initial_width">
		<a href="https://explainit.online/index_e.php">
			<div class="initial_width top_button over_five_hundred">
				XO<span style="color:#fa7500">HIGHSCHOOL</span>
			</div>
			<div class="under_five_hundred">תיכון</div>
		</a>
	</div>
</div><!-- TOP BUTTONS MENU -->

<!-- PEOPLE AND SUBJECTS -->
<div class="header" style="overflow:hidden;">
	<!-- PEOPLE HEADER -->
	<div id="div_people_button" onclick="people_and_subjects(1)" style="width:50%;display:inline-block;float:right;margin-top:10px;">	
		<h1 id="div_people_header" style="margin-bottom:0px;display:inline;">אנשים</h1>
		<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
	</div>
	
	<!-- SUBJECTS HEADER -->
	<div id="div_subjects_button" onclick="people_and_subjects(2)" style="width:50%;display:inline-block;float:left;margin-top:10px;">	
		<h1 id="div_subjects_header" style="margin-bottom:0px;display:inline;">נושאים</h1>
		<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
	</div>
	
	<!-- PEOPLE BUTTONS -->
	<div id="div_people" class="header " style="white-space:nowrap;overflow:hidden;">
		<!-- יאשיהו BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('YOSHIYAHU')" class="initial_width to_complete">
				יאשיהו
			</div>
		</div>
		
		<!-- JOY BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('JOY')" class="initial_width to_complete">
				JOY
			</div>
		</div>
		
		<!-- קבוצה 02 BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('GROUP 02')" class="initial_width to_complete">
				קבוצה 02
			</div>
		</div>
		
		<!-- SHON BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('SHON')" class="initial_width to_complete">
				שון
			</div>
		</div>
		
		<!-- ITAY BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('ITAY')" class="initial_width to_complete">
				איתי
			</div>
		</div>
		
		<!-- NOA BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('NOA')" class="initial_width to_complete">
				נעה
			</div>
		</div>
		
		<!-- DANIEL BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('DANIEL')" class="initial_width to_complete">
				דניאל
			</div>
		</div>
		
		<!-- OMRI BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('OMRI')" class="initial_width to_complete">
				עומרי
			</div>
		</div>
		
		<!-- EVYATAR BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('EVYATAR')" class="initial_width to_complete">
				אביתר
			</div>
		</div>
		
		<!-- ODED BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('ODED')" class="initial_width to_complete">
				עודד
			</div>
		</div>
		
		
		<!-- YONATAN BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('YONATAN')" class="initial_width to_complete">
				יונתן
			</div>
		</div>
		
		<!-- OMER BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('OMER')" class="initial_width to_complete">
				עומר
			</div>
		</div>
		
		<!-- DAVID BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('DAVID')" class="initial_width to_complete">				דוד
			</div>
		</div>
		
		<!-- NOA DANKER BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('NOA DANKER')" class="initial_width to_complete">
				נועה דנקר
			</div>
		</div>
		
		<!-- ITAMAR BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('ITAMAR')" class="initial_width to_complete">
				איתמר
			</div>
		</div>
		
		<!-- DANA BUTTON -->
		<div class="initial_width button_">
			<div onclick="show_('DANA')" class="initial_width to_complete">
				דנה
			</div>
		</div>
		
		<!-- NAAMA BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('NAAMA')" class="initial_width to_complete">
				נעמה
			</div>
		</div>
		
		<!-- ODIL BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('ODIL')" class="initial_width to_complete">
				אודיל
			</div>
		</div>
		
		<!-- NATALY BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('NATALY')" class="initial_width to_complete">
				נטלי
			</div>
		</div>
		
		<!-- MAYA BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('MAYA')" class="initial_width to_complete">
				מיה
			</div>
		</div>
		
		<!-- NETA BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('NETA')" class="initial_width to_complete">
				נטע
			</div>
		</div>
		
		<!-- SHAI BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('SHAI')" class="initial_width to_complete">
				שי
			</div>
		</div>
		
		<!-- YAM BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('YAM')" class="initial_width to_complete">
				ים
			</div>
		</div>
		
		<!-- SHACHAR BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('SHACHAR')" class="initial_width to_complete">
				שחר
			</div>
		</div>
		
		<!-- IDO BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('IDO')" class="initial_width to_complete">
				עידו
			</div>
		</div>
		
		<!-- MAAYAN BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('MAAYAN')" class="initial_width to_complete">
				מעיין
			</div>
		</div>
		
		<!-- ITAMAR_TA BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('ITAMAR_TA')" class="initial_width to_complete">
				 איתמר ת"א
			</div>
		</div>
		
		<!-- ROI BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('ROI')" class="initial_width to_complete">
				רועי
			</div>
		</div>
		
		<!-- IDOGEN BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('IDOGEN')" class="initial_width to_complete">
				עידו <i style="font-size:10px;margin-top:-6px;background-color:white;border-radius:2px;" class="em em-anchor"></i>
			</div>
		</div>
		
		<!-- BEN BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('BEN')" class="initial_width to_complete">
				בן
			</div>
		</div>
		
		<!-- YFTACH BUTTON  -->
		<div class="initial_width button_">
			<div onclick="show_('YFTACH')" class="initial_width to_complete">
				יפתח
			</div>
		</div>
	</div>
	
	<!-- SUBJECTS BUTTONS -->
	<div id="div_subjects" class="header">
		<!-- Slideshow container -->
		<div class="slideshow-container">
		
			<!-- Full-width images with number and  -->
			<div class="mySlides fade math">
				<div class="numbertext"></div>
					<img src="img/01.jpg" style="width:100%">
				<div class="text"></div>
			</div>
			
			<div class="mySlides fade physics">
				<div class="numbertext"></div>
					<img src="img/10.jpg" style="width:100%">
				<div class="text"></div>
			</div>
					
			<div class="mySlides fade programming">
				<div class="numbertext"></div>
					<img src="img/16.jpg" style="width:100%">
				<div class="text"></div>
			</div>
				
			<!-- Next and previous buttons -->
			<a id="prev" class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a id="next" class="next" onclick="plusSlides(1)">&#10095;</a>
			
			<!-- The dots/circles -->
			<div style="text-align:center;display:none;">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</div>
		
		<!-- MATH -->
		<div class="initial_width button_02_ subjects" style="width:100%;">
			<!-- MATH 800 -->
			<div style="display:block;">
				<!-- HEADER -->
				<div style="width:100%;display:inline-block;">	
					<h1 id="div_name" style="margin-bottom:0px;display:inline;">בסיס</h1>
					<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
				</div>
				
				<div class="initial_width button_02_">
					<div onclick="show_hide('math',21)" class="initial_width to_complete_02" style="white-space:initial;">
						משוואות ממעלה ראשונה עם נעלם במכנה
					</div>
					
					<div onclick="show_hide('math',22)" class="initial_width to_complete_02">
						משפט פיתגורס
					</div>
					
					<div onclick="show_hide('math',23)" class="initial_width to_complete_02">
						בעיות אחוזים
					</div>
					
					<div onclick="show_hide('math',24)" class="initial_width to_complete_02">
						מכנה משותף, כפל וחילוק שברים
					</div>
				</div>
				
				<div class="initial_width button_02_">
					<div onclick="show_hide('math',25)" class="initial_width to_complete_02">
						מכנה משותף עם נעלמים במכנה
					</div>
				</div>
			</div>
			
			<!-- MATH 804 -->
			<div style="display:block;">
				<!-- HEADER -->
				<div style="width:100%;display:inline-block;">	
					<h1 id="div_name" style="margin-bottom:0px;display:inline;">804</h1>
					<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
				</div>
				
				<div id="subjects_content" class="initial_width button_02_">
					<div onclick="show_hide('math',1)" class="initial_width math_804">
						בעיות קניה ומכירה
					</div>
					
					<div onclick="show_hide('math',2)" class="initial_width math_804">
						בעיות מילוליות עם אחוזים מבגרויות
					</div>
					
					<div onclick="show_hide('math',3)" class="initial_width math_804">
						בעיות קיצון
					</div>
					
					<div onclick="show_hide('math',4)" class="initial_width math_804">
						גאומטריה אנליטית - מעגל
					</div>
				</div>
			</div>
			
			<!-- MATH 806 -->
			<div style="display:block;">
				<!-- HEADER -->
				<div style="width:100%;display:inline-block;">	
					<h1 id="div_name" style="margin-bottom:0px;display:inline;">806</h1>
					<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
				</div>
				
				<div class="initial_width button_02_">
					<div onclick="show_hide('math',11)" class="initial_width to_complete_04">
						בעיות תנועה
					</div>
				</div>
			</div>
		</div>
		
		<!-- PHYSICS -->
		<div class="initial_width button_02_ subjects" style="width:100%;">
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
					
					<div onclick="show_hide('physics',1)" class="initial_width to_complete_02">
						חיכוך
					</div>
					
					<div onclick="show_hide('physics',2)" class="initial_width to_complete_02">
						תנע - התנגשות חד מימדית
					</div>
					
					<div onclick="show_hide('physics',3)" class="initial_width to_complete_02">
						תנע - התנגשות דו מימדית
					</div>
					
					<div onclick="show_hide('physics',4)" class="initial_width to_complete_02">
						אנרגיה
					</div>
					
					<div onclick="show_hide('physics',5)" class="initial_width to_complete_02">
						תנועה מעגלית אפקית
					</div>
					
					<div onclick="show_hide('physics',6)" class="initial_width to_complete_02">
						תנועה מעגלית אנכית
					</div>
					
					<div onclick="show_hide('physics',7)" class="initial_width to_complete_02">
						כבידה
					</div>
					
					<div onclick="show_hide('physics',8)" class="initial_width to_complete_02">
						תנועה הרמונית
					</div>
				</div>
				
				<!-- PHYSICS 02 -->
				<div class="initial_width button_02_">
					<div>
						<h1>חשמל</h1>
						<hr>
					</div>
					
					<div onclick="show_hide('physics',11)" class="initial_width to_complete_03">
						פריקת וטעינת קבל
					</div>
					
					<div>
						<h1>מגנטיות</h1>
						<hr>
					</div>
					
					<div onclick="show_hide('physics',21)" class="initial_width to_complete_03">
						כח על מטען
					</div>
					
					<div onclick="show_hide('physics',22)" class="initial_width to_complete_03">
						כוחות בין תיילים
					</div>
					
					<div onclick="show_hide('physics',23)" class="initial_width to_complete_03">
						שדה מגנטי
					</div>
					
					<div onclick="show_hide('physics',24)" class="initial_width to_complete_03">
						כא"מ מושרה
					</div>
				</div>
			</div>
		</div>
			
		<!-- PROGRAMMING -->
		<div class="initial_width button_02_ subjects" style="width:100%;">
			<div>
				<h1>בקרוב</h1>
				<hr>
			</div>
		</div>
	</div>	
	
	<!-- 1000ish LOGO -->
	<div style="width:100%;display:inline-block;margin:16px 0px;">	
		<h1 id="div_name" style="margin-bottom:0px;display:inline;">1000ish</h1>
		<h1 style="margin-bottom:0px;display:inline;"><hr></h1>
	</div>
	
</div>	

<!-- DIV_FORMULA PAGE -->
<div class="header" id="div_pages"></div>

<!-- DIV_RESULT -->
<div class="header" id="div_result"></div>

<!-- OMRI --><!-- 17.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עומרי // 17.02.19</h1>
	</div>
	
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
				
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה - קפיץ אנכי
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=506&ArticleID=728">2001 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=729&CategoryID=506">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- OMRI_ -->

<!-- YFTACH --><!-- 15.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יפתח // 15.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					מכנה משותף, כפל וחילוק שברים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{3}+\frac{1}{4}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{7}{12}$$
				</td>
				<td>
					חיבור שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{3}{4}-\frac{2}{3}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{12}$$
				</td>
				<td>
					חיסור שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{6}\times\frac{4}{8}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{12}$$
				</td>
				<td>
					כפל שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4}{9}:\frac{2}{7}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{14}{9}$$
				</td>
				<td>
					חילוק שברים
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YFTACH_ -->

<!-- BEN --><!-- 15.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">בן // 15.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					חיכוך
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=679">2003 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=680">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/6382009_q2.pdf">2009 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=1034&ArticleID=2786">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/839m_sh2.pdf">2011 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/840m_a2.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a3_summer_2014.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- BEN_ -->

<!-- IDOGEN --><!-- 15.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עידו <i style="font-size:20px;background-color:white;border-radius:2px;" class="em em-anchor"></i> // 15.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					מכנה משותף, כפל וחילוק שברים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{3}+\frac{1}{4}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{7}{12}$$
				</td>
				<td>
					חיבור שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{3}{4}-\frac{2}{3}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{12}$$
				</td>
				<td>
					חיסור שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{6}\times\frac{4}{8}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{12}$$
				</td>
				<td>
					כפל שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4}{9}:\frac{2}{7}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{14}{9}$$
				</td>
				<td>
					חילוק שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- IDOGEN_ -->

<!-- ITAMAR_TA --><!-- 14.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 14.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					חיכוך
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=679">2003 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=680">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/6382009_q2.pdf">2009 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=1034&ArticleID=2786">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/839m_sh2.pdf">2011 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/840m_a2.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a3_summer_2014.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ITAMAR_TA_ -->

<!-- NETA --><!-- 14.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נטע // 14.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					מכנה משותף, כפל וחילוק שברים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{3}+\frac{1}{4}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{7}{12}$$
				</td>
				<td>
					חיבור שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{3}{4}-\frac{2}{3}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{12}$$
				</td>
				<td>
					חיסור שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{6}\times\frac{4}{8}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{12}$$
				</td>
				<td>
					כפל שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4}{9}:\frac{2}{7}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{14}{9}$$
				</td>
				<td>
					חילוק שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					משוואות ממעלה ראשונה עם נעלם במכנה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					פיתרון
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{20}{x}+\frac{1}{4x} = \frac{10}{5x}+\frac{5}{20}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 73\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_001.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{10}{2x}+\frac{4}{x} = \frac{2}{4x}+\frac{3}{8}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 22\frac{2}{3}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_002.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{x}-\frac{2}{8} = \frac{1}{10x}-\frac{9}{5}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = -3\frac{5}{31}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_003.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9}{1.5x}-\frac{4}{x} = \frac{12}{3x}-\frac{9}{4.5x}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					כל x<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="math/Q_004.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NETA_ -->

<!-- ROI --><!-- 13.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">רועי // 13.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
		
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					לחשב את X בעזרת משפט פיתגורס
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:40%;">
					שאלה
				</th>
				<th style="width:40%;">
					תשובה
				</th>
				<th style="width:10%;">
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">3</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">9</text>
						<text x="115" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					9.49
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="0" y="100" text-anchor="center" fill="black" font-size="12">100</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">400</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					387.3
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">0.125</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">1</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.99
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="220">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="5,105 12,105"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="90,197 97,197"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="6" y="100" text-anchor="center" fill="black" font-size="12">1</text>
						<text x="5" y="118" text-anchor="center" fill="black" font-size="12">4</text>
						<text x="90" y="195" text-anchor="center" fill="black" font-size="12">5</text>
						<text x="90" y="210" text-anchor="center" fill="black" font-size="12">8</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.67
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					משוואות ממעלה ראשונה עם נעלם במכנה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{20}{x}+\frac{1}{4x} = \frac{10}{5x}+\frac{5}{20}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 73\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_001.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{10}{2x}+\frac{4}{x} = \frac{2}{4x}+\frac{3}{8}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 22\frac{2}{3}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_002.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{x}-\frac{2}{8} = \frac{1}{10x}-\frac{9}{5}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = -3\frac{5}{31}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_003.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9}{1.5x}-\frac{4}{x} = \frac{12}{3x}-\frac{9}{4.5x}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					כל x<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="math/Q_004.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ROI_ -->

<!-- ITAMAR_TA --><!-- 13.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר ת"א // 13.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
		
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 14.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:6px;">	
		<hr>
	</div>
	
	<!-- MATERIAL -->
	<div style="width:100%;">	
		<h4 style="margin-bottom:10px;margin-top:0px;">כבידה,תנועה הרמונית</h4>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=494&ArticleID=706">2002 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=494&ArticleID=707">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ITAMAR_TA_ -->

<!-- SHACHAR --><!-- 13.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">שחר // 13.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					גאומטריה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35481-4.pdf">2019,804,חורף,שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35481-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35481-1.pdf">804,2018,קיץ, מועד ב', שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35481-2.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35481-2.pdf">804,2018,קיץ,מועד א',שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35481-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/3548135804-1.pdf">804,2018,חורף,שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/804-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-%D7%A8%D7%A4%D7%95%D7%A8%D7%9E%D7%94.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- SHACHAR_ -->

<!-- YOSHIYAHU --><!-- 12.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 12.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/16.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS/PHP
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					//ERRORS DISPLAY
					<br>
					&nbsp;&nbsp;&nbsp;error_reporting(E_ALL);
					<br>
					&nbsp;&nbsp;&nbsp;ini_set('display_errors', 'On');
				</td>
				<td>
					PHP DISPLAY ERRORS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					
				</td>
				<td>
						
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- ITAMAR --><!-- 11.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 11.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
		
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					לחשב את X בעזרת משפט פיתגורס
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:40%;">
					שאלה
				</th>
				<th style="width:40%;">
					תשובה
				</th>
				<th style="width:10%;">
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">3</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">9</text>
						<text x="115" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					9.49
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="0" y="100" text-anchor="center" fill="black" font-size="12">100</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">400</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					387.3
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">0.125</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">1</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.99
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="220">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="5,105 12,105"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="90,197 97,197"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="6" y="100" text-anchor="center" fill="black" font-size="12">1</text>
						<text x="5" y="118" text-anchor="center" fill="black" font-size="12">4</text>
						<text x="90" y="195" text-anchor="center" fill="black" font-size="12">5</text>
						<text x="90" y="210" text-anchor="center" fill="black" font-size="12">8</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.67
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			
		</table>
	</div>
</div>
<!-- ITAMAR_ -->

<!-- NAAMA --><!-- 10.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נעמה // 10.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה עם אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/783mech_2010_q5.pdf">2010 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/784mech_2010_a5.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361.pdf">2018 שאלה 6</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/36201-%D7%A1%D7%95%D7%A4%D7%99.pdf">2017 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/%D7%9E%D7%9B%D7%A0%D7%99%D7%A7%D7%94-2017-2.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>-->
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>-->
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NAAMA_ -->

<!-- DANA --><!-- 10.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דנה // 10.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה עם אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/783mech_2010_q5.pdf">2010 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/784mech_2010_a5.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361.pdf">2018 שאלה 6</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/36201-%D7%A1%D7%95%D7%A4%D7%99.pdf">2017 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/%D7%9E%D7%9B%D7%A0%D7%99%D7%A7%D7%94-2017-2.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>-->
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>-->
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
		
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DANA_ -->

<!-- ODIL --><!-- 10.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">אודיל // 10.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
		
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה עם אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/783mech_2010_q5.pdf">2010 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/784mech_2010_a5.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361.pdf">2018 שאלה 6</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/36201-%D7%A1%D7%95%D7%A4%D7%99.pdf">2017 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/%D7%9E%D7%9B%D7%A0%D7%99%D7%A7%D7%94-2017-2.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>-->
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>-->
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ODIL_ -->

<!-- YONATAN --><!-- 10.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יונתן // 10.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כא"מ מושרה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=403&ArticleID=518">1998 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=519&CategoryID=403">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=324&ArticleID=266">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=436&CategoryID=324">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=627&ArticleID=1507">2005 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=627&ArticleID=1508">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=848&ArticleID=1959">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=848&ArticleID=1960">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YONATAN_ -->

<!-- MAAYAN --><!-- 09.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">מעיין // 09.02.19</h1>
	</div>
	
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
			
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 29.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:6px;">	
		<hr>
	</div>
	
	<!-- MATERIAL -->
	<div style="width:100%;">	
		<h4 style="margin-bottom:10px;margin-top:0px;">סדרה חשבונית,הסתברות,בעיות מילוליות, טריגו</h4>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					סדרה חשבונית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/806.pdf">2019,35581,חורף,שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35581-6.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/806.pdf">2018,35581,חורף,שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-%D7%A8%D7%A4%D7%95%D7%A8%D7%9E%D7%94-35806.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					הסתברות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/806.pdf">2019,35581,חורף,שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35581-6.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/806.pdf">2018,35581,חורף,שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-%D7%A8%D7%A4%D7%95%D7%A8%D7%9E%D7%94-35806.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- MAAYAN_ -->

<!-- IDO --><!-- 09.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עידו // 09.02.19</h1>
	</div>
	
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
			
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 27.03.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					משוואות טריגונומטריות<br>
					<a target="blank" href="books/books.php">יואל גבע 805</a>
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					עמוד 532, שאלה 9
				</td>
				<td style="direction:rtl;text-align:center;">
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					עמוד 533, שאלה 21
				</td>
				<td style="direction:rtl;text-align:center;">
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					עמוד 534, שאלה 35
				</td>
				<td style="direction:rtl;text-align:center;">
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					עמוד 534, שאלה 33
				</td>
				<td style="direction:rtl;text-align:center;">
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					05
				</td>
				<td style="direction:rtl;text-align:center;">
					די הרבה שאלות
				</td>
				<td style="direction:rtl;text-align:center;">
					(גביעים כללי)
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					חלוקת פולינומים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					פתרון
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					$$x^3-x+6 = 0$$
				</td>
				<td style="direction:rtl;text-align:center;">
					$$x=-2$$
				</td>
				<td>
					<a href="math/Q_006.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td style="direction:rtl;text-align:center;">
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- IDO_ -->

<!-- MAYA --><!-- 09.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">מיה // 09.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
		
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:6px;">	
		<hr>
	</div>
	
	<!-- MATERIAL -->
	<div style="width:100%;">	
		<h4 style="margin-bottom:10px;margin-top:0px;">אינטגרלים, בעיות קיצון, סדרות הנדסיות, סדרות הנדסיות אינסופיות</h4>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות מילוליות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35581-8.pdf">2019,35581,חורף,שאלה 1</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35581-6.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-3.pdf">2018,035581,קיץ,מועד ב',שאלה 1</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-2.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-1.pdf">2018,035581,קיץ,מועד א',שאלה 1</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-35581-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/806.pdf">2018,035581,חורף,שאלה 1</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-%D7%A8%D7%A4%D7%95%D7%A8%D7%9E%D7%94-35806.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					סדרות הנדסיות אינסופיות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-1.pdf">2018,35581,קיץ, מועד א',שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-35581-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/09/math806_q_summer_2015.pdf">2015,806,קיץ,מועד א',שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/09/math806_a1_summer_2015.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_winter2014_806.pdf">2014,806,חורף,שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_winter2014_806.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-1.pdf">2018,35581,קיץ,מועד א',שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-35581-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					סדרות הנדסיות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-3.pdf">2018,35581,קיץ, מועד ב',שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-2.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/05/5581-%D7%A1%D7%95%D7%A4%D7%99.pdf">2017,35581,קיץ,מועד א', שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/05/%D7%A8%D7%A4%D7%95%D7%A8%D7%9E%D7%94-806.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/05/35581.pdf">2017,35581, קיץ, מועד ב', שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/05/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-35581.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/bagrut/2017/math/math_winter_2017_35581.pdf">2017,35581, חורף, שאלה 2</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/bagrut/2017/math/math_winter_2017_35581_s.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- MAYA_ -->

<!-- JOY --><!-- 06.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">JOY // 06.02.19</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5" style="width:10%;">
					MISSION 03: ADDING IMAGE
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					LINK
				</th>
				<th>
					WHAT TO DO
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="http://www.pexels.com">PEXELS.COM</a>
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Go to Pexels.com and search for a picture of a mountain.
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td colspan="2" style="direction:ltr;text-align:left;padding:16px 30px;">
					<ol>
						<li>Right click the picture you selected and select <b>"Save image as..."</b>.</li>
						<li>Save it to the project folder, at the same location as index.html.</li>
					</ol>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td colspan="2" style="direction:ltr;text-align:left;padding:2px;">
					Open the project folder.
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td colspan="2" style="direction:ltr;text-align:left;padding:2px;">
					Right click the image file, and select <b>"Properties"</b> on the last line of the menu.
				</td>
			</tr>
			<tr>
				<td>
					05
				</td>
				<td colspan="2" style="padding:16px 30px;direction:ltr;text-align:left;">
					<ol>
						<li>Write down the image full file name, including <b>"Type of file"</b>. </li>
						<li>For example:"PEXELS_IMAGE.jpg".</li>
						<li>CAPITALIZATION MATTERS, which means ".jpg" is different from ".JPG".</li>
					</ol>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td colspan="2" style="direction:ltr;text-align:left;padding:2px;">
					Open index.txt on Notepad.
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td colspan="2" style="direction:ltr;text-align:left;padding:2px;">
					Open index.html in Chrome.
				</td>
			</tr>
			<tr>
				<td>
					08
				</td>
				<td colspan="2" style="direction:ltr;text-align:left;padding:2px;">
					Set 2 screens side by side, Chrome and Notepad.
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					09
				</td>
				<th style="width:50%;">
					HTML
				</th>
				<th>
					WHAT TO DO
				</th>
			</tr>
			<tr>
				<td>
					10
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					&lt;!DOCTYPE html&gt;
					<br>
					&lt;html&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;head&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;/head&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;body&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;HEADER TEXT&lt;/h1&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="PEXELS_IMAGE.jpg"&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;/body&gt;
					<br>
					&lt;/html&gt;	
				</td>
				<td style="direction:ltr;text-align:left;padding:16px 30px;">
					<ol>
						<li>In index.txt opened on Notepad, enter the following code:</li>
						<li><b>IMPORTANT:</b></li>
						<li>Make sure you replaced the full image name to the correct one.</li>
						<li>Make sure the file type is correct (in the example: ".jpg").</li>
						<li>If the picture doesn't load, put the file type in CAPITAL LETTERS (in the example: ".JPG").</li>
					</ol>
				</td>
			</tr>
			<tr>
				<td>
					11
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					<b>On index.txt:</b><br>
					Click "Save As".<br>
					Change encoding to UTF-8.<br>
					Save index.txt as index.html.<br>
					Press ok if asked to save over existing file.
				</td>
			</tr>
			<tr>
				<td>
					12
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					<b>On Chrome:</b><br>
					Click F5.<br>
					Make sure page refreshed and new header text AND IMAGE appear.<br>
				</td>
			</tr>
			<tr>
				<td>
					13
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Send screen pic on Whatsapp.	
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- JOY_ -->

<!-- SHACHAR --><!-- 06.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">שחר // 06.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות קניה ומכירה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804,קיץ,מועד א', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">804,2013,קיץ, מועד ב', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">804,2014,קיץ, מועד א', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_moedg_804.pdf">804,2014,קיץ,מועד ג', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_moedg_804.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- SHACHAR_ -->

<!-- NETA --><!-- 05.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נטע // 05.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					חיכוך
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=679">2003 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=680">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/6382009_q2.pdf">2009 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=1034&ArticleID=2786">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/839m_sh2.pdf">2011 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/840m_a2.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a3_summer_2014.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NETA_ -->

<!-- DANIEL --><!-- 05.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דניאל // 05.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כח על מטען
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183974428953.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183981209406.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1212577906156.pdf">2008 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1212594318515.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=527&ArticleID=781">1999 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=782&CategoryID=527">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=544&ArticleID=822">2001 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=544&ArticleID=823">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DANIEL_ -->

<!-- ITAMAR --><!-- 05.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 05.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/01.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					משוואות ממעלה ראשונה עם נעלם במכנה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{20}{x}+\frac{1}{4x} = \frac{10}{5x}+\frac{5}{20}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 73\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_001.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{10}{2x}+\frac{4}{x} = \frac{2}{4x}+\frac{3}{8}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 22\frac{2}{3}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_002.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{x}-\frac{2}{8} = \frac{1}{10x}-\frac{9}{5}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = -3\frac{5}{31}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_003.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9}{1.5x}-\frac{4}{x} = \frac{12}{3x}-\frac{9}{4.5x}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					כל x<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="math/Q_004.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			
		</table>
	</div>
</div>
<!-- ITAMAR_ -->

<!-- DANA --><!-- 04.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דנה // 04.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות דו מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=805&CategoryID=534&Page=1">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1945">2006 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1946">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/779mech_2010_q3.pdf">2010 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/780mech_2010_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות חד מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=491&ArticleID=702">2002 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=703&CategoryID=491">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=470&ArticleID=665">2004 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=666&CategoryID=470">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/841m_sh3.pdf">2011 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/842m_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=533&ArticleID=802">2000 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=533&ArticleID=803">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=521">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=540&CategoryID=435">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DANA_ --><!-- 04.02.19 -->

<!-- YAM --><!-- 04.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">ים // 04.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות תנועה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b806_icon.pdf">806,2012,קיץ, מועד ב', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b806_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_w_806_icon.pdf">806,2013,חורף,שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_w_806_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8061.pdf">806,2014,קיץ,מועד א',שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_806.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_moedb_806.pdf">806,2014,קיץ,מועד ב',שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-806.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YAM_ -->

<!-- ODED --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עודד // 03.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 21.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:6px;">	
		<hr>
	</div>
	
	<!-- MATERIAL -->
	<div style="width:100%;">	
		<h4 style="margin-bottom:10px;margin-top:0px;">בעיות תנועה, הסתברות, סדרות, בעיות קיצון</h4>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="6">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="6" style="text-align:center;">
					בעיות תנועה<br>
					<a target="blank" href="#">יואל גבע, מתמטיקה, 5 יחידות לימוד, י"א, כרך ג', (806)035581</a>
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					עמודים
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					24-40
				</td>
				<td>
					85
				</td>
				<td>
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					24-40
				</td>
				<td>
					90
				</td>
				<td>
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					24-40
				</td>
				<td>
					95
				</td>
				<td>
					בספר
				</td>
				<td>
					
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					24-40
				</td>
				<td>
					101
				</td>
				<td>
					בספר
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות מילוליות עם אחוזים מבגרויות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804, קיץ, מועד א', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon.pdf">2012,804, קיץ, מועד ב', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">2013,804, קיץ, מועד ב', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">2014,804, קיץ, מועד א', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ODED_ -->

<!-- EVYATAR --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">אביתר // 03.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות קיצון
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35581-8.pdf">35581/806,2019,חורף, שאלה 8</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2019/01/35581-6.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-3.pdf">35581/806,2018,קיץ, מועד ב',שאלה 8</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-2.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/35581-1.pdf">35581/806,2018,קיץ, מועד א',שאלה 8</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/05/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-35581-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/806.pdf">35581/806,2018,חורף,שאלה 8</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/01/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-%D7%A8%D7%A4%D7%95%D7%A8%D7%9E%D7%94-35806.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות תנועה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b806_icon.pdf">806,2012,קיץ, מועד ב', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b806_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_w_806_icon.pdf">806,2013,חורף,שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_w_806_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8061.pdf">806,2014,קיץ,מועד א',שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_806.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_moedb_806.pdf">806,2014,קיץ,מועד ב',שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-806.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- EVYATAR_ -->

<!-- NAAMA --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נעמה // 03.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות דו מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=805&CategoryID=534&Page=1">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1945">2006 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1946">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/779mech_2010_q3.pdf">2010 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/780mech_2010_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות חד מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=491&ArticleID=702">2002 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=703&CategoryID=491">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=470&ArticleID=665">2004 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=666&CategoryID=470">פיתרון</a>
				</td>
				<td>
					לחזור על קפיץ
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/841m_sh3.pdf">2011 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/842m_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה מעגלית אנכית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_q_summer2016.pdf">2016 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a2_summer2016.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NAAMA_ -->

<!-- DANA --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דנה // 03.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה מעגלית אנכית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_q_summer2016.pdf">2016 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a2_summer2016.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DANA_ --><!-- 03.02.19 -->

<!-- OMRI --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עומרי // 03.02.19</h1>
	</div>
	
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
				
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה, אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה - קפיץ אנכי
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1244104547140.pdf">2009 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1244105979171.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/Physics_Summer2010_A_917531-1.pdf">2010 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/Physics_Summer2010_Q_917531.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- OMRI_ -->

<!-- ODIL --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">אודיל // 03.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 11.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:16px;">	
		<hr>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות דו מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=805&CategoryID=534&Page=1">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1945">2006 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1946">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/779mech_2010_q3.pdf">2010 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/780mech_2010_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות חד מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=491&ArticleID=702">2002 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=703&CategoryID=491">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=470&ArticleID=665">2004 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=666&CategoryID=470">פיתרון</a>
				</td>
				<td>
					סעיף ה'
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/841m_sh3.pdf">2011 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/842m_a3.pdf">פיתרון</a>
				</td>
				<td>
					סעיף ד'
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td>
					תנע
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>	
		<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה מעגלית אנכית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_q_summer2016.pdf">2016 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a2_summer2016.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ODIL_ -->
	
<!-- MAYA --><!-- 03.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">מיה // 02.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות קיצון
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804, קיץ, מועד א', שאלה 09</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon.pdf">2012,804, קיץ, מועד ב', שאלה 08</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">2013,804, קיץ, מועד ב', שאלה 09</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">2014,804, קיץ, מועד א', שאלה 08</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- MAYA_ -->

<!-- SHAI --><!-- 02.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">שי // 02.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					פריקת וטעינת קבל
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=402&ArticleID=515">1998 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=402&ArticleID=677">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=525&ArticleID=777">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=525&ArticleID=778">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=623&ArticleID=1511">2005 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=623&ArticleID=1512">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- SHAI_ -->

<!-- ITAMAR --><!-- 01.02.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 01.02.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
		
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					לחשב את X בעזרת משפט פיתגורס
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:40%;">
					שאלה
				</th>
				<th style="width:40%;">
					תשובה
				</th>
				<th style="width:10%;">
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">12</text>
						<text x="115" y="100" text-anchor="center" fill="black" font-size="12">15</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					9
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="2" y="100" text-anchor="center" fill="black" font-size="12">2.5</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">3</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					3.91
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">16</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">48</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					45.25
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="90" y="195" text-anchor="center" fill="black" font-size="12">0.25</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">0.6</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.55
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ITAMAR_ -->

<!-- NATALY --><!-- 31.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נטלי // 31.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כא"מ מושרה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=403&ArticleID=518">1998 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=519&CategoryID=403">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=324&ArticleID=266">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=436&CategoryID=324">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=627&ArticleID=1507">2005 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=627&ArticleID=1508">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=848&ArticleID=1959">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=848&ArticleID=1960">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כוחות בין תיילים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/91756523521.pdf">2005 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1120126382413.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/917521.pdf">2006 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1151493408921.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					2004, עמוד 181 שאלה 4
				</td>
				<td style="direction:rtl;text-align:center;">
					בספר
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כח על מטען
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					1994, עמוד 12 שאלה 4
				</td>
				<td style="direction:rtl;text-align:center;">
					בספר
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183974428953.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183981209406.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1212577906156.pdf">2008 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1212594318515.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					שדה מגנטי של סילונית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					1998, עמוד 83 שאלה 3
				</td>
				<td>
					בספר
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183974428953.pdf">2007 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183981209406.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NATALY_ -->

<!-- JOY --><!-- 31.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">JOY // 31.01.19</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5" style="width:10%;">
					MISSION 02: CHANGE HEADER TEXT
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML
				</th>
				<th>
					WHAT TO DO
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Open project folder on Desktop.
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Open index.txt in Notepad.
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Open index.html in Chrome.
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Set 2 screens side by side, Chrome and Notepad.
				</td>
			</tr>
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					&lt;!DOCTYPE html&gt;
					<br>
					&lt;html&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;head&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;/head&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;body&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Helloooooooo!&lt;/h1&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;/body&gt;
					<br>
					&lt;/html&gt;	
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					In index.txt opened on Notepad, enter the following code:
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					<b>On index.txt:</b><br>
					Click "Save As".<br>
					Change encoding to UTF-8.<br>
					Save index.txt as index.html.<br>
					Press ok if asked to save over existing file.
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					<b>On Chrome:</b><br>
					Click F5.<br>
					Make sure page refreshed and new text appears in header.<br>
				</td>
			</tr>
			<tr>
				<td>
					08
				</td>
				<td style="direction:ltr;text-align:left;">
						
				</td>
				<td style="direction:ltr;text-align:left;padding:2px;">
					Send screen pic on Whatsapp.	
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- JOY_ -->

<!-- ODIL --><!-- 30.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">אודיל // 31.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td>
					אנרגיה ועבודה
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td>
					אנרגיה ועבודה
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=532&ArticleID=800">2000 שאלה 3</a>
				</td>
				<td>
					אנרגיה ועבודה
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ODIL_ -->

<!-- NAAMA --><!-- 30.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נעמה // 30.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=481&ArticleID=681">2003 שאלה 3</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 3</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2015/6/HEB/36201.PDF">2015 שאלה 4</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NAAMA_ -->

<!-- DANA --><!-- 30.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דנה // 30.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=481&ArticleID=681">2003 שאלה 3</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 3</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2015/6/HEB/36201.PDF">2015 שאלה 4</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DANA_ --><!-- 30.01.19 -->

<!-- OMER --><!-- 30.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עומר // 30.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					שאלות אנרגיה מבגרויות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/781mech_2010_q4.pdf">2010 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/782mech_2010_a4.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=493&ArticleID=704">2002 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=705&CategoryID=493">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/6422009_q4.pdf">2009 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/643ma4.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- OMER_ -->

<!-- ITAY --><!-- 29.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתי // 29.01.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/01.jpg" style="width:100%">
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;"><i class="em em-book"></i> מבחן // 24.02.19 <i class="em em-book"></i></h1>
	</div>
	
	<!-- NEXT TEST -->
	<div style="width:50%;margin:auto;margin-bottom:6px;">	
		<hr>
	</div>
	
	<!-- MATERIAL -->
	<div style="width:100%;">	
		<h4 style="margin-bottom:10px;margin-top:0px;">בעיות קיצון, הנדסה אנליטית, גאומטריה</h4>
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="6">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="6" style="text-align:center;">
					גאומטריה אנליטית - מעגל<br>
					<a target="blank" href="books/books.php?mark=02">בני גורן, מתמטיקה, 4 יחידות לימוד, ב'-1, 035804</a>
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					עמודים
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					142-143
				</td>
				<td>
					1-9 
				</td>
				<td style="direction:ltr;text-align:center;">
					בספר
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					בעיות קיצון
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					פיתרון
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					חשב את היקפו המינימלי של מלבן ששטחו 25 סמ"ר.
				</td>
				<td>
					20 סמ"ר 
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="math/Q_005.php">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות אחוזים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:right;">
					חשב כמה הם 25% מ-264.
				</td>
				<td>
					66
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:right;">
					חולצה עולה 225 ש"ח. אחרי חודש התייקר מחירה ב-24%. מהו מחירה החדש? אחרי חודש נוסף ירד מחירה ב-50%. מהו מחירה עכשיו?
				</td>
				<td>
					279 ש"ח, 139.5 ש"ח
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:right;">
					חולצה עולה 100 ש"ח. מחירה עולה ב-50% ואז ירד ב-50%. מהו מחירה לאחר העליה והירידה?
				</td>
				<td>
					75 ש"ח
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:right;">
					מחיר ליטר דלק עלה ב-150% ועכשיו מחירו 20 ש"ח. מה היה מחירו לפני העליה?
				</td>
				<td>
					\(16\frac{1}{3}\) ש"ח
				</td>
				<td style="border-bottom:0px;">
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	<!-- NEW LINE -->
	<br>
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					להביא את הביטויים הבאים לצורת שבר יחיד (מונה אחד ומכנה אחד)
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9x^3}{(x-9)x}-\frac{3x+2}{(12-x)^2+3}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4x-(2x^2+3)}{x\sqrt{(x+2)}(2-x)}+\frac{(x-1)(x+1)}{3\sqrt{x^2}}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{(x-3)\sqrt{x}}{(9-x^2)}:\frac{(x+2)^2\sqrt{x}}{(9+x)(6-2x)}$$
				</td>
				<td>
					מכנה משותף, חלוקת שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{\frac{(2x+7)}{(x-9)}}{(12-6^2)}*\frac{(4x+3)^2\sqrt{\frac{x}{x+2}}}{(6-x)(2-0.5x)}$$
				</td>
				<td>
					מכנה משותף, כפל שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			
		</table>
	</div>
</div>
<!-- ITAY_ -->

<!-- ITAMAR --><!-- 29.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 29.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/01.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					מכנה משותף, כפל וחילוק שברים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{3}+\frac{1}{4}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{7}{12}$$
				</td>
				<td>
					חיבור שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{3}{4}-\frac{2}{3}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{12}$$
				</td>
				<td>
					חיסור שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{6}*\frac{4}{8}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{12}$$
				</td>
				<td>
					כפל שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4}{9}:\frac{2}{7}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{14}{9}$$
				</td>
				<td>
					חילוק שברים
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ITAMAR_ -->

<!-- DAVID --><!-- 28.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דוד // 28.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/01.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות מילוליות עם אחוזים מבגרויות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804, קיץ, מועד א', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon.pdf">2012,804, קיץ, מועד ב', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">2013,804, קיץ, מועד ב', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">2014,804, קיץ, מועד א', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DAVID_ -->

<!-- NOA DANKER --><!-- 29.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נועה דנקר // 29.01.19</h1>
	</div>
		
	<!-- IMAGE -->
	<div>
		<img src="img/10.jpg" style="width:100%">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td>
					אנרגיה
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td>
					אנרגיה
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td>
					תנע
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NOA DANKER_ -->

<!-- YONATAN --><!-- 27.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יונתן // 27.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כוחות בין תיילים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/91756523521.pdf">2005 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1120126382413.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/917521.pdf">2006 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1151493408921.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כח על מטען
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183974428953.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183981209406.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1212577906156.pdf">2008 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1212594318515.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					שדה מגנטי של סילונית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					05
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183974428953.pdf">2007 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183981209406.pdf">פיתרון</a>
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					שדה מגנטי
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=539&ArticleID=812">2000 שאלה 4</a>
				</td>
				<td>
					שדה מגנטי
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=535&ArticleID=806">2000 שאלה 1</a>
				</td>
				<td>
					קבלים וסעיף על שדה מגנטי
				</td>
				<td>
					לבדוק, יצאה תשובה גדולה פי 2
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=545&ArticleID=824">2001 שאלה 5</a>
				</td>
				<td>
					שדה מגנטי
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YONATAN_ -->

<!-- EVYATAR --><!-- 27.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">אביתר // 27.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td>
					אנרגיה
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td>
					אנרגיה
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td>
					תנע
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- EVYATAR_ -->

<!-- OMRI --><!-- 27.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">עומרי // 27.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td>
					אנרגיה
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td>
					אנרגיה
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td>
					תנע
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- OMRI_ -->

<!-- YOSHIYAHU --><!-- 27.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 27.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					//ERRORS DISPLAY
					<br>
					&nbsp;&nbsp;&nbsp;error_reporting(E_ALL);
					<br>
					&nbsp;&nbsp;&nbsp;ini_set('display_errors', 'On');
				</td>
				<td>
					PHP DISPLAY ERRORS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					function rec($n,$m)
					<br>
					{
					<br>
					&nbsp;&nbsp;&nbsp;if($n == 1)
					<br>
					&nbsp;&nbsp;&nbsp;{
					<br>
					&nbsp;&nbsp;&nbsp;return $m;
					<br>
					&nbsp;&nbsp;&nbsp;}
					<br>
					&nbsp;&nbsp;&nbsp;else
					<br>
					&nbsp;&nbsp;&nbsp;{
					<br>
					&nbsp;&nbsp;&nbsp;$m = $m * $n;
					<br>
					&nbsp;&nbsp;&nbsp;$n = $n - 1;
					<br>
					&nbsp;&nbsp;&nbsp;rec($n,$m);
					<br>
					&nbsp;&nbsp;&nbsp;}
					<br>
					}
				</td>
				<td>
					פונקציית רקורסיה	
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- NOA --><!-- 26.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">נעה // 26.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=402&ArticleID=515">1998 שאלה 2</a>
				</td>
				<td>
					פריקת וטעינת קבל
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=525&ArticleID=777">1999 שאלה 2</a>
				</td>
				<td>
					פריקת וטעינת קבל
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=623&ArticleID=1511">2005 שאלה 3</a>
				</td>
				<td>
					פריקת וטעינת קבל
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- NOA_ -->

<!-- DANIEL --><!-- 24.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">דניאל // 24.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=402&ArticleID=515">1998 שאלה 2</a>
				</td>
				<td>
					פריקת וטעינת קבל
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=525&ArticleID=777">1999 שאלה 2</a>
				</td>
				<td>
					פריקת וטעינת קבל
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=623&ArticleID=1511">2005 שאלה 3</a>
				</td>
				<td>
					פריקת וטעינת קבל
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- DANIEL_ -->

<!-- ITAY --><!-- 22.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתי // 22.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/01.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4}{x-9}-\frac{3x}{(12-x)^2}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{3x(x-2)}{4\sqrt{x}(2-x)}-\frac{1}{3\sqrt{x}}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{x\sqrt{x}}{(9-x^2)}-\frac{3\sqrt{x}}{(1+x)(1-2x)}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					<i class="em em-trophy"></i>
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					כשיש שבר כמו למשל \(\frac{x\sqrt{x}}{(9-x^2)}\) לזכור שצריך לעשות תחום הגדרה
				</td>
				<td colspan="2">
					הערה כללית
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ITAY_ -->

<!-- SHON --><!-- 22.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">שון // 22.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:90%;">
					לינק
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="http://www.yedatech.co.il/yt/locations.jhtml">רשימת חברות הייטק ברמת החייל</a>
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.jobinfo.co.il/%D7%97%D7%91%D7%A8%D7%95%D7%AA-%D7%94%D7%99%D7%99%D7%98%D7%A7/%D7%97%D7%91%D7%A8%D7%95%D7%AA-%D7%94%D7%99%D7%99%D7%98%D7%A7-%D7%91%D7%AA%D7%9C-%D7%90%D7%91%D7%99%D7%91.aspx">חברות הייטק בתל אביב</a>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- SHON_ -->

<!-- JOY --><!-- 21.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">JOY // 21.01.19</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HOW TO DO
				</th>
				<th>
					MISSION 01
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/RCInsJ6BLjY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Delete added files.
				</td>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HOW TO DO
				</th>
				<th>
					MISSION 02
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/SMPkZ3G14Fg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Check if System is 32 bit/64 bit.
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Go to <a target="blank" href="https://notepad-plus-plus.org/download/v7.6.2.html">Notepad++</a>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<a href="IMG_02/02_1.jpg" target="blank">
						<img src="IMG_02/02_1.jpg" style="width:100%;"/>
					</a>	
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Download 64 bit installer. 
				</td>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					MISSION 03
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Open new file in Notepad++.
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					&lt;!DOCTYPE html&gt;
					<br>
					&lt;html&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;head&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;/head&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;body&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Hello World!&lt;/h1&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&lt;/body&gt;
					<br>
					&lt;/html&gt;
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Enter the following code:
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Save file as "index.html".
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td style="direction:ltr;text-align:left;">
					&nbsp;Open file in Chrome.
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_04.html" style="text-decoration:none;">SAMPLE FILE</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- JOY_ -->

<!-- YOSHIYAHU --><!-- 18.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 18.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.whatsmydns.net/">WHATSMYDNS</a>
				</td>
				<td>
					DNS PROPAGATION
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://whatismyipaddress.com">WHATSMYIPADDRESS</a>
				</td>
				<td>
					IP ADDRESS	
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 13.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 13.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://stackoverflow.com/">STACKOVERFLOW</a>
				</td>
				<td>
					STACKOVERFLOW
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://github.com/">GITHUB</a>
				</td>
				<td>
					GITHUB
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.linkedin.com/">LINKEDIN</a>
				</td>
				<td>
					LINKEDIN
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.linkedin.com/in/five-minutes">LINKEDIN PROFILE</a>
				</td>
				<td>
					LINKEDIN PROFILE
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 09.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 09.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://moqups.com/">MOQUPS</a>
				</td>
				<td>
					MOQUPS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://vangus.co.il/%D7%90%D7%97%D7%A1%D7%95%D7%9F-%D7%90%D7%AA%D7%A8%D7%99%D7%9D/">VANGUS.COM</a>
				</td>
				<td>
					VANGUS.COM
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://iwantmyname.com/">IWANTMYNAME</a>
				</td>
				<td>
					IWANTMYNAME
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 01.01.19 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 01.01.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.w3schools.com/howto/">LINK</a>
				</td>
				<td>
					W3SCHOOLS HOW TO
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.gimp.org/">LINK</a>
				</td>
				<td>
					GIMP
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.studio-tal.com/portfolio/%D7%A7%D7%9C%D7%99%D7%91%D7%A8-3/">LINK</a>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.google.com/search?q=change+img+resolution+gimp&oq=change+img+resolution+gimp&aqs=chrome..69i57j0l5.7182j0j4&sourceid=chrome&ie=UTF-8">LINK</a>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 28.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 28.12.18</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					if (Math.round(star) == 0)
					<br>
					{
					<br>
					&nbsp;&nbsp;&nbsp;star_output = "";
					<br>
					}
					<br>
					else if (Math.round(star) == 1)
					<br>
					&nbsp;&nbsp;&nbsp;star_output = "*";
					<br>
					}
					<br>
					else if (Math.round(star) == 2)
					<br>
					&nbsp;&nbsp;&nbsp;star_output = "**";
					<br>
					}
				</td>
				<td>
					JS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					<br>
				</td>
				<td>
				
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 21.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 21.12.18</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					if (Math.round(star) == 0)
					<br>
					{
					<br>
					&nbsp;&nbsp;&nbsp;star_output = "";
					<br>
					}
					<br>
					else if (Math.round(star) == 1)
					<br>
					&nbsp;&nbsp;&nbsp;star_output = "*";
					<br>
					}
					<br>
					else if (Math.round(star) == 2)
					<br>
					&nbsp;&nbsp;&nbsp;star_output = "**";
					<br>
					}
				</td>
				<td>
					JS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					<br>
				</td>
				<td>
				
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 18.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 18.12.18</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<a target="blank" href="https://www.youtube.com/watch?v=Juchy1-Qj44">LINK</a>
				</td>
				<td>
					SKYPE TO WORK WITH XAMPP
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					list_ar[0]["name"];
				</td>
				<td>
				
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- GROUP 02 --><!-- 16.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">קבוצה 02 // 16.12.18</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:30%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושאים
				</th>
				<th style="width:10%;">
					תשובות
				</th>
				<th style="width:10%;">
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2018/6/HEB/656.pdf">מכניקה 2018 שאלה 01</a>
				</td>
				<td style="text-align:center;padding:0px 6px;">
					זריקה אנכית
					<br>
					גרף מהירות - זמן
					<br>
					משוואת מיקום - זמן
					<br>
				</td>
				<td style="text-align:center;padding:0px 6px;">
					<a target="blank" href="fi/y/y_05.html" style="text-decoration:none;">תשובות</a>
				</td>
				<td>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- GROUP 02_ -->

<!-- YOSHIYAHU --><!-- 14.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 14.12.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					var arr =
					<br>
					{
					<br>
					&nbsp;&nbsp;&nbsp;"one":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"two":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"three":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"four":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"five":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"six":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"seven":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"eight":0,
					&nbsp;&nbsp;&nbsp;<br>
					&nbsp;&nbsp;&nbsp;"nine":0
					<br>
					}
				</td>
				<td>
					W3SCHOOLS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					arr[this.id]++;
				</td>
				<td>
					Adding 1 to this.id field in arr object
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					if ((arr[this.id] % 2) == 0)
					<br>
					{
					<br>	
					&nbsp;&nbsp;&nbsp;// Even
					<br>	
					}
					<br>
					<br>
					if ((arr[this.id] % 2) == 1)
					<br>
					{
					<br>	
					&nbsp;&nbsp;&nbsp;// Odd
					<br>	
					}
				</td>
				<td>
					JS Modulus
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 12.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 12.12.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					Shopping Cart
				</td>
				<td>
					JQUERY
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 07.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 07.12.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					$('#test').attr('id');
				</td>
				<td>
					JQUERY
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 04.12.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 04.12.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					$.ajax({
					<br>
					url:  'ajaxload.php',
					<br>
					dataType: "json", 
					<br>
					async: false
					<br>
					});
				</td>
				<td>
					AJAX
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					console.log(json_data[0]);
				</td>
				<td>
					JS
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					var i;
					<br>
					<br>
					for (i in json_data) {
						console.log(json_data[i].id);
						console.log(json_data[i].price_usd);
					}
				</td>
				<td>
					JS
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 30.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 30.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:middle;">
					$( ".ho" ).each(function( index ) {
						console.log( index + ": " + $( this ).text() );
					});
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					<br>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 27.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 27.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:middle;">
					IF תנאי
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					פונקציות
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					JSON
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					var a;
					<br>
					for (a in json)
					{
						console.log(json[a]);
					}
				</td>
				<td>
					W3SCHOOLS
					<br>
					כדי לעבור על תכונות 
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					function SeriesClass(name_01,price_01,img_01,quantity_01)
					<br>
					{
					<br>
						this.name = name_01;
						this.price = price_01;
						this.img = img_01;
						this.quantity = quantity_01;
					<br>					
					}
					<br>					
					<br>					
					SeriesClass.prototype.addToHtml = function()
					<br>
					{
					<br>	
						console.log("name:",this.name);
						console.log("price:",this.price);
						console.log("quantity:",this.quantity);
						console.log("image:",this.image);
					<br>
					}
					<br>
					<br>					
					var shopping_list = new SeriesClass(json[i]["name"],json[i]["price"],json[i]["img"],json[i]["quantity"]);
					<br>
					<br>
					shopping_list.addToHtml();
				</td>
				<td>
					W3SCHOOLS
					<br>
					הגדרת פונקציה על JS Object Prototype
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 23.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 23.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					localStorage.setItem('compressedFunc', myFunc.toString());
				</td>
				<td>
					StackoverFlow
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					//Retrieve function
					<br>
					var compressedFunc = localStorage.getItem('compressedFunc');
					<br>
					<br>
					// Convert the String back to a function
					<br>
					var myFunc = eval('(' + compressedFunc + ')');
					<br>
					<br>
					// Use it
					<br>
					myFunc();
				</td>
				<td>
					StackoverFlow
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					class User {
					
					constructor(name) {
						this.name = name;
					}
					
					sayHi() {
						alert(this.name);
					}
					
					}
					
					let user = new User("John");
					user.sayHi();
				</td>
				<td>
					Javascript.info
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					function User(name) {
					this.name = name;
					}
					
					User.prototype.sayHi = function() {
					alert(this.name);
					}
					
					let user = new User("John");
					user.sayHi();
				</td>
				<td>
					Javascript.info
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 20.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 20.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					Math Random
				</td>
				<td>
					רנדומליות
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					Working with Objects
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 16.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 16.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					function(){_list.append("&lt;li&gt;Appended item&lt;/li&gt;");};
				</td>
				<td>
					הוספת שורה לרשימה
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					function myFunction() 
					{
						var node = document.createElement("LI");
						var textnode = document.createTextNode("New Line");
						node.appendChild(textnode);
						document.getElementById("myList").appendChild(node);
					}
				</td>
				<td>
					W3SCHOOLS
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 13.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 13.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					&lt;input type="text" id="fname" onkeyup="myFunction()"&gt;
				</td>
				<td>
					W3SCHOOLS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					var n = str.length;
				</td>
				<td>
					אורך STRING
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					<br>
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 09.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 09.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="img/16.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_16 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_16" class="prev" style="display:none;" onclick="plusSlides_16(-1)">&#10094;</a>
		<a id="next_16" class="next" style="display:none;" onclick="plusSlides_16(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_16" onclick="currentSlide_16(1)"></span> 
		<span class="dot_16" onclick="currentSlide_16(2)"></span> 
		<span class="dot_16" onclick="currentSlide_16(3)"></span> 
		<span class="dot_16" onclick="currentSlide_16(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML/CSS/JS
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					setInterval(function()
					<br>
					{ 
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;changeLights(m); 
					<br>
					}, 1000);
				</td>
				<td>
					W3SCHOOLS
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					function colors_01()
					<br>
					{
					<br>
					var i = 1;
					<br>
					var m = 1;
					<br>					
					<br>					
					while(i &lt; 20)
					<br>
					{
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(m%2 == 0)
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log("red");
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log("blue");
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
					<br>
					<br>
					//Moving i up by 1
					<br>
					i++;
					<br>
					//Moving m up by 1
					<br>
					m++;
					<br>
					}//CLOSING WHILE
					<br>
					<br>
					}//CLOSING FUNCTION
				</td>
				<td>
					פונקציה עם לולאת while
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					setTimeout(function(){changeLights(1); }, 1000);
				</td>
				<td>
					W3SCHOOLS
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					<!-- &lt;&gt; -->
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- YOSHIYAHU --><!-- 02.11.18 -->
<div class="header inside_div">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 02.11.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_15 fade">
			<div class="numbertext"></div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_15 fade" style="display:none;">
			<div class="numbertext">3 / 1</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_15 fade" style="display:none;">
			<div class="numbertext">3 / 2</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<div class="mySlides_15 fade" style="display:none;">
			<div class="numbertext">3 / 3</div>
				<img src="img/10.jpg" style="width:100%">
			<div class="text"></div>
		</div>
		
		<!-- Next and previous buttons -->
		<a id="prev_15" class="prev" style="display:none;" onclick="plusSlides_15(-1)">&#10094;</a>
		<a id="next_15" class="next" style="display:none;" onclick="plusSlides_15(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;display:none;">
		<span class="dot_15" onclick="currentSlide_15(1)"></span> 
		<span class="dot_15" onclick="currentSlide_15(2)"></span> 
		<span class="dot_15" onclick="currentSlide_15(3)"></span> 
		<span class="dot_15" onclick="currentSlide_15(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					HTML
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:left;">
					&lt;img src=""&gt;
					<!-- <br> -->
					<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <!-- <br> -->
                </td>
				<td>
					תגית IMG
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:left;">
					&lt;form action="" onsubmit="myFunction()"&gt;
				</td>
				<td>
					הדמיית טופס ב-js
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:left;">
					var a = document.getElementById("Input_id").value; 
				</td>
				<td>
					קבלת ערך של input
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:left;">
					console.log("a: ",a);
				</td>
				<td>
					הדפסה
				</td>
			</tr>
			
			<tr>
				<td>
					05
				</td>
				<td style="direction:ltr;text-align:left;">
					$("#prospects_form").submit(function(e)
					<br>
					{
					<br>	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.preventDefault();
					<br>
					});
				</td>
				<td>
					מניעת טופס מטעינה (jQuery)
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:ltr;text-align:left;">
					location.replace("https://www.w3schools.com");
				</td>
				<td>
					החלפת מיקום דף
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td>
					<a target="blank" href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					DIV שנראה כמו טופס
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- YOSHIYAHU_ -->

<!-- OUTSIDE DIVS -->
<!-- MATH OUTSIDE DIV -->
<div id="outside_div_math" class="header outside_div outside_div_math">	
		
	<!-- TABLE DIV --><!-- math_800_001 -->
	<div class="math_800_001" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					משוואות ממעלה ראשונה עם נעלם במכנה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{20}{x}+\frac{1}{4x} = \frac{10}{5x}+\frac{5}{20}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 73\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_001.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{10}{2x}+\frac{4}{x} = \frac{2}{4x}+\frac{3}{8}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = 22\frac{2}{3}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_002.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{x}-\frac{2}{8} = \frac{1}{10x}-\frac{9}{5}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					\(x = -3\frac{5}{31}\)<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td>
					<a target="blank" href="math/Q_003.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9}{1.5x}-\frac{4}{x} = \frac{12}{3x}-\frac{9}{4.5x}$$
				</td>
				<td style="direction:rtl;text-align:center;">
					כל x<br>
					תחום הגדרה: \(x \neq 0\)
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="math/Q_004.php">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_800_001_ -->
	
	<!-- TABLE DIV --><!-- math_800_002 -->
	<div class="math_800_002" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					לחשב את X בעזרת משפט פיתגורס
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:40%;">
					שאלה
				</th>
				<th style="width:40%;">
					תשובה
				</th>
				<th style="width:10%;">
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">3</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">9</text>
						<text x="115" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					9.49
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="0" y="100" text-anchor="center" fill="black" font-size="12">100</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">400</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					387.3
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">0.125</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">1</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.99
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="220">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="5,105 12,105"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="90,197 97,197"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="6" y="100" text-anchor="center" fill="black" font-size="12">1</text>
						<text x="5" y="118" text-anchor="center" fill="black" font-size="12">4</text>
						<text x="90" y="195" text-anchor="center" fill="black" font-size="12">5</text>
						<text x="90" y="210" text-anchor="center" fill="black" font-size="12">8</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.67
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
	
	</div>
	
	
	<!-- TABLE DIV -->
	<div class="math_800_002" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					לחשב את X בעזרת משפט פיתגורס
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:40%;">
					שאלה
				</th>
				<th style="width:40%;">
					תשובה
				</th>
				<th style="width:10%;">
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">12</text>
						<text x="115" y="100" text-anchor="center" fill="black" font-size="12">15</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					9
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="2" y="100" text-anchor="center" fill="black" font-size="12">2.5</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">3</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">X</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					3.91
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">16</text>
						<text x="95" y="195" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">48</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					45.25
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					<svg width="200" height="200">
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,20 20,180 180,180"/>
						<polygon fill="#ffffff" stroke="#000000" stroke-width="0.5" points="20,160 40,160 40,180 20,180 20,160"/>
						<text x="5" y="100" text-anchor="center" fill="black" font-size="12">X</text>
						<text x="90" y="195" text-anchor="center" fill="black" font-size="12">0.25</text>
						<text x="110" y="100" text-anchor="center" fill="black" font-size="12">0.6</text>
					</svg>
				</td>
				<td style="direction:ltr;text-align:center;">
					0.55
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_800_002_ -->
	
	<!-- TABLE DIV --><!-- math_800_003 -->
	<div class="math_800_003" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות אחוזים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:right;">
					חשב כמה הם 25% מ-264.
				</td>
				<td>
					66
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:right;">
					חולצה עולה 225 ש"ח. אחרי חודש התייקר מחירה ב-24%. מהו מחירה החדש? אחרי חודש נוסף ירד מחירה ב-50%. מהו מחירה עכשיו?
				</td>
				<td>
					279 ש"ח, 139.5 ש"ח
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:right;">
					חולצה עולה 100 ש"ח. מחירה עולה ב-50% ואז ירד ב-50%. מהו מחירה לאחר העליה והירידה?
				</td>
				<td>
					75 ש"ח
				</td>
				<td>
					
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:right;">
					מחיר ליטר דלק עלה ב-150% ועכשיו מחירו 20 ש"ח. מה היה מחירו לפני העליה?
				</td>
				<td>
					\(16\frac{1}{3}\) ש"ח
				</td>
				<td style="border-bottom:0px;">
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
	</div>
	<!-- math_800_003_ -->
	
	<!-- TABLE DIV --><!-- math_800_004 -->
	<div class="math_800_004" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="5">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="5" style="text-align:center;">
					מכנה משותף, כפל וחילוק שברים
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{3}+\frac{1}{4}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{7}{12}$$
				</td>
				<td>
					חיבור שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{3}{4}-\frac{2}{3}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{1}{12}$$
				</td>
				<td>
					חיסור שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{6}*\frac{4}{8}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{5}{12}$$
				</td>
				<td>
					כפל שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4}{9}:\frac{2}{7}$$
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{14}{9}$$
				</td>
				<td>
					חילוק שברים
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_800_004_ -->
	
	<!-- TABLE DIV --><!-- math_800_005 -->
	<div class="math_800_005" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					להביא את הביטויים הבאים לצורת שבר יחיד (מונה אחד ומכנה אחד)
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9x^3}{(x-9)x}-\frac{3x+2}{(12-x)^2+3}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{4x-(2x^2+3)}{x\sqrt{(x+2)}(2-x)}+\frac{(x-1)(x+1)}{3\sqrt{x^2}}$$
				</td>
				<td>
					מכנה משותף
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{(x-3)\sqrt{x}}{(9-x^2)}:\frac{(x+2)^2\sqrt{x}}{(9+x)(6-2x)}$$
				</td>
				<td>
					מכנה משותף, חלוקת שברים
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{\frac{(2x+7)}{(x-9)}}{(12-6^2)}*\frac{(4x+3)^2\sqrt{\frac{x}{x+2}}}{(6-x)(2-0.5x)}$$
				</td>
				<td>
					מכנה משותף, כפל שברים
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
	</div>
	<!-- math_800_005_ -->
	
	<!-- TABLE DIV --><!-- math_804_001 -->
	<div class="math_804_001" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות קניה ומכירה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804,קיץ,מועד א', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">804,2013,קיץ, מועד ב', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">804,2014,קיץ, מועד א', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_moedg_804.pdf">804,2014,קיץ,מועד ג', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_moedg_804.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_804_001_ -->
	
	<!-- TABLE DIV --><!-- math_804_002 -->
	<div class="math_804_002" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות מילוליות עם אחוזים מבגרויות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804, קיץ, מועד א', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon.pdf">2012,804, קיץ, מועד ב', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">2013,804, קיץ, מועד ב', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">2014,804, קיץ, מועד א', שאלה 01</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_804_002_ -->
	
	<!-- TABLE DIV --><!-- math_804_003 -->
	<div class="math_804_003" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות קיצון
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon.pdf">2012,804, קיץ, מועד א', שאלה 09</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_a804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon.pdf">2012,804, קיץ, מועד ב', שאלה 08</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b804_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconQ-1.pdf">2013,804, קיץ, מועד ב', שאלה 09</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_s_b804_iconA-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr style="border-bottom:0px;">
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8041.pdf">2014,804, קיץ, מועד א', שאלה 08</a>
				</td>
				<td>
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_804.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_804_003_ -->
	
	<!-- TABLE DIV --><!-- math_804_004 -->
	<div class="math_804_004" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="6">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="6" style="text-align:center;">
					גאומטריה אנליטית - מעגל<br>
					<a target="blank" href="books/books.php?mark=02">בני גורן, מתמטיקה, 4 יחידות לימוד, ב'-1, 035804</a>
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					עמודים
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th style="width:25%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					142-143
				</td>
				<td>
					1-9 
				</td>
				<td style="direction:ltr;text-align:center;">
					בספר
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_804_004_ -->
	
	<!-- TABLE DIV --><!-- math_806_001 -->
	<div class="math_806_001" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					בעיות תנועה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b806_icon.pdf">806,2012,קיץ, מועד ב', שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/03/math_2012_s_b806_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_w_806_icon.pdf">806,2013,חורף,שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_2013_w_806_icon-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_8061.pdf">806,2014,קיץ,מועד א',שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_a_summer2014_806.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/math_q_summer2014_moedb_806.pdf">806,2014,קיץ,מועד ב',שאלה 1</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-806.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- math_806_001_ -->
</div>

<!-- PHYSICS OUTSIDE DIV -->
<div id="outside_div_physics" class="header outside_div outside_div_physics">	
		
	<!-- TABLE DIV --><!-- physics_900_001 -->
	<div class="physics_900_001" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					חיכוך
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=679">2003 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=480&ArticleID=680">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/6382009_q2.pdf">2009 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=1034&ArticleID=2786">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/839m_sh2.pdf">2011 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/840m_a2.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a3_summer_2014.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
	</div>
	<!-- physics_900_001_ -->
	
	<!-- TABLE DIV --><!-- physics_900_002 -->
	<div class="physics_900_002" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות חד מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=491&ArticleID=702">2002 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=703&CategoryID=491">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=470&ArticleID=665">2004 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=666&CategoryID=470">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/841m_sh3.pdf">2011 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/842m_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td>
					תנע
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_900_002_ -->
	
	<!-- TABLE DIV --><!-- physics_900_003 -->
	<div class="physics_900_003" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
				תנע - התנגשות דו מימדית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=534&ArticleID=804">2000 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=805&CategoryID=534&Page=1">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1945">2006 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=841&ArticleID=1946">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/779mech_2010_q3.pdf">2010 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/780mech_2010_a3.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
	</div>
	<!-- physics_900_003_ -->
	
	<!-- TABLE DIV --><!-- physics_900_004 -->
	<div class="physics_900_004" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה עם אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/783mech_2010_q5.pdf">2010 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/784mech_2010_a5.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361.pdf">2018 שאלה 6</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/36201-%D7%A1%D7%95%D7%A4%D7%99.pdf">2017 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/%D7%9E%D7%9B%D7%A0%D7%99%D7%A7%D7%94-2017-2.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>-->
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>-->
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=533&ArticleID=802">2000 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=533&ArticleID=803">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=521">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=540&CategoryID=435">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה, אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					שאלות אנרגיה מבגרויות
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/781mech_2010_q4.pdf">2010 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/782mech_2010_a4.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=493&ArticleID=704">2002 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=705&CategoryID=493">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/6422009_q4.pdf">2009 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/643ma4.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=405&ArticleID=520">1998 שאלה 5</a>
				</td>
				<td>
					אנרגיה ועבודה
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=435&ArticleID=539">1999 שאלה 4</a>
				</td>
				<td>
					אנרגיה ועבודה
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=532&ArticleID=800">2000 שאלה 3</a>
				</td>
				<td>
					אנרגיה ועבודה
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_900_004_ -->
	
	<!-- TABLE DIV --><!-- physics_900_005 -->
	<div class="physics_900_005" style="width:100%;">
		<div>
			<h1>בקרוב</h1>
			<hr>
		</div>
		
		<!-- NEW LINE -->
		<br>
	</div>
	<!-- physics_900_005_ -->
	
	<!-- TABLE DIV --><!-- physics_900_006 -->
	<div class="physics_900_006" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה מעגלית אנכית
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_q_summer2016.pdf">2016 שאלה 3</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/mehanika_a2_summer2016.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					נושא
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=481&ArticleID=681">2003 שאלה 3</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2014/6/HEB/36201.PDF">2014 שאלה 3</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="http://meyda.education.gov.il/sheeloney_bagrut/2015/6/HEB/36201.PDF">2015 שאלה 4</a>
				</td>
				<td>
					תנועה מעגלית אנכית
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_900_006_ -->
	
	<!-- TABLE DIV --><!-- physics_900_007 -->
	<div class="physics_900_007" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה עם אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/783mech_2010_q5.pdf">2010 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/_Uploads/dbsAttachedFiles/784mech_2010_a5.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361.pdf">2018 שאלה 6</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2018/07/36361-%D7%A4%D7%AA%D7%A8%D7%95%D7%9F-1.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/36201-%D7%A1%D7%95%D7%A4%D7%99.pdf">2017 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2017/06/%D7%9E%D7%9B%D7%A0%D7%99%D7%A7%D7%94-2017-2.pdf">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>-->
				</td>
				<td style="direction:rtl;text-align:center;">
					<!--<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>-->
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<!-- TABLE DIV -->	
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					כבידה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=772">1999 שאלה 2</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=523&ArticleID=773">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=685">2003 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=483&ArticleID=686">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=474&ArticleID=667">2004 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=668&CategoryID=474">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1949">2006 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=843&ArticleID=1950">פיתרון</a>
				</td>
				<td>
					<!--<i class="em em-trophy"></i>-->
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_900_007_ -->
	
	<!-- TABLE DIV --><!-- physics_900_008 -->
	<div class="physics_900_008" style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה - קפיץ אנכי
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183972231359.pdf">2007 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1183980159312.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה, אנרגיה
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/9174545531.pdf">2005 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1229324776961.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3>מה צריך לעשות</h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					תנועה הרמונית פשוטה - קפיץ אנכי
				</th>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:50%;">
					שאלה
				</th>
				<th style="width:30%;">
					תשובה
				</th>
				<th>
					<i class="em em-trophy"></i>
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?CategoryID=506&ArticleID=728">2001 שאלה 5</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="blank" href="https://aleph.weizmann.ac.il/?ArticleID=729&CategoryID=506">פיתרון</a>
				</td>
				<td>
				
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_900_008_ -->
	
	<!-- TABLE DIV --><!-- physics_900_009 -->
	<div class="physics_900_009" style="width:100%;">
		
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_900_009_ -->
	
	<!-- TABLE DIV --><!-- physics_901_001 -->
	<div class="physics_901_001" style="width:100%;">
		<div>
			<h1>בקרוב</h1>
			<hr>
		</div>
				
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_901_001_ -->
	
	<!-- TABLE DIV --><!-- physics_902_001 -->
	<div class="physics_902_001" style="width:100%;">
		<div>
			<h1>בקרוב</h1>
			<hr>
		</div>
				
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_902_001_ -->
	
	<!-- TABLE DIV --><!-- physics_902_002 -->
	<div class="physics_902_002" style="width:100%;">
		<div>
			<h1>בקרוב</h1>
			<hr>
		</div>
				
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_902_002_ -->
	
	<!-- TABLE DIV --><!-- physics_902_003 -->
	<div class="physics_902_003" style="width:100%;">
		<div>
			<h1>בקרוב</h1>
			<hr>
		</div>
				
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_902_003_ -->
	
	<!-- TABLE DIV --><!-- physics_902_004 -->
	<div class="physics_902_004" style="width:100%;">
	
		<div>
			<h1>בקרוב</h1>
			<hr>
		</div>
				
		<!-- NEW LINE -->
		<br>
		
	</div>
	<!-- physics_902_004_ -->
</div>

<!-- PROGRAMMING OUTSIDE DIV -->
<div class="header outside_div outside_div_programming">	
			
	<!-- TABLE DIV -->
	<div class="programming_700_001" style="width:100%;">
		<!-- NEW LINE -->
		<br>
	</div>
	
	<!-- TABLE DIV -->
	<div class="programming_700_002" style="width:100%;">
		<!-- NEW LINE -->
		<br>
	</div>
	
	<!-- TABLE DIV -->
	<div class="programming_700_003" style="width:100%;">
		<!-- NEW LINE -->
		<br>
	</div>
	
	<!-- TABLE DIV -->
	<div class="programming_700_004" style="width:100%;">
		<!-- NEW LINE -->
		<br>
	</div>
	
	<!-- TABLE DIV -->
	<div class="programming_700_005" style="width:100%;">
		<!-- NEW LINE -->
		<br>
	</div>
	
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
	function currentSlide(n) {
	showSlides(slideIndex = n);
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
			subjects[i].style.display = "none"; 
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
		
		subjects[slideIndex-1].style.display = "block"; 
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
			$(".outside_div").toggle(true);
			$(".outside_div_physics").toggle(false);
			$(".outside_div_programming").toggle(false);
			$(".outside_div_math").toggle(true);
			
			//SHOW ALL 800
			for (i=1;i<10;i++)
			{
				var a = "math_800_00" + i;
				$("." + a ).toggle(true);
			}
			
			//SHOW ALL 804
			for (i=1;i<10;i++)
			{
				var a = "math_804_00" + i;
				$("." + a ).toggle(true);
			}
			
			//SHOW ALL 806
			for (i=1;i<10;i++)
			{
				var a = "math_806_00" + i;
				$("." + a ).toggle(true);
			}
		}
		
		//n ISN'T 0
		else
		{
			$(".inside_div").toggle(false);
			$(".outside_div").toggle(true);
			$(".outside_div_physics").toggle(false);
			$(".outside_div_programming").toggle(false);
			$(".outside_div_math").toggle(true);
			
			//HIDE ALL 800
			for (i=1;i<10;i++)
			{
				var a = "math_800_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 20;
				if(i == new_n)
				{
					var a = "math_800_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
			
			//HIDE ALL 804
			for (i=1;i<10;i++)
			{
				var a = "math_804_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 0;
				if(i == new_n)
				{
					var a = "math_804_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
			
			//HIDE ALL 806
			for (i=1;i<10;i++)
			{
				var a = "math_806_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 10;
				if(i == new_n)
				{
					var a = "math_806_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
		}
	}
	
	if (m == 'physics')
	{
		//SHOW ALL QUESTIONS
		if (n == 0)
		{
			$(".inside_div").toggle(false);
			$(".outside_div").toggle(true);
			$(".outside_div_physics").toggle(true);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(false);
			
			//SHOW ALL 900
			for (i=1;i<10;i++)
			{
				var a = "physics_900_00" + i;
				$("." + a ).toggle(true);
			}
			
			//HIDE ALL 901//*UPDATE TO SHOW
			for (i=1;i<10;i++)
			{
				var a = "physics_901_00" + i;
				$("." + a ).toggle(false);
			}
			
			//HIDE ALL 902//*UPDATE TO SHOW
			for (i=1;i<10;i++)
			{
				var a = "physics_902_00" + i;
				$("." + a ).toggle(false);
			}
			
			//HIDE physics_900_005//*UPDATE TO SHOW
			$(".physics_900_005").toggle(false);
		}
		//n ISN'T 0
		else
		{
			$(".inside_div").toggle(false);
			$(".outside_div").toggle(true);
			$(".outside_div_physics").toggle(true);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(false);
			
			//HIDE ALL 900
			for (i=1;i<10;i++)
			{
				var a = "physics_900_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 0;
				if(i == new_n)
				{
					var a = "physics_900_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
			
			//HIDE ALL 901
			for (i=1;i<10;i++)
			{
				var a = "physics_901_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 10;
				if(i == new_n)
				{
					var a = "physics_901_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
			
			//HIDE ALL 902
			for (i=1;i<10;i++)
			{
				var a = "physics_902_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 20;
				if(i == new_n)
				{
					var a = "physics_902_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
		}
	}
	
	if (m == 'programming')
	{
		//SHOW ALL QUESTIONS
		if (n == 0)
		{
			$(".inside_div").toggle(false);
			$(".outside_div").toggle(true);
			$(".outside_div_physics").toggle(false);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(true);
			
			//SHOW ALL 700
			for (i=1;i<10;i++)
			{
				var a = "programming_700_00" + i;
				$("." + a ).toggle(true);
			}
			
			//SHOW ALL 701
			for (i=1;i<10;i++)
			{
				var a = "programming_701_00" + i;
				$("." + a ).toggle(true);
			}
			
			//SHOW ALL 702
			for (i=1;i<10;i++)
			{
				var a = "programming_902_00" + i;
				$("." + a ).toggle(true);
			}
		}
		//n ISN'T 0
		else
		{
			$(".inside_div").toggle(false);
			$(".outside_div").toggle(true);
			$(".outside_div_physics").toggle(false);
			$(".outside_div_math").toggle(false);
			$(".outside_div_programming").toggle(true);
			
			//HIDE ALL 700
			for (i=1;i<10;i++)
			{
				var a = "programming_700_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 0;
				if(i == new_n)
				{
					var a = "programming_700_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
			
			//HIDE ALL 701
			for (i=1;i<10;i++)
			{
				var a = "programming_701_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 10;
				if(i == new_n)
				{
					var a = "programming_901_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
			
			//HIDE ALL 702
			for (i=1;i<10;i++)
			{
				var a = "programming_702_00" + i;
				$("." + a ).toggle(false);
				
				//SHOW n
				var new_n = n - 20;
				if(i == new_n)
				{
					var a = "programming_702_00" + new_n;
					$("." + a ).toggle(true);
				}
			}
		}
	}
}

</script>
</body>
</html>