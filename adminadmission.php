<?php
    //  session_start(); 
    //  if(!isset($_SESSION['username'])){
    //      header('location:login.html');
    //      // include('whyus.php');
    //  }   

    // include('adminSidebar.php');
    include('adminadmissionlogic.php');
?>
     
     <?php 
        include('adminSidebar.php');
     ?> 

<!DOCTYPE html>
<html>

<head>
    <title>
        Student Admission Details
    </title>
    <link rel="stylesheet" href="css/addwebnotes.css">

</head>

<body>
    <div class="rowDisplay">
        <table>
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Address</th>
                <th>District</th>
                <th>Province</th>
                <th>Country</th>
                <th>Class X Board</th>
                <th>Class X Percentage</th>
                <th>Class X Passed Year</th>
                <th>Class XI & XII Board</th>
                <th>Class XI & XII Percentage</th>
                <th>Class XI & XII Passed Year</th>
                <th>Course selected</th>
                <th>Action</th>


            </thead>
            <tbody>
                <?php foreach($files as $file): ?>
                <tr>
                    <td><?php echo $file['id']; ?></td>
                    <td><?php echo $file['firstname']; ?></td>
                    <td><?php echo $file['lastname']; ?></td>
                    <td><?php echo $file['dob']; ?></td>
                    <td><?php echo $file['email']; ?></td>
                    <td><?php echo $file['mobile']; ?></td>
                    <td><?php echo $file['gender']; ?></td>
                    <td><?php echo $file['address']; ?></td>
                    <td><?php echo $file['district']; ?></td>
                    <td><?php echo $file['province']; ?></td>
                    <td><?php echo $file['country']; ?></td>
                    <td><?php echo $file['Xboard']; ?></td>
                    <td><?php echo $file['Xpercent']; ?></td>
                    <td><?php echo $file['Xyear']; ?></td>
                    <td><?php echo $file['XIboard']; ?></td>
                    <td><?php echo $file['XIpercent']; ?></td>
                    <td><?php echo $file['XIyear']; ?></td>
                    <td><?php echo $file['courses']; ?></td>
                    <td>
                        <a href="admissiondelete.php?id=<?php echo $file["id"]; ?>">Delete</a>
                    </td>

                    
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>
</html>