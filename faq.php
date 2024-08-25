<?php 
    // require_once('./resources/connection.php')
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ | NSCET hackathon</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.1.0/dist/iconify.min.css">
    <script src="https://kit.fontawesome.com/181ea7bd20.js" crossorigin="anonymous"></script>
<!-- AOS Library CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
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
    height: 330vh; 
}


/* Responsive Styles */
@media (max-width: 1200px) {
    :root {
        --columns: 20;
        --page-padding: 1.5rem;
    }
    #particles-js {
        height: 2500vh;
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
    z-index: 10 !important;
   }

    nav {
        float: none;
        text-align: center;
        padding-top: 10px;
    }
    
    #particles-js {
        height: 880vh; /* Reduced height for smaller screens */
    }
}

@media (max-width: 768px) {
    #particles-js {
        height: 880vh; /* Further reduced height for very small screens */
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
    <div id="particles-js"></div>
  
  
  <!-- <div id="vanta-background" style="width: 100vw; height: 100vh;"></div> -->
  <section class="hero">
    <div class="col-md-12 text-center mb-3">
    <h2 class="heading-spacing" data-aos="zoom-in">
    FAQ: Team Composition, Registration, and Participation
    </h2>
</div>
    </section>

    <!-- FAQ -->
    <div class="container">
    
        <div class="section" data-aos="fade-up">
            <h2>1. How many members are required in a team?</h2>
            <p>Each team must consist of exactly 6 members.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>2. Can all team members be from the same department?</h2>
            <p>No, teams must include members from at least two different departments. AI&DS, CSE, and IT are considered a single department, so you need at least one member from a different department than the others.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>3. What if our team has more male members?</h2>
            <p>If your team primarily consists of male members, you must include at least 2 female members.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>4. What if our team has more female members?</h2>
            <p>If your team primarily consists of female members, you must include at least 2 male members.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>5. Can we change our team composition after registration?</h2>
            <p>No, once a team is registered, no changes to the team composition are allowed.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>6. How do we register our team?</h2>
            <p>Your team must register with a unique team name and provide details of each member, including their name, department, and year of study. You also need to nominate a team leader.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>7. Is there a registration fee?</h2>
            <p>Yes, a registration fee of ₹500 per member is required.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>8. Can we participate in both Software and Hardware editions of the hackathon?</h2>
            <p>No, each team can participate in only one edition of the hackathon, either Software or Hardware.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>9. How do we select a problem statement?</h2>
            <p>Teams must select and work on one problem statement for the duration of the hackathon. Each problem statement is limited to a maximum of 3 teams, and they are assigned on a first-come, first-served basis.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>10. What happens if our team does not follow the team composition rules?</h2>
            <p>Teams that do not adhere to the team composition rules or attempt unauthorized changes will be disqualified.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>11. Can mentors guide more than one team?</h2>
            <p>Yes, each mentor can guide a maximum of two teams.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>12. What are the consequences of plagiarism or unethical behavior?</h2>
            <p>Plagiarism or any form of unethical behavior will lead to immediate disqualification.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>13. How should teams manage their work?</h2>
            <p>Teams are responsible for managing their internal communication and task distribution. All members should contribute equally to the project.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>14. What is expected in terms of behavior during the hackathon?</h2>
            <p>All participants must maintain a respectful and collaborative environment throughout the hackathon.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>15. How many problem statements can a team work on?</h2>
            <p>Each team can work on only one problem statement for the duration of the hackathon.</p>
        </div>

</div>
>
        
    <div class="footer-content-main">
    <?php include("./resources/footersec.php") ?>

    </div>




    
    <!-- End of PS Section -->
    <script src="js/gsap.min.js"></script>
    <!-- <script type="module" src="js/index.js"></script> -->
   <a href="" class=" back-to-top pt-2" ><img src="./img/rocket.png" alt="" width="120px"></a>

<script src="./js/scripts.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({
        duration: 800,
    })
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
