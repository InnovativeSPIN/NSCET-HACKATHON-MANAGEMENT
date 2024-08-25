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
    background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white to blend better with blue */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px auto; /* Center the dashboard and add spacing */
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
  position: sticky; /* Makes the container stick to the top as you scroll */
  top: 0;
  background-color: #fff; /* Ensure it stays visible */
  z-index: 100; /* Ensure it appears above other content */
  padding: 10px;
  border-bottom: 1px solid #ddd; /* Optional: Add a border for separation */
}

/* Individual department button styles */
.department-btn {
  background-color: rgba(192, 192, 192, 0.5); /* Semi-transparent silver */
  color: #333; /* Dark grey text */
  border: 2px solid #ccc; /* Silver border */
  border-radius: 8px;
  padding: 10px 20px;
  margin: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

.department-btn:hover {
  background-color: #c861ff; /* Purple */
  color: #fff; /* White text */
}

/* Active state colors */
.department-btn.active {
  background-color: #ffb380; /* Light orange */
  color: #000; /* Black text */
}

/* Hover effect for department buttons */
.department-btn:hover {
  background-color: #c861ff; /* Purple */
  color: #fff; /* White text */
}

/* Specific color for active states */
.department-btn.cse.active,
.department-btn.cse.active:hover {
  background-color: #ffb380; /* Light orange */
  color: #000; /* Black text */
}

.department-btn.it.active,
.department-btn.it.active:hover {
  background-color: #3dff98; /* Light green */
  color: #000; /* Black text */
}

.department-btn.aids.active,
.department-btn.aids.active:hover {
  background-color: #828282; /* Gray */
  color: #000; /* Black text */
}

.department-btn.eee.active,
.department-btn.eee.active:hover {
  background-color: #ff54f6; /* Pink */
  color: #000; /* Black text */
}

.department-btn.ece.active,
.department-btn.ece.active:hover {
  background-color: #057eff; /* Blue */
  color: #fff; /* White text */
}

.department-btn.mech.active,
.department-btn.mech.active:hover {
  background-color: #d1ff3b; /* Light yellow-green */
  color: #000; /* Black text */
}

.department-btn.civil.active,
.department-btn.civil.active:hover {
  background-color: #ffb380; /* Light orange */
  color: #000; /* Black text */
}

.department-btn.sh.active,
.department-btn.sh.active:hover {
  background-color: #c861ff; /* Purple */
  color: #fff; /* White text */
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
  background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow */
  transition: transform 0.3s, box-shadow 0.3s;
  font-size: 16px;
}

.staff-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Slightly more pronounced shadow */
}

.staff-card h3 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #333; /* Dark grey text */
}

.staff-card p {
  margin-bottom: 10px;
  color: #666; /* Medium grey text */
}

.staff-card a {
  color: #007bff; /* Blue color for links */
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
  border: 2px solid #ccc; /* Silver border */
  border-radius: 4px;
  font-size: 16px;
  background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
}

.form-group button {
  padding: 10px 15px;
  background-color: rgba(192, 192, 192, 0.7); /* Slightly less transparent silver */
  color: #333; /* Dark grey text */
  border: 2px solid #ccc; /* Silver border */
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

.form-group button:hover {
  background-color: rgba(192, 192, 192, 0.9); /* Slightly less transparent silver */
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
  display: none; /* Hide all by default */
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
  position: relative; /* Added to ensure buttons inside are positioned relative to this */
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
  background-color: rgba(0, 0, 0, 0.7); /* Darker background for better contrast */
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000; /* Ensure it appears above all other content */
  animation: fadeIn 0.3s ease; /* Animation for popup appearance */
}

.popup-content {
  background-color: #fff;
  padding: 30px; /* Increased padding for better spacing */
  border-radius: 12px; /* Rounded corners */
  text-align: center;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Deeper shadow for a 3D effect */
  max-width: 400px; /* Limiting max width for better design */
  width: 90%; /* Responsive width */
  animation: popup-appear 0.3s ease; /* Animation for popup content appearance */
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
  gap: 15px; /* Space between buttons */
}

.popup-buttons button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.2s;
}

.popup-buttons button:first-child {
  background-color: #28a745; /* Green for confirm */
  color: white;
}

.popup-buttons button:first-child:hover {
  background-color: #218838;
}

.popup-buttons button:last-child {
  background-color: #dc3545; /* Red for cancel */
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
</head>

<body class="g-sidenav-show bg-gray-100">
  <?php include("./resources/sidebar.php") ?>
  <main class="main-content position-relative border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
  
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
       
          <ul class="navbar-nav  justify-content-end">
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center" >
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav" >
                <div class="sidenav-toggler-inner" style="background-colour:white;" >
                  <i class="sidenav-toggler-line bg-black"></i>
                  <i class="sidenav-toggler-line bg-black"></i>
                  <i class="sidenav-toggler-line bg-black"></i>
                </div>
              </a>
            </li>
            
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            
              
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                    
                    </div>  
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="dashboard">
    <div class="col-md-12 text-center mb-4">
            <h2 class="heading-spacing  psl" style="margin:0px">
                 <i>S</i>elect  a  <i>M</i>entor
            </h2>
        </div>
      <div class="button-container">
      <div class="button-container">
  <button class="department-btn cse active" onclick="selectButton(this)">CSE</button>
  <button class="department-btn it" onclick="selectButton(this)">IT</button>
  <button class="department-btn aids" onczlick="selectButton(this)">AI&DS</button>
  <button class="department-btn eee" onclick="selectButton(this)">EEE</button>
  <button class="department-btn ece" onclick="selectButton(this)">ECE</button>
  <button class="department-btn mech" onclick="selectButton(this)">MECH</button>
  <button class="department-btn civil" onclick="selectButton(this)">CIVIL</button>
  <button class="department-btn sh" onclick="selectButton(this)">S&H</button>
  <button class="department-btn others" onclick="selectButton(this)">OTHERS</button>
</div>

    


<section class="content">
  <div class="ag-format-container">
    <ul class="staff-list">
    


    <!-- Others Staffs -->
    <li class="staff-item others" data-department="others">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">N.Nagarathinam</span>
            <button class="select-btn" onclick="showConfirmation(event, 'N.Nagarathinam')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> OTHERS</p>
            <p><strong>Designation:</strong> Head of Department</p>
            <p><strong>Area of Interest:</strong> Structural design, Quantity Surveying, Surveying and Measurements, CAD Drafting</p>
          </div>
        </div>
      </li>



  <!-- CSE Staffs -->
  <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">J.Mathalai Raj</span>
            <button class="select-btn" onclick="showConfirmation(event, 'J.Mathalai Raj')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Head of Department</p>
            <p><strong>Area of Interest:</strong> Software Engineering, Data Structures, Algorithms, Machine Learning</p>
          </div>
        </div>
      </li>



      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">K.Deepiga</span>
            <button class="select-btn" onclick="showConfirmation(event, 'K.Deepiga')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Artificial Intelligence, Computer Networks, Cybersecurity</p>
          </div>
        </div>
      </li>

      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">Dr.A.Solairaj</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.A.Solairaj')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Professor</p>
            <p><strong>Area of Interest:</strong> Computer Vision, Pattern Recognition, Data Mining</p>
          </div>
        </div>
      </li>

      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">J.Ayyanaprabu</span>
            <button class="select-btn" onclick="showConfirmation(event, 'J.Ayyanaprabu')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Embedded Systems, Internet of Things (IoT), Software Development</p>
          </div>
        </div>
      </li>

      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">N.Kesavamoorthy</span>
            <button class="select-btn" onclick="showConfirmation(event, 'N.Kesavamoorthy')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Theoretical Computer Science, Compiler Design, Operating Systems</p>
          </div>
        </div>
      </li>

      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">R.KEERTHANA</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.KEERTHANA')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Human-Computer Interaction, Mobile Computing, Augmented Reality</p>
          </div>
        </div>
      </li>

      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">R.Udhaya Kumar</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Udhaya Kumar')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Software Project Management, Agile Methodologies, System Design</p>
          </div>
        </div>
      </li>

      <li class="staff-item cse" data-department="cse">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">K.Arunjunai Karthick</span>
            <button class="select-btn" onclick="showConfirmation(event, 'K.Arunjunai Karthick')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> CSE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Computer Architecture, Networking, Quantum Computing</p>
          </div>
        </div>
      </li>


      <!-- IT-staffs -->

      <li class="staff-item it" data-department="it">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">Dr.M.Sathya</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.M.Sathya')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> IT</p>
            <p><strong>Designation:</strong> Head of the Department</p>
            <p><strong>Area of Interest:</strong> Networking, Internet of Things, Artificial Intelligence, OOPS</p>
          </div>
        </div>
      </li>
      <li class="staff-item it" data-department="it">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">A.Sangeetha</span>
            <button class="select-btn" onclick="showConfirmation(event, 'A.Sangeetha')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> IT</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Computer Network, Data Science, Artificial Intelligence</p>
          </div>
        </div>
      </li>

      <li class="staff-item it" data-department="it">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">G.Keerthana</span>
            <button class="select-btn" onclick="showConfirmation(event, 'G.Keerthana')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> IT</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> DBMS, OOPs, HTML</p>
          </div>
        </div>
      </li>

      <li class="staff-item it" data-department="it">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">J. Kanimoli</span>
            <button class="select-btn" onclick="showConfirmation(event, 'J. Kanimoli')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> IT</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Artificial Intelligence, Computer Networks, IoT</p>
          </div>
        </div>
      </li>

 

<!-- AI&DS Staffs -->
<li class="staff-item aids" data-department="aids">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">L.S.Vignesh</span>
            <button class="select-btn" onclick="showConfirmation(event, 'L.S.Vignesh')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> AI&DS</p>
            <p><strong>Designation:</strong> Head of the Department</p>
            <p><strong>Area of Interest:</strong> Artificial Intelligence and Machine Learning, Data Science and Big Data Analytics</p>
          </div>
        </div>
      </li>

      <li class="staff-item aids" data-department="aids">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">R.Archana</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Archana')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> AI&DS</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Data Science, Artificial Intelligence</p>
          </div>
        </div>
      </li>

      <li class="staff-item aids" data-department="aids">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">J.Vinoth Kumar</span>
            <button class="select-btn" onclick="showConfirmation(event, 'J.Vinoth Kumar')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> AI&DS</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Artificial Intelligence, Deep Learning, Intelligent Systems, Internet of Things</p>
          </div>
        </div>
      </li>

      <li class="staff-item aids" data-department="aids">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">Abirami Gayathri</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Abirami Gayathri')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> AI&DS</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Artificial Intelligence, Deep Learning, Intelligent Systems, Internet of Things</p>
          </div>
        </div>
      </li>

<!-- EEE Staffs -->
<li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">Dr.R.Athilingam</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.R.Athilingam')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Head of Department</p>
            <p><strong>Area of Interest:</strong> IOT, Image Processing, Embedded System</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">Nishetha Jeflin Nixon</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Nishetha Jeflin Nixon')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Power Electronics, Renewable Energy System, Inverter and Converters, Power and Energy Systems</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">C.Shiva</span>
            <button class="select-btn" onclick="showConfirmation(event, 'C.Shiva')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Power Electronics, Renewable Energy Resources, Power Quality, Smart Automation</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">R.Chitra</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Chitra')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Smart Grid, Wireless Communication, Power System Management, Renewable Energy</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">N.Abirami</span>
            <button class="select-btn" onclick="showConfirmation(event, 'N.Abirami')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Digital Electronics, VLSI Design, Machine Learning</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">K.Ganesh</span>
            <button class="select-btn" onclick="showConfirmation(event, 'K.Ganesh')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Power Systems, Renewable Energy, Energy Management</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">M.Vijayalakshmi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'M.Vijayalakshmi')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Power Factor Improvement through Capacitor Placement, Smart Grid, Restructuring of Power System, Robotics</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">R.Raja Karthick</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Raja Karthick')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Distributed Control System, Renewable Energy, Electronic Devices and Circuits, PLC and SCADA</p>
          </div>
        </div>
      </li>

      <li class="staff-item eee" data-department="eee">
        <div class="staff-box" onclick="toggleDetails(this)">
          <div class="staff-info">
            <span class="staff-name">R.Pandi Prabakaran</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Pandi Prabakaran')">Select</button>
          </div>
          <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> EEE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> IOT, Arduino - Node Mcu, ESP32, Smart Grid, Embedded System</p>
          </div>
        </div>
      </li>


<<!-- ECE Staffs -->

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">Dr.T.Venish Kumar</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.T.Venish Kumar')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Head of the Department</p>
            <p><strong>Area of Interest:</strong> VLSI Design, Embedded Systems (Both Hardware and Software), Image Processing</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">S.Prathap</span>
            <button class="select-btn" onclick="showConfirmation(event, 'S.Prathap')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Network, Communication, Embedded</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">N.Mathavan</span>
            <button class="select-btn" onclick="showConfirmation(event, 'N.Mathavan')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Vice Principal</p>
            <p><strong>Area of Interest:</strong> Internet of Things, RFID, Sensor</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">M.Idhayachandran</span>
            <button class="select-btn" onclick="showConfirmation(event, 'M.Idhayachandran')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> VLSI Design, Electronic Circuit Analysis, Digital Electronics, Digital Signal Processing</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">R.Pradeep Kumar</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Pradeep Kumar')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Nanoparticles, Digital Systems Design, Digital Image Processing, Internet of Things</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">T.TAMILSELVI</span>
            <button class="select-btn" onclick="showConfirmation(event, 'T.TAMILSELVI')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> VLSI Design, Wireless Communication, Signal Processing, Internet of Things</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">S.Kalaivani</span>
            <button class="select-btn" onclick="showConfirmation(event, 'S.Kalaivani')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Signal Processing, Communication</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">P.Shantha Devi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'P.Shantha Devi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> VLSI Design, Image Processing, IoT</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">P.Gowthami</span>
            <button class="select-btn" onclick="showConfirmation(event, 'P.Gowthami')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Image Processing, Communication Systems, Digital Electronics, Nanotechnology</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">M.Monica Dhana Ranjini</span>
            <button class="select-btn" onclick="showConfirmation(event, 'M.Monica Dhana Ranjini')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Image Processing, Embedded Systems, Wearable Device</p>
        </div>
    </div>
</li>

<li class="staff-item ece" data-department="ece">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">K.Bharathi Kannan</span>
            <button class="select-btn" onclick="showConfirmation(event, 'K.Bharathi Kannan')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> ECE</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> VLSI Design, Signal Processing, Embedded Systems, Communication System</p>
        </div>
    </div>
</li>


<!-- MECH Staffs -->

<ul class="staff-list">
  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">Dr.C.Mathalai Sundaram</span>
        <button class="select-btn" onclick="showConfirmation(event, 'Dr.C.Mathalai Sundaram')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Professor & Principal</p>
        <p><strong>Area of Interest:</strong> Composite Tool Material, Optimization, Internet of Things, Reverse Engineering</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">Dr B.Radha Krishnan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'Dr B.Radha Krishnan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Associate Professor</p>
        <p><strong>Area of Interest:</strong> Materials Science, Manufacturing Process, Waste Management, E-Car Technology</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">A. Vembathurajesh</span>
        <button class="select-btn" onclick="showConfirmation(event, 'A. Vembathurajesh')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Materials, Thermal Engineering, Composites, High Temperature Application Materials</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">P.Surulimani</span>
        <button class="select-btn" onclick="showConfirmation(event, 'P.Surulimani')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Manufacturing, Welding</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">S.Harikishore</span>
        <button class="select-btn" onclick="showConfirmation(event, 'S.Harikishore')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Automated Manufacturing, Development of Tools, Optimization Process, Quality Control</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">V.Sivaganesan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'V.Sivaganesan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Engineering Design, Manufacturing Technology, Design Softwares</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">G.Arun Kumar</span>
        <button class="select-btn" onclick="showConfirmation(event, 'G.Arun Kumar')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Manufacturing Engineering</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">R.Santhaseelan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'R.Santhaseelan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Manufacturing, Safety, Design</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">R.Nagaraja</span>
        <button class="select-btn" onclick="showConfirmation(event, 'R.Nagaraja')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Engineering Design, Composite Material, Machine Vision, Optimization</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">B.Nagarajan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'B.Nagarajan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Coating, Composites, Manufacturing, Material Testing</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">V.Thirumalairaj</span>
        <button class="select-btn" onclick="showConfirmation(event, 'V.Thirumalairaj')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Engineering Design, Manufacturing, Analysis</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">Mr.J.Chakravarthy Samy Durai</span>
        <button class="select-btn" onclick="showConfirmation(event, 'Mr.J.Chakravarthy Samy Durai')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Automobile Engineering, Manufacturing Engineering, Production Engineering, Thermal Engineering</p>
      </div>
    </div>
  </li>

  <li class="staff-item mech" data-department="mech">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">A.Vennimalai Rajan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'A.Vennimalai Rajan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> MECH</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Composite Materials, Production Engineering</p>
      </div>
    </div>
  </li>

<!-- CIVIL Staffs -->

<ul class="staff-list">
  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">Dr.E.Ananthakrishnan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'Dr.E.Ananthakrishnan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> HOD</p>
        <p><strong>Area of Interest:</strong> Water analysis/structural engineer mni, Municipal solid waste</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">M.Kanimozhi</span>
        <button class="select-btn" onclick="showConfirmation(event, 'M.Kanimozhi')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Reinforced concrete structures, Waste Management</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">R.Nathirun Sabinash</span>
        <button class="select-btn" onclick="showConfirmation(event, 'R.Nathirun Sabinash')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Waste Management, Water analysis</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">R.Shanmugapriyan</span>
        <button class="select-btn" onclick="showConfirmation(event, 'R.Shanmugapriyan')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Structural analysis, Water treatment, Prototype creation</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">P. Arul Jebaraj</span>
        <button class="select-btn" onclick="showConfirmation(event, 'P. Arul Jebaraj')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Structural engineering, Disaster management, Construction waste management</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">M.Sindhu</span>
        <button class="select-btn" onclick="showConfirmation(event, 'M.Sindhu')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Construction Materials, Smart Irrigation, Concrete Technology</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">S.Manimaran</span>
        <button class="select-btn" onclick="showConfirmation(event, 'S.Manimaran')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Concrete / hardware, Concrete / software</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">B.Sowmiya</span>
        <button class="select-btn" onclick="showConfirmation(event, 'B.Sowmiya')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Environmental Engineering</p>
      </div>
    </div>
  </li>

  <li class="staff-item civil" data-department="civil">
    <div class="staff-box" onclick="toggleDetails(this)">
      <div class="staff-info">
        <span class="staff-name">S.Gayathri</span>
        <button class="select-btn" onclick="showConfirmation(event, 'S.Gayathri')">Select</button>
      </div>
      <div class="staff-details" style="display: none;">
        <p><strong>Department:</strong> CIVIL</p>
        <p><strong>Designation:</strong> Assistant Professor</p>
        <p><strong>Area of Interest:</strong> Hydraulic engineering, Structural engineering</p>
      </div>
    </div>
  </li>


<!-- S&H Staffs -->

<!-- SH Staffs -->

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">C.Prathap</span>
            <button class="select-btn" onclick="showConfirmation(event, 'C.Prathap')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Head of the Department</p>
            <p><strong>Area of Interest:</strong> Image Processing, Artificial Intelligence & Machine Learning</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">Dr.C.Chithra</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.C.Chithra')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Professor</p>
            <p><strong>Area of Interest:</strong> Statistics and Numerical Methods, Graph Theory, Applications of Differential Equations, Linear Algebra</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">M.Arulvizhi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'M.Arulvizhi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Graph Theory, Stochastic Processes, Statistics, Real Analysis</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">R.C.Richard Britto</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.C.Richard Britto')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> English Language Teaching</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">S.Jothi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'S.Jothi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Indian Writing in English, Language and Linguistics, Feminism, Children's Literature</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">R.Dhandayuthapani</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Dhandayuthapani')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Electronics, Semiconductor Physics, Atomic Physics, Crystal Physics</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">Dr.S.R.Krishnamoorthi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.S.R.Krishnamoorthi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Physics Models, Electronics, MFIS / MOS Device Fabrications</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">M.Mahalakshmi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'M.Mahalakshmi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Operations Research, Differential Calculus, Complex Analysis, Linear Algebra</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">M.Fathima Beevi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'M.Fathima Beevi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> English Language Teaching, Technical English, English Literature, Linguistics</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">R.Karunyah</span>
            <button class="select-btn" onclick="showConfirmation(event, 'R.Karunyah')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Mathematics</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">Dr.V.Ananthi</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.V.Ananthi')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Operations Research, Topology, Discrete Mathematics, Statistics and Numerical Methods</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">K.Rajaguru</span>
            <button class="select-btn" onclick="showConfirmation(event, 'K.Rajaguru')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Assistant Professor</p>
            <p><strong>Area of Interest:</strong> Thin Film, Electronics</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">Dr.N.David Mathan</span>
            <button class="select-btn" onclick="showConfirmation(event, 'Dr.N.David Mathan')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Professor</p>
            <p><strong>Area of Interest:</strong> Composites, Water Treatment, Polymers for Medicines, Municipal Solid Waste Management</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">B.Mallayasamy</span>
            <button class="select-btn" onclick="showConfirmation(event, 'B.Mallayasamy')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Professor</p>
            <p><strong>Area of Interest:</strong> Topology, Graph Theory, Statistics, Operation Research</p>
        </div>
    </div>
</li>

<li class="staff-item sh" data-department="sh">
    <div class="staff-box" onclick="toggleDetails(this)">
        <div class="staff-info">
            <span class="staff-name">B.Abinaya</span>
            <button class="select-btn" onclick="showConfirmation(event, 'B.Abinaya')">Select</button>
        </div>
        <div class="staff-details" style="display: none;">
            <p><strong>Department:</strong> SH</p>
            <p><strong>Designation:</strong> Teaching Fellow</p>
            <p><strong>Area of Interest:</strong> Water Treatment, Synthesis of Nanoparticles Based on Green Engineering</p>
        </div>
    </div>
</li>


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

// Function to show confirmation when a staff member is selected
function showConfirmation(event, staffName) {
  event.stopPropagation(); // Prevent click event from bubbling up
  document.getElementById('confirmationMessage').textContent = `Are you sure you want to select ${staffName}?`;
  document.getElementById('confirmationPopup').style.display = 'flex';

  // Set up event listeners for the buttons
  document.getElementById('confirmBtn').onclick = function() {
    alert(`${staffName} has been selected.`);
    closePopup();
  };

  document.getElementById('cancelBtn').onclick = function() {
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
  button.addEventListener('click', function() {
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
