<?php
require_once('../resources/connection.php');

function generateTeamID($conn) {
    $sql = "SELECT COUNT(*) AS team_count FROM teams";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        $team_count = $row['team_count'] + 1;
        return 'NH-T' . str_pad($team_count, 2, '0', STR_PAD_LEFT);
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_name = $conn->real_escape_string(trim($_POST["team_name"]));
    $team_lead_reg_no = $conn->real_escape_string(trim($_POST["team_lead"]));
    $email = $conn->real_escape_string(trim($_POST["email"]));
    $password = password_hash(trim($_POST["password"]), PASSWORD_BCRYPT);

    $sql = "SELECT * FROM teams WHERE team_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $team_name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<script>
                alert('Team name already exists. Please choose a different name.');
                window.location.href = 'https://nscet.org/hackathon/register.php';
              </script>";
        exit();
    }

    $sql = "SELECT * FROM students WHERE reg_no = ? AND team_id IS NULL";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $team_lead_reg_no);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        echo "<script>
                alert('Invalid team lead register number or student already assigned to a team.');
                window.location.href = 'https://nscet.org/hackathon/register.php';
              </script>";
        exit();
    }

    $team_id = generateTeamID($conn);
    if (!$team_id) {
        echo "<script>
                alert('Error generating team ID.');
                window.location.href = 'https://nscet.org/hackathon/register.php';
              </script>";
        exit();
    }

    $sql = "INSERT INTO teams (team_name, team_lead, team_id, email, password) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $team_name, $team_lead_reg_no, $team_id, $email, $password);
    if ($stmt->execute()) {
        $last_inserted_id = $stmt->insert_id;
        $sql = "UPDATE students SET team_id = ? WHERE reg_no = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $last_inserted_id, $team_lead_reg_no);
        $stmt->execute();
        
        echo "<script>
                alert('Team registered successfully! Your team ID is: $team_id');
                window.location.href = 'https://nscet.org/hackathon/login.php';
              </script>";
    } else {
        echo "<script>
                alert('Database error: Unable to register the team. Please contact the Hackathon Tech Team.');
                window.location.href = 'https://nscet.org/hackathon/register.php';
              </script>";
    }
}

$conn->close();
?>
