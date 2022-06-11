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
   $fname=$lname=$dob=$email=$phone=$gender=$address=$city=$province=$country=$X_board=$X_percent=$X_year=$XI_board=$XI_percent=$XI_year=$courses='';
   $errfname=$errlname=$errdob=$erremail=$errphone=$errgender=$erraddress=$errcity=$errprovince=$errcountry=$errX_board=$errX_percent=$errX_year=$errXI_board=$errXI_percent=$errXI_year=$errcourses='';
  
   if(isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['date'];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $address = $_POST['address'];
    $city= $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $X_board = $_POST['X_board'];
    $X_percent= $_POST['X_percent'];
    $X_year= $_POST['X_year'];
    $XI_board = $_POST['XI_board'];
    $XI_percent = $_POST['XI_percent'];
    $XI_year = $_POST['XI_year'];
    $courses = $_POST['faculty'];
}

$sql = "INSERT INTO admission( firstname,lastname, dob, email, mobile, gender, address, district, province, country, Xboard, Xpercent, Xyear, XIboard, XIpercent, XIyear, courses)
VALUES ('$fname','$lname','$dob','$email','$phone','$gender','$address','$city','$province','$country','$X_board','$X_percent','$X_year','$XI_board','$XI_percent','$XI_year','$courses')";
// 
if(mysqli_query($conn, $sql)){
//    echo "new record created successfully";
    header('location:whyus.php');
}
else{
   echo "Error :".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>