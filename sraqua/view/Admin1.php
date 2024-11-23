<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not authenticated
    header("Location: https://sraqua.shop/loginAdmin.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="admin1.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-brand h1">Welcome Admin</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto"> <!-- Add ml-auto here -->
            <li class="nav-item">
                <button data-section="section2" class="btn btn-primary mx-2 nav-btn">Machine Sale</button>
            </li>
            <li class="nav-item">
                <button data-section="section3" class="btn btn-primary mx-2 nav-btn">Parts Sale</button>
            </li>
            <li class="nav-item">
                <button data-section="section4" class="btn btn-primary mx-2 nav-btn">Parts Buy</button>
            </li>
            <li class="nav-item">
                <button id="customer" class="btn btn-primary mx-2 nav-btn">Customer details</button>
            </li>
            <li class="nav-item">
                <button id="logoutBtn" class="btn btn-danger mx-2">Logout</button>
            </li>
        </ul>
    </div>
</nav>


    <!-- Sections -->
    <div id="section2" class="container mt-4">
        <h2>Machine Sale Details</h2>
        <table id="recordsTable1" class="table table-striped display recordsTable">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Machine Name</th>
                    <th>Machine Price</th>
                    <th>Sale Price</th>
                    <th>Margin</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div id="section3" class="container mt-4" >
        <h2>Parts Sale Details</h2>
        <table id="recordsTable2" class="table table-striped display recordsTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div id="section4" class="container mt-4">
        <h2>Parts Buy Details</h2>
        <table id="recordsTable3" class="table table-striped display recordsTable">
            <thead>
                <tr>
                <th>Date</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <script>
    $(document).ready(function () {
        $('.nav-btn').click(function () {
            const targetSection = $(this).data('section');
            $('div[id^="section"]').hide();
            $(`#${targetSection}`).fadeIn(); // Smooth toggle
        });

        function initializeTable(tableId, url, columns) {
            $(`#${tableId}`).DataTable({
                "ajax": {
                    "url": url,
                    "type": "GET",
                    "dataSrc": "",
                    "error": function (xhr, status, error) {
                        console.error("Error fetching data for", tableId, error);
                        alert("Failed to load data.");
                    }
                },
                "columns": columns
            });
        }

        initializeTable('recordsTable1', 'fetchMachineSale.php', [
            { "data": "CustomerName" },
            { "data": "machineName" },
            { "data": "machinePrice" },
            { "data": "salePrice" },
            { "data": "margin" },
            { "data": "date" }
        ]);
        initializeTable('recordsTable2', 'fetchProductSale.php', [
            { "data": "date" },
            { "data": "productID" },
            { "data": "productName" },
            { "data": "quantity" },
            { "data": "price" },
            { "data": "Total" }
        ]);
        initializeTable('recordsTable3', 'fetchPartsBuy.php', [
            { "data": "date" },
            { "data": "productID" },
            { "data": "productName" },
            { "data": "quantity" },
            { "data": "price" },
            { "data": "Total" }
        ]);

        $('#logoutBtn').click(function () {
            window.location.href = 'logout.php'; // Redirect to logout
        });
        $('#customer').click(function () {
            window.location.href = 'Admin.php'; // Redirect to logout
        });
    });
</script>
<script>
        $(document).ready(function() { 
            $('#section3').hide();
            $('#section4').hide();
        });
        $(document).ready(function() { 
            $("#btn1").click(function(){
                $('#section3').hide();
                $('#section4').hide();
            }); 
            $("#btn2").click(function(){
                $('#section3').show();
                $('#section4').hide();
            }); 
            $("#btn3").click(function(){
                $('#section4').show();
                $('#section3').hide();
            }); 
        });
    </script>
</body>

</html>
