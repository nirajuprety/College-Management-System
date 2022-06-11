<?php 
 
include("connectdb.php");


$sql = "DELETE FROM admission WHERE id='" . $_GET["id"] . "'";
 
    if (mysqli_query($conn, $sql)) {
 
        echo '<script>type="text/javascript"> alert("Data deleted")</script>';
    } else {
     
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
 
   
?>