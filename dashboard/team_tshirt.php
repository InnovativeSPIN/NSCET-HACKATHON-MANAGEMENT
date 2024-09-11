<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

require_once("../utils/check_login.php");
require_once('../resources/connection.php');
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$team_sql = "
    SELECT 
        t.team_name, 
        t.team_lead, 
        s.name AS team_lead_name, 
        t.team_id, 
        t.email, 
        t.mentor_id, 
        m.name AS mentor_name,
        t.team_members
    FROM 
        teams t
    JOIN 
        students s ON t.team_lead = s.reg_no
    LEFT JOIN 
        problem_statements ps ON t.ps_id = ps.id
    LEFT JOIN 
        mentors m ON t.mentor_id = m.id
    WHERE 
        t.id = '$user_id'
";

$team_result = $conn->query($team_sql);

$team_data = $team_result->fetch_assoc();

$team_id = $team_data['team_id'];

function isTeamIdExists($team_id, $conn) {
    $check_sql = "SELECT COUNT(*) as total FROM team_tshirt_details WHERE team_id = '$team_id'";
    $check_result = $conn->query($check_sql);
    $data = $check_result->fetch_assoc();
    
    return $data['total'] > 0;
}

if (isTeamIdExists($team_id, $conn)) {
    header("Location: ./team_tshirt_details.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $team_id = $_POST['team_id'];
  $team_name = $_POST['team_name'];
  $tshirt_small_qty = $_POST['tshirt_small_qty'];
  $tshirt_medium_qty = $_POST['tshirt_medium_qty'];
  $tshirt_large_qty = $_POST['tshirt_large_qty'];
  $tshirt_xl_qty = $_POST['tshirt_xl_qty'];
  $tshirt_xxl_qty = $_POST['tshirt_xxl_qty'];
  $tshirt_color = $_POST['tshirt_color'];

  $check_sql = "SELECT * FROM team_tshirt_details WHERE team_id = '$team_id'";
  $result = $conn->query($check_sql);

  if ($result->num_rows > 0) {
    echo "<script>
              window.onload = function() {
                  alert('You have already registered.');
              }
            </script>";
  } else {
    $sql = "INSERT INTO team_tshirt_details 
              (team_id, team_name, tshirt_small_qty, tshirt_medium_qty, tshirt_large_qty, tshirt_xl_qty, tshirt_xxl_qty, tshirt_color) 
              VALUES 
              ('$team_id', '$team_name', '$tshirt_small_qty', '$tshirt_medium_qty', '$tshirt_large_qty', '$tshirt_xl_qty', '$tshirt_xxl_qty', '$tshirt_color')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>
                  window.onload = function() {
                      alert('T-shirt details added successfully.');
                  }
                </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
}
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
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
      font-family: 'Roboto', sans-serif;
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

    .custom-select-container {
      position: relative;
      display: inline-block;
      width: 100%;
    }

    .custom-select {
      background-color: #333;
      color: #fff;
      border: 1px solid #555;
      padding: 10px;
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
      appearance: none;
    }

    .custom-select option {
      padding: 10px;
      background-color: #333;
      color: #fff;
    }

    .custom-select option:hover {
      background-color: #444;
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php include("./resources/sidebar.php") ?>
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
          <h1>Team T-Shirt Details</h1>
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

      .form-group-inline {
        display: inline-block;
        width: 48%;
        vertical-align: top;
        margin-bottom: 20px;
      }

      select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: border-color 0.3s ease;
      }

      select:focus {
        border-color: #007bff;
        outline: none;
      }

      select option {
        padding: 10px;
        background-color: #fff;
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

      .form-group input[type="text"],
      .form-group input[type="email"],
      .form-group input[type="file"],
      .form-group textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
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

      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
      }

      input[type="text"],
      input[type="number"],
      select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: border-color 0.3s ease;
      }

      input:focus {
        border-color: #007bff;
        outline: none;
      }
      .custom-select-container select {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px;
        font-size: 16px;
      }

      .custom-select-container select option {
        color: black; /* Default text color for options */
      }

      .custom-select-container select option.selected {
        background-color: transparent; /* Ensure selected option color remains consistent */
        color: black; /* Ensure text color remains consistent */
      }
    </style>
    <div class="main-content">
      <div class="dashboard">
        <div class="form-container">
          <form action="" method="POST">
            <div class="form-group">
              <label for="team-id">Team ID:</label>
              <input type="text" id="team-id" name="team_id" value="<?php echo $team_data['team_id'] ?>" readonly
                required>
            </div>

            <div class="form-group">
              <label for="team-name">Team Name:</label>
              <input type="text" id="team-name" name="team_name" value="<?php echo $team_data['team_name'] ?>" readonly
                required>
            </div>

            <div class="form-group form-group-inline">
              <label for="tshirt_small_qty">Small T-shirts Quantity:</label><br>
              <input type="number" id="tshirt_small_qty" name="tshirt_small_qty" min="0" value="0" required><br><br>
            </div>

            <div class="form-group form-group-inline">
              <label for="tshirt_medium_qty">Medium T-shirts Quantity:</label><br>
              <input type="number" id="tshirt_medium_qty" name="tshirt_medium_qty" min="0" value="0" required><br><br>
            </div>

            <div class="form-group form-group-inline">
              <label for="tshirt_large_qty">Large T-shirts Quantity:</label><br>
              <input type="number" id="tshirt_large_qty" name="tshirt_large_qty" min="0" value="0" required><br><br>
            </div>

            <div class="form-group form-group-inline">
              <label for="tshirt_xl_qty">XL T-shirts Quantity:</label><br>
              <input type="number" id="tshirt_xl_qty" name="tshirt_xl_qty" min="0" value="0" required><br><br>
            </div>

            <div class="form-group">
              <label for="tshirt_xxl_qty">XXL T-shirts Quantity:</label><br>
              <input type="number" id="tshirt_xxl_qty" name="tshirt_xxl_qty" min="0" value="0" required><br><br>
            </div>

            <div class="form-group">
            <label for="tshirt_color">T-shirt Color:</label><br>
            <div class="custom-select-container">
              <select class="custom-select" id="tshirt_color" name="tshirt_color" required>
                <option value="Light Blue|#add8e6" class="color-option" style="background: #add8e6;">
                  Light Blue
                </option>
                <option value="Bright Orange|#ffa500" class="color-option" style="background: #ffa500;">
                  Bright Orange
                </option>
                <option value="Mint Green|#98ff98" class="color-option" style="background: #98ff98;">
                  Mint Green
                </option>
                <option value="Cyan|#00ffff" class="color-option" style="background: #00ffff;">
                  Cyan
                </option>
                <option value="Magenta|#ff00ff" class="color-option" style="color: #ffffff; background: #ff00ff;">
                  Magenta
                </option>
                <option value="Sky Blue|#87ceeb" class="color-option" style="background: #87ceeb;">
                  Sky Blue
                </option>
                <option value="Baby Pink|#ffb6c1" class="color-option" style="background: #ffb6c1;">
                  Baby Pink
                </option>
                <option value="Purple|#800080" class="color-option" style="background: #800080;">
                  Purple
                </option>
                <option value="White|#ffffff" class="color-option" style="color: #000; background: #ffffff;">
                  White
                </option>
              </select>
            </div>
          </div>

            <div class="form-group">
              <button type="submit">Submit Registration</button>
            </div>
          </form>
        </div>
      </div>
    </div>

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
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const selectElement = document.getElementById('tshirt_color');
    
    selectElement.addEventListener('click', (event) => {
      const selectedValue = event.target.value;
      const options = event.target.querySelectorAll('custom-select');

      selectElement.style.backgroundColor = getColorFromValue(selectedValue);
      selectElement.style.color = getTextColorFromValue(selectedValue);
    });

    function getColorFromValue(value) {
      return value.split('|')[1] || 'transparent';
    }

    function getTextColorFromValue(value) {
      return value.includes('White') ? 'black' : 'white';
    }
  });
</script>
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