<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us | Tour & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "link.php" ?>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include "navbar.php" ?>

    <section class="about-banner d-flex align-items-center justify-content-center text-center">
        <div class="content position-relative">
            <h1 class="fw-bold">About Us</h1>
            <p class="lead">Your Trusted Travel Partner</p>
        </div>
    </section>


    <!-- ===== ABOUT CONTENT ===== -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <!-- Image -->
                <div class="col-lg-6">
                    <img src="images/image copy 17.png" class="about-img" alt="About Travel">
                </div>

                <!-- Text -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Who We Are</h2>
                    <p>
                        We are a professional <strong>Tour & Travels company</strong> dedicated to providing
                        memorable travel experiences across India and abroad.
                        From family holidays to corporate tours, we ensure comfort,
                        safety, and satisfaction.
                    </p>
                    <p>
                        With experienced drivers, luxury vehicles, and customized tour packages,
                        we make every journey special and stress-free.
                    </p>
                    <a href="contact.php" class="btn btn-primary mt-2">Contact Us</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 text-primary">Why Choose Us</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="icon-box text-center">
                        <h5 class="fw-bold">Experienced Team</h5>
                        <p class="small mt-2">
                            Professional staff & drivers with years of experience.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box text-center">
                        <h5 class="fw-bold">Best Pricing</h5>
                        <p class="small mt-2">
                            Affordable packages with no hidden charges.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box text-center">
                        <h5 class="fw-bold">24/7 Support</h5>
                        <p class="small mt-2">
                            Customer support available anytime during your journey.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>

</body>

</html>