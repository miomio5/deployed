<?php
if(isset($_POST['otp'])){
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

  $otp= $_POST['otp'];

  $sql = "SELECT * FROM `otp`";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if($row['otp']==$otp){
    echo "<div style='color:white'>
    <h2>YOU ARE LOGGED IN</h2>
    </div>
    <div style='color:white'>
  <a href='website.php'><h2>GO TO HOMEPAGE</h2></a>
</div>";
    // header("Location: website.php");
  }
  else {
    echo "<div style='color:white'>
    <h2>WRONG OTP</h2>
    </div>
    <div style='color:white'>
  <a href='login.php'><h2>Resend OTP from LOGIN-PAGE</h2></a>
</div>";
    // header("Location: login.php");
  }

  $conn->close();
}
 ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <!-- <link rel="stylesheet" href="contactus.css"> -->
    <link rel="stylesheet" href="checkout.css">
  <title>Document</title>
</head> 
<body>
  <div class="box">
    <h2>Erazer OTP</h2>

    <form action="otppage.php" method="POST">
      <div class="input-box">
        <input type="text" name="otp"  autocomplete="off" required>
        <label for="">OTP</label>
      </div>
        <input type="submit" value="Save">
    </form>
  </div>
</body>
</html>