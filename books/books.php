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
	<link rel="stylesheet" href="css/2.css">
	
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
   background-image: url("background/grey_wash_wall.png");
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
  float: right;
  margin: 10px;
  /*border: 5px solid #fff;*/
	width:150px;
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
	width:75%;
	margin:auto;
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
		float: right;
		border: 0px;
	}
	
	#container_li
	{
		text-align:center;
	}
}

</style>
</head>

<body style="max-width:720px;margin:auto;">

<!-- CONTENT -->

<div class="header">
	<!-- HEADER -->
	<div style="width:100%;">	
		<h1>ספרים</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<div class="header_100">
	
	<!-- BOOKS GALLERY -->
	
	<div id="container">
		<ul id="container_li">
			<li><img id="img_01" src="img/01.png"/></li>
			<li><img id="img_02" src="img/02.png"/></li>
			<li><img id="img_03" src="img/03.png"/></li>
			<li><img id="img_04" src="img/04.png"/></li>
			<li><img id="img_05" src="img/05.png"/></li>
			<li><img id="img_06" src="img/06.png"/></li>
			<li><img id="img_07" src="img/07.png"/></li>
			<li><img id="img_08" src="img/08.png"/></li>
			<!-- <li><a href="#"><img src="http://placehold.it/150x150" /></a></li> -->
		</ul>
	</div>
</div>
<?php
if ($_GET['mark'])
{
	echo "<script>document.getElementById('img_".$_GET['mark']."').style.boxShadow = '0px 0px 7px rgba(255,255,255,0.9)';</script>";
}
?>
</body>
</html>
