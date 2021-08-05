<?php
include('./header.php');
?>
<div class="container-fluid">
    <p id="heading">Welcome!</p>
</div>
<div class="container-md">
    <div class="container-fluid row-3 col-lg-12 page">

        <div class="box box-1 navy"></div>
        <div class="box box-2 cyan"></div>
        <div class="box box-3 tan"></div>
        <div class="box box-4 pink"></div>
        <div class="box box-5 tan"></div>
        <div class="box box-6 orange"></div>
        <div class="box box-7 cyan"></div>
        <div class="box box-8 green"></div>
        <div class="box box-9 pink"></div>
        <div class="box box-10 orange"></div>
        <div class="box box-11 navy"></div>
        <div class="box box-12 tan"></div>
    </div>
    <div class="content">
        <p>
            We’re Pakistan’s most comprehensive
            real estate, <br>construction and
            interior<br> design platform.
        </p>
    </div>
</div>
<div class="container-fluid phonetext">
    <h1 class="display-6 displayhouse">We’re Pakistan’s<br> most comprehensive
        real estate, <br>construction<br> and
        interior<br> design platform.</h1>
</div>
<div class="container-fluid app">
    <p id="heading">Download the app.</p>
</div>
<div class="wrapper-app">
    <div class="row align-items-center house_pic_about g-0 phones">
        <div class="col-md">
            <img src="images/apps.png" class="img-fluid w-50" alt="...">
            <div class="content">
                <p>Our mobile app will provide you with quick tour to our brand new houses listings.
                    <br>App will help you make payments through its online payment module.
                    <br>It will help users to submit documents for estimation of projects.
                    <br>Users can directly apply through app for online evaluation of properties and estimation of civil projects.
                </p>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid">
    <p id="heading">Hot Properties</p>
    <h4> <span class="badge bg-success">New</span></h4>
</div>
<div class="row row-cols-1 row-cols-md-4 p-4">
    <?php displayHomePage();?>
</div>
<div class="container-fluid ">
    <p id="heading">Daily Deals</p>
</div>
<div class="row justify-content-center">

    <?php displayHomePageHot();?>
</div>

<div class="container-fluid bg-white p-4 m-0">
    <p id="heading">Quick Links</p>
</div>
<div class="container-fluid p-0 bg-white">
    <div class="row justify-content-center">
        <div class="col-md-4 bg-white">
            <ul class="list-group p-5">
                <li class="list-group-item bg_app">
                    <h1>Houses for Rent</h1>
                </li>
                <?php qlForRent();?>
            </ul>
        </div>
        <div class="col-md-4 bg-white">
            <ul class="list-group p-5">
                <li class="list-group-item bg_app">
                    <h1>Properties for Sale</h1>
                </li>
                <?php qlForSale();?>
            </ul>
        </div>
        <div class="col-md-4 bg-white">
            <ul class="list-group p-5">
                <li class="list-group-item bg_app">
                    <h1>Properties for Sale</h1>
                </li>
                <?php qlForPlotSale();?>
            </ul>
        </div>
        <div class="col-md-4 bg-white">
            <ul class="list-group p-5">
                <li class="list-group-item bg_app">
                    <h1>Properties for Sale</h1>
                </li>
                <li class="list-group-item"><a href="services.php">
                        Architecture Services</a> </li>

                <li class="list-group-item"><a href="services.php">
                        Civil Works</a></li>

                <li class="list-group-item"><a href="services.php">
                        Interior Designing</a></li>

                <li class="list-group-item"><a href="services.php">
                        Structural Design Consultancy</a></li>

                <li class="list-group-item"><a href="paymentform.php">
                        Soil Testing</a></li>


            </ul>
        </div>
    </div>
</div>
<div class="col align-items-center house_pic_about g-0">
    <div class="col-md">
        <img src="images/test.png" class="img-fluid w-50" alt="buildings">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Disclaimer!</h4>
            <p>We warmly welcome you to ebtada.com. We are into marketing of our specific services in listed in our menu. Our standard Terms of Use and Privacy Policy applies to all visits to, and use of, ebtada.com or any services provided herein. Please note that ebtada.com is not intended to provide professional, financial, legal or real-estate advice.
                ebtada.com, its officers, civil engineers, affiliates, directors, employees and consultants make no representation and provide no warranty as to the accuracy or reliability of any information at ebtada.com. The user, and not ebtada.com, shall be liable for any direct or indirect loss, claim, damage (of whatsoever nature), loss of profits etc. in relation to the use of any information displayed at ebtada.com.
                Please refer to our Terms of Use, the Privacy Policy and the Cookies Policy for further details.</p>
            <hr>
            <p class="mb-0"></p>
        </div>
    </div>



</div>





<script src="javascript/gsaphomepage.js">
</script>
<?php
include('./footer.php');
?>