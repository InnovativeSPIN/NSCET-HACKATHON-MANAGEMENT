<div class="frame">
            <div class="frame__title"> 
                <img class="logonscet" src="img/nscetlogo.png" alt="nscetLogo" style="filter: drop-shadow(0px 0px 30px rgba(255, 255, 255, 0.7))" >
                <img class="logonscet" src="img/logoHack.png" alt="nscetLogo" style="filter: drop-shadow(0px 0px 30px rgba(255, 255, 255, 0.7))" >
            </div>
            <div class="nav-icon">

      <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
        <path
              class="line top"
              d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path
              class="line middle"
              d="m 70,50 h -40" />
        <path
              class="line bottom"
              d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
      </svg>

    
            </div>
            <nav class="frame__demos">
                <!-- <span class="frame__demos-item">Variations: </span>	 -->
                <a class="frame__demos-item" href="./index.php" class="homeicon">Home</a>
                <!-- <a class="frame__demos-item" href="">About</a> -->
                <a class="frame__demos-item" href="./rules_and_regulations.php">Rules & Guidelines</a>
                <a class="frame__demos-item" href="./Problem_Statements.php">Problem Statements</a>                
                <a class="frame__demos-item" href="./faq.php">FAQs</a>
                <a class="frame__demos-item" href="./mentorslist.php">Mentors</a>       
                <!-- <a class="frame__demos-item" href="">Project Implementation</a> -->
                <div class="up">
                <div class="new">
                    <div class="new1">
                        <a class="frame__demos-item vutton-custine" href="./register.php">Register</a>
                    </div>
                </div>
                <div class="new">
                    <div class="new1" style='border: 2px solid #2fbdbc;margin-top:32px' >
                        <a class="frame__demos-item vutton-custine" style='border: 2px solid #2fbdbc;' href="./login.php">Login</a>
                    </div>
                </div>
            </div>
                    </nav>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
    const navicon = document.querySelector('.nav-icon');
    const navbar = document.querySelector('.frame__demos');
    navicon.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
});


        </script>