<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record in MySQL Database</title>
</head>

<body>

<?php
if(isset($_POST['add'])){
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'testdb';

    // Create a mysqli connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    // Check if variables are set
    if(isset($_POST['emp_name']) && isset($_POST['emp_address']) && isset($_POST['emp_salary'])){
        $emp_name = $_POST['emp_name'];
        $emp_address = $_POST['emp_address'];
        $emp_salary = $_POST['emp_salary'];

        // Insert data into the employee table
        $sql = "INSERT INTO employee(emp_name, emp_address, emp_salary) VALUES(?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $emp_name, $emp_address, $emp_salary);
        if (mysqli_stmt_execute($stmt)) {
            echo 'Entered data successfully: ' .'<br>';
        } else {
            echo 'Could not enter data: ' . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table border="5px">
            <tr>
                <td width="100">Employee Name</td>
                <td><input name="emp_name" type="text"></td>
            </tr>
            <tr>
                <td width="100">Employee Address</td>
                <td><input name="emp_address" type="text"></td>
            </tr>
            <tr>
                <td width="100">Employee Salary</td>
                <td><input name="emp_salary" type="text"></td>
            </tr>
            <tr>
                <td width="100"></td>
                <td><input name="add" type="submit" value="Add Employee"></td>
            </tr>
        </table>
    </form>

</body>
</html>
