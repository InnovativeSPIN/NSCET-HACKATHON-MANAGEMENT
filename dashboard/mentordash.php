<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>Mentor Dashboard</title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
<script src="./assets/js/core/popper.min.js"></script>

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
        width: 100%;
        max-width: 1000px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px auto; /* Center the dashboard and add spacing */
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .container {
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
        color: #007bff;
        font-weight: bold;
    }

    .team-list {
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        animation: fadeIn 1.5s ease-in-out;
        margin-bottom: 20px; /* Add spacing below the section */
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
        background-color: rgba(0,0,0,0.4);
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
            display: block; /* Stack elements vertically */
        }

        .mentor-details {
            width: 100%; /* Full width for each element */
            margin-bottom: 20px; /* Add some space between stacked elements */
        }

        .team-list {
            width: 100%; /* Full width for team list */
            margin-bottom: 20px; /* Add space below team list section */
        }
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <?php include("./resources/sidebar.php") ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
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
                <h1>Mentor Details</h1>
            </header>
            <div class="container">
                <div class="mentor-details">
                    <h2>Mentor Name: <span id="mentorName">L.s.Vignesh</span></h2>
                    <p>Email: <span id="mentorEmail">@example.com</span></p>
                    <p>Department: <span id="mentorDept">Artificial Intelligence and Data Science</span></p>
                </div>
            </div>
            <div class="team-list">
                <h2>Teams Under Control</h2>
                <ul id="teamList">
                    <li data-team-id="1">Team Alpha</li>
                    <li data-team-id="2">Team Beta</li>
                    <li data-team-id="3">Team Gamma</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer py-3">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              &copy; 2024 <a href="https://www.creedtech.com" class="font-weight-bold">Creed Tech</a>, All Rights Reserved.
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

  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>


var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

   






    document.addEventListener('DOMContentLoaded', (event) => {
      // Modal functionality
      const modal = document.getElementById('teamModal');
      const closeModal = document.querySelector('.close');
      const teamList = document.getElementById('teamList');
      
      teamList.addEventListener('click', function(event) {
        if (event.target && event.target.nodeName == 'LI') {
          const teamId = event.target.getAttribute('data-team-id');
          // Fetch team details based on teamId (for demo purposes, using static data)
          document.getElementById('modalTeamName').textContent = event.target.textContent;
          document.getElementById('modalTeamLeader').textContent = 'Mukilan';
          document.getElementById('modalTeamMembers').innerHTML = `
            <li>Mukilan</li>
            <li>Tenshkumar</li>
            <li>Hari</li>
            <li>mark</li>
            <li>sandhosh</li>
          `;
          document.getElementById('modalProblemStatement').textContent = 'Build a solar-powered charger';
          modal.style.display = 'block';
        }
      });
      
      closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
      });
      
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      };
    });
  </script>
</body>
</html>
