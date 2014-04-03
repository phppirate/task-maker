<?php
    session_start();
    
    $_SESSION = array();
    
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '' , time()-42000, '/');
    }
    
    session_destroy();
    $message = "You are now Logged out.";
    header("Location: login.php?message={$message}");
    exit;
?>