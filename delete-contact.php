<?php
include("connect.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // 🔹 User ka data nikal lo (email ke liye)
    $select = "SELECT * FROM tour WHERE id='$id'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);

    $user_email = $row['email'];
    $user_name  = $row['name'];

    // 🔹 Delete query
    $delete = "DELETE FROM tour WHERE id='$id'";

    if (mysqli_query($conn, $delete)) {

        // 🔔 Email Notification to User
        $to = $user_email;
        $subject = "Your Enquiry Has Been Closed";
        $message = "
Hello $user_name,

Thank you for contacting us.
Your enquiry has been successfully reviewed and closed.

For any further help, feel free to contact us again.

Regards,
Tour & Travels Team
        ";

        $headers = "From: noreply@tourtravels.com";

        mail($to, $subject, $message, $headers);

        echo "<script>
                alert('Enquiry deleted & user notified successfully!');
                window.location.href='contact-show.php';
              </script>";
    }
}
