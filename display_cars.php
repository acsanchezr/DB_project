<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
	/*test*/
	$sql = "SELECT * FROM car";
	/* query database */
	$result = $conn->query($sql);
	if (!$result) {
	    trigger_error('Invalid query: ' . $conn->error);
	}
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		 	echo "Plate: " . $row["plate"].
							" - Brand: " . $row["brand"]. " - Color:" . $row["color"].
							" - Impounded:".$row["impounded"]. " -Serviced:".$row["serviced"]."<br>";}
		} else {
		    echo "0 results in CAR";
		}
?>