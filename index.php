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
	<p class="lead">
  	<a class="btn btn-primary btn-lg" href="./employee.php" role="button">Employees</a>
    <a class="btn btn-primary btn-lg" href="./cars.php" role="button">Cars</a>
    <a class="btn btn-primary btn-lg" href="./ticket.php" role="button">Tickets</a>
    <a class="btn btn-primary btn-lg" href="./tow_truck.php" role="button">Tow Trucks</a>
    <a class="btn btn-primary btn-lg" href="./order.php" role="button">Order</a>
  </p>

  <div align="center">
  <h1 class="display-4">Welcome!</h1>
  <p class="lead">This is a website for a tow truck company, created as a project
  for a databases course </p>
  <hr class="my-4">
  <div><img src="./towtruck.png" width="680" height="380"></div>
</div>

</div>

<?php 
	$conn->close();	//close connection
?>
</body>
</html>



