<?php
if (isset($_COOKIE['user'])){
session_start();
?>
<html>
<head>

<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style5.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/main.css" />
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<title>Registration Portal</title>
<style type="text/css">
h3{
	font-size:20px;
	text-transform: uppercase;
	font-family: 'Open Sans', sans-serif;
	background-color:#ccccff;
	border:2px solid black;
	border-radius: 1px;
	border-collapse:1px;
}
#header{
	position:fixed;
	margin-top:0px;
	z-index:4;
	margin-left:0px;
	padding:10px 5px 0px 5px;
	height:35px;
	width:1900px;
	background-color: #000000;
}
.content{
	font-color:#ffffff;
	position:relative;
	margin-right:100px;
	display:inline;
	cursor:pointer;
}
#side-content{
	position:absolute;
	margin-top:50px;
	margin-left:10px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:300px;
	height:500px;
	overflow: auto;
	box-shadow: 10px 10px 5px #888888;
}
#main-content{
	position:absolute;
	margin-top:50px;
	margin-left:410px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:800px;
	height:500px;
	overflow: auto;
	box-shadow: 10px 10px 5px #888888;
}
#company-content{
	position:absolute;
	margin-top:50px;
	margin-left:900px;
	padding:20px 20px 20px 20px;
	border:2px solid black;
	width:400px;
	box-shadow: 10px 10px 5px #888888;
	height:500px;
	overflow: auto;
	display:inline;</br>
}
.detail-app{
	height:200px;
}
.comp-short{
	position:relative;
	border:2px solid #8888ff;
	background-color: #aaaaff;
	padding:10px 10px 10px 10px;
	border-radius: 4px;
	margin-top:30px;
	margin-right:30px;
	height:50px;
	cursor:pointer;
	display:inline;
}
#new-pos{
	position:fixed;
	border:2px solid black;
	padding-left: 20px;
	padding-top:20px;
	background-color: #ffffff;
	display:none;
	left:300px;
	top:100px;
	width:800px;
	height:480px;
	z-index: 10;
}
#full{
	z-index: 5;
	position:fixed;
	background-color: #000000;
	margin-left:-20px;
	margin-top:-20px;
	opacity : 0;
	display:none;
	width:1375px;
	height:635px;
}
.close-2{
	position:absolute;
	right:100px;
	top:50px;
}
#accordion{
	position:relative;
	margin-top:20px;
}
</style>	
<script  type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.2.custom.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$("#accordion").accordion();
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 0, 500 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "Rs" + ui.values[ 0 ] + " - Rs" + ui.values[ 1 ] );
			}
		});
		$(".comp-detail").tabs();
		var k;
		$(".comp-short").click(function(){
			console.log("p");
			k = $(this).attr('alt');
			console.log(k);
			$("#full").show("fast",function(){
				console.log(k+"ssss");
				$(".comp-detail[alt = "+k+"]").fadeIn(20);
				$(this).animate({'opacity': '0.8'});
			});
		});
		$("#logout").click(function(){
				console.log('popop');
				window.location='logout.php';
		});
		$("#profile_my").click(function(){
				console.log('popop');
				window.location='profile_student.php';
		});
		$(".close-2").click(function(){
			console.log(k);
			$(".comp-detail[alt = "+k+"]").hide(10,function(){
				$("#full").fadeOut(20,function(){
					$("#full").animate({'opacity': '0.0'});
					console.log("memememe");
				});
			});
		});
		$("#submit_but").click(function(){
			var value1 = $( "#slider-range" ).slider( "values", 0 );
			var value2 = $( "#slider-range" ).slider( "values", 1 );
			var region = $("#region_val").val();
			var crop = $("#select_crop").val();
			var lat;
			var lng;
			var std = "http://maps.googleapis.com/maps/api/geocode/json?address="+region+"&sensor=true"; 
			var jqxhr = $.getJSON(std, function(data) {
				console.log(data.results[0].geometry.location);
				lat = data.results[0].geometry.location.lat;
				lng = data.results[0].geometry.location.lng;
				console.log(lat+lng);
				window.location='search1.php?val1='+value1+'&val2='+value2+'&region='+region+'&lat='+lat+'&lng='+lng+'&crop='+crop;
			})
			.done(function() { console.log( "su" ); })
			.fail(function() { console.log( "error" ); })
			.always(function() { console.log( "complete" ); });
			console.log(lat);
			console.log(lng);
			//console.log('search.php?val1='+value1+'&val2='+value2+'&region='+region+'&amount='+amount);
			//console.log('search.php?val1='+value1+'&val2='+value2+'&region='+region+'&amount='+amount);
		});
	});
</script>

<body>
<div id="full">
	<img class="close-2" src="img/close.png"/>
</div>
<!-- <div id="k2">
<p class="signin button" id="pro"> 
	<input type="button" value="Edit Profile"/>
</p>
<p class="signin button" onclick="window.location ='logout.php';" id="log"> 
	<input type="button" value="Logout"/> 
</p>
</div> -->
<div id="header" class="container">
	<?php
		//mysql_connect("localhost","shantanu_qfarmdb","qfarmdbphoddo!")
		//or die("<h3>could not connect to MySQL</h3>\n");
		//mysql_select_db("shantanu_qfarm")
		//or die("<h3>could not select database 'shantanu_qfarm'</h3>\n");
		mysql_connect("localhost","shantanu_qfarmdb","qfarmdbphoddo!")
		or die("<h3>could not connect to MySQL</h3>\n");
		mysql_select_db("shantanu_qfarm")
		or die("<h3>could not select database 'shantanu_qfarm'</h3>\n");
	?>
	<div class="content" id="logout"><font color="#fff" size="3px" align="right">Logout</font></div>
</div>
<div id="side-content" class="container span4">
	<div id="crop">
	<br><br>
	<h5>Crop</h5>
	<select id="select_crop">
		<span>Cereal</span>
		
		<option value="1">Wheat</option>
		<option value="2">Rice</option>
		<option value="3">Pulses</option>
		<option value="4">Banana</option>
		<option value="5">Strawberry</option>
		<option value="6">Sapota</option>
		<option value="7">Pineapple</option>
		<option value="8">Moong</option>
		<option value="9">Wheat</option>
	
	</select>
	</div>
	<br><br>
	<div id="range">
	<h5>Price range</h5>
	<p>
	<input type="text" id="amount" style="border: 0; color: black; font-weight: bold;" />
	</p>

	<div id="slider-range">
	</div>
	</div>
	
	<br><br>
	<div id="region">
	<h5>Region</h5>
	<input type="text" id="region_val" style="border: 0; color: black;" /> 
	</div>
	<br><br>
	
<input type="submit" id="submit_but" class="button" value="Search">

<div id="main-content" class="container span8"></div>
</br>
</body>
</html>
<?php
}
else{
 header("location: index.php");
}
?>