<?php // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "contact us";

    // Create a database connection
    $conn = mysqli_connect($server, $username, $password,$database);

    // Check for connection success
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    if(isset($_POST['button1'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 1";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button2'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 2";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button3'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 3";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button4'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 4";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button5'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 5";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button6'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 6";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button7'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 7";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button8'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 8";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['button9'])){
        $sql="DELETE FROM `serial` WHERE `serial`.`sno` = 9";
        $result = mysqli_query($conn, $sql);
    }
    
    header("Location: cartpage.php"); 
?>