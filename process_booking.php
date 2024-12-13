<?php
@include 'config.php'; // Ensure this file connects to the database
session_start();

// Jay Vanguardia
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please log in to book.'); window.location.href='login_form.php';</script>";
    exit();
}

// Handle booking form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check database connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Retrieve and sanitize form data
    $user_id = $_SESSION['user_id']; // User ID from session
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $amount = 0; // Default amount; adjust dynamically based on package
    $package = mysqli_real_escape_string($conn, $_POST['package']);
    $payment = "Pending"; // Default payment status
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $celebrant_name = mysqli_real_escape_string($conn, $_POST['celebrant_name']);
    $event_type = mysqli_real_escape_string($conn, $_POST['event_type']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    $theme = mysqli_real_escape_string($conn, $_POST['theme']);
    $services = isset($_POST['services']) ? json_encode($_POST['services']) : NULL;
    $custom_notes = !empty($_POST['custom_notes']) ? mysqli_real_escape_string($conn, $_POST['custom_notes']) : NULL;

    // Check if the selected date is already booked
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM photobooking WHERE event_date = ?");
    $stmt->bind_param("s", $event_date);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if ($result['count'] > 0) {
        // If the date is already booked, redirect with an error message
        echo "<script>alert('This date is already booked. Please choose another date.'); window.location.href='photobooking.php';</script>";
        $stmt->close();
        $conn->close();
        exit();
    }

    // Set amount based on the selected package
    switch ($package) {
        case "Bronze I Package":
            $amount = 2899;
            break;
        case "Bronze II Package":
            $amount = 3399;
            break;
        case "Silver I Package":
            $amount = 3899;
            break;
        case "Silver II Package":
            $amount = 4399;
            break;
        case "Gold I Package":
            $amount = 4899;
            break;
        case "Gold II Package":
            $amount = 5449;
            break;
        case "Custom Package":
            $amount = 0; // Custom price can be set by admin later
            break;
    }

    // Insert the booking if the date is available
    $stmt = $conn->prepare("INSERT INTO photobooking (user_id, event_date, customer_name, package, amount, payment, email, contact_number, address, celebrant_name, event_type, venue, theme, services, custom_notes) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("isssdssssssssss", $user_id, $event_date, $customer_name, $package, $amount, $payment, $email, $contact_number, $address, $celebrant_name, $event_type, $venue, $theme, $services, $custom_notes);

    // Execute the query and handle errors
    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location.href='user_page.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='photobooking.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
