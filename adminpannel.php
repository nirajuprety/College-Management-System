<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/addwebnotes.css">

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
                        <li><a href="chooseSubject.php">Text Books</a> </li>
                        <li><a href="chooseSubject.php">Notes</a> </li>
                        <li><a href="faculties.html">Notices</a> </li>
                        <li><a href="gallery.html">Routines</a> </li>
                        <li><a href="gallery.html">Gallery</a> </li>
                        <li><a href="adminadmission.php">Admission</a> </li>


                    </ul>
                </div>
            </nav>
        </div>
        <div class="rightConatiner">
                <div class="adminsection">
                    <h1>Admin Page</h1>
                    <div class="adminimg">
                        <img src="img/icon-admin.png"> 
                    </div>
                
                </div>
                <div class="logoutdiv">
                    <a href="logout.php">Log Out</a>
                </div>
                <div class="logoutdiv">
                    Dashboard
                </div>
            <?php 
                // include("addwebnotesform.php")
            ?>
        </div>
        <div>
          
        </div>
    </div>
</body>

</html>