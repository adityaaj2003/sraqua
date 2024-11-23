<?php
 $server = "sql300.infinityfree.com";
    $username = "if0_37608360";
    $password = "EJe5KBQhNhR";
    $database = "if0_37608360_sraqua";

// Establish a database connection
$con = new mysqli($server, $username, $password, $database);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// SQL query with proper JOIN
$sql = "SELECT 
            s.date,
            s.productID,
            P.productName,
            s.quantity,
            s.price,
            (s.quantity * s.price) AS Total
        FROM 
            productsale s
        JOIN 
            products P 
        ON 
            s.productID = P.productID";

// Prepare and execute the query
$stmt = $con->prepare($sql);

if ($stmt) {
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch results into an array
    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Return data as JSON
    echo json_encode($data);

    // Close the statement
    $stmt->close();
} else {
    // Log or display an error if the query fails
    echo json_encode(["error" => "Failed to prepare query: " . $con->error]);
}

// Close the database connection
$con->close();
?>
