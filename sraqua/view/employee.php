
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://sraqua.shop/emp.css">
</head>

<body>
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
    <nav class="navbar">
    <span class="h1"> Welcome Employee</span>
    <ul class="nav-links">
        <li class="nav-item"> <button onclick="display('section2')" id="btn1"class="bttn">Machine sale</button></li>
        <li class="nav-item"><button onclick="display('section3')"id="btn2" class="bttn">Parts sale</button></li>
        <li class="nav-item"><button onclick="display('section4')"id="btn3" class="bttn">Parts buy</button></li>
        <li class="nav-item">
        <button class="btn" id="logoutBtn"
            style="color:white;background-color:red;border: none;
    border-radius: 4px;
    cursor: pointer; display: block;
    width: 5vw;
    padding: 10px 0;
    margin: 5px 0;
    font-size: 1em;">Logout</button></li>
        
    </ul>
    <span class="navbar-toggle">&#9776;</span>
</nav>

    <div id="section2">
        <div class="form-container">
            <h1 class="h1">Machine sale</h1>
            <form action="machineSale.php" method="POST">
                <label for="customer-name">
                    <p class="p">Customer Name:</p>
                </label>
                <input type="text" id="customer-name" name="Cname" required>

                <label for="customer-name">
                    <p class="p">Machine name:</p>
                </label>
                <input type="text" id="customer-name" name="Mname" required>

                <label for="machine-price">
                    <p class="p">Machine Price:</p>
                </label>
                <input type="number" id="machine-price" name="MRate" step="0.01" required>

                <label for="selling-price">
                    <p class="p">Selling Price:</p>
                </label>
                <input type="number" id="selling-price" name="SRate" step="0.01" required>
                <button class="button" id="b1" type="submit">Submit</button>
            </form>
        </div>
    </div>



    <div  id="section3">
        <div class="container"  class="form-container">
            <h1 class="h1">Select Parts for sale</h1>
            <form id="partsForm" action="productSale.php" method="POST">
                <div class="part d-flex flex-row ">
                    <p class="p mr-5" for="part1">Booster pump </p>
                    <input name="P1Q" type="number" id="part1Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P1P" type="number" id="part1Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part2">100gpd membreen</p>
                    <input name="P2Q"  type="number" id="part2Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P2P"  type="number" id="part2Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part3">Pre Corbon</p>
                    <input name="P3Q"  type="number" id="part3Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P3P" type="number" id="part3Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part4">Pre Filtter</p>
                    <input name="P11Q" type="number" id="part4Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P11P" type="number" id="part4Price" min="0" placeholder="Price" 
                    onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part5">75 GPT membreen</p>
                    <input name="P4Q" type="number" id="part5Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P4P" type="number" id="part5Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part6">UV Chamber</p>
                    <input name="P5Q" type="number" id="part6Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P5P" type="number" id="part6Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part7">Regulour tap</p>
                    <input name="P6Q" type="number" id="part7Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P6P" type="number" id="part7Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part8">Teflon tape [Mobius]</p>
                    <input name="P7Q" type="number" id="part8Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P7P" type="number" id="part8Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part9">Regular sv</p>
                    <input name="P8Q" type="number" id="part9Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P8P" type="number" id="part9Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">SMPS [Lucent]</p>
                    <input name="P9Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P9P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Commercial flot</p>
                    <input name="P10Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P10P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Post corbeen</p>
                    <input name="P12Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P12P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Sedmet</p>
                    <input name="P13Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P13P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Float Switch</p>
                    <input name="P14Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P14P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">100 GPT pump</p>
                    <input name="P15Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P15P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">300 GPT pump</p>
                    <input name="P16Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P16P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">UV Lamp</p>
                    <input name="P17Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P17P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Membreen housing</p>
                    <input name="P18Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P18P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Kent type sv</p>
                    <input name="P19Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P19P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">MLT span</p>
                    <input name="P20Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P20P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Normal span</p>
                    <input name="P21Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P21P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">UV chowek</p>
                    <input name="P22Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P22P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">20'inch span</p>
                    <input name="P23Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P23P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">20'inch carboon</p>
                    <input name="P24Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P24P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Malti layar jumbo</p>
                    <input name="P25Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P25P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Jumbo span</p>
                    <input name="P26Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P26P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Jumbo housing</p>
                    <input name="P27Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P27P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Pressure gauge</p>
                    <input name="P28Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P28P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Plant sv</p>
                    <input name="P29Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P29P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Filmax copper</p>
                    <input name="P30Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P30P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Lexpure alkanine</p>
                    <input name="P31Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P31P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Lexpure copper</p>
                    <input name="P32Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P32P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Purosis meneral cottage</p>
                    <input name="P33Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P33P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Purosis alkanine</p>
                    <input name="P34Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P34P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Flow metre</p>
                    <input name="P35Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P35P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Magana tap</p>
                    <input name="P36Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P36P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Allance tap</p>
                    <input name="P37Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P37P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Diverter wall</p>
                    <input name="P38Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P38P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
            
            <div class="total">
                <button class="button" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
    <div  id="section4">
        <div class="container"  class="form-container">
            <h1 class="h1">Select Parts for buy</h1>
            <form id="partsForm" action="productBuy.php" method="POST">
                <div class="part d-flex flex-row ">
                    <p class="p mr-5" for="part1">Booster pump </p>
                    <input name="P1Q" type="number" id="part1Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P1P" type="number" id="part1Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part2">100gpd membreen</p>
                    <input name="P2Q"  type="number" id="part2Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P2P"  type="number" id="part2Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part3">Pre Corbon</p>
                    <input name="P3Q"  type="number" id="part3Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P3P" type="number" id="part3Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part4">Pre Filtter</p>
                    <input name="P11Q" type="number" id="part4Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P11P" type="number" id="part4Price" min="0" placeholder="Price" 
                    onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part5">75 GPT membreen</p>
                    <input name="P4Q" type="number" id="part5Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P4P" type="number" id="part5Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part6">UV Chamber</p>
                    <input name="P5Q" type="number" id="part6Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P5P" type="number" id="part6Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part7">Regulour tap</p>
                    <input name="P6Q" type="number" id="part7Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P6P" type="number" id="part7Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part8">Teflon tape [Mobius]</p>
                    <input name="P7Q" type="number" id="part8Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P7P" type="number" id="part8Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part9">Regular sv</p>
                    <input name="P8Q" type="number" id="part9Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P8P" type="number" id="part9Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">SMPS [Lucent]</p>
                    <input name="P9Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P9P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Commercial flot</p>
                    <input name="P10Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P10P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Post corbeen</p>
                    <input name="P12Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P12P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Sedmet</p>
                    <input name="P13Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P13P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Float Switch</p>
                    <input name="P14Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P14P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">100 GPT pump</p>
                    <input name="P15Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P15P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">300 GPT pump</p>
                    <input name="P16Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P16P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">UV Lamp</p>
                    <input name="P17Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P17P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Membreen housing</p>
                    <input name="P18Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P18P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Kent type sv</p>
                    <input name="P19Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P19P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">MLT span</p>
                    <input name="P20Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P20P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Normal span</p>
                    <input name="P21Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P21P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">UV chowek</p>
                    <input name="P22Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P22P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">20'inch span</p>
                    <input name="P23Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P23P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">20'inch carboon</p>
                    <input name="P24Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P24P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Malti layar jumbo</p>
                    <input name="P25Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P25P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Jumbo span</p>
                    <input name="P26Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P26P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Jumbo housing</p>
                    <input name="P27Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P27P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Pressure gauge</p>
                    <input name="P28Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P28P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Plant sv</p>
                    <input name="P29Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P29P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Filmax copper</p>
                    <input name="P30Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P30P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Lexpure alkanine</p>
                    <input name="P31Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P31P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Lexpure copper</p>
                    <input name="P32Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P32P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Purosis meneral cottage</p>
                    <input name="P33Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P33P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Purosis alkanine</p>
                    <input name="P34Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P34P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Flow metre</p>
                    <input name="P35Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P35P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Magana tap</p>
                    <input name="P36Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P36P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Allance tap</p>
                    <input name="P37Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P37P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
                <div class="part d-flex flex-row">
                    <p class="p" for="part10">Diverter wall</p>
                    <input name="P38Q" type="number" id="part10Quantity" min="0" placeholder="Quantity" onchange="calculateTotal()">
                    <input name="P38P" type="number" id="part10Price" min="0" placeholder="Price" onchange="calculateTotal()">
                </div>
            
            <div class="total">
                <button class="button" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
    <script>
    $('#logoutBtn').on('click', function() {
        window.location.href = 'logout.php';
    });
</script>
    <script>
      
    function display(sectionId) {
        document.querySelectorAll('div[id^="section"]').forEach((section) => {
        section.style.display = "none";
    });
    document.getElementById(sectionId).style.display = "block";
}

// Initially display only the first section

display('section2');

    </script>
</body>

</html>