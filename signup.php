<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/signupCopy.css">
    <script src="js/signup.js"></script>

    <title>Sign UP</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body style="background-image: url('img/background.jpg');">
    <div class="flexDiv">
        <div class="Container">
            <a href="homepage.html"><img src="img/logo.png"></a>
            <h1>College Space</h1>
        </div>
        <div class="nextContainer">
            <?php
                $errFname =$errLname= $errUname =$errMail = $errPassword=$errcPassword=""; 

            ?>
            <form action="signupInfo.php" method="POST" onsubmit="return validate()">
                <div class="login_box">
                    <h1>Sign Up</h1>
                    <div class="email">
                        <input type="text" name="username" id="username" placeholder="Username" required>
                        <span class="error">    <?php echo $errUname; ?><br></span>
                    </div>
                    
                    <div class="email">
                        <input type="email" name="email" id="email" placeholder="Email address" required>
                        <span class="error"><?php echo $errMail; ?><br></span>

                    </div>
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <span class="error"><?php echo $errPassword; ?><br></span>

                    </div>
                    <div class="password">
                        <input type="password" name="cpassword" id="confirmpassword" placeholder="Confirm Password" required>
                        <span class="error"><?php echo $errcPassword; ?><br></span>

                    </div>
                    <div class="buttons">
                        <div class="btn">
                            <input type="submit" name="submit" value="Next">
                        </div>
                        <div class="reset">
                            <input type="reset" name="" value="Reset">
                        </div>
                        <div class="back-button">
                            <a class="bbutton" href="homepage.html">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>