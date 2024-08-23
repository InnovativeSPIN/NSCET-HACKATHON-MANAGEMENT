
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Problem Statements</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">
    <link rel="stylesheet" type="text/css" href="css/ps.css" />
    <link rel="stylesheet" href="css/footersec.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
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
     
    </style>
</head>
<body>
<div class="demo-1">
     <main>
     <?php include('./resources/header.php') ?> 
        <!-- <div class="robo-content" id="model-container">
        <model-viewer src="./robo/scene.gltf" alt="A 3D model of a car" shadow-intensity="1"   disable-zoom  camera-controls auto-rotate   camera-orbit="4000deg  " style=" height: 80%;">
        </model-viewer>
        </div> -->
    </main>
    <!-- <div id="vanta-background" style="width: 100vw; height: 100vh;"></div> -->
    
    <div id="vanta-background" style="width: 100vw; height: 70vh;">
       
        <section class="total-statement totstat">
            <div class="container">
                
                <div class="row">
    <div class="col-md-12 text-center mb-4">
        <h2 class="heading-spacing heading">
            <i>P</i>roblem <i>S</i>tatement
        </h2>
    </div>
</div>

               
                <div class="row">
    <div class="col-md-12">
        <div class="statement-box">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="ts">Total Statements</h3>
                </div>
                <div class="col-md-3">
                    <div class="hard statement-type">
                        <div class="icon-container">
                            <i class="fas fa-cogs"></i> 
                        </div>
                        <h3>25</h3>
                        <p>Hardware</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="soft statement-type">
                        <div class="icon-container">
                            <i class="fas fa-laptop-code"></i> 
                        </div>
                        <h3>25</h3>
                        <p>Software</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </section>
    </div>
    <div class="container mt-5">
    <!-- <div class="section-container">
    
        <div class="section-one">
            <label for="theme-select">Select Theme</label>
            <select id="theme-select" class="form-select">
         
                <option value="MTAx">Artificial Intelligence (AI)</option>
                <option value="MTAy">Augmented Reality (AR)</option>
                <option value="MTAz">Cybersecurity</option>
                <option value="MTA0">HealthTech</option>
                <option value="MTA1">Internet of Things (IoT)</option>
                <option value="MTA2">Robotics and Automation</option>
                <option value="MTA3">Safety</option>
                <option value="MTA4">Signal Processing</option>
                <option value="MTA5">Smart City</option>
                <option value="MTA2">Sustainable Energy</option>
                <option value="MTA3">Waste Management</option>
            </select>
        </div>
    


        <div class="section-two">
            <label for="category-select">Select Category</label>
            <select id="category-select" class="form-select">
             
                <option value="" disabled selected hidden>Select Category</option>
                <option value="Hardware">Hardware</option>
                <option value="Software">Software</option>
            </select>
        </div>
    </div> -->
</div>

<div class="table-section">
    <div class="table-container">
        <div class="col-md-12 text-center mb-4">
            <h2 class="heading-spacing  psl" style="margin:0px">
                <i>P</i>roblem <i>S</i>tatements <i>L</i>ist
            </h2>
        </div>

        <div class="table-filter">
            <h4>Category:</h4>
            <select class="category-dropdown" id="category-filter">
                <option value="all">All</option>
                <option value="software">Software</option>
                <option value="hardware">Hardware</option>
            </select>
        </div>

        <table class="custom-table">
            <thead class="custom-header">
                <tr>
                    <th class="custom-header-cell">S.No.</th>
                    <th class="custom-header-cell">Problem Statement ID</th>
                    <th class="custom-header-cell">Problem Statement Title</th>
                    <th class="custom-header-cell">Category</th>
                    <th class="custom-header-cell">Submitted Idea(s) Count</th>
                    <th class="custom-header-cell">Theme</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Rows will be populated by JavaScript -->
            </tbody>
        </table>
    </div>
</div>

    <!-- Pagination -->
    <div class="pagination" id="pagination">
        <!-- Pagination buttons will be populated by JavaScript -->
    </div>
</div>


    
 <?php include("./resources/footersec.php") ?>

<div id="problemModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-header">
            <h2>Problem Statement Details</h2>
        </div>
        <div class="modal-body">
            <table class="modal-table">
                <tr>
                    <th>Problem Statement ID</th>
                    <td id="modal-ps-id"></td>
                </tr>
                <tr>
                    <th>Problem Statement Title</th>
                    <td id="modal-ps-title"></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td id="modal-description"></td>
                </tr>
            </table>
        </div>
    </div>
</div>

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

    const filteredData = filterData();
    const paginatedData = filteredData.slice(start, end);

    paginatedData.forEach((row, index) => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${index + start + 1}</td>
            <td>${row.ps_id}</td>
            <td class="problem-title" data-description="${row.ps_description}" data-ps-id="${row.ps_id}" data-ps-title="${row.ps}">${row.ps}</td>
            <td>${row.ps_type == 0 ? "Software" : "Hardware"}</td>
            <td>${'0'}</td>
            <td>${row.ps_domain}</td>
        `;
        tableBody.appendChild(tr);
    });

    attachTitleClickEvents();
    updatePagination(filteredData.length);
}

function filterData() {
    const selectedCategory = document.getElementById('category-filter').value.toLowerCase();
    if (selectedCategory === 'all') {
        return tableData;
    } else {
        return tableData.filter(row => {
            return row.ps_type == (selectedCategory === 'software' ? 0 : 1);
        });
    }
}

function attachTitleClickEvents() {
    const titles = document.querySelectorAll('.problem-title');
    titles.forEach(title => {
        title.addEventListener('click', function() {
            const description = this.getAttribute('data-description');
            document.getElementById('modal-description').textContent = description;

            const ps_id = this.getAttribute('data-ps-id');
            document.getElementById('modal-ps-id').textContent = ps_id;

            const ps_title = this.getAttribute('data-ps-title');
            document.getElementById('modal-ps-title').textContent = ps_title;
            openModal();
        });
    });
}

function openModal() {
    const modal = document.getElementById('problemModal');
    modal.style.display = "block";
}

function closeModal() {
    const modal = document.getElementById('problemModal');
    modal.style.display = "none";
}

function updatePagination(totalItems) {
    const totalPages = Math.ceil(totalItems / rowsPerPage);
    const paginationDiv = document.getElementById('pagination');
    paginationDiv.innerHTML = '';

    const prevBtn = document.createElement('button');
    prevBtn.id = 'prev-btn';
    prevBtn.innerText = 'Previous';
    prevBtn.onclick = prevPage;
    prevBtn.disabled = currentPage === 1;
    paginationDiv.appendChild(prevBtn);

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
    const totalPages = Math.ceil(filterData().length / rowsPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        displayTable(currentPage);
    }
}

document.querySelector('.close').onclick = closeModal;
window.onclick = function(event) {
    const modal = document.getElementById('problemModal');
    if (event.target == modal) {
        closeModal();
    }
}

document.getElementById('category-filter').addEventListener('change', function() {
    currentPage = 1;
    displayTable(currentPage);
});

// Initial fetch and display
fetchData();


    // animation H,S

    document.addEventListener("DOMContentLoaded", function() {
    function animateCount(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            element.innerText = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const hardwareElement = document.querySelector('.hard h3');
    const softwareElement = document.querySelector('.soft h3');
    animateCount(hardwareElement, 0, 25, 2500);
    animateCount(softwareElement, 0, 25, 2500);
});
document.getElementById('category-filter').addEventListener('change', function() {
    const selectedCategory = this.value.toLowerCase();  // Get the selected category
    const rows = document.querySelectorAll('#table-body tr');  // Select all rows in the table body

    rows.forEach(row => {
        const category = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
        if (selectedCategory === 'all' || category === selectedCategory) {
            row.style.display = '';  // Show the row if it matches the selected category or if 'All' is selected
        } else {
            row.style.display = 'none';  // Hide the row if it doesn't match
        }
    });
});



</script>


</body>
</html>
