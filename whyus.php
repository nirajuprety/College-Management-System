<?php
     session_start(); 
    if(!isset($_SESSION['username'])){
        header('location:login.html');
    }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Us?</title>
    <link rel="stylesheet" href="css/whyUs1.css">

</head>

<body>
    <div class="topContainer">
        <div class="logo">
            <div class="imagediv">
                <a href="whyus.php"> <img src="img/logo.png" alt=""></a>
            </div>
            <div class="clz">
                <h1>College Space</h1>
            </div>
            <div class="logout">
                <a href="logout.php">Log out</a>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="leftContainer">
            <nav>
                <div class="nav-links">
                    <ul>
                        <li><a href="whyus.php">Why Us</a> </li>
                        <li><a href="about.php">About Us</a> </li>
                        <li><a href="admission.php">Admission</a> </li>
                        <li><a href="faculties.html">Faculty</a> </li>
                        <li><a href="gallery.html">Gallery</a> </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="rightContainer">
            <div class="subleft">
                "<strong>College Space</strong> is a modern and practical education based college dedicated to excellence."<br><br> College space affiliated to Tribhuvan University(TU), was established in 1999 AD and promoted by group of experienced and
                dedicated academicians, computer engineers, management professionals and reputed software company of Nepal. The goal of the college is to provide a high-quality education that will enable the students to embrace the challenges of the modern
                world and establish the foundation for a successful time.
            </div>
            <div class="subRight">
                <img src="img/successful-students.jpg">
            </div>
        </div>
    </div>
    <!-- next conatiner -->
    <div class="secConatiner">
        <div class="visionStatement">
            <p class="visonText">
                VISION <strong>STATEMENT</strong>
            </p>
            <p class="subContentofVison">
                The IT and business industry is changing constantly around us. We thrive to develop and nurture IT and business professionals, equipping them with the latest and most up-to-date skills and knowledge.
            </p>
            <div class="gridContainer">
                <div class="grid-item">

                    <img src="img/rocket.png">
                    <p>
                        Our <strong>Vision</strong>
                    </p>
                    <a>
                        To be the most recognised and
prestigious private college in Nepal
                    </a>
                </div>
                <div class="grid-item">
                    <img src="img/bow.png">
                    <p>
                        Our <strong>Mission</strong>
                    </p>
                    <a>
                        To develop
Industry-Ready Graduates
                    </a>
                </div>
                <div class="grid-item">
                    <img src="img/medal_last.png">
                    <p>
                        Our <strong>Winning Culture</strong>
                    </p>
                    <a>
                        Defines the attitudes & behaviours
required of us to make our Vision a reality
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="thirdConatiner">
        <div class="thirdGridContainer">
            <div class="gridItem">
                <p>
                    <Strong>TEACHING<br>MEATHODOLOGY<br></Strong>
                    <a>
                        We adopt a unique and internationally applied teaching approach, L-T-W (Lecture, Tutorial, and Workshop). L-T-W teaching approach equips students with practical experience derived from their learning in the classroom.
                    </a>
                </p>
            </div>
            <div class="gridItem">
                <img src="img/teacher.jpg">
            </div>
            <div class="gridItem">
                <img src="img/meeting.jpg">
            </div>
            <div class="gridItem">
               <p>
               <strong>UPDATED<br>
                    CURRICULUM<br></strong>
                <a>
                        With a holistic approach comprising of various modes of delivery, our academic programme is designed to help students implement their knowledge to practical situations.
                    </a>
               </p>
            </div>
        </div>

    </div>
    <footer>
           
           <div class="footer-leftContainer">
               <div>
                   <img src="img/logo.png">
               </div>
               <span class="footer-CS">
                   <h1>College Space</h1>
               </span>

           </div>
               
           </div>
           <div class="footer-middleContainer">
               <!-- links -->
               <div class="allLinks">
                   <ul>
                   <li> 
                           <a href="whyus.php">Whys Us</a>
                       </li><li> 
                           <a href="about.php">About Us</a>
                       </li><li> 
                           <a href="admission.php">Admission</a>
                       </li><li> 
                           <a href="faculty.html">Faculty</a>
                       </li>
                       <li> 
                           <a href="gallery.html">Gallery</a>
                       </li>
                   </ul>
               </div>
           </div>
           <div class="footer-leftContainer">
               <!-- social media -->
               <div class="icons">
               <div class="mail">
                       <span class="mailIcon">
                           <i class="fa fa-envelope-open"></i>
   
                       </span>
                       <span class="iconContent">
                        collegespace@gmail.com
   
                       </span>
                   </div>
                   <div class="phone">
                       <span class="phoneIcon">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
   
                       </span> +977 981600000
                   </div>
                   <div class="address">
                       <span class="addressIcon">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
   
                       </span> Kathmandu Gaushala
                   </div>
                   <div class="facebooklink">
                       <span class="facebookIcon">
                           <i class="fa fa-facebook-official" aria-hidden="true"></i>
   
                       </span>
                       <a href="https://www.facebook.com/Orchid-International-College-197982470220692">
                           Facebook
                       </a>

                   </div>
                   <div class="linkedinlink">
                       <span class="linkedinIcon">
                           <i class="fa fa-linkedin-square" aria-hidden="true"></i>
   
                       </span> LinkedIn
                   </div>
               </div>


           </div>

          
   </footer>


</body>

</html>