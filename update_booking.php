<?php
@include 'config.php';

session_start();
// Jay Vanguardia
if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data
    $user_id = $_POST['user_id'];
    $event_date = $_POST['event_date'];
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $venue = $_POST['venue'];
    $theme = $_POST['theme'];
    // Continue with the other fields...

    // Prepare the update query
    $stmt = $conn->prepare("UPDATE photobooking SET event_date = ?, customer_name = ?, email = ?, contact_number = ?, venue = ?, theme = ? WHERE user_id = ?");
    $stmt->bind_param("ssssssi", $event_date, $customer_name, $email, $contact_number, $venue, $theme, $user_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Booking updated successfully.";
    } else {
        echo "No changes made or error occurred.";
    }

    $stmt->close();
    header('Location: user_page.php'); // Redirect after update
    exit();
}
?>
