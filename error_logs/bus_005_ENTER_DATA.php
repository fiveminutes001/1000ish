<?php
// data
	$host = 'localhost';
	$username = 'elad189g_1000ish_001';
	$password = 'Magical_1969';
	$db = 'elad189g_1000ish_001';
	
	// creating Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// checking Connection
	if($con)
	{
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;color:purple;"></i>';
		echo '<h2 style="text-align:left;direction:ltr;">CONNECTION STATUS</h2>';
		echo '<h4 style="text-align:left;direction:ltr;">connection ok</h4>';
	}
	else
	{
		die('Could not connect: ' . mysqli_error($con));
	}
		
	// Selecting Database
	mysqli_select_db($con, "elad189g_1000ish_001"); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8mb4");
	mysqli_query($con,"SET character_set_connection=utf8mb4");
	mysqli_query($con,"SET character_set_database=utf8mb4");
	mysqli_query($con,"SET character_set_results=utf8mb4");
	mysqli_query($con,"SET character_set_server=utf8mb4");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	
	// Getting Keys
	//$sql1="SELECT * FROM drills ORDER BY ID DESC LIMIT 1";
	$sql1="SELECT * FROM drills";
	$query = mysqli_query($con,$sql1);
	$row_4 = mysqli_fetch_array($query,MYSQLI_NUM);
	
	echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">DB DATA</h2>';
	
	echo '<pre style="text-align:left;direction:ltr;">';
	var_dump($row_4);
	echo '</pre>';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">POST DATA</h2>';
	
		echo '<pre style="text-align:left;direction:ltr;">';
		var_dump($_POST);
		echo '</pre>';
		
		//INSERT DATA
		$a[0] = $_POST['SET_1'];
		$a[1] = $_POST['HEADER_1'];
		$a[2] = $_POST['NAME_1'];
		$a[3] = $_POST['text_1_line_1'];
		$a[4] = $_POST['link_1_line_1'];
		$a[5] = $_POST['link_2_line_1'];
		
		$b[0] = $_POST['SET_1'];
		$b[1] = $_POST['HEADER_1'];
		$b[2] = $_POST['NAME_1'];
		$b[3] = $_POST['text_1_line_2'];
		$b[4] = $_POST['link_1_line_2'];
		$b[5] = $_POST['link_2_line_2'];
		
		$c[0] = $_POST['SET_1'];
		$c[1] = $_POST['HEADER_1'];
		$c[2] = $_POST['NAME_1'];
		$c[3] = $_POST['text_1_line_3'];
		$c[4] = $_POST['link_1_line_3'];
		$c[5] = $_POST['link_2_line_3'];
		
		$d[0] = $_POST['SET_1'];
		$d[1] = $_POST['HEADER_1'];
		$d[2] = $_POST['NAME_1'];
		$d[3] = $_POST['text_1_line_4'];
		$d[4] = $_POST['link_1_line_4'];
		$d[5] = $_POST['link_2_line_4'];
		
		
		for($m=1;$m<5;$m++)
		{
			if($m == 1)
			{
				$sql1="INSERT INTO drills (HEADER_NAME, SET_NUMBER, DRILL_NUMBER, LINK_01, LINK_02, LINK_01_HEADER, LINK_02_HEADER) VALUES ('$a[2]','$a[0]','$a[1]','$a[4]','$a[5]','$a[3]','????????????')";
				$query = mysqli_query($con,$sql1);
				$m++;
			}
			
			if($m == 2)
			{
				$sql1="INSERT INTO drills (HEADER_NAME, SET_NUMBER, DRILL_NUMBER, LINK_01, LINK_02, LINK_01_HEADER, LINK_02_HEADER) VALUES ('$b[2]','$b[0]','$b[1]','$b[4]','$b[5]','$b[3]','????????????')";
				$query = mysqli_query($con,$sql1);
				$m++;
			}
			
			if($m == 3)
			{
				$sql1="INSERT INTO drills (HEADER_NAME, SET_NUMBER, DRILL_NUMBER, LINK_01, LINK_02, LINK_01_HEADER, LINK_02_HEADER) VALUES ('$c[2]','$c[0]','$c[1]','$c[4]','$c[5]','$c[3]','????????????')";
				$query = mysqli_query($con,$sql1);
				$m++;
			}
			
			if($m == 4)
			{
				$sql1="INSERT INTO drills (HEADER_NAME, SET_NUMBER, DRILL_NUMBER, LINK_01, LINK_02, LINK_01_HEADER, LINK_02_HEADER) VALUES ('$d[2]','$d[0]','$d[1]','$d[4]','$d[5]','$d[3]','????????????')";
				$query = mysqli_query($con,$sql1);
				$m++;
			}
		}
	}
	
	
?>

<html dir="rtl">
<head>
<!-- Document Links -->
	<!-- FAVICON --><!-- OUTPUT 01_NOT NUMBERED -->
	<link rel="icon" type="image/png" href="css/favicon.ico">
	
	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="57x57" href="css/favicon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="css/favicon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="css/favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="css/favicon.png" />
	
	<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- TITLE -->
	<title>?????? ??????</title>
	
	<!-- DESCRIPTION -->
	<meta name="description" content='?????????? ???? ??????????.'>
	
	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
	<!-- MATHJAX -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>
	<!-- MATH LATEX SYNTAX: https://en.wikibooks.org/wiki/LaTeX/Mathematics -->
	<!-- MATHJAX SYNTAX: https://docs.mathjax.org/en/latest/start.html -->
	
	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<!-- EMOJI CSS -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
<style>
* 
{
    font-family: 'Bellefair', serif;
	box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* TABLE */

	table
	{
		border-collapse: collapse;
	}
	
	table td, table th 
	{
		border: 1px solid black;
		padding: 2px;
	}
	
/* INPUT */

input
{
    margin: 4px auto;
    padding: 2px;
    width: 200px;
    text-align: center;
}

.hide_
{
	display:none;
}
</style>
</head>
<body>
	
	<!-- TABLE -->
	<h1 style="text-align:center;">?????????? DB</h1>
		
	<table style="width:100%;text-align:center;border:1px black solid;">
		<tr>
			<td>
				<?php echo $row_4[0];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[1];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[2];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[3];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[4];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[5];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[6];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $row_4[7];?>
			</td>
		</tr>
	</table>
	
	<!-- TABLE -->
	<h1 style="text-align:center;">???????? ????????????</h1>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<form action="bus_005_ENTER_DATA.php" method="POST">
			<table style="width:100%;text-align:center;border:1px black solid;">
				<tr>
					<th colspan="4" style="text-align:center;">
						<input type="submit" value="Submit">
					</th>
				</tr>
				<tr>
					<th colspan="4">
						<h3>????:<input type="text" name="SET_1"></h3>
					</th>
				</tr>
				<tr>
					<th colspan="4" style="text-align:center;">
						<h3>??????????:<input type="text" name="HEADER_1"></h3>
					</th>
				</tr>
				<tr>
					<th colspan="4" style="text-align:center;">
						<h3>????:<input type="text" name="NAME_1"></h3>
					</th>
				</tr>
				<tr>
					<th style="width:10%;">
						#
					</th>
					<th style="width:40%;">
						????????
					</th>
					<th style="width:40%;">
						??????????
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
						????????:
						<br>
						
						<textarea id="text_1" onkeyup="get_data_1()" style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input id="in_1_line_1" class="hide_" type="text" name="text_1_line_1" style="width:100%;">
						<input id="in_2_line_1" type="text" name="link_1_line_1" style="width:100%;">
					</td>
					<td style="direction:rtl;text-align:center;">
						????????????	
						<br>
						
						<textarea style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input type="text" name="link_2_line_1" style="width:100%;">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						02
					</td>
					<td style="direction:rtl;text-align:center;">
						????????:
						<br>
						
						<textarea id="text_2" onkeyup="get_data_2()" style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input id="in_1_line_2" class="hide_" type="text" name="text_1_line_2" style="width:100%;">
						<input id="in_2_line_2" type="text" name="link_1_line_2" style="width:100%;">
					</td>
					<td style="direction:rtl;text-align:center;">
						????????????	
						<br>
						
						<textarea style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input type="text" name="link_2_line_2" style="width:100%;">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						03
					</td>
					<td style="direction:rtl;text-align:center;">
						????????:
						<br>
						
						<textarea id="text_3" onkeyup="get_data_3()" style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input id="in_1_line_3" class="hide_" type="text" name="text_1_line_3" style="width:100%;">
						<input id="in_2_line_3" type="text" name="link_1_line_3" style="width:100%;">
					</td>
					<td style="direction:rtl;text-align:center;">
						????????????	
						<br>
						
						<textarea style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input type="text" name="link_2_line_3" style="width:100%;">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						04
					</td>
					<td style="direction:rtl;text-align:center;">
						????????:
						<br>
						
						<textarea id="text_4" onkeyup="get_data_4()" style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input id="in_1_line_4" class="hide_" type="text" name="text_1_line_4" style="width:100%;">
						<input id="in_2_line_4" type="text" name="link_1_line_4" style="width:100%;">
					</td>
					<td style="direction:rtl;text-align:center;">
						????????????	
						<br>
						
						<textarea style="width:100%;" rows="4" cols="50"></textarea>
						
						<!-- NEW LINE -->
						<br>
						
						????????:
						<br>
						
						<input type="text" name="link_2_line_4" style="width:100%;">
					</td>
					<td>
						
					</td>
				</tr>
			</table>
		</form>
	</div>

<script>
function get_data_1()
{
	var a = $("#text_1").val();
	console.log(a);
	$("#in_1_line_1").val(a);
}

function get_data_2()
{
	var a = $("#text_2").val();
	console.log(a);
	$("#in_1_line_2").val(a);
}

function get_data_3()
{
	var a = $("#text_3").val();
	console.log(a);
	$("#in_1_line_3").val(a);
}

function get_data_4()
{
	var a = $("#text_4").val();
	console.log(a);
	$("#in_1_line_4").val(a);
}
</script>
</body>
</html>