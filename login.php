<?php
    session_start();
?>
<?php
    
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
        
        if(isset($_POST['submit']))
            {
                
                if(!empty($_POST['username']) && !empty($_POST['password']))
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    
                    $sql = "SELECT * FROM signup where username = '$username'";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                    $_SESSION['username'] = $row['username'];
                                if($row['id'] == 18537 ){
                                    header('location:adminpannel.php');
                                }

                               else if($row['username'] == $username && $row['password'] == $password){
                                    $_SESSION['username'] = $username;
                                    if(isset($_SESSION['username'])){
                                        header('location:whyus.php');
                                        
                                    }
                                }
                                else{
                                    echo "Password or Username is not correct  " . mysqli_error($conn);   
                                    echo ' <a href="login.html">Click here</a>';
                                }

                                
                            }
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "No records matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);

                    
                    //=================================== 
                    // $username = mysqli_real_escape_string($conn, $_POST['username']);
                    // $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
                    // $checklogin = mysqli_query($conn, "SELECT * FROM signup WHERE username = '".$username."' AND password = '".$password."'");                    
                    // if(mysqli_num_rows($checklogin) == 1)
                    // {

                    //     $row = mysqli_fetch_array($checklogin);
                    //     $username = $row['username'];
                    //     $email = $row['email'];
                    //     $fname = $row['fname'];
                    //     $lname = $row['lname'];

                    //     $_SESSION['Username'] = $username;
                    //     $_SESSION['Email'] = $email;
                    //     $_SESSION['Fname'] = $name;
                    //     $_SESSION['Lname'] = $lname;
                    //     $_SESSION['LoggedIn'] = 1;

                    //     header('location: whyus.php');
                    //     include('whyus.php');
                    // }
                    // else
                    // {
                    //     $feedback= "<p>Your account was not found, please try again.</p>";
                    // }        
                } 
                else{
                    header('location:login.html');
                }
                // else 
                // {   
                //     $feedback= "<p>Please fill in all the blank areas.</p>";
                // }
        
             }

    ?>
