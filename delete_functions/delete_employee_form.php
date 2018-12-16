<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300|Niramit|Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<title>Add Record Form</title>
</head>

<body>
<?php
/*TEST to check db can be accessed - WORKS*/

include "../connection.php";
/*rest of the code*/

    /* This runs only after the form submitted */

	if(isset($_POST['id']) && $_POST['id'] != "") {
        $sql = "DELETE FROM employee WHERE id = " . $_REQUEST['id'];
        $result = $conn->query($sql);
        if(!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        else {
            // Record deleted successfully
            echo "Employee deleted<br>";
        }
    }

    /* End of update query */


    // Redisplay the page as normal
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

<div class="functions">
<h1>Delete an employee</h1>
<form action="<?php $_PHP_SELF ?>" method="post">
    <h3>Please type in an ID.</h3>
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id">
    </p>

    <input type="submit" value="Submit">

</br></br>
<a class="btn btn-primary btn-lg" href="../employee.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>
