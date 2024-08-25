<?php
require_once('../resources/connection.php');

$team_lead = $_POST["team_lead"];
$team_name = $_POST["team_name"];
$email = $_POST["email"];
$password = $_POST["password"];

try {
    $checkSql = "SELECT `reg_no` FROM `students` WHERE `reg_no` = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $team_lead);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        $sql = "INSERT INTO `teams` (`team_name`, `team_lead`, `email`, `password`) 
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $team_name, $team_lead, $email, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Registered successfully! Check your email for confirmation.');
            window.location.href='https://nscet.org/hackathon/';
            </script>";
        } else {
            throw new Exception("Database error: Unable to register the team.");
        }
    } else {
        // If the reg_no doesn't exist in students table
        echo "<script>alert('Team lead registration number not found in students database.');
        window.location.href = 'https://nscet.org/hackathon';</script>";
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        echo "<script>alert('Your team name, team lead has already been registered. Please wait and check your email for confirmation.');
        window.location.href = 'https://nscet.org/hackathon';</script>";
    } else {
        echo "<script>alert('Registration failed! Please try again. Contact Hackathon Tech Team');
        window.location.href = 'https://nscet.org/hackathon';</script>";
    }
} catch (Exception $e) {
    echo "<script>alert('An unexpected server error occurred. Please try again later.');
    window.location.href = 'https://nscet.org/hackathon';</script>";
}

$conn->close();
?>
