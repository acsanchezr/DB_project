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
<div class="functions">

<?php
/*TEST to check db can be accessed - WORKS*/

include "../connection.php";
/*rest of the code*/
    /*test*/

    if(isset($_POST['truck_plate']) && ($_REQUEST['truck_plate'] != "" && $_REQUEST['car_plate'] != "" && $_REQUEST['init_loc'] != "" && $_REQUEST['final_loc'] != "" && $_REQUEST['date'] != "" && $_REQUEST['time'] != "")) {
        $sql = "INSERT INTO towed (truck_plate, car_plate, init_loc, final_loc, date, time) VALUES ('$_REQUEST[truck_plate]', '$_REQUEST[car_plate]', '$_REQUEST[init_loc]', '$_REQUEST[final_loc]', '$_REQUEST[date]', '$_REQUEST[time]')";
        /* query database */
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    else {
        // Do nothing.
        // The form was not filled so nothing should run untill it is and sent
      //  echo "Form not filled";
    }

?>


<h1>Add an order</h1>
<h5>Please choose registered vehicles. If there are none, please add some.</h5>
<form action="<?php $_PHP_SELF ?>" method="post">
    <p>
        <label for="truck_plate"> Truck plate:</label>
        <input type="text" name="truck_plate"></br>
        <?php
            $sql = "SELECT * FROM truck";
            /* query database */
            $result = $conn->query($sql);
            if (!$result) {
                trigger_error('Invalid query: ' . $conn->error);
            }
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "Plate: " . $row["plate"].
                                " - Brand: " . $row["brand"]."<br>";}
            } else {
                echo "0 results in TRUCK";
            }
        ?>
    </p>

    <p>
        <label for="car_plate">Car plate :</label>
        <input type="text" name="car_plate"></br>
        <?php
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
    </p>

    <p>
        <label for="init_loc">Initial Location :</label>
        <input type="text" name="init_loc">
    </p>
    <p>
        <label for="final_loc">Final Location :</label>
        <input type="text" name="final_loc">
    </p>
    <p>
        <label for="date">Date :</label>
        <input type="text" name="date">
    </p>
    <p>
        <label for="time">Time :</label>
        <input type="text" name="time">
    </p>
    <input type="submit" value="Submit">
</form>

<?php
    mysqli_close($conn)
?>
</br></br>
<a class="btn btn-primary btn-lg" href="../order.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>
