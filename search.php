<?php
if (isset($_REQUEST['val1']) && isset($_REQUEST['val2']) && isset($_REQUEST['region']) && isset($_REQUEST['crop'])){
		mysql_connect("localhost","shantanu_qfarmdb","qfarmdbphoddo!")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("shantanu_qfarm")
		or die("<h3>could not select database 'shantanu_qfarm'</h3>\n");

		
		$a = $_REQUEST['val1'];
		$b = $_REQUEST['val2'];
		$c = $_REQUEST['region'];
		$d = $_REQUEST['crop'];
		$lat = $_REQUEST['lat'];
		$lng = $_REQUEST['lng'];
		
		$result = mysql_query("select * from user_products where productid=".$d);
		//echo "select quantity,price,userid,productid,lat,lng from (select * from user_products INNER JOIN user_info ON user_products.userid=user_info.userid)";
		$m = mysql_query("select user_info.lat,user_info.lng,user_products.quantity,user_products.price,user_products.userid,user_products.productid,((user_info.lat-".$lat.")*(user_info.lat-".$lat.")+(user_info.lng-".$lng.")*(user_info.lng-".$lng.")) as dist from user_products INNER JOIN user_info ON user_products.userid=user_info.userid ORDER BY dist ASC");
		
		while($row=mysql_fetch_array($m)){
			if (($row['price'] >= $a) && ($row['price'] <= $b)){
				$ro = mysql_fetch_array($m);
				?>
				<div class="something">
					<div class="inner">
						-- something --
					</div>
					<div class="outer">
						-- somehthing --
					</div>
				</div>
				<?php
			}
		}
}
else{

}
?>