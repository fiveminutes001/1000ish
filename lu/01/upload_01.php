<?php

// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	ini_set('memory_limit', '128M');	

//W3SCHOOLS UPLOAD FILE - https://www.w3schools.com/php/php_file_upload.asp
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image_upload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) 
	{
		$check = getimagesize($_FILES["image_upload"]["tmp_name"]);
		if($check !== false) 
		{
			echo "<div style='width:100%;text-align:center;'>";
			echo "<h1>File is an image - " . $check["mime"] . ".</h1>";
			echo "</div>";
			$uploadOk = 1;
		} 
		else 
		{
			
			echo "<div style='width:100%;text-align:center;'>";
			echo "<h1>File is not an image.</h1>";
			echo "</div>";
			
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) 
	{
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["image_upload"]["size"] > 5000000) 
	{
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) 
	{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} 
	else 
	{
		if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file)) 
		{
			
			echo "<div style='width:100%;text-align:center;'>";
			echo "<h1>The file ". basename( $_FILES["image_upload"]["name"]). " has been uploaded.</h1>";
			echo "</div>";	
		} 
		else 
		{
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
	//CHECK ORIENTATION - http://php.net/manual/en/function.exif-read-data.php
	$image = imagecreatefromstring(file_get_contents('uploads/'.$_FILES['image_upload']['name']));
	$exif = exif_read_data('uploads/'.$_FILES['image_upload']['name']);
	
	echo "exif orientation:";
	echo "<pre>";
	var_dump($exif);
	echo "</pre>";
	
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
		$image = imagerotate($image,0,0);
		
		echo "<div style='width:100%;text-align:center;'>";
		echo "<h1>CASE 6</h1>";
		echo "</div>";
	}
	
	// $image now contains a resource with the image oriented correctly
	
	$_FILES['image_upload']['name'] = substr($_FILES['image_upload']['name'], 0, -5)."_rotated.jpeg";
	
	//SAVE IMAGE
	imagejpeg($image, "uploads/".$_FILES['image_upload']['name']);
	
	sleep(2);
	//ECHO
	
	$pic_name = $_FILES['image_upload']['name'];
	echo $pic_name;
	echo "<div style='width:100%;text-align:center;'>";
	echo "<img src='uploads/$pic_name' style='width:50%;'/>";
	echo "</div>";
	//var_dump($exif);
	//echo "image:";
	//var_dump($image);
?>