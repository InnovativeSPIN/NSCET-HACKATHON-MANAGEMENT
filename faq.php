<?php 
    // require_once('./resources/connection.php')
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rules & Regulations</title>
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

 
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "source-code-pro", monospace !important;
}

/* Body Styles */
body {
    overflow-x: hidden;
    line-height: 1.6;
    background: black;
}
#faq{
    max-width: 980px;
    margin: 0 auto;
    width: 100%;
} 


.hero {
    color: #fff;
    padding: 60px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}
#icons img{
    width: 30px;
    height: 30px;
    z-index: 1;
}
/* General Styles */
.my-background{
width: 100%;
height: fit-content;
}
body {
    font-family: "Source Code Pro", monospace;
    background-color: #f0f0f0;
    color: #333;
    margin: 0;
    padding: 0;
}
.faq-item{
padding: 10px;
border: 1px solid #121212;
margin: 10px;
border-radius: 10px;
background: rgba(0,0,0,0.2);
}
.faq-item h2{
    color: white;
    font-size: clamp(24px,3vw,26px);
}
.faq-item p{
    font-size: clamp(15px,2vw,18px);
}
.frame__title,.frame__demos{
    z-index: 4;
}
.heading-spacing{
    filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.5));
    font-size: clamp(24px,3vw,35px);

}


   </style>
</head>
<body>
<main>
        <div class="demo-1">
            <?php include("./resources/header.php") ?>
        </div>
    </main>
<div  id="my-background">
  
  
  <!-- <div id="vanta-background" style="width: 100vw; height: 100vh;"></div> -->
  <section class="hero">
    <div class="col-md-12 text-center mb-3">
    <h2 class="heading-spacing" data-aos="zoom-in">
    FAQ: Team Composition, Registration, and Participation
    </h2>
</div>
    </section>

    <!-- FAQ -->
    <section id="faq">
    <div class="faq-item" data-aos="fade-up" >
    <h2>1. How many members are required in a team?</h2>
    <p>Each team must consist of exactly 6 members.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>2. Can all team members be from the same department?</h2>
    <p>No, teams must include members from at least two different departments. AI&DS, CSE, and IT are considered a single department, so you need at least one member from a different department than the others.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>3. What if our team has more male members?</h2>
    <p>If your team primarily consists of male members, you must include at least 2 female members.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>4. What if our team has more female members?</h2>
    <p>If your team primarily consists of female members, you must include at least 2 male members.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>5. Can we change our team composition after registration?</h2>
    <p>No, once a team is registered, no changes to the team composition are allowed.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>6. How do we register our team?</h2>
    <p>Your team must register with a unique team name and provide details of each member, including their name, department, and year of study. You also need to nominate a team leader.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>7. Is there a registration fee?</h2>
    <p>Yes, a registration fee of ₹500 per member is required.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>8. Can we participate in both Software and Hardware editions of the hackathon?</h2>
    <p>No, each team can participate in only one edition of the hackathon, either Software or Hardware.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>9. How do we select a problem statement?</h2>
    <p>Teams must select and work on one problem statement for the duration of the hackathon. Each problem statement is limited to a maximum of 3 teams, and they are assigned on a first-come, first-served basis.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>10. What happens if our team does not follow the team composition rules?</h2>
    <p>Teams that do not adhere to the team composition rules or attempt unauthorized changes will be disqualified.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>11. Can mentors guide more than one team?</h2>
    <p>Yes, each mentor can guide a maximum of two teams.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>12. What are the consequences of plagiarism or unethical behavior?</h2>
    <p>Plagiarism or any form of unethical behavior will lead to immediate disqualification.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>13. How should teams manage their work?</h2>
    <p>Teams are responsible for managing their internal communication and task distribution. All members should contribute equally to the project.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>14. What is expected in terms of behavior during the hackathon?</h2>
    <p>All participants must maintain a respectful and collaborative environment throughout the hackathon.</p>
</div>

<div class="faq-item" data-aos="fade-up" >
    <h2>15. How many problem statements can a team work on?</h2>
    <p>Each team can work on only one problem statement for the duration of the hackathon.</p>
</div>

        </section>
        </div>
        
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
<script>
  VANTA.WAVES('#my-background')
</script>

  
<script src="./js/parti.js"></script>

</body>
</html>
