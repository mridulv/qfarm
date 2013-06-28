<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>This is a totally New World</Say>';
	# @start snippet
	$arr = $_REQUEST['array'];
	$arr = explode(',',$arr);
	$user_number = $arr[0];
	$crop = $arr[1];
	$quantity = $arr[2];
	//echo '<Say>This is '.$crop.'</Say>';
	$price =(int) $_REQUEST['Digits'];
	# @end snippet
	if($crop==1)
		$cropname='wheat';
	else if($crop==2)
		$cropname='rice';
	else 
		$cropname='pulses';
	echo '<Say>You have chosen to sell '.$quantity.' kilograms of '.$cropname.' at '.$price.' rupees per kilogram </Say>';
	//echo '<Gather action="new-request3.php?user_number='.$user_number.';crop='.$crop.';quantity='.$quantity.'" numDigits="3">';
	//echo '<Say>Enter the price of crop you want to sell per kilograms</Say>';
	//echo '</Gather>';
	mysql_connect("localhost","","")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("db_name")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	
	mysql_query("insert into user_products (userid,productid,quantity,price) values('".$user_number."','".$crop."','".$quantity."','".$price."')");
	echo '<Say>Your Request Has been Recorded</Say>';
	
	echo '<Gather action="check.php?user_number='.$user_number.'" numDigits="1">';
	echo '<Say>Press 1 For making more requests</Say>';
	echo '<Say>Press 0 For Terminating the call</Say>';
	echo '</Gather>';
	
	echo '</Response>';
?>
