<?php
require_once('../resources/connection.php');

// Get the team_id from the request
$team_id = $_POST['team_id'];

// Fetch team details and mentor_id based on the selected team_id from the teams table
$sql = "SELECT team_name, mentor_id FROM teams WHERE team_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $team_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the team details and mentor_id
$response = [];
if ($row = $result->fetch_assoc()) {
    $response['team_name'] = $row['team_name'];
    $response['mentor_id'] = $row['mentor_id'];
}

// Return the results as JSON
echo json_encode($response);

$stmt->close();
$conn->close();
?>
