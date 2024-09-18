<?php
require_once('../resources/connection.php'); // Database connection
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

// SQL for fetching hardware teams (ps_id between 0 and 12)
$hardware_sql = "SELECT team_id, team_name, ps_id, mentor_name, innovation_score, technical_implementation_score, 
        functionality_testing_score, presentation_communication_score, scalability_potential_score, 
        total_score, final_notes, evaluated_at
        FROM final_evaluation_scores
        WHERE ps_id <= 25
        ORDER BY total_score DESC";

$hardware_result = $conn->query($hardware_sql);

// SQL for fetching software teams (ps_id between 12 and 24)
$software_sql = "SELECT team_id, team_name, ps_id, mentor_name, innovation_score, technical_implementation_score, 
        functionality_testing_score, presentation_communication_score, scalability_potential_score, 
        total_score, final_notes, evaluated_at
        FROM final_evaluation_scores
        WHERE ps_id > 25
        ORDER BY total_score DESC";

$software_result = $conn->query($software_sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Evaluation Scores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #f5f5f5;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #f5f5f5;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }
        table, th, td {
            border: 1px solid #444;
        }
        th {
            background-color: #333;
            color: #f5f5f5;
            padding: 10px;
        }
        td {
            background-color: #2c2c2c;
            padding: 8px;
            color: #d4d4d4;
        }
        tr:nth-child(even) td {
            background-color: #3a3a3a;
        }
        tr:hover td {
            background-color: #555;
        }
        .hardware, .software {
            margin-bottom: 50px;
        }
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
        }

        .top-left {
            top: 10px;
            left: 10px;
        }
        .logo {
            position: fixed;
            animation: glow 2s infinite alternate;
        }
        @keyframes glow {
            0% {
               filter: drop-shadow(0px 0px 10px rgba(255, 255, 255, 0.7));
            }
            100% {
                filter: drop-shadow(0px 0px 30px rgba(255, 255, 255, 1.0));
            }
        }
        .top-right {
            top: 10px;
            right: 10px;
        }
        
        .bottom-right {
            bottom: 10px;
            right: 10px;
        }
        
        .logo img {
            width: 100px; /* Adjust the size of the logos */
            height: auto;
            margin: 18px;
        }
        
        .top-center {
            top: 10px;
            left: 50%;
            transform: translateX(-50%); /* Center the logo horizontally */
        }
    </style>
</head>
<body>

<div class="logo top-left">
        <img src="https://nscet.org/Home_Assets/img/nscet/College%20logo.png" alt="Logo 2">
    </div>
    <div class="logo top-right">
        <img src="https://nscet.org/waves24/public/images/logos/waves-logo.png" alt="Logo 3">
    </div>
    <div class="logo bottom-right">
        <img src="https://nscet.org/ispin/assets/img/iSPIN_logo.png" alt="Logo 4">
    </div>
<div class="container">
    <h1 style='margin-top: 32px;text-align:center;'>NSCET HACKATHON 2024</h1>
    <h2>Hardware Leaderboard</h2>
    <div class="hardware">
        <table>
            <tr>
                <th>Team ID</th>
                <th>Team Name</th>
                <th>PS ID</th>
                <th>Mentor Name</th>
                <th>Innovation Score</th>
                <th>Technical Implementation Score</th>
                <th>Functionality Testing Score</th>
                <th>Presentation/Communication Score</th>
                <th>Scalability Potential Score</th>
                <th>Total Score</th>
                <th>Final Notes</th>
                <th>Evaluated At</th>
            </tr>

            <?php
            // Output hardware data
            if ($hardware_result->num_rows > 0) {
                while ($row = $hardware_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["team_id"] . "</td>
                            <td>" . $row["team_name"] . "</td>
                            <td>" . $row["ps_id"] . "</td>
                            <td>" . $row["mentor_name"] . "</td>
                            <td>" . $row["innovation_score"] . "</td>
                            <td>" . $row["technical_implementation_score"] . "</td>
                            <td>" . $row["functionality_testing_score"] . "</td>
                            <td>" . $row["presentation_communication_score"] . "</td>
                            <td>" . $row["scalability_potential_score"] . "</td>
                            <td>" . $row["total_score"] . "</td>
                            <td>" . $row["final_notes"] . "</td>
                            <td>" . $row["evaluated_at"] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No hardware teams found.</td></tr>";
            }
            ?>
        </table>
    </div>

    <hr>

    <h2>Software Leaderboard</h2>
    <div class="software">
        <table>
            <tr>
                <th>Team ID</th>
                <th>Team Name</th>
                <th>PS ID</th>
                <th>Mentor Name</th>
                <th>Innovation Score</th>
                <th>Technical Implementation Score</th>
                <th>Functionality Testing Score</th>
                <th>Presentation/Communication Score</th>
                <th>Scalability Potential Score</th>
                <th>Total Score</th>
                <th>Final Notes</th>
                <th>Evaluated At</th>
            </tr>

            <?php
            // Output software data
            if ($software_result->num_rows > 0) {
                while ($row = $software_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["team_id"] . "</td>
                            <td>" . $row["team_name"] . "</td>
                            <td>" . $row["ps_id"] . "</td>
                            <td>" . $row["mentor_name"] . "</td>
                            <td>" . $row["innovation_score"] . "</td>
                            <td>" . $row["technical_implementation_score"] . "</td>
                            <td>" . $row["functionality_testing_score"] . "</td>
                            <td>" . $row["presentation_communication_score"] . "</td>
                            <td>" . $row["scalability_potential_score"] . "</td>
                            <td>" . $row["total_score"] . "</td>
                            <td>" . $row["final_notes"] . "</td>
                            <td>" . $row["evaluated_at"] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No software teams found.</td></tr>";
            }
            ?>
        </table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>
<script>
    const duration = 15 * 1000,
        animationEnd = Date.now() + duration,
        defaults = {
            startVelocity: 30,
            spread: 360,
            ticks: 60,
            zIndex: 50
        };

    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }

    const interval = setInterval(function() {
        const timeLeft = animationEnd - Date.now();

        if (timeLeft <= 0) {
            return clearInterval(interval);
        }

        const particleCount = 20 * (timeLeft / duration);

        // since particles fall down, start a bit higher than random
        confetti(
            Object.assign({}, defaults, {
                particleCount,
                origin: {
                    x: randomInRange(0.2, 0.7),
                    y: Math.random() - 0.2
                },
            })
        );
        confetti(
            Object.assign({}, defaults, {
                particleCount,
                origin: {
                    x: randomInRange(0.7, 0.9),
                    y: Math.random() - 0.2
                },
            })
        );
    }, 250);
</script>
</body>
</html>
