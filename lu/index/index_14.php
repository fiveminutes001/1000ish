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
	<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>

	<!-- Links -->
		<!-- EMOJI CSS -->
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
				
		<!-- Styling-->
<style>
	.subjects
	{
		display:none;
	}
	
	.inside_div
	{
		display:none;
	}
	
	#div_people
	{
		display:none;
	}
	
	#div_subjects_button
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
	.mySlides_15,
	.dots_div,
	.div_header_pic
	{
		display: none;
	}
	
	#div_subjects_button,
	#div_subjects_button_02,
	#div_people_button
	{
		cursor:pointer;
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
		color: black;
		font-weight: bold;
		font-size: 18px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		background-color: white;
		border:1px black solid;
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
		/*position: absolute;*/
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
		background-color: #e47177;
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
	
	.twenty_percent
	{
		width:20%;
		overflow:hidden;
		padding:0px 2px;
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
		padding:6px 4px;
	}
	
	.formula_buttons_div_02
	{
		padding:0px 2px;
		width:initial;
		overflow:none;
		float:right;
		margin-top:2px;
		white-space:nowrap;
	}
	
	.formula_buttons_div
	{
		padding:0px 2px;
		width:20%;
		overflow:none;
		float:right;
		margin-top:2px;
	}
	
	.formula_buttons_div>a,
	.formula_buttons_div_02>a
	{
		text-decoration:none;
	}
		
	#div_people_button,
	#div_subjects_button,
	#div_subjects_button_02,
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
	.physics_900_005,
	{
		cursor:pointer;
	}
	
	/*RESPONSIVE IFRAME*/
	.videoWrapper
	{
		position: relative;
		padding-bottom: 56.25%; /* 16:9 */
		padding-top: 25px;
		height: 0;
		-webkit-overflow-scrolling: touch;
		overflow-y: scroll;
	}
	.videoWrapper iframe 
	{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
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
function show_work(a)
{
	//VARS
	var current_name = "";
	var pic_number = "10";
	
	//SETTING NAME AND IMAGE
	if (a == "OMRI")
	{
		current_name="עומרי";
		pic_number = "10";
	}
	
	if (a == "EVYATAR")
	{
		current_name="אביתר";
		pic_number = "10";
	}
	
	if (a == "ITAY")
	{
		current_name="איתי";
		pic_number = "01";
	}
	
	if (a == "YOSHIYAHU")
	{
		current_name="יאשיהו";
		pic_number = "16";
	}
	
	if (a == "GROUP 02")
	{
		current_name="קבוצה 02";
		pic_number = "10";
	}
	
	if (a == "NOA")
	{
		current_name="נעה";
		pic_number = "10";
	}
	
	
	if (a == "DANIEL")
	{
		current_name="דניאל";
		pic_number = "10";
	}
	
	if (a == "SHON")
	{
		current_name="שון";
		pic_number = "16";
	}
	
	if (a == "JOY")
	{
		current_name="ג'וי";
		pic_number = "16";
	}
	
	//SETTING HEADER HTML
	var header_html = "<div style='width:100%;'><h1 style='margin-bottom:0px;display:inline;'>"+ current_name +"</h1></div><div><img src='img/"+ pic_number +".jpg' style='width:100%'></div>";
		
	//PUTTING HEADER HTML IN DIV
	$("#div_result").html(header_html);
	
	//DRILLS
	if(a == "ITAMAR")
	{
		var targ = 
		{
			'drills':['math_800_000_001',
					  'math_800_000_002',
					  'math_800_001_001',
					  'math_800_001_002'],		
			'trophies':function() 
			{
				return this.drills;
			}
		};
	}
	
	if(a == "YOSHIYAHU")
	{
		var targ = 
		{
			'drills':['programming_700_021',
					  'programming_700_020',
					  'programming_700_019',
					  'programming_700_018',
					  'programming_700_017',
					  'programming_700_016',
					  'programming_700_015',
					  'programming_700_014',
					  'programming_700_013',
					  'programming_700_012',
					  'programming_700_011',
					  'programming_700_010',
					  'programming_700_009',
					  'programming_700_008',
					  'programming_700_007',
					  'programming_700_006',
					  'programming_700_005',
					  'programming_700_004',
					  'programming_700_003',
					  'programming_700_002',
					  'programming_700_001'],		
			'trophies':function() 
			{
				return this.drills;
			}
		};
	}
	
	if(a == "OMRI")
	{
		var targ = 
		{
			'drills':['physics_900_008_001',
					  'physics_900_008_002',
					  'physics_900_008_003',
					  'physics_900_004_005'],
			
			'trophies':function() 
			{
				return this.drills;
			}
		};
	}
	
	if(a == "EVYATAR")
	{
		var targ = 
		{
			'drills':['math_804_003',
					  'math_806_001',
					  'physics_900_007_002',
					  'physics_900_004_002']
		};
	}
	
	if(a == "ITAY")
	{
		var targ = 
		{
			'drills':['math_804_004_001',
					  'math_804_003_002',
					  'math_800_003_001',
					  'math_800_005_001',
					  'math_800_005_002',],
					  
			'trophies':function() 
			{
				return this.drills;
			}
		};
	}
	
	if(a == "DANIEL")
	{
		var targ = 
		{
			'drills':['physics_901_001',
					  'physics_902_001_001',
					  'physics_902_001_002']
		};
	}
		
	if(a == "GROUP 02")
	{
		var targ = 
		{
			'drills':['physics_900_008_001',
					  'physics_900_008_002',
					  'physics_900_008_003',
					  'physics_900_009_001',
					  'physics_900_004_005'],
			
			'trophies':function() 
			{
				return this.drills;
			}
		};
	}
	
	if(a == "NOA")
	{
		var targ = 
		{
			'drills':['physics_901_001']
		};
	}
	
	if(a == "SHON")
	{
		var targ = 
		{
			'drills':['programming_700_025']
		};
	}
	
	if(a == "JOY")
	{
		var targ = 
		{
			'drills':['programming_700_024',
					  'programming_700_023',
					  'programming_700_022']
		};
	}
	
	//POST
	$.post("Daniel_5224/index_01.php",{b_1: targ}, function(result)
	{
		result = result + "<h1 style='padding:16px;'><i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i>&nbsp;<i class='em em-crown'></i></h1>";
		
		var current_html = $("#div_result").html();
		$("#div_result").html(current_html + result);
		
		//MATHJAX TO RELOAD
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
				
		//CREATING TROPHIES OBJECT
		var trophies={};
		var a = targ.trophies();
		
		console.log("a: ",a);
		
		//REPLACE _ with -
		var a_01=[];
		
		//READY TO GO GET TABLES BY ID
		for(i=0;i<targ.drills.length;i++)
		{
			var str = a[i];
			var res = str.replace(/_/g, "-");
			var res_01 = res.replace("physics", "P");
			var res_02 = res_01.replace("math", "M");
			var res_03 = res_02.replace("programming", "PR");
			a_01[i] = res_03;
		}
		
		console.log("a_01: ",a_01);
				
		//ADDING DRILLS TO TROPHIES
		for(i=0;i<targ.drills.length;i++)
		{
			trophies[a_01[i]]= [];
		};
			
		//ADDING TROPHIES VALUES
		for(i=0;i<a_01.length;i++)
		{
			//CHECK HOW MANY ROWS IN TABLE
			var x = document.getElementById(a_01[i]).rows.length;
			
			//RELEVANT ROWS = TOTAL ROWS MINUS HEADER ROWS
			var x_minus_3 = x - 3;
			
			//RELEVANT ROW NUMBERS TO BE UPDATED
			for(m=0;m<x_minus_3;m++)
			{
				if(m%2 == 0)
				{
					trophies[a_01[i]][m]='3';
				}
				else
				{
					trophies[a_01[i]][m]='4';
				}
			}
		};	
			
		console.log(trophies);
				
	//LOOP THROUGH TABLES AND PUT TROPHIES IN RELEVANT ROWS
		for(i=0;i<a_01.length;i++)
		{
			//CHECK HOW MANY ROWS IN TABLE
			x_01 = document.getElementById(a_01[i]).rows.length;
			
			//RELEVANT ROWS = TOTAL ROWS MINUS HEADER ROWS
			x_minus_3_01 = x_01 - 3;
			
			//LOOP THROUGH ROWS
			for(m=0;m<x_minus_3_01;m++)
			{
				//HOW MANY CELLS
				var x_02 = document.getElementById(a_01[i]).rows[trophies[a_01[i]][m]].cells.length;
				
				//GET LAST CELL INDEX
				var y_02 = document.getElementById(a_01[i]).rows[trophies[a_01[i]][m]].cells[x_02-1];
				
				//PUT TROPHY IN LAST CELL				
				//*y_02.innerHTML="<i class='em em-trophy'></i>";
			}
		}
	});
	
	//DIV PAGES
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
	else if(a == "NETA" || a == "ODIL" || a == "NAAMA" || a == "DANA" || a == "NOA DANKER" || a == "EVYATAR" || a == "ITAMAR_TA" || a == "DANIEL" || a == "NATALY" || a == "OMRI" || a == "ODED" || a == "YONATAN" || a == "IDOGEN" || a == "BEN" || a == "BEN_PL")
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


function show_targil_02(m,a)
{
	//WINDOW LOCATION
	//$(document.body).animate({
	//		'scrollTop': $('#physics_buttons').offset().top
	//	}, 600);
	//$("html,body").animate({ scrollTop: $('#physics_buttons').offset().top }, "slow");
	//GETTING DATA
	$.post("Daniel_5224/targilim_01.php",{b_1: a}, function(result,b_2,m)
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
	$.post("Daniel_5224/targilim_01.php",{b_1: a}, function(result,b_2,m)
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
	else if(a == "NETA" || a == "ODIL" || a == "NAAMA" || a == "DANA" || a == "NOA DANKER" || a == "EVYATAR" || a == "ITAMAR_TA" || a == "DANIEL" || a == "NATALY" || a == "OMRI" || a == "ODED" || a == "YONATAN" || a == "IDOGEN" || a == "BEN" || a == "BEN_PL" || a == "ITAMAR")
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
		
		if (a == "ITAMAR")
		{
			geometry_sentences = "<div class='formula_buttons_div_02'><a target='blank' href='http://s3-eu-west-1.amazonaws.com/schooly/gymnasia-jerusalem/gymnasia-jerusalem/%D7%9E%D7%A9%D7%A4%D7%98%D7%99%D7%9D_%D7%91%D7%92%D7%99%D7%90%D7%95%D7%9E%D7%98%D7%A8%D7%99%D7%94_%D7%A2%D7%9D_%D7%A9%D7%A8%D7%98%D7%95%D7%98.pdf'><div class='formula_buttons'>גאומטריה</div></a></div>";
			var math_800_000 = "<div id='itamar_work_01' class='formula_buttons_div_02' style='margin-bottom:8px;'><div class='formula_buttons'>פונקציה קוית</div></div>";
			var math_800_001 = "<div id='itamar_work_02' class='formula_buttons_div_02' style='margin-bottom:8px;'><div class='formula_buttons'>תיכון במשולש</div></div>";
			var all_together = math_800_000 + math_800_001 + geometry_sentences;
		}
		
		$("#div_pages").html(all_together);
		
		$("#itamar_work_01").click(function() 
		{
			show_targil_02('math','math_800_000');
		});
		
		$("#itamar_work_02").click(function() 
		{
			show_targil_02('math','math_800_001');
		});
		
		$("#itamar_work_01").click();
	}	
	else
	{
		$("#div_pages").html("");
	}
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
	
	<!-- WHAT DO YOU WANT TO DO DIV -->
	<div id="div_header_pic" class="header">
		<a href="http://promotions.explainit.online">
			<img src="img/header_01.jpg" style="width:100%;">
		</a>
	</div>
	
	<!-- SUBJECTS BUTTONS -->
	<div id="div_subjects" class="header">
		<!-- Slideshow container -->
		<div id="swiper" class="slideshow-container">
		
			<!-- Full-width images with number and  -->
			<div id="physics_pic_div" class="mySlides fade physics">
				<img src="img/10_01.jpg" style="width:100%">
			</div>
			
			<div id="math_pic_div" class="mySlides fade math">
				<img src="img/01_01.jpg" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-musical_score" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו מוזיקלי</h1>
					<i class="em em-musical_keyboard" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="img/003.jpg" style="width:100%">
			</div>
				
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-pizza" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">לקפוץ לקפה בשכונה</h1>
					<i class="em em-coffee" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/15.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-ribbon" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו אומנותי</h1>
					<i class="em em-poodle" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/16.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-frame_with_picture" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו מיוחד</h1>
					<i class="em em-glass_of_milk" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/17.jpg" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-tomato" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו ספונטני</h1>
					<i class="em em-truck" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/05.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-male-teacher" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו מקצועי</h1>
					<i class="em em-bookmark_tabs" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/11.jpg" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-fork_and_knife" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">לאכול משהו אסייתי</h1>
					<i class="em em-dragon_face" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/13.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-moneybag" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו כלכלי</h1>
					<i class="em em-bank" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/14.jpg" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-man-cartwheeling" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו ספורטיבי</h1>
					<i class="em em-weight_lifter" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/07.jpeg" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-call_me_hand" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">משהו ספורטיבי</h1>
					<i class="em em-woman-surfing" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/04.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-raised_hands" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">לתקן את הפלאפון</h1>
					<i class="em em-male-mechanic" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/03.jpeg" style="width:100%">
			</div>
			
			<div class="mySlides fade promotions">
				<div style="padding:0px 8px 12px;">
					<i class="em em-balloon" style="font-size:16px;vertical-align:text-bottom;"></i>
					<h1 style="display:inline;font-size:36px;">מסיבה</h1>
					<i class="em em-birthday" style="font-size:16px;vertical-align:text-bottom;"></i>
				</div>
				
				<img src="promotions/08.jpeg" style="width:100%">
			</div>
			
			<!-- The dots/circles -->
			<div id="dots_div" style="text-align:center;margin:auto;">
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
$("#dots_div").toggle(true);
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