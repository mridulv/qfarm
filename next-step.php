<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>I am in next step</Say>';
	# @start snippet
	$user_number=$_REQUEST['user_number'];
	$choice = (int) $_REQUEST['Digits'];
	# @end snippet
	if ($choice==1)
	{
		//$row=mysql_fetch_array($result);
		echo '<Say>You have chosen to make a new request</Say>';
		echo '<Say>Please enter the crop you want to sell</Say>';
		echo '<Gather action="new-request.php?user_number='.$user_number.'" numDigits="1">';
		echo '<Say>Enter 1 for wheat</Say>';
		echo '<Say>Enter 2 for rice</Say>';
		echo '<Say>Enter 3 for pulses</Say>';
		echo '</Gather>';
	}
	else if ($choice==2)
	{
		echo '<Say>You have chosen to modify an existing request</Say>';
		echo '<Gather action="modify-request.php?user_number='.$user_number.'" numDigits="1">';
		echo '<Say>Enter 1 for Deletion of a Request</Say>';
		echo '<Say>Enter 2 for Modification of a Request</Say>';
		echo '</Gather>';
	}
	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>Sorry, You have entered a wrong choice.</Say>";
		echo '<Redirect>read-current-status.php?user_number='.$user_number.'</Redirect>';
	}

	echo '</Response>';
?>
