<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
	/*test*/
	$sql = "SELECT * FROM employee";
	/* query database */
	$result = $conn->query($sql);
	if (!$result) {
	    trigger_error('Invalid query: ' . $conn->error);
	}
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		 	echo "Employee ID: " . $row["ID"].
							" - Name: " . $row["name"]. " - Address:" . $row["address"].
							" - Phone number:".$row["phone_num"]."<br>";}
		} else {
		    echo "0 results in EMPLOYEE";
		}
?>