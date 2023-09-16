<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL API</title>
</head>
<body>
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if (! $conn ) {
        die('Could not connect: ' . mysqli_error($mysqli)); // Added $conn here
    }

    echo 'Connected successfully<br>';

    $sql = 'CREATE DATABASE testdb';
    $retval = mysqli_query($conn, $sql);
    if (! $retval) {
        die('Could not create database: ' . mysqli_error($conn)); // Added $conn here
    }

    echo 'Database testdb created successfully<br>';

    $sql = 'CREATE TABLE employee( '.
    'emp_id INT NOT NULL AUTO_INCREMENT, '.
    'emp_name VARCHAR(20) NOT NULL, '.
    'emp_address VARCHAR(20) NOT NULL, '.
    'emp_salary INT NOT NULL, '.
    'PRIMARY KEY (emp_id))'; 

    mysqli_select_db($conn, 'testdb');
    $retval = mysqli_query($conn, $sql);

    if (! $retval ) {
        die('Could not create table: ' . mysqli_error($conn)); // Added $conn here
    }

    echo 'Table employee created successfully<br>';

    $sql = "INSERT INTO employee(emp_name, emp_address, emp_salary) VALUES('Rajiv', 'Nanded', 10000)";

    mysqli_select_db($conn, 'testdb');
    $retval = mysqli_query($conn, $sql);

    if (! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn)); // Added $conn here
    }

    echo 'Entered data successfully<br>';

    mysqli_close($conn);

    ?>
</body>
</html>
