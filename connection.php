	<?php
		/* php file to establish mysql connection and query database */

		$servername = "localhost"; /* servername name should remain static*/
		$username = "root";
		$password = "";
		$dbname = "towtruck_co";


		/* create connection,
		note this connection is using a mysqli connection,
		this connection is ONLY intended for MySQL databases,
		for other database connections use PDO */
		$conn = new mysqli($servername, $username, $password, $dbname);

		/* verify connection */
		if ($conn->connect_error)
		    die("Connection failed: " . $conn->connect_error);
		else
		//	echo "Succesfully connected to db! ";
		//	echo "I'm inside of connection.php <br>";
	?>
