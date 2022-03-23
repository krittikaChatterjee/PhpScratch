<?php 
    session_start();
    //deleting perticular session
   // unset($_SESSION['USER']);
    //deleting all session
    session_destroy();

    echo "<script>
    alert('You have Successfully Logged Out !');
    window.location.href='index.php';            
    </script>";
?>