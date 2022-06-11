<?php 
 
include("connectdb.php");
// error_reporting(0);

// if(isset($_POST['delete'])){
//     $id = $_POST['id'];
//     $query = "DELETE DELETE FROM files WHERE id = ' $id'";
//     $query_run = mysqli_query($conn,$query);

//     if($query_run)
//     {
//         echo '<script>type="text/javascript"> alert("Data deleted")</script>';

//     }
//     else{
//         echo '<script>type="text/javascript"> alert("Data is not deleted")</script>';

//     }
// }





// $id = $_POST['id'];
// $sql = "DELETE DELETE FROM files WHERE id= ' $id'";

// $data = mysqli_query($conn,$sql);

// if($data)
// {
//     echo "record deleted from database";
// }
// else{
//     echo "Failed to delete data from database";
// }



$sql = "DELETE FROM files WHERE id='" . $_GET["id"] . "'";
 
    if (mysqli_query($conn, $sql)) {
 
        echo '<script>type="text/javascript"> alert("Data deleted")</script>';
    } else {
     
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
 
   
?>