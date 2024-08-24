<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NSCET HACKATHON 2024</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="generator" content="Geany 1.37.1" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ftj8drh.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">   
    <link rel="stylesheet" href="./css/base.css">

     
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <script>
        
    </script>
        <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> 
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

       <!-- AOS -->
  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- slider js lib-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script>
        
        document.addEventListener("DOMContentLoaded", () => {
    let hacktext = document.querySelector("#hack-text");
    let texts = "ackathon";
    let index = 0;

    function animateText() {
        if (index < texts.length) {
            hacktext.textContent += texts[index];
            index++;
            setTimeout(animateText, 300); // Adjust the time interval if needed
        }
    }

    animateText(); // Start the animation
});

    </script>

</head>


<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


     <!-- Main section -->
      <div class="demo-1">
     <main>
        <?php include('./resources/header.php') ?>
        <div class="content">
        <div class="inner-content">
        <h2><i>N S C E T</i> </h2><br>
        <h2><i>H</i><span id="hack-text"></span></h2>
        </div>
        <div class="tag-line">
        <p>A 36 Hours Tech MARATHON</p>
        </div>

    </div>
        <!-- <div class="robo-content" id="model-container">
        <model-viewer src="./robo/scene.gltf" alt="A 3D model of a car" shadow-intensity="1"   disable-zoom  camera-controls auto-rotate   camera-orbit="4000deg  " style=" height: 80%;">
        </model-viewer>
        </div> -->
    </main>
    <div class="cursor">
        <div class="cursor__inner">
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="gooey">
                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="3.2" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -7" result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                </filter>
            </defs>
        </svg>
    </div>
</div>
    <!-- Main End -->

    

    
    <div class="scroll-container ">
        <marquee>
            <a href="Problem_Statements.html" style="text-decoration: none; color: inherit;">
                <img class="img_scroll" src="img/newstar.gif" alt="Announcement"> 
                "NSCET - HACKATHON 2024 Problem Statements are Live!"
            </a>
        </marquee>
    </div>

    <div class="animation">
        
    </div>

<!-- WHAT IS NSCET HACKATHON 2024? Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12  what-hack">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3 k" >WHAT IS NSCET HACKATHON 2024?</div>
                <h1 class="mb-4" >NSCET Hackathon 2024</h1>
                <p class="mb-4 text-justify" data-aos="zoom-in-up">NSCET Hackathon 2024 is a premier event organized by Nadar Saraswathi College of Engineering and Technology (NSECT) aimed at fostering innovation and creativity among students. This hackathon provides a dynamic platform for participants to tackle real-world challenges and develop practical solutions. By encouraging critical thinking and collaborative problem-solving, NSCET Hackathon 2024 seeks to bridge the gap between theoretical knowledge and practical application.</p>
                <p class="mb-4 text-justify " data-aos="zoom-in-down" >Since its inception, NSCET Hackathon has become a significant event for showcasing the skills of engineering students from NSECT. Each edition builds on the previous one, refining its approach and expanding its impact. The hackathon not only allows students to demonstrate their abilities but also fosters collaboration with industry experts, academic professionals, and other stakeholders.</p>
            </div>
        </div>
    </div>
</div>
<!-- WHAT IS NSCET HACKATHON 2024? End -->


   <!-- Themes Slider Section Start -->
   <section id="themes-section">
    <div class="text-center mb-5" data-aos="zoom-in" >
        <h1 class="mb-3">THEMES</h1>
        <p>No problem is too big... No idea is too small</p>
    </div>
   <div class="slider-container" data-aos="zoom-in" >
   <div class="slider">
    <!-- Artificial Intelligence (AI) -->
    <div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_ai.png" alt="Artificial Intelligence (AI)" title="Artificial Intelligence (AI)" class="img-item">
    </div>
    <div class="slider-item-content" >
        <h3>Artificial Intelligence (AI)</h3>
        <p>Innovative applications of AI to enhance automation, data analysis, and decision-making processes in various industries.</p>
    </div>
</div>

<!-- Internet of Things (IoT) -->
<div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_iot.png" alt="Internet of Things (IoT)" title="Internet of Things (IoT)" class="img-item">
    </div>
    <div class="slider-item-content" >
        <h3>Internet of Things (IoT)</h3>
        <p>Ideas for smart devices and systems that connect and communicate over the internet to improve efficiency and data collection.</p>
    </div>
</div>

<!-- Cybersecurity -->
<div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_secure.png" alt="Cybersecurity" title="Cybersecurity">
    </div>
    <div class="slider-item-content" >
        <h3>Cybersecurity</h3>
        <p>Solutions focused on protecting digital information and systems from cyber threats and vulnerabilities.</p>
    </div>
</div>

<!-- Sustainable Energy -->
<div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_renewa.png" alt="Sustainable Energy" title="Sustainable Energy">
    </div>
    <div class="slider-item-content" >
        <h3>Sustainable Energy</h3>
        <p>Innovations in managing and generating renewable energy sources more effectively and efficiently.</p>
    </div>
</div>

<!-- Augmented Reality (AR) -->
<div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_ar.png" alt="Augmented Reality (AR)" title="Augmented Reality (AR)" class="img-item">
    </div>
    <div class="slider-item-content" >
        <h3>Augmented Reality (AR)</h3>
        <p>Applications of AR technology to enhance user experiences by overlaying digital information onto the real world.</p>
    </div>
</div>

<!-- HealthTech -->
<div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_health.png" alt="HealthTech" title="HealthTech" class="img-item">
    </div>
    <div class="slider-item-content" >
        <h3>HealthTech</h3>
        <p>Advancements in technology aimed at improving healthcare delivery, medical research, and patient outcomes.</p>
    </div>
</div>

<!-- Robotics and Automation -->
<div class="slider-item" data-aos="flip-left">
    <div class="slider-item-img">
        <img src="img/icon_robotics.png" alt="Robotics and Automation" title="Robotics and Automation" class="img-item">
    </div>
    <div class="slider-item-content" >
        <h3>Robotics and Automation</h3>
        <p>Designs and ideas for robots and automated systems that streamline processes and solve complex challenges.</p>
    </div>
</div>

</div>



    <button class="slider-btn left-btn">&lt;</button>
    <button class="slider-btn right-btn">&gt;</button>
</div>


<!-- Themes Slider Section End -->

    <!-- About End -->


<!--  Process Flow and Timeline Start -->
<!-- Process Flow and Timeline Section Start -->
<div class="container-fluid bg-light mt-5 py-5 text-center" id="process-timeline">
    <div class="container py-5">
        <h1 class="mb-4">NSCET Hackathon Process Flow and Timeline</h1>
        <div class="row g-5 align-items-center">
            <div class="col-12">
                <!-- <h1 style='text-align:center'>To be Updated !!</h1> -->
                <img src="img/flow-chart.png" alt="Nscet hackathon Process Flow and Timeline" class="img-fluid w-100" data-aos="zoom-in-up">
            </div>
        </div>
    </div>
</div>
<!-- Process Flow and Timeline Section End -->



<!-- Why Hackathons are Important Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="zoom-in-down">
            <h1 class="mb-4">
                <img src="img/important.png" alt="Important Logo" class="heading-logo">
                Why Hackathons are Important
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 mb-4" >
                <div class="feature-box" data-aos="zoom-in-left">
                    <img src="img/inovative-solution-1.png" alt="inovative-solution" class="heading-logo">
                    <h3 class="feature-title">Innovative Solutions</h3>
                    <p>Hackathons offer cost-effective and creative solutions to complex problems, leveraging diverse perspectives and cutting-edge technologies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" >
                <div class="feature-box" data-aos="zoom-in-right">
                    <img src="img/collaboration.png" alt="recog-visiblity-1" class="heading-logo">
                    <h3 class="feature-title">Focusing on collaboration</h3>
                    <p>Participating in hackathons fosters collaboration that contributes to nation-building and enhances your company's brand visibility among top talent and premier institutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" >
                <div class="feature-box" data-aos="zoom-in-left">
                    <img src="img/Thinking.png" alt="out-of-box-solution-1" class="heading-logo">
                    <h3 class="feature-title">Thinking Beyond Boundaries</h3>
                    <p>Elevate your company's presence by gaining national recognition and visibility across key institutions and networks in India, positioning yourself as a leader in innovative thinking and impactful solutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" >
                <div class="feature-box" data-aos="zoom-in-right">
                    <img src="img/out-of-box-solution-1.png" alt="out-of-box-solution-1" class="heading-logo">
                    <h3 class="feature-title">Out-of-the-Box Solutions</h3>
                    <p>Engage with talented youngsters who provide innovative and unconventional solutions to pressing issues.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Hackathons are Important End -->

<!-- Organizing Committee Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="mb-4">Organizing Committee</h1>
        </div>
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="committee-member" data-aos="flip-left"> 
                    <img src="img/Principal-photo.jpg" alt="Dr. C. Mathalai Sundaram" class="img-fluid">
                    <h5>Dr. C. Mathalai Sundaram</h5>
                    <p>Principal, NSCET</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4" >
                <div class="committee-member" data-aos="flip-right">
                    <img src="img/mathavan.jpg" alt="Mathavan" class="img-fluid">
                    <h5>Mr.N.MATHAVAN</h5>
                    <p>Vice Principal,NSCET</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4" >
                <div class="committee-member" data-aos="flip-left">
                    <img src="img/Sathya.jpg" alt="Sathya" class="img-fluid">
                    <h5>Dr.M.Sathya</h5>
                    <p>Vice Principal,NSCET</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Organizing Committee End -->

<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-4">Our Organisers</h1>
        </div>
            <div class="logo-section">
                <!-- NSCET Logo -->
                <div class="logo-wrapper" data-aos="zoom-in-down">
                    <img class="img-fluid logo-img" src="img/nscetlogo.png" alt="NSCET Logo" width="380px">
                </div>
                <!-- TMHNU Logo -->
                <div class="logo-wrapper" data-aos="zoom-in-up">
                    <img class="img-fluid logo-img" src="img/tmhnu.png" alt="TMHNU Logo" width="380px">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("./resources/footer.php") ?>


    <!-- Back to Top -->
    <a href="" class=" back-to-top pt-2" ><img src="./img/rocket.png" alt="" width="120px"></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/gsap.min.js"></script>
		<script type="module" src="js/index.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({
        duration: 800,
    })
  </script>
   <script>
        const textElement = document.getElementById('hackathon-text');
        const text = textElement.textContent;
        textElement.textContent = ''; // Clear the initial text

        function revealText(element, text) {
            element.classList.remove('hidden'); // Show the element
            let index = 0;

            function showNextLetter() {
                if (index < text.length) {
                    element.textContent += text[index];
                    index++;
                    setTimeout(showNextLetter, 200); // Adjust the delay as needed
                }
            }

            showNextLetter();
        }

        revealText(textElement, text);
    </script>

</body>

</html>