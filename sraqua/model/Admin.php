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
    <title>Admin Panel</title>
    <link rel="stylesheet" href="common.css">

    <!-- jQuery and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <style>
        .bg2 #back
        {
            background-color: #f44336;
            font-size: 1em;
            text-align: center;
            font-weight: bold;
            color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
            padding: 12px 0;
            margin: 8px 0;
        }
        #logoutBtn{
            color: #333;
            background-color: #f44336;
            text-align: center;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer; display: block;
            width: 100%;
            
            padding: 10px 0;
            margin: 5px 0;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="bg1">
        <div class="bg2">
            <h3 class="h1">Customer Details of</h3>

            <button class="btn" data-month="0">All</button>
            <button class="btn" data-month="1">January</button>
            <button class="btn" data-month="2">February</button>
            <button class="btn" data-month="3">March</button>
            <button class="btn" data-month="4">April</button>
            <button class="btn" data-month="5">May</button>
            <button class="btn" data-month="6">June</button>
            <button class="btn" data-month="7">July</button>
            <button class="btn" data-month="8">August</button>
            <button class="btn" data-month="9">September</button>
            <button class="btn" data-month="10">October</button>
            <button class="btn" data-month="11">November</button>
            <button class="btn" data-month="12">December</button>
            <button id="back"> Back </button>
            <button id="logoutBtn">Logout</button>
        </div>
        
        <div class="bg3">
            <h2>SR Aqua</h2>
            <table id="recordsTable" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Requirement</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated by DataTables via AJAX -->
                </tbody>
            </table>
            
<script>
    $('#logoutBtn').on('click', function() {
        window.location.href = 'logout.php';
    });
    $('#back').on('click', function() {
        window.location.href = 'Admin1.php';
    });
</script>
        </div>
        

    </div>

    <script>
    $(document).ready(function() {
        const table = $('#recordsTable').DataTable({
            "ajax": {
        "url": "fetch.php",
        "type": "GET",
        "dataSrc": ""
    },
    "columns": [
        { "data": "Name" },          
        { "data": "Phone_Number" },        
        { "data": "City" },
        { "data": "Requirement" },
        { "data": "Timestamp" }
    ],
            "dom": 'Bfrtip', // Add the buttons to the table
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: 'Download Excel file',
                    className: 'export-btn'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'Download PDF',
                    className: 'export-btn'
                }
            ]
        });

        // Filter by month when a button is clicked
        $('.btn').on('click', function() {
            const month = $(this).data('month');
            table.ajax.url(`fetch.php?month=${month}`).load();
        });
    });
    </script>
</body>
</html>
