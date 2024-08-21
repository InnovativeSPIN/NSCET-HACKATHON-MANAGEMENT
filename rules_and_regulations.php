<?php 
    require_once('./resources/connection.php')
?>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.net.min.js"></script>
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
        /* Hero Section */
        .hero {
            background: url('img/hero-bg.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 60px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5em;
            margin: 0;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .section {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .section h2 {
            font-size: 1.75em;
            color: #2980b9;
            margin-bottom: 15px;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            margin-bottom: 10px;
            font-size: 1.1em;
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
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            nav {
                float: none;
                text-align: center;
                padding-top: 10px;
            }
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="demo-1">
            <div class="frame frameNEW">
                <div class="frame__title"> 
                    <img class="logonscet" src="img/nscetlogo.png" alt="NSCET Logo" width="130px">
                </div>
                <nav class="frame__demos">
                    <span class="frame__demos-item">Home</span>
                    <a class="frame__demos-item" href="index2.html">About Hackathon</a>
                    <a class="frame__demos-item" href="rules_and_regulations.php">Guidelines</a>
                    <a class="frame__demos-item" href="problem_statements.php">Problem Statements</a>
                    <a class="frame__demos-item" href="index5.html">FAQs</a>
                    <a class="frame__demos-item" href="index6.html">Project Implementation</a>
                    <div class="up">
                        <div class="new">
                            <div class="new1">
                                <a class="frame__demos-item vutton-custine" href="index6.html">Register</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </main>
    <!-- <div id="vanta-background" style="width: 100vw; height: 100vh;"></div> -->
    
    <section class="hero">
        <h1 style='margin-top: 128px'>Hackathon Rules & Regulations</h1>
    </section>

    <div class="container">
        <div class="section">
            <h2>Team Composition</h2>
            <ul>
                <li>Each team must consist of <span class="highlight">6 members</span>.</li>
                <li>Teams must include members from at least <span class="highlight">two different departments</span>.</li>
                <li>If a team primarily consists of male members, it must include at least <span class="highlight">2 female members</span>.</li>
                <li>If a team primarily consists of female members, it must include at least <span class="highlight">2 male members</span>.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Team Registration</h2>
            <ul>
                <li>Each team must register with a <span class="highlight">unique team name</span>.</li>
                <li>Teams must provide details of each member during registration, including their name, department, and year of study.</li>
                <li>The team must nominate a <span class="highlight">team leader</span> who will serve as the primary point of contact.</li>
                <li>A registration fee of <span class="highlight">₹500 per member</span> is required.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Inter-Departmental Collaboration</h2>
            <ul>
                <li>Teams must include members from at least two different engineering departments to foster collaboration.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Team Registration and Participation</h2>
            <ul>
                <li>No changes in team composition are allowed once registered.</li>
                <li>Each team can participate in only one edition of the hackathon, either <span class="highlight">Software or Hardware</span>.</li>
                <li>Teams must select and work on <span class="highlight">one problem statement only</span> for the duration of the hackathon.</li>
                <li>The problem statements will be allotted on a <span class="highlight">First Come First Serve</span> basis.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Team Responsibilities</h2>
            <ul>
                <li>Teams are responsible for managing their internal communication and task distribution.</li>
                <li>All members should contribute equally to the project.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Disqualification Criteria</h2>
            <ul>
                <li>Teams that do not adhere to the team composition rules or attempt unauthorized changes will be disqualified.</li>
                <li><span class="highlight">Plagiarism</span> or any form of unethical behavior will lead to immediate disqualification.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Code of Conduct</h2>
            <ul>
                <li>All participants must maintain a <span class="highlight">respectful and collaborative environment</span> throughout the hackathon.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Mentor Responsibilities</h2>
            <ul>
                <li>Each mentor can guide a maximum of two teams.</li>
                <li>Mentors should encourage equal contribution among team members.</li>
            </ul>
        </div>
    </div>

    
    
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
</script>


</body>
</html>
