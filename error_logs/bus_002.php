<?php
// data
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
		echo 'connection ok';
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
	
	// Getting Keys
	//$sql1="SELECT * FROM drills ORDER BY ID DESC LIMIT 1";
	$sql1="SELECT * FROM drills";
	$query = mysqli_query($con,$sql1);
	$row_4 = mysqli_fetch_array($query,MYSQLI_NUM);
	echo '<pre>';
	var_dump($row_4);
	echo '</pre>';
	
?>