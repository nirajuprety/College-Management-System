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

<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission form</title>
    <link rel="stylesheet" href="css/admission.css">
    <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet">

    <script src="js/admission.js"></script>

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
                        <span><li><a href="whyus.php">Why Us</a> </li></span>
                        <li><a href="about.php">About Us</a> </li>
                        <li><a href="admission.php">Admission</a> </li>
                        <li><a href="faculties.html">Faculty</a> </li>
                        <li><a href="gallery.html">Gallery</a> </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="rightContainer">
            <form class="formclass" action="admissionprocess.php"  method="POST" onsubmit="return validate()">
                <h3>MEMBERSHIP FORM</h3>


                <table align="center" cellpadding="10">

                    <div class="tableDiv">
                        <tr>
                            <td id="fname">FIRST NAME</td>
                            <td id="fname"><input type="text" name="fname" id="firstname" maxlength="30" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>LAST NAME</td>
                            <td><input type="text" name="lname" maxlength="30" id="lastname" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>DATE OF BIRTH</td>

                            <td>
                                <input type="date" name="date" id="date" required>
                            </td>
                        </tr>

                        <tr>
                            <td>EMAIL ID</td>
                            <td><input type="email" name="email" maxlength="100" id="email" required/></td>
                        </tr>

                        <tr>
                            <td>MOBILE NUMBER</td>
                            <td>
                                <input type="text" name="phone" maxlength="10" id="phone" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>GENDER</td>
                            <td>
                                Male <input type="radio" name="gender" value="Male" /> 
                                Female <input type="radio" name="Gender" value="Female" />
                            </td>
                        </tr>

                        <tr>
                            <td>ADDRESS <br /><br /><br /></td>
                            <td><textarea name="address" rows="4" cols="30" id="address" required></textarea></td>
                        </tr>

                        <tr>
                            <td>District</td>
                            <td><input type="text" name="city" maxlength="30" id="district"/>
                            </td>
                        </tr>


                        <tr>
                            <td>Province </td>
                            <td><select id="Province" name="province">
                            <option value="Province No" id="province" required>Province No</option>
                            
                            <option value="Province 1">1</option>
                            <option value="Province 2">2</option>
                            <option value="Bagmati Province">3</option>
                            <option value="Gandaki Province">4</option>
                            <option value="Lumbini Province">5</option>
                            <option value="Karnali Province">6</option>
                            <option value="Sudhurpaschim Province">7</option>
                        
                        </select>
                            </td>


                        </tr>

                        <tr>
                            <td>COUNTRY</td>
                            <td><input type="text" name="country" value="Nepal"  /></td>
                        </tr>


                        <tr>
                            <td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>

                            <td>
                                <table class="innerTable">

                                    <tr>
                                        <td align="left"><b>S.N</b></td>
                                        <td align="center"><b>Examination</b></td>
                                        <td align="left"><b>Board</b></td>
                                        <td align="left"><b>Percentage</b></td>
                                        <td align="left"><b>Year of Passing</b></td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Class X</td>
                                        <td><input type="text" name="X_board" maxlength="30" required id="Xboard"/></td>
                                        <td><input type="text" name="X_percent" maxlength="30" required id="Xpercent"/></td>
                                        <td><input type="text" name="X_year" maxlength="30" required id="Xyear"/></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Class XI & XII</td>
                                        <td><input type="text" name="XI_board" maxlength="30" required id="XIboard"/></td>
                                        <td><input type="text" name="XI_percent" maxlength="30" required id="XIpercent"/></td>
                                        <td><input type="text" name="XI_year" maxlength="30" required id="XIyear"/></td>
                                    </tr>

                                    <tr>
                                        <td>COURSES<br />APPLIED FOR</td>
                                        <td colspan='5'>
                                            <input type="radio" name="faculty" value="CSIT"> BSc CSIT
                                            <input type="radio" name="faculty" value="BIM"> BIM
                                            <input type="radio" name="faculty" value="BBM"> BBM
                                            <input type="radio" name="faculty" value="BSW"> BSW
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="2" align="center">
                                            <input id="submit" type="submit" value="Submit" name="submit">
                                            <input type="reset" value="Reset" name="reset">
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                    </div>
                </table>

            </form>
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

          
   </footer>

</body>

</html>