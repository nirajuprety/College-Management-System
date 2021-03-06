<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/webnotes.css">
    <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/addwebnotesC.css">



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
            <div class="grid-container">



                <!-- <a href="/notes/WT/WT_Unit-1.pdf" download>
                    <span class="WTtext">
                    Web Technology Unit 1 Handwritten notes 2078

                    </span>
                </a>
                <a href="/notes/WT/WT_Unit-2.pdf" download>
                    <span class="WTtext">
                    Web Technology Unit 2 Handwritten notes 2078

                    </span>
                </a>
                <a href="/notes/WT/WT_Unit-3.pdf" download>
                    <span class="WTtext">
                        Web Technology Unit 3 Handwritten notes 2078

                    </span>
                </a>
                <a href="/notes/WT/WT_Unit-4.pdf" download>
                    <span class="WTtext">
                        Web Technology Unit 4 Handwritten notes 2078

                    </span>
                </a>
                <a href="/notes/WT/WT_Unit-5.pdf" download>
                    <span class="WTtext">
                    Web Technology Unit 5 Handwritten notes 2078

                    </span>
                </a>
                <a href="/notes/WT/WT_Unit-6.pdf" download>
                    <span class="WTtext">
                    Web Technology Unit 6 Handwritten notes 2078

                    </span>
                </a> -->
                <!-- trying to fetch form database -->
                <?php
                    include('fileLogic.php');

                    include('connectdb.php');

                ?>
                <div class="rowDisplay">
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Filename</th>
                            <th>Size(mb)</th>
                            <th>Download</th>
                            <th>Action</th>
                            <th>operation</th>

                        </thead>
                        <tbody>
                            <?php foreach($files as $file): ?>
                            <tr>
                                <td><?php echo $file['id']; ?></td>
                                <td><?php echo $file['name']; ?></td>
                                <td><?php echo $file['size']/1000 . "KB" ; ?></td>
                                <td><?php echo $file['download']; ?></td>
                                <td class="table-button-dow">
                                    <a href="addwebnotesform.php?file_id=<?php echo$file['id']?>">Download</a>
                                </td>
                                <td class="table-button-del">
                                    <a href="filedelete.php?id=<?php echo $file["id"]; ?>">Delete</a>
                                </td>
                                        </tr>
                                
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

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
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="admission.php">Admission</a>
                    </li>
                    <li>
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