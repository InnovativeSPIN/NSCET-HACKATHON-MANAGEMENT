<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
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



body {
  font-family: 'source-code-pro', monospace !important;
  overflow-x: hidden !important;
}

.ag-courses_item,
.ag-courses_item * {
  font-family: 'source-code-pro', monospace !important;
}

/* Container styling */
.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}

/* Box styling */
.ag-courses_box {
  display: flex;
  align-items: flex-start;
  flex-wrap: wrap;
  padding: 50px 0;
  margin-top: 80px; /* Add margin-top to push content down */
}

/* Individual card styling */
.ag-courses_item {
  flex-basis: calc(33.33333% - 30px);
  margin: 0 15px 30px;
  overflow: hidden;
  border-radius: 28px;
  position: relative; /* Required for background positioning */
}

/* Link styling inside cards */
.ag-courses-item_link {
  display: block;
  padding: 10px 10px;
  background-color: rgba(255, 255, 255, 0.7); /* Transparent white background */
  border: 2px solid #ccc; /* Silver border */
  overflow: hidden;
  position: relative;
  text-decoration: none;
  color: #333; /* Dark grey text */
  height: 300px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow */
}

/* Hover effects */
.ag-courses-item_link:hover {
  color: #000;
  background-color: rgba(255, 255, 255, 1); /* Solid white background on hover */
}

.ag-courses-item_link:hover .ag-courses-item_date {
  color: #333; /* Darker text color on hover */
}

.ag-courses-item_link:hover .ag-courses-item_bg {
  transform: scale(10);
}

/* Title styling */
.ag-courses-item_title {
  min-height: 87px;
  margin-bottom: -30px;
  overflow: hidden;
  font-weight: bold;
  font-size: 30px;
  color: #333; /* Dark grey text */
  z-index: 2;
  position: relative;
}

/* Designation styling */
.ag-courses-item_designation {
  min-height: 80px;
  margin-top: -5px;
  overflow: hidden;
  font-weight: bold;
  font-size: 20px;
  color: #333; /* Dark grey text */
  z-index: 2;
  position: relative;
}

/* Date box styling */
.ag-courses-item_date-box {
  margin: -10px 0 20px;
  font-size: 18px;
  color: #333; /* Dark grey text */
  z-index: 2;
  position: relative;
}

/* Background styling */
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: rgba(192, 192, 192, 0.5); /* Semi-transparent silver */
  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;
  border-radius: 50%;
  transition: all .5s ease;
}

/* Optional color variations for different course items */
.ag-courses_item:nth-child(1n) .ag-courses-item_bg {
  background-color: #ffb380; /* Light orange */
}

.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #c861ff; /* Purple */
}

.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #3dff98; /* Light green */
}

.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #828282; /* Gray */
}

.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #ff54f6; /* Pink */
}

.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #057eff; /* Blue */
}

.ag-courses_item:nth-child(7n) .ag-courses-item_bg {
  background-color: #d1ff3b; /* Light yellow-green */
}


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
.button-container {
  display: flex;
  justify-content: center;
  margin-top: 40px; /* Adjusted to ensure buttons are visible */
  padding-top: 0px;
  flex-wrap: wrap;
}

.department-btn {
  background-color: rgba(192, 192, 192, 0.5); /* Semi-transparent silver */
  color: #333; /* Dark grey text */
  border: 2px solid #ccc; /* Silver border */
  border-radius: 8px;
  padding: 10px 20px;
  margin: 10px 10px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
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
  max-width: 2000px;
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

  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <?php include("./resources/sidebar.php") ?>
  <main class="main-content position-relative border-radius-lg">
    <div class="dashboard">
      <div class="header">
        <h1>Select a Mentor</h1>
      </div>
      <div class="button-container">
      <div class="button-container">
  <button class="department-btn cse active" onclick="selectButton(this)">CSE</button>
  <button class="department-btn it" onclick="selectButton(this)">IT</button>
  <button class="department-btn aids" onclick="selectButton(this)">AI&DS</button>
  <button class="department-btn eee" onclick="selectButton(this)">EEE</button>
  <button class="department-btn ece" onclick="selectButton(this)">ECE</button>
  <button class="department-btn mech" onclick="selectButton(this)">MECH</button>
  <button class="department-btn civil" onclick="selectButton(this)">CIVIL</button>
  <button class="department-btn sh" onclick="selectButton(this)">S&H</button>
  <button class="department-btn others" onclick="selectButton(this)">OTHERS</button>
</div>

    


<section class="content">
    <div class="ag-format-container">
    <div class="ag-courses_box">
    


    <!-- others Staffs -->
  <div class="ag-courses_item others" data-department="others">
    <a href="#" class="ag-courses-item_link bl ">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">N.Nagarathinam</div>
        <div class="ag-courses-item_designation">Head of Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Structural design ,Quantity Surveying,Surveying and Measurements,CAD Drafting </div>
    </a>
</div>



  <!-- CSE Staffs -->
  <div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link bl ">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">J.Mathalai Raj</div>
        <div class="ag-courses-item_designation">Head of Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Software Engineering, Data Structures, Algorithms, Machine Learning</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link bl ">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Arul Jothi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Database Management Systems, Cloud Computing, Web Technologies</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Deepiga  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Computer Networks, Cybersecurity</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.A.Solairaj</div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Computer Vision, Pattern Recognition, Data Mining</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">J.Ayyanaprabu</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Embedded Systems, Internet of Things (IoT), Software Development</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">N.Kesavamoorthy</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Theoretical Computer Science, Compiler Design, Operating Systems</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.KEERTHANA</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Human-Computer Interaction, Mobile Computing, Augmented Reality</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Udhaya Kumar</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Software Project Management, Agile Methodologies, System Design</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Arunjunai Karthick</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Computer Architecture, Networking, Quantum Computing</div>
    </a>
</div>


<!-- IT Staffs -->


<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link bl ">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.M.Sathya</div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Networking ,Internet of Things ,Artificial Inteligence , OOPS </div>
    </a>
</div>

<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">G.Keerthana</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">DBMS, OOPs, HTML</div>
    </a>
</div>

<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">J. Kanimoli</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Computer Networks, IoT</div>
    </a>
</div>

<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">A.Sangeetha</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Computer Network, Data Science, Artificial Intelligence</div>
    </a>
</div>

<!-- AI&DS Staffs -->

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">L.S.Vignesh</div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence and Machine Learning, Data Science and Big Data Analytics</div>
    </a>
</div>

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Archana</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Data Science, Artificial Intelligence</div>
    </a>
</div>

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">J.Vinoth Kumar</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Deep Learning, Intelligent Systems, Internet of Things</div>
    </a>
</div>

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Abirami Gayathri</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Deep Learning, Intelligent Systems, Internet of Things</div>
    </a>
</div>

<!-- EEE Staffs -->

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.R.Athilingam</div>
        <div class="ag-courses-item_designation">Head of Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">IOT, Image Processing, Embedded System</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Nishetha Jeflin Nixon</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Power Electronics, Renewable Energy System, Inverter and Converters, Power and Energy Systems</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">C.Shiva</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Power Electronics, Renewable Energy Resources, Power Quality, Smart Automation</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Chitra</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Smart Grid, Wireless Communication, Power System Management, Renewable Energy</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">N.Abirami</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Digital Electronics, VLSI Design, Machine Learning</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Ganesh</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Power Systems, Renewable Energy, Energy Management</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Vijayalakshmi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Power Factor Improvement through Capacitor Placement, Smart Grid, Restructuring of Power System, Robotics</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Raja Karthick</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Distributed Control System, Renewable Energy, Electronic Devices and Circuits, PLC and SCADA</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Pandi Prabakaran</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">IOT, Arduino - Node Mcu, ESP32, Smart Grid, Embedded System</div>
    </a>
</div>


<!-- ECE Staffs -->

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.T.Venish Kumar</div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">VLSI Design, Embedded Systems (Both Hardware and Software), Image Processing</div>
    </a>
</div>
<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Prathap</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Network, Communication, Embedded</div>
    </a>
</div>



<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">N.Mathavan</div>
        <div class="ag-courses-item_designation">Vice Principal</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Internet of Things, RFID, Sensor</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Idhayachandran</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">VLSI Design, Electronic Circuit Analysis, Digital Electronics, Digital Signal Processing</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Pradeep Kumar</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Nanoparticles, Digital Systems Design, Digital Image Processing, Internet of Things</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">T.TAMILSELVI</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">VLSI Design, Wireless Communication, Signal Processing, Internet of Things</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Kalaivani</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Signal Processing, Communication</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">P.Shantha Devi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">VLSI Design, Image Processing, IoT</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">P.Gowthami</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Image Processing, Communication Systems, Digital Electronics, Nanotechnology</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Monica Dhana Ranjini</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Image Processing, Embedded Systems, Wearable Device</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Bharathi Kannan</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">VLSI Design, Signal Processing, Embedded Systems, Communication System</div>
    </a>
</div>

 

<!-- MECH Staffs -->

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.C.Mathalai Sundaram</div>
        <div class="ag-courses-item_designation">Professor & Principal</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Composite Tool Material, Optimization, Internet of Things, Reverse Engineering</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr B.Radha Krishnan</div>
        <div class="ag-courses-item_designation">Associate Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Materials Science, Manufacturing Process, Waste Management, E-Car Technology</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">A. Vembathurajesh</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Materials, Thermal Engineering, Composites, High Temperature Application Materials</div>
    </a>
</div>



<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">P.Surulimani</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Manufacturing, Welding</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Harikishore</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Automated Manufacturing, Development of Tools, Optimization Process, Quality Control</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">V.Sivaganesan</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Engineering Design, Manufacturing Technology, Design Softwares</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">G.Arun Kumar</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Manufacturing Engineering</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Santhaseelan</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Manufacturing, Safety, Design</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Nagaraja</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Engineering Design, Composite Material, Machine Vision, Optimization</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">B.Nagarajan</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Coating, Composites, Manufacturing, Material Testing</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">V.Thirumalairaj</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Engineering Design, Manufacturing, Analysis</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Mr.J.Chakravarthy Samy Durai</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Automobile Engineering, Manufacturing Engineering, Production Engineering, Thermal Engineering</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">A.Vennimalai Rajan</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Composite Materials, Production Engineering</div>
    </a>
</div>

<!-- CIVIL Staffs -->


<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.E.Ananthakrishnan </div>
        <div class="ag-courses-item_designation">HOD</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Water analysis/structural engineer mni, Municipal solid waste</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Kanimozhi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Reinforced concrete structures, Waste Management</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Nathirun Sabinash</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Waste Management, Water analysis</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Shanmugapriyan</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Structural analysis, Water treatment, Prototype creation</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">P. Arul Jebaraj</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Structural engineering, Disaster management, Construction waste management</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Sindhu</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Construction Materials, Smart Irrigation, Concrete Technology</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Manimaran</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Concrete / hardware, Concrete / software</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">B.Sowmiya</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Environmental Engineering</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Gayathri</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Hydraulic engineering, Structural engineering</div>
    </a>
</div>


<!-- S&H Staffs -->

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">C.Prathap</div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Image Processing, Artificial Intelligence & Machine Learning</div>
    </a>
</div>
<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.C.Chithra</div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Statistics and Numerical Methods, Graph Theory, Applications of Differential Equations, Linear Algebra</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Arulvizhi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Graph Theory, Stochastic Processes, Statistics, Real Analysis</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.C.Richard Britto</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">English Language Teaching</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Jothi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Indian Writing in English, Language and Linguistics, Feminism, Children's Literature</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Dhandayuthapani</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Electronics, Semiconductor Physics, Atomic Physics, Crystal Physics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.S.R.Krishnamoorthi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Physics Models, Electronics, MFIS / MOS Device Fabrications</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Mahalakshmi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Operations Research, Differential Calculus, Complex Analysis, Linear Algebra</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Fathima Beevi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">English Language Teaching, Technical English, English Literature, Linguistics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R.Karunyah</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Mathematics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.V.Ananthi</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Operations Research, Topology, Discrete Mathematics, Statistics and Numerical Methods</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Rajaguru</div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Thin Film, Electronics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.N.David Mathan</div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Composites, Water Treatment, Polymers for Medicines, Municipal Solid Waste Management</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">B.Mallayasamy</div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Topology, Graph Theory, Statistics, Operation Research</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">B.Abinaya </div>
        <div class="ag-courses-item_designation">Teaching Fellow</div>
        <div class="ag-courses-item_interest-heading">Area of Interest:</div>
        <div class="ag-courses-item_date-box">Water Treatment, Synthesis of Nanoparticles Based on Green Engineering</div>
    </a>
</div>
    </div>
  </div>
</section>

       

        
      </div>
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
<script>
  // JavaScript for department buttons
document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".department-btn");
  const cards = document.querySelectorAll(".ag-courses_item");

  function selectButton(button) {
    buttons.forEach(btn => btn.classList.remove("active"));
    button.classList.add("active");

    const department = button.classList[1];

    cards.forEach(card => {
      if (card.dataset.department === department) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  }

  // Attach event listeners to buttons
  buttons.forEach(button => {
    button.addEventListener("click", function() {
      selectButton(button);
    });
  });

  // Initially display CSE department cards
  selectButton(document.querySelector(".department-btn.cse"));
});

</script>


</body>

</html>
