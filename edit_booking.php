<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}

// Marko Magnaye
$bookingQuery = "SELECT * FROM photobooking ORDER BY event_date DESC";
$bookingResult = mysqli_query($conn, $bookingQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Manage Bookings</h2>
    <?php if (isset($_GET['msg'])): ?>
        <div class="alert alert-info">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Event Date</th>
                <th scope="col">Theme</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($booking = mysqli_fetch_assoc($bookingResult)): ?>
                <tr>
                    <td><?php echo $booking['id']; ?></td>
                    <td><?php echo $booking['customer_name']; ?></td>
                    <td><?php echo $booking['event_date']; ?></td>
                    <td><?php echo $booking['theme']; ?></td>
                    <td><?php echo $booking['email']; ?></td>
                    <td><?php echo $booking['contact_number']; ?></td>
                    <td>
                        <a href="edit_booking.php?id=<?php echo $booking['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_booking.php?id=<?php echo $booking['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <a href="add_booking.php" class="btn btn-success">Add New Booking</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
