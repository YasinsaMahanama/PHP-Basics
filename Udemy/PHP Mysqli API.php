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

    // Create a mysqli connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if (! $conn ) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    echo 'Connected successfully<br>';

    // Create the database
    $sql = 'CREATE DATABASE IF NOT EXISTS testdb';
    $retval = mysqli_query($conn, $sql);
    if (! $retval) {
        die('Could not create database: ' . mysqli_error($conn));
    }

    echo 'Database testdb created successfully<br>';

    // Create the employee table
    mysqli_select_db($conn, 'testdb');
    $sql = 'CREATE TABLE IF NOT EXISTS employee (
        emp_id INT NOT NULL AUTO_INCREMENT,
        emp_name VARCHAR(20) NOT NULL,
        emp_address VARCHAR(20) NOT NULL,
        emp_salary INT NOT NULL,
        PRIMARY KEY (emp_id)
    )';

    $retval = mysqli_query($conn, $sql);

    if (! $retval ) {
        die('Could not create table: ' . mysqli_error($conn));
    }

    echo 'Table employee created successfully<br>';

    // Insert data into the employee table
    $sql = "INSERT INTO employee(emp_name, emp_address, emp_salary) VALUES('Rajiv', 'Nanded', 10000)";

    $retval = mysqli_query($conn, $sql);

    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }

    echo 'Entered data successfully<br>';

    // Close the database connection
    mysqli_close($conn);

    ?>
</body>
</html>
