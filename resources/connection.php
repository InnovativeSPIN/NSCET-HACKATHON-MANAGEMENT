<?php
    session_start();

    // Comment this in Testing
    // $db_host = "localhost";
    // $db_user = "root";
    // $db_pass = "";
    // $db_name = "nscet_hackathon";

    // Uncomment this in production
    $db_host = "localhost";
    $db_user = "nscet_webadmin";
    $db_pass = "x}2^7Wk^H^.n";
    $db_name = "nscet_hackathon";

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(mysqli_connect_error())
    {
        header('location:404.php');
    }

    date_default_timezone_set('Asia/Calcutta'); 
    function siteURL() 
    {
        $protocol =((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        return $protocol.$domainName."/adminLTE/";
        
    }
    define("SITE_URL", siteURL());
?>