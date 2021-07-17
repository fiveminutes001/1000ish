<?php
//ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

function rec($n,$m) 
{ 
	if($n == 1) 
	{ 
		echo $m;
		return;		
	} 
   
	$m = $m * $n; 
	$n = $n - 1; 
	rec($n,$m);
}

    rec(5,1);
   
?>