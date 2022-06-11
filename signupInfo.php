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
   mysqli_select_db($conn, 'collegespace');
   $username=$email=$password=$cpassword='';
   $errUname=$errMail = $errPassword=$errcPassword=""; 
  
   if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    if(empty($username)){
        $errUname = "Last Name is blank"."<br>";
    }
    else{
        // echo $username;
    }
    echo "<br>";
    if(empty($email)){
    $errMail = "email is blank"."<br>";
}
else{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
    // echo $email;
    }
    else{
        $errMail = "email is not in proper format"."<br>";
    }
}

if(empty($password)){
    $errPassword = "Password is blank"."<br>";
}
else{
    // echo $password;
}
echo "<br>";
echo "<br>";
if(empty($cpassword)){
    $errcPassword = "Password is blank"."<br>";
}
else if($password != $cpassword)
{
echo "password doesn't match!";
}
else{
    // echo $cpassword;
}
echo "<br>";
echo "<br>";

}

$sql = "INSERT INTO signup( username,email, password, c_password	)
VALUES ('$username','$email','$password','$cpassword')";
// 
if(mysqli_query($conn, $sql)){
//    echo "new record created successfully";
include('Successlogin.html');

}
else{
   echo "Error :".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>
