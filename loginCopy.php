<?php

session_start();

$servername = "localhost";
        $username = "root";
        $password ="";
        $dbname = "collegespace";
        //  create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // check connection
        if(!$conn){
        die("connection failed".mysqli_connect_error());
        }


if(isset($_POST['username']))
    {

if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

     $checklogin = mysqli_query($conn, "SELECT * FROM signup WHERE username = '".$username."' AND password = '".$password."'");

    if(mysqli_num_rows($checklogin) == 1)
    {
        $row = mysqli_fetch_array($checklogin);
        $username = $row['username'];
        $email = $row['email'];
        $fname = $row['fname'];
        $lname = $row['lname'];

        $_SESSION['Username'] = $username;
        $_SESSION['Email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['LoggedIn'] = 1;

        header('location: whyus.php');
    }
    else
    {
        $feedback= "<p>Your account was not found, please try again.</p>";
    }        
} else 
{   
    $feedback= "<p>Please fill in all the blank areas.</p>";
}
    }

?>

<article>
                <?php if(isset($feedback)): ?> <!-- BEGIN FEEDBACK -->
                    <div id="feedback">
                <?php echo $feedback ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2>Login</h2>

                    <table><tr>
                        <td>Username:</td>
                        <td><input size="10%" id="username" class="form-text" name="username"type="text"/></td></tr>
                    <tr>
                        <td>Password:</td>
                        <td><input size="10%" id="password" class="form-text" name="password" type="password"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="loginknop" type="submit" value="Login" />
                        <a href="signup.php">No account? Click here!</a></td>
                    </tr></table>
                </form>
    </article>

 