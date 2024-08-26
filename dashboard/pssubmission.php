<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    PS Submission | NSCET HACKATHON
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="./pssubmisson.css" rel="stylesheet" />

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php include("./resources/sidebar.php") ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="false">
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
      <div class="col-md-12 text-center mb-4">
        <h2 class="heading-spacing psl">
          <i></i>Problem <i></i>Statement <i></i>Submission
        </h2>
      </div>
      <style>

      </style>
      <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data" class="form-content">
          <!-- Dropdown Section -->
          <div class="form-group">
            <label for="dropdown">Select a PS ID :</label>
            <select id="browsers" name="browser" style="width: 100%; padding: 10px; font-size: 16px;">
              <option value="" hidden></option>
            </select>
          </div>


          <!-- Submit Button -->
          <div class="form-group">
            <button class="button-64" role="button"
              style="width: 100%; font-size: 16px; color: white; border: none; border-radius: 4px; cursor: pointer;">
              <span class="text">Submit Problem</span>
            </button>

          </div>
        </form>
      </div>

    </div>


    <div class="table-section">
      <div class="col-md-12 text-center mb-4">
        <h2 class="heading-spacing  psl" style="margin:0px">
          <i>A</i>vailable <i>P</i>roblem <i>S</i>tatements <i>L</i>ist
        </h2>
      </div>
      <div class="table-container">


        <div class="table-filter">
          <!-- <div class="ideappt">
         <a href="./NSCET HACKATHON 2024 - Idea PPT.pptx" download style="border-bottom: 1px solid #121212;">Idea Submission Format PPT</a>
           </div> -->
          <div class="category">
            <h4>Category:</h4>
            <select class="category-dropdown" id="category-filter">
              <option value="all">All</option>
              <option value="software">Software</option>
              <option value="hardware">Hardware</option>
            </select>
          </div>
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
    <script>
      let tableData = [];
      let currentPage = 1;
      const rowsPerPage = 10;

      async function fetchData() {
        try {
          const response = await fetch('../resources/ps_fetch_submission.php');
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

        const select = document.getElementById('browsers');

        paginatedData.forEach((row, index) => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td>${index + start + 1}</td>
            <td>${row.ps_id}</td>
            <td class="problem-title" data-description="${row.ps_description}" data-ps-id="${row.ps_id}" data-ps-title="${row.ps}">${row.ps}</td>
            <td>${row.ps_type == 0 ? "Software" : "Hardware"}</td>
            <td>${row.submission_count}</td>
            <td>${row.ps_domain}</td>
        `;
          tableBody.appendChild(tr);

          const option = document.createElement('option');
          option.value = row.ps_id;
          option.textContent = row.ps_id;
          select.appendChild(option);
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
          title.addEventListener('click', function () {
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



      document.getElementById('category-filter').addEventListener('change', function () {
        currentPage = 1;
        displayTable(currentPage);
      });

      // Initial fetch and display
      fetchData();


      // animation H,S

      document.addEventListener("DOMContentLoaded", function () {
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
      document.getElementById('category-filter').addEventListener('change', function () {
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

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>