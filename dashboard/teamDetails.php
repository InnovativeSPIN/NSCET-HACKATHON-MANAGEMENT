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
    table tbody tr td:first-child {
    font-weight: bold;
}
  </style>
  <style>
        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: auto;
        }

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

        td input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .total-score {
            font-weight: bold;
            text-align: right;
        }

        .final-notes {
            margin-top: 20px;
        }

        .final-notes textarea {
            width: 100%;
            padding: 10px;
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
            margin-top: 20px;
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

            td input[type="number"] {
                margin-top: 5px;
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
        <form action="#" id="problem-form" method="post" class="form-content">
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

              <h3>Select Team</h3>
              <div class="form-group">
                  <input list="team_list" id="team_id" name="team_id" style="width: 100%; padding: 10px; font-size: 16px;" onchange="fetchTeamData()">
                  <datalist id="team_list">
                      <!-- Team options will be populated here -->
                  </datalist>
              </div>
      </div>
    </div>
    <div class="container" style="margin-top:18px">
    <h3>Initial Team Analysis</h3>
    <table id="initial_team_analysis_table" border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Criteria</th>
                <th>Observations</th>
                <th>Suggestions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be populated here -->
        </tbody>
    </table>
    <h3>Evaluation Sessions</h3>
    <table id="evaluation_table" border="1" style="width: 100%; border-collapse: collapse;">
        
        <tbody>
            <!-- Hardware evaluation data will be populated here -->
        </tbody>
    </table>

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
    var container = document.getElementById('evaluation_table');

       function populateEvaluationTable(tableId, data, criteriaList) {
          var table = document.getElementById(tableId);
          var tbody = table.getElementsByTagName('tbody')[0];
          tbody.innerHTML = ''; // Clear existing rows

          if (data && data.length > 0) {
            data.forEach(function (row, index) {
            // Create and add heading
            var headingElement = document.createElement('h2');
            headingElement.textContent = `Session ${index + 1}`;
            container.appendChild(headingElement);
            
            // Create a horizontal line
            var hr = document.createElement('hr');
            container.appendChild(hr);
            
            // Create table
            var table = document.createElement('table');
            table.border = '1';
            table.style.width = '100%';
            table.style.borderCollapse = 'collapse';
            
            var thead = document.createElement('thead');
            var trHead = document.createElement('tr');
            var thCriteria = document.createElement('th');
            thCriteria.textContent = 'Criteria';
            var thObs = document.createElement('th');
            thObs.textContent = 'Observations';
            var thSug = document.createElement('th');
            thSug.textContent = 'Suggestions';
            trHead.appendChild(thCriteria);
            trHead.appendChild(thObs);
            trHead.appendChild(thSug);
            thead.appendChild(trHead);
            table.appendChild(thead);
            
            var tbody = document.createElement('tbody');
            criteriaList.forEach(function (criteria) {
                var tr = document.createElement('tr');
                
                var tdCriteria = document.createElement('td');
                tdCriteria.textContent = criteria.label;
                
                var tdObs = document.createElement('td');
                var pObs = document.createElement('p');
                pObs.textContent = row[criteria.obs] || ''; // Set the value from data
                tdObs.appendChild(pObs);
                
                var tdSug = document.createElement('td');
                var pSug = document.createElement('p');
                pSug.textContent = row[criteria.sug] || ''; // Set the value from data
                tdSug.appendChild(pSug);

                tr.appendChild(tdCriteria);
                tr.appendChild(tdObs);
                tr.appendChild(tdSug);
                
                tbody.appendChild(tr);
            });

            table.appendChild(tbody);

            // Append table to the container
            container.appendChild(table);
        });
          } else {
              var tr = document.createElement('tr');
              var td = document.createElement('td');
              td.colSpan = 3;
              td.textContent = '';
              tr.appendChild(td);
              tbody.appendChild(tr);
          }
      }

    function fetchTeamData() {
          var teamId = document.getElementById('team_id').value;

          if (teamId) {
              // Fetch initial_team_analysis data
              var xhrInitial = new XMLHttpRequest();
              xhrInitial.open('POST', '../utils/fetch_initial_team_analysis.php', true);
              xhrInitial.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
              xhrInitial.onload = function () {
                  if (xhrInitial.status === 200) {
                      var response = JSON.parse(xhrInitial.responseText);
                      populateInitialTeamAnalysisTable(response.initialAnalysis);
                      var ps_id = response.initialAnalysis[0]?.ps_id; // Extract ps_id if available
                      if (ps_id) {
                          // Fetch hardware_evaluation data
                          var xhrHardware = new XMLHttpRequest();
                          xhrHardware.open('POST', '../utils/fetch_hardware_evaluation.php', true);
                          xhrHardware.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                          xhrHardware.onload = function () {
                              if (xhrHardware.status === 200) {
                                  var responseHardware = JSON.parse(xhrHardware.responseText);
                                  populateEvaluationTable('evaluation_table', responseHardware.hardwareEvaluation, [
                                      { label: 'Design', obs: 'design_observations', sug: 'design_suggestions' },
                                      { label: 'Functionality', obs: 'functionality_observations', sug: 'functionality_suggestions' },
                                      { label: 'Integration', obs: 'integration_observations', sug: 'integration_suggestions' },
                                      { label: 'Scalability', obs: 'scalability_observations', sug: 'scalability_suggestions' }
                                  ]);
                              }
                          };
                          xhrHardware.send('ps_id=' + ps_id);
                          
                          // Fetch software_evaluation data
                          var xhrSoftware = new XMLHttpRequest();
                          xhrSoftware.open('POST', '../utils/fetch_software_evaluation.php', true);
                          xhrSoftware.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                          xhrSoftware.onload = function () {
                              if (xhrSoftware.status === 200) {
                                  var responseSoftware = JSON.parse(xhrSoftware.responseText);
                                  populateEvaluationTable('evaluation_table', responseSoftware.softwareEvaluation, [
                                      { label: 'Code Structure', obs: 'code_structure_observations', sug: 'code_structure_suggestions' },
                                      { label: 'UI', obs: 'ui_observations', sug: 'ui_suggestions' },
                                      { label: 'Functionality Testing', obs: 'functionality_testing_observations', sug: 'functionality_testing_suggestions' },
                                      { label: 'Scalability & Integration', obs: 'scalability_integration_observations', sug: 'scalability_integration_suggestions' }
                                  ]);
                              }
                          };
                          xhrSoftware.send('ps_id=' + ps_id);
                      }
                  }
              };
              xhrInitial.send('team_id=' + teamId);
          }
      }

    function populateInitialTeamAnalysisTable(data) {
        var table = document.getElementById('initial_team_analysis_table');
        var tbody = table.getElementsByTagName('tbody')[0];
        tbody.innerHTML = ''; // Clear existing rows

        if (data && data.length > 0) {
            // Define criteria labels and corresponding fields
            var criteriaList = [
                { label: 'Understanding', obs: 'understanding_observations', sug: 'understanding_suggestions' },
                { label: 'Technical Approach', obs: 'tech_approach_observations', sug: 'tech_approach_suggestions' },
                { label: 'Innovation', obs: 'innovation_observations', sug: 'innovation_suggestions' },
                { label: 'Progress', obs: 'progress_observations', sug: 'progress_suggestions' },
                { label: 'Team Collaboration', obs: 'team_collaboration_observations', sug: 'team_collaboration_suggestions' },
                { label: 'Challenges', obs: 'challenges_observations', sug: 'challenges_suggestions' }
            ];

            criteriaList.forEach(function (criteria) {
              var tr = document.createElement('tr');

              // Criteria column
              var tdCriteria = document.createElement('td');
              tdCriteria.textContent = criteria.label;

              // Observations column
              var tdObs = document.createElement('td');
              var pObs = document.createElement('p');
              pObs.textContent = data[0][criteria.obs] || ''; // Set the value from data
              tdObs.appendChild(pObs);

              // Suggestions column
              var tdSug = document.createElement('td');
              var pSug = document.createElement('p');
              pSug.textContent = data[0][criteria.sug] || ''; // Set the value from data
              tdSug.appendChild(pSug);

              // Append columns to the row
              tr.appendChild(tdCriteria);
              tr.appendChild(tdObs);
              tr.appendChild(tdSug);

              // Append row to the tbody
              tbody.appendChild(tr);
          });
        } else {
            var tr = document.createElement('tr');
            var td = document.createElement('td');
            td.colSpan = 3;
            td.textContent = '';
            tr.appendChild(td);
            tbody.appendChild(tr);
        }
    }

    function fetchTeams() {
        var psId = document.getElementById('ps_id').value;
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
    





