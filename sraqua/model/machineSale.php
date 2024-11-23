<?php

    $server = "sql300.infinityfree.com";
    $username = "if0_37608360";
    $password = "EJe5KBQhNhR";
    $database = "if0_37608360_sraqua";
$con = new mysqli($server, $username, $password, $database);
echo 'Entered';
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$Uname = $_POST['Cname'];
$Mname = $_POST['Mname'];
$MRate = $_POST['MRate'];
$SRate = $_POST['SRate'];
$margin = $SRate - $MRate;

$create = "INSERT INTO machinesale (CustomerName, machineName, machinePrice, salePrice, margin, date) 
           VALUES (?, ?, ?, ?, ?, NOW())";
$stmtCreate = $con->prepare($create);

// Bind parameters with correct types
$stmtCreate->bind_param("ssiii", $Uname, $Mname, $MRate, $SRate, $margin);

if ($stmtCreate->execute()) {
    // alert("Thank you");
    header("Location: employee.php?success=1");
        exit();
} else {
    echo "Error: " . $stmtCreate->error;
}

// Close connections
$stmtCreate->close();
$con->close();
?>
