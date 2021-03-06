<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300|Niramit|Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="animate.css">

<title>Database Project</title>
</head>
<body>
	<?php
		include "connection.php"; // connect to db
	?>

<div class="jumbotron">
<div class="grid-container">
  <div class="item1">
  <h1 class="display-4">Orders</h1>
  <p class="lead">Here you can check current orders, as well as add, update, and delete them. </p>
  <img src="./towtruck.png" width="680" height="380">
</div>

<div class="item2">
  <hr class="my-4">
  <p>What would you like to do? </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="./display_functions/display_orders.php" role="button">Display orders</a></br></br>
		<a class="btn btn-primary btn-lg" href="./add_functions/add_order_form.php" role="button">Add an order</a></br></br>
    <a class="btn btn-primary btn-lg" href="./update_functions/display_orders.php" role="button">Update an order</a></br></br>
    <a class="btn btn-primary btn-lg" href="./delete_functions/delete_order_form.php" role="button">Delete an order <a></br></br>
    <a class="btn btn-primary-back btn-lg" href="./index.php" role="button">Go back</a></br></br></br></br>
  </p>
</div>
</div>
</div>

<?php
	$conn->close();	//close connection
?>
</body>
</html>
