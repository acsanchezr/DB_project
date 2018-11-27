<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
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
</body>
</html>