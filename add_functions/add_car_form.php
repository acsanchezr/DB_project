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

<h1>Add a car</h1>

<form action="add_car.php" method="post">
    <p>
        <label for="plate">Plate:</label>
        <input type="text" name="plate">
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
        <label for="violation_bool">Towed for violation?</label>
        <input type="checkbox" name="violation_bool" value="1">
    </p>
    <input type="submit" value="Submit">
</form>


</br></br>
<a class="btn btn-primary btn-lg" href="../cars.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>
