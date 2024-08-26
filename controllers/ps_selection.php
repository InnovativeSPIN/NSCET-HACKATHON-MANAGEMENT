<?php
require_once('../resources/connection.php');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_id = $conn->real_escape_string($_POST["team_id"]);
    $ps_id = $conn->real_escape_string($_POST["ps_id"]);

    $check_team_sql = "SELECT ps_id FROM teams WHERE id = '$team_id'";
    $check_team_result = $conn->query($check_team_sql);

    if ($check_team_result->num_rows > 0) {
        $team = $check_team_result->fetch_assoc();

        if (!empty($team['ps_id'])) {
            echo json_encode([
                'success' => false,
                'message' => 'Your team has already selected a problem statement'
            ]);
            exit();
        }
    }

    $check_ps_sql = "SELECT id, teams_id FROM problem_statements WHERE ps_id = '$ps_id'";
    $check_ps_result = $conn->query($check_ps_sql);

    if ($check_ps_result->num_rows > 0) {
        $ps = $check_ps_result->fetch_assoc();
        $teams_array = json_decode($ps['teams_id'], true);

        if (!is_array($teams_array)) {
            $teams_array = [];
        }

        if (count($teams_array) == 3) {
            echo json_encode([
                'success' => false,
                'message' => 'This problem statement has already reached the maximum limit'
            ]);
            exit();
        }

        $teams_array[] = $team_id;
        $updated_teams_json = json_encode($teams_array);
        $submission_count = count($teams_array);

        $conn->begin_transaction();
        try {
            $id = $ps['id'];
            $update_team_sql = "UPDATE teams SET ps_id = '$id', updated_at = NOW() WHERE id = '$team_id'";
            $conn->query($update_team_sql);

            $update_ps_sql = "UPDATE problem_statements SET teams_id = '$updated_teams_json', updated_at = NOW(), submission_count = '$submission_count' WHERE ps_id = '$ps_id'";
            $conn->query($update_ps_sql);

            $conn->commit();

            echo json_encode([
                'success' => true,
                'message' => 'Your problem statement selected successfully'
            ]);
        } catch (Exception $e) {
            $conn->rollback();

            echo json_encode([
                'success' => false,
                'message' => 'An error occurred while processing your request. Please try again',
                'error' => $e->getMessage()
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Problem statement not found'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request'
    ]);
}

$conn->close();
?>
