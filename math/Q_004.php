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
	
	body {
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
		background-color: rgba(0,0,0,0.8);
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
	.button_
	{
		width:20%;
		//max-width:12.5%;
		//overflow:hidden;
		float:right;
	}
	
	.to_complete
	{
		width:96%;
		//overflow:hidden;
		margin:2px;
		padding:0px 2px;
		border:1px black solid;
		float:right;
		background-color:green;
		color:white;
	}
	
	@media only screen and (max-width: 500px)
	{
		
		.button_
		{
			width:25%;
		}
	}	
					
</style>
</head>
<body style="max-width:720px;margin:auto;">

<!-- DIV_RESULT -->
<div class="header" id="div_result"></div>

<!-- ITAMAR --><!-- 05.02.19 -->
<div class="header">
	<div style="width:100%;">	
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 05.02.19</h1>
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
		<!-- Full-width images with number and  -->
		<div class="mySlides_16 fade">
			<div class="numbertext"></div>
				<img src="../img/01.jpg" style="width:100%">
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
				<th>
					שאלה
				</th>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9}{1.5x}-\frac{4}{x} = \frac{12}{3x}-\frac{9}{4.5x}$$
				</td>
			</tr>
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th>
					תשובה
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					$$\frac{9}{1.5x}-\frac{4}{x} = \frac{12}{3x}-\frac{9}{4.5x}$$
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<b>מכנה משותף: 4.5x</b>
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					$$\frac{3*9}{4.5x}-\frac{4.5*4}{4.5x} = \frac{1.5*12}{4.5x}-\frac{9}{4.5x}$$
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					$$\frac{27}{4.5x}-\frac{18}{4.5x} = \frac{18}{4.5x}-\frac{9}{4.5x}$$
				</td>
			</tr>
			<tr>
				<td>
					05
				</td>
				<td style="direction:rtl;text-align:center;">
					<b>הכפלה במכנה המשותף 4.5x</b>
				</td>
			</tr>
			<tr>
				<td>
					06
				</td>
				<td style="direction:rtl;text-align:center;">
					$$27-18 = 18-9$$
				</td>
			</tr>
			<tr>
				<td>
					07
				</td>
				<td style="direction:rtl;text-align:center;">
					$$9 = 9$$
				</td>
			</tr>
			<tr>
				<td>
					08
				</td>
				<td style="direction:rtl;text-align:center;">
					<b>פסוק אמת, כל x בתחום ההגדרה מהווה פיתרון</b>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- ITAMAR_ -->

</body>
</html>