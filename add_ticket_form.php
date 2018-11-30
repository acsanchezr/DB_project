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
<div class="functions">

<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
    /*test*/
    
    if(isset($_POST['reason']) && ($_REQUEST['reason'] != "" && $_REQUEST['description'] != "" && $_REQUEST['date_paid'] != "" && $_REQUEST['time_paid'] != "")) {
        $sql = "INSERT INTO ticket (reason, description, date_paid, time_paid) VALUES ('$_REQUEST[reason]', '$_REQUEST[description]', '$_REQUEST[date_paid]', '$_REQUEST[time_paid]')";
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
        echo "Form not filled";
    }
    mysqli_close($conn)
?>


<h1>Add a ticket</h1>
<form action="<?php $_PHP_SELF ?>" method="post">
    <p>
        <label for="reason"> reason:</label>
        <input type="text" name="reason">
    </p>
    <p>
        <label for="description">description :</label>
        <input type="text" name="description">
    </p>
    <p>
        <label for="date_paid">date_paid :</label>
        <input type="text" name="date_paid">
    </p>
    <p>
        <label for="time_paid">time_paid :</label>
        <input type="text" name="time_paid">
    </p>
    <input type="submit" value="Submit">
</form>


</br></br>
<a class="btn btn-primary btn-lg" href="./ticket.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>