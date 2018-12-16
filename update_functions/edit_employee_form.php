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

    /* This runs only after the form submitted
       This can obviouly be improved than just a bunch of lazy ifs */

	if(isset($_POST['id']) && ($_REQUEST['name'] != "" || $_REQUEST['address'] != "" || $_REQUEST['phone'] != "")) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM employee WHERE ID = " . $id;
        $result = $conn->query($sql);
        if(!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        elseif ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($_REQUEST['name'] != "") {
                    $name = $_REQUEST['name'];
                }
                else {
                    $name = $row["name"];
                }
                if($_REQUEST['address'] != "") {
                    $address = $_REQUEST['address'];
                }
                else {
                    $address = $row["address"];
                }
                if($_REQUEST['phone'] != "") {
                    $phone = $_REQUEST['phone'];
                }
                else {
                    $phone = $row["phone_num"];
                }
                $sql = $conn->prepare('UPDATE employee SET name=?, address=?, phone_num=? WHERE ID=?');
                if(!$sql) {
                    die($conn->error);
                }
                $sql->bind_param('sssi', $name, $address, $phone, $id);
                if(!$sql->execute()) {
                    die($sql->error);
                }
            }
        }
        else {
            // This runs when there are no employees with the desired id
            // Maybe display a warning or something?
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
<h1>Edit employee</h1>
<form action="<?php $_PHP_SELF ?>" method="post">
    <h3>Please fill in the areas you want to modify with the correct ID.</h3>
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id">
    </p>
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address">
    </p>
    <p>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone">
    </p>

    <input type="submit" value="Submit">

</br></br>
<a class="btn btn-primary btn-lg" href="../employee.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>
