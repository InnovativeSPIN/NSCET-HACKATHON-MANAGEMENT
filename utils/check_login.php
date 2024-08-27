<?php
    if (isset($_SESSION['user_id']) && isset($_SESSION['role'])) 
    {
        $user_id = $_SESSION['user_id'];
    }
    else
    {
        header("Location:../login.php");
    }
?>