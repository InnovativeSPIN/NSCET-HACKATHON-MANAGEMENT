<?php
require_once('../resources/connection.php');

// Get the mentor_id from the request
$mentor_id = intval($_POST['mentor_id']);

// Fetch mentor name based on the selected mentor_id from the mentor table
$sql = "SELECT name FROM mentors WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $mentor_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the mentor name
$response = [];
if ($row = $result->fetch_assoc()) {
    $response['name'] = $row['name'];
}

// Return the results as JSON
echo json_encode($response);

$stmt->close();
$conn->close();
?>
