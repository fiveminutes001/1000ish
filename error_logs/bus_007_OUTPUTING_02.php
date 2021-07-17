<?php
//VARS
	$a_01 = "bus_007_OUTPUTING_02.php";

//CONNECTING
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

//CONNECTING DONE.

//QUERIES
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['SET_4'])&&!empty($_POST['SET_4']))
		{
			$drill_id_5 = $_POST['SET_4'];
			$sql1="UPDATE drills SET DISPLAY = '1' WHERE 1";
			$query = mysqli_query($con,$sql1);
		}
		
		else if(isset($_POST['SET_5'])&&!empty($_POST['SET_5']))
		{
			$drill_id_6 = $_POST['SET_5'];
			$sql1="UPDATE drills SET DISPLAY = '0' WHERE 1";
			$query = mysqli_query($con,$sql1);
		}
		
		else if(isset($_POST['SET_2'])&&!empty($_POST['SET_2']))
		{
			$drill_id_2 = $_POST['SET_2'];
			$sql1="UPDATE drills SET DISPLAY = '0' WHERE DRILL_NUMBER = '$drill_id_2'";
			$query = mysqli_query($con,$sql1);
		}
		
		else if(isset($_POST['SET_3'])&&!empty($_POST['SET_3']))
		{
			$drill_id_3 = $_POST['SET_3'];
			$sql1="UPDATE drills SET DISPLAY = '1' WHERE DRILL_NUMBER = '$drill_id_3'";
			$query = mysqli_query($con,$sql1);
		}
		
		else if(isset($_POST['SET_1'])&&!empty($_POST['SET_1']))
		{
			$drill_id_4 = $_POST['SET_1'];
			$sql1="SELECT * FROM drills WHERE SET_NUMBER = '$drill_id_4'";
			$query = mysqli_query($con,$sql1);
				
			// make a new array to hold all your data
			$drillArray = array(); 
			$index = 0;
			
			// loop to store the data in an associative array.
			while($row = mysqli_fetch_assoc($query))
			{ 
				$drillArray[$index] = $row;
				$index++;
			}
			
			//OUTPUT
			//*echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">'.$drillArray[0]["DRILL_NUMBER"].'</h2>';
			//*
			//*echo '<pre style="text-align:left;direction:ltr;">';
			//*var_dump($drillArray);
			//*echo '</pre>';
		}
		
		else if(isset($_POST['HEADER_1'])&&!empty($_POST['HEADER_1']))
		{
			$drill_id_5 = $_POST['HEADER_1'];
			$sql1="SELECT * FROM drills WHERE DRILL_NUMBER = '$drill_id_5'";
			$query = mysqli_query($con,$sql1);
				
			// make a new array to hold all your data
			$drillArray = array(); 
			$index = 0;
			
			// loop to store the data in an associative array.
			while($row = mysqli_fetch_assoc($query))
			{ 
				$drillArray[$index] = $row;
				$index++;
			}
			
			//OUTPUT
			//*echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">'.$drillArray[0]["DRILL_NUMBER"].'</h2>';
			//*
			//*echo '<pre style="text-align:left;direction:ltr;">';
			//*var_dump($drillArray);
			//*echo '</pre>';
		}
		
		else if(isset($_POST['NAME_1'])&&!empty($_POST['NAME_1']))
		{
			$drill_id_6 = $_POST['NAME_1'];
			$sql1="SELECT * FROM drills WHERE HEADER_NAME = '$drill_id_6'";
			$query = mysqli_query($con,$sql1);
				
			// make a new array to hold all your data
			$drillArray = array(); 
			$index = 0;
			
			// loop to store the data in an associative array.
			while($row = mysqli_fetch_assoc($query))
			{ 
				$drillArray[$index] = $row;
				$index++;
			}
			
			//OUTPUT
			//*echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">'.$drillArray[0]["DRILL_NUMBER"].'</h2>';
			//*
			//*echo '<pre style="text-align:left;direction:ltr;">';
			//*var_dump($drillArray);
			//*echo '</pre>';
		}
	}
//QUERIES	
	// GET ALL FROM DRILLS
		$sql1="SELECT * FROM drills WHERE DISPLAY = '1'";
		$query = mysqli_query($con,$sql1);
			
		// make a new array to hold all your data
		$yourArray = array(); 
		$index = 0;
		
		// loop to store the data in an associative array.
		while($row = mysqli_fetch_assoc($query))
		{ 
			$yourArray[$index] = $row;
			$index++;
		}
		
		//OUTPUT
		//*echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">DB DATA</h2>';
		//*
		//*echo '<pre style="text-align:left;direction:ltr;">';
		//*var_dump($yourArray);
		//*echo '</pre>';
	
	//ONE ROW AT A TIME - row_4
		$sql1="SELECT * FROM drills";
		$query = mysqli_query($con,$sql1);
		$row_4 = mysqli_fetch_array($query,MYSQLI_NUM);
	
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
	<title>OUTPUT</title>
	
	<!-- DESCRIPTION -->
	<meta name="description" content='עושים פה שאלות.'>
	
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

body
{
	max-width:720px;
	margin:auto;
}

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
    width: 100px;
    text-align: center;
}

.width_200
{
	width:200px;
}
</style>
</head>
<body>
	<!-- TABLE -->
	<h1 style="text-align:center;">פעולות</h1>
	
	<!-- TABLE DELETE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3>תרגיל:</h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="text" name="SET_2"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="הסתרה">
					</th>
				</tr>
			</form>	
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3>תרגיל:</h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="text" name="SET_3"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="הצגה">
					</th>
				</tr>
			</form>
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3></h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="hidden" name="SET_4" value="2"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="הצג הכל">
					</th>
				</tr>
			</form>
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3></h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="hidden" name="SET_5" value="1"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="הסתר הכל">
					</th>
				</tr>
			</form>
		</table>
	</div>
	
	<!-- NEW LINE -->
	<br>
	
	<!-- TABLE -->
	<h1 style="text-align:center;">חיפוש שאלה</h1>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3>סט:</h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="text" name="SET_1"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="חיפוש">
					</th>
				</tr>
			</form>	
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3>תרגיל:</h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="text" name="HEADER_1"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="חיפוש">
					</th>
				</tr>
			</form>	
			<form action="<?php echo $a_01;?>" method="POST">
				<tr>
					<th style="text-align:center;width:25%;">
						<h3>שם:</h3>
					</th>
					<th style="text-align:center;">
						<h3><input class="width_200" type="text" name="NAME_1"></h3>
					</th>
					<th style="text-align:center;width:25%;">
						<input type="submit" value="חיפוש">
					</th>
				</tr>
			</form>	
		</table>
	</div>
	
	<!-- TABLE -->
	<h1 style="text-align:center;">תוצאות</h1>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3><?php echo $drillArray[0]["DRILL_NUMBER"];?></h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					<?php echo $drillArray[0]["HEADER_NAME"];?>
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
					<a target="_blank" href="<?php echo $drillArray[0]['LINK_01'];?>"><?php echo $drillArray[0]['LINK_01_HEADER'];?></a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[0]['LINK_02'];?>">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[1]['LINK_01'];?>"><?php echo $drillArray[1]['LINK_01_HEADER'];?></a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[1]['LINK_02'];?>">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					03
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[2]['LINK_01'];?>"><?php echo $drillArray[2]['LINK_01_HEADER'];?></a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[2]['LINK_02'];?>">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					04
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[3]['LINK_01'];?>"><?php echo $drillArray[3]['LINK_01_HEADER'];?></a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $drillArray[3]['LINK_02'];?>">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- TABLE -->
	<h1 style="text-align:center;"><?php echo $drillArray[0]["DRILL_NUMBER"];?></h1>
	
	<?php 
	for($i=0;$i<4;$i++)
	{
		echo '
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<td>
					'.$drillArray[$i]["ID"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["HEADER_NAME"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["SET_NUMBER"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["DRILL_NUMBER"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["LINK_01"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["LINK_02"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["LINK_01_HEADER"].'
				</td>
			</tr>
			<tr>
				<td>
					'.$drillArray[$i]["LINK_02_HEADER"].'
				</td>
			</tr>
		</table>
		
		<!-- NEW LINE -->
		<br>';
	}
	
	?>
	<?php
	//OUTPUTING TABLE
	echo '
	<!-- TABLE -->
	<h1 style="text-align:center;">כל השאלות מה-DB</h1>
	';
	if(!empty($yourArray[0]["DRILL_NUMBER"]))
	{
		echo '
		<!-- TABLE DIV -->
		<div style="width:100%;">
			<table style="width:100%;text-align:center;border:1px black solid;">
				<tr>
					<th style="width:10%;">
						#
					</th>
					<th style="width:25%;">
						קוד
					</th>
					<th style="width:25%;">
						שם
					</th>
					<th style="width:30%;">
						שאלה
					</th>
					<th>
						<i class="em em-trophy"></i>
					</th>
				</tr>';
	}
	else
	{
		echo '<h3 style="text-align:center;">אין מה להציג</h3>';
	}
				for($i=0;$i<count($yourArray);$i++)
				{
				$i_plus_1 = $i+1;
				
				echo 
				'<tr>
					<td>
						0'.$i_plus_1.'
					</td>
					<td>
						'.$yourArray[$i]["DRILL_NUMBER"].'
					</td>
					<td style="direction:rtl;text-align:center;">
						'.$yourArray[$i]["HEADER_NAME"].'
					</td>
					<td style="direction:rtl;text-align:center;">
						<a target="_blank" href="'.$yourArray[$i]["LINK_01"].'">'.$yourArray[$i]["LINK_01_HEADER"].'</a>
					</td>
					<td>
						
					</td>
				</tr>';
				}
			echo '
			</table>
		</div>
		
		<!-- NEW LINE -->
		<br>';
	
	?>
</body>
</html>