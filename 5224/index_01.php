<?php
//SESSION
	session_start();
	
//ERRORS DISPLAY
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');


//CURL REQUEST	
	$c = curl_init('http://1000ish.com/targilim.php');
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt(... other options you want...)
	
	$html = curl_exec($c);
	
	if (curl_error($c))
	{
		die(curl_error($c));
	}
	// Get the status code
	$status = curl_getinfo($c, CURLINFO_HTTP_CODE);
	
	curl_close($c);
	
//ECHO HEAD	
	$a = strpos($html,"<!-- PEOPLE AND SUBJECTS -->",0);
	//echo substr($html,0,$a);

//ECHO HTML
	//THIS IS THE ORIGINAL STRING
	$i=$a;
	$d=1;
	
	//THIS IS THE TARGET STRING
	$target_string = '';
	
	//POST VARS
	//$name="OMRI";
	$name=$_POST['b_1'];
	$str=$name['drills'];
	
	////MAKING SURE REMOTE VALUE RECEIVED OK
	//echo $name['drills'];
	//for ($p=0;$p<count($name['drills']);$p++)
	//{
	//	echo $name['drills'][$p];
	//	echo '<br>';
	//}
	
	////DEFINING LOCAL OBJECT
	//class foo
	//{
	//	//VARS
	//	public $drills = ['physics_900_008_001',
	//				      'physics_900_008_002',
	//				      'physics_900_008_003',
	//				      'physics_900_004_005'];
	//	
	//	//FUNCTIONS (METHOD)
	//	public function do_foo()
	//	{
	//		//echo "Doing foo."; 
	//	}
	//}
	
	////CREATING LOCAL OBJECT
	//$b = new foo();
	
	////ACCESSING VALUES
	//$str = $b->drills;
	
	////CHECKING LOCAL OBJECT VALUES ARE OK
	//echo '<pre>';
	//
	//	//ECHOING VAR
	//	for ($p=0;$p<count($str);$p++)
	//	{
	//		//echo $str[$p];
	//		//echo '<br>';
	//	}
	//	
	//	//var_dump($str);
	//	//var_dump(count($str));
	//	//echo '<br>';
	//	
	//	//EXECUTING METHOD
	//	echo $b->do_foo();
	//
	//echo '</pre>';
		
	//FOR ALL DRILL VALUES
	for ($p=0;$p<count($str);$p++)
	{
		//GET THE CURRENT TARGIL
		while($i<strlen($html)&&$d>0)
		{
			if($i>0)
			{
				$b = strpos($html,"<!-- ".$str[$p]." -->",$i);
				$c = strpos($html,"<!-- ".$str[$p]."_ -->",$i);
					
				$d = $c - $b;
				
				if($d>0)
				{
					$target_string = $target_string." ".substr($html,$b,$d);
					$i=$a;
					$d=1;
					break;
				}
				else
				{
					break;
				}
			}
			else
			{
				break;
			}
		}
	}
	//ECHO TARGET STRING
	echo $target_string;
?>
