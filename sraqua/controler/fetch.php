<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not authenticated
    header("Location: https://sraqua.shop/login.html");
    exit();
}
?>
<?php
$server = "sql300.infinityfree.com";
$username = "if0_37608360";
$password = "EJe5KBQhNhR";
$database = "if0_37608360_sraqua";

$con = new mysqli($server, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get the selected month
$month = isset($_GET['month']) ? (int)$_GET['month'] : 0;

// Calculate the six-month interval
$six_month_ahead = ($month + 6) > 12 ? ($month + 6) % 12 : ($month + 6);

$sql = "SELECT Name, Phone_Number, City, Requirement, Timestamp FROM customerDetails";
if ($month > 0) {
    $sql .= " WHERE MONTH(Timestamp) = ? OR MONTH(Timestamp) = ?";
}

$stmt = $con->prepare($sql);
if ($month > 0) {
    $stmt->bind_param("ii", $month, $six_month_ahead);
}
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$con->close();
?>
