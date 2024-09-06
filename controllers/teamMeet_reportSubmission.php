<?php
require_once('../resources/connection.php'); // Database connection
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $report_date = $conn->real_escape_string($_POST["report_date"]);
    $team_id = $conn->real_escape_string($_POST["team_id"]);
    $work_assigned = $conn->real_escape_string($_POST["work_assigned"]);
    $work_completed = $conn->real_escape_string($_POST["work_completed"]);
    $work_pending = $conn->real_escape_string($_POST["work_pending"]);
    $absent_students = isset($_POST["absent_students"]) ? $_POST["absent_students"] : [];

    // Convert absent students array to JSON format
    $absent_students_json = json_encode($absent_students);

    // Start a transaction
    $conn->begin_transaction();
    try {
        // Insert the report data into the 'reports' table
        $insert_report_sql = "
            INSERT INTO reports (report_date, team_id, work_assigned, work_completed, work_pending, absent_students, created_at) 
            VALUES ('$report_date', '$team_id', '$work_assigned', '$work_completed', '$work_pending', '$absent_students_json', NOW())
        ";
        $conn->query($insert_report_sql);

        // Commit the transaction
        $conn->commit();

        // Success response
        echo '<script>
            alert("Form Submitted !!");
            window.location.href = "../dashboard/mentor_dashboard.php";
        </script>';
        exit();
    } catch (Exception $e) {
        // Rollback transaction if any error occurs
        $conn->rollback();

        // Error response
        header('Location: ../dashboard/mentor_dashboard.php');
    }
} else {
    // Invalid request method
    header('Location: ../dashboard/mentor_dashboard.php');
}

$conn->close();
?>
