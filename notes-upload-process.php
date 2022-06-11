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
   $myfiles=$title='';
  
   if(isset($_POST["submit"])){
    $myfiles = $_POST['myfile'];
    $title = $_POST["title"];
}
    echo "$myfiles";
    echo "$title";    
                      

$sql = "INSERT INTO notes( myfiles,title)
VALUES ('$myfiles','$title')";
// 
if(mysqli_query($conn, $sql)){
//    echo "new record created successfully";
    // echo "successfully";
    include('addwebnotes.php');
    // echo "$myfiles";
    // echo "$title";    
    
    // echo "<a href='$myfiles' download>Download file</a><br>";
    // echo "<span class='WTtext'>'$title'</span>";    
           
}
else{
   echo "Error :".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>