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