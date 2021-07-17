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
	
</style>
</head>
<body style="max-width:720px;margin:auto;">

<!-- TOP VIDEOS _00 -->
<div class="header">
	<div style="width:100%;display:none;">	
		<h1 style="margin-bottom:0px;display:inline;">שעור חדש</h1>
		
		<div style="width:100%;">
			<form action="upload_multiple/upload_preview.php" method="post" enctype="multipart/form-data">	
				<table>
							
					<tr style="text-align:center;border:0px;">
						<th style="border:0px;width:50px;">
							שם
						</th>
						
						<th style="border:0px;">
							<select name="name_field" style="width:100%;font-size:1em;">
								<option value="name_00">בחר/י</option>
								<option value="name_01">אביתר</option>
								<option value="name_02">אודיל</option>
								<option value="name_03">איתי 01</option>
								<option value="name_04">איתי 02</option>
								<option value="name_05">אליס</option>
								<option value="name_06">איתמר</option>
								<option value="name_07">ברק</option>
								<option value="name_08">דוד</option>
								<option value="name_09">דנה</option>
								<option value="name_10">יאשיהו</option>
								<option value="name_11">יונתן</option>
								<option value="name_12">מעיין</option>
								<option value="name_13">נטלי</option>
								<option value="name_14">עדי</option>
								<option value="name_15">עודד</option>
								<option value="name_16">עומרי</option>
								<option value="name_17">עידו 01</option>
								<option value="name_18">עידו 02</option>
								<option value="name_19">רועי</option>
								<option value="name_20">שחר</option>
								<option value="name_21">קבוצה 01</option>
								<option value="name_22">קבוצה 02</option>
							</select>
						</th>
					</tr>
				</table>
					
				<table>		
					<tr>
						<th style="border:0px;width:50px;">
							תאריך
						</th>
						
						<th style="border:0px;">
							<select name="year_field" style="width:100%;font-size:1em;">
								<option value="year_01">2018</option>
								<option value="year_02">2019</option>
							</select>
						</th>
						
						<th style="border:0px;">
							<select name="month_field" style="width:100%;font-size:1em;">
								<option value="month_01">01</option>
								<option value="month_02">02</option>
								<option value="month_03">03</option>
								<option value="month_04">04</option>
								<option value="month_05">05</option>
								<option value="month_06">06</option>
								<option value="month_07">07</option>
								<option value="month_08">08</option>
								<option value="month_09">09</option>
								<option value="month_10">10</option>
								<option value="month_11">11</option>
								<option value="month_12">12</option>
							</select>
						</th>
						
						<th style="border:0px;">
							<select name="day_field" style="width:100%;font-size:1em;">
								<option value="day_01">01</option>
								<option value="day_02">02</option>
								<option value="day_03">03</option>
								<option value="day_04">04</option>
								<option value="day_05">05</option>
								<option value="day_06">06</option>
								<option value="day_07">07</option>
								<option value="day_08">08</option>
								<option value="day_09">09</option>
								<option value="day_10">10</option>
								<option value="day_11">11</option>
								<option value="day_12">12</option>
								<option value="day_13">13</option>
								<option value="day_14">14</option>
								<option value="day_15">15</option>
								<option value="day_16">16</option>
								<option value="day_17">17</option>
								<option value="day_18">18</option>
								<option value="day_19">19</option>
								<option value="day_20">20</option>
								<option value="day_21">21</option>
								<option value="day_22">22</option>
								<option value="day_23">23</option>
								<option value="day_24">24</option>
								<option value="day_25">25</option>
								<option value="day_26">26</option>
								<option value="day_27">27</option>
								<option value="day_28">28</option>
								<option value="day_29">29</option>
								<option value="day_30">30</option>
								<option value="day_31">31</option>
							</select>
						</th>
					</tr>
				</table>			
				
				<table>
					<tr>
						<th style="border:0px;width:50px;">
							חיה
						</th>
						
						<th style="border:0px;">
							<select name="animal_field" style="width:100%;font-size:1em;">
								<option value="animal_01">כלב</option>
								<option value="animal_02">חתול</option>
								<option value="animal_03">נמלה</option>
								<option value="animal_04">מרמיטה</option>
								<option value="animal_05">דוב</option>
								<option value="animal_06">נמר</option>
								<option value="animal_07">אריה</option>
								<option value="animal_08">חתולה</option>
								<option value="animal_09">כלבה</option>
								<option value="animal_10">ג'ירפה</option>
								<option value="animal_11">ג'ירף</option>
								<option value="animal_12">ציפור</option>
								<option value="animal_13">יונה</option>
								<option value="animal_14">לוויתן</option>
								<option value="animal_15">סוס</option>
								<option value="animal_16">חמור</option>
								<option value="animal_17">פרד</option>
								<option value="animal_18">נשר</option>
								<option value="animal_19">עיט</option>
								<option value="animal_20">כריש</option>
								<option value="animal_21">תרנגול</option>
								<option value="animal_22">כבש</option>
								<option value="animal_23">פרה</option>
								<option value="animal_24">פיל</option>
								<option value="animal_25">צב</option>
								<option value="animal_26">חיפושית</option>
								<option value="animal_27">יתוש</option>
								<option value="animal_28">דבורה</option>
								<option value="animal_29">ברחש</option>
								<option value="animal_30">שימפנזה</option>
								<option value="animal_31">קוף</option>
							</select>
						</th>
					</tr>
				</table>	
				
				<table>	
					<tr>
						<th style="border:0px;width:50px;">
							צבע
						</th>
						
						<th style="border:0px;">
							<select name="color_field" style="width:100%;font-size:1em;">
								<option value="color_01">כחול</option>
								<option value="color_02">ירוק</option>
								<option value="color_03">אפור</option>
								<option value="color_04">זהב</option>
								<option value="color_05">אדום</option>
								<option value="color_06">תכלת</option>
								<option value="color_07">ירקרק</option>
								<option value="color_08">ארגמן</option>
								<option value="color_09">חום</option>
								<option value="color_10">שחור</option>
								<option value="color_11">לבן</option>
								<option value="color_12">אוףוייט</option>
								<option value="color_13">אפרסק</option>
								<option value="color_14">משמש</option>
								<option value="color_15">גויאבה</option>
								<option value="color_16">טורקיז</option>
								<option value="color_17">פוקסיה</option>
								<option value="color_18">פלטינה</option>
								<option value="color_19">ברזל</option>
								<option value="color_20">נחושת</option>
								<option value="color_21">מטריקס</option>
								<option value="color_22">חזרה לעתיד</option>
								<option value="color_23">רוקי 04</option>
								<option value="color_24">יהלום</option>
								<option value="color_25">פחם</option>
								<option value="color_26">נחושת שחורה</option>
								<option value="color_27">ארנולד שווורצנגר</option>
								<option value="color_28">כחול כהה</option>
								<option value="color_29">כחול בהיר</option>
								<option value="color_30">צהוב</option>
								<option value="color_31">כתום</option>
							</select>
						</th>
					</tr>	
				</table>		
						
				<table>
					<tr>	
						<th style="border:0px;width:50px;">
							מדינה
						</th>
						
						<th style="border:0px;">
							<input type="text" name="country" style="height:27px;text-align:center;font-size:1em;">
						</th>
						
						<th style="border:0px;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךחחעלא" name="country_01" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_יןרקןרוק99339443_לכלגךכלגךכלדךחחעלא" name="country_02" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןראןרוק99339443_לכלגךכלגךכלדךחחעלא" name="country_03" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךעחעלא" name="country_04" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךחחעתא" name="country_05" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכלגכ_קןרקןרוק99339443_לכלגךכלגךכלדךחחעלא" name="country_06" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךחכעלא" name="country_07" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךגחעלא" name="country_08" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלכךחחעלא" name="country_09" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךחחעלא" name="country_10" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךחחעגא" name="country_11" style="height:27px;text-align:center;font-size:1em;">
							<input type="hidden" value="דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגגכלדךחחעלא" name="country_12" style="height:27px;text-align:center;font-size:1em;">
						</th>
						
						<td style="border:0px;">
							<input type="submit" value="שלח" style="font-size:1em;padding:0px 20px;float:left;">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">סרטונים מהשעור</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_00 fade">
		<div class="numbertext">3 / 1</div>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/0Wx7geg4ZSk?showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<div class="text"></div>
	</div>
	
	<div class="mySlides_00 fade">
		<div class="numbertext">3 / 2</div>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/ywpzahaBlH8?showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<div class="text"></div>
	</div>
	
	<div class="mySlides_00 fade">
		<div class="numbertext">3 / 3</div>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/dQo6NmXMdaM?showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_00" class="prev" onclick="plusSlides_00(-1)">&#10094;</a>
	<a id="next_00" class="next" onclick="plusSlides_00(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_00" onclick="currentSlide_00(1)"></span> 
		<span class="dot_00" onclick="currentSlide_00(2)"></span> 
		<span class="dot_00" onclick="currentSlide_00(3)"></span> 
	</div>
</div>	

<!-- JOY 15.12.18 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">JOY // 15.12.18</h1>
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
					MISSIONS
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
					&nbsp;Open new text file in Notepad.
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:middle;">
					&lt;!DOCTYPE html&gt;
					<br>
					
				</td>
				<td style="direction:ltr;text-align:left;">
					Enter the following code:
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
					<a href="http://www.1000ish.com/fi/y/y_04.html" style="text-decoration:none;">SAMPLE FILE</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- YOSHIYAHU 14.12.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 12.12.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 07.12.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- YOSHIYAHU 04.12.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- YOSHIYAHU 30.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- YOSHIYAHU 27.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- YOSHIYAHU 23.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- YOSHIYAHU 20.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>



<!-- YOSHIYAHU 16.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 13.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 09.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 02.11.18 -->
<div class="header">
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
					<a href="http://www.1000ish.com/fi/y/y_03.html" style="text-decoration:none;">קובץ לדוגמה</a>
				</td>
				<td>
					DIV שנראה כמו טופס
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- ITAMAR 31.10.18_14 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">איתמר // 31.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_14 fade">
		<div class="numbertext"></div>
			<img src="img/04.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_14 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/IMG_6669.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_14 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/IMG_6670.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_14 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/IMG_6671.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_14 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/IMG_6672.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_14" class="prev" onclick="plusSlides_14(-1)">&#10094;</a>
	<a id="next_14" class="next" onclick="plusSlides_14(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_14" onclick="currentSlide_14(1)"></span> 
		<span class="dot_14" onclick="currentSlide_14(2)"></span> 
		<span class="dot_14" onclick="currentSlide_14(3)"></span> 
		<span class="dot_14" onclick="currentSlide_14(4)"></span> 
		<span class="dot_14" onclick="currentSlide_14(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אנרגיות
				</td>
				<td>
					שאלה עם קפיץ על מישור משופע
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עבודה
				</td>
				<td>
					על גוף במישור משופע
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					חזרה על גדלים יסודיים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- DANA 31.10.18_13 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">דנה // 31.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_13 fade">
		<div class="numbertext"></div>
			<img src="img/11.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_13 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/IMG_6665.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_13 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/IMG_6666.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_13 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/IMG_6667.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_13 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/IMG_6668.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_13" class="prev" onclick="plusSlides_13(-1)">&#10094;</a>
	<a id="next_13" class="next" onclick="plusSlides_13(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_13" onclick="currentSlide_13(1)"></span> 
		<span class="dot_13" onclick="currentSlide_13(2)"></span> 
		<span class="dot_13" onclick="currentSlide_13(3)"></span> 
		<span class="dot_13" onclick="currentSlide_13(4)"></span> 
		<span class="dot_13" onclick="currentSlide_13(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					כוחות
				</td>
				<td>
					חזרה על מציאת כח שקול
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אפקית
				</td>
				<td>
					הסבר
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אפקית
				</td>
				<td>
					שאלה
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- ODIL 31.10.18_12-->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">אודיל // 31.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_12 fade">
		<div class="numbertext"></div>
			<img src="img/11.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_12 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/IMG_6660.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_12 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/IMG_6661.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_12 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/IMG_6662.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_12 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/IMG_6664.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_12" class="prev" onclick="plusSlides_12(-1)">&#10094;</a>
	<a id="next_12" class="next" onclick="plusSlides_12(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_12" onclick="currentSlide_12(1)"></span> 
		<span class="dot_12" onclick="currentSlide_12(2)"></span> 
		<span class="dot_12" onclick="currentSlide_12(3)"></span> 
		<span class="dot_12" onclick="currentSlide_12(4)"></span> 
		<span class="dot_12" onclick="currentSlide_12(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					כוחות
				</td>
				<td>
					חזרה על מציאת כח שקול
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אפקית
				</td>
				<td>
					הסבר
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אפקית
				</td>
				<td>
					שאלה
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- ADI 31.10.18_11 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עדי // 31.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_11 fade">
		<div class="numbertext"></div>
			<img src="img/11.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_11 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/P_01.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_11 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/P_02.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_11 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/P_03.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_11 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/P_04.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_11" class="prev" onclick="plusSlides_11(-1)">&#10094;</a>
	<a id="next_11" class="next" onclick="plusSlides_11(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_11" onclick="currentSlide_11(1)"></span> 
		<span class="dot_11" onclick="currentSlide_11(2)"></span> 
		<span class="dot_11" onclick="currentSlide_11(3)"></span> 
		<span class="dot_11" onclick="currentSlide_11(4)"></span> 
		<span class="dot_11" onclick="currentSlide_11(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					חדו"א/גבולות
				</td>
				<td>
					הסבר
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					חדו"א/גבולות
				</td>
				<td>
					שאלה לדוגמה
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אפקית
				</td>
				<td>
					שאלה
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- 30.10.18 -->
<!-- ROI 30.10.18_10 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">רועי // 30.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_10 fade">
		<div class="numbertext"></div>
			<img src="img/04.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_10 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/01_01.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_10 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/IMG_6654.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_10 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/IMG_6655.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_10 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/IMG_6656.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_10" class="prev" onclick="plusSlides_10(-1)">&#10094;</a>
	<a id="next_10" class="next" onclick="plusSlides_10(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_10" onclick="currentSlide_10(1)"></span> 
		<span class="dot_10" onclick="currentSlide_10(2)"></span> 
		<span class="dot_10" onclick="currentSlide_10(3)"></span> 
		<span class="dot_10" onclick="currentSlide_10(4)"></span> 
		<span class="dot_10" onclick="currentSlide_10(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אנרגיות
				</td>
				<td>
					שאלה עם קפיץ על מישור משופע
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עבודה
				</td>
				<td>
					על גוף במישור משופע
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					חזרה על גדלים יסודיים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- AMIT 30.10.18_09 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עמית // 30.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_09 fade">
		<div class="numbertext"></div>
			<img src="img/04.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 1</div>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/0Wx7geg4ZSk?showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 2</div>
			<img src="img/IMG_6647.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 3</div>
			<img src="img/IMG_6648.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 4</div>
			<img src="img/IMG_6649.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 5</div>
			<img src="img/IMG_6650.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 6</div>
			<img src="img/IMG_6651.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_09 fade">
		<div class="numbertext">7 / 7</div>
			<img src="img/IMG_6652.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_09" class="prev" onclick="plusSlides_09(-1)">&#10094;</a>
	<a id="next_09" class="next" onclick="plusSlides_09(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_09" onclick="currentSlide_09(1)"></span> 
		<span class="dot_09" onclick="currentSlide_09(2)"></span> 
		<span class="dot_09" onclick="currentSlide_09(3)"></span> 
		<span class="dot_09" onclick="currentSlide_09(4)"></span> 
		<span class="dot_09" onclick="currentSlide_09(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אנרגיות
				</td>
				<td>
					שאלה עם קפיץ על מישור משופע
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עבודה
				</td>
				<td>
					על גוף במישור משופע
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					חזרה על גדלים יסודיים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- ITAY LAMED 30.10.18_08 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">איתי למד // 30.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_08 fade">
		<div class="numbertext"></div>
			<img src="img/09.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 1</div>
			<img src="img/IMG_6637.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 2</div>
			<img src="img/IMG_6638.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 3</div>
			<img src="img/IMG_6639.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 4</div>
			<img src="img/IMG_6640.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 5</div>
			<img src="img/IMG_6642.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 6</div>
			<img src="img/IMG_6643.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 7</div>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/ywpzahaBlH8?showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<div class="text"></div>
	</div>
	
	<div class="mySlides_08 fade">
		<div class="numbertext">8 / 8</div>
			<img src="img/IMG_6645.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_08" class="prev" onclick="plusSlides_08(-1)">&#10094;</a>
	<a id="next_08" class="next" onclick="plusSlides_08(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_08" onclick="currentSlide_08(1)"></span> 
		<span class="dot_08" onclick="currentSlide_08(2)"></span> 
		<span class="dot_08" onclick="currentSlide_08(3)"></span> 
		<span class="dot_08" onclick="currentSlide_08(4)"></span> 
		<span class="dot_08" onclick="currentSlide_08(5)"></span> 
		<span class="dot_08" onclick="currentSlide_08(6)"></span> 
		<span class="dot_08" onclick="currentSlide_08(7)"></span> 
		<span class="dot_08" onclick="currentSlide_08(8)"></span> 
		<span class="dot_08" onclick="currentSlide_08(9)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אנרגיות
				</td>
				<td>
					שאלה עם קפיץ על מישור משופע
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עבודה
				</td>
				<td>
					על גוף במישור משופע
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					חזרה על גדלים יסודיים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- SHAHAR 30.10.18_07 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">שחר // 30.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_07 fade">
		<div class="numbertext"></div>
			<img src="img/08.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 1</div>
			<img src="img/IMG_6629.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 2</div>
			<img src="img/IMG_6630.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 3</div>
			<img src="img/IMG_6631.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 4</div>
			<img src="img/IMG_6633.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 5</div>
			<img src="img/IMG_6634.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 6</div>
			<img src="img/IMG_6635.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_07 fade">
		<div class="numbertext">7 / 7</div>
			<img src="img/IMG_6636.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	<!-- Next and previous buttons -->
	<a id="prev_07" class="prev" onclick="plusSlides_07(-1)">&#10094;</a>
	<a id="next_07" class="next" onclick="plusSlides_07(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_07" onclick="currentSlide_07(1)"></span> 
		<span class="dot_07" onclick="currentSlide_07(2)"></span> 
		<span class="dot_07" onclick="currentSlide_07(3)"></span> 
		<span class="dot_07" onclick="currentSlide_07(4)"></span> 
		<span class="dot_07" onclick="currentSlide_07(5)"></span> 
		<span class="dot_07" onclick="currentSlide_07(6)"></span> 
		<span class="dot_07" onclick="currentSlide_07(7)"></span> 
		<span class="dot_07" onclick="currentSlide_07(8)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אנרגיות
				</td>
				<td>
					שאלה עם קפיץ על מישור משופע
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עבודה
				</td>
				<td>
					על גוף במישור משופע
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					חזרה על גדלים יסודיים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- ITAY 30.10.18_06 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">איתי // 30.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_06 fade">
		<div class="numbertext"></div>
			<img src="img/05.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_06 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/IMG_6625.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_06 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/IMG_6626.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_06 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/IMG_6627.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_06 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/IMG_6628.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_06" class="prev" onclick="plusSlides_06(-1)">&#10094;</a>
	<a id="next_06" class="next" onclick="plusSlides_06(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_06" onclick="currentSlide_06(1)"></span> 
		<span class="dot_06" onclick="currentSlide_06(2)"></span> 
		<span class="dot_06" onclick="currentSlide_06(3)"></span> 
		<span class="dot_06" onclick="currentSlide_06(4)"></span> 
		<span class="dot_06" onclick="currentSlide_06(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אנרגיות
				</td>
				<td>
					שאלה עם קפיץ על מישור משופע
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עבודה
				</td>
				<td>
					על גוף במישור משופע
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					חזרה על גדלים יסודיים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- 30.10.18 -->

<!-- AMIT 29.10.18_05 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עמית // 29.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_05 fade">
		<div class="numbertext"></div>
			<img src="img/02.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_05 fade">
		<div class="numbertext">3 / 1</div>
			<img src="img/IMG_6621.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_05 fade">
		<div class="numbertext">3 / 2</div>
			<img src="img/IMG_6622.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_05 fade">
		<div class="numbertext">3 / 3</div>
			<img src="img/IMG_6623.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_05" class="prev" onclick="plusSlides_05(-1)">&#10094;</a>
	<a id="next_05" class="next" onclick="plusSlides_05(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_05" onclick="currentSlide_05(1)"></span> 
		<span class="dot_05" onclick="currentSlide_05(2)"></span> 
		<span class="dot_05" onclick="currentSlide_05(3)"></span> 
		<span class="dot_05" onclick="currentSlide_05(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					חשבון דיפרנציאלי
				</td>
				<td>
					חוקי נגזרות
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					חשבון דיפרנציאלי
				</td>
				<td>
					שאלות עם משיק
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					גאומטריה
				</td>
				<td>
					שאלה עם מעגל
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- ADI 29.10.18_04 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עדי // 29.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_04 fade">
		<div class="numbertext"></div>
			<img src="img/11.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_04 fade">
		<div class="numbertext">3 / 1</div>
			<img src="img/IMG_6618.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_04 fade">
		<div class="numbertext">3 / 2</div>
			<img src="img/IMG_6619.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_04 fade">
		<div class="numbertext">3 / 3</div>
			<img src="img/IMG_6620.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_04" class="prev" onclick="plusSlides_04(-1)">&#10094;</a>
	<a id="next_04" class="next" onclick="plusSlides_04(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_04" onclick="currentSlide_04(1)"></span> 
		<span class="dot_04" onclick="currentSlide_04(2)"></span> 
		<span class="dot_04" onclick="currentSlide_04(3)"></span> 
		<span class="dot_04" onclick="currentSlide_04(4)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אופקית
				</td>
				<td>
					2 האפשרויות עם החיכוך
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית
				</td>
				<td>
					הגדרת תאוצה זויתית ומשיקית
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- DAVID 29.10.18_03 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">דוד // 29.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_03 fade">
		<div class="numbertext"></div>
			<img src="img/10.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_03 fade">
		<div class="numbertext">4 / 1</div>
			<img src="img/IMG_6614.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_03 fade">
		<div class="numbertext">4 / 2</div>
			<img src="img/IMG_6615.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_03 fade">
		<div class="numbertext">4 / 3</div>
			<img src="img/IMG_6616.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_03 fade">
		<div class="numbertext">4 / 4</div>
			<img src="img/IMG_6617.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_03" class="prev" onclick="plusSlides_03(-1)">&#10094;</a>
	<a id="next_03" class="next" onclick="plusSlides_03(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_03" onclick="currentSlide_03(1)"></span> 
		<span class="dot_03" onclick="currentSlide_03(2)"></span> 
		<span class="dot_03" onclick="currentSlide_03(3)"></span> 
		<span class="dot_03" onclick="currentSlide_03(4)"></span> 
		<span class="dot_03" onclick="currentSlide_03(5)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					אלגברה
				</td>
				<td>
					סיפורה של פרבולה
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					אלגברה
				</td>
				<td>
					משוואה ריבועית עם פרמטרים
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- IDO 01 29.10.18_02 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עידו 01 // 29.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides_02 fade">
		<div class="numbertext"></div>
			<img src="img/04.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 1</div>
			<img src="img/IMG_6604.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 2</div>
			<img src="img/IMG_6605.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 3</div>
			<img src="img/IMG_6606.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 4</div>
			<img src="img/IMG_6607.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 5</div>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/dQo6NmXMdaM?showinfo=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 6</div>
			<img src="img/IMG_6609.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides_02 fade">
		<div class="numbertext">8 / 7</div>
			<img src="img/IMG_6610.JPG" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_02" class="prev" onclick="plusSlides_02(-1)">&#10094;</a>
	<a id="next_02" class="next" onclick="plusSlides_02(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
		<span class="dot_02" onclick="currentSlide_02(1)"></span> 
		<span class="dot_02" onclick="currentSlide_02(2)"></span> 
		<span class="dot_02" onclick="currentSlide_02(3)"></span> 
		<span class="dot_02" onclick="currentSlide_02(4)"></span> 
		<span class="dot_02" onclick="currentSlide_02(5)"></span> 
		<span class="dot_02" onclick="currentSlide_02(6)"></span> 
		<span class="dot_02" onclick="currentSlide_02(7)"></span> 
		<span class="dot_02" onclick="currentSlide_02(8)"></span> 
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה מעגלית אנכית
				</td>
				<td>
					החישוב הגאומטרי
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					כבידה
				</td>
				<td>
					הנוסחה החשובה
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- ITAY 28.10.18_01 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">איתי // 28.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<!-- Slideshow container -->
	<div class="slideshow-container">
	
	<!-- Full-width images with number and  -->
	<div class="mySlides fade">
		<div class="numbertext"></div>
		<img src="img/15.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 1</div>
		<img src="img/IMG_6576.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 2</div>
		<img src="img/IMG_6577.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 3</div>
		<img src="img/IMG_6578.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 4</div>
		<img src="img/IMG_6579.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 5</div>
		<img src="img/IMG_6580.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 6</div>
		<img src="img/IMG_6581.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<div class="mySlides fade">
		<div class="numbertext">7 / 7</div>
		<img src="img/IMG_6582.jpg" style="width:100%">
		<div class="text"></div>
	</div>
	
	<!-- Next and previous buttons -->
	<a id="prev_01" class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a id="next_01" class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	
	<!-- The dots/circles -->
	<div style="text-align:center;margin-bottom:16px;">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
	<span class="dot" onclick="currentSlide(4)"></span> 
	<span class="dot" onclick="currentSlide(5)"></span> 
	<span class="dot" onclick="currentSlide(6)"></span> 
	<span class="dot" onclick="currentSlide(7)"></span> 
	<span class="dot" onclick="currentSlide(8)"></span> 
	</div>
	


	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- MAAYAN 27.10.18 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">מעיין // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/11.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- BARAK 27.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">ברק // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/14.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- IDO 02 27.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עידו 02 // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/13.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- IDO 01 27.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עידו 01 // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/12.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- NETA 27.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">נטע // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/10.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- GROUP 01 27.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">קבוצה 01 // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/05.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>


<!-- RONA 27.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">רונה // 27.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/07.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- IDO 01 26.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עידו 01 // 26.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/04.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					נושא
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					כבידה
				</td>
				<td>
					חזרה על משוואת הקרוב לתנועה מעגלית.
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					תנועה הרמונית
				</td>
				<td>
					חזרה על חישוב אומגה ומציאת זמן מחזור יחד עם שיקולי אנרגיה.
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- IDO 02 26.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">עידו 02 // 26.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/09.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					עמוד 99
				</td>
				<td>
					עדי רוזן, מכניקה ניוטונית כרך א', שאלה 88
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td style="direction:ltr;text-align:center;">
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- SHAHAR 26.10.18 -->

<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">שחר // 26.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
		
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-167682.jpeg"> -->
		<img style="width:100%;" src="img/01.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:25%;">
					שאלה
				</th>
				<th>
					הערות
				</th>
			</tr>
			<tr>
				<td>
					01
				</td>
				<td style="direction:ltr;text-align:center;">
					עמוד 322
				</td>
				<td>
					שאלה 11, בני גורן, מתמטיקה 5 יח"ל ב' 1
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:ltr;text-align:center;">
					עמוד 322
				</td>
				<td>
					שאלה 13, בני גורן, מתמטיקה 5 יח"ל ב' 1
				</td>
			</tr>
			
			<tr>
				<td>
					03
				</td>
				<td style="direction:ltr;text-align:center;">
					עמוד 325
				</td>
				<td>
					שאלה 10, בני גורן, מתמטיקה 5 יח"ל ב' 1
				</td>
			</tr>
			
			<tr>
				<td>
					04
				</td>
				<td style="direction:ltr;text-align:center;">
					עמוד 325
				</td>
				<td>
					שאלה 15, בני גורן, מתמטיקה 5 יח"ל ב' 1
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 26.10.18 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 26.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
	
	<!-- <div style="width:50%;margin:auto;"> -->
		<!-- <hr> -->
	<!-- </div> -->
	
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-877695.jpeg"> -->
		<img style="width:100%;" src="img/16.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:45%;">
					HTML
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td style="width:10%;">
					01
				</td>
				<td style="width:45%;direction:ltr;text-align:left;">
					&lt;table&gt;
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
                    <br>
					&lt;/table&gt;
				</td>
				<td>
					מבנה טבלה
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- YOSHIYAHU 21.10.18 -->
<div class="header">
	<div style="width:100%;">	
		<!-- <i class="em em-construction" style="font-size:16px;"></i> -->
		<h1 style="margin-bottom:0px;display:inline;">יאשיהו // 21.10.18</h1>
		<!-- <i class="em em-cookie" style="font-size:16px;"></i> -->
	</div>
	
	<!-- <div style="width:50%;margin:auto;"> -->
		<!-- <hr> -->
	<!-- </div> -->
	
	<div style="width:100%;margin:auto;">
		<!-- <img style="width:100%;" src="img/pexels-photo-877695.jpeg"> -->
		<img style="width:100%;" src="img/16.jpg">
	</div>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th style="width:10%;">
					#
				</th>
				<th style="width:45%;">
					HTML
				</th>
				<th>
					COMMENTS
				</th>
			</tr>
			<tr>
				<td style="width:10%;">
					01
				</td>
				<td style="width:45%;direction:ltr;text-align:center;">
					שעור ראשון
				</td>
				<td>
					הכרות עם החומר
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					<br>
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="width:10%;">
					&nbsp;
				</td>
				<td style="width:45%;">
					
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
</div>

<script>
$( document ).ready(function() 
	{
		<!-- CHANGE DIV HEIGHT -->
	
	});
	
<!-- W3SCHOOLS PIC GALLERY -->
<!-- 00 -->
	var slideIndex = 1;
	showSlides(slideIndex);
	
	// Next/previous controls
	function plusSlides(n) {
	showSlides(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide(n) {
	showSlides(slideIndex = n);
	}
	
	function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1} 
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none"; 
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block"; 
	dots[slideIndex-1].className += " active";
	}

<!-- 00 -->
	var slideIndex = 1;
	showSlides_00(slideIndex);
	
	// Next/previous controls
	function plusSlides_00(n) 
	{
		showSlides_00(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_00(n) 
	{
		showSlides_00(slideIndex = n);
	}
	
	function showSlides_00(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_00");
		var dots = document.getElementsByClassName("dot_00");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
<!-- 02 -->
	var slideIndex = 1;
	showSlides_02(slideIndex);
	
	// Next/previous controls
	function plusSlides_02(n) 
	{
		showSlides_02(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_02(n) 
	{
		showSlides_02(slideIndex = n);
	}
	
	function showSlides_02(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_02");
		var dots = document.getElementsByClassName("dot_02");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
<!-- 03 -->
	var slideIndex = 1;
	showSlides_03(slideIndex);
	
	// Next/previous controls
	function plusSlides_03(n) 
	{
		showSlides_03(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_03(n) 
	{
		showSlides_03(slideIndex = n);
	}
	
	function showSlides_03(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_03");
		var dots = document.getElementsByClassName("dot_03");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
	
<!-- 04 -->
	var slideIndex = 1;
	showSlides_04(slideIndex);
	
	// Next/previous controls
	function plusSlides_04(n) 
	{
		showSlides_04(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_04(n) 
	{
		showSlides_04(slideIndex = n);
	}
	
	function showSlides_04(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_04");
		var dots = document.getElementsByClassName("dot_04");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
		
<!-- 05 -->
	var slideIndex = 1;
	showSlides_05(slideIndex);
	
	// Next/previous controls
	function plusSlides_05(n) 
	{
		showSlides_05(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_05(n) 
	{
		showSlides_05(slideIndex = n);
	}
	
	function showSlides_05(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_05");
		var dots = document.getElementsByClassName("dot_05");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
<!-- 06 -->
	var slideIndex = 1;
	showSlides_06(slideIndex);
	
	// Next/previous controls
	function plusSlides_06(n) 
	{
		showSlides_06(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_06(n) 
	{
		showSlides_06(slideIndex = n);
	}
	
	function showSlides_06(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_06");
		var dots = document.getElementsByClassName("dot_06");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}

<!-- 07 -->
	var slideIndex = 1;
	showSlides_07(slideIndex);
	
	// Next/previous controls
	function plusSlides_07(n) 
	{
		showSlides_07(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_07(n) 
	{
		showSlides_07(slideIndex = n);
	}
	
	function showSlides_07(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_07");
		var dots = document.getElementsByClassName("dot_07");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}

<!-- 08 -->
	var slideIndex = 1;
	showSlides_08(slideIndex);
	
	// Next/previous controls
	function plusSlides_08(n) 
	{
		showSlides_08(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_08(n) 
	{
		showSlides_08(slideIndex = n);
	}
	
	function showSlides_08(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_08");
		var dots = document.getElementsByClassName("dot_08");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
<!-- 10 -->
	var slideIndex = 1;
	showSlides_10(slideIndex);
	
	// Next/previous controls
	function plusSlides_10(n) 
	{
		showSlides_10(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_10(n) 
	{
		showSlides_10(slideIndex = n);
	}
	
	function showSlides_10(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_10");
		var dots = document.getElementsByClassName("dot_10");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
<!-- 11 -->
	var slideIndex = 1;
	showSlides_11(slideIndex);
	
	// Next/previous controls
	function plusSlides_11(n) 
	{
		showSlides_11(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_11(n) 
	{
		showSlides_11(slideIndex = n);
	}
	
	function showSlides_11(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_11");
		var dots = document.getElementsByClassName("dot_11");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
	<!-- 12 -->
	var slideIndex = 1;
	showSlides_12(slideIndex);
	
	// Next/previous controls
	function plusSlides_12(n) 
	{
		showSlides_12(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_12(n) 
	{
		showSlides_12(slideIndex = n);
	}
	
	function showSlides_12(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_12");
		var dots = document.getElementsByClassName("dot_12");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
	<!-- 13 -->
	var slideIndex = 1;
	showSlides_13(slideIndex);
	
	// Next/previous controls
	function plusSlides_13(n) 
	{
		showSlides_13(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_13(n) 
	{
		showSlides_13(slideIndex = n);
	}
	
	function showSlides_13(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_13");
		var dots = document.getElementsByClassName("dot_13");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
	<!-- 14 -->
	var slideIndex = 1;
	showSlides_14(slideIndex);
	
	// Next/previous controls
	function plusSlides_14(n) 
	{
		showSlides_14(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_14(n) 
	{
		showSlides_14(slideIndex = n);
	}
	
	function showSlides_14(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_14");
		var dots = document.getElementsByClassName("dot_14");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
	<!-- 15 -->
	var slideIndex = 1;
	showSlides_15(slideIndex);
	
	// Next/previous controls
	function plusSlides_15(n) 
	{
		showSlides_15(slideIndex += n);
	}
	
	// Thumbnail image controls
	function currentSlide_15(n) 
	{
		showSlides_15(slideIndex = n);
	}
	
	function showSlides_15(n) 
	{
		var i;
		var slides = document.getElementsByClassName("mySlides_15");
		var dots = document.getElementsByClassName("dot_15");
		
		if (n > slides.length) 
		{	
			slideIndex = 1
		} 
		
		if (n < 1) 
		{
			slideIndex = slides.length
		}
		
		for (i = 0; i < slides.length; i++)
		{
			slides[i].style.display = "none"; 
		}
		
		for (i = 0; i < dots.length; i++) 
		{
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}
	
	/* JQUERY SWIPE_01 */
	/* ADD "BOX" CLASS TO DIV NEEDED SWIPING */
	/*	$(function()
		{
			// Bind the swipeHandler callback function to the swipe event on div.box
			$( "div.box_01" ).on( "swiperight", swipeHandler_right );
			$( "div.box_01" ).on( "swipeleft", swipeHandler_left );
		
			// Callback function references the event target and adds the 'swipe' class to it
			function swipeHandler_right( event )
			{
				//$( event.target ).addClass( "swipe" );
				$("#next_01").click();
			}
			
			// Callback function references the event target and adds the 'swipe' class to it
			function swipeHandler_left( event )
			{
				//$( event.target ).removeClass( "swipe" );
				$("#prev_01").click();
			}
		});
	*/
</script>
</body>
</html>