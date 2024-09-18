<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

// require_once("../utils/check_login.php");
require_once('../resources/connection.php');

$sql = "SELECT * FROM problem_statements";
$result = $conn->query($sql);
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
  <style>
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: auto;
        }

        /* Default table layout for desktop view */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
        }

        td textarea {
            width: 100%;
            height: 60px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        /* Mobile layout (max-width: 768px) */
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none;
            }

            tr {
                margin-bottom: 20px;
            }

            td {
                display: flex;
                flex-direction: column;
                padding: 10px 0;
            }

            td:before {
                content: attr(data-label);
                font-weight: bold;
                margin-bottom: 5px;
                color: #333;
            }

            td textarea {
                margin-top: 5px;
                margin-bottom: 15px;
                font-size: 14px;
            }

            .container {
                padding: 10px;
            }

            button {
                font-size: 14px;
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 10px;
            }
        }
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php include("./resources/juerysidebar.php") ?>
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

    <div class="container">
    <h2 style="text-align:center">Progress & Feedback Form</h2>

    <div class="form-container">
        <form action="../controllers/progress_check.php" id="problem-form" method="post" class="form-content">
          <h3>Select Problem Statement</h3>
              <div class="form-group">
                  <input list="browsers" name="ps_id" id='ps_id' style="width: 100%; padding: 10px; font-size: 16px;" onchange="fetchTeams()">
                  <datalist id="browsers">
                      <?php
                      if ($result->num_rows > 0) {
                          // Output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['id'] . "'>" . $row['ps_id'] . "</option>";
                          }
                      } else {
                          echo "<option value='No problem statements'></option>";
                      }
                      ?>
                  </datalist>
              </div>
              <div class="form-group">
              <h3>Problem Type</h3>
                <select name="ps_type" id="ps_type" required style="width: 100%; padding: 10px; font-size: 16px;">
                    <option value="" hidden></option>
                        
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
              </div>
              <h3>Select Team</h3>
              <div class="form-group">
                  <input list="team_list" id="team_id" required name="team_id" style="width: 100%; padding: 10px; font-size: 16px;">
                  <datalist id="team_list">
                      <!-- Team options will be populated here -->
                  </datalist>
              </div>
      </div>
    </div>
    <div class="container" style="margin-top:18px">

            <!-- Software Edition Section -->
            <div id="software-section" style="display: none;">
                <h3 style="text-align:center">Software Edition</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>Mentor's Observations</th>
                            <th>Suggestions/Improvements</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Criteria">Code Structure</td>
                            <td data-label="Observations"><textarea name="code_structure_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="code_structure_suggestions"></textarea></td>
                        </tr>
                        <tr>
                            <td data-label="Criteria">User Interface (UI)</td>
                            <td data-label="Observations"><textarea name="ui_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="ui_suggestions"></textarea></td>
                        </tr> 
                        <tr>
                            <td data-label="Criteria">Functionality Testing</td>
                            <td data-label="Observations"><textarea name="functionality_testing_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="functionality_testing_suggestions"></textarea></td>
                        </tr>
                        <tr>
                            <td data-label="Criteria">Scalability/Integration</td>
                            <td data-label="Observations"><textarea name="scalability_integration_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="scalability_integration_suggestions"></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Hardware Edition Section -->
            <div id="hardware-section" style="display: none;">
                <h3 style="text-align:center">Hardware Edition</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>Mentor's Observations</th>
                            <th>Suggestions/Improvements</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Criteria">Design</td>
                            <td data-label="Observations"><textarea name="design_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="design_suggestions"></textarea></td>
                        </tr>
                        <tr>
                            <td data-label="Criteria">Functionality</td>
                            <td data-label="Observations"><textarea name="functionality_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="functionality_suggestions"></textarea></td>
                        </tr>
                        <tr>
                            <td data-label="Criteria">Integration</td>
                            <td data-label="Observations"><textarea name="integration_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="integration_suggestions"></textarea></td>
                        </tr>
                        <tr>
                            <td data-label="Criteria">Scalability</td>
                            <td data-label="Observations"><textarea name="scalability_observations"></textarea></td>
                            <td data-label="Suggestions/Improvements"><textarea name="scalability_suggestions"></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button type="submit">Submit</button>
        </div>
    </form>
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
    function fetchTeams() {
        
        var psId = document.getElementById('ps_id').value;

        if(psId >= 25){
          document.getElementById('ps_type').value = 'software'

          document.getElementById('software-section').style.display = 'block';
            document.getElementById('hardware-section').style.display = 'none';
        }else{
          document.getElementById('ps_type').value = 'hardware'

          document.getElementById('hardware-section').style.display = 'block';
            document.getElementById('software-section').style.display = 'none';
        }

        var teamList = document.getElementById('team_list');
        
        // Clear existing options
        teamList.innerHTML = '';

        if (psId) {
            // Fetch team data based on selected ps_id
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../utils/fetch_teams_by_ps.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var teams = JSON.parse(xhr.responseText);

                    console.log(teams)
                    teams.forEach(function(team) {
                        var option = document.createElement('option');
                        option.value = team.team_id;
                        teamList.appendChild(option);
                    });
                }
            };
            xhr.send('ps_id=' + psId);
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