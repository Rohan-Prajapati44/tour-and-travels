<?php
include("connect.php");

if (isset($_POST['submit'])) {

    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $destination = $_POST['destination'];
    $message     = $_POST['message'];

    $query = "INSERT INTO tour 
              (name, email, phone, destination, message)
              VALUES 
              ('$name', '$email', '$phone', '$destination', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us | Tour & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "link.php" ?>

    <link rel="stylesheet" href="style.css">


</head>

<body>

    <?php include "navbar.php" ?>

    <!-- ===== CONTACT BANNER ===== -->
    <section class="contact-banner d-flex align-items-center justify-content-center text-center">
        <div class="content">
            <h1 class="fw-bold">Contact Us</h1>
            <p class="lead">We’re Here To Help You Travel Better</p>
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




    <?php include "footer.php" ?>

</body>

</html>