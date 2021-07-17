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
	$i=$a;
	$d=1;
	//$name="OMRI";
	$name=$_POST['b_1'];
		
	while($i<strlen($html)&&$d>0)
	{
		if($i>0)
		{
			$b = strpos($html,"<!-- ".$name." -->",$i);
			$c = strpos($html,"<!-- ".$name."_ -->",$i);
				
			$d = $c - $b;
			
			if($d>0)
			{
				echo substr($html,$b,$d);
				$i=$c+20;
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
	//echo $html;

//ECHO END OF DOCUMENT
	//echo '</body></html>';

?>
