<?php
//SESSION
	session_start();
	
//ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

//SET NAME
	//$name="math_800_005";
	$name=$_POST['b_1'];
	
	//COUNT VAR
	$counting_ = 0;
	
	//STRING LENGTH
	$l=strlen($name);
	
	//VAR_DUMP
	//**echo '<br>';
	//**echo 'length: ';
	//**var_dump($l);
	//**echo '<br>';
	
	//FIND FIRST _
	$a = strpos($name,"_",0);
	
	//VAR_DUMP
	//**echo '<br>';
	//**echo 'a: ';
	//**var_dump($a);
	//**echo '<br>';
	
	//NEXT INDEX
	$a_plus_1 = $a + 1;
	
	//VAR_DUMP
	//**echo '<br>';
	//**echo 'a+1: ';
	//**var_dump($a_plus_1);
	//**echo '<br>';
	
	//FIRST _ AT 0, NOT OK, EXITING
	if($a == 0)
	{
		echo "M-805-002";
	}
	//TOTAL LENGTH NOT OK, EXITING
	else if($l != 15 && $l != 12)
	{
		echo "P-904-002";
	}
	//OK PROCEED	
	else
	{
		//UPDATE 1ST _ COUNTER
		$counting_ = $counting_ + 1;
		
		//VAR_DUMP
		//**echo '<br>';
		//**echo 'counting: ';
		//**var_dump($counting_);
		//**echo '<br>';
		
		//NEW STRING AFTER 1ST _
		$set_number_02 = substr($name,$a_plus_1);
		
		//VAR_DUMP
		//**echo '<br>';
		//**echo 'set_number_02: ';
		//**var_dump($set_number_02);
		//**echo '<br>';
		
		//STRING LENGTH
		$l=strlen($set_number_02);
		
		//VAR_DUMP
		//**echo '<br>';
		//**echo 'length: ';
		//**var_dump($l);
		//**echo '<br>';
		
		//2ND LENGTH NOT OK, EXITING
		if($l != 7)
		{
			echo "P-904-003";
		}
		//OK PROCEED
		else
		{
			//FIND SECOND _
			$a = strpos($set_number_02,"_",0);
			
			//VAR_DUMP
			//**echo '<br>';
			//**echo 'a: ';
			//**var_dump($a);
			//**echo '<br>';
			
			//NEXT INDEX
			$a_plus_1 = $a + 1;
			
			//VAR_DUMP
			//**echo '<br>';
			//**echo 'a_plus_1: ';
			//**var_dump($a_plus_1);
			//**echo '<br>';
			
			//SECOND _ AT 0,NOT OK, EXITING
			if($a == 0)
			{
				echo "M-802-001";
			}
			//OK PROCEED
			else
			{
				//UPDATE 2ND _ COUNTER
				$counting_ = $counting_ + 1;
				
				//VAR_DUMP
				//**echo '<br>';
				//**echo 'counting: ';
				//**var_dump($counting_);
				//**echo '<br>';
				
				//NEW STRING AFTER 2ND _
				$set_number_03 = substr($set_number_02,$a_plus_1);
				
				//VAR_DUMP
				//**echo '<br>';
				//**echo 'set_number_03: ';
				//**var_dump($set_number_03);
				//**echo '<br>';
				
				//STRING LENGTH
				$l=strlen($set_number_03);
				
				//VAR_DUMP
				//**echo '<br>';
				//**echo 'length: ';
				//**var_dump($l);
				//**echo '<br>';
				
				//3RD LENGTH NOT OK, EXITING
				if($l != 3)
				{
					echo "P-900-001";
				}
				//OK PROCEED
				else
				{
					//FIND THIRD _
					$a = strpos($set_number_03,"_",0);
					
					//VAR_DUMP
					//**echo '<br>';
					//**echo 'a: ';
					//**var_dump($a);
					//**echo '<br>';
					
					//NEXT INDEX
					$a_plus_1 = $a + 1;
					
					//VAR_DUMP
					//**echo '<br>';
					//**echo 'a_plus_1: ';
					//**var_dump($a_plus_1);
					//**echo '<br>';
					
					//MORE THAN 3 _, NOT OK, EXITING
					if($a != 0)
					{
						$set_number_01 = 'P';
						$set_number_03 = '001';
						$set_number_04 = '000';
					}
					//OK PROCEED
					else
					{
						$a = strpos($name,"_",0);
						$a_plus_1 = $a + 1;
						
						//GET math OR physics
						$set_number_01 = substr($name,0,$a);
						
						//GET SET NUMBER
						$set_number_02 = substr($name,$a_plus_1);
						
						$a = strpos($set_number_02,"_",0);
						$a_plus_1 = $a + 1;
						
						$set_number_03 = substr($set_number_02,$a_plus_1);
						
						$set_number_04 = substr($set_number_02,0,$a);
						
						
						if($set_number_01 == 'math')
						{
							$set_number_01 = 'M';
						}
						else
						{
							$set_number_01 = 'P';
						}
						
						//DRILL CODE
						$drill_code = $set_number_01."-".$set_number_04."-".$set_number_03;
						
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
								//echo '<h2 style="text-align:left;direction:ltr;">CONNECTION STATUS</h2>';
								//echo '<h4 style="text-align:left;direction:ltr;">connection ok</h4>';
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
						
						//QUERIE
						//FOR FUTURE USE
						//$sql1="SELECT * FROM drills WHERE SET_NUMBER = '$drill_code' AND (SET_NUMBER_02 = '$drill_code' OR SET_NUMBER_03 = '$drill_code') ORDER BY DRILL_NUMBER ASC";
						
						$sql1="SELECT * FROM drills WHERE SET_NUMBER = '$drill_code' OR SET_NUMBER_02 = '$drill_code' OR SET_NUMBER_03 = '$drill_code' ORDER BY DRILL_NUMBER ASC";
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
			
						if($set_number_01 == 'math')
						{
							$result_html = 'M';
						}
						else
						{
							$result_html = 'P';
						}
						
						$n = 0;
						$n_plus_1 = 1;
						$n_plus_2 = 2;
						$n_plus_3 = 3;
						$n_plus_4 = 4;
						
						while ($n<count($drillArray))
						{
							$result_html .= '
							<!-- TABLE DIV -->
							<div style="width:100%;">
								<table style="width:100%;text-align:center;border:1px black solid;">
									<tr>
										<th colspan="4">
											<h3>'.$drillArray[$n]["DRILL_NUMBER"].'</h3>
										</th>
									</tr>
									<tr>
										<th colspan="4" style="text-align:center;">
											'.$drillArray[$n]["HEADER_NAME"].'
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
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n]['LINK_01'].'&embedded=true">'.$drillArray[$n]['LINK_01_HEADER'].'</a>
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n]['LINK_02'].'&embedded=true">'.$drillArray[$n]['LINK_02_HEADER'].'</a>
										</td>
										<td>
											'.$drillArray[$n]["SOLUTION_VIDEO"].'
										</td>
									</tr>
									<tr>
										<td>
											02
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n_plus_1]['LINK_01'].'&embedded=true">'.$drillArray[$n_plus_1]['LINK_01_HEADER'].'</a>
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n_plus_1]['LINK_02'].'&embedded=true">'.$drillArray[$n_plus_1]['LINK_02_HEADER'].'</a>
										</td>
										<td>
											'.$drillArray[$n_plus_1]["SOLUTION_VIDEO"].'
										</td>
									</tr>
									<tr>
										<td>
											03
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n_plus_2]['LINK_01'].'&embedded=true">'.$drillArray[$n_plus_2]['LINK_01_HEADER'].'</a>
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n_plus_2]['LINK_02'].'&embedded=true">'.$drillArray[$n_plus_2]['LINK_02_HEADER'].'</a>
										</td>
										<td>
											'.$drillArray[$n_plus_2]["SOLUTION_VIDEO"].'
										</td>
									</tr>
									<tr>
										<td>
											04
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n_plus_3]['LINK_01'].'&embedded=true">'.$drillArray[$n_plus_3]['LINK_01_HEADER'].'</a>
										</td>
										<td style="direction:rtl;text-align:center;">
											<a target="iframe_01" href="https://docs.google.com/gview?url='.$drillArray[$n_plus_3]['LINK_02'].'&embedded=true">'.$drillArray[$n_plus_3]['LINK_02_HEADER'].'</a>
										</td>
										<td>
											
										</td>
									</tr>
								</table>
							</div>
							
							<!-- NEW LINE-->
							<br>
						
							';
						
							$n = $n + 4;
							$n_plus_1 = $n_plus_1 + 4;
							$n_plus_2 = $n_plus_2 + 4;
							$n_plus_3 = $n_plus_3 + 4;
							$n_plus_4 = $n_plus_4 + 4;
							
						}
						echo $result_html;
					}
				}
			}
		}
	}
?>
