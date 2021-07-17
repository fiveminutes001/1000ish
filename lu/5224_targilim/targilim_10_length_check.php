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
						
						echo $set_number_01."-".$set_number_04."-".$set_number_03;
					}
				}
			}
		}
	}
?>
