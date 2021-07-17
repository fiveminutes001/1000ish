<?php
//SESSION
	session_start();

// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	ini_set('memory_limit', '128M');	

// CHECKING SESSION VAR
	if($_SESSION['from_upload'] == 1)
	{
		//echo '<h1>SESSION OK</h1><br>';
		
		//SESSION VAR
		$_SESSION['times_rotated_right_01']++;
		$_SESSION['rotated_01'] = 0;
		
		//DEBUGGING
			//echo '<pre>';
			//var_dump($_POST);
			//echo '</pre>';
			
			//echo '<pre>';
			//echo '<h1>$_SESSION times_rotated_right:</h1>';
			//echo $_SESSION['times_rotated_right'];
			//echo '</pre>';
			
		//CREATING IMAGE
		$image = imagecreatefromstring(file_get_contents($_POST['file_01']));
		
		//GETTING FULL IMAGE NAME
		$original_image_name = substr($_POST['file_01'], 8, strlen($_POST['file_01']));
		
		//GETTING IMAGE NAME WITHOUT EXTENSION
		if((substr($original_image_name,-5) == ".jpeg" )||(substr($original_image_name,-5) == ".JPEG" ))
		{
			$original_image_name_no_extension = substr($original_image_name,0,-5);
		}
		if((substr($original_image_name,-4) == ".jpg" )||(substr($original_image_name,-4) == ".JPG" ))
		{
			$original_image_name_no_extension = substr($original_image_name,0,-4);
		}
		if((substr($original_image_name,-4) == ".png" )||(substr($original_image_name,-4) == ".PNG" ))
		{
			$original_image_name_no_extension = substr($original_image_name,0,-4);
		}
		if((substr($original_image_name,-4) == ".gif" )||(substr($original_image_name,-4) == ".GIF" ))
		{
			$original_image_name_no_extension = substr($original_image_name,0,-4);
		}
		
		//ROTATING IMAGE
		//IF SESSION VAR > 8
		if($_SESSION['times_rotated_right_01'] > 8)
		{
			//SESSION VAR
			$_SESSION["rotated_01"] = 2;
				
			//ECHO IMAGE PATH
			echo '01';
			
			//SLEEPING
			sleep(10);
		}//IF SESSION VAR > 8
		//IF SESSION VAR < 8
		else
		{	
			if($_SESSION['times_rotated_right_01'] == 1)
			{
				$image = imagerotate($image,270,0);
				
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_0".$_SESSION['times_rotated_right_01'].".".$_POST['extension_01'];
					
				//SAVE IMAGE
				imagejpeg($image, $rotated_image_name);
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			if($_SESSION['times_rotated_right_01'] == 2)
			{
				$image = imagerotate($image,180,0);
				
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_0".$_SESSION['times_rotated_right_01'].".".$_POST['extension_01'];
					
				//SAVE IMAGE
				imagejpeg($image, $rotated_image_name);
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			if($_SESSION['times_rotated_right_01'] == 3)
			{
				$image = imagerotate($image,90,0);
				
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_0".$_SESSION['times_rotated_right_01'].".".$_POST['extension_01'];
					
				//SAVE IMAGE
				imagejpeg($image, $rotated_image_name);
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			if($_SESSION['times_rotated_right_01'] == 4)
			{
				$image = imagerotate($image,0,0);
				
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_0".$_SESSION['times_rotated_right_01'].".".$_POST['extension_01'];
					
				//SAVE IMAGE
				imagejpeg($image, $rotated_image_name);
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			
			if(($_SESSION['times_rotated_right_01'] > 4)&&($_SESSION['times_rotated_right_01'] % 4) == 0)
			{
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_04.".$_POST['extension_01'];
					
				//SESSION VAR
				$_SESSION["rotated_01"] = 1;
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			
			if(($_SESSION['times_rotated_right_01'] > 3)&&(($_SESSION['times_rotated_right_01'] % 3) == 0)&&(($_SESSION['times_rotated_right_01'] % 2) != 0))
			{
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_03.".$_POST['extension_01'];
					
				//SESSION VAR
				$_SESSION["rotated_01"] = 1;
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			
			if(($_SESSION['times_rotated_right_01'] > 2)&&(($_SESSION['times_rotated_right_01'] % 4) != 0)&&(($_SESSION['times_rotated_right_01'] % 2) == 0))
			{
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_02.".$_POST['extension_01'];
					
				//SESSION VAR
				$_SESSION["rotated_01"] = 1;
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			
			if($_SESSION['times_rotated_right_01'] == 7)
			{
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_03.".$_POST['extension_01'];
					
				//SESSION VAR
				$_SESSION["rotated_01"] = 1;
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
			
			if($_SESSION['rotated_01'] == 0 && $_SESSION['times_rotated_right_01'] > 4)
			{
				//RENAME IMAGE FILE
				$rotated_image_name = "uploads/".$original_image_name_no_extension."_01.".$_POST['extension_01'];
					
				//SESSION VAR
				$_SESSION["rotated_01"] = 1;
				
				//ECHO IMAGE PATH
				echo $rotated_image_name;
			}
		}//IF SESSION VAR != 2	
		//IF (ROTATE RIGHT 90 DEG)
			//ROTATE IMAGE RIGHT
			//ECHO NEW IMG
			
		//IF (ROTATE LEFT 90 DEG)
			//ROTATE IMAGE LEFT
			//ECHO NEW IMG
	
	}// CHECKING SESSION VAR
?>