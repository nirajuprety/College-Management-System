<?php
// session is not working
     session_start(); 
    if(!isset($_SESSION['username'])){
        header('location:login.html');
        // include('whyus.php');
    }   
    // else{
    //     header('location:login.html');
    // }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CSIT</title>
    <link rel="stylesheet" href="css/about copy.css">
    <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet">

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
            <div class="top">
                <strong><p>Get in touch with us.</p></strong>
                <span class="sub">We'd love to hear from you! Whether you have a specific enquiry or you just want to receive more information .</span>
            </div>
        </div>

    </div>
    <div class="thirdContainer">
        <div class="lfindus">
            <div class="leftmostContainer">
                <div class="letsConnect">
                    <h1>
                        Let's connect
                    </h1>

                </div>
                <div class="subContent">
                    College Space is here to provide you with more information, answer any inquiry. For any inquiries, please complete the form below and we will endeavor to respond as quickly as possible.
                </div>
                <div class="detailBox">
                    <div class="mail">
                        <span class="mailIcon">
                            <i class="fa fa-envelope-open"></i>
    
                        </span>
                        <span class="iconContent">
                         nirajuprety@gmail.com
    
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
        </div>
        <div class="rfindus">
            <!-- feedback form -->
            <div class="sendusmessage">
                <span class="sendUsMessageText"><h1>Send us Messsage!</h1></span>
                <!-- form for inputing user data -->
                <form class="sendUsMessageForm" action="contactinfo.php" method="POST">
                    <label id="name" name="name">First & Last name<span class="compusaryfield">*</span></label><br>
                    <input type="text" name="name" id="name" require>
                    <div class="phoneAndEmail">
                        <div class="phone">
                            <label id="phone" name="phone">Phone<span class="compusaryfield">*</span></label><br>
                            <input type="text" name="phone" id="phone" require>
                        </div>
                        <div class="email">
                            <label id="email" name="email">Email address<span class="compusaryfield">*</span></label><br>
                            <input type="email" name="email" id="email" require>
                        </div>
                    </div>
                    <div class="messageBox">
                        <label id="messageBox" name="messageBox">Message<span class="compusaryfield">*</span></label><br>
                        <textarea rows="10" cols="60" name="message" require></textarea>
                    </div>
                    <div class="sumbitButton">
                        <input type="submit" name="submit" value="Send Message">

                    </div>

                </form>
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
                       <span class="mailIcon1">
                           <i class="fa fa-envelope-open"></i>
   
                       </span>
                       <span class="iconContent">
                        nirajuprety@gmail.com
   
                       </span>
                   </div>
                   <div class="phone">
                       <span class="phoneIcon1">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
   
                       </span> +977 981600000
                   </div>
                   <div class="address">
                       <span class="addressIcon1">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
   
                       </span> Kathmandu Gaushala
                   </div>
                   <div class="facebooklink">
                       <span class="facebookIcon1">
                           <i class="fa fa-facebook-official" aria-hidden="true"></i>
   
                       </span>
                       <a href="https://www.facebook.com/Orchid-International-College-197982470220692">
                           Facebook
                       </a>

                   </div>
                   <div class="linkedinlink">
                       <span class="linkedinIcon1">
                           <i class="fa fa-linkedin-square" aria-hidden="true"></i>
   
                       </span> LinkedIn
                   </div>
               </div>


           </div>

          
   </footer>

</body>

</html>