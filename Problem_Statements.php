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
                    <a class="frame__demos-item" href="index3.html">Guidelines</a>
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
    
    <div id="vanta-background" style="width: 100vw; height: 100vh;">
        <!-- PS START -->
        <section class="total-statement totstat">
            <div class="container">
                <!-- Centered Heading -->
                <div class="row">
                    <div class="col-md-12 text-center mb-4">
                        <h2 class="heading-spacing">Problem Statement</h2>
                    </div>
                </div>
                <!-- Total Statements Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="statement-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="ts">Total Statements</h3>
                                </div>
                                <div class="col-md-3">
                                    <div class="hard statement-type">
                                        <h3>00</h3>
                                        <p>Hardware</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="soft statement-type">
                                        <h3>00</h3>
                                        <p>Software</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<div class="container mt-5">
    
    <div class="section-container">
        
        <div class="section-one">
            <label for="theme-select">Select Theme</label>
            <select id="theme-select" class="form-select">
                <option value="">Choose a Theme</option>
                <option value="QWxs">All</option>
                <option value="MQ==">Agriculture, FoodTech & Rural Development</option>
                <option value="Mg==">Blockchain & Cybersecurity</option>
                <option value="Mw==" selected="">Clean & Green Technology</option>
                <option value="NA==">Fitness & Sports</option>
                <option value="NQ==">Heritage & Culture</option>
                <option value="Ng==">MedTech / BioTech / HealthTech</option>
                <option value="Nw==">Miscellaneous</option>
                <option value="OA==">Renewable / Sustainable Energy</option>
                <option value="OQ==">Robotics and Drones</option>
                <option value="MTA=">Smart Automation</option>
                <option value="MTE=">Smart Vehicles</option>
                <option value="MTI=">Travel & Tourism</option>
                <option value="MTM=">Transportation & Logistics</option>
                <option value="MTQ=">Disaster Management</option>
                <option value="MTU=">Smart Education</option>
                <option value="MTY=">Toys & Games</option>
                <option value="MTc=">Space Technology</option>
                <option value="MTg=">Smart Resource Conservation</option>
            </select>
        </div>
        <!-- Section 2 (Right Aligned) -->
        <div class="section-two">
            <label for="category-select">Category</label>
            <select id="category-select" class="form-select">
                <option value="">Choose a Category</option>
                <option value="Hardware">Hardware</option>
                <option value="Software">Software</option>
            </select>
        </div>
    </div>
</div>

        <!-- Table Start -->
        <div class="table-section">
            <!-- Table Start -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2>Submitted Ideas</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Problem Statement ID</th>
                                <th>Problem Statement Title</th>
                                <th>Category</th>
                                <th>Submitted Idea(s) Count</th>
                                <th>Theme</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <!-- Rows will be populated by JavaScript -->
                        </tbody>
                    </table>
    
                    <!-- Pagination -->
                    <div class="pagination" id="pagination">
                        <!-- Pagination buttons will be populated by JavaScript -->
                    </div>
                </div>
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
