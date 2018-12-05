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
  <h1 class="display-4">Cars</h1>
  <p class="lead">Here you can check the cars that are currently in our inventory, as well as add, update, and delete existing cars. </p>
<img src="./towtruck.png" width="680" height="380">
</div>


<div class="item2">
  <hr class="my-4">
  <p>What would you like to do? </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="./display_functions/display_cars.php" role="button">Display cars</a></br></br>
    <a class="btn btn-primary btn-lg" href="./add_functions/add_car_form.php" role="button">Add a car</a></br></br>
    <a class="btn btn-primary btn-lg" href="./update_functions/edit_car_form.php" role="button">Update a car</a></br></br>
    <a class="btn btn-primary btn-lg" href="./delete_functions/delete_car_form.php" role="button">Delete a car <a></br></br>
    <a class="btn btn-primary-back btn-lg" href="./index.php" role="button">Go back</a></br></br>
     </p>
</div></div>


</div>

<?php
	$conn->close();	//close connection
?>
</body>
</html>
