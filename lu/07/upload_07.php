<?php

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
	$target_file_04 = $target_dir . basename($_FILES["image_upload_04"]["name"]);
	$target_file_05 = $target_dir . basename($_FILES["image_upload_05"]["name"]);
	$target_file_06 = $target_dir . basename($_FILES["image_upload_06"]["name"]);
	$target_file_07 = $target_dir . basename($_FILES["image_upload_07"]["name"]);
	
	//VAR
	$uploadOk = 1;
	
	//IMAGE TYPE
	$imageFileType_01 = strtolower(pathinfo($target_file_01,PATHINFO_EXTENSION));
	$imageFileType_02 = strtolower(pathinfo($target_file_02,PATHINFO_EXTENSION));
	$imageFileType_03 = strtolower(pathinfo($target_file_03,PATHINFO_EXTENSION));
	$imageFileType_04 = strtolower(pathinfo($target_file_04,PATHINFO_EXTENSION));
	$imageFileType_05 = strtolower(pathinfo($target_file_05,PATHINFO_EXTENSION));
	$imageFileType_06 = strtolower(pathinfo($target_file_06,PATHINFO_EXTENSION));
	$imageFileType_07 = strtolower(pathinfo($target_file_07,PATHINFO_EXTENSION));
	
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
			"3" => "image_upload_03",
			"4" => "image_upload_04",
			"5" => "image_upload_05",
			"6" => "image_upload_06",
			"7" => "image_upload_07"
			);
			
		//ARRAY OF TARGET FILES
		$target_file = array (
			"1" => $target_file_01,
		    "2" => $target_file_02,
		    "3" => $target_file_03,
		    "4" => $target_file_04,
		    "5" => $target_file_05,
		    "6" => $target_file_06,
		    "7" => $target_file_07
		);
		
		//ARRAY OF IMAGE TYPE FILES
		$image_type = array (
			"1" => $imageFileType_01,
		    "2" => $imageFileType_02,
		    "3" => $imageFileType_03,
		    "4" => $imageFileType_04,
		    "5" => $imageFileType_05,
		    "6" => $imageFileType_06,
		    "7" => $imageFileType_07
		);
		
		for ($i=1;$i<8;$i++)
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
					$exif = exif_read_data('uploads/'.$_FILES[$photo_name[$i]]['name']);
					
					//DEBUGGING
						//echo "exif orientation:";
						//echo "<pre>";
						//var_dump($exif);
						//echo "</pre>";
					
					if($exif['Orientation'] == 8) 
					{
						$image = imagerotate($image,90,0);
						
						echo "<div style='width:100%;text-align:center;'>";
						echo "<h1>CASE 8</h1>";
						echo "</div>";
					}
					
					if($exif['Orientation'] == 3) 
					{
						$image = imagerotate($image,270,0);
						
						echo "<div style='width:100%;text-align:center;'>";
						echo "<h1>CASE 3</h1>";
						echo "</div>";
					}
					
					if($exif['Orientation'] == 6) 
					{
						$image = imagerotate($image,-90,0);
						
						echo "<div style='width:100%;text-align:center;'>";
						echo "<h1>CASE 6</h1>";
						echo "</div>";
					}
					
					// $image now contains a resource with the image oriented correctly
					
					$_FILES[$photo_name[$i]]['name'] = substr($_FILES[$photo_name[$i]]['name'], 0, -4)."_rotated.jpeg";
					
					//SAVE IMAGE
					imagejpeg($image, "uploads/".$_FILES[$photo_name[$i]]['name']);
					
					//SLEEPING
					//sleep(2);
					
					//ECHO IMG
					$pic_name = $_FILES[$photo_name[$i]]['name'];
					echo $pic_name;
					echo "<div style='width:100%;text-align:center;'>";
					echo "<img src='uploads/$pic_name' style='width:50%;'/>";
					echo "</div>";
					
					//DEBUGGING
					
					//var_dump($exif);
					//echo "image:";
					//var_dump($image);
				
				}//NO ERRORS, FILE READY TO UPLOAD
			}//FILE WAS UPLOADED
			
			//FILE WASN'T UPLOADED
			else
			{
				echo "<h1>Image 0".$i." wasn't uploaded.</h1>";
			}//FILE WASN'T UPLOADED
		}//FOR LOOP
	}//POST REQUEST
?>