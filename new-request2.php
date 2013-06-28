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
	#echo '<Say>This is '.$crop.'</Say>';
	$quantity=(int) $_REQUEST['Digits'];
	# @end snippet
	echo '<Say>You have entered '.$quantity.' kilograms</Say>';
	//echo '<Gather action="new-request3.php?user_number='.$user_number.';crop='.$crop.';quantity='.$quantity.'" numDigits="3">';
	//echo '<Say>Enter the price of crop you want to sell per kilograms</Say>';
	//echo '</Gather>';
	echo '<Gather action="new-request3.php?array='.$user_number.','.$crop.','.$quantity.'" numDigits="3">';
	echo '<Say>Enter the price per kilogram at which you want to sell</Say>';
	echo '</Gather>';

	echo '</Response>';
?>