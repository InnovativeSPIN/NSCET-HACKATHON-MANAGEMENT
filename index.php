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
        document.addEventListener("DOMContentLoaded",()=>{
            const navicon=document.querySelector('.nav-icon')
            const navbar=document.querySelector('.frame__demos')
            navicon.addEventListener('click',()=>{
                 if(navbar.style.display=='none'){
                    navbar.style.display='flex'
                 }
                 else{
                    navbar.style.display='none'
                 }
            })
        })

    </script>
        <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> 
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

    
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
<!-- Navbar Start
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="index.html" class="navbar-brand    ">
                <img class="logonscet" src="img/nscetlogo.png" alt="NSCET Logo" width="80px">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Hackathon</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="index.html#process-timeline" class="dropdown-item">Hackathon Process Flow</a>
                            <a href="index.html#themes-section" class="dropdown-item">Hackathon Themes</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Guidelines</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="#idea-ppt.html" class="dropdown-item">Idea PPT</a>
                            <a href="#internal-hackathon-process.html" class="dropdown-item">Hackathon Process</a>
                            <a href="img/Rules%20&%20Regulations%20for%20Hackathon.pdf" class="dropdown-item">Hackathon Guidelines</a>
                        </div>
                    </div>
                    <a href="Problem_Statements.html" class="nav-item nav-link">Problem Statements</a>
                    <a href="faq.html" class="nav-item nav-link">FAQs</a>
                    <a href="Project_Implementation.html" class="nav-item nav-link">Project Implementation</a>
                    <a href="Register.html" class="nav-item nav-link">Hackathon Register</a>
                </div>
            </div>
        </nav>
    </div>  
</div> -->
<!-- Navbar End -->

    <!-- Hero Start -->
    <!-- <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <a href="img/poster.jpeg" class="btn-custom">Hack 2024</a>
          
                    <h1 class="display-4 text-white mb-4 animated slideInRight">NSCET Hackathon 2024</h1>
                    <p class="text-white mb-4 animated slideInRight">Join us for an exhilarating journey of innovation and creativity at the NSCET Hackathon 2024! This event is designed to challenge your problem-solving skills and push the boundaries of technology. Whether you're a seasoned coder or just starting, there's a place for you to shine. Get ready to collaborate, compete, and create solutions that can make a real impact.</p>
                    <a href="Problem_Statements.html" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">
                        Problem Statement</a>
                    <a href="Register.html" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"> Register</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="">
                </div>
            </div>
        </div>
    </div>  -->
    <!-- Hero End -->

     <!-- Main section -->
      <div class="demo-1">
     <main>
        <div class="frame">
            <div class="frame__title"> 
                <img class="logonscet" src="img/nscetlogo.png" alt="nscetLogo" >
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
                <span class="frame__demos-item">Home</span>
                <a class="frame__demos-item" href="">About</a>
                <a class="frame__demos-item" href="rules_and_regulations.php">Rules & Guidelines</a>
                <a class="frame__demos-item" href="problem_statements.php">Problem Statements</a>                <a class="frame__demos-item" href="">FAQs</a>
                <a class="frame__demos-item" href="">Project Implementation</a>

                <div class="up">
                <div class="new">
                    <div class="new1">
                        <a class="frame__demos-item vutton-custine" href="">Register</a>
                    </div>
                </div>
            </div>
                    </nav>
        </div>
        <div class="content">
            <h2><i>N S C E T</i> <i>H</i>ackathon</h2>
            <p>A 36 Hours Tech MARATHON</p>
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
                NSCET HACKTHON 2024 Problem Statements are live
            </a>
        </marquee>
    </div>

    <div class="animation">
        
    </div>

<!-- WHAT IS NSCET HACKATHON 2024? Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">WHAT IS NSCET HACKATHON 2024?</div>
                <h1 class="mb-4">NSCET Hackathon 2024</h1>
                <p class="mb-4">NSCET Hackathon 2024 is a premier event organized by Nadar Saraswathi College of Engineering and Technology (NSECT) aimed at fostering innovation and creativity among students. This hackathon provides a dynamic platform for participants to tackle real-world challenges and develop practical solutions. By encouraging critical thinking and collaborative problem-solving, NSCET Hackathon 2024 seeks to bridge the gap between theoretical knowledge and practical application.</p>
                <p class="mb-4">Since its inception, NSCET Hackathon has become a significant event for showcasing the skills of engineering students from NSECT. Each edition builds on the previous one, refining its approach and expanding its impact. The hackathon not only allows students to demonstrate their abilities but also fosters collaboration with industry experts, academic professionals, and other stakeholders.</p>
            </div>
        </div>
    </div>
</div>
<!-- WHAT IS NSCET HACKATHON 2024? End -->


   <!-- Themes Slider Section Start -->
   <section id="themes-section">
    <div class="text-center mb-5">
        <h1 class="mb-3">THEMES</h1>
        <p>No problem is too big... No idea is too small</p>
    </div>
   <div class="slider-container">
    <div class="slider">
        <div class="slider-item">
            <img src="img/icon_communication.png" alt="Smart Automation" title="">
            <h3>Smart Automation</h3>
            <p>Ideas focused on the intelligent use of resources for transforming and advancements of technology with combining artificial intelligence to explore more various sources and get valuable insights.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_sport.png" alt="Fitness & Sports" title="">
            <h3>Fitness & Sports</h3>
            <p>Ideas that can boost fitness activities and assist in keeping fit.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_heritage.png" alt="Heritage & Culture" title="">
            <h3>Heritage & Culture</h3>
            <p>Ideas that showcase the rich cultural heritage and traditions of India.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_healthcare.png" alt="MedTech/BioTech/HealthTech" title="">
            <h3>MedTech/BioTech/HealthTech</h3>
            <p>Cutting-edge technology in these sectors continues to be in demand. Recent shifts in healthcare trends, growing populations also present an array of opportunities for innovation.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_agriculture.png" alt="Agriculture, FoodTech & Rural Development" title="">
            <h3>Agriculture, FoodTech & Rural Development</h3>
            <p>Developing solutions, keeping in mind the need to enhance the primary sector of India - Agriculture and to manage and process our agriculture produce.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_automobiles.png" alt="Smart Vehicles" title="">
            <h3>Smart Vehicles</h3>
            <p>Creating intelligent devices to improve commutation sector.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_agriculture.png" alt="Transportation & Logistics" title="">
            <h3>Transportation & Logistics</h3>
            <p>Submit your ideas to address the growing pressures on the city’s resources, transport networks, and logistic infrastructure.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_drone.png" alt="Robotics and Drones" title="">
            <h3>Robotics and Drones</h3>
            <p>There is a need to design drones and robots that can solve some of the pressing challenges of India such as handling medical emergencies, search and rescue operations, etc.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_waste.png" alt="Clean & Green Technology" title="">
            <h3>Clean & Green Technology</h3>
            <p>Solutions could be in the form of waste segregation, disposal, and improve sanitization system.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_tourism.png" alt="Tourism" title="">
            <h3>Tourism</h3>
            <p>A solution/idea that can boost the current situation of the tourism industries including hotels, travel and others.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_renewable.png" alt="Renewable/Sustainable Energy" title="">
            <h3>Renewable/Sustainable Energy</h3>
            <p>Innovative ideas that help manage and generate renewable/sustainable sources more efficiently.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_security.png" alt="Blockchain & Cybersecurity" title="">
            <h3>Blockchain & Cybersecurity</h3>
            <p>Provide ideas in a decentralized and distributed ledger technology used to store digital information that powers cryptocurrencies and NFTs and can radically change multiple sectors.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_education.png" alt="Smart Education" title="">
            <h3>Smart Education</h3>
            <p>Smart education, a concept that describes learning in the digital age. It enables learners to learn more effectively, efficiently, flexibly, and comfortably.</p>
        </div>
        <div class="slider-item">
            <img src="img/disaster-management.png" alt="Disaster Management" title="">
            <h3>Disaster Management</h3>
            <p>Disaster management includes ideas related to risk mitigation, planning, and management before, after, or during a disaster.</p>
        </div>
        <div class="slider-item">
            <img src="img/toys-theme.png" alt="Toys and Games" title="">
            <h3>Toys and Games</h3>
            <p>Challenge your creative mind to conceptualize and develop unique toys and games based on our civilization, history, and culture, etc.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_education.png" alt="Miscellaneous" title="">
            <h3>Miscellaneous</h3>
            <p>Technology ideas in tertiary sectors like hospitality, financial services, entertainment, and retail.</p>
        </div>
        <div class="slider-item">
            <img src="img/icon_drone.png" alt="Space Technology" title="">
            <h3>Space Technology</h3>
            <p>Space technology refers to the application of engineering principles to the design, development, manufacture, and operation of devices and systems for space travel and exploration.</p>
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
                <img src="img/flow-chart.png" alt="Nscet hackathon Process Flow and Timeline" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>
<!-- Process Flow and Timeline Section End -->



<!-- Why Hackathons are Important Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="mb-4">
                <img src="img/important.png" alt="Important Logo" class="heading-logo">
                Why Hackathons are Important
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-box">
                    <img src="img/inovative-solution-1.png" alt="inovative-solution" class="heading-logo">
                    <h3 class="feature-title">Innovative Solutions</h3>
                    <p>Hackathons offer cost-effective and creative solutions to complex problems, leveraging diverse perspectives and cutting-edge technologies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-box">
                    <img src="img/collaboration.png" alt="recog-visiblity-1" class="heading-logo">
                    <h3 class="feature-title">Focusing on collaboration</h3>
                    <p>Participating in hackathons fosters collaboration that contributes to nation-building and enhances your company's brand visibility among top talent and premier institutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-box">
                    <img src="img/Thinking.png" alt="out-of-box-solution-1" class="heading-logo">
                    <h3 class="feature-title">Thinking Beyond Boundaries</h3>
                    <p>Elevate your company's presence by gaining national recognition and visibility across key institutions and networks in India, positioning yourself as a leader in innovative thinking and impactful solutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-box">
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
                <div class="committee-member">
                    <img src="img/Principal-photo.jpg" alt="Dr. C. Mathalai Sundaram" class="img-fluid">
                    <h5>Dr. C. Mathalai Sundaram</h5>
                    <p>Principal, NSCET</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="committee-member">
                    <img src="img/mathavan.jpg" alt="Mathavan" class="img-fluid">
                    <h5>Mr.N.MATHAVAN</h5>
                    <p>Vice Principal,NSCET</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="committee-member">
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
                <div class="logo-wrapper">
                    <img class="img-fluid logo-img" src="img/nscetlogo.png" alt="NSCET Logo" width="380px">
                </div>
                <!-- TMHNU Logo -->
                <div class="logo-wrapper">
                    <img class="img-fluid logo-img" src="img/tmhnu.png" alt="TMHNU Logo" width="380px">
                </div>
            </div>
        </div>
    </div>
</div>



<footer style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <!-- Follow Us Section -->
            <div class="col-md-6">
                <div class="follow-box">
                    <h3>Follow Us</h3>
                    <ul class="follow-box-copyright">
                        <li>
                            <a href="https://www.facebook.com/nscetofficial" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#3b5998" d="M22 12c0-5.522-4.477-10-10-10s-10 4.478-10 10c0 4.991 3.657 9.128 8.438 9.878v-6.988h-2.54v-2.89h2.54v-2.19c0-2.505 1.492-3.89 3.777-3.89 1.095 0 2.24.195 2.24.195v2.461h-1.262c-1.243 0-1.63.774-1.63 1.565v1.859h2.773l-.443 2.89h-2.33v6.988c4.781-.75 8.438-4.887 8.438-9.878z"/>
                                </svg>
                                
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/nscettheni?s=20" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#1da1f2" d="M24 4.557a9.9 9.9 0 01-2.828.775 4.938 4.938 0 002.165-2.723 9.865 9.865 0 01-3.127 1.195 4.924 4.924 0 00-8.384 4.49c-4.086-.204-7.702-2.165-10.126-5.144a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.231-.616v.061a4.924 4.924 0 003.946 4.827 4.935 4.935 0 01-2.224.085 4.927 4.927 0 004.599 3.417 9.867 9.867 0 01-6.1 2.103c-.396 0-.787-.023-1.175-.069a13.963 13.963 0 007.547 2.212c9.056 0 14.002-7.498 14.002-13.986 0-.213-.005-.425-.014-.637a10.013 10.013 0 002.457-2.548l.002-.002z"/>
                                </svg>
                                
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCDquPXiTrHksqrsF66G0cQQ" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FF0000" d="M23.498 6.186a2.972 2.972 0 00-2.094-2.096C19.859 3.596 12 3.596 12 3.596s-7.86 0-9.404.494a2.972 2.972 0 00-2.094 2.096c-.496 1.547-.496 4.774-.496 4.774s0 3.227.496 4.774a2.972 2.972 0 002.094 2.096c1.544.494 9.404.494 9.404.494s7.859 0 9.404-.494a2.972 2.972 0 002.094-2.096c.496-1.547.496-4.774.496-4.774s0-3.227-.496-4.774zM9.997 15.569v-6.164l6.421 3.083-6.421 3.081z"/>
                                </svg>
                                
                            </a>
                        </li>
                    </ul>
                    
                    <p style="margin-top: 15px;"></p>
                </div>
            </div>

            <!-- Contact Us Section -->
            <div class="col-md-6">
                <div class="follow-box flo-box">
                    <h3>Contact Us</h3>
                    <ul class="follow-box-contact">
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+91 4546 263900">+91 4546 263900</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:principal@nscet.org">principal@nscet.org</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



<div class="copyright container" style="display: flex;justify-content: space-between;">
    <div style="filter: drop-shadow(0px 0px 30px rgba(255, 255, 255, 0.7));">
        <img width="100px" src="https://nscet.org/waves23/public/images/logos/ispin-logo.png" alt="" srcset="">
    </div>
    <div class="container"  style="text-align: center;">
        <p>
            Copyright &copy;
            <!-- <script data-cfasync="false"
                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
            <script>
                document.write(new Date().getFullYear());
            </script>
            All rights reserved. Design & Developed with by,
            <br />
            <span style="color: tomato;">Innovative Software Product Industry of NSCET </span>
            <br />
        </p>
    </div>
    <div style="filter: drop-shadow(0px 0px 30px rgba(255, 255, 255, 0.7));">
        <img width="150px" src="https://nscet.org/waves23/public/images/logos/clg-logo.png" alt="" srcset="">
    </div>
</div>

</footer>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


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
    
</body>

</html>