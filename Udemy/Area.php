<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Output</title>
</head>
<body>
    <form method="POST" action="">
        Enter length  : <input type="text" name="length"><br><br>
        Enter breadth : <input type="text" name="breadth"><br><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $breadth = $_POST["breadth"];
        $area = $length * $breadth;
        echo "<br>Area = $area";
    }
    ?>
</body>
</html>
