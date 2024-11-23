<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");



    $server = "sql300.infinityfree.com";
    $username = "if0_37608360";
    $password = "EJe5KBQhNhR";
    $database = "if0_37608360_sraqua";

    // Connect to the database
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Collect data from POST request with security handling
    $name = $_GET['name'];
    $phone =  $_GET['phone'];
    $city = $_GET['city'];

    // Handle the 'requirement' field if set
    $requirements_str = "";
    if (isset($_POST['requirement'])) {
        $requirements = $_GET['requirement'];
        $requirements_str = mysqli_real_escape_string($con, implode(', ', $requirements));
    }

    // Display sanitized user input for verification
    // echo "Name: " . htmlspecialchars($name) . "<br>";
    // echo "Phone: " . htmlspecialchars($phone) . "<br>";
    // echo "City: " . htmlspecialchars($city) . "<br>";
    // echo "Requirements: " . htmlspecialchars($requirements_str) . "<br>";

    // Create and execute the SQL query
    $create = "INSERT INTO customerDetails (Name, Phone_Number, City, Timestamp, Requirement) 
               VALUES ('$name', '$phone', '$city', NOW(), '$requirements_str')";

    if ($con->query($create) === TRUE) {
        // Redirect upon successful insertion
        header("Location:https://sraqua.shop/index.php?success=1");
        exit();
    } else {
        // Display the SQL error if query fails
        echo "Error: " . $create . "<br>" . $con->error;
    }

    // Close the connection
    $con->close();
?>
