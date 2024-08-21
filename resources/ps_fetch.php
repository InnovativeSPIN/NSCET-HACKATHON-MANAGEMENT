<?php
header('Content-Type: application/json');

require_once('./connection.php');

$sql = 'SELECT * FROM problem_statements';
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
