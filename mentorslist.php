
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor Lists</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">
    <link rel="stylesheet" type="text/css" href="css/mentor.css" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
    <script>
        document.documentElement.className="js";
        var supportsCssVars=function(){
            var e,t=document.createElement("style");
            t.innerHTML="root: { --tmp-var: bold; }";
            document.head.appendChild(t);
            e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)"));
            t.parentNode.removeChild(t);
            return e;
        };
        supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
      <script>
    window.addEventListener('load', function () {
      VANTA.WAVES({
        el: "#vanta-background",
        color: 0x111111,
        shininess: 50,
        waveHeight: 20,
        waveSpeed: 1.5,
        zoom: 1
      });
    });
  </script>
    <style>

    

    </style>
</head>
<body>
<div id="vanta-background"></div>
    <main>
        <div class="demo-1">
          <?php include("./resources/header.php") ?>
        </div>
    </main>


<div class="col-md-12 d-flex justify-content-center text-center mb-4 head-text">
        <h1 class="heading-spacing" >
        <i>H</i>ackathon <i>M</i>entors
        </h1>
    </div>

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
        <div class="ag-courses-item_date-box">Cryptography, Internet of Things</div>
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

    </section>
    
    <!-- footer -->

    <?php include("./resources/footersec.php") ?>
    <!-- End of PS Section -->
    <script src="js/gsap.min.js"></script>
    <!-- <script type="module" src="js/index.js"></script> -->

    
<script>
//     document.addEventListener("DOMContentLoaded", function() {
//         VANTA.NET({
//       el: "#vanta-background",
//       mouseControls: true,
//   touchControls: true,
//   gyroControls: false,
//   minHeight: 200.00,
//   minWidth: 200.00,
//   scale: 1.00,
//   scaleMobile: 1.00,
//   color: 0xfffe3f,
//   backgroundColor: 0x0
//     })
// });

// _strk.push(function() {
//   setVanta()
//   window.edit_page.Event.subscribe( "Page.beforeNewOneFadeIn", setVanta )
// })
</script>


<!-- <script>
        //  const tableData = Array.from({ length: 50 }, (_, i) => ({
        //     sno: i + 1,
        //     id: `PS${100 + i}`,
        //     title: `Problem Statement ${i + 1}`,
        //     category: `Category ${i % 5 + 1}`,
        //     count: Math.floor(Math.random() * 10) + 1,
        //     theme: `Theme ${i % 5 + 1}`
        // }));

        let tableData = [];
    let currentPage = 1;
    const rowsPerPage = 10;

    async function fetchData() {
        try {
            const response = await fetch('./resources/ps_fetch.php');
            tableData = await response.json();
            console.log(tableData)
            displayTable(currentPage); // Display data after fetching
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

        const totalPages = Math.ceil(tableData.length / rowsPerPage);

        console.log(tableData)

        async function displayTable(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';

            const paginatedData = tableData.slice(start, end);

            paginatedData.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${row.id}</td>
                    <td>${row.ps_id}</td>
                    <td>${row.ps}</td>
                    <td>${row.ps_type}</td>
                    <td>${row.count}</td>
                    <td>${row.ps_domain}</td>
                `;
                tableBody.appendChild(tr);
            });

            updatePagination();
        }

        function updatePagination() {
            const paginationDiv = document.getElementById('pagination');
            paginationDiv.innerHTML = '';

            // Previous button
            const prevBtn = document.createElement('button');
            prevBtn.id = 'prev-btn';
            prevBtn.innerText = 'Previous';
            prevBtn.onclick = prevPage;
            prevBtn.disabled = currentPage === 1;
            paginationDiv.appendChild(prevBtn);

            // Page number links
            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement('span');
                pageLink.innerText = i;
                pageLink.className = 'page-link';
                if (i === currentPage) {
                    pageLink.classList.add('active');
                }
                pageLink.onclick = () => goToPage(i);
                paginationDiv.appendChild(pageLink);
            }

            // Next button
            const nextBtn = document.createElement('button');
            nextBtn.id = 'next-btn';
            nextBtn.innerText = 'Next';
            nextBtn.onclick = nextPage;
            nextBtn.disabled = currentPage === totalPages;
            paginationDiv.appendChild(nextBtn);
        }

        function goToPage(page) {
            currentPage = page;
            displayTable(currentPage);
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                displayTable(currentPage);
            }
        }

        function nextPage() {
            if (currentPage < totalPages) {
                currentPage++;
                displayTable(currentPage);
            }
        }

        // Initial display
        // displayTable(currentPage);
        fetchData();
</script> -->

<script>
    let tableData = [];
    let currentPage = 1;
    const rowsPerPage = 10;

    async function fetchData() {
        try {
            const response = await fetch('./resources/ps_fetch.php');
            tableData = await response.json();
            displayTable(currentPage); // Display data after fetching
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    function displayTable(page) {
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const tableBody = document.getElementById('table-body');
        tableBody.innerHTML = '';

        const paginatedData = tableData.slice(start, end);

        paginatedData.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${row.id}</td>
                <td>${row.ps_id}</td>
                <td>${row.ps}</td>
                <td>${row.ps_type}</td>
                <td>${0}</td>
                <td>${row.ps_domain}</td>
            `;
            tableBody.appendChild(tr);
        });

        updatePagination();
    }

    function updatePagination() {
        const totalPages = Math.ceil(tableData.length / rowsPerPage);
        const paginationDiv = document.getElementById('pagination');
        paginationDiv.innerHTML = '';

        // Previous button
        const prevBtn = document.createElement('button');
        prevBtn.id = 'prev-btn';
        prevBtn.innerText = 'Previous';
        prevBtn.onclick = prevPage;
        prevBtn.disabled = currentPage === 1;
        paginationDiv.appendChild(prevBtn);

        // Page number links
        for (let i = 1; i <= totalPages; i++) {
            const pageLink = document.createElement('span');
            pageLink.innerText = i;
            pageLink.className = 'page-link';
            if (i === currentPage) {
                pageLink.classList.add('active');
            }
            pageLink.onclick = () => goToPage(i);
            paginationDiv.appendChild(pageLink);
        }

        // Next button
        const nextBtn = document.createElement('button');
        nextBtn.id = 'next-btn';
        nextBtn.innerText = 'Next';
        nextBtn.onclick = nextPage;
        nextBtn.disabled = currentPage === totalPages;
        paginationDiv.appendChild(nextBtn);
    }

    function goToPage(page) {
        currentPage = page;
        displayTable(currentPage);
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            displayTable(currentPage);
        }
    }

    function nextPage() {
        const totalPages = Math.ceil(tableData.length / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayTable(currentPage);
        }
    }

    // Initial fetch and display
    fetchData();

//department button

function selectButton(clickedButton, department) {
  // Remove the 'active' class from all buttons
  const buttons = document.querySelectorAll('.department-btn');
  buttons.forEach(button => {
    button.classList.remove('active');
  });

  // Add the 'active' class to the clicked button with its specific department color
  clickedButton.classList.add('active');
}


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
