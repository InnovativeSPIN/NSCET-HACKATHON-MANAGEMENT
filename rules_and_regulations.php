<?php 
    // require_once('./resources/connection.php')
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rules & Regulations</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">
    <link rel="stylesheet" type="text/css" href="css/ps.css" />
    <link rel="stylesheet" href="css/footersec.css">
    <link rel="stylesheet" href="./css/mobilenav.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.net.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    <style>

*{
     font-family: "source-code-pro", monospace !important;
}body{
    overflow-x: hidden;
}

@media (max-width: 1200px) {
    :root {
        --columns: 20;
        --page-padding: 1.5rem;
    }
}
@media (max-width: 768px) {
  .container {
    width: 100%;
    padding: 0 10px;
  }
}


@media (max-width: 768px) {
    :root {
        --columns: 10;
        --page-padding: 1rem;
    }
}
        /* Hero Section */
        .hero {
            background: url('img/hero-bg.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 60px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
           
            align-items: center;

        }
        .line{
            height: 1.5px;
            margin-top: 10px;
            background: #2980b9;
            width: 150px;
        }
        .hero h1 {
            font-size: 2.7em;
            margin: 0;
            color: #e74c3c;
        }

     
        /* Main Content */
        * {
    font-family: "source-code-pro", monospace !important;
    box-sizing: border-box; /* Ensures padding and border are included in the width */
}

body {
    font-family: "source-code-pro", monospace !important;
    background-color: black; /* Light background for the body */
    color: #2c3e50; /* Default text color */
    line-height: 1.6;
    overflow-x: hidden;
}
.container {
    max-width: 1200px; /* Restrict the maximum width */
    margin: 0 auto; /* Center the container */
    padding: 20px;
    z-index: 99;
    position: relative;
}

.hero {
    background: url('img/hero-bg.jpg') no-repeat center center/cover;
    color: #fff;
    padding: 60px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.line {
    height: 1.5px;
    margin-top: 10px;
    background: #2980b9;
    width: 150px;
}

.hero h1 {
    font-size: 2.7em;
    margin: 0;
    color: #e74c3c;
}

.section {
    background: rgba(0, 0, 0, 0.1); /* Semi-transparent white */
    backdrop-filter: blur(10px); /* Adjust the blur radius as needed */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Optional: Add a light border for better effect */
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    color: #fff;
}

.section:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.section h2 {
    font-size: 1.75em;
    color: #2980b9;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section ul {
    list-style-type: none;
    padding: 0;
    margin-left: 20px;
}

.section ul li {
    margin-bottom: 10px;
    font-size: 1.1em;
    line-height: 1.4;
}

.section ul li:before {
    content: "\2022";
    color: #2980b9;
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

.highlight {
    color: #e74c3c;
    font-weight: bold;
    text-decoration: underline;
}

a {
    color: #2980b9;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #e74c3c;
    text-decoration: underline;
}


#particles-js {
    width: 100vw; 
    position: absolute;
    z-index: 1;
    height: 270vh; 
}


/* Responsive Styles */
@media (max-width: 1200px) {
    :root {
        --columns: 20;
        --page-padding: 1.5rem;
    }
    #particles-js {
        height: 120vh;
    }
}


@media (max-width: 768px) {
    :root {
        --columns: 10;
        --page-padding: 1rem;
    }

    .container {
        padding: 10px;
        width: 100%;
         /* Ensure container uses full width */
    }
    .container{
    z-index: -1;
}
.nav-icon{
    z-index: 101 !important;
   }

    nav {
        float: none;
        text-align: center;
        padding-top: 10px;
    }
    
    #particles-js {
        height: 380vh; /* Reduced height for smaller screens */
    }
}

@media (max-width: 768px) {
    #particles-js {
        height: 280vh; /* Further reduced height for very small screens */
    }
    .heading-spacing i,.heading-spacing{
        font-size: 38px;
    }
    
}


    </style>
</head>
<body>
    <main>
        <div class="demo-1">
            <?php include("./resources/header.php") ?>
        </div>
    </main>
    <!-- <div id="vanta-background" style="width: 100vw; height: 100vh;"></div> -->
    <div id="particles-js"></div>
    <section class="hero">
    <div class="col-md-12 text-center mb-4">
    <h2 class="heading-spacing" data-aos="zoom-in">
        Mentor Rules & Regulations
    </h2>
</div>
    </section>

    <div class="container">
    <div class="section" data-aos="zoom-in-down">
        <h2>Online Meetings</h2>
        <ul>
            <li>You may conduct online meetings with your team members to discuss progress and provide guidance.</li>
            <li>All online meetings must be approved by the relevant Department Head (HOD) and Hackathon Coordinators.</li>
            <li>Share the meeting link with the Hackathon Coordinators in advance.</li>
        </ul>
    </div>

    <div class="section" data-aos="zoom-in-left">
        <h2>Physical Meetings</h2>
        <ul>
            <li>Physical meetings with your team members are only permitted on the college campus.</li>
            <li>Meetings outside the college campus are not allowed.</li>
        </ul>
    </div>

    <div class="section" data-aos="zoom-in-right">
        <h2>Scheduled Discussion Slots</h2>
        <ul>
            <li>Starting from <span class="highlight">02/09/2024</span>, two time slots have been designated for team discussions:</li>
            <li>Tuesdays: <span class="highlight">3rd and 4th hours</span></li>
            <li>Wednesdays: <span class="highlight">6th and 7th hours</span></li>
            <li>During these hours, teams must be present with their mentors and are not allowed to wander around the college campus unnecessarily.</li>
        </ul>
    </div>

    <div class="section" data-aos="zoom-in-left">
        <h2>Requesting Items for Problem Solutions</h2>
        <ul>
            <li>If your team requires any items for their problem solution, ensure that a formal request is made.</li>
            <li>This request must be approved by both you (the Mentor) and the Department Head (HOD).</li>
        </ul>
    </div>

    <div class="section" data-aos="zoom-in-right">
        <h2>Utilization of College Resources</h2>
        <ul>
            <li>If your team needs to use any college resources (labs, equipment, etc.), they must obtain proper permission.</li>
            <li>This permission should be sought from you (the Mentor) and the HOD of the resource-providing department.</li>
        </ul>
    </div>
</div>


    <!-- Hackathon rules and requlations -->

    <div class="col-md-12 text-center mb-4">
    <h2 class="heading-spacing" data-aos="zoom-in">
        Hackathon Rules & Regulations
    </h2>
</div>

<div class="container">
        <div class="section" data-aos="zoom-in-down">
            <h2>Team Composition</h2>
            <ul>
                <li>Each team must consist of <span class="highlight">6 members</span>.</li>
                <li>Teams must include members from at least <span class="highlight">two
different departments</span>, with at least <span class="highlight">one member from a different department</span>
than the others. For this purpose, <span class="highlight">AI&DS, CSE, and IT</span> are treated as a <span class="highlight">single
department</span>.</li>
                <li>If a team primarily consists of male members, it must include at least <span class="highlight">2 female members</span>.</li>
                <li>If a team primarily consists of female members, it must include at least <span class="highlight">2 male members</span>.</li>
            </ul>
        </div>

        <div class="section" data-aos="zoom-in-left">
            <h2>Team Registration</h2>
            <ul>
                <li>Each team must register with a <span class="highlight">unique team name</span>.</li>
                <li>Teams must provide details of each member during registration, including their name, department, and year of study.</li>
                <li>The team must nominate a <span class="highlight">team leader</span> who will serve as the primary point of contact.</li>
                <li>A registration fee of <span class="highlight">₹500 per member</span> is required.</li>
            </ul>
        </div>

        <div class="section" data-aos="zoom-in-right">
            <h2>Inter-Departmental Collaboration</h2>
            <ul>
                <li>Teams must include members from at least two different engineering departments to foster collaboration.</li>
            </ul>
        </div>

        <div class="section" data-aos="zoom-in-left">
            <h2>Team Registration and Participation</h2>
            <ul>
                <li>No changes in team composition are allowed once registered.</li>
                <li>Each team can participate in only one edition of the hackathon, either <span class="highlight">Software or Hardware</span>.</li>
                <li>Teams must select and work on <span class="highlight">one problem statement only</span> for the duration of the hackathon. <span class="highlight">Each problem statement is limited to a
maximum of 3 teams</span>.</li>
                <li>Problem statements will be assigned to teams on a <span class="highlight">first-come, first-served</span> basis. This approach ensures that no more than three teams tackle the same problem, promoting <span class="highlight">diversity in approaches and solutions</span> throughout the competition.</li>
            </ul>
        </div>

        <div class="section" data-aos="zoom-in-right">
            <h2>Team Responsibilities</h2>
            <ul>
                <li>Teams are responsible for managing their internal communication and task distribution.</li>
                <li>All members should contribute equally to the project.</li>
            </ul>
        </div>

        <div class="section" data-aos="zoom-in-left">
            <h2>Disqualification Criteria</h2>
            <ul>
                <li>Teams that do not adhere to the team composition rules or attempt unauthorized changes will be disqualified.</li>
                <li><span class="highlight">Plagiarism</span> or any form of unethical behavior will lead to immediate disqualification.</li>
            </ul>
        </div>
       

        <div class="section" data-aos="zoom-in-right">
            <h2>Code of Conduct</h2>
            <ul>
                <li>All participants must maintain a <span class="highlight">respectful and collaborative environment</span> throughout the hackathon.</li>
            </ul>
        </div>

        <div class="section" data-aos="zoom-in-left">
            <h2>Mentor Responsibilities</h2>
            <ul>
                <li>Each mentor can guide a maximum of two teams.</li>
                <li>Mentors should encourage equal contribution among team members.</li>
            </ul>
        </div>
    </div>

   




    
  <?php include("./resources/footersec.php") ?>
    <!-- End of PS Section -->
    <script src="js/gsap.min.js"></script>
    <!-- <script type="module" src="js/index.js"></script> -->

    


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
</script> -->    <a href="" class=" back-to-top pt-2" ><img src="./img/rocket.png" alt="" width="120px"></a>

<script src="./js/scripts.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({
        duration: 800,
    })
  </script>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    particlesJS('particles-js', {
      "particles": {
        "number": {
          "value":200,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#FFA500"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": ""
          },
          "polygon": {
            "nb_sides": 5
          }
        },
        "opacity": {
          "value": 0.5,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#FFA500",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "repulse"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 0.8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>
  
 


</body>
</html>
