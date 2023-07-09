<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $user ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Phone No :");
    fwrite($file, $phoneno ."\n");
    fwrite($file,"Query :");
    fwrite($file, $query ."\n");
    fclose($file);
    header("location: testing.php");
?>