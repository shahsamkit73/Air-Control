


<?php
	$dbusername1 = "root";
	$dbpassword1 = "password";
	$server1 = "localhost";
	$dbname1 = "test";
	
	echo "";
//	echo "Starting connection\r\n";
	$conn = mysqli_connect($server1, $dbusername1, $dbpassword1, $dbname1	);
	echo "\r\n";
	//echo "You are connected\r\n";
	
	$sql1 = "select * from test.sensor order by id DESC limit 1";
	
	$result1 = mysqli_query($conn,$sql1);
	
	$row1= mysqli_fetch_array($result1);
	//echo $row1["co2"];	
	mysqli_close($conn);
	
?>

<!DOCTYPE html>
<html>
<head>
<h1 style="text-align:center">Welcome to air control</h1>
<meta http-equiv="refresh" content="<?php echo "5"?>;URL='<?php echo $_SERVER['PHP_SELF']?>'">

<script>
window.onload = function () {
var dps = [];
var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	title :{
		text: ""
	},
	axisY: {
		includeZero: false
	},
	data: [{
		type: "spline",
		markerSize: 0,
		dataPoints: dps 
	}]
});
var xVal = 0;
var yVal = 100;
var updateInterval = 1000;
var dataLength = 50; // number of dataPoints visible at any point
var updateChart = function (count) {
	count = count || 1;
	// count is number of times loop runs to generate random dataPoints.
	for (var j = 0; j < count; j++) {	
		yVal = <?php echo $row1["co2"];?>;
		dps.push({
			x: xVal,
			y: yVal
		});
		xVal++;
	}
	
	if (dps.length > dataLength) {
		dps.shift();
	}
	chart.render();
};
updateChart(dataLength); 
setInterval(function(){ updateChart() }, updateInterval); 
}
</script>


</head>
<?php
	$dbusername = "root";
	$dbpassword = "password";
	$server = "localhost";
	$dbname = "test";
	
	echo "";
	//echo "Starting connection\r\n";
	$dbconnect = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
	echo "\r\n";
	//echo "You are connected\r\n";
	
	$sql = "select * from test.sensor order by id DESC LIMIT 15";
	$query = mysqli_query($dbconnect, $sql);
	
	echo 
	"<table border=1>
	<tr>
	<th>id</th>
	<th>co2</th>
	<th>co</th>
	<th>nh4</th>
	</tr>";
	while($row = mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['co2'] . "</td>";
		echo "<td>" . $row['co'] . "</td>";
		echo "<td>" . $row['nh4'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "(All valuess are in ppm.)";
	echo "\r\n";
	echo "\r\n";
	echo "\r\n";
		
	mysqli_close($dbconnect);
?>





<body style="background-color:#89ff89">

<div id="chartContainer" style="height: 300px; width: 70%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 


</body>
</html>



