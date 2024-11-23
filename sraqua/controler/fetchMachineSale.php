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

$sql = "SELECT CustomerName, machineName, machinePrice, salePrice,margin, date FROM machinesale";


$stmt = $con->prepare($sql);

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
