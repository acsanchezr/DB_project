<?php
/*TEST to check db can be accessed - WORKS*/

include "connection.php";
/*rest of the code*/
    /*test*/
    if($_REQUEST['name'] != "" && $_REQUEST['address'] != "" && $_REQUEST['phone'] != "") {
        $sql = "INSERT INTO employee (name, address, phone_num) VALUES ('$_REQUEST[name]', '$_REQUEST[address]', '$_REQUEST[phone]')";
        /* query database */
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    else {
        echo "ERROR: Missing paramaters";
    }
    mysqli_close($conn)
?>
