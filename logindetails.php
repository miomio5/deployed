<?php
    extract($_REQUEST);
    $file=fopen("logindetails.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: login.php");

    $OTP = rand(1000,9999);

    $sub = "OTP";
    $msg = "Hi $username,
The OTP for verification is: $OTP, your OTP is valid for three minutes.";

    mail($email,$sub,$msg);
    
 ?>