<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	//$user_number = (int) $_REQUEST['Digits'];
	# @end snippet
	$user_number=$_REQUEST['user_number'];
	echo '<Gather action="next-step.php?user_number='.$user_number.'" numDigits="1">
			<Say>Please enter 1 for creating a new request.</Say>
			<Say>Please enter 2 to delete or modify an existing request</Say>
			</Gather>';
	echo '<Say>Sorry, I didnt get your response.</Say>
		  <Redirect>read-current-status.php?user_number='.$user_number.'</Redirect>';
		// We'll implement the rest of the functionality in the 
		// following sections.
	echo '</Response>';
?>
