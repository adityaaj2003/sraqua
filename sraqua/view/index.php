<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://sraqua.shop/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">

                <img src="https://yt3.ggpht.com/Hwr-A4jXxwODYL52aUwWkL_-5wQ78dP0Qkft6FT8hLVHaAqApP6_30q56KrJn903Xj1y1ce0hcjpcA=s618-rw-nd-v1" class="food-munch-logo" />

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" id="navItem1" href="#wcuSection">
                        How SR-AQUA help's you?
                        
                    </a>
                    <a class="nav-link" href="#exploreMenuSection" id="navItem2">Brands we Have and Repair</a>

                    <a class="nav-link" href="#followUsSection" id="navItem4">Follow Us</a>
                    
                    <a class="nav-link" href="https://sraqua.shop/loginEmp.html" id="navItem4">Employee</a>
                    
                    <a class="nav-link" href="https://sraqua.shop/loginAdmin.html" id="navItem4">Admin</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="banner-section-bg-container d-flex justify-content-center flex-column">
        <div class="text-center">

            <img src="https://servicejunction.co/wp-content/uploads/2019/03/purifier.png" class="aqua_photo" />

            <h1 class="banner-heading mb-3">Protect Your </br> Family & Friends </br> with SR-AQUA</h1>
            <p class="banner-caption mb-4">Sure for Pure </br> Phone:
                <a href="tel:+917090306363"> +917090306363</a> & <a href="tel:+917090306399"> +917090306399</a>
            </p>      
            <form class="form" id="myForm" action="https://sraqua.shop/addToDB.php" method="GET">
                 <b>Contact Information</b>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
            
                <div>
                    <label for="phone">Phone no:</label>
                    <input type="number" id="phone" name="phone" required>
                </div>
            
                <div>
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
            
                <!-- Requirement label and checkboxes in the same line -->
                <div class="checkbox-group">
                    <label class="bold-text">Requirement:</label>
                    
                    <label for="buy">
                        <input type="checkbox" id="buy" name="requirement[]" value="Buy">
                        Buy
                    </label>
            
                    <label for="service">
                        <input type="checkbox" id="service" name="requirement[]" value="Service">
                        Service
                    </label>
            
                    <label for="enquiry">
                        <input type="checkbox" id="enquiry" name="requirement[]" value="Enquiry">
                        Enquiry
                    </label>
                </div>
            
                <div class="button-group">
                    <button id="but" type="submit">Submit</button>
                </div>
                
                
  <script>
$(document).ready(function() {
    $('.thank').hide();
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
      
        // Serialize form data
        var formData = $(this).serialize();
        console.log('script');
        // Use AJAX to submit form data
        $.ajax({
            type: 'GET',
            url: 'https://sraqua.shop/addToDB.php',
            data: formData,
            success: function(response) {
                // Hide the form
                $('#myForm').hide();
                // Show success message
                $('.thank').show();
            },
           error: function(xhr, status, error) {
            alert('An error occurred: ' + xhr.responseText);
            }

        });
    });
});
</script>
            </form>
            <div class="thank">
                <b>Thank you for your details</b>
            </div>
 
             
        </div>
    </div>
    <div class="wcu-section pt-5 pb-5" id="wcuSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="wcu-section-heading">How SR-AQUA help's you?</h1>
                    <p class="wcu-section-description">
                        Purifying water using the traditional methods don’t remove soluable impurities like arsenic, floride, chemicals, salts, etc. from water. This is how SR-AQUA Water Purifiers can help you out. SR-AQUA Purifiers remove dissolved impurities but maintain essential minerals in purified water.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wcu-card p-3 mb-3">
                        <img src="https://yt3.ggpht.com/k6-3jjkv8l0OZ5jqRxuWTLsjRhFUCuYNL72LMYJ46sTVpnZ4bLsq-WulENQF-S3i1XJK2D-Xe-Tb=s500-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="wcu-card-image" />
                        <h1 class="wcu-card-title mt-3">Give's 100% Pure Water</h1>
                        <p class="wcu-card-description">
                            The multiple purification process of</br> RO+UV+UF+TDS Control+ UV disinfection in storage tank </br> makes the drinking water 100% pure.
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wcu-card p-3 mb-3">
                        <img src="https://yt3.ggpht.com/SOhOGisaJCenHy281ybYODsNacbMzzB-HRsT8cR-22jWGv5T-ZABSCmsd_eu1vlgAyKqwrcfZ9zc=s500-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="wcu-card-image" />
                        <h1 class="wcu-card-title mt-3">1 Year Warranty & 4 Years Free</h1>
                        <p class="wcu-card-description">
                            Get complete peace of mind with 1 Year Warranty </br> + 4 Years Free Service.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="wcu-card p-3 mb-3">
                        <img src="https://yt3.ggpht.com/WPgTV4GtfqgdUu0TCz3vw6IsD5XMlHsyiAb-o2obbo1nIZSgMytNG-aUi6SDIZ22O9-b3kbzOts28Q=s500-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="wcu-card-image" />
                        <h1 class="wcu-card-title mt-3">High Storage and Purification Capacity</h1>
                        <p class="wcu-card-description">
                            For the convenience of the users, the water purifier comes with a high storage capacity of 8 litres and a purification capacity of 15 L/hr.** This ensures that you get continuous supply of purified water even in the absence of electricity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="explore-menu-section pt-5 pb-5" id="exploreMenuSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="menu-section-heading">BRANDS WE HAVE AND REPAIR</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="shadow menu-item-card p-3 mb-3">
                        <img src="https://servicejunction.co/wp-content/uploads/2019/03/purifier.png" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">DOMESTIC RO WATER PURIFIER</h1>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="shadow menu-item-card p-3 mb-3">
                        <img src="https://yt3.ggpht.com/vQIpJCqbS7W5v-hPOWwSkfnsnmULJetiGd7E1W7HjLJcwzqxUUJc_XtwimO6557Lp-5yWPeYKd5T5g=s500-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">UNDER SINK WATER PURIFIER</h1>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="https://yt3.ggpht.com/IdToJvd2GmX1-KOcGyVxftCCGO9Csc4snHy3pqahd3r8m9EFLBQUgg3My2zkHdnRzYtXGTKgpktJgw=s1080-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">WATER SOFTENER </h1>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="https://yt3.ggpht.com/NBjUGYT22S0vM3JzRdRPBdDoFbgfU1pjAlql_AD0dbWUQv6EyAibUnre4NWJEe9qzStNFaFolaGHBQ=s1080-c-fcrop64=1,22920000dd61ffff-rw-nd-v1" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">INDUSTRIAL RO PLANT</h1>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card shadow p-3 mb-3">
                        <img src="https://yt3.ggpht.com/dv1A2vjc3ZQLC46SSCHy2qXr2C24_c4rwNrvyifKBP7zRbKnQdQ795F6LMMxueCKVxULB340JcWo=s1080-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="menu-item-image w-100" />
                        <h1 class="menu-card-title">COMMERCIAL RO PLANT</h1>

                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="healthy-food-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="text-center">
                        <img src="https://yt3.ggpht.com/IdToJvd2GmX1-KOcGyVxftCCGO9Csc4snHy3pqahd3r8m9EFLBQUgg3My2zkHdnRzYtXGTKgpktJgw=s1080-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="healthy-food-section-img" />
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="healthy-food-section-heading">
                        WATER SOFTENER
                    </h1>
                    <p class="healthy-food-section-description">
                        Due to the presence of excess minerals such as calcium and magnesium hard water and it leads to a variety of problems such as foul plumbing, scaling, galvanic corrosion, dry skin, and many skin related issues.
                        </br>Water Softener is the best solution for all hard water related problems and cleanses every drop of water and making hardness free, Water Softener for house.
                    </p>

                </div>
                <div class="col-12 col-md-5">
                    <div class="text-center">
                        <img src="https://yt3.ggpht.com/NBjUGYT22S0vM3JzRdRPBdDoFbgfU1pjAlql_AD0dbWUQv6EyAibUnre4NWJEe9qzStNFaFolaGHBQ=s1080-c-fcrop64=1,22920000dd61ffff-rw-nd-v1" class="healthy-food-section-img" />
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="healthy-food-section-heading">
                        INDUSTRIAL RO PLANT
                    </h1>
                    <p class="healthy-food-section-description">
                        Industrial Ro Plant is Skid Mounted System and it is Installed at Anyplace with water Inlet.
                        </br>This system consists of Raw water Pump that Removes Turbidity, Activated Carbon Filter Removes Smell & Color, Antiscalant Dosing Worked For The Reverse Osmosis System.
                    </p>

                </div>
                <div class="col-12 col-md-5">
                    <div class="text-center">
                        <img src="https://yt3.ggpht.com/dv1A2vjc3ZQLC46SSCHy2qXr2C24_c4rwNrvyifKBP7zRbKnQdQ795F6LMMxueCKVxULB340JcWo=s1080-c-fcrop64=1,00000000ffffffff-rw-nd-v1" class="healthy-food-section-img" />
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="healthy-food-section-heading">
                        COMMERCIAL RO PLANT
                    </h1>
                    <p class="healthy-food-section-description">
                        The RO System works on the principle of Reverse osmosis, also known as hyper-filtration.
                        </br>One of the finest techniques for treating water, reverse osmosis eliminates contaminants from water thus making it fit for drinking purpose and other commercial and industrial applications.
                    </p>

                </div>


            </div>
        </div>
    </div>

    <div class="thanking-customers-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center">
                    <h1 class="thanking-customers-section-heading">
                        Thank you for being a valuable customer to us.
                    </h1>

                    <div class="d-md-none text-center">
                        <img src="https://yt3.ggpht.com/Hwr-A4jXxwODYL52aUwWkL_-5wQ78dP0Qkft6FT8hLVHaAqApP6_30q56KrJn903Xj1y1ce0hcjpcA=s618-rw-nd-v1" class="thanking-customers-section-img" />
                    </div>

                </div>
                <div class="col-12 col-md-5 d-none d-md-block text-center">
                    <img src="https://yt3.ggpht.com/Hwr-A4jXxwODYL52aUwWkL_-5wQ78dP0Qkft6FT8hLVHaAqApP6_30q56KrJn903Xj1y1ce0hcjpcA=s618-rw-nd-v1" class="thanking-customers-section-img" />
                </div>
            </div>
        </div>
    </div>
    <div class="follow-us-section pt-5 pb-5" id="followUsSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="follow-us-section-heading">Follow Us</h1>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-row justify-content-center">


                        <a href="https://wa.me/917090306363">
                            <div class="follow-us-icon-container">
                                <i class="fab fa-whatsapp icon"></i>
                            </div>
                        </a>

                        <a href="https://www.instagram.com/sraqua24?igsh=YW43eXZjam9qdzY=">
                            <div class="follow-us-icon-container">
                                <i class="fab fa-instagram icon"></i>
                            </div>

                        </a>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="https://yt3.ggpht.com/Hwr-A4jXxwODYL52aUwWkL_-5wQ78dP0Qkft6FT8hLVHaAqApP6_30q56KrJn903Xj1y1ce0hcjpcA=s618-rw-nd-v1" class="food-munch-logo" />
                    <h1 class="footer-section-mail-id">sraqua2024@gmail.com</h1>
                    <p class="footer-section-address">
                        &copy SRAQUA
                        Muddebihal, Bijapur, Karnataka.<br>
                        All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>