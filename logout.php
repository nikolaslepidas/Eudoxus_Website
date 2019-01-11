<?php
    session_start();
    if(session_destroy()) {     // Destroying All Sessions
        //echo $_SESSION['logged_user'];
        header("Location: index.php");      // Redirecting To Home Page
    }
?>