<?php
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
	// GET ALL FROM DRILLS
		$sql1="SELECT * FROM drills";
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
		echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">DB DATA</h2>';
		
		echo '<pre style="text-align:left;direction:ltr;">';
		var_dump($yourArray);
		echo '</pre>';
	
	//ONE ROW AT A TIME - row_4
		$sql1="SELECT * FROM drills";
		$query = mysqli_query($con,$sql1);
		$row_4 = mysqli_fetch_array($query,MYSQLI_NUM);
	
	// GET ONE DRILL FROM DRILLS
		$drill_id="M-805-999-000";
		$sql1="SELECT * FROM drills WHERE DRILL_NUMBER = '$drill_id'";
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
		echo '<h2 style="text-align:left;direction:ltr;margin-top:12px;">'.$drillArray[0]["DRILL_NUMBER"].'</h2>';
		
		echo '<pre style="text-align:left;direction:ltr;">';
		var_dump($drillArray);
		echo '</pre>';
	
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
</style>
</head>
<body>
	
	<!-- TABLE -->
	<h1 style="text-align:center;">נתוני DB</h1>
		
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
	
	<?php
	//OUTPUTING TABLE
		echo '
		<!-- TABLE -->
		<h1 style="text-align:center;">כל השאלות מה-DB</h1>
		
		<!-- TABLE DIV -->
		<div style="width:100%;">
			<table style="width:100%;text-align:center;border:1px black solid;">
				<tr>
					<th colspan="4">
						<h3>'.$yourArray[0]["DRILL_NUMBER"].'</h3>
					</th>
				</tr>
				<tr>
					<th colspan="4" style="text-align:center;">
						'.$yourArray[0]["HEADER_NAME"].'
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
				</tr>';
				for($i=0;$i<count($yourArray);$i++)
				{
				$i_plus_1 = $i+1;
				
				echo 
				'<tr>
					<td>
						0'.$i_plus_1.'
					</td>
					<td style="direction:rtl;text-align:center;">
						<a target="_blank" href="'.$yourArray[$i]["LINK_01"].'">'.$yourArray[$i]["LINK_01_HEADER"].'</a>
					</td>
					<td style="direction:rtl;text-align:center;">
						<a target="_blank" href="'.$yourArray[$i]["LINK_02"].'">פיתרון</a>
					</td>
					<td>
						
					</td>
				</tr>';
				}
			echo '
			</table>
		</div>';
	
	?>
	
	<!-- TABLE -->
	<h1 style="text-align:center;">טבלה עם נתונים מה-DB</h1>
	
	<!-- TABLE DIV -->
	<div style="width:100%;">
		<table style="width:100%;text-align:center;border:1px black solid;">
			<tr>
				<th colspan="4">
					<h3><?php echo $row_4[3];?></h3>
				</th>
			</tr>
			<tr>
				<th colspan="4" style="text-align:center;">
					<?php echo $row_4[1];?>
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
					<a target="_blank" href="<?php echo $row_4[4];?>"><?php echo $row_4[6];?></a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="<?php echo $row_4[5];?>">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/917521.pdf">2006 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1151493408921.pdf">פיתרון</a>
				</td>
				<td>
					
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
					
				</td>
			</tr>
		</table>
	</div>
	
	<!-- EXAMPLE TABLE -->
	<h1 style="text-align:center;">טבלה מקורית לדוגמה</h1>
	<hr>
	<h2 style="text-align:center;">רק שורה ראשונה</h2>
	
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
					<a target="_blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/91756523521.pdf">2005 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1120126382413.pdf">פיתרון</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					02
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/917521.pdf">2006 שאלה 4</a>
				</td>
				<td style="direction:rtl;text-align:center;">
					<a target="_blank" href="https://files.geva.co.il/geva_website/uploads/2016/12/articlefile_1151493408921.pdf">פיתרון</a>
				</td>
				<td>
					
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
					
				</td>
			</tr>
		</table>
	</div>
</body>
</html>