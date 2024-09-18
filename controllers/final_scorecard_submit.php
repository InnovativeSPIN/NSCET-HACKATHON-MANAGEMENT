<?php
require_once('../resources/connection.php'); // Database connection
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data from the form
    $ps_id = $conn->real_escape_string($_POST["ps_id"]);

    $team_id = $conn->real_escape_string($_POST["team_id"]);
    $team_name = $conn->real_escape_string($_POST["team_name"]);
    $mentor_name = $conn->real_escape_string($_POST["mentor_name"]);
    $innovation_score = (int) $conn->real_escape_string($_POST["innovation_score"]);
    $technical_implementation_score = (int) $conn->real_escape_string($_POST["technical_implementation_score"]);
    $functionality_testing_score = (int) $conn->real_escape_string($_POST["functionality_testing_score"]);
    $presentation_communication_score = (int) $conn->real_escape_string($_POST["presentation_communication_score"]);
    $scalability_potential_score = (int) $conn->real_escape_string($_POST["scalability_potential_score"]);
    $final_notes = $conn->real_escape_string($_POST["mentor_comments"]);
    
    // Calculate the total score
    $total_score = $innovation_score + $technical_implementation_score + 
                   $functionality_testing_score + $presentation_communication_score + 
                   $scalability_potential_score;

    // Start a database transaction
    $conn->begin_transaction();
    try {
        // Insert the evaluation data into the 'final_evaluation_scores' table
        $insert_evaluation_sql = "
            INSERT INTO final_evaluation_scores (team_id, ps_id, team_name, mentor_name, innovation_score, technical_implementation_score, functionality_testing_score, presentation_communication_score, scalability_potential_score, total_score, final_notes, evaluated_at) 
            VALUES ('$team_id', '$ps_id', '$team_name', '$mentor_name', $innovation_score, $technical_implementation_score, $functionality_testing_score, $presentation_communication_score, $scalability_potential_score, $total_score, '$final_notes', NOW())
        ";
        
        // Execute the query
        $conn->query($insert_evaluation_sql);
        
        // Commit the transaction
        $conn->commit();
        
        // Return success response
        echo '<script>
            alert("Final Score Validation Done !!");
            window.location.href = "../dashboard/finalScoreCard.php";
        </script>';
        exit();
    } catch (Exception $e) {
        // Rollback transaction in case of error
        $conn->rollback();
        
        echo '<script>
            alert("Validation already done for this Team !!");
            window.location.href = "../dashboard/finalScoreCard.php";
        </script>';

        exit();
    }
} else {
    // If the request method is not POST, redirect to the homepage or form page
    header('Location: ../dashboard/finalEvaluation.php');
}

$conn->close();
?>
