<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
	/*test*/
	$sql = "SELECT * FROM ticket";
	/* query database */
	$result = $conn->query($sql);
	if (!$result) {
	    trigger_error('Invalid query: ' . $conn->error);
	}
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		 	echo "Ticket ID: " . $row["ID"].
							" - Reason: " . $row["reason"]. " - Description:" . $row["description"].
							" - Date paid:".$row["date_paid"]. " - Time paid:".$row["time_paid"]."<br>";}
		} else {
		    echo "0 results in TICKET";
		}
?>