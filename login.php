<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | NSCET-Hackathon</title>
  <link rel="stylesheet" href="./css/nav.css">
  <link rel="stylesheet" href="./css/mobilenav.css">
  <link rel="stylesheet" href="./css/login.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<style>
    a{
        text-decoration: none !important;
    }
    .frame__title{
        z-index: 1;
    }

    .error {
      border: 2px solid red !important;
    }
</style>
</head>
    <?php include("./resources/header.php") ?>

<div class="animation-bg">
<div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
</div>
    <div class="main-body">
   
<div class="container">
        <div class="inner-content">
        <h2 class="title">Login</h2>
        <form action="./controllers/login.php" method="POST" class="form-container">
            <div class="input-box email">
                <input type="email" id="emailInput" id="email-input" required placeholder="Email" name="email">
            </div>
            <div class="input-box password">
                <input type="password" id="password-input" required placeholder="Password" name="password">
            </div>
            <div class="input-box password role">
                <select id="password-input" class="roleselection" name="role" required>
                    <option value="" hidden>Select</option>
                    <option value="Team Leader">Team Leader</option>
                    <option value="Mentor">Mentor</option>
                    <option value="Admin">Admin</option>
                    <option value="Hackathon Jury">Hackathon Jury</option>

                    
                </select>
            </div>
            <div class="button">
                <button type="submit" class="login">Login</button>
            </div>
            <!-- <div class="register">
                <p>Don't Register yet? <a href="./register.php">Register</a></p>
            </div> -->
        </form>
        </div>
    </div>
</div>

<script>
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    function showError(inputElement, message) {
          inputElement.classList.add('error');
      }

      function clearError(inputElement) {
          inputElement.classList.remove('error');
      }

      function validateInput(inputElement, regex, message) {
          if (!regex.test(inputElement.value)) {
              showError(inputElement, message);
          } else {
              clearError(inputElement);
          }
      }

    document.getElementById('emailInput').addEventListener('input', function() {
          validateInput(this, emailRegex, "Please enter a valid email address");
      });
    

</script>
</body>
</html>