<?php
require_once('../resources/connection.php');

// Get the ps_id from the request
$ps_id = $_POST['ps_id'];

// Fetch data from software_evaluation table based on ps_id
$sql = "SELECT * FROM software_evaluation WHERE ps_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $ps_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch all rows as associative array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Return the results as JSON
echo json_encode(['softwareEvaluation' => $data]);

$stmt->close();
$conn->close();
?>
