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
		//echo '<h1>POST OK</h1>';
		
		//CHECKING C_08 INPUT
		if(isset($_POST['c_08']) && $_POST['c_08'] == 'dlfksjdf_dkflskdlfdkf9003ir03_rkrkl' )
		{
			//echo '<h1>INPUT OK</h1>';
			
			//CHECKING $_POST["ok_01"] 
			if(isset($_POST['ok_field']) && $_POST['ok_field'] == 'ok_01')
			{
				//REDIRECTED 	
				header ("location: upload_preview.php");
			}//OK_01 IS SET	
			
			//OK_01 ISN'T SET
			else
			{
				//SESSION VAR
				$_SESSION['from_rotate_right'] = 0;
				
				//CHECKING $_POST["rotate"] LENGTH
				if(isset($_POST['rotate_field']) && is_string($_POST['rotate_field']) && strlen($_POST['rotate_field']) < 13)
				{ 
					echo '<pre>';
					var_dump($_POST);
					echo '</pre>';
					
					if($_POST['rotate_field']=='rotate_right')
					{
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
					}
					
					if($_POST['rotate']=='rotate_left')
					{
						
					}
					//IF (ROTATE RIGHT 90 DEG)
						//ROTATE IMAGE RIGHT
						//ECHO NEW IMG
						
					//IF (ROTATE LEFT 90 DEG)
						//ROTATE IMAGE LEFT
						//ECHO NEW IMG
				}
			}//OK_01 ISN'T SET
		}//CHECKING C_08 INPUT
	}// CHECKING METHOD
?>