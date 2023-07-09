<?php
if(isset($_POST['user'])){
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
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
    
    $OTP = rand(1000,9999);

    $name = $_POST['user'];
    $email = $_POST['email'];
    $pass= $_POST['password'];

    $sub = "OTP";
    $msg = "Hi $name,
The OTP for verification is: $OTP, your OTP is valid for three minutes.";

  mail($email,$sub,$msg);

  $sql = "DELETE FROM `otp`;";  
  $result=mysqli_query($conn,$sql);

  $sql="INSERT INTO `otp` (`otp`) VALUES ('$OTP');";
  $result=mysqli_query($conn,$sql);

  header("Location: otppage.php");

}
 ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <title>Document</title>
</head> 
<body>
  <div class="box">
    <h2>Erazer Login</h2>
    <form action="login.php" method="POST">
      <div class="input-box">
        <input type="text" name="user"  autocomplete="off" required>
        <label for="">Username</label>
      </div>
      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Password</label>
      </div>
      <input type="submit" value="Save">
      <br>
      <br>
      <a href="otppage.php" style="text-decoration:none;color:white;background-color:black">OTP PAGE</a>
    </form>
  </div>
</body>
</html>