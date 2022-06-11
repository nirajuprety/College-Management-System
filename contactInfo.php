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
       $fname=$lname=$username=$email=$password=$cpassword='';
      
       if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            
            //inserting into database
            
            $sql = "INSERT INTO contactinfo(name,phone,email,message)
            VALUES ('$name','$phone' ,'$email','$message')";
            // 
            if(mysqli_query($conn, $sql)){
            //    echo "new record created successfully";
                include('whyus.php');
            
            }
            else{
               echo "Error :".$sql."<br>".mysqli_error($conn);
            }
            mysqli_close($conn);
       }     
?>