<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    
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
    font-family: "source-code-pro", monospace !important;
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
    margin: 20px auto; /* Center the dashboard and add spacing */
}

.header {
    font-family: "source-code-pro", monospace !important;
    text-align: center;
    margin-bottom: 20px;
}

.container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    animation: fadeIn 1s ease-in-out;
}

.team-details, 
.idea-details {
    width: 48%;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, font-size 0.3s;
    font-size: 18px;
}

.team-details:hover, 
.idea-details:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
}

.team-details h2, 
.idea-details h2 {
    margin: 0 0 10px;
    font-size: 20px;
    color: #344767;
}

.team-details p, 
.idea-details p {
    margin: 0;
    font-size: 16px;
    color: #344767;
}

.team-details span, 
.idea-details span {
    color: #007bff;
    font-weight: bold;
}

/* Team Members Section */
.team-members {
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    animation: fadeIn 1.5s ease-in-out;
    margin-bottom: 20px; /* Add spacing below the section */
}

/* Team Members Section */
.team-members {
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    animation: fadeIn 1.5s ease-in-out;
    margin-bottom: 20px;
    overflow-x: auto; /* Enable horizontal scrolling for smaller screens */
}

/* Table Styling */
#membersTable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    min-width: 600px; /* Minimum width to ensure readability */
}

/* Table Header Styling */
#membersTable th {
    background-color: #007bff;
    color: white;
    padding: 10px;
    text-align: left;
    font-size: 16px; /* Adjust font size for readability */
}

/* Table Body Styling */
#membersTable td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
    font-size: 14px; /* Adjust font size for readability */
}

/* Alternate Row Colors */
#membersTable tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover Effect for Rows */
#membersTable tr:hover {
    background-color: #ddd;
}

/* Responsive Design for Smaller Screens */
@media (max-width: 768px) {
    .team-members {
        padding: 10px; /* Reduce padding for smaller screens */
    }

    #membersTable {
        width: 100%;
        min-width: unset; /* Remove minimum width to allow it to shrink */
        display: block; /* Display the table as a block element */
        overflow-x: auto; /* Allow horizontal scrolling */
    }

    #membersTable thead {
        display: none; /* Hide the table headers */
    }

    #membersTable tr {
        display: block; /* Display rows as block for stacking */
        margin-bottom: 15px; /* Add spacing between stacked rows */
        border-bottom: 1px solid #ddd; /* Add border for better separation */
    }

    #membersTable td {
        display: flex; /* Use flexbox to align pseudo-label and value */
        justify-content: space-between; /* Space between label and value */
        align-items: center; /* Align items vertically in the center */
        padding: 10px; /* Padding for table cells */
        font-size: 14px; /* Font size for readability */
        border-bottom: none; /* Remove bottom border for cleaner look */
        position: relative; /* Position relative for pseudo-element alignment */
    }

    #membersTable td::before {
        content: attr(data-label); /* Use data-label to create pseudo-labels */
        flex-shrink: 0; /* Prevent shrinking of the label */
        font-weight: bold; /* Bold font for label */
        color: #333; /* Color for label */
        text-align: left; /* Align text to the left */
        width: 50%; /* Adjust width for label */
    }
}



.members-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.add-member-btn {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.add-member-btn:hover {
    background-color: #0056b3;
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

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input, 
.form-group select {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.form-group button {
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-group button:hover {
    background-color: #0056b3;
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

    .team-details, 
    .idea-details {
        width: 100%; /* Full width for each element */
        margin-bottom: 20px; /* Add some space between stacked elements */
    }
    
    .team-members {
        width: 100%; /* Full width for team members */
        margin-bottom: 20px; /* Add space below team members section */
    }
}


.validate-btn {
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #007bff; /* Blue background */
    color: #fff; /* White text */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.validate-btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
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


<div class="dashboard">
    <header class="header">
        <h1>Team Dashboard</h1>
    </header>

    <div class="container">
        <!-- Team Details Section (Left) -->
        <div class="team-details">
            <h2>Team Name: <span>TechCreed</span></h2>
            <p>Team Leader: <span>Mukilan</span></p>
        </div>

        <!-- Idea Details Section (Right) -->
        <div class="idea-details">
            <p>Mentor: <span>L.S.Vignesh</span></p>
            <p>Submitted Idea: <span>AI-based Smart Irrigation System</span></p>
        </div>
    </div>

<!-- Team Members Section -->
<div class="team-members">
        <div class="members-header">
            <h2>Team Members</h2>
            <button class="add-member-btn">Add Member</button>
        </div>
        
        <table id="membersTable">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">Mukilan</td>
                    <td data-label="Department">Computer Science</td>
                    <td data-label="Year">3rd Year</td>
                    <td data-label="Mail">mukilan@example.com</td>
                </tr>
                <tr>
                    <td data-label="S.No">2</td>
                    <td data-label="Name">Tenshkumar</td>
                    <td data-label="Department">Information Technology</td>
                    <td data-label="Year">2nd Year</td>
                    <td data-label="Mail">tenshkumar@example.com</td>
                </tr>
                <tr>
                    <td data-label="S.No">3</td>
                    <td data-label="Name">Srihari</td>
                    <td data-label="Department">Mechanical Engineering</td>
                    <td data-label="Year">4th Year</td>
                    <td data-label="Mail">srihari@example.com</td>
                </tr>
                <tr>
                    <td data-label="S.No">4</td>
                    <td data-label="Name">Mark</td>
                    <td data-label="Department">Electrical Engineering</td>
                    <td data-label="Year">1st Year</td>
                    <td data-label="Mail">mark@example.com</td>
                </tr>
                <tr>
                    <td data-label="S.No">5</td>
                    <td data-label="Name">Sandhosh</td>
                    <td data-label="Department">Civil Engineering</td>
                    <td data-label="Year">3rd Year</td>
                    <td data-label="Mail">sandhosh@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

        <footer class="footer">
            <p>&copy; 2024 Team Dashboard</p>
        </footer>
    </div>

    <!-- Modal -->
   
<div id="memberModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add New Member</h2>
        <div class="form-group">
    <label for="regNumber">Registration Number:</label>
    <input type="text" id="regNumber" placeholder="Enter registration number">
    <button type="button" class="validate-btn">Validate</button>
</div>
        <div class="form-group">
            <label for="StudentName">Name:</label>
            <input type="text" id="StudentName" placeholder="Enter Student name">
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <select id="department">
                <option value="">Select Department</option>
                <option value="CSE">Computer Science</option>
                <option value="IT">Information Technology</option>
                <option value="EEE">Artificial Intelligence and Data Science</option>
                <option value="ECE">Electronics & Communication</option>
                <option value="EEE">Electrical & Electronics</option>
                <option value="EEE">Civil</option>
                <option value="EEE">Mechanical</option>
                
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <select id="year">
                <option value="">Select Year</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="email" id="email" placeholder="Enter email ID">
        </div>
        <div class="form-group">
            <button id="submitMemberBtn">Add Member</button>
        </div>
    </div>
</div>

    <!-- End Navbar -->
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    // Get the modal element
    const modal = document.getElementById("memberModal");
    // Get the button that opens the modal
    const btn = document.querySelector(".add-member-btn");
    // Get the <span> element that closes the modal
    const span = document.getElementsByClassName("close")[0];
    // Get the submit button inside the modal
    const submitBtn = document.getElementById("submitMemberBtn");

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Example function to handle form submission with non-empty validation
    submitBtn.onclick = function(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        const regNumber = document.getElementById("regNumber").value.trim();
        const StudentName = document.getElementById("StudentName").value.trim();
        const department = document.getElementById("department").value;
        const year = document.getElementById("year").value;
        const email = document.getElementById("email").value.trim();

        // Validate if all fields are filled
        if (!regNumber || !StudentName || !department || !year || !email) {
            alert("Please fill in all fields.");
            return; // Stop the function if validation fails
        }

        // Perform actions with the collected data (if all fields are filled)
        console.log("Member Details:", {
            regNumber,
            StudentName,
            department,
            year,
            email
        });

        // You can add functionality here to process or store the form data

        // Clear form fields after submission
        document.getElementById("regNumber").value = '';
        document.getElementById("StudentName").value = '';
        document.getElementById("department").value = '';
        document.getElementById("year").value = '';
        document.getElementById("email").value = '';

        // Close the modal after submission
        modal.style.display = "none";
    }



  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>