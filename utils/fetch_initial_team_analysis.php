<?php
require_once('../resources/connection.php');

// Get the team_id from the request
$team_id = $_POST['team_id'];

// Fetch data from initial_team_analysis table based on team_id
$sql = "SELECT * FROM initial_team_analysis WHERE team_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $team_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch rows as associative array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Return the results as JSON
echo json_encode(['initialAnalysis' => $data]);

$stmt->close();
$conn->close();
?>
