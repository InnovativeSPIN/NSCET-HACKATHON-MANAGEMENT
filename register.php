<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | NSCET-Hackathon</title>
  <link rel="stylesheet" href="./css/nav.css">
  <link rel="stylesheet" href="./css/mobilenav.css">
  <link rel="stylesheet" href="./css/register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <style>
    a {
      text-decoration: none !important;
    }

    input[type='number'],
    input[type='password'] {
      background: transparent !important;
    }

    body {
      background-image: url('/img/loginbg.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .frame__title {
      z-index: 1;
    }

    .error {
      border: 2px solid red !important;
    }

    .error-message {
        color: red;
        font-size: 0.875rem;
        display: none;
    }
    .error + .error-message {
        display: block;
    }
  </style>
</head>

<body>

  <?php include("./resources/header.php") ?>
  <canvas id="test"></canvas>
  <div class="main-body">
    <div class="container">
      <div class="inner-content">
        <h2 class="title">Registration</h2>
        <form id="registrationForm"action="./controllers/register.php" method="POST" class="form-container">
          <div class="input-box email">
            <input type="text" id="teamLeadInput" required placeholder="Team leader Reg No" name='team_lead'>
            <!-- <span id="teamLeadError" class="error-message"></span> -->
          </div>
          <div class="input-box password">
            <input type="text" id="teamNameInput" style="text-transform:uppercase" required placeholder="Team Name"
              name='team_name'>
              <!-- <span id="teamNameError" class="error-message"></span> -->
          </div>
          <div class="input-box email">
            <input type="email" id="emailInput" required placeholder="Email" name="email">
            <!-- <span id="emailError" class="error-message"></span> -->
          </div>
          <div class="input-box email">
            <input type="text" id="passwordInput" required placeholder="Password" name="password">
            <!-- <span id="passwordError" class="error-message"></span> -->
          </div>
          <div class="remember-forgot">
            <div class="remember">
              <!-- <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label> -->
            </div>
          </div>
          <div class="button">
            <button class="login">Register for hackathon</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script>
    var teamLeadRegex = /^9210\d{8}$/;
      var teamNameRegex = /^[A-Z\s]+$/;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var passwordRegex = /^.{6,}$/;

      function showError(inputElement, errorMessageElement, message) {
          inputElement.classList.add('error');
          // errorMessageElement.textContent = message;
          // errorMessageElement.style.display = 'inline';
      }

      function clearError(inputElement, errorMessageElement) {
          inputElement.classList.remove('error');
          // errorMessageElement.textContent = '';
          // errorMessageElement.style.display = 'none';
      }

      function validateInput(inputElement, regex, message, errorMessageElement) {
          if (!regex.test(inputElement.value)) {
              showError(inputElement, errorMessageElement, message);
          } else {
              clearError(inputElement, errorMessageElement);
          }
      }

      document.getElementById('teamLeadInput').addEventListener('input', function() {
          validateInput(this, teamLeadRegex, "Enter valid register number", document.getElementById('teamLeadError'));
      });

      document.getElementById('teamNameInput').addEventListener('input', function() {
          this.value = this.value.toUpperCase();
          validateInput(this, teamNameRegex, "Please don't use special characters in team name", document.getElementById('teamNameError'));
      });

      document.getElementById('emailInput').addEventListener('input', function() {
          validateInput(this, emailRegex, "Please enter a valid email address", document.getElementById('emailError'));
      });

      document.getElementById('passwordInput').addEventListener('input', function() {
          validateInput(this, passwordRegex, "Password must be at least 6 characters long", document.getElementById('passwordError'));
      });

      document.getElementById('registrationForm').addEventListener('submit', function(e) {
          var isValid = true;

          var teamLeadInput = document.getElementById('teamLeadInput');
          var teamNameInput = document.getElementById('teamNameInput');
          var emailInput = document.getElementById('emailInput');
          var passwordInput = document.getElementById('passwordInput');

          if (!teamLeadRegex.test(teamLeadInput.value)) {
              showError(teamLeadInput, document.getElementById('teamLeadError'), "Enter valid register number");
              isValid = false;
          }

          if (!teamNameRegex.test(teamNameInput.value)) {
              showError(teamNameInput, document.getElementById('teamNameError'), "Please don't use special characters in team name");
              isValid = false;
          }

          if (!emailRegex.test(emailInput.value)) {
              showError(emailInput, document.getElementById('emailError'), "Please enter a valid email address");
              isValid = false;
          }

          if (!passwordRegex.test(passwordInput.value)) {
              showError(passwordInput, document.getElementById('passwordError'), "Password must be at least 6 characters long");
              isValid = false;
          }

          if (!isValid) {
              e.preventDefault();
          }
      });
  </script>
  <script>

    var w = window.innerWidth,
      h = window.innerHeight,
      canvas = document.getElementById('test'),
      ctx = canvas.getContext('2d'),
      rate = 60,
      arc = 100,
      time,
      count,
      size = 20,
      speed = 15,
      parts = new Array,
      colors = ['yellow', '#ce5c00', '#5c3566'];
    var mouse = { x: 0, y: 0 };

    canvas.setAttribute('width', w);
    canvas.setAttribute('height', h);

    function create() {
      time = 0;
      count = 0;

      for (var i = 0; i < arc; i++) {
        parts[i] = {
          x: Math.ceil(Math.random() * w),
          y: Math.ceil(Math.random() * h),
          toX: Math.random() * 5 - 1,
          toY: Math.random() * 2 - 1,
          c: colors[Math.floor(Math.random() * colors.length)],
          size: Math.random() * size
        }
      }
    }

    function particles() {
      ctx.clearRect(0, 0, w, h);
      canvas.addEventListener('mousemove', MouseMove, false);
      for (var i = 0; i < arc; i++) {
        var li = parts[i];
        var distanceFactor = DistanceBetween(mouse, parts[i]);
        var distanceFactor = Math.max(Math.min(15 - (distanceFactor / 20), 5), 1);
        ctx.beginPath();
        ctx.arc(li.x, li.y, li.size * distanceFactor, 0, Math.PI * 2, false);
        ctx.fillStyle = li.c;
        ctx.strokeStyle = li.c;
        if (i % 2 == 0)
          ctx.stroke();
        else
          ctx.fill();

        li.x = li.x + li.toX * (time * 0.05);
        li.y = li.y + li.toY * (time * 0.05);

        if (li.x > w) {
          li.x = 0;
        }
        if (li.y > h) {
          li.y = 0;
        }
        if (li.x < 0) {
          li.x = w;
        }
        if (li.y < 0) {
          li.y = h;
        }


      }
      if (time < speed) {
        time++;
      }
      setTimeout(particles, 1000 / rate);
    }
    function MouseMove(e) {
      mouse.x = e.layerX;
      mouse.y = e.layerY;

      //context.fillRect(e.layerX, e.layerY, 5, 5);
      //Draw( e.layerX, e.layerY );
    }
    function DistanceBetween(p1, p2) {
      var dx = p2.x - p1.x;
      var dy = p2.y - p1.y;
      return Math.sqrt(dx * dx + dy * dy);
    }
    create();
    particles();
  </script>
</body>

</html>