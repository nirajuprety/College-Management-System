<?php
    session_start();
    if(isset($_SESSION['username'])){
        session_destroy();
        echo "<script> location.href = 'login.html'</script>";
    }
    else{
        echo "<script> location.href = 'login.html'</script>";
    }
    // session_destroy($_SESSION['Username']);
    // session_unset( $_SESSION['Username']);
    // header('location:login.html')
    
?>