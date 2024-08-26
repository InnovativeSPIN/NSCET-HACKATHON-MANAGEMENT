<?php
require_once('../resources/connection.php');
// session_start();

$reg_no = isset($_GET['reg_no']) ? $conn->real_escape_string($_GET['reg_no']) : '';

if (empty($reg_no)) {
    echo json_encode([
        'success' => false,
        'message' => 'Registration number is required'
    ]);
    exit();
}

$team_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$sql = "SELECT name, dept, year FROM students WHERE reg_no = '$reg_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();

    echo json_encode([
        'success' => true,
        'name' => $student['name'],
        'dept' => $student['dept'],
        'year' => $student['year'],
    ]);

} else {
    echo json_encode([
        'success' => false,
        'message' => 'Student not found'
    ]);
}

$conn->close();
?>