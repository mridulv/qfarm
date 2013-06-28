<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>This is a totally New World</Say>';
	
	$arr = $_REQUEST['arr'];
	$num=(int) $_REQUEST['Digits'];
	
	$arr = explode(',',$arr);
	$a = $arr[$num];
	
	mysql_connect("localhost","","")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("db_name")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	echo '<Say> Deleting Entry number '.$a.' </Say>';
	$result = mysql_query('delete from user_products where id="'.$a.'"');
	echo '<Gather action="check.php?user_number='.$user_number.'" numDigits="1">';
	echo '<Say>Press 1 For making more requests</Say>';
	echo '<Say>Press 0 For Terminating the call</Say>';
	echo '</Gather>';
	echo '</Response>';
?>
