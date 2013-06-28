<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>This is a totally New World</Say>';
	
	$val = $_REQUEST['val'];
	$num=(int) $_REQUEST['Digits'];
	
	mysql_connect("localhost","shantanu_qf","chaapdoredux1")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("shantanu_qfarm")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	
	if ($num == 1){
		echo '<Gather action="modify-request-price.php?val='.$val.'" numDigits="2">';
		echo '<Say>Enter the new price of the Crop</Say>';
		echo '</Gather>';
	}
	else if ($num ==2){
		echo '<Gather action="modify-request-quantity.php?val='.$val.'" numDigits="3">';
		echo '<Say>Enter the new quantity of the Crop</Say>';
		echo '</Gather>';
	}
	else if ($num == 3){
		echo '<Gather action="modify-request-crop.php?val='.$val.'" numDigits="1">';
		echo '<Say>Enter 1 for wheat</Say>';
		echo '<Say>Enter 2 for rice</Say>';
		echo '<Say>Enter 3 for pulses</Say>';
		echo '</Gather>';
	}
	
	echo '</Response>';
?>
