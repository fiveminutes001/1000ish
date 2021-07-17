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

* 	{
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
	
	#container,#container_cart
	{
		width:75%;
		margin:auto;
	}

/* BUTTON *//*http://jeromejaglale.com/doc/css/pretty_button*/	
	.button 
	{
		/*font: bold 13px "Helvetica Neue", Helvetica, Arial, clean, sans-serif !important;*/
		text-shadow: 0 -1px 1px rgba(0,0,0,0.25), -2px 0 1px rgba(0,0,0,0.25);
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.5);
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.5);
		display: inline-block;
		color: white;
		padding: 5px 10px 5px;
		white-space: nowrap;
		text-decoration: none;
		cursor: pointer;
		background: #A9014B url(button_overlay.png) repeat-x scroll 0 0;/* OUTPUT 03 */
		border-style: none;
		text-align: center;
		overflow: visible;
	}
	
	.button:hover,
	.button:focus 
	{
		background-position: 0 -50px;
		color: white;
	}
	
	.button:active 
	{
		background-position: 0 -100px;
		-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.7);
		-webkit-box-shadow: none;
	}
	
	input[type="submit"],input[type="email"],input[type="text"],input[type="password"]
	{
		font-family:secular one, sans-serif;
	}

	a	{
		text-decoration:none;
		color:#54c539;
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
	
	#container,#container_cart
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
	
	#container_li,#container_li_cart
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
		<h1>הסברים</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div
	
	<!-- HEADER -->
	<div style="width:100%;">	
		<h4>לחץ/י להוספה לעגלה, לחץ/י שוב להסרה</h4>
	</div>
</div>

<!-- CART TOTAL -->
<div id="cart_total_div" class="header" style="position:fixed;top:0px;left:0px;background-color:black;direction:rtl;margin:auto;width:100%;max-width:100%;padding:6px;">
	<!-- HEADER -->
	<div style="width:100%;">	
		<h4>סה"כ לתשלום</h4>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div
	
	<!-- HEADER -->
	<div style="width:100%;">	
		<h2 style="display:inline;"><span id="total_price"></span></h2>
		<h3 style="display:inline;">&nbsp;ש"ח</h3>
	</div>
</div>

<div class="header_100">
	
	<!-- CREDITS GALLERY -->
	
	<div id="container">
		<ul id="container_li">
			<li id="01" data-price="15"><img id="img_01" src="../img/credits/01.jpg" /></li>
			<li id="02" data-price="15"><img id="img_02" src="../img/credits/02.jpg" /></li>
			<li id="03" data-price="15"><img id="img_03" src="../img/credits/03.jpg" /></li>
			<li id="04" data-price="15"><img id="img_04" src="../img/credits/04.jpg" /></li>
			<li id="05" data-price="15"><img id="img_05" src="../img/credits/05.jpg" /></li>
			<li id="06" data-price="15"><img id="img_06" src="../img/credits/06.jpg" /></li>
			<li id="07" data-price="15"><img id="img_07" src="../img/credits/07.jpg" /></li>
			<li id="08" data-price="15"><img id="img_08" src="../img/credits/08.jpg" /></li>
			<li id="09" data-price="15"><img id="img_09" src="../img/credits/09.jpg" /></li>
			<li id="10" data-price="15"><img id="img_10" src="../img/credits/10.jpg" /></li>
			<li id="11" data-price="15"><img id="img_11" src="../img/credits/11.jpg" /></li>
			<li id="12" data-price="15"><img id="img_12" src="../img/credits/12.jpg" /></li>
			<li id="13" data-price="15"><img id="img_13" src="../img/credits/13.jpg" /></li>
			<li id="14" data-price="15"><img id="img_14" src="../img/credits/14.jpg" /></li>
			<!-- <li><a href="#"><img src="http://placehold.it/150x150" /></a></li> -->
		</ul>
	</div>
	
	<!-- HEADER -->
	<div style="width:100%;">	
		<h1>בעגלה</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
	
	<!-- IN CART GALLERY -->
	
	<div id="container_cart">
		<ul id="container_li_cart">
			<li id="01_incart"><img src="../img/credits/01.jpg" /></li>
			<li id="02_incart"><img src="../img/credits/02.jpg" /></li>
			<li id="03_incart"><img src="../img/credits/03.jpg" /></li>
			<li id="04_incart"><img src="../img/credits/04.jpg" /></li>
			<li id="05_incart"><img src="../img/credits/05.jpg" /></li>
			<li id="06_incart"><img src="../img/credits/06.jpg" /></li>
			<li id="07_incart"><img src="../img/credits/07.jpg" /></li>
			<li id="08_incart"><img src="../img/credits/08.jpg" /></li>
			<li id="09_incart"><img src="../img/credits/09.jpg" /></li>
			<li id="10_incart"><img src="../img/credits/10.jpg" /></li>
			<li id="11_incart"><img src="../img/credits/11.jpg" /></li>
			<li id="12_incart"><img src="../img/credits/12.jpg" /></li>
			<li id="13_incart"><img src="../img/credits/13.jpg" /></li>
			<li id="14_incart"><img src="../img/credits/14.jpg" /></li>
			<!-- <li><a href="#"><img src="http://placehold.it/150x150" /></a></li> -->
		</ul>
	</div>
	
	<!-- HEADER -->
	<div class="cart_empty_text" style="width:50%;margin:auto;padding:6px 0px 6px;">
		<h4>
			כלום כרגע
		</h4>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div class="cart_empty_text" style="width:50%;margin:auto;padding:6px 0px 6px;">
		<hr>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div class="payment_button" style="width:50%;margin:auto;padding:6px 0px 6px;">
		<hr>
	</div>
	
	<!-- BUTTON -->
	<div class="payment_button" style="width:50%;margin:auto;padding:0px 0px 6px;">
		<!-- FORM -->
		<form action="https://direct.tranzila.com/ttxexplainit/iframenew.php" class="round" method="post" id="itranpayform" autocomplete="off">
            <input type="hidden" id="sum" name="sum" value="40" />
			<input type="hidden" id="supplier" name="supplier" value="ttxexplainit" />
			<input type="hidden" id="currency" name="currency" />
			<input type="hidden" id="lang" name="lang" value="il" />
			<input class="responsive_input_4 button" style="width:50%;font-size:16px;" type="submit" value="לתשלום" name="register">
		</form>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div class="payment_button" style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<script>
//VAR FOR PAYMENT BUTTON 
var count = 0;
var total = 0;

function in_cart(a,count,total)
{
	//VARS
		var classList = document.getElementById(a).className.split(/\s+/);
		var img_name = "#img_"+a;
		var li_number = "#"+a;
			
	//ALERT DATA
		var li_current = document.getElementById(a);
		var current_item_price = parseInt(li_current.dataset.price);
		
	//FOR LOOP	
	for (var i = 0; i < classList.length; i++)
	{
		if (classList[i] == 'in_cart') 
		{
			//CHANGING PIC IN PAGE
			$(img_name).attr('src','../img/credits/'+a+'.jpg');
			
			//REMOVE IN_CART CLASS
			$(li_number).removeClass("in_cart");
			
			//PAYMENT BUTTON VAR
			count = count-1;
			total = total - current_item_price;
			
			if(count == 0)
			{
				$(".payment_button").hide();
				$("#cart_total_div").hide();
				$(".cart_empty_text").show();
				total = 0;
			}
			else
			{
				$(".payment_button").show();
				$("#cart_total_div").show();
				$(".cart_empty_text").hide();
			}
			
			//BREAKING
			break;
		}
		
		//ADDING PRODUCT TO CART
		else
		{
		//CHANGING PIC IN PAGE
			$(img_name).attr('src','../img/credits/'+a+'_incart.jpg');
			
			//ADDING IN_CART CLASS
			$(li_number).addClass("in_cart");
			
			//PAYMENT BUTTON VAR
			count++;
			total = total + current_item_price;
			
			//PAYMENT BUTTON VAR
			$(".payment_button").show();
			$("#cart_total_div").show();
			$(".cart_empty_text").hide();
			
			//BREAKING
			break;
		}
	}
	
	//RETURNING COUNT
	return [count,total];
}

$(document).ready(function()
{
	//HIDE CART ITEMS
	$("#01_incart").hide();
	$("#02_incart").hide();
	$("#03_incart").hide();
	$("#04_incart").hide();
	$("#05_incart").hide();
	$("#06_incart").hide();
	$("#07_incart").hide();
	$("#08_incart").hide();
	$("#09_incart").hide();
	$("#10_incart").hide();
	$("#11_incart").hide();
	$("#12_incart").hide();
	$("#13_incart").hide();
	$("#14_incart").hide();
	$(".payment_button").hide();
	$("#cart_total_div").hide();
	
	//CLICKS TOGGLE 
	$("#01").on("click", function()
	{
		//TOGGLE PIC IN CART
		$("#01_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("01",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
		
	});
	
	$("#02").on("click", function()
	{
		$("#02_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("02",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#03").on("click", function()
	{
		$("#03_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("03",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#04").on("click", function()
	{
		$("#04_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("04",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#05").on("click", function()
	{
		$("#05_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("05",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#06").on("click", function()
	{
		$("#06_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("06",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#07").on("click", function()
	{
		$("#07_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("07",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#08").on("click", function()
	{
		$("#08_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("08",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#09").on("click", function()
	{
		$("#09_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("09",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#10").on("click", function()
	{
		$("#10_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("10",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#11").on("click", function()
	{
		$("#11_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("11",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#12").on("click", function()
	{
		$("#12_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("12",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#13").on("click", function()
	{
		$("#13_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("13",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	$("#14").on("click", function()
	{
		$("#14_incart").toggle();
		
		//LOOP THROUGH CLASSES TO FIND "IN_CART" AND HIDE/SHOW PIC
		var result_00 = in_cart("14",count,total);
		count = result_00[0];
		total = result_00[1];
		
		//UPDATING TOTAL PRICE
		$("#total_price").html(total);
		document.getElementById("sum").value = total;
	});
	
});

</script>
</body>
</html>