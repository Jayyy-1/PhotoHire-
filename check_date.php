<?php
@include 'config.php';

if (isset($_GET['date'])) {
    $event_date = $_GET['date'];

    // Marko Magnaye
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM photobooking WHERE event_date = ?");
    $stmt->bind_param("s", $event_date);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    $response = ['available' => $result['count'] == 0];
    echo json_encode($response);

    $stmt->close();
    $conn->close();
}
?>
