<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>This is a totally New World</Say>';
	
	$arr = $_REQUEST['arr'];
	$num=(int) $_REQUEST['Digits'];
	
	$arr = explode(',',$arr);
	$a = $arr[$num];
	
	mysql_connect("localhost","shantanu_qf","chaapdoredux1")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("shantanu_qfarm")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	
	echo '<Gather action="modify-request4.php?val='.$a.'" numDigits="1">';
	echo '<Say>Enter 1 For changing the Price</Say>';
	echo '<Say>Enter 2 For changing the Quantity</Say>';
	echo '<Say>Enter 3 For changing the Crop</Say>';
	echo '</Gather>';
	
	echo '</Response>';
?>
