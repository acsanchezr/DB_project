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

    // This if is for when the user wants to change plate and anything else
	if(isset($_POST['plate']) && ($_REQUEST['plate'] != "" && $_REQUEST['plate_n'] != "")) {
        $plate_n = $_REQUEST['plate_n'];
        $plate = $_REQUEST['plate'];
        $sql = "SELECT * FROM car WHERE plate = '$plate'";
        $result = $conn->query($sql);
        if(!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        elseif ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($_REQUEST['brand'] != "") {
                    $brand = $_REQUEST['brand'];
                }
                else {
                    $brand = $row["brand"];
                }
                if($_REQUEST['color'] != "") {
                    $color = $_REQUEST['color'];
                }
                else {
                    $color = $row["color"];
                }
                if(isset($_REQUEST['flip'])) {
                    $imp = $row["serviced"];
                    $ser = $row["impounded"];
                }
                else{
                    $imp = $row["impounded"];
                    $ser = $row["serviced"];
                }
                $sql = $conn->prepare('UPDATE car SET plate=?, brand=?, color=?, impounded=?, serviced=? WHERE plate=?');
                if(!$sql) {
                    die($conn->error);
                }
                $sql->bind_param('sssiis', $plate_n, $brand, $color, $imp, $ser, $plate);
                if(!$sql->execute()) {
                    die($sql->error);
                }
            }
        }
    }
    elseif(isset($_POST['plate']) && $_REQUEST['plate'] != "") {
        // User wants to change anything but the plate
        $plate = $_REQUEST['plate'];
        $sql = "SELECT * FROM car WHERE plate = '$plate'";
        $result = $conn->query($sql);
        if(!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        elseif ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($_REQUEST['brand'] != "") {
                    $brand = $_REQUEST['brand'];
                }
                else {
                    $brand = $row["brand"];
                }
                if($_REQUEST['color'] != "") {
                    $color = $_REQUEST['color'];
                }
                else {
                    $color = $row["color"];
                }
                if(isset($_REQUEST['flip'])) {
                    $imp = $row["serviced"];
                    $ser = $row["impounded"];
                }
                else{
                    $imp = $row["impounded"];
                    $ser = $row["serviced"];
                }
                $sql = $conn->prepare('UPDATE car SET brand=?, color=?, impounded=?, serviced=? WHERE plate=?');
                if(!$sql) {
                    die($conn->error);
                }
                $sql->bind_param('ssiis', $brand, $color, $imp, $ser, $plate);
                if(!$sql->execute()) {
                    die($sql->error);
                }
            }
        }
    }
    /* End of update query */


    // Redisplay the page as normal
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

<div class="functions">
<h1>Edit Car</h1>
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
    <p>
        <label for="color">Color:</label>
        <input type="text" name="color">
    </p>
    <p>
        <label for="flip">Change whether impounded or serviced?:</label>
        <input type="checkbox" name="flip" value="1">
    </p>

    <input type="submit" value="Submit">

</br></br>
<a class="btn btn-primary btn-lg" href="../cars.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>
