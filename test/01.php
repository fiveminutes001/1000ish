<?php
	//ob_start();
	
	// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	echo '<div style="width:200px;"><iframe width="100%" src="https://www.youtube.com/embed/LmR14hhPudk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
		
	flush();
	sleep(3500000);
	//usleep(1000);
	
	$a = rand();
	echo '<br>'.$a;
	$b = $a % 2;
	echo '<br>'.$b;
	
	flush();
	sleep(3500000);
	
	if($b == 1)
	{
		echo "<script>window.location.href='http://google.com';</script>";
		exit;
	}
	
?>