<?php
//SESSION
	session_start();

// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	ini_set('memory_limit', '128M');	

//DEBUGGING
	//echo '<pre>';
	//var_dump($_POST);
	//echo '</pre>';
	
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
						
						//YEAR ARRAY
						$year_array = array (
							"year_01"=>"2018",
							"year_02"=>"2019"
						);
						
						//MONTH ARRAY
						$year_array = array (
							"month_01"=>"01",
							"month_02"=>"02",
							"month_03"=>"03",
							"month_04"=>"04",
							"month_05"=>"05",
							"month_06"=>"06",
							"month_07"=>"07",
							"month_08"=>"08",
							"month_09"=>"09",
							"month_10"=>"10",
							"month_11"=>"11",
							"month_12"=>"12"
						);
						
						//MONTH ARRAY
						$day_array = array (
							"day_01"=>"01",
							"day_02"=>"02",
							"day_03"=>"03",
							"day_04"=>"04",
							"day_05"=>"05",
							"day_06"=>"06",
							"day_07"=>"07",
							"day_08"=>"08",
							"day_09"=>"09",
							"day_10"=>"10",
							"day_11"=>"11",
							"day_12"=>"12",
							"day_13"=>"13",
							"day_14"=>"14",
							"day_15"=>"15",
							"day_16"=>"16",
							"day_17"=>"17",
							"day_18"=>"18",
							"day_19"=>"19",
							"day_20"=>"20",
							"day_21"=>"21",
							"day_22"=>"22",
							"day_23"=>"23",
							"day_24"=>"24",
							"day_25"=>"25",
							"day_26"=>"26",
							"day_27"=>"27",
							"day_28"=>"28",
							"day_29"=>"29",
							"day_30"=>"30",
							"day_31"=>"31"
						);
												
						//ANIMAL ARRAY
						$animal_array = array (
							"animal_01"=>"כלב",
							"animal_02"=>"חתול",
							"animal_03"=>"נמלה",
							"animal_04"=>"מרמיטה",
							"animal_05"=>"דוב",
							"animal_06"=>"נמר",
							"animal_07"=>"אריה",
							"animal_08"=>"חתולה",
							"animal_09"=>"כלבה",
							"animal_10"=>"ג'ירפה",
							"animal_11"=>"ג'ירף",
							"animal_12"=>"ציפור",
							"animal_13"=>"יונה",
							"animal_14"=>"לוויתן",
							"animal_15"=>"סוס",
							"animal_16"=>"חמור",
							"animal_17"=>"פרד",
							"animal_18"=>"נשר",
							"animal_19"=>"עיט",
							"animal_20"=>"כריש",
							"animal_21"=>"תרנגול",
							"animal_22"=>"כבש",
							"animal_23"=>"פרה",
							"animal_24"=>"פיל",
							"animal_25"=>"צב",
							"animal_26"=>"חיפושית",
							"animal_27"=>"יתוש",
							"animal_28"=>"דבורה",
							"animal_29"=>"ברחש",
							"animal_30"=>"שימפנזה",
							"animal_31"=>"קוף"
						);
					
						//COLOR ARRAY
						$color_array = array (
							"color_01"=>"כחול",
							"color_02"=>"ירוק",
							"color_03"=>"אפור",
							"color_04"=>"זהב",
							"color_05"=>"אדום",
							"color_06"=>"תכלת",
							"color_07"=>"ירקרק",
							"color_08"=>"ארגמן",
							"color_09"=>"חום",
							"color_10"=>"שחור",
							"color_11"=>"לבן",
							"color_12"=>"אוףוייט",
							"color_13"=>"אפרסק",
							"color_14"=>"משמש",
							"color_15"=>"גויאבה",
							"color_16"=>"טורקיז",
							"color_17"=>"פוקסיה",
							"color_18"=>"פלטינה",
							"color_19"=>"ברזל",
							"color_20"=>"נחושת",
							"color_21"=>"מטריקס",
							"color_22"=>"חזרה לעתיד",
							"color_23"=>"רוקי 04",
							"color_24"=>"יהלום",
							"color_25"=>"פחם",
							"color_26"=>"נחושת שחורה",
							"color_27"=>"ארנולד שווורצנגר",
							"color_28"=>"כחול כהה",
							"color_29"=>"כחול בהיר",
							"color_30"=>"צהוב",
							"color_31"=>"כתום"
						);
						
						//CREATING UPLOAD DIRECTORY
						//FUNCTION CHANGE 0
						function change_0($m)
						{
							for ($i=0;$i<strlen($m);$i++)
							{
								if ($m[$i] == '0')
								{
									$m[$i] = '1';
								}
							}
							return $m;
						}
						
						//FUNCTION MICROTIME_FLOAT
						function microtime_float()
						{
							list($usec, $sec) = explode(" ", microtime());
							return ((float)$usec + (float)$sec);
						}
						
						//SETTING TIMEZONE
						date_default_timezone_set('Africa/Cairo');
						
						//GETTING TIMESTAMP
						$t_s = strval(microtime_float());
						
						//CHANGING 0'S
						$t_s = change_0($t_s);
						
						//GETTING DATE
						$na=date('Y-m-d-His');
						
						//PUTTING TOGETHER FOLDER NAME
						$nam=date('Y-m-d-His-').$t_s."-".$name_array[$_POST["name_field"]];
						
						//SESSION VAR
						$_SESSION['signature'] = $nam;
						
						//GETTING THE LAST DIRECTORY NUMBER
						$directory_content = scandir('../_content');
						
						//REMOVING . and .. FROM COUNT
						$directories_number = count($directory_content)-2;
						
						//MAKING SURE $directories_number IS 3 DIGITS LONG
						//1 TO 10						
						if($directories_number < 9)
						{	
							$add_1 = $directories_number+1;
							$new_directory_number = "00".$add_1;
						}
						
						//10 TO 100
						if (($directories_number < 99)&&($directories_number > 8))
						{
							$add_1 = $directories_number+1;
							$new_directory_number = "0".$add_1;
						}
						
						//100 TO 1000
						if (($directories_number < 999)&&($directories_number > 98))
						{
							$add_1 = $directories_number+1;
							$new_directory_number = $add_1;
						}
						
						//PUTTING IN SESSION VAR
						$_SESSION["new_directory_number"]= $new_directory_number;						
						
						//CREATING A NEW UPLOAD DIRECTORY
						$name_1="../_uploads/$new_directory_number";
						mkdir($name_1,0755);
						
						//CREATING A NEW CONTENT DIRECTORY
						$name_1="../_content/$new_directory_number";
						mkdir($name_1,0755);
						
						//CREATING A NEW LOGS DIRECTORY
						$name_1="../_logs/$new_directory_number";
						mkdir($name_1,0755);
						
						//CREATING POST LOG FILE
						$myfile = fopen("../_logs/$new_directory_number/POST_LOG.txt", "w") or die("Unable to open file!");
						
						//ENTERING POST DATA HEADERS
						$txt = "\n"."POST DATA"."\r\n";
						fwrite($myfile, $txt);
						
						$txt = "\n"."---------------"."\r\n";
						fwrite($myfile, $txt);
						
						//DATE AND TIME DATA
						$txt = "\n".$nam."\r\n";
						fwrite($myfile, $txt);
						
						//SPACE LINE
						$txt = "\n\r\n";
						fwrite($myfile, $txt);
						
						//ENTERING FIELDS
						$txt = "\n"."FIELDS"."\r\n";
						fwrite($myfile, $txt);
						
						$txt = "\n"."---------------"."\r\n";
						fwrite($myfile, $txt);
						
						//ENTERING FIELDS DATA
						for($i=0;$i<count(array_keys($_POST));$i++)
						{
							
							$txt = "\n".$_POST[array_keys($_POST)[$i]]."\r\n";
							fwrite($myfile, $txt);
						}
		
						//CLOSING POST LOG FILE
						fclose($myfile);
						
						//HTML
						echo '<html>
								<head>
									<!-- FAVICON --><!-- OUTPUT 01_NOT NUMBERED -->
									<link rel="icon" type="image/png" href="../css/favicon.ico">
									
									<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
									<link rel="apple-touch-icon" sizes="57x57" href="../css/favicon.png" />
									<link rel="apple-touch-icon" sizes="72x72" href="../css/favicon.png" />
									<link rel="apple-touch-icon" sizes="114x114" href="../css/favicon.png" />
									<link rel="apple-touch-icon" sizes="144x144" href="../css/favicon.png" />
									
									<!-- Encoding -->
									<meta charset="utf-8">
	
									<!-- Viewport -->
									<meta name="viewport" content="width=device-width, initial-scale=1.0">
									
									<!-- Google Fonts -->
									<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
									<!-- JQUERY -->
									<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
								
								<script>
								/* Script written by Adam Khoury @ DevelopPHP.com */
								/* http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP */
								/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
								
									function _(el)
									{
										return document.getElementById(el);
									}
									
									function uploadFile(){
										
										var file = _("file1").files[0];
										//alert(file.name+" | "+file.size+" | "+file.type);
										
										var formdata = new FormData();
										formdata.append("file1", file);
										
										var ajax = new XMLHttpRequest();
										
										ajax.upload.addEventListener("progress", progressHandler, false);
										
										ajax.addEventListener("load", completeHandler, false);
										
										ajax.addEventListener("error", errorHandler, false);
										
										ajax.addEventListener("abort", abortHandler, false);
										
										ajax.open("POST", "file_upload_parser.php");
										
										ajax.send(formdata);
									}
									
									function progressHandler(event)
									{
										_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
										
										var percent = (event.loaded / event.total) * 100;
										
										_("progressBar").value = Math.round(percent);
										
										_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
									}
									
									function completeHandler(event)
									{
										
										_("status").innerHTML = event.target.responseText;
										
										_("progressBar").value = 0;
									}
									
									function errorHandler(event)
									{
										_("status").innerHTML = "Upload Failed";
									}
									
									function abortHandler(event)
									{
										_("status").innerHTML = "Upload Aborted";
									}
									
									//PIC_01
									
									function uploadFile_01(){
										
										var file_01 = _("file_01").files[0];
										//alert(file.name+" | "+file.size+" | "+file.type);
										
										var formdata_01 = new FormData();
										formdata_01.append("file_01", file_01);
										
										var ajax = new XMLHttpRequest();
										
										ajax.upload.addEventListener("progress", progressHandler_01, false);
										
										ajax.addEventListener("load", completeHandler_01, false);
										
										ajax.addEventListener("error", errorHandler_01, false);
										
										ajax.addEventListener("abort", abortHandler_01, false);
										
										ajax.open("POST", "file_upload_parser_01.php");
										
										ajax.send(formdata_01);
										
										$("#cancel").on(\'click\', function () 
										{
											ajax.abort();
										})
									}
									
									function progressHandler_01(event)
									{
										_("loaded_n_total_01").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
										
										var percent = (event.loaded / event.total) * 100;
										
										_("progressBar_01").value = Math.round(percent);
										
										_("status_01").innerHTML = Math.round(percent)+"% uploaded... please wait";
									}
									
									function completeHandler_01(event)
									{
										
										_("status_01").innerHTML = event.target.responseText;
										
										_("progressBar_01").value = 0;
									}
									
									function errorHandler_01(event)
									{
										_("status_01").innerHTML = "Upload Failed";
									}
									
									function abortHandler_01(event)
									{
										_("status_01").innerHTML = "Upload Aborted";
										
										_("progressBar_01").value = 0;
										
										_("loaded_n_total_01").style.display = "none";
									}
								</script>
								
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
						//COMMENTING OUT THE OUTER FORM IN LINES 741, INPUT 753-757, 825-829, 832
						//MAKES THE PROGRESS BAR WORK, AND NO ROTATING IS NEEDED
						echo '	<div style="width:100%;text-align:center;direction:rtl;">
									<!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
										<table style="/*text-align:center;*/margin:auto;">
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
											<tr style="display:none;">
												<td style="text-align:center;">
													<input type="file" name="image_upload_01" id="image_upload_01">
												</td>
											</tr>
											
											<tr>
												<td>
													<!-- FORM 01 -->
													<form id="upload_form_01" enctype="multipart/form-data" method="post" style="direction:ltr;text-align:left;">
														<table style="width:100%;margin:auto;border-collapse:collapse;">
															<tr style="width:100%;">
																<td style="width:100%;">
																	<!-- INPUTS -->
																	<input type="file" name="file_01" id="file_01" style="display:inline;">
																	
																	<input type="button" value="Cancel" id="cancel" style="display:inline;margin-top:2px;float:right;">
																	
																	<input type="button" value="Upload File" onclick="uploadFile_01()" style="display:inline;margin-top:2px;float:right;">
																
																</td>
															</tr>
															<tr>
																<td>
																	<!-- PROGRESS BAR -->
																	<progress style="vertical-align:top;width:100%;" id="progressBar_01" value="0" max="100" style="width:300px;"></progress>
																	
																	<h3 id="status_01"></h3>
																	
																	<p id="loaded_n_total_01"></p> 
																</td>
															</tr>
														</table>
													</form>
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
											
											<tr style="display:none;">
												<td style="text-align:center;">
													<input type="submit" name="submit">
												</td>
											</tr>
											
										</table>
									<!-- </form> -->
								</div>
								
								<!-- HEADER -->
									<h2>HTML5 File Upload Progress Bar Tutorial</h2>
								
									<!-- FORM -->
									<form id="upload_form" enctype="multipart/form-data" method="post">
										<!-- INPUTS -->
										<input type="file" name="file1" id="file1"><br>
										<input type="button" value="Upload File" onclick="uploadFile()">
										
										<!-- PROGRESS BAR -->
										<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
										
										<h3 id="status"></h3>
										
										<p id="loaded_n_total"></p>
									</form>
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

	//CHECKING IS_DIR
	//for($r=0;$r<count($directory_content);$r++)
	//{
	//	echo '<br>';	
	//	echo $directory_content[$r];
	//	echo '<br>';
	//	echo is_dir('../content/'.$directory_content[$r]);
	//	echo '<br>';
	//	
	//	if (is_dir('../content/'.$directory_content[$r]))
	//	{
	//		echo "dir exists"; // always hit here!!!
	//	}
	//	else 
	//	{
	//		echo "dir doesn't exist";
	//	}
	//}

?>