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
<h1>Add employee</h1>
<form action="add_employee.php" method="post">
    <p>
        <label for="name">Full Name:</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address">
    </p>
    <p>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone">
    </p>
    <input type="submit" value="Submit">
</form>


</br></br>
<a class="btn btn-primary btn-lg" href="../employee.php" role="button">go back<a></br></br>
</div>
</body>
</html>
</body>
</html>
