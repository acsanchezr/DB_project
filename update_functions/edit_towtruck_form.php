<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300|Niramit|Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./style.css">
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
    
    // This if is for when the user wants to change both the plate and brand
	if(isset($_POST['plate']) && $_REQUEST['plate'] != "" && $_REQUEST['plate_n'] != "" && $_REQUEST['brand'] != "") {
        $plate_n = $_REQUEST['plate_n'];
        $plate = $_REQUEST['plate'];
        $sql = $conn->prepare('UPDATE truck SET plate=?, brand=? WHERE plate=?');
        if(!$sql) {
            die($conn->error);
        }
        $sql->bind_param('sss', $plate_n, $_REQUEST['brand'], $plate);
        if(!$sql->execute()) {
            die($sql->error);
        }
    }
    elseif(isset($_POST['plate']) && $_REQUEST['plate'] != "" && $_REQUEST['brand'] != "" && $_REQUEST['plate_n'] == "") {
        // This runs when the user only wants to change the plate
        // and nothing else
        $plate = $_REQUEST['plate'];
        $sql = $conn->prepare('UPDATE truck SET brand=? WHERE plate=?');
        if(!$sql) {
            die($conn->error);
        }
        $sql->bind_param('ss', $_REQUEST['brand'], $plate);
        if(!$sql->execute()) {
            die($sql->error);
        }
    }
    elseif(isset($_POST['plate']) && $_REQUEST['plate'] != "" && $_REQUEST['plate_n'] != "") {
        // This is for when they only want to change the plate
        $plate_n = $_REQUEST['plate_n'];
        $plate = $_REQUEST['plate'];
        $sql = $conn->prepare('UPDATE truck SET plate=? WHERE plate=?');
        if(!$sql) {
            die($conn->error);
        }
        $sql->bind_param('ss', $plate_n, $plate);
        if(!$sql->execute()) {
            die($sql->error);
        }
    }

    /* End of update query */


    // Redisplay the page as normal
    $sql = "SELECT * FROM truck";
	/* query database */
	$result = $conn->query($sql);
	if (!$result) {
	    trigger_error('Invalid query: ' . $conn->error);
	}
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		 	echo "Truck plate number: " . $row["plate"].
							" - Brand: " . $row["brand"]."<br>";}
		} else {
		    echo "0 results in TRUCK";
		}
?>

<div class="functions">
<h1>Edit Tow truck</h1>
<form action="<?php $_PHP_SELF ?>" method="post">
    <h3>Please fill in the areas you want to modify with the correct plate.</h3>
    <p>
        <label for="plate">Plate Number:</label>
        <input type="text" name="plate">
    </p>
    <p>
        <label for="plate_n">New Plate Number:</label>
        <input type="text" name="plate_n">
    </p>
    <p>
        <label for="brand">Brand:</label>
        <input type="text" name="brand">
    </p>
    
    <input type="submit" value="Submit">

</br></br>
<a class="btn btn-primary btn-lg" href="../tow_truck.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>