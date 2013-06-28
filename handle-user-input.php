<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_number = (int) $_REQUEST['Digits'];
	# @end snippet
	mysql_connect("localhost","shantanu_qf","chaapdoredux1")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("shantanu_qfarm")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	$result=mysql_query("select * from user_info where userid=".$user_number);
	if (mysql_num_rows($result)!=0)
	{
		$row=mysql_fetch_array($result);
		echo '<Say>You entered '.$user_number.'</Say>';
		echo '<Gather action="handle-password.php?user_number='.$user_number.'" numDigits="6">
				<Say>Please enter your 6-digit password.</Say>
				</Gather>';
		echo '<Say>Sorry, I didnt get your response.</Say>
			  <Redirect>handle-user-input.php?user_number='.$user_number.'</Redirect>';
	}
	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>Sorry, You have entered a wrong user id.</Say>";
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}
	echo '</Response>';
?>
