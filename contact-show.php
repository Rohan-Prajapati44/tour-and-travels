<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Enquiry List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }

        .table-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>

<body>

    <!-- ===== PAGE HEADER ===== -->
    <section class="py-4 bg-primary text-white text-center">
        <h2 class="fw-bold mb-0">Contact Enquiries</h2>
        <p class="mb-0 fs-6">Tour & Travels Contact Messages</p>
    </section>

    <!-- ===== TABLE SECTION ===== -->
    <section class="py-5">
        <div class="container">

            <div class="table-card p-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Destination</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = "SELECT * FROM tour ORDER BY id DESC";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['destination']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <td><?php echo $row['created_at']; ?></td>
                                        <td>
                                            <a href="delete-contact.php?id=<?php echo $row['id']; ?>"
                                                onclick="return confirm('Are you sure you want to delete this enquiry?')"
                                                class="btn btn-danger btn-sm">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='7' class='text-center'>No Enquiries Found</td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>