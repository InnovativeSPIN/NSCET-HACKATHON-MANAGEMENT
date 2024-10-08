<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

require_once("../utils/check_login.php");
require_once('../resources/connection.php');

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$mentor_id = $user_id;

$sql = "SELECT mentoring_teams FROM mentors WHERE id = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $mysqli->error);
}

$stmt->bind_param('i', $mentor_id);
$stmt->execute();
$result = $stmt->get_result();
$mentor_data = $result->fetch_assoc();

$mentoring_teams = json_decode($mentor_data['mentoring_teams'], true);
$stmt->close();

if ($mentoring_teams === null) {
    die("Error decoding JSON or no teams found.");
}

// Construct dynamic SQL query
$team_ids_placeholders = implode(',', array_fill(0, count($mentoring_teams), '?'));
$sql = "
    SELECT 
        t.team_name, 
        t.team_lead, 
        t.team_id, 
        t.id,
        ps.ps AS problem_statement_title, 
        ps.ps_id AS problem_statement_id,
        ps.ps_description AS problem_statement_description, 
        s.name AS student_name, 
        s.year AS student_year, 
        s.dept AS student_dept,
        tl.name AS team_lead_name,
        tl.dept AS team_lead_dept, 
        tl.year AS team_lead_year 
    FROM 
        teams t
    LEFT JOIN 
        problem_statements ps ON t.ps_id = ps.id 
    LEFT JOIN 
        students s ON t.id = s.team_id 
    LEFT JOIN 
        students tl ON t.team_lead = tl.reg_no
    WHERE 
        t.id IN ($team_ids_placeholders)
    ORDER BY 
        t.team_name, s.reg_no;
";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $mysqli->error);
}

// Bind the team IDs dynamically
$types = str_repeat('i', count($mentoring_teams));
$stmt->bind_param($types, ...$mentoring_teams);

$stmt->execute();
$result = $stmt->get_result();

$teams = [];
while ($row = $result->fetch_assoc()) {
  $team_id = $row['id'];

  if (!isset($teams[$team_id])) {
    $teams[$team_id] = [
      'team_name' => $row['team_name'],
      'team_lead_name' => $row['team_lead_name'],
      'team_lead_dept' => $row['team_lead_dept'],
      'team_lead_year' => $row['team_lead_year'],
      'team_id' => $row['team_id'],
      'id' => $row['id'],
      'problem_statement_title' => $row['problem_statement_title'],
      'problem_statement_id' => $row['problem_statement_id'],
      'problem_statement_description' => $row['problem_statement_description'],
      'members' => []
    ];
  }

  $teams[$team_id]['members'][] = [
    'name' => $row['student_name'],
    'year' => $row['student_year'],
    'dept' => $row['student_dept']
  ];
}

$mentor_query = "
    SELECT 
      m.name,
      m.designation,
      m.dept
    FROM 
      mentors m
    WHERE 
      m.id = ?
";

$stmt1 = $conn->prepare($mentor_query);
$stmt1->bind_param("i", $user_id);
if (!$stmt1->execute()) {
  die("Execution error: " . $stmt1->error);
}
$result1 = $stmt1->get_result();
$mentor = $result1->fetch_assoc();

$stmt1->close();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Dashboard | NSCET Hackathon
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    /* Dashboard Styles */
    .dashboard {
      font-family: "source-code-pro", monospace !important;
      width: 100%;
      max-width: 1000px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px auto;
      /* Center the dashboard and add spacing */
    }

    .header {
      font-family: "source-code-pro", monospace !important;
      text-align: center;
      margin-bottom: 20px;
    }

    .container {
      font-family: "source-code-pro", monospace !important;
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      animation: fadeIn 1s ease-in-out;
    }

    .mentor-details {
      width: 48%;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, font-size 0.3s;
      font-size: 18px;
    }

    .mentor-details:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
    }

    .mentor-details h2 {
      margin: 0 0 10px;
      font-size: 20px;
      color: #344767;
    }

    .mentor-details p {
      margin: 0;
      font-size: 16px;
      color: #344767;
    }

    .mentor-details span {
      color: #5E72E4;
      font-weight: bold;
    }

    .team-list {
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      animation: fadeIn 1.5s ease-in-out;
      margin-bottom: 20px;
      /* Add spacing below the section */
    }

    .team-list h2 {
      margin-bottom: 20px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      padding: 10px;
      border-bottom: 1px solid #ddd;
      color: #344767;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    li:hover {
      background-color: #e9ecef;
    }

    li:last-child {
      border-bottom: none;
    }

    .footer {
      text-align: center;
      padding-top: 20px;
      color: #666;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 600px;
      border-radius: 8px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .container {
        display: block;
        /* Stack elements vertically */
      }

      .mentor-details {
        width: 100%;
        /* Full width for each element */
        margin-bottom: 20px;
        /* Add some space between stacked elements */
      }

      .team-list {
        width: 100%;
        /* Full width for team list */
        margin-bottom: 20px;
        /* Add space below team list section */
      }
    }
    .payment{

      border-radius: 5px;
      width: 120px;
      padding: 5px 5px;
      margin-left: 420px;
      color: white;
      border: 0px;
      background-color: #5e72e4;

      

    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php include("./resources/mentorsidebar.php") ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="main-content">
      <div class="dashboard">
        <header class="header">
          <h1>Meet Report Submission</h1>
        </header>
        <!-- <div class="team-list">
          <h3>Yours Teams</h3>
          <ul id="teamList">
            <?php foreach ($teams as $team): ?>
              <li data-team-id="<?= htmlspecialchars($team['id']) ?>">
                <?= htmlspecialchars($team['team_name']) . ' (' . htmlspecialchars($team['team_id']) . ') ' ?>
              </li>
            <?php endforeach; ?>
          </ul> 
        </div> -->
      </div>
    </div>
    <style>
        /* Basic styles for the form */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .form-container h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="date"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .checkbox-group {
            margin-top: 10px;
        }

        .checkbox-group label {
            font-weight: normal;
            margin-right: 10px;
        }

        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
    <div class="main-content">
    <div class="dashboard">
        <div class="team-list">
        <div class="form-container">
            <!-- <h3>Submit Report</h3> -->
            
            <!-- Start of the form -->
            <form action="../controllers/teamMeet_reportSubmission.php" method="POST">
            <!-- Input for Date -->
            <div class="form-group">
                <label for="report-date">Date:</label>
                <input type="date" id="report-date" name="report_date" required>
            </div>

            <!-- Dropdown for Team Selection -->
            <div class="form-group">
                <label for="team-id">Team:</label>
                <select id="team-id" name="team_id" required>
                <option value="">Select a Team</option>
                <?php foreach ($teams as $team_id => $team): ?>
                    <option value="NH-T<?= htmlspecialchars($team_id) ?>">
                    <?= htmlspecialchars($team['team_name']) . ' (' . htmlspecialchars($team['id']) . ')' ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </div>

            <!-- Textarea for Work Assigned -->
            <div class="form-group">
                <label for="work-assigned">Work Assigned:</label>
                <textarea id="work-assigned" name="work_assigned" rows="3" required></textarea>
            </div>

            <!-- Textarea for Work Completed -->
            <div class="form-group">
                <label for="work-completed">Work Completed:</label>
                <textarea id="work-completed" name="work_completed" rows="3" required></textarea>
            </div>

            <!-- Textarea for Work Pending -->
            <div class="form-group">
                <label for="work-pending">Work Pending:</label>
                <textarea id="work-pending" name="work_pending" rows="3" required></textarea>
            </div>

            <!-- Checkboxes for Absent Students -->
            <div class="form-group">
                <label for="absent-students">Absent Students:</label>
                <?php foreach ($teams as $team_id => $team): ?>
                <div class="checkbox-group" id="team-NH-T<?= htmlspecialchars($team_id) ?>">
                    <?php foreach ($team['members'] as $member): ?>
                    <label>
                        <input type="checkbox" name="absent_students[]" value="<?= htmlspecialchars($member['name']) ?>">
                        <?= htmlspecialchars($member['name']) . ' (' . htmlspecialchars($member['year']) . ', ' . htmlspecialchars($member['dept']) . ')' ?>
                    </label><br>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Submit Report</button>
            </div>
            </form>
            <!-- End of the form -->
        </div>
        </div>
    </div>
    </div>

    <script>
    // JavaScript to dynamically display absent students based on team selection
    document.getElementById('team-id').addEventListener('change', function () {
        const selectedTeamId = this.value;

        // Hide all checkbox groups
        document.querySelectorAll('.checkbox-group').forEach(group => {
            group.style.display = 'none';
        });

        // Show the selected team's checkbox group
        if (selectedTeamId) {
            console.log(selectedTeamId)
            document.getElementById('team-' + selectedTeamId).style.display = 'block';
        }
    });
</script>

    <!-- Footer -->
    <footer class="footer py-3">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              &copy; 2024 <a href="" class="font-weight-bold"></a>, (iSPIN) All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <!-- Modal -->
  <div id="teamModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      
      <h2 id="modalTeamName">Team Alpha</h2>
      <form action="https://forms.gle/gf4NWhNR9caQdzFz9 " target="/">
        <!-- <button class="payment">Payment</button> -->
    </form>
     
      <p>Team Leader: <span id="modalTeamLeader">Alice Smith</span></p>
      <p>Members:</p>
      <ul id="modalTeamMembers">
        <li>Bob Johnson</li>
        <li>Charlie Davis</li>
        <li>David Wilson</li>
      </ul>
      <p>Problem Statement: <span id="modalProblemStatement">Build a solar-powered charger</span></p>
    </div>
  </div>

  <script>
    var modal = document.getElementById("teamModal");

    var teamListItems = document.querySelectorAll("#teamList li");

    var span = document.getElementsByClassName("close")[0];

    teamListItems.forEach(item => {
      item.addEventListener('click', function () {
        var teamName = item.textContent;
        var teamId = item.getAttribute('data-team-id');

        document.getElementById("modalTeamName").textContent = teamName;

        var teamDetails = {};

        <?php foreach ($teams as $team):
          $teamLead = $team['team_lead_name'] . " (" . $team['team_lead_dept'] . ") - " . $team['team_lead_year'] . " Year";
          $membersFormatted = array_map(function ($member) {
            return $member['name'] . " (" . $member['dept'] . ") - " . $member['year'] . " Year";
          }, $team['members']);
          $membersJson = json_encode($membersFormatted);
          $problemStatement = json_encode("(" . $team['problem_statement_id'] . ") " . $team['problem_statement_title']);
          ?>
          teamDetails[<?= json_encode($team['id']) ?>] = {
            leader: <?= json_encode($teamLead) ?>,
            members: <?= $membersJson ?>,
            problemStatement: <?= $problemStatement ?>
          };
        <?php endforeach; ?>

        var selectedTeam = teamDetails[teamId];

        if (selectedTeam) {
          document.getElementById("modalTeamLeader").textContent = selectedTeam.leader;
          document.getElementById("modalProblemStatement").textContent = selectedTeam.problemStatement;

          var membersList = document.getElementById("modalTeamMembers");
          membersList.innerHTML = ''
          selectedTeam.members.forEach(member => {
            var li = document.createElement('li');
            li.textContent = member;
            membersList.appendChild(li);
          });
        }

        modal.style.display = "block";
      });
    });

    span.onclick = function () {
      modal.style.display = "none";
    }

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>