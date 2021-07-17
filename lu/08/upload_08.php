<?php

//SESSION
	session_start();

// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	ini_set('memory_limit', '128M');	

//W3SCHOOLS UPLOAD FILE - https://www.w3schools.com/php/php_file_upload.asp
	//TARGET DIRECTORY
	$target_dir = "uploads/";
	
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
		//DEBUGGING
		//echo '<pre>';
		//var_dump($_FILES);
		//echo '</pre>';
		
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
			"1" => "0",
		    "2" => "0",
		    "3" => "0"
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
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<!-- JQUERY -->
					<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<style>
					body 
					{
						max-width:100%;
					}
				</style>
				</head>
				<body>';
				
		for ($i=1;$i<4;$i++)
		{	
			//IMG WAS UPLOADED
			if($_FILES[$photo_name[$i]]["error"] != 4)
			{
				$check = getimagesize($_FILES[$photo_name[$i]]["tmp_name"]);
				
				if($check !== false) 
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Image 0".$i." is an image - " . $check["mime"] . ".</h1>";
					echo "</div>";
					
					//VAR
					$uploadOk = 1;
				} 
				else 
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Image 0".$i." is not an image.</h1>";
					echo "</div>";
					
					//VAR
					$uploadOk = 0;
				}
				
				// CHECK IF FILE ALREADY EXISTS
				if (file_exists($target_file[$i])) 
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Sorry, Image 0".$i." already exists.</h1>";
					echo "</div>";
					
					//VAR
					$uploadOk = 0;
				}
				else
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Image 0".$i." wasn't uploaded earlier.</h1>";
					echo "</div>";
					
				}// CHECK IF FILE ALREADY EXISTS
				
				//CHECK FILE SIZE
				if ($_FILES[$photo_name[$i]]["size"] > 5000000) 
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Sorry, Image 0".$i." is too large.";
					echo "</div>";
					
					//VAR
					$uploadOk = 0;
				}//CHECK FILE SIZE
				
				//FILE TOO BIG
				else
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Image 0".$i." size OK.</h1>";
					echo "</div>";
				}//FILE TOO BIG
				
				//ALLOW CERTAIN FILE FORMATS
				if($image_type[$i]  != "jpg" && $image_type[$i] != "png" && $image_type[$i] != "jpeg"
				&& $image_type[$i] != "gif" ) 
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>";
					echo "</div>";
					
					//VAR
					$uploadOk = 0;
				}//ALLOW CERTAIN FILE FORMATS
				
				//FILE FORMAT OK
				else
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Image 0".$i." format OK.</h1>";
					echo "</div>";
				}
				
				//CHECK IF $uploadOk IS SET TO 0 BY ERROR
				if ($uploadOk == 0) 
				{
					echo "<div style='width:100%;text-align:left;'>";
					echo "<h1>Sorry, Image 0".$i." was not uploaded.</h1>";
					echo "</div>";
					echo "<hr>";
				}//CHECK IF $uploadOk IS SET TO 0 BY ERROR 
				
				//NO ERRORS, FILE READY TO UPLOAD
				else 
				{
					if (move_uploaded_file($_FILES[$photo_name[$i]]["tmp_name"], $target_file[$i])) 
					{
						
						echo "<div style='width:100%;text-align:left;'>";
						echo "<h1>Image 0".$i. " has been uploaded.</h1>";
						echo "</div>";	
						echo "<hr>";
					} 
					else 
					{
						echo "<div style='width:100%;text-align:left;'>";
						echo "Sorry, there was an error uploading Image 0".$i.".";
						echo "</div>";	
					}
					
					//CHECK ORIENTATION - http://php.net/manual/en/function.exif-read-data.php
					$image = imagecreatefromstring(file_get_contents('uploads/'.$_FILES[$photo_name[$i]]['name']));
										
					// $image now contains a resource with the image oriented correctly
					//ROTATED IMAGE NAME
					$rotated_image_name = "0".$i.".".$image_type[$i];
					
					//SAVE IMAGE
					imagejpeg($image, "uploads/".$_FILES[$photo_name[$i]]['name']);
					
					//SLEEPING
					//sleep(2);
					
					//ECHO IMG
					$pic_name[$i] = $_FILES[$photo_name[$i]]['name'];
					$pic_extension[$i] = $image_type[$i];
					
					echo "<h1>".$pic_name[$i]."</h1>";
					echo "<div id='div_image_0".$i."' style='width:100%;text-align:center;'>";
					echo "<img src='uploads/$pic_name[$i]' style='width:50%;'/></div>";
					
					echo "<div style='width:100%;text-align:center;direction:rtl;margin-top:6px;'>
								<button id='rotate_right_0".$i."'>סובב ימינה</button>
							</div>";
					
					echo "<hr>";
					
					//VAR PIC_NAME IS SET
					if(isset($pic_name[$i])&&isset($pic_extension[$i]))
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
											file_01: "uploads/'.$pic_name[$i].'" ,
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