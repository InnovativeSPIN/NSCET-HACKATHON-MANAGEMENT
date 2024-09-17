<?php
require_once('../resources/connection.php'); // Database connection
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $team_id = $conn->real_escape_string($_POST["team_id"]);
    $ps_id = $conn->real_escape_string($_POST["ps_id"]);
    $understanding_observations = $conn->real_escape_string($_POST["understanding_observations"]);
    $understanding_suggestions = $conn->real_escape_string($_POST["understanding_suggestions"]);
    $tech_approach_observations = $conn->real_escape_string($_POST["tech_approach_observations"]);
    $tech_approach_suggestions = $conn->real_escape_string($_POST["tech_approach_suggestions"]);
    $innovation_observations = $conn->real_escape_string($_POST["innovation_observations"]);
    $innovation_suggestions = $conn->real_escape_string($_POST["innovation_suggestions"]);
    $progress_observations = $conn->real_escape_string($_POST["progress_observations"]);
    $progress_suggestions = $conn->real_escape_string($_POST["progress_suggestions"]);
    $team_collaboration_observations = $conn->real_escape_string($_POST["team_collaboration_observations"]);
    $team_collaboration_suggestions = $conn->real_escape_string($_POST["team_collaboration_suggestions"]);
    $challenges_observations = $conn->real_escape_string($_POST["challenges_observations"]);
    $challenges_suggestions = $conn->real_escape_string($_POST["challenges_suggestions"]);

    // Start a database transaction
    $conn->begin_transaction();
    try {
        // Insert the feedback data into the 'initial_team_analysis' table
        $insert_analysis_sql = "
            INSERT INTO initial_team_analysis (
                team_id, ps_id, understanding_observations, understanding_suggestions, 
                tech_approach_observations, tech_approach_suggestions, 
                innovation_observations, innovation_suggestions, 
                progress_observations, progress_suggestions, 
                team_collaboration_observations, team_collaboration_suggestions, 
                challenges_observations, challenges_suggestions, 
                submitted_at
            ) VALUES (
                '$team_id', '$ps_id', '$understanding_observations', '$understanding_suggestions', 
                '$tech_approach_observations', '$tech_approach_suggestions', 
                '$innovation_observations', '$innovation_suggestions', 
                '$progress_observations', '$progress_suggestions', 
                '$team_collaboration_observations', '$team_collaboration_suggestions', 
                '$challenges_observations', '$challenges_suggestions', 
                NOW()
            )
        ";
        
        // Execute the query
        $conn->query($insert_analysis_sql);
        
        // Commit the transaction
        $conn->commit();
        
        echo '<script>
            alert("Initial team analysis submitted successfully!");
            window.location.href = "../dashboard/juryIntialAnalysis.php";
        </script>';
        exit();
    } catch (Exception $e) {
        // Rollback transaction in case of error
        $conn->rollback();
        
        // Return error response
        echo json_encode([
            'success' => false,
            'message' => 'Technical Error !!'
        ]);
        exit();
    }
} else {
    // If the request method is not POST, redirect to the form page
    header('Location: ../dashboard/initialAnalysisForm.php');
}

$conn->close();
?>
