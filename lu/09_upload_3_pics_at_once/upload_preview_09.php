<?php
//SESSION
	session_start();

// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	ini_set('memory_limit', '128M');	

// CHECKING METHOD	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{	
		//CHECKING COUNTRY_08 INPUT
		if(isset($_POST['country_08']) && $_POST['country_08'] == 'דגכדגכדגכדגכ_קןרקןרוק99339443_לכלגךכלגךכלדךגחעלא')
		{
			//CHECKING $_POST["name_field"] LENGTH
			if(isset($_POST['name_field']) && is_string($_POST['name_field']) && strlen($_POST['name_field']) < 12 )
			{ 
				//SESSION VAR
				$_SESSION["ok_flag"] = 0;
				
				//CHECKING FOR > < CHARS
				for ($x = 0;$x < strlen($_POST['name_field']);$x++)
				{
					if(strpos($_POST['name_field'], '<') || strpos($_POST['name_field'], '>'))
					{
						//SESSION VAR
						$_SESSION["ok_flag"]=0;
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - < OR > IN VAR";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
						
						//SENDING
						mail($f,$f_1,$message,$headers);
						
						//BREAK LOOP
						break;
						
						//REDIRECTED TO GOOGLE
						header ("location: http://www.twitter.com");
			
					}
					//CHECK FOR <> OK
					else
					{
						$_SESSION["ok_flag"]++;
					}
				}//CHECKING FOR > < CHARS
				
				//CHECKING FOR > < CHARS YEAR_FIELD
				for ($x = 0;$x < strlen($_POST['year_field']);$x++)
				{
					if(strpos($_POST['year_field'], '<') || strpos($_POST['name_field'], '>'))
					{
						//SESSION VAR
						$_SESSION["ok_flag"]=0;
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - < OR > IN VAR";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
						
						//SENDING
						mail($f,$f_1,$message,$headers);
						
						//BREAK LOOP
						break;
						
						//REDIRECTED TO GOOGLE
						header ("location: http://www.twitter.com");
			
					}
					//CHECK FOR <> OK
					else
					{
						$_SESSION["ok_flag"]++;
					}
				}//CHECKING FOR > < CHARS
				
				//CHECKING FOR > < CHARS MONTH_FIELD
				for ($x = 0;$x < strlen($_POST['month_field']);$x++)
				{
					if(strpos($_POST['month_field'], '<') || strpos($_POST['name_field'], '>'))
					{
						//SESSION VAR
						$_SESSION["ok_flag"]=0;
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - < OR > IN VAR";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
						
						//SENDING
						mail($f,$f_1,$message,$headers);
						
						//BREAK LOOP
						break;
						
						//REDIRECTED TO GOOGLE
						header ("location: http://www.twitter.com");
			
					}
					//CHECK FOR <> OK
					else
					{
						$_SESSION["ok_flag"]++;
					}
				}//CHECKING FOR > < CHARS
				
				//CHECKING FOR > < CHARS DAY_FIELD
				for ($x = 0;$x < strlen($_POST['day_field']);$x++)
				{
					if(strpos($_POST['day_field'], '<') || strpos($_POST['name_field'], '>'))
					{
						//SESSION VAR
						$_SESSION["ok_flag"]=0;
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - < OR > IN VAR";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
						
						//SENDING
						mail($f,$f_1,$message,$headers);
						
						//BREAK LOOP
						break;
						
						//REDIRECTED TO GOOGLE
						header ("location: http://www.twitter.com");
			
					}
					//CHECK FOR <> OK
					else
					{
						$_SESSION["ok_flag"]++;
					}
				}//CHECKING FOR > < CHARS
				
				//CHECKING FOR > < CHARS ANIMAL_FIELD
				for ($x = 0;$x < strlen($_POST['animal_field']);$x++)
				{
					if(strpos($_POST['animal_field'], '<') || strpos($_POST['name_field'], '>'))
					{
						//SESSION VAR
						$_SESSION["ok_flag"]=0;
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - < OR > IN VAR";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
						
						//SENDING
						mail($f,$f_1,$message,$headers);
						
						//BREAK LOOP
						break;
						
						//REDIRECTED TO GOOGLE
						header ("location: http://www.twitter.com");
			
					}
					//CHECK FOR <> OK
					else
					{
						$_SESSION["ok_flag"]++;
					}
				}//CHECKING FOR > < CHARS
				
				//CHECKING FOR > < CHARS ANIMAL_FIELD
				for ($x = 0;$x < strlen($_POST['color_field']);$x++)
				{
					if(strpos($_POST['color_field'], '<') || strpos($_POST['name_field'], '>'))
					{
						//SESSION VAR
						$_SESSION["ok_flag"]=0;
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - < OR > IN VAR";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
						
						//SENDING
						mail($f,$f_1,$message,$headers);
						
						//BREAK LOOP
						break;
						
						//REDIRECTED TO GOOGLE
						header ("location: http://www.twitter.com");
			
					}
					//CHECK FOR <> OK
					else
					{
						$_SESSION["ok_flag"]++;
					}
				}//CHECKING FOR > < CHARS
				
				//<> CHECK OK
				if($_SESSION["ok_flag"] != 0)
				{
					//CHECKING IF UPLOAD ALLOWED
					if($_POST["name_field"] != "name_00" && $_POST["animal_field"] == "animal_07" && $_POST["color_field"] == "color_04" && $_POST["country"] == "איטליה")
					{
						//switch ($_POST["name_field"]) 
						
						//DEBUGGING
						
						//echo '<pre>';
						//echo '<h1>POST:</h1>';
						//var_dump($_POST);
						//echo '<br>';
						//echo '</pre>';
						
						//NAME ARRAY
						$name_array = array (
							"name_01"=>"אביתר",
							"name_02"=>"אודיל",
							"name_03"=>"איתי 01",
							"name_04"=>"איתי 02",
							"name_05"=>"אליס",
							"name_06"=>"איתמר",
							"name_07"=>"ברק",
							"name_08"=>"דוד",
							"name_09"=>"דנה",
							"name_10"=>"יאשיהו",
							"name_11"=>"יונתן",
							"name_12"=>"מעיין",
							"name_13"=>"נטלי",
							"name_14"=>"עדי",
							"name_15"=>"עודד",
							"name_16"=>"עומרי",
							"name_17"=>"עידו 01",
							"name_18"=>"עידו 02",
							"name_19"=>"רועי",
							"name_20"=>"שחר",
							"name_21"=>"קבוצה 01",
							"name_22"=>"קבוצה 02"
						);
						
						//HTML
						echo '<html>
								<head>
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
									<meta name="viewport" content="width=device-width, initial-scale=1.0">
									
									<!-- Google Fonts -->
									<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
									<!-- JQUERY -->
									<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
								<style>
									*
									{
										font-family: "Bellefair", serif;
									}
									
									body 
									{
										max-width:100%;
									}
								</style>
								</head>';
									
						
						//WELCOME MESSAGE
						echo "	<h1 style='text-align:center;direction:rtl;margin-bottom:6px;'>הי ".$name_array[$_POST["name_field"]].",</h1>";
						
						//UPLOAD PREVIEW
						echo '	<div style="width:100%;text-align:center;direction:rtl;">
									<form action="upload.php" method="post" enctype="multipart/form-data">
										<table style="text-align:center;margin:auto;">
											<tr>
												<td>
													בחירת תמונה 01:
												</td>
											</tr>
											<tr>
												<td style="height:150px;width:150px;border:1px black solid;text-align:center;">
												<h1 style="margin:0px;">01</h1>
												</td>
											</tr>
											<tr>
												<td style="text-align:center;">
													<input type="file" name="image_upload_01" id="image_upload_01">
												</td>
											</tr>
											
											<tr>
												<td>
													בחירת תמונה 02:
												</td>
											</tr>
											<tr>
												<td style="height:150px;width:150px;border:1px black solid;text-align:center;">
												<h1 style="margin:0px;">02</h1>
												</td>
											</tr>
											<tr>
												<td style="text-align:center;">
													<input type="file" name="image_upload_02" id="image_upload_02">
												</td>
											</tr>
											
											<tr>
												<td>
													בחירת תמונה 03:
												</td>
											</tr>
											<tr>
												<td style="height:150px;width:150px;border:1px black solid;text-align:center;">
												<h1 style="margin:0px;">03</h1>
												</td>
											</tr>
											<tr>
												<td style="text-align:center;">
													<input type="file" name="image_upload_03" id="image_upload_03">
												</td>
											</tr>
											
											<tr>
												<td style="text-align:center;">
													<input type="submit" name="submit">
												</td>
											</tr>
											
										</table>
									</form>
								</div>
								</body>
								</html>';
					}//UPLOAD ALLOWED
					
					//UPLOAD NOT ALLOWED
					else
					{
						//REDIRECTED TO GOOGLE
						header ("location: http://www.ynet.co.il");
						
						//REPORT MAIL
						$f = "registration@explainit.online";
						$f_1="1000ish - WRONG PASSWORD";
								
						//HEADERS
						$headers = "From: registration@explainit.online\r\n";
						$headers .= "Reply-To:registration@explainit.online\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
						//MESSAGE
						$message = '<html lang="iw" dir="rtl"><body>';
						$message .= '<div style="width:100%;margin:auto;text-align:center;">';
						$message .= '<h4>IP:</h4>';
						$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
						$message .= "</div>";
						$message .= "</body></html>";
			
						//SENDING
						mail($f,$f_1,$message,$headers);
					}
				}//CHECK FOR <> OK*/
			}//CHECKING $_POST["name_field"] LENGTH
		}//COUNTRY_08 OK
		
		//NOT ORIGINAL POST REQUEST 
		else
		{
			//REDIRECTED TO GOOGLE
			header ("location: http://www.youtube.com");
			
			//REPORT MAIL
			$f = "registration@explainit.online";
			$f_1="1000ish - METHOD POST NOT ORIGINAL";
					
			//HEADERS
			$headers = "From: registration@explainit.online\r\n";
			$headers .= "Reply-To:registration@explainit.online\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\r\n";
			
			//MESSAGE
			$message = '<html lang="iw" dir="rtl"><body>';
			$message .= '<div style="width:100%;margin:auto;text-align:center;">';
			$message .= '<h4>IP:</h4>';
			$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
			$message .= "</div>";
			$message .= "</body></html>";
			
			//SENDING
			mail($f,$f_1,$message,$headers);
		}
	}//METHOD POST
	
	//METHOD NOT PODT
	else
	{
		//REDIRECTED TO GOOGLE
		header ("location: http://www.google.com");
		
		//REPORT MAIL
		$f = "registration@explainit.online";
		$f_1="1000ish - METHOD NOT POST";
				
		//HEADERS
		$headers = "From: registration@explainit.online\r\n";
		$headers .= "Reply-To:registration@explainit.online\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";
		
		//MESSAGE
		$message = '<html lang="iw" dir="rtl"><body>';
		$message .= '<div style="width:100%;margin:auto;text-align:center;">';
		$message .= '<h4>IP:</h4>';
		$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
		$message .= "</div>";
		$message .= "</body></html>";
		
		//SENDING
		mail($f,$f_1,$message,$headers);
		
	}
?>