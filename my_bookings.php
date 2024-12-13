<?php
@include 'config.php';
//Jay Vanguardia
session_start();


if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}

$user_name = $_SESSION['user_name'];

$query = "SELECT * FROM photobooking WHERE customer_name = '$user_name' ORDER BY event_date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings - Photo Booking</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Maximize space and adjust layout */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container-fluid {
            padding: 0;
        }

        .sidebar {
            background-color: #3f0071;
            width: 250px;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #ffffff;
            padding: 12px 20px;
            font-size: 1rem;
        }

        .sidebar .nav-link:hover {
            color: #3f0071;
            background-color: #ffffff;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Table styling */
        .table {
            width: 100%;
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: left;
            vertical-align: middle;
        }

        .table td {
            padding: 12px;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table th {
            background-color: #3f0071;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 0;
                padding: 10px;
            }

            .table td, .table th {
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 sidebar d-md-block p-2">
            <div class="text-center text-white py-3">
                <h4>Welcome, <span><?php echo $_SESSION['user_name']; ?></span></h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="user_page.php">
                        <i class="bi bi-house-fill"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="browse_services.php">
                        <i class="bi bi-briefcase-fill"></i> Browse Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="photobooking.php">
                        <i class="bi bi-calendar-check-fill"></i> Photo Booking
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-10 ms-sm-auto main-content">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">My Bookings</h1>
            </div>

            <div class="container">
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Event Date</th>
                                <th scope="col">Theme</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Package</th>
                                <th scope="col">Special Instructions</th>
                                <th scope="col">Services</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($booking = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $booking['customer_name']; ?></td>
                                    <td><?php echo $booking['event_date']; ?></td>
                                    <td><?php echo $booking['theme']; ?></td>
                                    <td><?php echo $booking['email']; ?></td>
                                    <td><?php echo $booking['contact_number']; ?></td>
                                    <td><?php echo $booking['venue']; ?></td>
                                    <td><?php echo $booking['package']; ?></td>
                                    <td><?php echo $booking['custom_notes']; ?></td>
                                    <td>
                                        <?php
                                            // Check if services were selected and display them
                                            $services = !empty($booking['services']) ? implode(', ', json_decode($booking['services'])) : 'None';
                                            echo $services;
                                        ?>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No bookings found.</p>
                <?php endif; ?>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
