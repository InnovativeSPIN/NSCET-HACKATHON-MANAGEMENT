-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2024 at 09:57 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nscet_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `mentoring_teams` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `area_of_interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `problem_statements`
--

CREATE TABLE `problem_statements` (
  `id` int(11) NOT NULL,
  `ps_id` varchar(255) NOT NULL,
  `ps` text NOT NULL,
  `ps_description` varchar(5000) NOT NULL,
  `ps_domain` varchar(255) NOT NULL,
  `ps_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_statements`
--

INSERT INTO `problem_statements` (`id`, `ps_id`, `ps`, `ps_description`, `ps_domain`, `ps_type`) VALUES
(2, 'NH-S01', 'AR-Enhanced E-Commerce Experience', 'Develop an augmented reality (AR) application that enhances the traditional shopping experience by allowing users to virtually try on clothing and accessories in real-time. The application should provide accurate size and fit simulations, showcase a wide range of virtual products, and seamlessly integrate with existing e-commerce platforms.', 'Augmented Reality (AR)', 0),
(3, 'NH-S02', 'Multilingual  AI Bot with Voice Assistant', 'Develop an AI bot with a Voice assistant that listens to end-user questions/queries and replies back with a proper response(S2S) system. The challenge here would be that the end user can speak in any language and the bot should be able to respond in the same language. The AI bot should have a character and a back story (e.g., A rude banker who hesitates to answer the query to the customer or a soft and humble actor who loves to respond to his fans) and should stick to it. The bot should answer only related to its backstory and character.', 'Artificial Intelligence (AI)', 0),
(4, 'NH-S03', 'Microphone Array-Based Direction of Arrival for Gunshot Detection', 'The Army of many developed countries has their own gunshot detector system which would alert the troop about the direction from where gun shot has been fired so that troop can take preventive measure to safeguard their soldiers. The system consists of number of omnidirectional microphones preferably six. The output of microphone will be fed to the analog to digital converter and then this signal is fed to the FPGA . Inside FPGA, each channel will be filtered using Bandpass filter so as to limit the band to approx. 3Khz. After this sound classification and localization algorithm will deduce the direction from where the bullet has been fired and display the result on a Graphical LCD. The expected solution need to be an FPGA based solution with suitable algorithm for classification and localization of sound. The final result will be displayed on Graphic LCD.', 'Signal Processing', 0),
(5, 'NH-S04', 'Utilization of images for monitoring of progress of construction activities for building construction projects', 'The monitoring of physical progress of construction activities requires a technical expert to visit and observe the site. Due to large number of projects in Indian cities, field visits by technical experts for weekly/daily monitoring becomes non-feasible', 'Artificial Intelligence (AI)', 0),
(6, 'NH-S05', 'Software for Detecting and Notifying Malicious Websites', 'A large number of people are using online platforms for meetings and educational purposes.Now when everyone is dependent on the internet there is a high risk of getting into malicious websites which can even lead to loss of important information. To ensure their safety build software that can detect these malicious websites and can notify in time alerts to prevent the loss of important information and enhance online safety.', 'Cybersecurity', 0),
(7, 'NH-S06', 'Free flow of untested and fake seeds', 'The uncontrolled distribution and use of untested and fake seeds in agriculture is a growing concern. These seeds are often sold without proper certification or quality checks, leading to significant agricultural failures, loss of income for farmers, and potential environmental harm. The lack of regulation and awareness among farmers exacerbates the issue, allowing the continued spread of substandard seeds.', 'Smart Agriculture', 0),
(8, 'NH-S07', 'Enhancing Public Health and Hygiene through Smart Toilet Systems', 'Current public restroom facilities lack the technology to monitor and maintain cleanliness effectively. This results in unsanitary conditions, which can lead to the spread of diseases and discomfort for users. Furthermore, there is an untapped potential for using restroom visits as a means to monitor health indicators, which could provide early warnings for various medical conditions.', 'Internet of Things (IoT) & HealthTech', 0),
(9, 'NH-S08', 'Build an Automatic Illegal Solid Waste Dumping Alert system', 'There are many locations where illegal waste is dumoed by citizens.The participants are expected to provide a solution real time tracking and alert systems for illegal waste dumping on the map.', 'Internet of Things (IoT) & Smart City', 0),
(10, 'NH-S09', 'Automated Examination Hall Allocation System', 'In an academic setting, the process of allocating examination halls to students based on their registered numbers is often manual, time-consuming, and prone to errors. This process involves assigning each student to a specific examination hall according to their registration number and ensuring that the information is accessible to the students on the day of the exam. The current manual system can lead to confusion, misplaced students, overcrowding, and inefficiencies. There is a need for an automated system that can generate and display the examination hall plan accurately and efficiently.', 'Smart Education', 0),
(11, 'NH-S10', 'Use of Digital Technology to calculate Water Footprints for different Agricultural Products', 'The water footprint measures the amount of water used to produce each of the goods and services we use. The water footprint helps us understand for what purposes our limited freshwater resources are being consumed. The impact of it depends on where the water is taken from and when, if it comes from a place where water is already scarce, the consequences can be significant and require action. The increase in the amount of non-available water due to pollution and scarce groundwater level has added more water footprints, at the community as well as at the personal levels. An increased · water footprint directly affects the health and future of the citizens. Preventing severe drought in water-stressed areas is only going to be possible if water is used with more care and efficiency, this can be achieved if we have readily available data of water footprints. Hence, by using digital technologies like AI, Big Data, Block chain etc. and computer languages, a user friendly app or website may be developed which can provide the water footprints of different items/ final products we eat by feeding little inputs like name, or just by scanning through camera like Google lens. The app should support local languages; this will ensure the pan India usage and sensitize the people about water footprints of items they use in daily life.', 'Smart Agriculture', 0),
(12, 'NH-S11', 'Real-Time Disaster Information Aggregation Software', 'Disaster response agencies often stuggle to gather timely and specific information about emergencies from various sources. Social media platforms serve as a valuable repository of such data, but manually monitoring and sorting through the vast amount of information is inefficient and resource-intensive. There is a pressing need for a software solution that can efficiently aggregate and categorize specific disaster-related data from social media, news portals, and other open sources. This software would utilize advanced algorithms to sift through the abundance of information and classify it into different categories data would then be presented on a user- friendly dashboard, allowing disaster response agencies to quickly access relevant information and plan their actions accordingly. The software solutions will streamline the process of gathering and categorizing disaster-related data from various soucres, significantly reducing the time required for response efforts. By providing real-time insights and actionable information, the software will enhance the effectiveness of disaster response operations, ultimately saving lives.', 'Disaster Management', 0),
(13, 'NH-S12', 'Smart Competency Diagnostic and Candidate Profile Score Calculator', 'Develop an AI-powered employment platform that offers personalized job matching and skill development. The system should assess job seekers\' competencies through diagnostic tests, recommend suitable job opportunities, and suggest training courses to address skill gaps. It should also provide real-time job market insights, adaptive learning pathways, resume-building tools, and community support. The goal is to enhance job seekers\' employability and skill alignment with market demands.', 'Artificial Intelligence (AI)', 0),
(14, 'NH-S13', 'Annual Report Portal for Educational Institutes', 'Develop a user-friendly portal to streamline the creation of annual reports for educational institutes, consolidating data from various departments into a cohesive, interactive format. The portal should provide secure login and role management, support data import and integration from diverse sources, offer tools for analyzing and visualizing key metrics, automate report generation with customizable templates, and facilitate collaborative editing and feedback. The solution must be intuitive, responsive across devices, and compliant with relevant data privacy regulations.', 'Smart Education', 0),
(15, 'NH-S14', 'Development of an Educational Game (Web and Mobile Based) on Groundwater Conservation and Management', 'Learn while you play is considered the most effecting way of teaching. Internet/mobile based games could be one of the best ways to lure school kids, youth and water enthusiasts to learn the nuances of ground water management. With this backdrop it is proposed to develop an internet/mobile based game that teaches good practices in groundwater conservation in an interactive and fun way. The game should take into account various interventions (artificial recharge, microirrigation, crop diversification) and possible scenarios (drought, surplus rain, contamination etc). The gamer can earn points or coins based on the choices that he (or she) makes. The scores of registered gamers will be stored online and water-smart youths can be identified and certified. The game can be used for training and awareness creation.', 'Smart Resource Conservation', 0),
(16, 'NH-S15', 'Automated Bus Scheduling and Route Management System', 'Develop an automated system for efficient bus scheduling and route management to replace manual methods. The system should handle both linked and unlinked duty scheduling, map existing and new routes, and optimize route planning using algorithms and GIS technologies. Key features include crew assignment management, rest period handling, route visualization, and overlap detection. The goal is to enhance operational efficiency, reduce errors, and improve service reliability.', 'Transportation & Logistics', 0),
(17, 'NH-S16', 'Women Safety Analytics – Protecting Women from Safety Threats', 'Develop real-time threat detection software to enhance women\'s safety through advanced analytics. The system should monitor environments to detect anomalies, such as a lone woman at night or unusual gestures, and generate alerts to prevent potential incidents. Key features include person detection with gender classification, gender distribution analysis, SOS gesture recognition, and identification of high-risk hotspots. The solution aims to improve public safety and support law enforcement in preventing crimes against women.', 'Safety', 0),
(18, 'NH-S17', 'Effective Automated Attendance Management System for a Classroom', 'To design and implement an Automated Attendance Management System that utilizes high-resolution cameras equipped with advanced facial recognition technology. This system should automatically capture and record attendance as students enter the classroom, ensuring accuracy and efficiency. The solution should minimize instructional disruption, provide real-time data, and enhance the security of attendance records. Additionally, it should be user-friendly, seamlessly integrate with existing educational infrastructure, and offer analytics to support academic decision-making.', 'Smart Education', 0),
(19, 'NH-S18', 'Smart Irrigation System for Precision Farming', ' Water scarcity is a major challenge in agriculture, leading to inefficient water use and reduced crop yields. Traditional irrigation methods often result in overuse or underuse of water.Develop a smart irrigation system that utilizes sensors and IoT technology to monitor soil moisture levels and weather conditions. This system will provide real-time data to farmers, enabling them to make informed decisions on irrigation scheduling, thus optimizing water usage and enhancing crop yield. Expected Solution: A smart irrigation module integrated with moisture sensors and a mobile application to provide farmers with timely irrigation alerts and recommendations based on real-time data.', 'Smart Agriculture', 0),
(20, 'NH-S19', 'Automatic Health Monitoring System', ' In present days, the patients belonging to rural and sub-urban communties do not maintain the diagnosis reports for which they frequently go for regular checkups wasting there valuable money. Thus, an automatic report maintaining system is to be developed to avoid repetitive diagnosing of the patients.', 'HealthTech', 0),
(21, 'NH-S20', 'Parsing of Social Media Feeds', 'Develop a tool to automate the parsing of social media data for investigative purposes. The tool should capture and document posts, messages, timelines, friend lists, and account details from platforms like Facebook, Twitter, Instagram, Telegram, WhatsApp, and Google. It should generate screenshots and reports in a structured format to minimize human error and streamline the review process. The solution should be available in both Android and Windows versions to accommodate different access scenarios.', 'Cybersecurity', 0),
(22, 'NH-S21', 'Audio & Video Translate System', ' A large portion of audio & videos are available in English. It consumes large amount of time by the experts in respective languages to convert them into required languages which could have been utilized in developing novel methodologies. The Challenge is to develop a system that can translate audio/videos from English to other languages effectively without any distortions and time consuming process with minimum human involvement.', 'Smart Automation', 0),
(23, 'NH-S22', 'AI-Driven Personalized Learning Platform', 'Traditional education systems often struggle to address the individual learning needs of students due to a one-size-fits-all approach. There is a need for a system that can adapt to each student’s learning style, pace, and progress.', 'Smart Education', 0),
(24, 'NH-S23', 'Deep Learning and Blockchain for Secure Medical Data Sharing', 'Securely sharing medical data between healthcare providers while ensuring patient privacy is challenging due to concerns over data breaches and unauthorized access. Traditional data-sharing methods may not fully address these security and privacy issues.', 'Artificial Intelligence (AI) & Blockchain', 0),
(25, 'NH-S24', 'Digital Learning Management System for Remote Education', 'Remote education can be challenging due to the lack of effective tools for course management, student engagement, and assessment.', 'Artificial Intelligence (AI) & Smart Education', 0),
(26, 'NH-S25', 'Deep Learning and Precision Agriculture for Crop Health Monitoring', 'Farmers face significant challenges in monitoring crop health and managing diseases due to limited resources and the vast scale of agricultural fields. Traditional methods of crop inspection can be labor-intensive and may not detect issues until they are well-developed.', 'Artificial Intelligence (AI) & Smart Agriculture', 0),
(28, 'NH-H01', 'Construction Site Safety', 'Develop an application for monitoring construction site safety using wearable technology and real-time alerts for hazardous conditions.', 'Smart Automation', 1),
(29, 'NH-H02', 'Ensuring Safe Drinking Water through Instant Water Test Kits', 'Current water testing methods are not suitable for rapid, on-site testing, especially in remote or underdeveloped areas. This delay in detecting contaminants can result in prolonged exposure to harmful substances, posing serious health risks to the population. There is a critical need for a quick, reliable, and user-friendly solution to test water quality instantly.', 'HealthTech', 1),
(30, 'NH-H03', 'Crack Identification and Remediation Tool for Concrete Structures', 'Concrete cracking is a prevalent issue in the construction industry, often leading to compromised structural integrity, increased maintenance costs, and reduced lifespan of structures. The challenge lies not only in the occurrence of cracks but also in accurately identifying the type of crack, understanding its underlying cause, and implementing the most effective repair strategy. \n', 'Smart Automation', 1),
(31, 'NH-H04', 'Fire resistant construction materials', 'To maintain the bonding between construction materials under high temperature or impact load.', 'Disaster Management', 1),
(32, 'NH-H05', 'Automatic Energy Saving System', 'Electricity is the critical need for progress of\r\nthe livelihood. ln many Indian cities, the maintenance of street lights has become\r\na challenging and inefficient process due to the lack of a centralized monitoring\r\nsystem. ldentifying faults, such as non- functioning lights, current leakage and\r\ncable breakage, relies on citizen grievances, leading to delays, increased costs,\r\nand safety concerns. Hence, an automatic system to be developed in searching for\r\nfaults, diagnosing issues, and fixing them.', 'Sustainable Energy', 1),
(33, 'NH-H06', 'Solar Efficient System ', 'In recent days, energy generation using solar panels are in high demand, due to lack of proper maintanance of the solar system energy generation is degrading to the levels. Hence, an automatic system to be developed for saving the solar energy.', 'Sustainable Energy', 1),
(34, 'NH-H07', 'Development of a Clay Extruder for 3D Printing', 'A fully functional clay extruder that can be integrated into a 3D printer, enabling the creation of complex ceramic objects with high precision and consistency. The extruder should be easy to use, maintain, and compatible with a variety of clay types.', 'Smart Automation', 1),
(35, 'NH-H08', 'Create communication model or temporary network structure for indecisiveness area', 'The goal is to develop a system that enhances communication flow and decision-making efficiency within an indecisive context. This may involve creating a model that identifies key communication nodes, information pathways, and decision checkpoints. Alternatively, a temporary network structure could be designed to connect various stakeholders and resources in a way that supports real-time collaboration and feedback.', 'Smart City', 1),
(36, 'NH-H09', 'Field Marking by Drone', 'Footing marking is more complicated process of construction, as it need to be Precious. It is difficult to maintain accuracy in field marking in manual marking. Incorrect marking will lead to major mistake in further stages', 'Robotics and Drones', 1),
(37, 'NH-H10', 'Conveyor Belt Fault Detection', 'In a industry, the long cable belt conveyor is supported on pulleys. A steel rope runs over these pulleys while the belt sits over\r\nthem. The conveyor is operated by pulling the steel ropes with a drive motor. The rope gets elongated due to pulling force leading to breakage of its strands. Similarly, the belt also gets worn out causing stoppage of conveyor operation unpredictably. In order to overcome this, we require a solution to predit the condition of belt well in advance.', 'Smart Automation', 1),
(38, 'NH-H11', 'Smart Irrigation System for Precision Farming', 'Water scarcity is a major challenge in agriculture, leading to inefficient water use and reduced crop yields. Traditional irrigation methods often result in overuse or underuse of water. Develop a smart irrigation system that utilizes sensors and IoT technology to monitor soil moisture levels and weather conditions. This system will provide real-time data to farmers, enabling them to make informed decisions on irrigation scheduling, thus optimizing water usage and enhancing crop yield. A smart irrigation module integrated with moisture sensors and a mobile application to provide farmers with timely irrigation alerts and recommendations based on real-time data.', 'Smart Resource Conservation', 1),
(39, 'NH-H12', 'Effective management of construction and demolition (C&D) waste', 'C & D becomes unavoidable material in construction industry. Dumping or storing all C & D will pollute environment.\n', 'Waste Management', 1),
(40, 'NH-H13', 'Water Quality Monitoring and Treatment System', 'Design a real-time water quality monitoring system that uses hardware such as IoT-enabled sensors to continuously measure parameters like pH, turbidity, chemical contamination, and bacterial levels in water supplies. The software should analyze this data in real-time and automatically control treatment systems to maintain safe water quality. It should also provide alerts to water authorities and the public if contaminants are detected, along with recommendations for immediate action.', 'Smart Resource Conservation', 1),
(41, 'NH-H14', 'Value added products from Agri waste through waste to wealth Approach', 'Burning crop residue depletes the soil\'s organic matter, microorganisms in the upper layer, nutrients, and solubility; it also pollutes the environment and increases the layer of impermeable ash at the field level. Waste management is an urgent issue that needs to be approached from several angles. A single organization or location cannot handle all kinds of agricultural wastes. There are variations in the volume and quantity of garbage generated for each type.', 'Waste Management', 1),
(42, 'NH-H15', 'Fitness Square', 'The problem involves the untapped potential of harnessing kinetic energy generated during gym workouts for power generation. The challenge is to design a non-intrusive, efficient system that captures and converts mechanical energy from various exercise machines into electrical energy. The solution should be scalable, cost-effective, and encourage widespread adoption in fitness centers. Successful implementation not only contributes to sustainable energy initiatives but also revolutionizes the fitness industry by promoting environmentally conscious practices.', 'Smart Automation', 1),
(43, 'NH-H16', 'IoT Based Water Heater', 'Now a days Most of the people are using Electric Water Heater. In some occasions few people lost their life because of touching the water when the power supply is on. So to prevent this come up with latest technology to overcome the above problem.', 'Smart Automation', 1),
(44, 'NH-H17', 'Industry Dust Collector', 'In recent days, most of the people are suffering from asthma and other health issues due to air polution exclusively bacause of the dust coming out from the industries. An automatic system is to be developed to address this issue which can do air purification.', 'Smart City', 1),
(45, 'NH-H18', 'Smart TransBot System', 'There is a packaging box manufacturing company in Hyderabad. From the production unit to the storage area, the workers need to transport them. However, the management is searching for a bot that can pick up and place the 15 cm by 10 cm by 10 cm packing box on the conveyor.', 'Robotics and Automation', 1),
(46, 'NH-H19', 'Shortest Path Finding Bot', ' The probe which in most cases is referred to as a Bot, that follows the shortest path as specified in the arena which consumes less amount of time. There is a need to build a manually controlled, wireless Bot which can accommodate in 20cm, 20cm and 20cm dimensional box meeting the requirements specified. ', 'Robotics and Automation', 1),
(47, 'NH-H20', 'Development of a non-electrical device for tracking the movement of the sun for movement of the solar panels, increasing their efficiency.', 'Solar panels are most efficient when they are directly facing the sun. However, the sun’s position changes throughout the day and across seasons, which can reduce the amount of sunlight that fixed solar panels receive. Description: Traditional solar tracking systems often rely on electrical components and motors, which can be costly and require maintenance. A non-electrical tracking system offers a sustainable and low-maintenance alternative to enhance the efficiency of solar panels. Expected Solution: The problem statement is to develop a cost-effective, non-electrical device that can accurately track the sun’s movement and adjust the orientation of solar panels to maintain optimal exposure. This device should be reliable, easy to install, and capable of operating without external power sources.', 'Sustainable Energy', 1),
(48, 'NH-H21', 'GOBARdhan - Simple control systems and/or instrumentation for small biogas plants that will allow better process control leading to effective digestion and improved yield of biogas.', 'In Bio slurry production at village level, we witnessed few challenges and issues accociated with handling, utilization and some common issues with bio-slurry are Pathogen Contamination Accumulation, Anaerobic, Conditions, Transport and Storage. Expected Solution: a. Simple control systems and/or instrumentation for small biogas plants that will allow better process control leading to effective digestion and improved yield of biogas b. Low-cost kits to measure nutrient content of F/L OM c. Low-Cost enrichment models for F/L OM (Fermented/Liquid Organic Manure)', 'Sustainable Energy', 1),
(49, 'NH-H22', 'Developing writing pen and writing pad for children with Specific learning disability.', 'Children with Specific Learning Disability (SLD)who faces challenge of writing during their academic life especially during examinations where they need the provisions of a scribe. The purp ose of rehabilitating people with disabilities is to reduce the dependence on other people. In order to achieve this fundamental right to be independent, it is important to develop innovative strategies and solutions to come up with some hardware tools like writing penand writing pad for children with specific learning difficulties so that their academic life does not become a hurdle in realising their full potential. The innovative technology or solution should be cost effective and easily usable so that children with all strata can afford to use this. Detailed Description: In India, the Central Board of Secondary Education (CBSE) and other educational boards provide several relaxations for students with learning disabilities (SLD) during examinations such as having a scribe during exams. A scribe writes answers as dictated by the child. The scribe must be from a lower grade than the child appearing for the exam. CBSE provides remuneration for the scribe, and you can also apply for your own scribe if needed. If a child has difficulty reading, they are entitled to a reader who reads (not explains) the questions to the child. However, a child can have either a reader or a scribe, not both. CBSE grants additional time to students with disabilities. For example: 60 extra minutes for a three-hour exam 40 extra minutes for a two-hour exam 30 extra minutes for a one-and-a-half-hour exam. Since January 2020, CBSE allows the use of calculators for children with dyscalculia. The board provides these calculators.Theseaccommodations aim to create a level playing field for students with learning disabilities, ensuring they can demonstrate their knowledge effectively during exams. However it has some disadvantages as well like some students may become overly reliant on scribes, affecting their independent writing skills.Students may feel uncomfortable dictating their answers to someone else. Availability of trained scribes can be a challenge, especially during exams. The quality of scribing may vary, impacting the accuracy of the student’s responses. Also some of the people are misusing the benefits by training or teaching the scribe rather than the child with SLD to write the exam and score good marks. Expected Solutions: To develop innovative strategies and solutions to come up with some hardware tools like writing pen and writing pad for children with specific learning difficulties so that their academic life does not become a hurdle in realising their full potential. The innovative technology or solution should be cost effective and easily usable so that children with all strata can afford to use this.', 'Smart Education', 1),
(50, 'NH-H23', 'Al based acoustic wave monitoring of rail defects like cracks, fracture and prediction for rail wear, quality along with other parameter.', 'Rails are used for the movement of trains and if there are major defects in the track then accident may happen or riding comfort in train may be compromised. Rail defects such as cracks, fractures, and wear are critical issues in the railway industry, leading to safety hazards, operational disruptions, and increased maintenance costs. Early detection and prediction of these defects are essential for ensuring the reliability and safety of railway infrastructure. These defects are to be noticed while train is moving. Description: The problem statement aims to develop an Al-based acoustic wave monitoring system for the early detection of rail defects and prediction of wear and quality parameters. The system will utilize acoustic waves to transmit to the rail tracks and its pattern will be monitored. The system will be capable of distinguishing between normal operating conditions and the presence of defects or abnormal wear patterns. Expected Solution: The proposed solution will involve the development of a comprehensive acoustic wave monitoring system for railway tracks. This system will consist of transmission side and reception side. Reception side sensors would be capable of predicting the track structure, quality of the rail and distance from a central fixed point.', 'Smart Automation', 1),
(51, 'NH-H24', 'Development of Tyre Maintenance and Operation App, including fitment of necessary IIoT related hardware in Dumpers', 'Tyre cost is one of the most important O&M cost in dumpers. In high capacity dumpers of CIL, the tyres are imported ones, and cost of such tyre is more than Rs. 25.00 lakhs each. Two aspects are equally crucial for tyre management in a mine – The first is the proper assessment of TKPH, and the second is proper maintenance of tyre pressure. Besides these two aspects, proper tyre performance analysis is also important. TKPH: Tonne-Kilometer-Per-Hour It is indicative of how much average load is carried by an individual tyre, for a given average speed condition, during an entire shift of operation. TKPH = (Mean load on tyre in tonne) x (AWSS in km/hour) Where, Mean Load is the average load in empty condition and loaded condition, and AWSS is the Average Speed during the Work Shift. Assessing the correct TKPH requirement by the user for a particular mining condition is the most important task. The user has to seek a particular TKPH tyre from the manufacturer. Manufacturer accordingly manufactures and supplies the same TKPH tyre to the user, by using suitable tread pattern and tyre compound in its factory. More is the TKPH, more heat-resistance the tyre will be. But if the TKPH is increased just to ensure heat-resistance, then it adversely affects the cut-resistance properties of the tyre. If operating TKPH is very very less than the designed TKPH of tyres, there will not be heat- failures, but cut-failures will increase. So, there should be a balance between the heat-resistance and cut-resistance properties, and proper assessment of TKPH is a must. Actions required: The payload monitoring system has already been installed in CIL’s dumpers, and the payload as well as operating speed per shift is being continuously recorded in the Vehicle’s Productivity and Health Monitoring System. By using suitable IoT application and suitable app, the payload and speed data may be directly transferred and analysed through the suitable app, so that correct value of TKPH assessment may be made directly through the mobile app. This assessed TKPH will be very helpful in procurement of suitable tyres for a particular geo mining condition. Tyre Pressure Proper tyre pressure is equally important for tyre life. Incorrect tyre pressure adversely affects the fuel economy, as well as the performance of other vital systems of the vehicle, apart from creating safety issues also. In a big mine, regular checking of tyre pressure for all the dumpers remain a daunting task, and involves lot of time and manpower resources. Expected Solution: Suitable Tyre Pressure Sensors along with data transfer mechanism need to be installed in the dumpers, which can be used in real-time capturing of tyre pressure of all tyres fitted in the dumper. So, first of all necessary IIoT system along with hardware need to be fitted in the dumper. Next, appropriate application may be developed, to transfer the real-time tyre pressure data through the Mobile App. The real-time tyre pressure data may also be simultaneously displayed to the operator with suitable alarm system in case of low tyre pressure. In case of low tyre pressure, suitable alerts may be incorporated for Mobile App user. If such a system through Mobile App is controlled effectively by Maintenance team, they may not require to check each and every tyre pressure physically, rather they can directly identify the tyres which need immediate attention. This will help in optimum utilization of the tyre maintenance resources, and avoiding unnecessary downtime. Tyre Performance Analysis Apart from the above two aspects of tyres maintenance and operation, the Mobile App may also keep tyre-wise, its fitment position-wise records to properly assess the tyre performance and reasons of failures including premature failures, if any. Such provisioning in the App will automatically compute the individual tyre life obtained in a particular mine; and if linked to costing, it will automatically compute the cost/working hour of tyres. Such analysis will go a long way in improving the tyre performance in CIL.', 'Smart Automation', 1),
(52, 'NH-H25', 'Prediction of Aluminium wire rod physical properties through AI, ML or any modern technique for better productivity and quality control.', 'Auminium wire rod is produced in Wire rod mills of cast house, where an aluminium cast bar of trapezoidal cross section having area 3437 sq. mm is first casted and then further rolled by 15 nos. of stand in series to gradually reduce the cross section to obtain final 9.5 mm diameter rod. Description: The casting parameters that affects the wire rod properties like UTS, Elongation and Conductivity are dependent on chemical composition, casting temp. Cooling water temp. , Casting speed, Cast bar entry temperature at rolling mill, Emulsion temperature and pressure at rolling mill, Emulsion concentration and finally rod quench water pressure. These parameters are dynamic in nature and any deviation on one of the above affects the final rod properties. Expected Solution: Use of AI, ML or any modern technique to analyze those parameters and control them to effectively obtain the final desired parameters of the Wire rod produced.', 'Smart Automation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ps_submission`
--

CREATE TABLE `ps_submission` (
  `id` int(11) NOT NULL,
  `team_id` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `ps_id` varchar(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `mentor_id` varchar(255) NOT NULL,
  `mentor_name` varchar(255) NOT NULL,
  `solution_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_lead` varchar(255) NOT NULL,
  `mentor_id` varchar(255) NOT NULL,
  `problem_statement` varchar(255) NOT NULL,
  `team_members_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `team_members_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `team_members_dept` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_statements`
--
ALTER TABLE `problem_statements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ps_submission`
--
ALTER TABLE `ps_submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem_statements`
--
ALTER TABLE `problem_statements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `ps_submission`
--
ALTER TABLE `ps_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
