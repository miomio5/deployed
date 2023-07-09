<?php
    if(isset($_POST['fullname'])){  
    // error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
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

    // Collect post variables
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $zip= $_POST['zip'];
    $cardname= $_POST['cardname'];
    $cardnumber= $_POST['cardnumber'];
    $expmonth= $_POST['expmonth'];
    $expyear= $_POST['expyear'];
    $cvv= $_POST['cvv'];
    
   echo "$cvv";
    $sql = "INSERT INTO `checkout` (`name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `Timestamp`) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$cardname',' $cardnumber', '$expmonth', '$expyear', '$cvv', current_timestamp());";

    // Run the query
    mysqli_query($conn,$sql);
    echo "Error";
    // Close the database connection
    $conn->close();


    // Mailing 
    $sub = "Your Order is placed successfully";
    $msg = "Hi $name,
    Thanks for ordering from ERAZER. This is an automatic response to let you know that we’ve received your order. Generally the order takes 4-5 days to reach. A follow up email will be sent once your order is shipped.

    Delivery Address: $address

    For any general questions about (product/service), you can head to our (knowledgebase) for guides and FAQs.

    Please feel free to send us a reply to this email if you have any extra details that can help us assist you.
        
    We’re looking forward to hearing from you! 
        
    Regards";

    mail($email,$sub,$msg);
    header("Location: checkout.php"); 
  }
?>