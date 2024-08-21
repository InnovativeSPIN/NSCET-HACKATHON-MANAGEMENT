
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Problem Statements</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">
    <link rel="stylesheet" type="text/css" href="css/ps.css" />
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

      
.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}
/* Container styling */
.ag-format-container {
  
  width: 1142px;
  margin: 0 auto;
  padding-top: none;
}

/* Box styling */
.ag-courses_box {
  display: flex;
  align-items: flex-start;
  flex-wrap: wrap;
  padding: 50px 0;
}

/* Individual card styling */
.ag-courses_item {
  flex-basis: calc(33.33333% - 30px);
  margin: 0 15px 30px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important ;
  width: 50px;
  overflow: hidden;
  border-radius: 28px;
  position: relative; /* Required for background positioning */
}

/* Link styling inside cards */
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #121212;
  overflow: hidden;
  position: relative;
  text-decoration: none;
  color: #FFF;
}

/* Hover effects */
.ag-courses-item_link:hover {
  color: #FFF;
}

.ag-courses-item_link:hover .ag-courses-item_date {
  color: #f9b234;
}

.ag-courses-item_link:hover .ag-courses-item_bg {
  transform: scale(10);
}

/* Title styling */
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;
  overflow: hidden;
  font-weight: bold;
  font-size: 30px;
  color: #FFF;
  z-index: 2;
  position: relative;
}

/* Date box styling */
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;
  z-index: 2;
  position: relative;
}

/* Background styling */
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;
  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;
  border-radius: 50%;
  transition: all .5s ease;
}

.ag-courses-item_designation {

  min-height: 50px;
  margin: 0 0 0px;
  overflow: hidden;
  font-weight: bold;
  font-size: 20px;
  color: #FFF;
  z-index: 2;
  position: relative;

}

/* Optional color variations for different course items */
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}

.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}

.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}

.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}

.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
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


/*department button */

.button-container {
  display: flex;
  justify-content: center;
  margin-top: 0px;
  padding-top: 0px;
}

.department-btn {
  background-color: #121212;
  color: #FFF;
  border: 2px solid #f9b234;
  border-radius: 8px;
  padding: 10px 20px;
  margin: 0 10px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

.department-btn:hover {
  background-color: #f9b234;
  color: #000;
}

/* Specific color for active states */
.department-btn.cse.active,
.department-btn.cse.active:hover {
  background-color: #f4a460; /* Sandal */
}

.department-btn.it.active,
.department-btn.it.active:hover {
  background-color: #e6e6fa; /* Lavender */
}

.department-btn.aids.active,
.department-btn.aids.active:hover {
  background-color: #007ba7; /* Cerulean */
}

.department-btn.eee.active,
.department-btn.eee.active:hover {
  background-color: #c0c0c0; /* Silver */
}

.department-btn.ece.active,
.department-btn.ece.active:hover {
  background-color: #ffc0cb; /* Pink */
}

.department-btn.mech.active,
.department-btn.mech.active:hover {
  background-color: #add8e6; /* Light Blue */
}

.department-btn.civil.active,
.department-btn.civil.active:hover {
  background-color: #ffff00; /* Yellow */
}

.department-btn.sh.active,
.department-btn.sh.active:hover {
  background-color: #add8e6; /* Light Blue */
}


/* Title Container */
.title-container {
  text-align: center; /* Center align the title */
  margin: 0px 0; /* Add margin to separate from other content */
  padding: 150px ;
}

/* Title Styling */
.title {
  font-size: 100px; /* Adjust font size as needed */
  font-weight: bold;
  color: #f9b234; /* Match with your existing color scheme or adjust */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Optional: Add shadow for better readability */
  margin: 0;
}

/* vanta js animation */
#vanta-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 210%;
      z-index: -1;
      opacity: 0.8;
    }

    .ag-courses-item_link {
    position: relative;
    display: block;
    color: #fff; /* White text color for contrast */
    text-decoration: none;
    overflow: hidden; /* Prevents tint from spilling out */
    border-radius: 8px; /* Optional: Adds rounded corners */
    background-color: rgba(0, 0, 0, 0.3); /* Light black tint with 30% opacity */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

/* Ensure background color remains consistent on hover */
.ag-courses-item_link:hover {
    background-color: rgba(0, 0, 0, 0.5); /* Darker light black tint on hover with 50% opacity */
}

/* Optional: Remove or modify the :active styling if it affects the background */
.ag-courses-item_link:active {
    background-color: rgba(0, 0, 0, 0.3); /* Ensure background color is consistent on click */
}

/* Ensure text is not affected by click */
.ag-courses-item_title,
.ag-courses-item_designation,
.ag-courses-item_date-box {
    position: relative;
    z-index: 2; /* Ensure text is above the tint */
    padding: 10px;
}

.ag-courses-item_bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: transparent; /* Keep it transparent since the tint is on the link */
}



    </style>
</head>
<body>
<div id="vanta-background"></div>
    <main>
        <div class="demo-1">
            <div class="frame frameNEW">
                <div class="frame__title"> 
                    <img class="logonscet" src="img/nscetlogo.png" alt="NSCET Logo" width="130px">
                </div>
                <nav class="frame__demos">
                <!-- <span class="frame__demos-item">Variations: </span>	 -->
                <span class="frame__demos-item">Home</span>
                <!-- <a class="frame__demos-item" href="">About</a> -->
                <a class="frame__demos-item" href="rules_and_regulations.php">Rules & Guidelines</a>
                <a class="frame__demos-item" href="Problem_Statements.php">Problem Statements</a>                <a class="frame__demos-item" href="">FAQs</a>
                <a class="frame__demos-item" href="mentorslist.php">Mentors</a>       
                         <!-- <a class="frame__demos-item" href="">FAQs</a> -->
                <!-- <a class="frame__demos-item" href="">Project Implementation</a> -->
                <div class="up">
                <div class="new">
                    <div class="new1">
                        <a class="frame__demos-item vutton-custine" href="">Register</a>
                    </div>
                </div>
            </div>
                    </nav>
            </div>
        </div>
    </main>
<!-- <section class="content">
    <iframe src="./updatd.pdf" width="100%" height="600px">
    This browser does not support PDFs. Please download the PDF to view it: <a href="path/to/your/file.pdf">Download PDF</a>.
</iframe>
</section> -->




<!-- Title Section -->
<div class="title-container">
  <h1 class="title">Mentors</h1>
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
</div>

    


<section class="content">
    <div class="ag-format-container">
    <div class="ag-courses_box">
    




  <!-- CSE Staffs -->
  <div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link bl ">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">J.Mathalai Raj  </div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_date-box">Software Engineering, Data Structures, Algorithms, Machine Learning</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link bl ">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Arul Jothi S  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Database Management Systems, Cloud Computing, Web Technologies</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Deepiga  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Computer Networks, Cybersecurity</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.A.Solairaj  </div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_date-box">Computer Vision, Pattern Recognition, Data Mining</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">AYYANAPRABU J  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Embedded Systems, Internet of Things (IoT), Software Development</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Kesavamoorthy N  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Theoretical Computer Science, Compiler Design, Operating Systems</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">KEERTHANA. R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Human-Computer Interaction, Mobile Computing, Augmented Reality</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Udhaya Kumar R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Software Project Management, Agile Methodologies, System Design</div>
    </a>
</div>

<div class="ag-courses_item cse" data-department="cse">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">ARUNJUNAI KARTHICK K  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Computer Architecture, Networking, Quantum Computing</div>
    </a>
</div>


<!-- IT Staffs -->

<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Keerthana G  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">DBMS, OOPs, HTML</div>
    </a>
</div>

<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">J. KANIMOLI  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Computer Networks, IoT</div>
    </a>
</div>

<div class="ag-courses_item it" data-department="it">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Sangeetha  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Computer Network, Data Science, Artificial Intelligence</div>
    </a>
</div>

<!-- AI&DS Staffs -->

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Vignesh L S  </div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence and Machine Learning, Data Science and Big Data Analytics</div>
    </a>
</div>

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Archana R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Data Science, Artificial Intelligence</div>
    </a>
</div>

<div class="ag-courses_item aids" data-department="aids">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Vinoth Kumar J  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Artificial Intelligence, Deep Learning, Intelligent Systems, Internet of Things</div>
    </a>
</div>


<!-- EEE Staffs -->

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr R ATHILINGAM  </div>
        <div class="ag-courses-item_designation">Head of Department</div>
        <div class="ag-courses-item_date-box">IOT, Image Processing, Embedded System</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Nishetha Jeflin Nixon  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Power Electronics, Renewable Energy System, Inverter and Converters, Power and Energy Systems</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">SHIVA C  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Power Electronics, Renewable Energy Resources, Power Quality, Smart Automation</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Chitra R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Smart Grid, Wireless Communication, Power System Management, Renewable Energy</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">ABIRAMI N  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Digital Electronics, VLSI Design, Machine Learning</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Ganesh  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Power Systems, Renewable Energy, Energy Management</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Vijayalakshmi M  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Power Factor Improvement through Capacitor Placement, Smart Grid, Restructuring of Power System, Robotics</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">RAJA KARTHICK R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Distributed Control System, Renewable Energy, Electronic Devices and Circuits, PLC and SCADA</div>
    </a>
</div>

<div class="ag-courses_item eee" data-department="eee">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">PANDI PRABAKARAN R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">IOT, Arduino - Node Mcu, ESP32, Smart Grid, Embedded System</div>
    </a>
</div>


<!-- ECE Staffs -->

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr T Venish Kumar  </div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_date-box">VLSI Design, Embedded Systems (Both Hardware and Software), Image Processing</div>
    </a>
</div>
<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">PRATHAP S  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Network, Communication, Embedded</div>
    </a>
</div>



<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Mathavan  </div>
        <div class="ag-courses-item_designation">Vice Principal</div>
        <div class="ag-courses-item_date-box">Internet of Things, RFID, Sensor</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">IDHAYACHANDRAN M  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">VLSI Design, Electronic Circuit Analysis, Digital Electronics, Digital Signal Processing</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Pradeep Kumar R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Nanoparticles, Digital Systems Design, Digital Image Processing, Internet of Things</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">TAMILSELVI T  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">VLSI Design, Wireless Communication, Signal Processing, Internet of Things</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Kalaivani  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Signal Processing, Communication</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">P.Shantha Devi  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">VLSI Design, Image Processing, IoT</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Gowthami P  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Image Processing, Communication Systems, Digital Electronics, Nanotechnology</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Monica Dhana Ranjini  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Image Processing, Embedded Systems, Wearable Device</div>
    </a>
</div>

<div class="ag-courses_item ece" data-department="ece">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">K.Bharathi Kannan  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">VLSI Design, Signal Processing, Embedded Systems, Communication System</div>
    </a>
</div>

 

<!-- MECH Staffs -->

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.C.Mathalai Sundaram  </div>
        <div class="ag-courses-item_designation">Professor & Principal</div>
        <div class="ag-courses-item_date-box">Composite Tool Material, Optimization, Internet of Things, Reverse Engineering</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr B.Radha Krishnan  </div>
        <div class="ag-courses-item_designation">Associate Professor</div>
        <div class="ag-courses-item_date-box">Materials Science, Manufacturing Process, Waste Management, E-Car Technology</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">A. Vembathurajesh  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Materials, Thermal Engineering, Composites, High Temperature Application Materials</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">A. VENNIMALAI RAJAN  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Composite Materials</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Surulimani P  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Manufacturing, Welding</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S.Harikishore  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Automated Manufacturing, Development of Tools, Optimization Process, Quality Control</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">SIVAGANESAN V  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Engineering Design, Manufacturing Technology, Design Softwares</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">ARU KUMAR G  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Manufacturing Engineering</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Santhaseelan R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Manufacturing, Safety, Design</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">NAGARAJA R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Engineering Design, Composite Material, Machine Vision, Optimization</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">NAGARAJAN B  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Coating, Composites, Manufacturing, Material Testing</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">V.Thirumalairaj  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Engineering Design, Manufacturing, Analysis</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Mr. J. CHAKRAVARTHY SAMY DURAI  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Automobile Engineering, Manufacturing Engineering, Production Engineering, Thermal Engineering</div>
    </a>
</div>

<div class="ag-courses_item mech" data-department="mech">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">A. VENNIMALAI RAJAN  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Composite Materials, Production Engineering</div>
    </a>
</div>

<!-- CIVIL Staffs -->


<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr. E. Ananthakrishnan  </div>
        <div class="ag-courses-item_designation">HOD</div>
        <div class="ag-courses-item_date-box">Water analysis/structural engineer mni, Municipal solid waste</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Kanimozhi M  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Reinforced concrete structures, Waste Management</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Nathirun Sabinash R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Waste Management, Water analysis</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Shanmugapriyan R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Structural analysis, Water treatment, Prototype creation</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">P. Arul Jebaraj  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Structural engineering, Disaster management, Construction waste management</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">SINDHU M  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Construction Materials, Smart Irrigation, Concrete Technology</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Manimaran S  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Concrete / hardware, Concrete / software</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Sowmiya B  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Environmental Engineering</div>
    </a>
</div>

<div class="ag-courses_item civil" data-department="civil">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Gayathri S  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Hydraulic engineering, Structural engineering</div>
    </a>
</div>


<!-- S&H Staffs -->

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">PRATHAP.C </div>
        <div class="ag-courses-item_designation">Head of the Department</div>
        <div class="ag-courses-item_date-box">Image Processing, Artificial Intelligence & Machine Learning</div>
    </a>
</div>
<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr. C. Chithra  </div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_date-box">Statistics and Numerical Methods, Graph Theory, Applications of Differential Equations, Linear Algebra</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Arulvizhi  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Graph Theory, Stochastic Processes, Statistics, Real Analysis</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R. C. Richard Britto   </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">English Language Teaching</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">S. Jothi  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Indian Writing in English, Language and Linguistics, Feminism, Children's Literature</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dhandayuthapani. R  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Electronics, Semiconductor Physics, Atomic Physics, Crystal Physics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr. S. R. KRISHNAMOORTHI  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Physics Models, Electronics, MFIS / MOS Device Fabrications</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Mahalakshmi M  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Operations Research, Differential Calculus, Complex Analysis, Linear Algebra</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">M.Fathima Beevi  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">English Language Teaching, Technical English, English Literature, Linguistics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">R. Karunyah  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Mathematics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr.V. ANANTHI  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Operations Research, Topology, Discrete Mathematics, Statistics and Numerical Methods</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">RAJAGURU K  </div>
        <div class="ag-courses-item_designation">Assistant Professor</div>
        <div class="ag-courses-item_date-box">Thin Film, Electronics</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">Dr. N. David Mathan  </div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_date-box">Composites, Water Treatment, Polymers for Medicines, Municipal Solid Waste Management</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">MALLAIYASAMY B  </div>
        <div class="ag-courses-item_designation">Professor</div>
        <div class="ag-courses-item_date-box">Topology, Graph Theory, Statistics, Operation Research</div>
    </a>
</div>

<div class="ag-courses_item sh" data-department="sh">
    <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>
        <div class="ag-courses-item_title">B.Abinaya  </div>
        <div class="ag-courses-item_designation">Teaching Fellow</div>
        <div class="ag-courses-item_date-box">Water Treatment, Synthesis of Nanoparticles Based on Green Engineering</div>
    </a>
</div>

  

 

  


  



  
</div>

    </section>
    
<footer style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <!-- Follow Us Section -->
            <div class="col-md-6">
                <div class="follow-box">
                    <h3>Follow Us</h3>
                    <ul class="follow-box-copyright">
                        <li>
                            <a href="https://www.facebook.com/nscetofficial" target="_blank" rel="noopener noreferrer">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#3b5998" d="M22 12c0-5.522-4.477-10-10-10s-10 4.478-10 10c0 4.991 3.657 9.128 8.438 9.878v-6.988h-2.54v-2.89h2.54v-2.19c0-2.505 1.492-3.89 3.777-3.89 1.095 0 2.24.195 2.24.195v2.461h-1.262c-1.243 0-1.63.774-1.63 1.565v1.859h2.773l-.443 2.89h-2.33v6.988c4.781-.75 8.438-4.887 8.438-9.878z"/>
                                </svg>
                                
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/nscettheni?s=20" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#1da1f2" d="M24 4.557a9.9 9.9 0 01-2.828.775 4.938 4.938 0 002.165-2.723 9.865 9.865 0 01-3.127 1.195 4.924 4.924 0 00-8.384 4.49c-4.086-.204-7.702-2.165-10.126-5.144a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.231-.616v.061a4.924 4.924 0 003.946 4.827 4.935 4.935 0 01-2.224.085 4.927 4.927 0 004.599 3.417 9.867 9.867 0 01-6.1 2.103c-.396 0-.787-.023-1.175-.069a13.963 13.963 0 007.547 2.212c9.056 0 14.002-7.498 14.002-13.986 0-.213-.005-.425-.014-.637a10.013 10.013 0 002.457-2.548l.002-.002z"/>
                                </svg>
                                
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCDquPXiTrHksqrsF66G0cQQ" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FF0000" d="M23.498 6.186a2.972 2.972 0 00-2.094-2.096C19.859 3.596 12 3.596 12 3.596s-7.86 0-9.404.494a2.972 2.972 0 00-2.094 2.096c-.496 1.547-.496 4.774-.496 4.774s0 3.227.496 4.774a2.972 2.972 0 002.094 2.096c1.544.494 9.404.494 9.404.494s7.859 0 9.404-.494a2.972 2.972 0 002.094-2.096c.496-1.547.496-4.774.496-4.774s0-3.227-.496-4.774zM9.997 15.569v-6.164l6.421 3.083-6.421 3.081z"/>
                                </svg>
                                
                            </a>
                        </li>
                    </ul>
                    
                    <p style="margin-top: 15px;">© 2024-25 NSCET  Hackathon. All rights reserved</p>
                </div>
            </div>

            <!-- Contact Us Section -->
            <div class="col-md-6">
                <div class="follow-box flo-box">
                    <h3>Contact Us</h3>
                    <ul class="follow-box-contact">
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+91 4546 263900">+91 4546 263900</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:principal@nscet.org">principal@nscet.org</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- End of PS Section -->
    <script src="js/gsap.min.js"></script>
    <!-- <script type="module" src="js/index.js"></script> -->

    
<script>
    document.addEventListener("DOMContentLoaded", function() {
        VANTA.NET({
      el: "#vanta-background",
      mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0xfffe3f,
  backgroundColor: 0x0
    })
});

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
