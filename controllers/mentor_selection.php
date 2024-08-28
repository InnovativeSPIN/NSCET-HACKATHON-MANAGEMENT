<?php
require_once('../resources/connection.php');
require_once("../utils/check_login.php");
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_id = $conn->real_escape_string($_POST["team_id"]);
    $mentor_id = $conn->real_escape_string($_POST["mentor_id"]);

     $validate_team_sql = "SELECT id FROM teams WHERE id = '$team_id'";
     $validate_team_result = $conn->query($validate_team_sql);
 
     if ($validate_team_result->num_rows === 0) {
         echo json_encode([
             'success' => false,
             'message' => 'Invalid team ID'
         ]);
         exit();
     }
 
     $validate_mentor_sql = "SELECT id FROM mentors WHERE id = '$mentor_id'";
     $validate_mentor_result = $conn->query($validate_mentor_sql);
 
     if ($validate_mentor_result->num_rows === 0) {
         echo json_encode([
             'success' => false,
             'message' => 'Invalid mentor ID'
         ]);
         exit();
     }

    $check_team_sql = "SELECT mentor_id FROM teams WHERE id = '$team_id'";
    $check_team_result = $conn->query($check_team_sql);

    if ($check_team_result->num_rows > 0) {
        $team = $check_team_result->fetch_assoc();

        if (!empty($team['mentor_id'])) {
            echo json_encode([
                'success' => false,
                'message' => 'Your team has already selected a mentor'
            ]);
            exit();
        }
    }

    $check_mentor_sql = "SELECT mentoring_teams FROM mentors WHERE id = '$mentor_id'";
    $check_mentor_result = $conn->query($check_mentor_sql);

    if ($check_mentor_result->num_rows > 0) {
        $mentor = $check_mentor_result->fetch_assoc();
        $mentoring_teams = json_decode($mentor['mentoring_teams'], true);
        
        if (!is_array($mentoring_teams)) {
            $mentoring_teams = [];
        }

        if (count($mentoring_teams) >= 2) {
            echo json_encode([
                'success' => false,
                'message' => 'This mentor is already managing the maximum number of teams'
            ]);
            exit();
        }

        $mentoring_teams[] = $team_id;
        $updated_teams_json = json_encode($mentoring_teams);

        $conn->begin_transaction();
        try {
            $update_team_sql = "UPDATE teams SET mentor_id = '$mentor_id', updated_at = NOW() WHERE id = '$team_id'";
            $conn->query($update_team_sql);
            
            $update_mentor_sql = "UPDATE mentors SET mentoring_teams = '$updated_teams_json', updated_at = NOW() WHERE id = '$mentor_id'";
            $conn->query($update_mentor_sql);

            $conn->commit();

            echo json_encode([
                'success' => true,
                'message' => 'Your mentor was selected successfully'
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
            'message' => 'Mentor not found'
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
