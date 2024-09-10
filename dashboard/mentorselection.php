<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
require_once('../resources/connection.php');
require_once("../utils/check_login.php");
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">

  <title>Mentor Selection</title>
  <!-- Fonts and icons -->
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
      overflow-x: hidden !important;
      font-family: "source-code-pro", monospace !important;
      background: linear-gradient(to bottom, #5E72E4 50%, #f4f4f4 50%);
      background-attachment: fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    /* Dashboard Styles */
    .dashboard {
      font-family: "source-code-pro", monospace !important;
      width: 100%;
      max-width: 1000px;
      background-color: rgba(255, 255, 255, 0.9);
      /* Slightly transparent white to blend better with blue */
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px auto;
      /* Center the dashboard and add spacing */
      height: 80vh;
      overflow-y: auto;
    }

    /* Other Styles Remain the Same */
    .header {
      font-family: "source-code-pro", monospace !important;
      text-align: center;
      margin-bottom: 20px;
    }

    /* Remaining styles as per your original CSS */


    /* Media Queries */
    @media only screen and (max-width: 979px) {
      .ag-courses_item {
        flex-basis: calc(50% - 30px);
      }

      .ag-courses-item_title {
        font-size: 24px;
      }
    }

    @media only screen and (max-width: 767px) {
      .ag-format-container {
        width: 96%;
      }
    }

    @media only screen and (max-width: 639px) {
      .ag-courses_item {
        flex-basis: 100%;
      }

      .ag-courses-item_title {
        min-height: 72px;
        line-height: 1;
        font-size: 24px;
      }

      .ag-courses-item_link {
        padding: 22px 40px;
      }

      .ag-courses-item_date-box {
        font-size: 16px;
      }
    }

    /* Department button */
    /* Container for department buttons */
    .button-container {
      position: sticky;
      /* Makes the container stick to the top as you scroll */
      top: 0;
      background-color: #fff;
      /* Ensure it stays visible */
      z-index: 100;
      /* Ensure it appears above other content */
      padding: 10px;
      border-bottom: 1px solid #ddd;
      /* Optional: Add a border for separation */
    }

    /* Individual department button styles */
    .department-btn {
      background-color: rgba(192, 192, 192, 0.5);
      /* Semi-transparent silver */
      color: #333;
      /* Dark grey text */
      border: 2px solid #ccc;
      /* Silver border */
      border-radius: 8px;
      padding: 10px 20px;
      margin: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }

    .department-btn:hover {
      background-color: #c861ff;
      /* Purple */
      color: #fff;
      /* White text */
    }

    /* Active state colors */
    .department-btn.active {
      background-color: #ffb380;
      /* Light orange */
      color: #000;
      /* Black text */
    }

    /* Hover effect for department buttons */
    .department-btn:hover {
      background-color: #c861ff;
      /* Purple */
      color: #fff;
      /* White text */
    }

    /* Specific color for active states */
    .department-btn.cse.active,
    .department-btn.cse.active:hover {
      background-color: #ffb380;
      /* Light orange */
      color: #000;
      /* Black text */
    }

    .department-btn.it.active,
    .department-btn.it.active:hover {
      background-color: #3dff98;
      /* Light green */
      color: #000;
      /* Black text */
    }

    .department-btn.aids.active,
    .department-btn.aids.active:hover {
      background-color: #828282;
      /* Gray */
      color: #000;
      /* Black text */
    }

    .department-btn.eee.active,
    .department-btn.eee.active:hover {
      background-color: #ff54f6;
      /* Pink */
      color: #000;
      /* Black text */
    }

    .department-btn.ece.active,
    .department-btn.ece.active:hover {
      background-color: #057eff;
      /* Blue */
      color: #fff;
      /* White text */
    }

    .department-btn.mech.active,
    .department-btn.mech.active:hover {
      background-color: #d1ff3b;
      /* Light yellow-green */
      color: #000;
      /* Black text */
    }

    .department-btn.civil.active,
    .department-btn.civil.active:hover {
      background-color: #ffb380;
      /* Light orange */
      color: #000;
      /* Black text */
    }

    .department-btn.sh.active,
    .department-btn.sh.active:hover {
      background-color: #c861ff;
      /* Purple */
      color: #fff;
      /* White text */
    }

    .dashboard {
      width: 100%;
      max-width: 1000px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 0 auto;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
      animation: fadeIn 1s ease-in-out;
    }

    .staff-card {
      width: 300px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      /* Semi-transparent white */
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      /* Subtle shadow */
      transition: transform 0.3s, box-shadow 0.3s;
      font-size: 16px;
    }

    .staff-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      /* Slightly more pronounced shadow */
    }

    .staff-card h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333;
      /* Dark grey text */
    }

    .staff-card p {
      margin-bottom: 10px;
      color: #666;
      /* Medium grey text */
    }

    .staff-card a {
      color: #007bff;
      /* Blue color for links */
      text-decoration: none;
    }

    .staff-card a:hover {
      text-decoration: underline;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 2px solid #ccc;
      /* Silver border */
      border-radius: 4px;
      font-size: 16px;
      background-color: rgba(255, 255, 255, 0.8);
      /* Semi-transparent white */
    }

    .form-group button {
      padding: 10px 15px;
      background-color: rgba(192, 192, 192, 0.7);
      /* Slightly less transparent silver */
      color: #333;
      /* Dark grey text */
      border: 2px solid #ccc;
      /* Silver border */
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }

    .form-group button:hover {
      background-color: rgba(192, 192, 192, 0.9);
      /* Slightly less transparent silver */
      color: #000;
    }

    .staff-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .staff-item {
      display: block;
      margin-bottom: 15px;
      display: none;
      /* Hide all by default */
    }

    .staff-box {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 15px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s, box-shadow 0.2s;
      cursor: pointer;
      position: relative;
      /* Added to ensure buttons inside are positioned relative to this */
    }

    .staff-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .staff-info {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .staff-name {
      font-weight: bold;
      font-size: 1.1em;
      cursor: pointer;
    }

    .staff-details {
      margin-top: 10px;
      padding-top: 10px;
      border-top: 1px solid #ddd;
      font-size: 0.9em;
      color: #555;
    }

    .select-btn {
      padding: 8px 12px;
      background-color: #5E72E4;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .select-btn:hover {
      background-color: #0056b3;
    }

    .department-btn {
      margin: 5px;
      padding: 10px 15px;
      background-color: #5E72E4;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .department-btn.active {
      background-color: #0056b3;
    }

    .department-btn:hover {
      background-color: #0056b3;
    }

    /* Popup styles */
    .popup {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      /* Darker background for better contrast */
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1000;
      /* Ensure it appears above all other content */
      animation: fadeIn 0.3s ease;
      /* Animation for popup appearance */
    }

    .popup-content {
      background-color: #fff;
      padding: 30px;
      /* Increased padding for better spacing */
      border-radius: 12px;
      /* Rounded corners */
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      /* Deeper shadow for a 3D effect */
      max-width: 400px;
      /* Limiting max width for better design */
      width: 90%;
      /* Responsive width */
      animation: popup-appear 0.3s ease;
      /* Animation for popup content appearance */
    }

    @keyframes popup-appear {
      from {
        transform: scale(0.8);
        opacity: 0;
      }

      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .popup-buttons {
      display: flex;
      justify-content: center;
      gap: 15px;
      /* Space between buttons */
    }

    .popup-buttons button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .popup-buttons button:first-child {
      background-color: #28a745;
      /* Green for confirm */
      color: white;
    }

    .popup-buttons button:first-child:hover {
      background-color: #218838;
    }

    .popup-buttons button:last-child {
      background-color: #dc3545;
      /* Red for cancel */
      color: white;
    }

    .popup-buttons button:last-child:hover {
      background-color: #c82333;
    }


    /* Hide popup content when not active */
    .hidden {
      display: none;
    }


    .heading-spacing {
      font-family: "greycliff-cf", sans-serif;
      font-weight: 600;
      background-image: linear-gradient(45deg, #e8c942, rgb(148, 98, 209));
      background-size: 100%;
      background-repeat: repeat;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      -moz-background-clip: text;
      -moz-text-fill-color: transparent;
      font-size: 2.5vw;
    }

    .heading-spacing i {
      font-family: "lores-9-plus-wide", sans-serif;
      font-weight: 200;
      font-style: normal;
      font-size: clamp(28px, 3.25vw, 35px);
    }
  </style>

  <style>
    .alert {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 10px 20px;
      border-radius: 5px;
      z-index: 1000;
      font-size: 16px;
      font-weight: bold;
    }

    .alert.success {
      background-color: #4CAF50;
      color: white;
    }

    .alert.error {
      background-color: #f44336;
      color: white;
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php include("./resources/sidebar.php") ?>
  <main class="main-content position-relative border-radius-lg ">
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

    <div class="dashboard">
      <div class="col-md-12 text-center mb-4">
        <h2 class="heading-spacing  psl" style="margin:0px">
          <i></i>Select your <i></i>Mentor
        </h2>
      </div>
      <div class="button-container">
        <div class="button-container">
          <button class="department-btn cse active" onclick="selectButton(this)">CSE</button>
          <button class="department-btn it" onclick="selectButton(this)">IT</button>
          <button class="department-btn ai&ds" onczlick="selectButton(this)">AI&DS</button>
          <button class="department-btn eee" onclick="selectButton(this)">EEE</button>
          <button class="department-btn ece" onclick="selectButton(this)">ECE</button>
          <button class="department-btn mech" onclick="selectButton(this)">MECH</button>
          <button class="department-btn civil" onclick="selectButton(this)">CIVIL</button>
          <button class="department-btn s&h" onclick="selectButton(this)">S&H</button>
        </div>




        <section class="content">
          <div class="ag-format-container">
            <ul class="staff-list">

              <?php
              $sql = "SELECT id, name, dept, area_of_interest, email, designation FROM mentors";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<li class="staff-item ' . strtolower($row['dept']) . '" data-department="' . strtolower($row['dept']) . '">';
                  echo '  <div class="staff-box" onclick="toggleDetails(this)">';
                  echo '    <div class="staff-info">';
                  echo '      <span class="staff-name">' . htmlspecialchars($row['name']) . '</span>';
                  echo '      <button class="select-btn" onclick="showConfirmation(event, \'' . htmlspecialchars($row['name']) . '\', ' . $row['id'] . ')">Select</button>';
                  echo '    </div>';
                  echo '    <div class="staff-details" style="display: none;">';
                  echo '      <p><strong>Department:</strong> ' . htmlspecialchars($row['dept']) . '</p>';
                  echo '      <p><strong>Designation:</strong> ' . htmlspecialchars($row['designation']) . '</p>';
                  echo '      <p><strong>Area of Interest:</strong> ';

                  $areaOfInterestArray = json_decode($row['area_of_interest'], true);

                  if (is_array($areaOfInterestArray)) {
                    echo htmlspecialchars(implode(', ', $areaOfInterestArray));
                  } else {
                    echo 'N/A';
                  }

                  echo '</p>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</li>';
                }
              } else {
                echo "0 results";
              }

              $conn->close();
              ?>

              <!-- Confirmation Popup -->
              <div id="confirmationPopup" class="popup" style="display: none;">
                <div class="popup-content">
                  <h3>Confirmation</h3>
                  <p id="confirmationMessage"></p>
                  <div class="popup-buttons">
                    <button id="confirmBtn">Confirm</button>
                    <button id="cancelBtn">Cancel</button>
                  </div>
                </div>
              </div>
        </section>

        <!-- Core JS Files -->
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="./assets/js/plugins/chartjs.min.js"></script>
        <script>
          // JavaScript for department buttons

          // Function to toggle the visibility of staff details
          function toggleDetails(element) {
            const details = element.querySelector('.staff-details');
            if (details.style.display === 'none' || details.style.display === '') {
              details.style.display = 'block';
            } else {
              details.style.display = 'none';
            }
          }

          function showAlert(message, type) {
            const alertBox = document.createElement('div');
            alertBox.className = `alert ${type}`;
            alertBox.textContent = message;

            document.body.appendChild(alertBox);

            setTimeout(() => {
              alertBox.remove();
            }, 3000);
          }

          // Function to show confirmation when a staff member is selected
          function showConfirmation(event, staffName, mentorID) {
            event.stopPropagation(); // Prevent click event from bubbling up
            document.getElementById('confirmationMessage').textContent = `Are you sure you want to select ${staffName}?`;
            document.getElementById('confirmationPopup').style.display = 'flex';

            // Set up event listeners for the buttons
            document.getElementById('confirmBtn').onclick = function () {
              const formData = new FormData();
              formData.append("mentor_id", mentorID);
              formData.append("team_id", <?php echo $user_id; ?>);

              fetch("../controllers/mentor_selection.php", {
                method: "POST",
                body: formData
              })
                .then(response => response.json())
                .then(result => {
                  if (result.success) {
                    showAlert(result.message, 'success');
                    console.log(result.message)
                  } else {
                    showAlert(result.message, 'error');
                    console.log(result.message)
                  }
                })
                .catch(error => {
                  console.error('Error:', error);
                  showAlert('An unexpected error occurred. Please try again later', 'error')
                });

              // alert(`${mentorID} has been selected.`);
              closePopup();
            };

            document.getElementById('cancelBtn').onclick = function () {
              closePopup();
            };
          }

          // Function to close the popup
          function closePopup() {
            document.getElementById('confirmationPopup').style.display = 'none';
          }


          // Function to filter staff members by department
          function filterByDepartment(department) {
            const items = document.querySelectorAll('.staff-item');
            items.forEach(item => {
              if (department === 'all' || item.dataset.department === department) {
                item.style.display = 'block'; // Ensure item is visible
              } else {
                item.style.display = 'none'; // Hide item
              }
            });

            // Update active state for buttons
            document.querySelectorAll('.department-btn').forEach(btn => btn.classList.remove('active'));
            if (department !== 'all') {
              document.querySelector('.department-btn.' + department).classList.add('active');
            }
          }

          // Ensure staff items are filtered correctly on page load
          document.addEventListener('DOMContentLoaded', () => {
            filterByDepartment('cse'); // Set default department to 'cse'
          });

          // Attach event listeners to department filter buttons
          document.querySelectorAll('.department-btn').forEach(button => {
            button.addEventListener('click', function () {
              const department = this.classList.contains('active') ? 'all' : this.classList[1];
              filterByDepartment(department);
            });
          });



        </script>

        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>