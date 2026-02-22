<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour Packages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include "link.php" ?>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php" ?>

<!-- ===== PACKAGES BANNER ===== -->
<section class="package-banner d-flex align-items-center justify-content-center text-center">
    <div class="content">
        <h1 class="fw-bold">Our Tour Packages</h1>
        <p class="lead">Choose Your Perfect Holiday</p>
    </div>
</section>

<!-- ===== PACKAGES SECTION ===== -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- Package 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card package-card">
                    <img src="images/image copy 18.png"
                         class="package-img" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Goa Holiday</h5>
                        <p class="small text-muted">3 Nights / 4 Days</p>
                        <p class="small">
                            Enjoy beaches, nightlife and water sports with our Goa package.
                        </p>
                        <p class="price">₹9,999 / person</p>
                        <a href="#" class="btn btn-primary btn-sm">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Package 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card package-card">
                    <img src="images/image copy 22.png"
                         class="package-img" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Manali Trip</h5>
                        <p class="small text-muted">4 Nights / 5 Days</p>
                        <p class="small">
                            Snow mountains, adventure activities & scenic views.
                        </p>
                        <p class="price">₹14,999 / person</p>
                        <a href="#" class="btn btn-primary btn-sm">Book Now</a>
                    </div>
                </div>
            </div>

            

            <!-- Package 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card package-card">
                    <img src="images/image copy 21.png"
                         class="package-img" alt="">
                    <div class="card-body">
                        <h5 class="fw-bold">Kashmir Tour</h5>
                        <p class="small text-muted">5 Nights / 6 Days</p>
                        <p class="small">
                            Heaven on earth with snow & valleys.
                        </p>
                        <p class="price">₹21,999 / person</p>
                        <a href="#" class="btn btn-primary btn-sm">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>


</body>
</html>
