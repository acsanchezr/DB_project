<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300|Niramit|Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="animate.css">
</head>

<body>
<div class="functions">
<h1>Displaying orders</h1>


<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
	/*test*/
	$sql = "SELECT * FROM towed";
	/* query database */
	$result = $conn->query($sql);
	if (!$result) {
	    trigger_error('Invalid query: ' . $conn->error);
	}
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		 	echo "Truck plate: " . $row["truck_plate"].
							" - Car plate: " . $row["car_plate"]. " - Initial Location:" . $row["init_loc"].
							" - Final location:".$row["final_loc"]. " - Date:".$row["date"]." - Time:".$row["time"]."<br>";}
		} else {
		    echo "0 results in TOWED";
		}
?>

</br></br>
<a class="btn btn-primary btn-lg" href="./order.php" role="button">go back<a></br></br>
</div>
</body>
</html>