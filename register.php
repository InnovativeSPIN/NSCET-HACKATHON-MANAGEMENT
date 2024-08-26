<?php
header("Location: https://nscet.org/hackathon");
exit();
?>

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
      background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);

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
  <div class="animation-bg">
<div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
</div>
  <div class="main-body">
    <div class="container">
      <div class="inner-content">
        <h2 class="title">Registration</h2>
        <form id="registrationForm"action="./controllers/register.php" method="POST" class="form-container">
          <div class="input-box email">
            <input type="text" id="teamLeadInput" required placeholder="Team Leader Reg No" name='team_lead'>
            <!-- <span id="teamLeadError" class="error-message"></span> -->
          </div>
          <div class="input-box password">
            <input type="text" id="teamNameInput" required placeholder="Team Name"
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
  
</body>

</html>