<?php

    $server = "sql300.infinityfree.com";
    $username = "if0_37608360";
    $password = "EJe5KBQhNhR";
    $database = "if0_37608360_sraqua";


$con = new mysqli($server, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

for ($i = 1; $i <= 38; $i++) {
    // Collect quantity and price from POST data
    $productID = "P{$i}";
    $quantity = isset($_POST["{$productID}Q"]) ? (int)$_POST["{$productID}Q"] : 0;
    $price = isset($_POST["{$productID}P"]) ? (int)$_POST["{$productID}P"] : 0;

    // Proceed if quantity or price is greater than zero
    if ($quantity > 0 || $price > 0) {
        // Insert into prodsale table
        $insertQuery = "INSERT INTO productbuy (productID, date, Quantity, price,Total) VALUES (?, NOW(), ?, ?,?)";
        $stmtInsert = $con->prepare($insertQuery);
         $total=$quantity*$price;
        if ($stmtInsert) {
            $stmtInsert->bind_param("siii", $productID, $quantity, $price,$total);
            if ($stmtInsert->execute()) {
                // Fetch current stock
                $stockQuery = "SELECT stocks FROM products WHERE productID = ?";
                $stmtStock = $con->prepare($stockQuery);

                if ($stmtStock) {
                    $stmtStock->bind_param("s", $productID);
                    $stmtStock->execute();
                    $resultStock = $stmtStock->get_result();
                    $stockRow = $resultStock->fetch_assoc();

                    if ($stockRow) {
                        // Calculate new stock
                        $newStock = $stockRow['stocks'] + $quantity;

                        // Update the stock in products table
                        $updateQuery = "UPDATE products SET stocks = ? WHERE productID = ?";
                        $stmtUpdate = $con->prepare($updateQuery);

                        if ($stmtUpdate) {
                            $stmtUpdate->bind_param("is", $newStock, $productID);
                            if (!$stmtUpdate->execute()) {
                                echo "Error updating stock: " . $stmtUpdate->error;
                            }
                            $stmtUpdate->close();
                        } else {
                            echo "Error preparing stock update statement: " . $con->error;
                        }
                    }
                    $stmtStock->close();
                } else {
                    echo "Error preparing stock fetch statement: " . $con->error;
                }
            } else {
                echo "Error inserting into prodsale: " . $stmtInsert->error;
            }
            $stmtInsert->close();
        } else {
            echo "Error preparing insert statement: " . $con->error;
        }
    }
}

$con->close();

// Redirect after successful processing
// Uncomment the line below for actual use
header("Location: employee.php?success=1");
?>
