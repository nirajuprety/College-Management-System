
<?php
    // session is not working
    session_start(); 
    if(!isset($_SESSION['username'])){
        header('location:login.html');
        // include('whyus.php');
    }   


?>
<!-- for side bar -->
<?php
include('adminSidebar.php');
?>
<!-- for database connection -->
<?php
    include('connectdb.php');

?>

<!-- getting value -->
<!-- file logic -->
<?php

// for displaying files


mysqli_select_db($conn, 'collegespace');
$myfiles=$title='';
// for uploadding files
if(isset($_POST["submit"])){
 $myfiles = $_FILES['myfiles']['name'];
 $destination = 'files/notes/uploaded' .$myfiles;
 $extension = pathinfo($myfiles, PATHINFO_EXTENSION);
 $file =$_FILES['myfiles']['tmp_name'];
 $size = $_FILES['myfiles']['size'];

 if(!in_array($extension,['zip','png','jpeg','jpg','pdf'])){
    echo "your extension should be in zip, png, jpeg, jpg, pdf";

 }
 else if($_FILES['myfiles']['size']>1000000){
    echo "your file size is too large";
 }
 else{
     if(move_uploaded_file($file,$destination)){
         $sql= "INSERT INTO notes(name, size, downloads)
         VALUES('$myfiles','$size', 0)";

         if(mysqli_query($conn,$sql )){
             echo "file uploaded succesfully";
         }
         else{
             echo "failed to upload";
         }
     }
 }

if(isset($_GET['file_id'])){
    $id = $_GET['file_id'];
    $sql = "SELECT * FROM files WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $file = mysqli_fetch_assoc($result);
    $filepath   ='files/notes/uploaded' .$file['name'];
    
    if(file_exists($filepath)){
        header('Content-Type:application/octet-stream');
        header('Content-Description: File Teansfer');
        header('Content-Disposition: attachment; filename='.basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma:public');
        header('Content-Length:' .filesize('files/notes/uploaded'.$file['name']));
        readfile('files/notes/uploaded' .$file['name']);

        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE notes SET downloads = $newCount WHERE id =$id";

        mysqli_query($conn,$updateQuery);
        exit;

    }
}

//  $title = $_POST["title"];
}                   
// inseting value in database
$sql = "INSERT INTO notes( myfiles,title)
VALUES ('$myfiles','$title')";

// for displaying data
if(mysqli_query($conn, $sql)){
        include('displaywebnotes.php');
    }
    else{
       echo "Error :".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
    


?>


</body>

</html>