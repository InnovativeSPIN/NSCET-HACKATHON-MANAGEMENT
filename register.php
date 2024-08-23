<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | NSCET-Hackathon</title>
  <link rel="stylesheet" href="./css/nav.css">
  <link rel="stylesheet" href="./css/mobilenav.css">
  <link rel="stylesheet" href="./css/register.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<style>
    a{
        text-decoration: none !important;
    }
    input[type='number'],input[type='password']{
        background: transparent !important;
    }

    body{
        background: black;
    }
</style>
</head>
<body>
    
    <?php include("./resources/header.php") ?>
    <div class="main-body">
<div class="container">
        <div class="inner-content">
        <h2 class="title">Team Registration</h2>
        <form action="#" class="form-container">
            <div class="input-box email">
                <input type="text"  id="email-input" required placeholder="Team leader Reg No">
               
            </div>
            <div class="input-box password">
                <input type="text"  id="password-input" required placeholder="Team Name">
                
            </div>
            <div class="input-box email">
                <input type="email"  id="email-input" required placeholder="Email">
                
            </div>
            <div class="input-box email">
                <input type="text"  id="email-input" required placeholder="Password">
                
            </div>




  
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
</body>
</html>