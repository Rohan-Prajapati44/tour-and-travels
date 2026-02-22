<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include "link.php" ?>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- navbar  -->
    <?php include "navbar.php" ?>

    <!-- HERO SECTION -->
    <section class="hero d-flex align-items-center text-center">
        <div class="container py-5" data-aos="fade-up">

            <h1 class="fw-bold mb-3 display-6 display-md-5 display-lg-4">
                Crafting Journeys With Royal Splendor
            </h1>

            <h3 class="mb-4 fs-5 fs-md-4 fs-lg-3">
                Tour & Travelling
            </h3>

            <a class="btn btn-warning btn-lg fw-bold px-4 py-2" href="#contact-heading">
                Explore Packages
            </a>

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

    <!-- ================= DESTINATIONS ================= -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Popular Destinations</h2>
            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="zoom-in">
                    <div class="card destination shadow">
                        <img src="images/image copy.png" class="img-fluid" alt="Goa">
                        <div class="card-body text-center">
                            <h5>Goa</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="zoom-in">
                    <div class="card destination shadow">
                        <img src="images/image copy 2.png" class="img-fluid" alt="Kashmir">
                        <div class="card-body text-center">
                            <h5>Kashmir</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="zoom-in">
                    <div class="card destination shadow">
                        <img src="images/image.png" class="img-fluid" alt="Dubai">
                        <div class="card-body text-center">
                            <h5>Dubai</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PACKAGES ================= -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center section-title">Best Tour Packages</h2>

            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="fade-up">
                    <div class="card package shadow">
                        <img src="images/image copy 3.png" class="img-fluid" alt="Family Package">
                        <div class="card-body">
                            <h5>Family Package</h5>
                            <p>Enjoy quality time with your loved ones.</p>
                            <a href="contact.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="fade-up">
                    <div class="card package shadow">
                        <img src="images/image copy 4.jpeg" class="img-fluid" alt="Honeymoon Package">
                        <div class="card-body">
                            <h5>Honeymoon Package</h5>
                            <p>Romantic destinations for couples.</p>
                            <a href="contact.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="fade-up">
                    <div class="card package shadow">
                        <img src="images/image copy 5.png" class="img-fluid" alt="Adventure Tour">
                        <div class="card-body">
                            <h5>Adventure Tour</h5>
                            <p>Thrilling experiences for explorers.</p>
                            <a href="contact.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">Why Choose Us</h2>

            <div class="row text-center g-4">
                <div class="col-md-3" data-aos="flip-left">
                    <i class="fa-solid fa-crown fa-3x text-warning"></i>
                    <h5 class="mt-3">Royal Experience</h5>
                </div>

                <div class="col-md-3" data-aos="flip-left">
                    <i class="fa-solid fa-wallet fa-3x text-primary"></i>
                    <h5 class="mt-3">Best Price</h5>
                </div>

                <div class="col-md-3" data-aos="flip-left">
                    <i class="fa-solid fa-headset fa-3x text-success"></i>
                    <h5 class="mt-3">24/7 Support</h5>
                </div>

                <div class="col-md-3" data-aos="flip-left">
                    <i class="fa-solid fa-map-location-dot fa-3x text-danger"></i>
                    <h5 class="mt-3">Expert Guides</h5>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="row g-3">

            <!-- Image 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="images/image copy 10.png" class="img-fluid same-img" alt="Image 1">
                <h5 class="mt-3 text-center">Royal Rajasthan</h5>
            </div>

            <!-- Image 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="images/imagecopy1 (1).jpeg" class="img-fluid same-img" alt="Image 2">
                <h5 class="mt-3 text-center">Kerala Backwaters</h5>
            </div>

            <!-- Image 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="images/image copy 16.jpeg" class="img-fluid same-img" alt="Image 3">
                <h5 class="mt-3 text-center">Leh – Ladakh</h5>
            </div>

        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Happy Travelers</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        ⭐⭐⭐⭐⭐
                        <p>Amazing service and well-planned trip.</p>
                        <strong>– Rohit Sharma</strong>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        ⭐⭐⭐⭐⭐
                        <p>Best honeymoon experience ever!</p>
                        <strong>– Neha Verma</strong>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow">
                        ⭐⭐⭐⭐⭐
                        <p>Highly recommended travel company.</p>
                        <strong>– Amit Patel</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 contact-heading">Travel Gallery</h2>
            <div class="row g-3 travel-gallery">
                <div class="col-12 col-md-3" data-aos="zoom-in">
                    <img src="images/image copy 13.png" class="img-fluid rounded gallery-img">
                </div>
                <div class="col-12 col-md-3" data-aos="zoom-in">
                    <img src="images/image copy 5.png" class="img-fluid rounded gallery-img">
                </div>
                <div class="col-12 col-md-3" data-aos="zoom-in">
                    <img src="images/image copy 10.png" class="img-fluid rounded gallery-img">
                </div>
                <div class="col-12 col-md-3" data-aos="zoom-in">
                    <img src="images/image copy.png" class="img-fluid rounded gallery-img">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->

    <section>
        <div class="container" id="contact-heading">
            <div class="contact-heading">
                Contact US
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="contact-section py-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">

                    <form action="contact.php" method="POST" class="shadow p-4 rounded bg-white">

                        <h2 class="text-center fw-bold mb-4">Contact Us</h2>

                        <div class="row g-3">
                            <div class="col-md-6 col-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="text" name="destination" class="form-control" placeholder="Destination">
                            </div>

                            <div class="col-12">
                                <textarea name="message" rows="4" class="form-control" placeholder="Your Message"></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary px-5 py-2">
                                    Send Message
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="cta py-5 text-center">
        <div class="container" data-aos="zoom-in">
            <h2>Ready to Start Your Journey?</h2>
            <a class="btn btn-light btn-lg mt-3 fw-bold" href="contact.php">Book Now</a>
        </div>
    </section>

    <!-- footer -->
    <?php include "footer.php" ?>

</body>

</html>