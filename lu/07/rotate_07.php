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
		echo '<h1>SESSION OK</h1><br>';
			
		echo '<pre>';
		var_dump($_POST);
		echo '</pre>';
			
		$image = imagecreatefromstring(file_get_contents($_POST['file_01']));
		$image = imagerotate($image,270,0);
		
		//RENAME IMAGE FILE
		//$new_image_name = substr($_POST['file_01'], 0, -4)."_rotated_right.jpeg";
		$new_image_name = $_POST['file_01'];
		
		//SAVE IMAGE
		imagejpeg($image, $new_image_name);
		
		//ECHO IMAGE
		$pic_name = $new_image_name;
		echo "<h1>".$pic_name."</h1>";
		
		echo "<div style='width:100%;text-align:center;'>";
		echo "<img src='$pic_name' style='width:50%;'/>";
		echo "</div>";
		
		echo "<h1 style='text-align:center;'>בסדר?</h1>";
		echo "<div style='width:50%;text-align:center;margin:6px auto;'>
				<form action='rotate.php' method='post' enctype='multipart/form-data'>
					<select name='ok_field' style='font-size:1em;'>
						<option value='ok_01'>כן</option>
						<option value='rotate_right'>לא, סובב עוד 90 מעלות ימינה</option>
					</select>
					
					<input type='submit' name='rotate' value='שלח'>
					
					<input type='hidden' name='file_01' value='uploads/$pic_name'>
					
					<input type='hidden' name='c_01' value='dlfksjdf_dkflskdlfrkf9003ir03_rkrkl'>
					<input type='hidden' name='c_02' value='dlfksjdf_dkflykdlfdkf9103ir03_rkrkl'>
					<input type='hidden' name='c_03' value='dlfksjdf_dkflskdlfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_04' value='dlfksjdf_dkflskdkfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_05' value='dlfksjdf_dkflskdlfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_06' value='dlfksjdf_dkflsbdlfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_07' value='dlfksfdf_dkflskdlfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_08' value='dlfksjdf_dkflskdlfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_09' value='dlfksjdf_dkflskdlfdkf9003ir03_rkrkl'>
					<input type='hidden' name='c_10' value='dlfksjdf_dkflskdlfdbf9003ir03_rkrkl'>
					<input type='hidden' name='c_11' value='dlfksjdf_dkflskdlfdhf9003ir03_rkrkl'>
					<input type='hidden' name='c_12' value='dlfksjdf_dkfgskdlfdkf9003ir03_rkrkl'>
				</form>
			</div>";	
							
		echo "<hr>";
		
		//IF (ROTATE RIGHT 90 DEG)
			//ROTATE IMAGE RIGHT
			//ECHO NEW IMG
			
		//IF (ROTATE LEFT 90 DEG)
			//ROTATE IMAGE LEFT
			//ECHO NEW IMG
	
	}// CHECKING SESSION VAR
?>