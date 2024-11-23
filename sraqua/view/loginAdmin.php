<?php
session_start();
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
// Check if form data is set
if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $pass = $_POST['password'];

    // Database connection (assuming $con is already connected and initialized)
    $sql = "SELECT password FROM login WHERE username=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    
    // Check if a record was found
    if (!$result) {
        echo "<script>alert('User not found or invalid credentials.');</script>";
    } else {
        // Check password (direct comparison for plain text, or use password_verify if hashed)
        if ($pass === $result['password']) {
            $_SESSION['username'] = $name;
            header("Location: https://sraqua.shop/Admin1.php?success=1");
            exit();
        } else {
            echo "<script>alert('Invalid username or password.');</script>";
        }
    }

    $stmt->close();
} else {
    echo "<script>alert('Please enter both username and password.');</script>";
}

$con->close();
?>