<?php
    include("connectdb.php");

$sql="SELECT * FROM admission";
$result = mysqli_query($conn,$sql);
$files = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>