<?php
    //  session_start(); 
    //  if(!isset($_SESSION['username'])){
    //      header('location:login.html');
    //      // include('whyus.php');
    //  }   

    // include('adminSidebar.php');
    include('fileLogic.php');
?>
     
     <?php 
        include('adminSidebar.php');
     ?> 

<!DOCTYPE html>
<html>

<head>
    <title>
        Notes
    </title>
    <link rel="stylesheet" href="css/addwebnotes.css">

</head>

<body>
    <div class="divform">
   

        <form action="addwebnotesform.php" method="post" enctype="multipart/form-data">
        <div class="divSelectTitle">
                       <span class="uptext">Add Notes</span>, <span class="uptext">Text Books</span>, <span class="uptext">Results</span>, <span class="uptext">Notices</span>, <span class="uptext">Routines</span>
                </div>   
        <div class="grid-container">
                
                <div class="choosefile">
                    select data:
                    <div class="choosefile-input">
                          <input type="file" name="myfiles">

                    </div>
                </div>
                <div class="addDescription">
                    <textarea rows="5" cols="50" name="title" placeholder="add description"></textarea>

                </div>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="rowDisplay">
        <table>
            <thead>
                <th>ID</th>
                <th>Filename</th>
                <th>Size(mb)</th>
                <th>Download</th>
                <th>Action</th>
                <th>operation</th>
            </thead>
            <tbody>
                <?php foreach($files as $file): ?>
                <tr>
                    <td><?php echo $file['id']; ?></td>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo $file['size']/1000 . "KB" ; ?></td>
                    <td><?php echo $file['download']; ?></td>
                    <td class="table-button-dow">
                        <a href="addwebnotesform.php?file_id=<?php echo$file['id']?>">Download</a>
                    </td>
                    <td class="table-button-del">
                        <a href="filedelete.php?id=<?php echo $file["id"]; ?>">Delete</a>
                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>
</html>