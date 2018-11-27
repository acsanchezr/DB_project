<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
    /*test*/
    // Small if statement to handle the checkbox in the form
    if ($_REQUEST['plate'] != "" && $_REQUEST['brand'] != "" && $_REQUEST['color'] != "") {
        $impounded = "0";
        $serviced = "1";
        if (isset($_POST['violation_bool']) && $_REQUEST['violation_bool'] == "1") {
            $impounded = "1";
            $serviced = "0";
        }


        $sql = "INSERT INTO car (plate, brand, color, impounded, serviced) VALUES ('$_REQUEST[plate]', '$_REQUEST[brand]', '$_REQUEST[color]', '$impounded', '$serviced')";
        /* query database */
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    else {
        echo "ERROR: Missing parameters"
    }
    mysqli_close($conn);
?>