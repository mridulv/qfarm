<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>This is a totally New World</Say>';
	
	$val = $_REQUEST['val'];
	$num=(int) $_REQUEST['Digits'];
	
	
	mysql_connect("localhost","","")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("db_name")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	
	mysql_query('update user_products set productid="'.$num.'" where id="'.$val.'"');
	
	echo '<Say>Your Request Has been modified</Say>';
	echo '<Gather action="check.php?user_number='.$user_number.'" numDigits="1">';
	echo '<Say>Press 1 For making more requests</Say>';
	echo '<Say>Press 0 For Terminating the call</Say>';
	echo '</Gather>';
	echo '</Response>';
?>
