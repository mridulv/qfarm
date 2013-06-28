<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	
	echo '<Response>';
	#echo '<Say>I am in new request</Say>';
	$user_number=$_REQUEST['user_number'];
	$crop = (int) $_REQUEST['Digits'];
	# @end snippet
	if ($crop==1)
	{
		//$row=mysql_fetch_array($result);
		echo '<Say>You have chosen to sell wheat</Say>';
	}
	else if ($crop==2)
	{
		echo '<Say>You have chosen to sell rice</Say>';
	}
	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>You have chosen to sell pulses.</Say>";
	}
	echo '<Gather action="new-request2.php?array='.$user_number.','.$crop.'" numDigits="3">';
	echo '<Say>Enter the quatity of crop you want to sell in kilograms</Say>';
	echo '</Gather>';

	echo '</Response>';
?>
