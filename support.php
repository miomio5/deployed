<?php
    if(isset($_POST['user'])){
    
    // Set connection variables
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
    $name = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phoneno'];
    $query = $_POST['query'];
    
    $sql = "INSERT INTO `user data` (`user`, `email`, `phoneno`, `query`,`Timestamp`) VALUES ('$name', '$email', '$phone', '$query', current_timestamp());";

    // Run the query
    mysqli_query($conn,$sql);

    // Close the database connection
    $conn->close();


    // Mailing 
    $sub = "ThankYou for Reaching Out to us";
    $msg = "Hi $name,
    Thanks for getting in touch! This is an automatic response to let you know that we’ve received your message and one of our service agents will reach out to you ASAP. It might take a little longer on weekends.

    For any general questions about (product/service), you can head to our (knowledgebase) for guides and FAQs.

    Please feel free to send us a reply to this email if you have any extra details that can help us assist you. 
        
    We’re looking forward to hearing from you! 
        
    Regards";

    mail($email,$sub,$msg);
  }
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Support </title>
    <link rel="stylesheet" href="support.css" media="screen">
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="checkout.css">
</head>

<body>
    <img src="bg.jpg" id="image">
    <h1 id="a"> Welcome to E-Razer Support </h1>
    <h1 id="b"> We stride to help you </h1>
    <div class="social-media">
        <a class="gtm_external_link" title="Facebook" href="https://www.facebook.com" id="img">
            <figure class="icon icon-facebook">
                <img src="https://assets2.razerzone.com/images/phoenix/SM0001-facebook.svg" alt="" class="img">
            </figure>
        </a>
        <a href="https://www.instagram.com" title="Instagram" class="gtm_external_link">
            <figure class="icon icon-instagram">
                <img src="https://assets2.razerzone.com/images/phoenix/SM0003-instagram.svg" alt="" class="img">
            </figure>
        </a>
        <a class="gtm_external_link" title="Twitter" href="https://www.twitter.com">
            <figure class="icon icon-twitter">
                <img src="https://assets2.razerzone.com/images/phoenix/SM0005-twitter.svg" alt="" class="img">
            </figure>
        </a>
    </div>

    <ul class="basic">

        <li class="basicli">
            <a href="/pc">
                <div class="img-container"><img src="https://assets.razerzone.com/support/images/new/svg/laptops.svg"
                        alt=""></div>
                <p class="text-center">PC</p>
            </a>
        </li>

        <li class="basicli">
            <a href="/console">
                <div class="img-container"><img src="https://assets.razerzone.com/support/images/new/svg/console.svg"
                        alt="" style="width: unset"></div>
                <p class="text-center">Console</p>
            </a>
        </li>

        <li class="basicli">
            <a href="/mobile">
                <div class="img-container"><img src="https://assets.razerzone.com/support/images/new/svg/mobile.svg"
                        alt=""></div>
                <p class="text-center">Mobile</p>
            </a>
        </li>

        <li class="basicli">
            <a href="/lifestyle">
                <div class="img-container"><img src="https://assets.razerzone.com/support/images/new/svg/chairs.svg"
                        alt=""></div>
                <p class="text-center">Lifestyle</p>
            </a>
        </li>

        <li class="basicli">
            <a href="/services">
                <div class="img-container"><img
                        src="https://assets2.razerzone.com/images/main-menu/icons/icon-razerid.svg" alt=""></div>
                <p class="text-center">Services</p>
            </a>
        </li>

        <li class="basicli">
            <a href="https://www.razer.com/shop/replacement-parts/replacement-parts-audio">
                <div class="img-container"><img
                        src="https://assets.razerzone.com/support/images/new/svg/replacement-parts-75x75.svg" alt="">
                </div>
                <p class="text-center">Replacement Parts</p>
            </a>
        </li>
    </ul>
    <!---------------------------------------------------------------------------------  -->
    <h2 id='contact'>Contact Us</h2>
    <div id="contactusbox" class="box">
        <form action="support.php" method="POST">
            <div class="input-box">
                <input type="text" name="user" autocomplete="off" required>
                <label for="">Name</label>
            </div>

            <div class="input-box">
                <input type="email" name="email" autocomplete="off" required>
                <label for="">Email</label>
            </div>

            <div class="input-box">
                <input type="phoneno" name="phoneno" autocomplete="off" required>
                <label for="">Phone Number</label>
            </div>

            <div class="input-box">
                <input type="query" name="query" autocomplete="off" required>
                <label for="">Query</label>
            </div>
            <input type="submit" value="Submit">

        </form>

    </div>

    <br>
    <div class="list-1">
        <h2>Popular Support Videos</h2>
        <!-- <div class="list-1"> -->
        <ul class="list_1">
            <li><a href="">Set up the Razer
                    PWM PC Fan Controller</a></li>
            <li><a href="">Install the
                    Razer Kunai Hydraulic Chroma case fans</a></li>
            <li><a href="">Fix Razer
                    Synapse when it does not start</a></li>
            <li><a href="">Troubleshoot and
                    resolve headset mic issues</a></li>
            <li><a href="">Detect Razer
                    devices in Synapse 3</a></li>
        </ul>
        <!-- </div> -->
    </div>
    <div class="list-2">
        <h2>Popular Support Topics</h2>
        <!-- <div class="list-1"> -->
        <ul class="list_2">
            <li><a href="">Razer
                    ID FAQs</a></li>
            <li><a href="">Razer
                    Synapse 3 FAQs</a></li>
            <li><a href="">How
                    to activate and use 7.1 Surround Sound</a></li>
            <li><a href="">Firmware
                    updates for Razer Peripherals</a></li>
            <li><a href="">Device
                    is not detected by Razer Synapse</a></li>
        </ul>
        <!-- </div> -->
    </div>
</body>

</html>