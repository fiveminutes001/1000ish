<?php

//SESSION
	session_start();

// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	ini_set('memory_limit', '128M');	

//W3SCHOOLS UPLOAD FILE - https://www.w3schools.com/php/php_file_upload.asp
	
	//NEW DIRECTORY
	$new_directory_number = $_SESSION["new_directory_number"];
	
	//CREATING UPLOAD LOG FILE
	$myfile = fopen("../_logs/$new_directory_number/UPLOAD_LOG.txt", "w") or die("Unable to open file!");
	
	//ENTERING POST DATA HEADERS
	$txt = "\n"."UPLOAD DATA"."\r\n";
	fwrite($myfile, $txt);
	
	$txt = "\n"."---------------"."\r\n";
	fwrite($myfile, $txt);
	
	//DATE AND TIME DATA
	$txt = "\n".$_SESSION['signature']."\r\n";
	fwrite($myfile, $txt);
	
	//SPACE LINE
	$txt = "\n\r\n";
	fwrite($myfile, $txt);
	
	//ENTERING FIELDS
	$txt = "\n"."IMG NAMES"."\r\n";
	fwrite($myfile, $txt);
	
	$txt = "\n"."---------------"."\r\n";
	fwrite($myfile, $txt);
	
	//ENTERING FIELDS DATA
	$txt = json_encode($_FILES);
	fwrite($myfile, $txt);
	
	//CLOSING UPLOAD LOG FILE
	fclose($myfile);

	//TARGET DIRECTORY
	$target_dir = "../_uploads/".$_SESSION['new_directory_number']."/";
	$target_dir_no_slash = "../_uploads/".$_SESSION['new_directory_number'];
	
	//TARGET FILES
	$target_file_01 = $target_dir . basename($_FILES["image_upload_01"]["name"]);
	$target_file_02 = $target_dir . basename($_FILES["image_upload_02"]["name"]);
	$target_file_03 = $target_dir . basename($_FILES["image_upload_03"]["name"]);
	
	//VAR
	$uploadOk = 1;
	
	//IMAGE TYPE
	$imageFileType_01 = strtolower(pathinfo($target_file_01,PATHINFO_EXTENSION));
	$imageFileType_02 = strtolower(pathinfo($target_file_02,PATHINFO_EXTENSION));
	$imageFileType_03 = strtolower(pathinfo($target_file_03,PATHINFO_EXTENSION));
		
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) 
	{
		//ARRAY OF PHOTO NAMES
		$photo_name = array (
			"1" => "image_upload_01",
			"2" => "image_upload_02",
			"3" => "image_upload_03"
			);
			
		//ARRAY OF TARGET FILES
		$target_file = array (
			"1" => $target_file_01,
		    "2" => $target_file_02,
		    "3" => $target_file_03
		);
		
		//ARRAY OF IMAGE TYPE FILES
		$image_type = array (
			"1" => $imageFileType_01,
		    "2" => $imageFileType_02,
		    "3" => $imageFileType_03
		);
		
		//ARRAY OF PIC NAMES
		$pic_name = array (
			"1" => "01",
		    "2" => "02",
		    "3" => "03"
		);
		
		//ARRAY OF PIC NAMES
		$pic_extension = array (
			"1" => "0",
		    "2" => "0",
		    "3" => "0"
		);
		
		//SESSION VARS
		$_SESSION['from_upload'] = 1;
		$_SESSION['times_rotated_right_01'] = 0;
		$_SESSION['times_rotated_right_02'] = 0;
		$_SESSION['times_rotated_right_03'] = 0;
		
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
				</head>
				<body>';
				
		for ($i=1;$i<4;$i++)
		{	
			//MESSAGE
			$msg = "";
			
			//OK COUNT
			$ok_count = 0;
	
			//IMG WAS UPLOADED
			if($_FILES[$photo_name[$i]]["error"] != 4)
			{
				//ALLOW CERTAIN FILE FORMATS
				if($image_type[$i]  != "jpg" 
				&& $image_type[$i] != "png" 
				&& $image_type[$i] != "jpeg"
				&& $image_type[$i] != "JPG"  
				&& $image_type[$i] != "JPEG"  
				&& $image_type[$i] != "PNG"  
				&& $image_type[$i] != "GIF"  
				&& $image_type[$i] != "gif" ) 
				{
					//MESSAGE
					$msg .="<h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>";
					
					echo "<div style='width:100%;text-align:left;'>";
					$msg .= "<h1>Sorry, Image 0".$i." was not uploaded.</h1>";
					echo $msg;
					echo "</div>";
					echo "<hr>";
					
					//VAR
					$uploadOk = 0;
				}//ALLOW CERTAIN FILE FORMATS
				
				//FILE FORMAT OK
				else
				{
					//DEBUGGING
					//echo "<div style='width:100%;text-align:left;'>";
					//echo "<h1>Image 0".$i." format OK.</h1>";
					//echo "</div>";
					
					//VAR
					$ok_count++;
					
					$check = getimagesize($_FILES[$photo_name[$i]]["tmp_name"]);
					
					if($check !== false) 
					{
						//DEBUGGING
						//echo "<div style='width:100%;text-align:left;'>";
						//echo "<h1>Image 0".$i." is an " . $check["mime"] . ".</h1>";
						//echo "</div>";
						
						//VAR
						$uploadOk = 1;
					} 
					else 
					{
						$msg .= "<h1>Image 0".$i." is not an image.</h1>";
							
						//VAR
						$uploadOk = 0;
					}
					
					// CHECK IF FILE ALREADY EXISTS
					if (file_exists($target_file[$i])) 
					{
						$msg .= "<h1>Sorry, Image 0".$i." already exists.</h1>";
						$ok_count = 0;		
						
						//VAR
						$uploadOk = 0;
					}
					else
					{
						//DEBUGGING
						//echo "<div style='width:100%;text-align:left;'>";
						//echo "<h1>Image 0".$i." wasn't uploaded earlier.</h1>";
						//echo "</div>";
						
						//VAR
						$ok_count++;
						
					}// CHECK IF FILE ALREADY EXISTS
					
					//CHECK FILE SIZE
					if ($_FILES[$photo_name[$i]]["size"] > 5000000) 
					{
						$msg .= "<h1>Sorry, Image 0".$i." is too large.";
							
						//VAR
						$uploadOk = 0;
					}//CHECK FILE SIZE
					
					//FILE TOO BIG
					else
					{
						//DEBUGGING
						//echo "<div style='width:100%;text-align:left;'>";
						//echo "<h1>Image 0".$i." size OK.</h1>";
						//echo "</div>";
						
						//VAR
						$ok_count++;
						
					}//FILE TOO BIG
					
					//CHECK IF $uploadOk IS SET TO 0 BY ERROR
					if ($uploadOk == 0) 
					{
						echo "<div style='width:100%;text-align:left;'>";
						$msg .= "<h1>Sorry, Image 0".$i." was not uploaded.</h1>";
						echo $msg;
						echo "</div>";
						echo "<hr>";
					}//CHECK IF $uploadOk IS SET TO 0 BY ERROR 
					
					//NO ERRORS, FILE READY TO UPLOAD
					else 
					{
						//VARS
						$pic_name[$i] = $_FILES[$photo_name[$i]]['name'];
						$pic_extension[$i] = $image_type[$i];
						
						//ORIGINAL PIC NAME
						$original_pic_name = $target_dir.$new_directory_number."_0".$i.".".$pic_extension[$i];
						$original_pic_short_name = $new_directory_number."_0".$i.".".$pic_extension[$i];
						
						//if (move_uploaded_file($_FILES[$photo_name[$i]]["tmp_name"], $target_file[$i])) 
						if (move_uploaded_file($_FILES[$photo_name[$i]]["tmp_name"], $original_pic_name)) 
						{
							
							echo "<div style='width:100%;text-align:center;'>";
							echo "<h1>Image 0".$i. " has been uploaded.</h1>";
							echo "</div>";	
							echo "<hr>";
							
						} 
						else 
						{
							echo "<div style='width:100%;text-align:center;'>";
							echo "Sorry, there was an error uploading Image 0".$i.".";
							echo "</div>";	
						}
						
						//CHECK ORIENTATION - http://php.net/manual/en/function.exif-read-data.php
						$image = imagecreatefromstring(file_get_contents($original_pic_name));
								
						// $image now contains a resource with the image oriented correctly
											
						//SAVE IMAGE
						imagejpeg($image, $original_pic_name);
						
						//SLEEPING
						//sleep(2);
						
						//ECHO IMG
						//echo "<h1>".$original_pic_name."</h1>";
						
						echo "<div id='div_image_0".$i."' style='width:100%;text-align:center;'>";
						echo "<img src='$target_dir_no_slash/$original_pic_short_name' style='width:50%;'/></div>";
						
						echo "<div style='width:100%;text-align:center;direction:rtl;margin-top:6px;'>
									<button id='rotate_right_0".$i."'>סובב ימינה</button>
								</div>";
						
						echo "<hr>";
						
						//VAR PIC_NAME IS SET
						if(isset($original_pic_name)&&isset($pic_extension[$i]))
						{
							//HTML
							echo '	<script>
										$("#rotate_right_0'.$i.'").click(function() 
										{
											
											$.ajax({
											type: "POST",
											url: "rotate_0'.$i.'.php",
											data: 
											{ 
												image: "0'.$i.'", 
												rotate: "right", 
												file_01: "'.$original_pic_name.'" ,
												extension_01:"'.$pic_extension[$i].'"
											}
											}).done(function( result ) 
											{
												console.log( result );
												
												var a = "<img src=\'".concat(result);
												var b = a.concat("\' style=\'width:50%;\'/>");
												
												console.log(b);
												if(result != "01")
												{
													$("#div_image_0'.$i.'").html(b);
												}
												else
												{
													alert("סובבת מספיק");
												}
											});    
										});
									</script>
								';
						}//VAR PIC_NAME IS SET
					}//NO ERRORS, FILE READY TO UPLOAD
				}//FILE FORMAT OK
			}//FILE WAS UPLOADED
			
			//FILE WASN'T UPLOADED
			else
			{
				echo "<h1>Image 0".$i." wasn't uploaded.</h1>";
			}//FILE WASN'T UPLOADED
		}//FOR LOOP
		echo '
				</body>
				</html>';
	}//POST REQUEST
?>