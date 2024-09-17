<?php
require_once('../resources/connection.php'); // Database connection
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $ps_id = $conn->real_escape_string($_POST["ps_id"]);
    $ps_type = $conn->real_escape_string($_POST["ps_type"]);
    $team_id = $conn->real_escape_string($_POST["team_id"]);
    
    // For software evaluation
    if ($ps_type === 'software') {
        $code_structure_observations = $conn->real_escape_string($_POST["code_structure_observations"]);
        $code_structure_suggestions = $conn->real_escape_string($_POST["code_structure_suggestions"]);
        $ui_observations = $conn->real_escape_string($_POST["ui_observations"]);
        $ui_suggestions = $conn->real_escape_string($_POST["ui_suggestions"]);
        $functionality_testing_observations = $conn->real_escape_string($_POST["functionality_testing_observations"]);
        $functionality_testing_suggestions = $conn->real_escape_string($_POST["functionality_testing_suggestions"]);
        $scalability_integration_observations = $conn->real_escape_string($_POST["scalability_integration_observations"]);
        $scalability_integration_suggestions = $conn->real_escape_string($_POST["scalability_integration_suggestions"]);

        // Insert into software_evaluation table
        $insert_sql = "
            INSERT INTO software_evaluation (
                ps_id, team_id, code_structure_observations, code_structure_suggestions, 
                ui_observations, ui_suggestions, 
                functionality_testing_observations, functionality_testing_suggestions, 
                scalability_integration_observations, scalability_integration_suggestions, 
                submitted_at
            ) VALUES (
                '$ps_id', '$team_id', '$code_structure_observations', '$code_structure_suggestions', 
                '$ui_observations', '$ui_suggestions', 
                '$functionality_testing_observations', '$functionality_testing_suggestions', 
                '$scalability_integration_observations', '$scalability_integration_suggestions', 
                NOW()
            )
        ";
    }
    // For hardware evaluation
    elseif ($ps_type === 'hardware') {
        $design_observations = $conn->real_escape_string($_POST["design_observations"]);
        $design_suggestions = $conn->real_escape_string($_POST["design_suggestions"]);
        $functionality_observations = $conn->real_escape_string($_POST["functionality_observations"]);
        $functionality_suggestions = $conn->real_escape_string($_POST["functionality_suggestions"]);
        $integration_observations = $conn->real_escape_string($_POST["integration_observations"]);
        $integration_suggestions = $conn->real_escape_string($_POST["integration_suggestions"]);
        $scalability_observations = $conn->real_escape_string($_POST["scalability_observations"]);
        $scalability_suggestions = $conn->real_escape_string($_POST["scalability_suggestions"]);

        // Insert into hardware_evaluation table
        $insert_sql = "
            INSERT INTO hardware_evaluation (
                ps_id, team_id, design_observations, design_suggestions, 
                functionality_observations, functionality_suggestions, 
                integration_observations, integration_suggestions, 
                scalability_observations, scalability_suggestions, 
                submitted_at
            ) VALUES (
                '$ps_id', '$team_id', '$design_observations', '$design_suggestions', 
                '$functionality_observations', '$functionality_suggestions', 
                '$integration_observations', '$integration_suggestions', 
                '$scalability_observations', '$scalability_suggestions', 
                NOW()
            )
        ";
    } else {
        // Invalid PS type
        echo json_encode(['success' => false, 'message' => 'Invalid Problem Statement Type']);
        exit();
    }

    // Execute the query and handle success or failure
    if ($conn->query($insert_sql)) {
        echo '<script>
            alert("Team Progress Submitted !");
            window.location.href = "../dashboard/juryProgressAndFeedback.php";
        </script>';
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }

    $conn->close();
} else {
    header('Location: ../');
}