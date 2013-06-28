<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	$user_number = $_REQUEST['user_number'];
	$check =(int) $_REQUEST['Digits'];
	//echo '<Gather action="new-request3.php?user_number='.$user_number.';crop='.$crop.';quantity='.$quantity.'" numDigits="3">';
	//echo '<Say>Enter the price of crop you want to sell per kilograms</Say>';
	//echo '</Gather>';
	mysql_connect("localhost","shantanu_qf","chaapdoredux1")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("shantanu_qfarm")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	
	if ($check == 1){
		echo '<Redirect>read-current-status.php?user_number='.$user_number.'</Redirect>';
	}
	else if ($check == 0) {
		echo '<Say>The Call Ended</Say>';
	}
	
	echo '</Response>';
?>
