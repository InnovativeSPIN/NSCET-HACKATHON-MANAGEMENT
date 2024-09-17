<?php
require_once('../resources/connection.php');

// Get the ps_id from the request
$ps_id = intval($_POST['ps_id']);

// Fetch up to 3 team_id values based on the selected ps_id from the teams table
$sql = "SELECT team_id FROM teams WHERE ps_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $ps_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch all team_id values
$teams = [];
while ($row = $result->fetch_assoc()) {
    $teams[] = $row;
}

// Return the results as JSON
echo json_encode($teams);

$stmt->close();
$conn->close();
?>
