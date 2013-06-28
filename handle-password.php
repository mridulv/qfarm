<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>Hi this is a new world</Say>';
	# @start snippet
	$user_password = (int) $_REQUEST['Digits'];
	# @end snippet
	$user_number=$_REQUEST['user_number'];
	mysql_connect("localhost","shantanu_qf","chaapdoredux1")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("shantanu_qfarm")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	//echo '<Say>Your Username is '.$user_number.'</Say>';
	//echo '<Say>Your Password is '.$user_password.'</Say>';
	//$user_number=123456;
	$result=mysql_query("select * from user_info where userid=".$user_number." and password=".$user_password);
	if (mysql_num_rows($result)!=0)
	{
		echo "<Say>Welcome To Q Farm , You Have Successfully Logged in !!</Say>";
		echo '<Redirect>read-current-status.php?user_number='.$user_number.'</Redirect>';
			//header("Location:read_back_data.php?user_number=".$user_number);
	}
	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>Sorry,Wrong Password</Say>";
	}

	echo '</Response>';
?>
