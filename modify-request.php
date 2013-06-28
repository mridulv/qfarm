<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
	#echo '<Say>This is a totally New World</Say>';
	
	$user_number = $_REQUEST['user_number'];
	$num=(int) $_REQUEST['Digits'];
	
	mysql_connect("localhost","","")
	or die("<h3>could not connect to MySQL</h3>\n");
	mysql_select_db("db_name")
	or die("<h3>could not select database 'qfarm'</h3>\n");
	
	$result = mysql_query('select * from user_products where userid='.$user_number);
	
	if ($num==2){
		$i = 0;
		$m = 0;
		$k = '';
		while ($row=mysql_fetch_array($result)){
			if ($m == 0){
				$m = 1;
			}
			else{
				$k = $k.$l.',';
			}
			$l = $row['id'];
		}
		$k = $k.$l;
		#echo '<Say>It is '.$k.'</Say>';
		$result = mysql_query('select * from user_products where userid='.$user_number);
		echo '<Gather action="modify-request3.php?arr='.$k.'" numDigits="1">';
		$i = 0;
		while ($row=mysql_fetch_array($result)){
				if($row['productid']==1)
					$cropname='wheat';
				else if($row['productid']==2)
					$cropname='rice';
				else 
					$cropname='pulses';
				echo '<Say>Enter '.$i.' for '.$row['quantity'].' kg of '.$cropname.' at '.$row['price'].' per kg</Say>';
				$i++;
		}
		echo '</Gather>';
	}
	else if ($num==1){
		$i = 0;
		$m = 0;
		$k = '';
		while ($row=mysql_fetch_array($result)){
			if ($m == 0){
				$m = 1;
			}
			else{
				$k = $k.$l.',';
			}
			$l = $row['id'];
		}
		$k = $k.$l;
		#echo '<Say>It is '.$k.'</Say>';
		$result = mysql_query('select * from user_products where userid='.$user_number);
		echo '<Gather action="delete-request.php?arr='.$k.'" numDigits="1">';
		$i = 0;
		while ($row=mysql_fetch_array($result)){
				if($row['productid']==1)
					$cropname='wheat';
				else if($row['productid']==2)
					$cropname='rice';
				else 
					$cropname='pulses';
				echo '<Say>Enter '.$i.' for '.$row['quantity'].' kg of '.$cropname.' at '.$row['price'].' per kg</Say>';
				$i++;
		}
		echo '</Gather>';
	}

	echo '</Response>';
?>
