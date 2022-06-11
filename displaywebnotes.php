<?php
$conn=mysqli_connect('localhost','root','','collegespace');
$sql = "SELECT * FROM notes";
$res = mysqli_query($conn, $sql);
$data = [];
if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
		array_unshift($data, $row);		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>notes</title>
    <link rel="stylesheet" href="displaywebnotes.css">
    <style>
        .displayDiv {
            width: 90%;
            display: grid;
            justify-content: center;
            align-items: center;
            text-align: center;
          padding: 2.5%;
            background-color: rgb(241, 241, 241);
        }
    </style>
</head>
<body>
  
    <div class="displayDiv">
     <?php
      foreach ($data as  $d) {
			?> 
            <div class="notes">
               <a href="<?php echo $d['myfiles'];?>" download><?php echo $d['myfiles'];?></a>  
            </div>   
            <?php
      }
      ?>
    
 </div>

</body>
</html>