<html>
<head>
<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- FAVICON --><!-- OUTPUT 00 -->
	<link rel="icon" type="image/png" href="../css/favicon.ico">
	
	<!-- APPLE TOUCH ICON --><!-- OUTPUT 01 -->
	<link rel="apple-touch-icon" sizes="57x57" href="../css/favicon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="../css/favicon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="../css/favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="../css/favicon.png" />
	
	<!-- CSS --><!-- OUTPUT 02 -->
	<link rel="stylesheet" href="../css/2.css">
	
	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- IOS PHONES -->
	<meta name="format-detection" content="telephone=no">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
		
	<!-- EMOJI CSS -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

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
    padding: 15px 0px;
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
	/*width:100%;*//* CHANGED */
	width:50%;
	text-align:center;
}

.header_100
{
	/*width:100%;*//* CHANGED */
	width:100%;
	text-align:center;
}


*
{
	font-family: 'Secular One', sans-serif;
}

/* LIST *//* https://designshack.net/articles/css/5-simple-and-practical-css-list-styles-you-can-copy-and-paste/ */

* {
	margin: 0;
	padding: 0;
}
 
body {
   /* Background pattern from Toptal Subtle Patterns */
   background-image: url("../img/background/grey_wash_wall.png");
   color:white;
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
  /*border: 5px solid #fff;*/
 
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

/* GENERAL */
.thumbnail_pic
{
	/*width:150px;*//*CHANGED*/
	width:25%;
	padding:0px;
	border:0.5px black solid;
}

.subjects_div
{
	width:75%;
	text-align:right;
}

.to_complete
{
	background-color:yellow;
}

.to_fix
{
	background-color:lightblue;
}

.initial_width
{
	width:initial;
}

#container
{
	width:100%;
	margin:auto;
}

.mistake_div
{
	border:1px black solid;
	overflow:auto;
	width:99%;
	margin:2px 0px;
	background-color:#db7093;
}

#right_div
{
	float:right;
	width:49%;
}

#left_div
{
	float:left;
	width:49%;
}
	
	
/* @media */
@media only screen and (max-width: 710px)
{
	.header
	{
		/*width:100%;*//* CHANGED */
		width:100%;/*CHANGED FROM 50%*/
		text-align:center;
	}
	
	.subjects_div
	{
		width:75%;
	}
	
	#container
	{
		width:100%;
	}
	
	li img
	{
		width:48%;
		margin:1%;
		float: left;
		border: 0px;
	}
	
	#right_div
	{
		text-align:center;
		float:right;
		margin:2px 0px;
		width:49%;
	}
	
	#left_div
	{
		text-align:center;
		float:left;
		margin:2px 0px;
		width:49%;
	}
	
	.mistake_div
	{
		overflow:auto;
		width:98%;
		margin:2px 0px;
	}
}

</style>
</head>

<body style="max-width:720px;margin:auto;">

<!-- CONTENT -->

<div class="header">
	<!-- HEADER -->
	<div style="width:100%;">	
		<h1>טעויות נפוצות</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<div class="header_100">
	
	<!-- CREDITS GALLERY -->
	
	<div id="container">
		<div id="right_div">
			<div class="mistake_div">העתקה לא נכונה של התרגיל</div>
			<div class="mistake_div">חישוב במחשבון</div>
			<div class="mistake_div">טכניקה אלגברית</div>
			<div class="mistake_div">סוגריים</div>
		</div> 

		<div id="left_div">
			<div class="mistake_div">תרגיל קשה מדי</div>
			<div class="mistake_div">מעט מדי זמן להתכונן למבחן</div>
			<div class="mistake_div">פלוס מינוס</div>
			<div class="mistake_div">שרטוט קטן מדי בגאומטריה</div>
		</div> 		
	</div>      
</div>          
                
</body>         
</html>         